<?php

use App\Models\Article;
use Illuminate\Support\Facades\DB;

// 1) Sauvegarde des valeurs actuelles (reversible)
$backup = [];
foreach (Article::all() as $a) {
    if ($a->old_price !== null || trim((string) $a->discount_percentage) !== '') {
        $backup[] = [
            'id' => $a->id,
            'price' => $a->price,
            'old_price' => $a->old_price,
            'discount_percentage' => $a->discount_percentage,
        ];
    }
}

$path = storage_path('app/backup_remises_' . date('Ymd_His') . '.json');
file_put_contents($path, json_encode($backup, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo 'Sauvegarde : ' . count($backup) . ' lignes -> ' . $path . PHP_EOL;

// 2) Suppression des prix barres non justifiables
$n = DB::table('articles')
    ->where(function ($q) {
        $q->whereNotNull('old_price')->orWhere('discount_percentage', '<>', '');
    })
    ->update(['old_price' => null, 'discount_percentage' => null]);

echo 'Lignes mises a jour : ' . $n . PHP_EOL;

// 3) Verification
$rest = Article::whereNotNull('old_price')->count();
$restD = Article::where('discount_percentage', '<>', '')->whereNotNull('discount_percentage')->count();
echo 'old_price restants : ' . $rest . PHP_EOL;
echo 'discount_percentage restants : ' . $restD . PHP_EOL;
echo 'prix inchanges (controle) : ' . Article::whereNotNull('price')->count() . ' produits ont toujours un prix' . PHP_EOL;
