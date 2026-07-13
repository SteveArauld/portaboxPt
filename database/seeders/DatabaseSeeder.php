<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
public function run(): void
{
    $this->call([
        FixCategorySlugsSeeder::class,  // D'abord le fix
        CategorySeeder::class,           // Ensuite les catégories
        ArticleSeeder::class,            // Enfin les articles
    ]);
}
} 