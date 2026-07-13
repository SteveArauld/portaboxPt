<?php

// Bootstrap Laravel
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Article;
use App\Models\Category;

$articles = Article::with('category')->get();
$categories = Category::all();

$report = [];

foreach ($articles as $article) {
    // Get translations
    $namePt = $article->getTranslation('name', 'pt', false);
    $nameIt = $article->getTranslation('name', 'it', false);
    
    $descPt = $article->getTranslation('description', 'pt', false);
    $shortDescPt = $article->getTranslation('short_description', 'pt', false);
    
    // We also check other languages for brand names if PT is empty
    $descAll = json_encode($article->getTranslations('description'), JSON_UNESCAPED_UNICODE);
    $shortDescAll = json_encode($article->getTranslations('short_description'), JSON_UNESCAPED_UNICODE);
    $nameAll = json_encode($article->getTranslations('name'), JSON_UNESCAPED_UNICODE);
    
    $fullText = $nameAll . ' ' . $descAll . ' ' . $shortDescAll;

    // 1. Detect Brand
    $detectedBrand = null;
    if (stripos($fullText, 'THERMO KING') !== false) {
        $detectedBrand = 'THERMO KING';
    } elseif (stripos($fullText, 'Max Shipping Inc.') !== false) {
        $detectedBrand = 'Max Shipping Inc.';
    } elseif (stripos($fullText, 'Max Shipping') !== false) {
        $detectedBrand = 'Max Shipping Inc.';
    } elseif (preg_match('/\b(Carrier|Daikin|Star Cool)\b/i', $fullText, $matches)) {
        $detectedBrand = $matches[1]; // other potential container refrigeration brands
    }
    
    // 2. Detect Condition
    $condition = 'new';
    $ambiguousCondition = false;
    $conditionKeywordsUsed = ['usado', 'usados', 'usato', 'segunda mão', 'seconda mano', 'usata', 'usate'];
    $conditionKeywordsNew = ['novo', 'novos', 'nuovo', 'nuovi', 'nuova', 'nuove', 'first hand'];
    
    $hasUsed = false;
    foreach ($conditionKeywordsUsed as $kw) {
        if (stripos($fullText, $kw) !== false) {
            $hasUsed = true;
            break;
        }
    }
    
    $hasNew = false;
    foreach ($conditionKeywordsNew as $kw) {
        if (stripos($fullText, $kw) !== false) {
            $hasNew = true;
            break;
        }
    }
    
    if ($hasUsed && $hasNew) {
        $ambiguousCondition = true;
        $condition = 'ambiguous';
    } elseif ($hasUsed) {
        $condition = 'used';
    } else {
        $condition = 'new';
    }

    // 3. Check Description Status
    $descLength = mb_strlen($descPt ?? '');
    $descStatus = ($descLength >= 200) ? 'OK' : 'TO_MODIFY';

    // 4. Slugs containing Italian words
    $italianSlugWords = ["chiosco", "usato", "confortevole", "spazio", "abitativo", "dimensioni", "container_modulari", "containerRefrigerati", "contenitori", "caffetteria", "piscina"];
    $hasItalianSlug = false;
    foreach ($italianSlugWords as $word) {
        if (stripos($article->slug, $word) !== false) {
            $hasItalianSlug = true;
            break;
        }
    }

    // Propose new slug if Italian or if needed
    $proposedSlug = null;
    if ($hasItalianSlug) {
        // Generate slug in Portuguese based on the Portuguese name
        $nameForSlug = $namePt ?: reset($article->name);
        if ($nameForSlug) {
            // Include some elements to guarantee uniqueness if needed
            $proposedSlug = Illuminate\Support\Str::slug($nameForSlug);
        }
    }

    $report[] = [
        'id' => $article->id,
        'sku' => $article->sku,
        'slug' => $article->slug,
        'name_pt' => $namePt,
        'name_it' => $nameIt,
        'category' => $article->category ? $article->category->slug : null,
        'desc_len' => $descLength,
        'desc_status' => $descStatus,
        'detected_brand' => $detectedBrand,
        'condition' => $condition,
        'ambiguous_condition' => $ambiguousCondition,
        'has_italian_slug' => $hasItalianSlug,
        'proposed_slug' => $proposedSlug,
    ];
}

file_put_contents('inspection_report.json', json_encode([
    'categories' => $categories->toArray(),
    'articles' => $report
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Inspection completed successfully! Found " . count($report) . " articles.\n";
