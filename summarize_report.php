<?php

$data = json_decode(file_get_contents('inspection_report.json'), true);
$articles = $data['articles'];

$total = count($articles);
$brands = [];
$conditions = [];
$ambiguousConditions = 0;
$toModifyDesc = 0;
$italianSlugs = 0;

foreach ($articles as $art) {
    $brand = $art['detected_brand'] ?? 'Porto Contentores (Default)';
    $brands[$brand] = ($brands[$brand] ?? 0) + 1;
    
    $cond = $art['condition'];
    $conditions[$cond] = ($conditions[$cond] ?? 0) + 1;
    
    if ($art['ambiguous_condition']) {
        $ambiguousConditions++;
    }
    
    if ($art['desc_status'] === 'TO_MODIFY') {
        $toModifyDesc++;
    }
    
    if ($art['has_italian_slug']) {
        $italianSlugs++;
    }
}

echo "Total Articles: $total\n";
echo "\nBrands distribution:\n";
foreach ($brands as $b => $c) {
    echo "  - $b: $c\n";
}
echo "\nConditions distribution:\n";
foreach ($conditions as $c => $count) {
    echo "  - $c: $count\n";
}
echo "Ambiguous conditions: $ambiguousConditions\n";
echo "Descriptions to modify (< 200 chars in pt): $toModifyDesc\n";
echo "Articles with Italian words in slugs: $italianSlugs\n";

echo "\nCategories in project:\n";
foreach ($data['categories'] as $cat) {
    echo "  - ID {$cat['id']}: {$cat['slug']} (Name: " . json_encode($cat['name'], JSON_UNESCAPED_UNICODE) . ")\n";
}
