<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Response;

class GoogleFeedController extends Controller
{
    private string $locale = 'it';
    private string $currency = 'EUR';

    /**
     * Génère le flux XML Google Merchant Center et le sauvegarde sur le disque
     */
    public function generate(): Response
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

        Article::with(['category', 'images' => function ($q) {
            $q->orderBy('position');
        }])
            ->chunk(200, function ($articles) use ($dom, $channel) {
                foreach ($articles as $article) {
                    $item = $this->buildItem($dom, $article);
                    $channel->appendChild($item);
                }
            });

        $xml = $dom->saveXML();

        // Sauvegarde du fichier sur le disque
        $path = public_path('feed/google-merchant.xml');

        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        file_put_contents($path, $xml);

        // Retourne directement le contenu généré
        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    private function buildItem(\DOMDocument $dom, Article $article): \DOMElement
    {
        $item = $dom->createElement('item');

        $name = $this->translate($article->name) ?? '';
        $description = $this->translate($article->description)
            ?? $this->translate($article->short_description)
            ?? $name;

        $description = strip_tags($description);

        $this->appendG($dom, $item, 'id', $article->sku);
        $this->appendG($dom, $item, 'title', $name, true);
        $this->appendG($dom, $item, 'description', $description, true);
        $this->appendG($dom, $item, 'link', route('product.show', $article->slug));

$images = $article->images;
if ($images->isNotEmpty()) {
    $this->appendG($dom, $item, 'image_link', $this->imageUrl($images->first()->image_path));

    foreach ($images->skip(1)->take(10) as $image) {
        $this->appendG($dom, $item, 'additional_image_link', $this->imageUrl($image->image_path));
    }
}
        $availability = $article->stock > 0 ? 'in_stock' : 'out_of_stock';
        $this->appendG($dom, $item, 'availability', $availability);

        if ($article->old_price && $article->old_price > $article->price) {
            $this->appendG($dom, $item, 'price', number_format($article->old_price, 2, '.', '') . ' ' . $this->currency);
            $this->appendG($dom, $item, 'sale_price', number_format($article->price, 2, '.', '') . ' ' . $this->currency);
        } else {
            $this->appendG($dom, $item, 'price', number_format($article->price, 2, '.', '') . ' ' . $this->currency);
        }

        $this->appendG($dom, $item, 'condition', 'new');
        $this->appendG($dom, $item, 'brand', config('app.name'));

        if ($article->category) {
            $categoryName = $this->translate($article->category->name);
            if ($categoryName) {
                $this->appendG($dom, $item, 'product_type', $categoryName, true);
            }
        }

        $this->appendG($dom, $item, 'identifier_exists', 'no');

        return $item;
    }

    private function appendG(\DOMDocument $dom, \DOMElement $item, string $tag, ?string $value, bool $cdata = false): void
    {
        if ($value === null || $value === '') {
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

    // Déjà une URL absolue
    if (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://')) {
        return $imagePath;
    }

    // Chemin relatif (ex: "storage/articles/xxx.jpg") -> on le transforme
    // en URL absolue, exactement comme le fait le navigateur avec le Blade
    return url('/' . ltrim($imagePath, '/'));
}

private function translate($field): ?string
{
    if (empty($field)) {
        return null;
    }

    // Cas 1 : c'est déjà un array (si le cast 'array' est actif sur le modèle)
    if (is_array($field)) {
        return $field[$this->locale] ?? $field['it'] ?? (reset($field) ?: null);
    }

    // Cas 2 : c'est une chaîne JSON valide -> on décode
    $decoded = json_decode($field, true);
    if (is_array($decoded)) {
        return $decoded[$this->locale] ?? $decoded['it'] ?? (reset($decoded) ?: null);
    }

    // Cas 3 : c'est simplement une chaîne brute (pas de JSON) -> on la retourne telle quelle
    return $field;
}
}