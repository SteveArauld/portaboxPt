<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

/**
 * Contrôle les flux Merchant avant soumission.
 *
 *   php artisan feeds:check
 *   php artisan feeds:check --base=http://127.0.0.1:8000
 *   php artisan feeds:check --links=20
 *
 * Deux vérifications :
 *   1. stabilité — deux appels successifs doivent rendre le même octet ;
 *   2. cohérence langue/URL — chaque <link> doit répondre 200 et servir la
 *      page dans la langue du flux.
 */
class CheckProductFeeds extends Command
{
    protected $signature = 'feeds:check
        {--base= : Origine à interroger (défaut : config feeds.base_url)}
        {--links=10 : Nombre de liens produits à tester par flux (0 = tous)}
        {--feed=* : Limiter à certaines langues (défaut : toutes)}';

    protected $description = 'Vérifie la stabilité et la cohérence linguistique des flux Merchant';

    /**
     * Marqueurs propres à chaque langue, cherchés dans la page produit.
     * Ce sont les libellés du bloc prix, présents sur toute fiche.
     */
    private const MARKERS = [
        'pt' => ['IVA incluído', 'Adicionar ao carrinho'],
        'en' => ['incl. VAT', 'Add to cart'],
        'es' => ['IVA incluido', 'Añadir al carrito'],
        'fr' => ['TVA incluse', 'Ajouter au panier'],
        'it' => ['IVA inclusa', 'Aggiungi al carrello'],
        'de' => ['inkl. MwSt.', 'In den Warenkorb'],
    ];

    /**
     * Mots typiques de chaque langue, cherchés dans les AUTRES flux.
     * Volontairement discriminants : « container » existe dans plusieurs
     * langues, « Kühlcontainer » ou « Contentores » non.
     */
    private const FOREIGN = [
        'pt' => ['Contentor', 'Contentores', 'IVA incluído', 'Dimensões'],
        'en' => ['Dimensions at', 'incl. VAT', 'Add to cart'],
        'es' => ['Contenedor', 'Dimensiones', 'IVA incluido'],
        'fr' => ['Conteneur', 'Dimensions au', 'TVA incluse'],
        'it' => ['Dimensioni al', 'IVA inclusa', 'Container frigorifero'],
        'de' => ['Abmessungen am', 'inkl. MwSt', 'Kühlcontainer', 'Banküberweisung'],
    ];

    public function handle(): int
    {
        $base = rtrim($this->option('base') ?: config('feeds.base_url'), '/');
        $failures = 0;

        $feeds = $this->option('feed') ?: array_keys(config('feeds.feeds'));

        foreach ($feeds as $feed) {
            $url = "{$base}/feed/google-{$feed}.xml";

            $this->newLine();
            $this->line("=== Flux {$feed} : {$url} ===");

            $first = $this->fetch($url);

            if ($first === null) {
                $failures++;
                continue;
            }

            $failures += $this->checkStability($url, $first);
            $failures += $this->checkContentType($first);
            $failures += $this->checkPurity($first['body'], $feed);
            $failures += $this->checkLinks($first['body'], $feed);
        }

        $this->newLine();

        if ($failures > 0) {
            $this->error("{$failures} anomalie(s). Ne pas soumettre en l'état.");
            return self::FAILURE;
        }

        $this->info('Tous les flux sont stables et cohérents.');

        return self::SUCCESS;
    }

    private function fetch(string $url): ?array
    {
        try {
            $response = Http::timeout(120)->withoutRedirecting()->get($url);
        } catch (\Throwable $e) {
            $this->error('  Injoignable : ' . $e->getMessage());
            return null;
        }

        if ($response->status() !== 200) {
            $this->error('  HTTP ' . $response->status() . ' (200 attendu)');
            return null;
        }

        return [
            'body' => $response->body(),
            'type' => $response->header('Content-Type'),
        ];
    }

    /**
     * 1. Deux appels successifs doivent rendre un XML identique.
     */
    private function checkStability(string $url, array $first): int
    {
        $second = $this->fetch($url);

        if ($second === null) {
            return 1;
        }

        if ($first['body'] !== $second['body']) {
            $this->error('  INSTABLE : les deux appels diffèrent');
            $this->line('    appel 1 : ' . strlen($first['body']) . ' octets, sha256 ' . substr(hash('sha256', $first['body']), 0, 16));
            $this->line('    appel 2 : ' . strlen($second['body']) . ' octets, sha256 ' . substr(hash('sha256', $second['body']), 0, 16));
            $this->line('    ' . $this->firstDifference($first['body'], $second['body']));

            return 1;
        }

        $items = substr_count($first['body'], '<item>');
        $this->info('  Stable  : ' . strlen($first['body']) . " octets, {$items} produits, identique sur deux appels");

        return 0;
    }

    private function checkContentType(array $response): int
    {
        if (!str_contains((string) $response['type'], 'application/xml')) {
            $this->error('  Content-Type inattendu : ' . $response['type']);
            return 1;
        }

        return 0;
    }

    /**
     * Aucun texte d'une autre langue ne doit figurer dans le flux.
     *
     * Seuls les champs que Google lit comme du texte sont examinés :
     * title, description et g:product_type des items. Les URLs sont
     * exclues — un nom de fichier image hérité du catalogue espagnol
     * (« Contenedor-Maritimo-10-Pies.jpg ») n'est pas du contenu — et
     * l'en-tête du canal aussi, la raison sociale « Azinheira Contentores »
     * devant apparaître telle quelle dans toutes les langues.
     */
    private function checkPurity(string $xml, string $feed): int
    {
        $text = '';

        preg_match_all('#<item>(.*?)</item>#s', $xml, $items);

        foreach ($items[1] as $item) {
            foreach (['title', 'description', 'g:product_type'] as $field) {
                if (preg_match('#<' . $field . '>(.*?)</' . $field . '>#s', $item, $m)) {
                    $text .= $m[1] . "\n";
                }
            }
        }

        $hits = [];

        foreach (self::FOREIGN as $lang => $needles) {
            if ($lang === $feed) {
                continue;
            }

            foreach ($needles as $needle) {
                $n = substr_count($text, $needle);
                if ($n > 0) {
                    $hits[] = "[{$lang}] {$needle} ×{$n}";
                }
            }
        }

        if ($hits !== []) {
            $this->error('  Texte d\'une autre langue : ' . implode(', ', $hits));
            return 1;
        }

        $this->info('  Langue  : aucun texte étranger détecté');

        return 0;
    }

    /**
     * 2. Chaque <link> répond 200, sans redirection, dans la bonne langue.
     */
    private function checkLinks(string $xml, string $feed): int
    {
        preg_match_all('#<link>([^<]+)</link>#', $xml, $m);

        // Le premier <link> est celui du canal, pas un produit.
        $links = array_slice($m[1], 1);

        if ($links === []) {
            $this->error('  Aucun lien produit dans le flux');
            return 1;
        }

        $limit = (int) $this->option('links');
        $sample = $limit > 0 ? array_slice($links, 0, $limit) : $links;

        $bad = 0;

        foreach ($sample as $link) {
            $url = html_entity_decode($link, ENT_QUOTES | ENT_XML1, 'UTF-8');

            try {
                $page = Http::timeout(60)->withoutRedirecting()->get($url);
            } catch (\Throwable $e) {
                $this->error('    injoignable ' . $url);
                $bad++;
                continue;
            }

            if ($page->status() !== 200) {
                $this->error('    HTTP ' . $page->status() . ' ' . $url);
                $bad++;
                continue;
            }

            $body = $page->body();

            // La page doit s'annoncer dans la langue du flux…
            if (!preg_match('/<html[^>]*\slang="' . $feed . '"/i', $body)) {
                $this->error('    <html lang> incorrect ' . $url);
                $bad++;
                continue;
            }

            // …et en porter les marqueurs visibles.
            $found = false;
            foreach (self::MARKERS[$feed] as $marker) {
                if (str_contains($body, $marker)) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $this->error('    marqueur de langue absent ' . $url);
                $bad++;
            }
        }

        if ($bad > 0) {
            $this->error("  Liens   : {$bad}/" . count($sample) . ' en échec');
            return 1;
        }

        $this->info('  Liens   : ' . count($sample) . '/' . count($links) . ' testés, tous en 200 et dans la bonne langue');

        return 0;
    }

    private function firstDifference(string $a, string $b): string
    {
        $len = min(strlen($a), strlen($b));

        for ($i = 0; $i < $len; $i++) {
            if ($a[$i] !== $b[$i]) {
                return 'première divergence à l\'octet ' . $i . ' : '
                    . json_encode(substr($a, max(0, $i - 40), 80))
                    . ' vs '
                    . json_encode(substr($b, max(0, $i - 40), 80));
            }
        }

        return 'contenus identiques jusqu\'à l\'octet ' . $len . ', longueurs différentes';
    }
}
