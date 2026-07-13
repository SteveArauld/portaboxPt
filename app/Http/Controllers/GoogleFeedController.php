<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class GoogleFeedController extends Controller
{
    /**
     * Langue utilisée pour le flux. Ordre de repli si vide : locale -> 'it' -> 'pt' -> 'en' -> première dispo.
     */
    private string $locale = 'pt';
    private string $currency = 'EUR';
    private string $defaultBrand = 'Porto Contentores';

    /**
     * Génère le flux et le retourne directement dans le navigateur (téléchargement).
     * C'est la méthode à appeler depuis la route.
     */
    public function download(): Response
    {
        $xml = $this->generateXml();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8')
            ->header('Content-Disposition', 'attachment; filename="google-merchant-feed.xml"');
    }

    /**
     * Génère le flux et l'affiche dans le navigateur (inline).
     * Utile pour voir le XML sans le télécharger.
     */
    public function generate(): Response
    {
        $xml = $this->generateXml();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    /**
     * Construit le XML et le retourne sous forme de chaîne.
     */
    private function generateXml(): string
    {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $rss = $dom->createElement('rss');
        $rss->setAttribute('version', '2.0');
        $rss->setAttribute('xmlns:g', 'http://base.google.com/ns/1.0');
        $dom->appendChild($rss);

        $channel = $dom->createElement('channel');
        $rss->appendChild($channel);

        $titleNode = $dom->createElement('title');
        $titleNode->appendChild($this->cdata($dom, config('app.name')));
        $channel->appendChild($titleNode);

        $channel->appendChild($dom->createElement('link', config('app.url')));

        $descNode = $dom->createElement('description');
        $descNode->appendChild($this->cdata($dom, 'Catalogo prodotti'));
        $channel->appendChild($descNode);

        $skipped = [];

        Article::with(['category', 'images' => function ($q) {
            $q->orderBy('position');
        }])
            ->chunk(200, function ($articles) use ($dom, $channel, &$skipped) {
                foreach ($articles as $article) {
                    try {
                        $item = $this->buildItem($dom, $article, $skipped);
                        $channel->appendChild($item);
                    } catch (\Throwable $e) {
                        $skipped[] = $article->id . ' (' . $e->getMessage() . ')';
                        Log::warning('GoogleFeed: produit ignoré à cause d\'une erreur', [
                            'sku' => $article->id,
                            'error' => $e->getMessage(),
                        ]);
                    }
                }
            });

        if (!empty($skipped)) {
            Log::warning('GoogleFeed: produits avec champs incomplets', ['skus' => $skipped]);
        }

        return $dom->saveXML();
    }

    private function buildItem(\DOMDocument $dom, Article $article, array &$skipped): \DOMElement
    {
        $item = $dom->createElement('item');

        $name = $this->translate($article, 'name') ?? '';
        $description = $this->translate($article, 'description')
            ?? $this->translate($article, 'short_description')
            ?? $name;

        if (trim($name) === '') {
            $name = 'Produit ' . $article->id;
            $skipped[] = $article->id . ' (title vide, fallback utilisé)';
        }
        if (trim(strip_tags((string) $description)) === '') {
            $description = $name;
            $skipped[] = $article->id . ' (description vide, fallback utilisé)';
        }

        $description = strip_tags($description);

        $this->appendG($dom, $item, 'id', $article->id);
        $this->appendG($dom, $item, 'title', $name, true);
        $this->appendG($dom, $item, 'description', $description, true);
        $this->appendG($dom, $item, 'link', route('product.show', $article->slug));

        $images = $article->images;
        if ($images->isNotEmpty()) {
            $this->appendG($dom, $item, 'image_link', $this->imageUrl($images->first()->image_path));
            foreach ($images->skip(1)->take(10) as $image) {
                $this->appendG($dom, $item, 'additional_image_link', $this->imageUrl($image->image_path));
            }
        } else {
            $skipped[] = $article->id . ' (aucune image - image_link manquant, Google va rejeter cette ligne)';
        }

        $availability = $article->stock > 0 ? 'in_stock' : 'out_of_stock';
        $this->appendG($dom, $item, 'availability', $availability);

        if ($article->old_price && $article->old_price > $article->price) {
            $this->appendG($dom, $item, 'price', number_format($article->old_price, 2, '.', '') . ' ' . $this->currency);
            $this->appendG($dom, $item, 'sale_price', number_format($article->price, 2, '.', '') . ' ' . $this->currency);
        } else {
            $this->appendG($dom, $item, 'price', number_format($article->price, 2, '.', '') . ' ' . $this->currency);
        }

        $this->appendG($dom, $item, 'unit_pricing_measure', '1 piece');
        $this->appendG($dom, $item, 'unit_pricing_base_measure', '1 piece');

        $this->appendG($dom, $item, 'condition', $article->condition ?? 'new');

        $brand = $article->brand ?? $this->defaultBrand;
        $mpn = $article->mpn ?? $article->id;
        $gtin = $article->gtin ?? null;

        if ($brand && ($mpn || $gtin)) {
            $this->appendG($dom, $item, 'brand', $brand, true);
            if ($gtin) {
                $this->appendG($dom, $item, 'gtin', $gtin);
            }
            if ($mpn) {
                $this->appendG($dom, $item, 'mpn', $mpn);
            }
        } else {
            $this->appendG($dom, $item, 'identifier_exists', 'no');
        }

        if ($article->category) {
            $categoryName = $this->translate($article, 'category.name');
            if ($categoryName) {
                $this->appendG($dom, $item, 'product_type', $categoryName, true);
            }
        }

        $this->appendG($dom, $item, 'excluded_destination', 'free_local_listings local_inventory_ads');

        return $item;
    }

    private function appendG(\DOMDocument $dom, \DOMElement $item, string $tag, ?string $value, bool $cdata = false): void
    {
        if ($value === null || trim($value) === '') {
            return;
        }

        $node = $dom->createElement('g:' . $tag);

        if ($cdata) {
            $node->appendChild($this->cdata($dom, $value));
        } else {
            $node->appendChild($dom->createTextNode($value));
        }

        $item->appendChild($node);
    }

    private function cdata(\DOMDocument $dom, string $value): \DOMCdataSection
    {
        return $dom->createCDATASection($value);
    }

    private function imageUrl(?string $imagePath): ?string
    {
        if (empty($imagePath)) {
            return null;
        }

        if (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://')) {
            return $imagePath;
        }

        return url('/' . ltrim($imagePath, '/'));
    }

    /**
     * Traduit un champ (ou un champ de relation "category.name") avec repli
     * fiable. Utilise getTranslations() de Spatie directement (bypass des
     * accesseurs magiques) pour éviter tout souci de cast en conflit.
     */
    private function translate(Article $article, string $field): ?string
    {
        if (str_contains($field, '.')) {
            [$relation, $relField] = explode('.', $field, 2);
            $related = $article->{$relation};
            if (!$related) {
                return null;
            }
            $translations = method_exists($related, 'getTranslations')
                ? $related->getTranslations($relField)
                : [];
        } else {
            $translations = $article->getTranslations($field);
        }

        if (empty($translations) || !is_array($translations)) {
            return null;
        }

        foreach ([$this->locale, 'it', 'pt', 'en'] as $fallbackLocale) {
            if (!empty($translations[$fallbackLocale])) {
                return $translations[$fallbackLocale];
            }
        }

        foreach ($translations as $value) {
            if (!empty($value)) {
                return $value;
            }
        }

        return null;
    }
}