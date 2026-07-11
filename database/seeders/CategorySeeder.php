<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Récupérer la langue cible depuis le fichier .env
        $targetLocale = config('app.locale', 'pt'); // par défaut 'pt'

        $categories = [
            [
                'name' => [
                    'it' => 'Container Modulari',
                    'en' => 'Modular Containers',
                    'fr' => 'Conteneurs Modulaires',
                    'pt' => 'Contentores Modulares',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores Modulares'
                ],
                'description' => [
                    'it' => 'Container modulari per diverse esigenze abitative e commerciali',
                    'en' => 'Modular containers for various residential and commercial needs',
                    'fr' => 'Conteneurs modulaires pour divers besoins résidentiels et commerciaux',
                    'pt' => 'Contentores modulares para diversas necessidades residenciais e comerciais',
                    'es' => 'Contenedores modulares para diversas necesidades residenciales y comerciales'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori Casa',
                    'en' => 'Home Containers',
                    'fr' => 'Conteneurs Habitat',
                    'pt' => 'Contentores Casa',  // ✅ Déjà corrigé
                    'es' => 'Contenedores Casa'
                ],
                'description' => [
                    'it' => 'Case container e soluzioni abitative',
                    'en' => 'Container homes and housing solutions',
                    'fr' => 'Maisons conteneurs et solutions d\'habitat',
                    'pt' => 'Contentores Casa e soluções habitacionais',
                    'es' => 'Casas contenedor y soluciones habitacionales'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container di Stoccaggio',
                    'en' => 'Storage Containers',
                    'fr' => 'Conteneurs de Stockage',
                    'pt' => 'Contentores de Armazenamento',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores de Almacenamiento'
                ],
                'description' => [
                    'it' => 'Container per stoccaggio e magazzino',
                    'en' => 'Containers for storage and warehousing',
                    'fr' => 'Conteneurs pour stockage et entrepôt',
                    'pt' => 'Contentores para armazenamento e depósito',
                    'es' => 'Contenedores para almacenamiento y depósito'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 10 Piedi',
                    'en' => '10ft Containers',
                    'fr' => 'Conteneurs 10 Pieds',
                    'pt' => 'Contentores 10 Pés',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores 10 Pies'
                ],
                'description' => [
                    'it' => 'Container da 10 piedi per varie applicazioni',
                    'en' => '10ft containers for various applications',
                    'fr' => 'Conteneurs 10 pieds pour diverses applications',
                    'pt' => 'Contentores de 10 pés para várias aplicações',
                    'es' => 'Contenedores de 10 pies para diversas aplicaciones'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 20 Piedi',
                    'en' => '20ft Containers',
                    'fr' => 'Conteneurs 20 Pieds',
                    'pt' => 'Contentores 20 Pés',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores 20 Pies'
                ],
                'description' => [
                    'it' => 'Container standard da 20 piedi',
                    'en' => 'Standard 20ft containers',
                    'fr' => 'Conteneurs standard 20 pieds',
                    'pt' => 'Contentores padrão de 20 pés',
                    'es' => 'Contenedores estándar de 20 pies'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 40 Piedi',
                    'en' => '40ft Containers',
                    'fr' => 'Conteneurs 40 Pieds',
                    'pt' => 'Contentores 40 Pés',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores 40 Pies'
                ],
                'description' => [
                    'it' => 'Container da 40 piedi per grandi volumi',
                    'en' => '40ft containers for large volumes',
                    'fr' => 'Conteneurs 40 pieds pour grands volumes',
                    'pt' => 'Contentores de 40 pés para grandes volumes',
                    'es' => 'Contenedores de 40 pies para grandes volúmenes'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container Refrigerati',
                    'en' => 'Refrigerated Containers',
                    'fr' => 'Conteneurs Réfrigérés',
                    'pt' => 'Contentores Refrigerados',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores Refrigerados'
                ],
                'description' => [
                    'it' => 'Container frigoriferi per prodotti sensibili',
                    'en' => 'Refrigerated containers for sensitive products',
                    'fr' => 'Conteneurs frigorifiques pour produits sensibles',
                    'pt' => 'Contentores frigoríficos para produtos sensíveis',
                    'es' => 'Contenedores frigoríficos para productos sensibles'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container Standard Usati',
                    'en' => 'Used Standard Containers',
                    'fr' => 'Conteneurs Standards d\'Occasion',
                    'pt' => 'Contentores Padrão Usados',  // ← Corrigé : Contentores (avec "o")
                    'es' => 'Contenedores Estándar Usados'
                ],
                'description' => [
                    'it' => 'Container standard di seconda mano',
                    'en' => 'Second-hand standard containers',
                    'fr' => 'Conteneurs standards de seconde main',
                    'pt' => 'Contentores padrão de segunda mão',
                    'es' => 'Contenedores estándar de segunda mano'
                ]
            ],
            [
                'name' => [
                    'it' => 'Caffetteria Bar Ristorante',
                    'en' => 'Coffee Bar Restaurant',
                    'fr' => 'Cafétéria Bar Restaurant',
                    'pt' => 'Cafetaria Bar Restaurante',  // ← Corrigé : Cafetaria (avec un "t")
                    'es' => 'Cafetería Bar Restaurante'
                ],
                'description' => [
                    'it' => 'Container per bar e ristoranti mobili',
                    'en' => 'Containers for mobile bars and restaurants',
                    'fr' => 'Conteneurs pour bars et restaurants mobiles',
                    'pt' => 'Contentores para bares e restaurantes móveis',
                    'es' => 'Contenedores para bares y restaurantes móviles'
                ]
            ],
            [
                'name' => [
                    'it' => 'Ufficio',
                    'en' => 'Office',
                    'fr' => 'Bureau',
                    'pt' => 'Escritório',
                    'es' => 'Oficina'
                ],
                'description' => [
                    'it' => 'Container ufficio e spazi di lavoro',
                    'en' => 'Office containers and workspaces',
                    'fr' => 'Conteneurs bureau et espaces de travail',
                    'pt' => 'Contentores escritório e espaços de trabalho',
                    'es' => 'Contenedores oficina y espacios de trabajo'
                ]
            ],
            [
                'name' => [
                    'it' => 'Sanitario',
                    'en' => 'Sanitary',
                    'fr' => 'Sanitaire',
                    'pt' => 'Sanitário',
                    'es' => 'Sanitario'
                ],
                'description' => [
                    'it' => 'Blocchi sanitari e servizi igienici',
                    'en' => 'Sanitary blocks and toilet facilities',
                    'fr' => 'Blocs sanitaires et toilettes',
                    'pt' => 'Blocos sanitários e instalações sanitárias',
                    'es' => 'Bloques sanitarios y aseos'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container Laterale Aperto',
                    'en' => 'Open Side Container',
                    'fr' => 'Conteneur à Ouverture Latérale',
                    'pt' => 'Contentor com Abertura Lateral',  // ← Corrigé : Contentor (singulier avec "o")
                    'es' => 'Contenedor con Apertura Lateral'
                ],
                'description' => [
                    'it' => 'Container con apertura laterale',
                    'en' => 'Container with side opening',
                    'fr' => 'Conteneur avec ouverture latérale',
                    'pt' => 'Contentor com abertura lateral',
                    'es' => 'Contenedor con apertura lateral'
                ]
            ],
            [
                'name' => [
                    'it' => 'Piscina',
                    'en' => 'Swimming Pool',
                    'fr' => 'Piscine',
                    'pt' => 'Piscinas',  // ← Corrigé : Piscinas (pluriel)
                    'es' => 'Piscinas'
                ],
                'description' => [
                    'it' => 'Piscine container',
                    'en' => 'Container swimming pools',
                    'fr' => 'Piscines conteneurs',
                    'pt' => 'Piscinas contentor',
                    'es' => 'Piscinas contenedor'
                ]
            ],
            [
                'name' => [
                    'it' => 'Non Categorizzato',
                    'en' => 'Uncategorized',
                    'fr' => 'Non Catégorisé',
                    'pt' => 'Não Categorizado',
                    'es' => 'Sin Categoría'
                ],
                'description' => [
                    'it' => 'Prodotti non categorizzati',
                    'en' => 'Uncategorized products',
                    'fr' => 'Produits non catégorisés',
                    'pt' => 'Produtos não categorizados',
                    'es' => 'Productos sin categoría'
                ]
            ]
        ];

        // 1. Supprimer toutes les catégories existantes pour repartir de zéro
        Category::truncate();

        // 2. Créer les nouvelles catégories
        foreach ($categories as $categoryData) {
            // Générer le slug à partir du nom en portugais (Portugal)
            $ptName = $categoryData['name']['pt'] ?? $categoryData['name']['it'] ?? 'Não categorizado';
            $slug = Str::slug($ptName);

            Category::create([
                'name' => $categoryData['name'],
                'description' => $categoryData['description'],
                'slug' => $slug
            ]);
        }

        $this->command->info('✅ Categories seeded successfully with translations!');
        $this->command->info('📌 Slugs generated from Portuguese (PT) names:');
        
        // Afficher les slugs générés
        foreach (Category::all() as $cat) {
            $this->command->line("  - {$cat->slug} -> {$cat->getTranslation('name', 'pt')}");
        }
    }
}