<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Article;

$articles = Article::limit(3)->get();
foreach ($articles as $article) {
    echo "ID: " . $article->id . "\n";
    echo "SKU: " . $article->sku . "\n";
    echo "Slug: " . $article->slug . "\n";
    echo "Name translations:\n";
    print_r($article->getTranslations('name'));
    echo "Description translations:\n";
    print_r($article->getTranslations('description'));
    echo "Short Description translations:\n";
    print_r($article->getTranslations('short_description'));
    echo "----------------------------------------\n";
}
