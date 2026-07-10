<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FixCategorySlugsSeeder extends Seeder
{
    /**
     * Mapping des slugs italiens vers les slugs portugais
     */
    protected array $slugMap = [
        'container-modulari' => 'contentores-modulares',
        'contenitori-casa' => 'contentores-casa',
        'container-di-stoccaggio' => 'contentores-de-armazenamento',
        'contenitori-10-piedi' => 'contentores-10-pes',
        'contenitori-20-piedi' => 'contentores-20-pes',
        'contenitori-40-piedi' => 'contentores-40-pes',
        'container-refrigerati' => 'contentores-refrigerados',
        'container-standard-usati' => 'contentores-padrao-usados',
        'caffetteria-bar-ristorante' => 'cafeteria-bar-restaurante',
        'ufficio' => 'escritorio',
        'sanitario' => 'sanitario',
        'container-laterale-aperto' => 'conteiner-com-abertura-lateral',
        'piscinas' => 'piscinas',   // ← Correction : piscinas au lieu de piscinas
        'non-categorizzato' => 'nao-categorizado',
        'contentores-modulares' => 'contentores-modulares', // Déjà en portugais
        'contentores-casa' => 'contentores-casa',           // Déjà en portugais
        'contentores-20-pes' => 'contentores-20-pes',       // Déjà en portugais
        'contentores-40-pes' => 'contentores-40-pes',       // Déjà en portugais
        'contentores-10-pes' => 'contentores-10-pes',       // Déjà en portugais
        'contentores-refrigerados' => 'contentores-refrigerados', // Déjà en portugais
        'cafeteria-bar-restaurante' => 'cafeteria-bar-restaurante', // Déjà en portugais
        'escritorio' => 'escritorio',                       // Déjà en portugais
        'conteiner-com-abertura-lateral' => 'conteiner-com-abertura-lateral', // Déjà en portugais
    ];

    public function run(): void
    {
        $this->command->info('=== DÉBUT DE LA CORRECTION DES CATÉGORIES ===');

        // 1. Récupérer toutes les catégories
        $categories = Category::all();
        $categoriesBySlug = $categories->keyBy('slug');

        $this->command->info('Nombre de catégories trouvées : ' . $categories->count());

        // 2. Afficher les catégories actuelles
        $this->command->info("\n--- Catégories actuelles ---");
        foreach ($categories as $cat) {
            $ptName = $cat->getTranslation('name', 'pt') ?? $cat->name['it'] ?? 'Non nommé';
            $this->command->line("  - {$cat->slug} -> {$ptName}");
        }

        // 3. Mettre à jour les slugs des catégories vers le portugais
        $this->command->info("\n--- Mise à jour des slugs ---");
        $updatedCount = 0;
        $slugChanges = [];

        foreach ($categories as $category) {
            $oldSlug = $category->slug;
            $ptName = $category->getTranslation('name', 'pt') ?? $category->name['it'] ?? 'Não categorizado';
            $newSlug = Str::slug($ptName);

            // Vérifier si le slug a changé
            if ($oldSlug !== $newSlug) {
                // Vérifier si le nouveau slug n'est pas déjà utilisé
                $existing = Category::where('slug', $newSlug)->where('id', '!=', $category->id)->first();

                if ($existing) {
                    // Si le slug existe déjà, ajouter un suffixe
                    $newSlug = $newSlug . '-' . $category->id;
                    $this->command->warn("  ⚠️ Slug déjà utilisé, nouveau slug généré : {$newSlug}");
                }

                $category->slug = $newSlug;
                $category->save();

                $slugChanges[$oldSlug] = $newSlug;
                $this->command->line("  ✅ {$oldSlug} -> {$newSlug}");
                $updatedCount++;
            }
        }

        $this->command->info("✅ {$updatedCount} catégories mises à jour");

        // 4. Recharger les catégories avec les nouveaux slugs
        $categories = Category::all()->keyBy('slug');

        // 5. Corriger les articles avec leurs catégories
        $this->command->info("\n--- Correction des articles ---");

        $articles = Article::all();
        $this->command->info('Nombre d\'articles trouvés : ' . $articles->count());

        $fixedCount = 0;
        $errorCount = 0;
        $alreadyCorrectCount = 0;

        foreach ($articles as $article) {
            // Récupérer le nom de l'article (pour l'affichage)
            $articleName = is_array($article->name) 
                ? ($article->name['pt'] ?? $article->name['it'] ?? $article->name['en'] ?? 'Article sans nom')
                : $article->name;
            
            // Tronquer le nom pour l'affichage
            $displayName = Str::limit($articleName, 40);

            // Récupérer la catégorie actuelle
            $currentCategory = $article->category;

            if (!$currentCategory) {
                // Si l'article n'a pas de catégorie, lui attribuer "Não Categorizado"
                $defaultCategory = $categories->firstWhere('slug', 'nao-categorizado');

                if ($defaultCategory) {
                    $article->category_id = $defaultCategory->id;
                    $article->save();
                    $this->command->line("  📦 Article {$article->id} ({$displayName}) -> Catégorie par défaut");
                    $fixedCount++;
                } else {
                    $this->command->error("  ❌ Catégorie par défaut non trouvée pour l'article {$article->id}");
                    $errorCount++;
                }
                continue;
            }

            $oldSlug = $currentCategory->slug;
            $newSlug = $this->slugMap[$oldSlug] ?? $oldSlug;

            // Si le slug a changé dans la carte ou dans la base de données
            if ($newSlug !== $oldSlug && isset($categories[$newSlug])) {
                $newCategory = $categories[$newSlug];
                $article->category_id = $newCategory->id;
                $article->save();

                $ptName = $newCategory->getTranslation('name', 'pt') ?? $newCategory->name['it'] ?? 'Catégorie';
                $this->command->line("  ✅ Article {$article->id} ({$displayName}) -> {$ptName}");
                $fixedCount++;
            } elseif ($newSlug !== $oldSlug && !isset($categories[$newSlug])) {
                $this->command->error("  ❌ Catégorie {$newSlug} non trouvée pour l'article {$article->id}");
                $errorCount++;
            } else {
                // Le slug est déjà correct
                $alreadyCorrectCount++;
            }
        }

        $this->command->info("✅ {$fixedCount} articles corrigés");
        $this->command->info("ℹ️ {$alreadyCorrectCount} articles déjà corrects");
        if ($errorCount > 0) {
            $this->command->warn("⚠️ {$errorCount} articles avec des erreurs");
        }

        // 6. Afficher le résumé final
        $this->command->info("\n--- Résumé final ---");
        $categories = Category::all();
        foreach ($categories as $cat) {
            $ptName = $cat->getTranslation('name', 'pt') ?? $cat->name['it'] ?? 'Non nommé';
            $count = Article::where('category_id', $cat->id)->count();
            $this->command->line("  📂 {$cat->slug} -> {$ptName} ({$count} articles)");
        }

        $this->command->info("\n=== CORRECTION TERMINÉE ===");
        $this->command->info("Vous pouvez maintenant relancer : php artisan migrate:fresh --seed");
        $this->command->info("Ou vérifier les articles avec : php artisan tinker");
    }
}