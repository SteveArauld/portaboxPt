<?php

use App\Models\Article;

$all = Article::all();
echo 'total = ' . $all->count() . PHP_EOL;

$withOld = $all->filter(fn($a) => $a->old_price !== null && (float) $a->old_price > (float) $a->price);
echo 'old_price > price = ' . $withOld->count() . PHP_EOL;
echo 'old_price non nul  = ' . $all->filter(fn($a) => $a->old_price !== null && (float) $a->old_price > 0)->count() . PHP_EOL;
echo 'discount_percentage non vide = ' . $all->filter(fn($a) => trim((string) $a->discount_percentage) !== '')->count() . PHP_EOL;

$dist = [];
foreach ($withOld as $a) {
    $p = (float) $a->price;
    $o = (float) $a->old_price;
    $d = $o > 0 ? round((1 - $p / $o) * 100) : 0;
    $dist[$d] = ($dist[$d] ?? 0) + 1;
}
ksort($dist);
echo PHP_EOL . 'repartition des remises encore en base :' . PHP_EOL;
foreach ($dist as $k => $v) {
    echo "  -{$k}% : {$v} produits" . PHP_EOL;
}

echo PHP_EOL . '5 exemples :' . PHP_EOL;
foreach ($withOld->take(5) as $a) {
    echo "  #{$a->id} price={$a->price} old_price={$a->old_price} disc='{$a->discount_percentage}'" . PHP_EOL;
}
