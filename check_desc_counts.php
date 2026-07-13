<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Article;

$articles = Article::all();
$emptyCount = 0;
$nonEmptyCount = 0;
$ptEmptyCount = 0;

foreach ($articles as $art) {
    $desc = $art->getTranslations('description');
    if (empty($desc)) {
        $emptyCount++;
    } else {
        $nonEmptyCount++;
        if (empty($art->getTranslation('description', 'pt', false))) {
            $ptEmptyCount++;
        }
    }
}

echo "Total: " . count($articles) . "\n";
echo "Completely empty descriptions: $emptyCount\n";
echo "Non-empty descriptions: $nonEmptyCount\n";
echo "Non-empty, but empty in PT: $ptEmptyCount\n";
