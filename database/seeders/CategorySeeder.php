<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Récupérer la langue cible depuis le fichier .env
        $targetLocale = config('app.locale', 'pt');

     $categories = [
    [
        'name' => [
            'it' => 'Container Modulari',
            'en' => 'Modular Containers',
            'fr' => 'Conteneurs Modulaires',
            'pt' => 'Contentores Modulares',
            'es' => 'Contenedores Modulares',
            'de' => 'Modulare Container'
        ],
        'description' => [
            'it' => 'Container modulari per diverse esigenze abitative e commerciali',
            'en' => 'Modular containers for various residential and commercial needs',
            'fr' => 'Conteneurs modulaires pour divers besoins résidentiels et commerciaux',
            'pt' => 'Contentores modulares para diversas necessidades residenciais e comerciais',
            'es' => 'Contenedores modulares para diversas necesidades residenciales y comerciales',
            'de' => 'Modulare Container für verschiedene Wohn- und Gewerbeanforderungen'
        ]
    ],
    [
        'name' => [
            'it' => 'Contenitori Casa',
            'en' => 'Home Containers',
            'fr' => 'Conteneurs Habitat',
            'pt' => 'Contentores Casa',
            'es' => 'Contenedores Casa',
            'de' => 'Wohncontainer'
        ],
        'description' => [
            'it' => 'Case container e soluzioni abitative',
            'en' => 'Container homes and housing solutions',
            'fr' => 'Maisons conteneurs et solutions d\'habitat',
            'pt' => 'Contentores Casa e soluções habitacionais',
            'es' => 'Casas contenedor y soluciones habitacionales',
            'de' => 'Containerhäuser und Wohnlösungen'
        ]
    ],
    [
        'name' => [
            'it' => 'Container di Stoccaggio',
            'en' => 'Storage Containers',
            'fr' => 'Conteneurs de Stockage',
            'pt' => 'Contentores de Armazenamento',
            'es' => 'Contenedores de Almacenamiento',
            'de' => 'Lagercontainer'
        ],
        'description' => [
            'it' => 'Container per stoccaggio e magazzino',
            'en' => 'Containers for storage and warehousing',
            'fr' => 'Conteneurs pour stockage et entrepôt',
            'pt' => 'Contentores para armazenamento e depósito',
            'es' => 'Contenedores para almacenamiento y depósito',
            'de' => 'Container für Lagerung und Lagerhaltung'
        ]
    ],
    [
        'name' => [
            'it' => 'Contenitori 10 Piedi',
            'en' => '10ft Containers',
            'fr' => 'Conteneurs 10 Pieds',
            'pt' => 'Contentores 10 Pés',
            'es' => 'Contenedores 10 Pies',
            'de' => '10-Fuß-Container'
        ],
        'description' => [
            'it' => 'Container da 10 piedi per varie applicazioni',
            'en' => '10ft containers for various applications',
            'fr' => 'Conteneurs 10 pieds pour diverses applications',
            'pt' => 'Contentores de 10 pés para várias aplicações',
            'es' => 'Contenedores de 10 pies para diversas aplicaciones',
            'de' => '10-Fuß-Container für verschiedene Anwendungen'
        ]
    ],
    [
        'name' => [
            'it' => 'Contenitori 20 Piedi',
            'en' => '20ft Containers',
            'fr' => 'Conteneurs 20 Pieds',
            'pt' => 'Contentores 20 Pés',
            'es' => 'Contenedores 20 Pies',
            'de' => '20-Fuß-Container'
        ],
        'description' => [
            'it' => 'Container standard da 20 piedi',
            'en' => 'Standard 20ft containers',
            'fr' => 'Conteneurs standard 20 pieds',
            'pt' => 'Contentores padrão de 20 pés',
            'es' => 'Contenedores estándar de 20 pies',
            'de' => 'Standard-20-Fuß-Container'
        ]
    ],
    [
        'name' => [
            'it' => 'Contenitori 40 Piedi',
            'en' => '40ft Containers',
            'fr' => 'Conteneurs 40 Pieds',
            'pt' => 'Contentores 40 Pés',
            'es' => 'Contenedores 40 Pies',
            'de' => '40-Fuß-Container'
        ],
        'description' => [
            'it' => 'Container da 40 piedi per grandi volumi',
            'en' => '40ft containers for large volumes',
            'fr' => 'Conteneurs 40 pieds pour grands volumes',
            'pt' => 'Contentores de 40 pés para grandes volumes',
            'es' => 'Contenedores de 40 pies para grandes volúmenes',
            'de' => '40-Fuß-Container für große Volumen'
        ]
    ],
    [
        'name' => [
            'it' => 'Container Refrigerati',
            'en' => 'Refrigerated Containers',
            'fr' => 'Conteneurs Réfrigérés',
            'pt' => 'Contentores Refrigerados',
            'es' => 'Contenedores Refrigerados',
            'de' => 'Kühlcontainer'
        ],
        'description' => [
            'it' => 'Container frigoriferi per prodotti sensibili',
            'en' => 'Refrigerated containers for sensitive products',
            'fr' => 'Conteneurs frigorifiques pour produits sensibles',
            'pt' => 'Contentores frigoríficos para produtos sensíveis',
            'es' => 'Contenedores frigoríficos para productos sensibles',
            'de' => 'Kühlcontainer für empfindliche Produkte'
        ]
    ],
    [
        'name' => [
            'it' => 'Container Standard Usati',
            'en' => 'Used Standard Containers',
            'fr' => 'Conteneurs Standards d\'Occasion',
            'pt' => 'Contentores Padrão Usados',
            'es' => 'Contenedores Estándar Usados',
            'de' => 'Gebrauchte Standardcontainer'
        ],
        'description' => [
            'it' => 'Container standard di seconda mano',
            'en' => 'Second-hand standard containers',
            'fr' => 'Conteneurs standards de seconde main',
            'pt' => 'Contentores padrão de segunda mão',
            'es' => 'Contenedores estándar de segunda mano',
            'de' => 'Gebrauchte Standardcontainer zweiter Hand'
        ]
    ],
    [
        'name' => [
            'it' => 'Caffetteria Bar Ristorante',
            'en' => 'Coffee Bar Restaurant',
            'fr' => 'Cafétéria Bar Restaurant',
            'pt' => 'Cafetaria Bar Restaurante',
            'es' => 'Cafetería Bar Restaurante',
            'de' => 'Café Bar Restaurant'
        ],
        'description' => [
            'it' => 'Container per bar e ristoranti mobili',
            'en' => 'Containers for mobile bars and restaurants',
            'fr' => 'Conteneurs pour bars et restaurants mobiles',
            'pt' => 'Contentores para bares e restaurantes móveis',
            'es' => 'Contenedores para bares y restaurantes móviles',
            'de' => 'Container für mobile Bars und Restaurants'
        ]
    ],
    [
        'name' => [
            'it' => 'Ufficio',
            'en' => 'Office',
            'fr' => 'Bureau',
            'pt' => 'Escritório',
            'es' => 'Oficina',
            'de' => 'Büro'
        ],
        'description' => [
            'it' => 'Container ufficio e spazi di lavoro',
            'en' => 'Office containers and workspaces',
            'fr' => 'Conteneurs bureau et espaces de travail',
            'pt' => 'Contentores escritório e espaços de trabalho',
            'es' => 'Contenedores oficina y espacios de trabajo',
            'de' => 'Bürocontainer und Arbeitsräume'
        ]
    ],
    [
        'name' => [
            'it' => 'Sanitario',
            'en' => 'Sanitary',
            'fr' => 'Sanitaire',
            'pt' => 'Sanitário',
            'es' => 'Sanitario',
            'de' => 'Sanitär'
        ],
        'description' => [
            'it' => 'Blocchi sanitari e servizi igienici',
            'en' => 'Sanitary blocks and toilet facilities',
            'fr' => 'Blocs sanitaires et toilettes',
            'pt' => 'Blocos sanitários e instalações sanitárias',
            'es' => 'Bloques sanitarios y aseos',
            'de' => 'Sanitärblöcke und Toilettenanlagen'
        ]
    ],
    [
        'name' => [
            'it' => 'Container Laterale Aperto',
            'en' => 'Open Side Container',
            'fr' => 'Conteneur à Ouverture Latérale',
            'pt' => 'Contentor com Abertura Lateral',
            'es' => 'Contenedor con Apertura Lateral',
            'de' => 'Container mit Seitenöffnung'
        ],
        'description' => [
            'it' => 'Container con apertura laterale',
            'en' => 'Container with side opening',
            'fr' => 'Conteneur avec ouverture latérale',
            'pt' => 'Contentor com abertura lateral',
            'es' => 'Contenedor con apertura lateral',
            'de' => 'Container mit seitlicher Öffnung'
        ]
    ],
    [
        'name' => [
            'it' => 'Piscina',
            'en' => 'Swimming Pool',
            'fr' => 'Piscine',
            'pt' => 'Piscinas',
            'es' => 'Piscinas',
            'de' => 'Schwimmbad'
        ],
        'description' => [
            'it' => 'Piscine container',
            'en' => 'Container swimming pools',
            'fr' => 'Piscines conteneurs',
            'pt' => 'Piscinas contentor',
            'es' => 'Piscinas contenedor',
            'de' => 'Container-Schwimmbäder'
        ]
    ],
    [
        'name' => [
            'it' => 'Non Categorizzato',
            'en' => 'Uncategorized',
            'fr' => 'Non Catégorisé',
            'pt' => 'Não Categorizado',
            'es' => 'Sin Categoría',
            'de' => 'Nicht kategorisiert'
        ],
        'description' => [
            'it' => 'Prodotti non categorizzati',
            'en' => 'Uncategorized products',
            'fr' => 'Produits non catégorisés',
            'pt' => 'Produtos não categorizados',
            'es' => 'Productos sin categoría',
            'de' => 'Nicht kategorisierte Produkte'
        ]
    ]
];

        // Désactiver les contraintes de clé étrangère selon le driver
        $driver = DB::connection()->getDriverName();
        
        if ($driver === 'sqlite') {
            DB::statement('PRAGMA foreign_keys = OFF;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        
        // Supprimer toutes les catégories existantes pour repartir de zéro
        Category::truncate();
        
        // Réactiver les contraintes de clé étrangère
        if ($driver === 'sqlite') {
            DB::statement('PRAGMA foreign_keys = ON;');
        } else {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }

        // Créer les nouvelles catégories
        foreach ($categories as $categoryData) {
            // Générer le slug à partir du nom en portugais (Portugal)
            $ptName = $categoryData['name']['pt'] ?? $categoryData['name']['it'] ?? 'Não categorizado';

            // Un slug par langue : /categoria-produto/... en portugais,
            // /de/produktkategorie/... en allemand.
            $slug = [];
            foreach (array_keys(config('locales.available')) as $locale) {
                $source = $categoryData['name'][$locale] ?? $ptName;
                $slug[$locale] = Str::slug($source) ?: Str::slug($ptName);
            }

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