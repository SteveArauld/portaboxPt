<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => [
                    'it' => 'Container Modulari',
                    'en' => 'Modular Containers',
                    'fr' => 'Conteneurs Modulaires',
                    'pt' => 'Contêineres Modulares',
                    'es' => 'Contenedores Modulares'
                ],
                'slug' => 'container-modulari',
                'description' => [
                    'it' => 'Container modulari per diverse esigenze abitative e commerciali',
                    'en' => 'Modular containers for various residential and commercial needs',
                    'fr' => 'Conteneurs modulaires pour divers besoins résidentiels et commerciaux',
                    'pt' => 'Contêineres modulares para diversas necessidades residenciais e comerciais',
                    'es' => 'Contenedores modulares para diversas necesidades residenciales y comerciales'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori Casa',
                    'en' => 'Home Containers',
                    'fr' => 'Conteneurs Habitat',
                    'pt' => 'Contêineres Casa',
                    'es' => 'Contenedores Casa'
                ],
                'slug' => 'contenitori-casa',
                'description' => [
                    'it' => 'Case container e soluzioni abitative',
                    'en' => 'Container homes and housing solutions',
                    'fr' => 'Maisons conteneurs et solutions d\'habitat',
                    'pt' => 'Casas contêiner e soluções habitacionais',
                    'es' => 'Casas contenedor y soluciones habitacionales'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container di Stoccaggio',
                    'en' => 'Storage Containers',
                    'fr' => 'Conteneurs de Stockage',
                    'pt' => 'Contêineres de Armazenamento',
                    'es' => 'Contenedores de Almacenamiento'
                ],
                'slug' => 'container-di-stoccaggio',
                'description' => [
                    'it' => 'Container per stoccaggio e magazzino',
                    'en' => 'Containers for storage and warehousing',
                    'fr' => 'Conteneurs pour stockage et entrepôt',
                    'pt' => 'Contêineres para armazenamento e depósito',
                    'es' => 'Contenedores para almacenamiento y depósito'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 10 Piedi',
                    'en' => '10ft Containers',
                    'fr' => 'Conteneurs 10 Pieds',
                    'pt' => 'Contêineres 10 Pés',
                    'es' => 'Contenedores 10 Pies'
                ],
                'slug' => 'contenitori-10-piedi',
                'description' => [
                    'it' => 'Container da 10 piedi per varie applicazioni',
                    'en' => '10ft containers for various applications',
                    'fr' => 'Conteneurs 10 pieds pour diverses applications',
                    'pt' => 'Contêineres de 10 pés para várias aplicações',
                    'es' => 'Contenedores de 10 pies para diversas aplicaciones'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 20 Piedi',
                    'en' => '20ft Containers',
                    'fr' => 'Conteneurs 20 Pieds',
                    'pt' => 'Contêineres 20 Pés',
                    'es' => 'Contenedores 20 Pies'
                ],
                'slug' => 'contenitori-20-piedi',
                'description' => [
                    'it' => 'Container standard da 20 piedi',
                    'en' => 'Standard 20ft containers',
                    'fr' => 'Conteneurs standard 20 pieds',
                    'pt' => 'Contêineres padrão de 20 pés',
                    'es' => 'Contenedores estándar de 20 pies'
                ]
            ],
            [
                'name' => [
                    'it' => 'Contenitori 40 Piedi',
                    'en' => '40ft Containers',
                    'fr' => 'Conteneurs 40 Pieds',
                    'pt' => 'Contêineres 40 Pés',
                    'es' => 'Contenedores 40 Pies'
                ],
                'slug' => 'contenitori-40-piedi',
                'description' => [
                    'it' => 'Container da 40 piedi per grandi volumi',
                    'en' => '40ft containers for large volumes',
                    'fr' => 'Conteneurs 40 pieds pour grands volumes',
                    'pt' => 'Contêineres de 40 pés para grandes volumes',
                    'es' => 'Contenedores de 40 pies para grandes volúmenes'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container Refrigerati',
                    'en' => 'Refrigerated Containers',
                    'fr' => 'Conteneurs Réfrigérés',
                    'pt' => 'Contêineres Refrigerados',
                    'es' => 'Contenedores Refrigerados'
                ],
                'slug' => 'container-refrigerati',
                'description' => [
                    'it' => 'Container frigoriferi per prodotti sensibili',
                    'en' => 'Refrigerated containers for sensitive products',
                    'fr' => 'Conteneurs frigorifiques pour produits sensibles',
                    'pt' => 'Contêineres frigoríficos para produtos sensíveis',
                    'es' => 'Contenedores frigoríficos para productos sensibles'
                ]
            ],
            [
                'name' => [
                    'it' => 'Container Standard Usati',
                    'en' => 'Used Standard Containers',
                    'fr' => 'Conteneurs Standards d\'Occasion',
                    'pt' => 'Contêineres Padrão Usados',
                    'es' => 'Contenedores Estándar Usados'
                ],
                'slug' => 'container-standard-usati',
                'description' => [
                    'it' => 'Container standard di seconda mano',
                    'en' => 'Second-hand standard containers',
                    'fr' => 'Conteneurs standards de seconde main',
                    'pt' => 'Contêineres padrão de segunda mão',
                    'es' => 'Contenedores estándar de segunda mano'
                ]
            ],
            [
                'name' => [
                    'it' => 'Caffetteria Bar Ristorante',
                    'en' => 'Coffee Bar Restaurant',
                    'fr' => 'Cafétéria Bar Restaurant',
                    'pt' => 'Cafeteria Bar Restaurante',
                    'es' => 'Cafetería Bar Restaurante'
                ],
                'slug' => 'caffetteria-bar-ristorante',
                'description' => [
                    'it' => 'Container per bar e ristoranti mobili',
                    'en' => 'Containers for mobile bars and restaurants',
                    'fr' => 'Conteneurs pour bars et restaurants mobiles',
                    'pt' => 'Contêineres para bares e restaurantes móveis',
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
                'slug' => 'ufficio',
                'description' => [
                    'it' => 'Container ufficio e spazi di lavoro',
                    'en' => 'Office containers and workspaces',
                    'fr' => 'Conteneurs bureau et espaces de travail',
                    'pt' => 'Contêineres escritório e espaços de trabalho',
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
                'slug' => 'sanitario',
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
                    'pt' => 'Contêiner com Abertura Lateral',
                    'es' => 'Contenedor con Apertura Lateral'
                ],
                'slug' => 'container-laterale-aperto',
                'description' => [
                    'it' => 'Container con apertura laterale',
                    'en' => 'Container with side opening',
                    'fr' => 'Conteneur avec ouverture latérale',
                    'pt' => 'Contêiner com abertura lateral',
                    'es' => 'Contenedor con apertura lateral'
                ]
            ],
            [
                'name' => [
                    'it' => 'Piscina',
                    'en' => 'Swimming Pool',
                    'fr' => 'Piscine',
                    'pt' => 'Piscina',
                    'es' => 'Piscina'
                ],
                'slug' => 'piscina',
                'description' => [
                    'it' => 'Piscine container',
                    'en' => 'Container swimming pools',
                    'fr' => 'Piscines conteneurs',
                    'pt' => 'Piscinas contêiner',
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
                'slug' => 'non-categorizzato',
                'description' => [
                    'it' => 'Prodotti non categorizzati',
                    'en' => 'Uncategorized products',
                    'fr' => 'Produits non catégorisés',
                    'pt' => 'Produtos não categorizados',
                    'es' => 'Productos sin categoría'
                ]
            ]
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                [
                    'name' => $category['name'],
                    'description' => $category['description']
                ]
            );
        }

        $this->command->info('Categories seeded successfully with translations!');
    }
}