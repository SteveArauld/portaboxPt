<?php

// Aperçu SANS écriture : quels slugs le seeder corrigé va-t-il produire ?
use Illuminate\Support\Str;

$src = file_get_contents(database_path('seeders/ArticleSeeder.php'));

preg_match_all('/"pt"\s*=>\s*"((?:[^"\\\\]|\\\\.)*)"/', $src, $m);
$names = $m[1] ?? [];

// On ne garde que les noms de produits (les 1ers "pt" de chaque bloc name)
echo 'Chaines PT trouvees : ' . count($names) . PHP_EOL . PHP_EOL;

$IT = '/(contenitor|container|marittim|abitativ|frigorifer|usat[io]|nuov[io]|uffici|piedi|magazzin|refrigerat|modulari|coibentat|prefabbricat|monoblocc|bagno|sanitario|deposito|cantiere)/i';

$shown = 0;
$italian = 0;
foreach ($names as $n) {
    $n = stripcslashes($n);
    if (mb_strlen($n) > 120) {
        continue; // descriptions, pas des noms
    }
    $slug = Str::slug($n);
    if (preg_match($IT, $slug)) {
        $italian++;
    }
    if ($shown < 15) {
        echo '  ' . $slug . PHP_EOL;
        $shown++;
    }
}

echo PHP_EOL . 'Slugs encore italiens apres correction : ' . $italian . PHP_EOL;
