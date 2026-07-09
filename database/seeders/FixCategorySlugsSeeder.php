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
        'container-modulari' => 'conteineres-modulares',
        'contenitori-casa' => 'conteineres-casa',
        'container-di-stoccaggio' => 'conteineres-de-armazenamento',
        'contenitori-10-piedi' => 'conteineres-10-pes',
        'contenitori-20-piedi' => 'conteineres-20-pes',
        'contenitori-40-piedi' => 'conteineres-40-pes',
        'container-refrigerati' => 'conteineres-refrigerados',
        'container-standard-usati' => 'conteineres-padrao-usados',
        'caffetteria-bar-ristorante' => 'cafeteria-bar-restaurante',
        'ufficio' => 'escritorio',
        'sanitario' => 'sanitario',
        'container-laterale-aperto' => 'conteiner-com-abertura-lateral',
        'piscina' => 'piscina',
        'non-categorizzato' => 'nao-categorizado',
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

        foreach ($categories as $category) {
            $oldSlug = $category->slug;
            $ptName = $category->getTranslation('name', 'pt') ?? $category->name['it'] ?? 'Non catégorisé';
            $newSlug = Str::slug($ptName);

            // Vérifier si le slug a changé
            if ($oldSlug !== $newSlug) {
                // Vérifier si le nouveau slug n'est pas déjà utilisé
                $existing = Category::where('slug', $newSlug)->where('id', '!=', $category->id)->first();

                if ($existing) {
                    // Si le slug existe déjà, ajouter un suffixe
                    $newSlug = $newSlug . '-' . $category->id;
                    $this->command->warn("  Slug déjà utilisé, nouveau slug généré : {$newSlug}");
                }

                $category->slug = $newSlug;
                $category->save();

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

        foreach ($articles as $article) {
            // Récupérer le nom de l'article en italien (pour l'affichage)
            $articleName = is_array($article->name) 
                ? ($article->name['it'] ?? $article->name['pt'] ?? $article->name['en'] ?? 'Article sans nom')
                : $article->name;

            // Récupérer la catégorie actuelle
            $currentCategory = $article->category;

            if (!$currentCategory) {
                // Si l'article n'a pas de catégorie, lui attribuer "Não Categorizado"
                $defaultCategory = $categories->firstWhere('slug', 'nao-categorizado');

                if ($defaultCategory) {
                    $article->category_id = $defaultCategory->id;
                    $article->save();
                    $this->command->line("  📦 Article {$article->id} ({$articleName}) -> Catégorie par défaut");
                    $fixedCount++;
                } else {
                    $this->command->error("  ❌ Catégorie par défaut non trouvée pour l'article {$article->id}");
                    $errorCount++;
                }
                continue;
            }

            $oldSlug = $currentCategory->slug;

            // Vérifier si la catégorie actuelle a un slug italien qui doit être corrigé
            if (isset($this->slugMap[$oldSlug])) {
                $newSlug = $this->slugMap[$oldSlug];

                if (isset($categories[$newSlug])) {
                    $newCategory = $categories[$newSlug];
                    $article->category_id = $newCategory->id;
                    $article->save();

                    $ptName = $newCategory->getTranslation('name', 'pt') ?? $newCategory->name['it'] ?? 'Catégorie';
                    $this->command->line("  ✅ Article {$article->id} ({$articleName}) -> {$ptName}");
                    $fixedCount++;
                } else {
                    $this->command->error("  ❌ Catégorie {$newSlug} non trouvée pour l'article {$article->id}");
                    $errorCount++;
                }
            } else {
                // Le slug est déjà en portugais, on vérifie juste que la catégorie existe
                $this->command->line("  ℹ️ Article {$article->id} ({$articleName}) -> déjà dans {$currentCategory->slug}");
            }
        }

        $this->command->info("✅ {$fixedCount} articles corrigés");
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
    }
}