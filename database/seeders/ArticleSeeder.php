<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Langues supportées
     */
    protected array $locales = ['pt'];

    public function run(): void
    {
        // Désactiver les événements pour accélérer le seeding
        Article::unsetEventDispatcher();

        // Récupérer la langue cible depuis le fichier .env
        $targetLocale = config('app.locale', 'pt');

        // Récupérer toutes les catégories et les indexer par slug en portugais
        $categories = Category::all()->mapWithKeys(function ($category) use ($targetLocale) {
            // Récupérer le nom dans la langue cible (ou fallback sur pt, puis it)
            $targetName = $category->getTranslation('name', $targetLocale)
                ?? $category->getTranslation('name', 'pt')
                ?? $category->getTranslation('name', 'it')
                ?? 'Não categorizado';

            // Générer le slug en portugais
            $slug = Str::slug($targetName);

            return [$slug => $category];
        });

        // Les données des articles avec leurs traductions
        $articlesData =
            [
                [
                    "id" => "11363",
                    "name" => [
                        "it" => "2 MONOBLOCCHI USO UFFICIO CON BAGNO",
                        "en" => "2 OFFICE MONOBLOCKS WITH BATHROOM",
                        "fr" => "2 MONOBLOCS BUREAU AVEC SALLE DE BAIN",
                        "pt" => "2 MONOBLOCOS ESCRITÓRIO COM BANHEIRO",
                        "es" => "2 MONOBLOCOS OFICINA CON BAÑO"
                    ],
                    "price" => "7,100.00",
                    "old_price" => "8,000.00",
                    "sku" => "3276611363",
                    "discount_percentage" => "-11%",
                    "link" => "/product/2-monoblocchi-uso-ufficio-con-bagno/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 593 x 243 cm.\nDimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 272 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con legno IDRO V100 sp.18 mm, rivestito con PVC Antiscivolo.\nSerramenti in alluminio RAL 9010\nVetro 4 mm Trasparente.\nN.1 Porta mezzo vetro a un'anta di ingresso, completa di barre antintrusione, con maniglia e serratura standard, con dimensioni100 x 210h esterna cm.\nN.1 Finestra scorrevole, completa di barre antintrusione, con dimensioni 100 x 100h esterna cm.\nN.1 Porta cieca tutto pannello a un'anta, con maniglia e serratura standard, con dimensioni 80 x 210h esterna cm.\nN.1 Finestrino con apertura a vasistas, con vetro 4 mm tampato, senza barre antintrusione, con dimensioni 50 x 50h esterna cm.\nN.1 Porta a soffietto colore GRIGIO.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Wc in ceramica + sedile + cassetta esterna.\nN.1 Portarotolo + Scopino.\nN.1 Lavabo in ceramica 60 cm + colonna + mix.\nN.1 Mensola + Specchio.\nN.1 Piatto doccia in ceramica 90 x 90 cm.\nN.1 Asta doccia + Miscelatore + Soffione.\nN.1 Porta sapone angolare.\nN.1 Boiler elettrico 60 Litri Acqua Calda.\nImpianto elettrico standard norma CEE 220V, con tubo PVC Biancoa vista, compreso di:\nN.1 Quadro elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.2 Interruttori.\nN.2 Prese.\nN.1 Plafoniera 19W-LED.\nN.1 Plafoniera 45W-LED.\nN.1 Termoconvettore 500W.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE.\nN.1 Scatola esterna per allaccio impianto elettrico.",
                        "en" => "Base dimensions 593 x 243 cm.\nRoof dimensions 600 x 250 cm.\nInternal height 240 cm External height 272 cm.\nWall Panel thickness 40 mm – Polyurethane\n1 External side micro-ribbed sheet metal BG RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with IDRO V100 wood thickness 18 mm, covered with Anti-slip PVC.\nAluminum frames RAL 9010\n4 mm Clear Glass.\nNo.1 Half-glass single-leaf entrance door, complete with anti-intrusion bars, with handle and standard lock, external dimensions 100 x 210h cm.\nNo.1 Sliding window, complete with anti-intrusion bars, external dimensions 100 x 100h cm.\nNo.1 Full-panel blind single-leaf door, with handle and standard lock, external dimensions 80 x 210h cm.\nNo.1 Small tilting window, with 4 mm frosted glass, without anti-intrusion bars, external dimensions 50 x 50h cm.\nNo.1 Folding door GRAY color.\nInternal plumbing system with visible MEPLA pipe, including:\nNo.1 Ceramic toilet + seat + external tank.\nNo.1 Toilet roll holder + Brush holder.\nNo.1 Ceramic sink 60 cm + column + mixer.\nNo.1 Shelf + Mirror.\nNo.1 Ceramic shower tray 90 x 90 cm.\nNo.1 Shower rod + Mixer + Shower head.\nNo.1 Corner soap dish.\nNo.1 60 Liter electric water heater.\nStandard electrical system according to CEE 220V regulations, with visible White PVC pipe, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets.\nNo.2 Switches.\nNo.2 Sockets.\nNo.1 19W-LED ceiling light.\nNo.1 45W-LED ceiling light.\nNo.1 500W electric convector heater.\nNo.1 HISENSE BTU 9000 Inverter Mono Split Air Conditioner.\nNo.1 External box for electrical system connection.",
                        "fr" => "Dimensions à la base 593 x 243 cm.\nDimensions au toit 600 x 250 cm.\nHauteur intérieure 240 cm Hauteur extérieure 272 cm.\nPanneau mural ép.40 mm – Polyuréthane\n1 Côté extérieur tôle micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nPanneau de toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, recouvert de bois IDRO V100 ép.18 mm, revêtu de PVC antidérapant.\nMenuiseries aluminium RAL 9010\nVerre 4 mm Transparent.\nN.1 Porte d'entrée 1 vantail mi-vitrée, complète avec barres anti-intrusion, poignée et serrure standard, dimensions extérieures 100 x 210h cm.\nN.1 Fenêtre coulissante, complète avec barres anti-intrusion, dimensions extérieures 100 x 100h cm.\nN.1 Porte pleine 1 vantail, avec poignée et serrure standard, dimensions extérieures 80 x 210h cm.\nN.1 Vasistas, avec verre 4 mm dépoli, sans barres anti-intrusion, dimensions extérieures 50 x 50h cm.\nN.1 Porte accordéon couleur GRIS.\nInstallation sanitaire intérieure avec tube MEPLA apparent, comprenant :\nN.1 WC céramique + abattant + réservoir externe.\nN.1 Porte rouleau + Balai.\nN.1 Lavabo céramique 60 cm + colonne + mitigeur.\nN.1 Étagère + Miroir.\nN.1 Receveur de douche céramique 90 x 90 cm.\nN.1 Barre de douche + Mitigeur + Pommeau.\nN.1 Porte-savon d'angle.\nN.1 Chauffe-eau électrique 60 Litres.\nInstallation électrique standard norme CEE 220V, avec tube PVC Blanc apparent, comprenant :\nN.1 Tableau électrique.\nN.1 Différentiel Général.\nN.1 Différentiel pour prises.\nN.2 Interrupteurs.\nN.2 Prises.\nN.1 Plafonnier 19W-LED.\nN.1 Plafonnier 45W-LED.\nN.1 Convecteur électrique 500W.\nN.1 Climatiseur Mono Split Inverter BTU 9000-HISENSE.\nN.1 Boîte extérieure pour raccordement électrique.",
                        "pt" => "Dimensões da base 593 x 243 cm.\nDimensões do telhado 600 x 250 cm.\nAltura interna 240 cm Altura externa 272 cm.\nPainel de Parede esp.40 mm – Poliuretano\n1 Lado externo chapa micro nervurada BG RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com madeira IDRO V100 esp.18 mm, revestida com PVC Antiderrapante.\nEsquadrias de alumínio RAL 9010\nVidro 4 mm Transparente.\nN.1 Porta de entrada meio vidro de uma folha, completa com barras anti-intrusão, com maçaneta e fechadura padrão, dimensões externas 100 x 210h cm.\nN.1 Janela de correr, completa com barras anti-intrusão, dimensões externas 100 x 100h cm.\nN.1 Porta cega de painel completo de uma folha, com maçaneta e fechadura padrão, dimensões externas 80 x 210h cm.\nN.1 Pequena janela basculante, com vidro 4 mm fosco, sem barras anti-intrusão, dimensões externas 50 x 50h cm.\nN.1 Porta sanfonada cor CINZA.\nSistema hidráulico interno com tubo MEPLA aparente, incluindo:\nN.1 Vaso sanitário cerâmico + assento + caixa externa.\nN.1 Porta-rolo + Escovinha.\nN.1 Lavatório cerâmico 60 cm + coluna + misturador.\nN.1 Prateleira + Espelho.\nN.1 Base de chuveiro cerâmica 90 x 90 cm.\nN.1 Barra de chuveiro + Misturador + Chuveiro.\nN.1 Saboneteira de canto.\nN.1 Aquecedor elétrico de água 60 Litros.\nSistema elétrico padrão norma CEE 220V, com tubo PVC Branco aparente, incluindo:\nN.1 Quadro elétrico.\nN.1 Diferencial Geral.\nN.1 Diferencial para tomadas.\nN.2 Interruptores.\nN.2 Tomadas.\nN.1 Luminária de teto 19W-LED.\nN.1 Luminária de teto 45W-LED.\nN.1 Convector elétrico 500W.\nN.1 Ar condicionado Mono Split Inverter BTU 9000-HISENSE.\nN.1 Caixa externa para conexão elétrica.",
                        "es" => "Dimensiones de la base 593 x 243 cm.\nDimensiones del techo 600 x 250 cm.\nAltura interior 240 cm Altura exterior 272 cm.\nPanel de Pared esp.40 mm – Poliuretano\n1 Lado exterior chapa micro nervada BG RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con madera IDRO V100 esp.18 mm, revestida con PVC Antideslizante.\nCarpintería de aluminio RAL 9010\nVidrio 4 mm Transparente.\nN.1 Puerta de entrada de una hoja medio vidrio, completa con barras antintrusión, con manija y cerradura estándar, dimensiones exteriores 100 x 210h cm.\nN.1 Ventana corredera, completa con barras antintrusión, dimensiones exteriores 100 x 100h cm.\nN.1 Puerta ciega de panel completo de una hoja, con manija y cerradura estándar, dimensiones exteriores 80 x 210h cm.\nN.1 Ventanilla practicable, con vidrio 4 mm esmerilado, sin barras antintrusión, dimensiones exteriores 50 x 50h cm.\nN.1 Puerta plegable color GRIS.\nInstalación sanitaria interior con tubo MEPLA visto, incluyendo:\nN.1 Inodoro cerámico + asiento + cisterna externa.\nN.1 Portarrollos + Escobilla.\nN.1 Lavabo cerámico 60 cm + columna + mezclador.\nN.1 Estante + Espejo.\nN.1 Plato de ducha cerámico 90 x 90 cm.\nN.1 Barra de ducha + Mezclador + Alcachofa.\nN.1 Jabonera de esquina.\nN.1 Calentador eléctrico de agua 60 Litros.\nInstalación eléctrica estándar norma CEE 220V, con tubo PVC Blanco visto, incluyendo:\nN.1 Cuadro eléctrico.\nN.1 Diferencial General.\nN.1 Diferencial para tomas.\nN.2 Interruptores.\nN.2 Tomas.\nN.1 Plafón 19W-LED.\nN.1 Plafón 45W-LED.\nN.1 Convector eléctrico 500W.\nN.1 Aire acondicionado Mono Split Inverter BTU 9000-HISENSE.\nN.1 Caja exterior para conexión eléctrica."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard4-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard5-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard6-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard7-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard8-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard9-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard10-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard11-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard1-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard12-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard2-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard13-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard3-300x300.jpg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-prefabbricati-standard14-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11170",
                    "name" => [
                        "it" => "Abri Pool House in Composito – La Soluzione Perfetta per il tuo Spazio piscinas",
                        "en" => "Composite Pool House Shelter – The Perfect Solution for your Pool Area",
                        "fr" => "Abri Pool House en Composite – La Solution Parfaite pour votre Espace Piscine",
                        "pt" => "Abrigo Pool House em Compósito – A Solução Perfeita para o seu Espaço piscinas",
                        "es" => "Refugio Pool House en Compuesto – La Solución Perfecta para tu Espacio piscinas"
                    ],
                    "price" => "4,200.00",
                    "old_price" => "5,700.00",
                    "sku" => "3276611170",
                    "discount_perce ntage" => null,
                    "link" => "/product/abri-pool-house-in-composito-la-soluzione-perfetta-per-il-tuo-spazio-piscinas/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Abri Pool House in Composito: struttura moderna e resistente per il tuo spazio piscinas. Facile da montare, eco-sostenibile e personalizzabile. Garanzia 7 anni.",
                        "en" => "Composite Pool House Shelter: modern and resistant structure for your pool area. Easy to assemble, eco-sustainable and customizable. 7-year warranty.",
                        "fr" => "Abri Pool House en Composite : structure moderne et résistante pour votre espace piscine. Facile à monter, éco-durable et personnalisable. Garantie 7 ans.",
                        "pt" => "Abrigo Pool House em Compósito: estrutura moderna e resistente para o seu espaço de piscinas. Fácil de montar, ecológico e personalizável. Garantia de 7 anos.",
                        "es" => "Refugio Pool House en Compuesto: estructura moderna y resistente para tu espacio de piscinas. Fácil de montar, ecológico y personalizable. Garantía de 7 años."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/ABR-POOL-15-COMPO-300x300.png",
                        "/assets/uploads/2025/11/ABR-POOL-15-COMPO-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11416",
                    "name" => [
                        "it" => "Bellissima e confortevole casa mobile Chalet Wood Gray",
                        "en" => "Beautiful and comfortable mobile home Chalet Wood Gray",
                        "fr" => "Superbe et confortable mobile home Chalet Wood Gray",
                        "pt" => "Bela e confortável casa móvel Chalet Wood Gray",
                        "es" => "Hermosa y confortable casa móvil Chalet Wood Gray"
                    ],
                    "price" => "9,175.00",
                    "old_price" => "10,900.00",
                    "sku" => "3276611416",
                    "discount_percentage" => null,
                    "link" => "/product/bellissima-e-confortevole-casa-mobile-chalet-wood-gray/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/365292928_1724244028010760_9118458273124612003_n-300x300.jpg",
                        "/assets/uploads/2025/11/293034276_586117456380302_6073713447237894855_n_1-300x300.jpg",
                        "/assets/uploads/2025/11/365279038_247550114843107_8562200479334237832_n-300x300.jpg",
                        "/assets/uploads/2025/11/365333528_6353595518086683_2102379157695520925_n-300x300.jpg",
                        "/assets/uploads/2025/11/363724060_698930378919353_5499858359809471751_n-300x300.jpg",
                        "/assets/uploads/2025/11/365379928_298039132634923_5118853571102416137_n-300x300.jpg",
                        "/assets/uploads/2025/11/364976532_1319282438669996_7616167524475627419_n-300x300.jpg",
                        "/assets/uploads/2025/11/290312388_5217095535038785_5734211567357451703_n_1-300x300.jpg",
                        "/assets/uploads/2025/11/363904005_610502001154042_4856321725211318462_n-300x300.jpg",
                        "/assets/uploads/2025/11/365197132_1346833699376664_5009297107060185704_n-300x300.jpg",
                        "/assets/uploads/2025/11/363870226_811174110496652_5011992326891589801_n-300x300.jpg",
                        "/assets/uploads/2025/11/365331478_3403331143290867_4489396472747588156_n-300x300.jpg",
                        "/assets/uploads/2025/11/365972027_284145297551971_3305144593671605583_n-300x300.jpg",
                        "/assets/uploads/2025/11/365829703_5992157390889558_4818937269328459174_n-300x300.jpg",
                        "/assets/uploads/2025/11/365333519_983835566004490_3840214961872253881_n-300x300.jpg",
                        "/assets/uploads/2025/11/365326371_672023464786602_4496036859777787928_n-300x300.jpg",
                        "/assets/uploads/2025/11/363856732_1550308309128442_6771014741808985047_n-300x300.jpg",
                        "/assets/uploads/2025/11/365270933_1566130337249926_2636523047625156394_n-300x300.jpg",
                        "/assets/uploads/2025/11/291793422_419438036624822_7256667490450555214_n_1-300x300.jpg",
                        "/assets/uploads/2025/11/365304030_267584669362376_6053805823883837312_n-300x300.jpg",
                        "/assets/uploads/2025/11/365379299_143786532098761_5048817808809955357_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10540",
                    "name" => [
                        "it" => "Casa container 20 piedi HC – Completamente attrezzata",
                        "en" => "20ft HC Container House – Fully equipped",
                        "fr" => "Maison conteneur 20 pieds HC – Entièrement équipée",
                        "pt" => "Casa contêiner 20 pés HC – Completamente equipada",
                        "es" => "Casa contenedor 20 pies HC – Completamente equipada"
                    ],
                    "price" => "3,523.52",
                    "old_price" => "5,033.60",
                    "sku" => "3276610540",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-20-piedi-hc-completamente-attrezzata/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa container compatta da 20 piedi HC, rivestita in fibrocemento effetto legno.Dotata di cucina, bagno, isolamento e finiture interne di alta qualità.\nEstetica moderna effetto legno\nIsolamento termico/acustico\nCucina e bagno inclusi\nImpianto elettrico completo\nPronta all'uso",
                        "en" => "Compact 20ft HC container house, clad in wood-effect fiber cement. Equipped with kitchen, bathroom, insulation and high-quality interior finishes.\nModern wood-effect aesthetics\nThermal/acoustic insulation\nKitchen and bathroom included\nComplete electrical system\nReady to use",
                        "fr" => "Maison conteneur compacte 20 pieds HC, revêtue en fibrociment effet bois. Équipée de cuisine, salle de bain, isolation et finitions intérieures de haute qualité.\nEsthétique moderne effet bois\nIsolation thermique/acoustique\nCuisine et salle de bain incluses\nInstallation électrique complète\nPrête à l'emploi",
                        "pt" => "Casa contêiner compacta de 20 pés HC, revestida em fibrocimento efeito madeira. Equipada com cozinha, banheiro, isolamento e acabamentos internos de alta qualidade.\nEstética moderna efeito madeira\nIsolamento térmico/acústico\nCozinha e banheiro incluídos\nSistema elétrico completo\nPronta para uso",
                        "es" => "Casa contenedor compacta de 20 pies HC, revestida en fibrocemento efecto madera. Equipada con cocina, baño, aislamiento y acabados interiores de alta calidad.\nEstética moderna efecto madera\nAislamiento térmico/acústico\nCocina y baño incluidos\nSistema eléctrico completo\nLista para usar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-51-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11488",
                    "name" => [
                        "it" => "Casa container 35 m² – Modello A Cottage, abitabile tutto l'anno",
                        "en" => "35 m² Container House – Cottage Model, habitable all year round",
                        "fr" => "Maison conteneur 35 m² – Modèle Cottage, habitable toute l'année",
                        "pt" => "Casa contêiner 35 m² – Modelo Cottage, habitável o ano todo",
                        "es" => "Casa contenedor 35 m² – Modelo Cottage, habitable todo el año"
                    ],
                    "price" => "8,565.00",
                    "old_price" => "10,500.00",
                    "sku" => "3276611488",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-35-m%c2%b2-modello-a-cottage-abitabile-tutto-lanno/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/s2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_22f6493bdd5e41b28d48a7112b5c32917Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c17ab0588573409d998ed5c7301e06af7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_3faeb8daf85f46b9af56a40ce007ef947Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a831440af5b044ceb500bcb453a3f4627Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b07408f66bed4b54ae9f4d9aba4621267Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_39bd78ffba744ae7a0cad936d91bd1c27Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_57e7b759dcfd4abdb979136e3cd643f37Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_63f028b2a8f64e1e8c4a729da65f235d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_de5b5eccb4d84bd9aee28bf9fd13e4257Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b38a0467affd4b1990a94eb0fee716cb7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_79bec77c32d64532ab1c2873cad0e3ca7Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10541",
                    "name" => [
                        "it" => "Casa container abitativa 40 piedi",
                        "en" => "40ft Residential Container House",
                        "fr" => "Maison conteneur résidentielle 40 pieds",
                        "pt" => "Casa contêiner residencial 40 pés",
                        "es" => "Casa contenedor residencial 40 pies"
                    ],
                    "price" => "4,314.31",
                    "old_price" => "6,163.30",
                    "sku" => "3276610541",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-abitativa-40-piedi/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa container da 40 piedi abitabile, prodotta da Max Shipping Inc.Cucina e bagno inclusi, soggiorno spazioso e consegna veloce in tutto il mondo.\nSpazio abitativo ottimizzato\nCucina attrezzata\nBagno completo\nPerfetta per coppie\nConsegna internazionale rapida",
                        "en" => "40ft habitable container house, manufactured by Max Shipping Inc. Kitchen and bathroom included, spacious living room and fast worldwide delivery.\nOptimized living space\nFitted kitchen\nComplete bathroom\nPerfect for couples\nFast international delivery",
                        "fr" => "Maison conteneur habitable 40 pieds, fabriquée par Max Shipping Inc. Cuisine et salle de bain incluses, salon spacieux et livraison rapide dans le monde entier.\nEspace de vie optimisé\nCuisine équipée\nSalle de bain complète\nParfaite pour les couples\nLivraison internationale rapide",
                        "pt" => "Casa contêiner habitável de 40 pés, fabricada pela Max Shipping Inc. Cozinha e banheiro incluídos, sala de estar espaçosa e entrega rápida em todo o mundo.\nEspaço habitacional otimizado\nCozinha equipada\nBanheiro completo\nPerfeita para casais\nEntrega internacional rápida",
                        "es" => "Casa contenedor habitable de 40 pies, fabricada por Max Shipping Inc. Cocina y baño incluidos, salón espacioso y entrega rápida en todo el mundo.\nEspacio habitable optimizado\nCocina equipada\nBaño completo\nPerfecta para parejas\nEntrega internacional rápida"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11486",
                    "name" => [
                        "it" => "Casa container da 40 piedi HQ / 12 m – Alloggi moderni e funzionali",
                        "en" => "40ft HQ / 12 m Container House – Modern and functional accommodation",
                        "fr" => "Maison conteneur 40 pieds HQ / 12 m – Hébergements modernes et fonctionnels",
                        "pt" => "Casa contêiner 40 pés HQ / 12 m – Alojamentos modernos e funcionais",
                        "es" => "Casa contenedor 40 pies HQ / 12 m – Alojamientos modernos y funcionales"
                    ],
                    "price" => "8,430.00",
                    "old_price" => "9,000.00",
                    "sku" => "3276611486",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-da-40-piedi-hq-12-m-alloggi-moderni-e-funzionali/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_8c3e9e9cee7249b5a7fb6725b40769ac7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_5c65f731767e48f0a09bf216375aa7d47Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8a41d3a21a284b46a19cf4caf1477b187Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ed8f914403eb407eaa89557d62a471f07Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_05aeea25cb204282a3027ef6823bd96f7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_2173f4816b814d82b6b88adb1c790a377Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_315e7bf70c884b99bdbff83b37991f4d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_eaad0fd06b9440349f312eddbad0ff467Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_3c8218b092b14713857c2813f827c4d47Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_822495c6199744bb8db9daf81af34e677Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_28b6e908feaa458cb8a4b8c4239cc3cb7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c561d5b8cdc443eca2a0796f8631c0357Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_26663d69eb71413898764c0835fe468e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_fb4650ce197042b3b4372f609b12fcf57Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10544",
                    "name" => [
                        "it" => "Casa Container Modello PLAYERO",
                        "en" => "PLAYERO Model Container House",
                        "fr" => "Maison Conteneur Modèle PLAYERO",
                        "pt" => "Casa Contêiner Modelo PLAYERO",
                        "es" => "Casa Contenedor Modelo PLAYERO"
                    ],
                    "price" => "4,764.76",
                    "old_price" => "6,806.80",
                    "sku" => "3276610544",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-modello-playero/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Abitazione container di design con ampi spazi e comfort moderni.\nContainer 40′ High Cube\n1 camera e 1 bagno completo\nCucina in PVC a L e armadio a specchio\n2 porte scorrevoli in vetro, climatizzazione inverter\nIsolamento totale e connessioni per generatore",
                        "en" => "Designer container home with spacious areas and modern comforts.\n40′ High Cube container\n1 bedroom and 1 full bathroom\nL-shaped PVC kitchen and mirrored wardrobe\n2 sliding glass doors, inverter air conditioning\nFull insulation and generator connections",
                        "fr" => "Habitat conteneur design avec grands espaces et conforts modernes.\nConteneur 40′ High Cube\n1 chambre et 1 salle de bain complète\nCuisine en PVC en L et armoire miroir\n2 portes coulissantes en verre, climatisation inverter\nIsolation totale et connexions pour génératrice",
                        "pt" => "Habitação contêiner de design com amplos espaços e confortos modernos.\nContêiner 40′ High Cube\n1 quarto e 1 banheiro completo\nCozinha em PVC em L e armário espelhado\n2 portas de correr em vidro, ar condicionado inverter\nIsolamento total e conexões para gerador",
                        "es" => "Vivienda contenedor de diseño con amplios espacios y comodidades modernas.\nContenedor 40′ High Cube\n1 dormitorio y 1 baño completo\nCocina de PVC en L y armario espejo\n2 puertas correderas de vidrio, aire acondicionado inverter\nAislamiento total y conexiones para generador"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-48-300x300.jpeg",
                        "/assets/uploads/2025/11/1-49-300x300.jpeg",
                        "/assets/uploads/2025/11/3-47-300x300.jpeg",
                        "/assets/uploads/2025/11/4-46-300x300.jpeg",
                        "/assets/uploads/2025/11/5-42-300x300.jpeg",
                        "/assets/uploads/2025/11/6-35-300x300.jpeg",
                        "/assets/uploads/2025/11/7-29-300x300.jpeg",
                        "/assets/uploads/2025/11/8-20-300x300.jpeg",
                        "/assets/uploads/2025/11/9-17-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10543",
                    "name" => [
                        "it" => "Casa Container Prefabbricata",
                        "en" => "Prefabricated Container House",
                        "fr" => "Maison Conteneur Préfabriquée",
                        "pt" => "Casa Contêiner Pré-fabricada",
                        "es" => "Casa Contenedor Prefabricada"
                    ],
                    "price" => "3,723.72",
                    "old_price" => "5,319.60",
                    "sku" => "3276610543",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-prefabbricata/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa prefabbricata container resistente e veloce da montare.\nStruttura in acciaio Q235B\nPannelli sandwich in lana di roccia da 75 mm\nPavimento ignifugo in MGO da 18 mm\nFinestre antieffrazione in alluminio\nIgnifuga A1, antisismica e antivento",
                        "en" => "Resistant and quick-to-assemble prefabricated container house.\nQ235B steel structure\n75 mm rock wool sandwich panels\n18 mm MGO fireproof flooring\nAluminum anti-break-in windows\nA1 fireproof, earthquake and wind resistant",
                        "fr" => "Maison conteneur préfabriquée résistante et rapide à monter.\nStructure en acier Q235B\nPanneaux sandwich laine de roche 75 mm\nPlancher ignifuge MGO 18 mm\nFenêtres en aluminium anti-effraction\nIgnifuge A1, antisismique et antivent",
                        "pt" => "Casa contêiner pré-fabricada resistente e rápida de montar.\nEstrutura de aço Q235B\nPainéis sanduíche de lã de rocha 75 mm\nPiso à prova de fogo MGO 18 mm\nJanelas de alumínio anti-arrombamento\nÀ prova de fogo A1, antissísmica e antivento",
                        "es" => "Casa contenedor prefabricada resistente y rápida de montar.\nEstructura de acero Q235B\nPaneles sándwich de lana de roca 75 mm\nSuelo ignífugo MGO 18 mm\nVentanas de aluminio antiefecto\nIgnífuga A1, antisísmica y antiviento"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-19-300x300.webp",
                        "/assets/uploads/2025/11/2-21-300x300.webp",
                        "/assets/uploads/2025/11/3-20-300x300.webp",
                        "/assets/uploads/2025/11/4-17-300x300.webp",
                        "/assets/uploads/2025/11/5-15-300x300.webp",
                        "/assets/uploads/2025/11/6-13-300x300.webp",
                        "/assets/uploads/2025/11/7-10-300x300.webp",
                        "/assets/uploads/2025/11/8-8-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10542",
                    "name" => [
                        "it" => "Casa Container Prefabbricata Modulabile",
                        "en" => "Modular Prefabricated Container House",
                        "fr" => "Maison Conteneur Préfabriquée Modulable",
                        "pt" => "Casa Contêiner Pré-fabricada Modulável",
                        "es" => "Casa Contenedor Prefabricada Modulable"
                    ],
                    "price" => "4,899.89",
                    "old_price" => "6,999.85",
                    "sku" => "3276610542",
                    "discount_percentage" => null,
                    "link" => "/product/casa-container-prefabbricata-modulabile/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa prefabbricata container modulare, progettata per condizioni estreme.\nStruttura in acciaio rinforzato\nIsolamento avanzato con pannelli sandwich\nPersonalizzabile in ogni dettaglio\nResistente a sismi e vento forte\nIdeale per abitazioni, uffici o spazi commerciali",
                        "en" => "Modular prefabricated container house, designed for extreme conditions.\nReinforced steel structure\nAdvanced insulation with sandwich panels\nCustomizable in every detail\nResistant to earthquakes and strong wind\nIdeal for homes, offices or commercial spaces",
                        "fr" => "Maison conteneur préfabriquée modulaire, conçue pour conditions extrêmes.\nStructure en acier renforcé\nIsolation avancée avec panneaux sandwich\nPersonnalisable dans les moindres détails\nRésistant aux séismes et vents forts\nIdéal pour habitations, bureaux ou espaces commerciaux",
                        "pt" => "Casa contêiner pré-fabricada modular, projetada para condições extremas.\nEstrutura de aço reforçado\nIsolamento avançado com painéis sanduíche\nPersonalizável em cada detalhe\nResistente a terremotos e ventos fortes\nIdeal para residências, escritórios ou espaços comerciais",
                        "es" => "Casa contenedor prefabricada modular, diseñada para condiciones extremas.\nEstructura de acero reforzado\nAislamiento avanzado con paneles sándwich\nPersonalizable en cada detalle\nResistente a terremotos y vientos fuertes\nIdeal para viviendas, oficinas o espacios comerciales"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-6-300x300.webp",
                        "/assets/uploads/2025/11/2-8-300x300.webp",
                        "/assets/uploads/2025/11/3-11-300x300.webp",
                        "/assets/uploads/2025/11/4-6-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10621",
                    "name" => [
                        "it" => "Casa Mobile Luisiana Taos – Comfort Abitativo",
                        "en" => "Luisiana Taos Mobile Home – Living Comfort",
                        "fr" => "Mobile Home Luisiana Taos – Confort d'Habitation",
                        "pt" => "Casa Móvel Luisiana Taos – Conforto Habitacional",
                        "es" => "Casa Móvil Luisiana Taos – Confort Habitacional"
                    ],
                    "price" => "4,200.00",
                    "old_price" => "6,866.00",
                    "sku" => "3276610621",
                    "discount_percentage" => null,
                    "link" => "/product/casa-mobile-luisiana-taos-comfort-abitativo/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa mobile moderna da 40 m², perfetta per ogni stagione.\nModello 2023 con design contemporaneo\n2 camere da letto e 2 bagni completi\nCucina full optional e soggiorno arredato\nWC separato e predisposizione per lavatrice\nIsolamento termico per uso annuale",
                        "en" => "Modern 40 m² mobile home, perfect for every season.\n2023 model with contemporary design\n2 bedrooms and 2 full bathrooms\nFully equipped kitchen and furnished living room\nSeparate toilet and washing machine preparation\nThermal insulation for year-round use",
                        "fr" => "Mobile home moderne de 40 m², parfaite pour toutes les saisons.\nModèle 2023 au design contemporain\n2 chambres et 2 salles de bain complètes\nCuisine tout équipée et salon meublé\nWC séparé et préparation machine à laver\nIsolation thermique pour usage annuel",
                        "pt" => "Casa móvel moderna de 40 m², perfeita para todas as estações.\nModelo 2023 com design contemporâneo\n2 quartos e 2 banheiros completos\nCozinha completa e sala mobiliada\nBanheiro separado e preparação para máquina de lavar\nIsolamento térmico para uso anual",
                        "es" => "Casa móvil moderna de 40 m², perfecta para cada estación.\nModelo 2023 con diseño contemporáneo\n2 dormitorios y 2 baños completos\nCocina totalmente equipada y salón amueblado\nWC separado y preparación para lavadora\nAislamiento térmico para uso anual"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-22-300x300.jpeg",
                        "/assets/uploads/2025/11/2-22-300x300.jpeg",
                        "/assets/uploads/2025/11/3-21-300x300.jpeg",
                        "/assets/uploads/2025/11/4-21-300x300.jpeg",
                        "/assets/uploads/2025/11/5-20-300x300.jpeg",
                        "/assets/uploads/2025/11/6-17-300x300.jpeg",
                        "/assets/uploads/2025/11/7-16-300x300.jpeg",
                        "/assets/uploads/2025/11/8-14-300x300.jpeg",
                        "/assets/uploads/2025/11/9-13-300x300.jpeg",
                        "/assets/uploads/2025/11/10-8-300x300.jpeg",
                        "/assets/uploads/2025/11/11-8-300x300.jpeg",
                        "/assets/uploads/2025/11/12-6-300x300.jpeg",
                        "/assets/uploads/2025/11/13-5-300x300.jpeg",
                        "/assets/uploads/2025/11/14-2-300x300.jpeg",
                        "/assets/uploads/2025/11/15-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "12449",
                    "name" => [
                        "it" => "Casa mobile moderna – Dimensioni 10,5 x 3,8 m",
                        "en" => "Modern mobile home – Dimensions 10.5 x 3.8 m",
                        "fr" => "Mobile home moderne – Dimensions 10,5 x 3,8 m",
                        "pt" => "Casa móvel moderna – Dimensões 10,5 x 3,8 m",
                        "es" => "Casa móvil moderna – Dimensiones 10,5 x 3,8 m"
                    ],
                    "price" => "5,500.00",
                    "old_price" => null,
                    "sku" => "9876543456789",
                    "discount_percentage" => null,
                    "link" => "/product/casa-mobile-moderna-dimensioni-105-x-38-m/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/7654345687901-300x300.webp",
                        "/assets/uploads/2025/11/7654345687902-300x300.webp",
                        "/assets/uploads/2025/11/7654345687903-300x300.webp",
                        "/assets/uploads/2025/11/7654345687904-300x300.webp",
                        "/assets/uploads/2025/11/7654345687905-300x300.webp",
                        "/assets/uploads/2025/11/7654345687906-300x300.webp",
                        "/assets/uploads/2025/11/7654345687907-300x300.webp",
                        "/assets/uploads/2025/11/7654345687908-300x300.webp",
                        "/assets/uploads/2025/11/7654345687909-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "12437",
                    "name" => [
                        "it" => "Casa mobile moderna – Dimensioni 12×4 m",
                        "en" => "Modern mobile home – Dimensions 12×4 m",
                        "fr" => "Mobile home moderne – Dimensions 12×4 m",
                        "pt" => "Casa móvel moderna – Dimensões 12×4 m",
                        "es" => "Casa móvil moderna – Dimensiones 12×4 m"
                    ],
                    "price" => "8,000.00",
                    "old_price" => null,
                    "sku" => "097654456789",
                    "discount_percentage" => null,
                    "link" => "/product/casa-mobile-moderna-dimensioni-12x4-m/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Moderna casa mobile 12x4m: costruzione in acciaio e legno, isolamento termico avanzato e configurazioni personalizzabili per ogni esigenza vitale.",
                        "en" => "Modern 12x4m mobile home: steel and wood construction, advanced thermal insulation and customizable configurations for every living need.",
                        "fr" => "Mobile home moderne 12x4m : construction acier et bois, isolation thermique avancée et configurations personnalisables pour chaque besoin vital.",
                        "pt" => "Casa móvel moderna 12x4m: construção em aço e madeira, isolamento térmico avançado e configurações personalizáveis para cada necessidade vital.",
                        "es" => "Casa móvil moderna 12x4m: construcción en acero y madera, aislamiento térmico avanzado y configuraciones personalizables para cada necesidad vital."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/7654334657801-300x300.webp",
                        "/assets/uploads/2025/11/7654334657802-300x300.webp",
                        "/assets/uploads/2025/11/7654334657803-300x300.webp",
                        "/assets/uploads/2025/11/7654334657804-300x300.webp",
                        "/assets/uploads/2025/11/7654334657805-300x300.webp",
                        "/assets/uploads/2025/11/7654334657806-300x300.webp",
                        "/assets/uploads/2025/11/7654334657807-300x300.webp",
                        "/assets/uploads/2025/11/7654334657808-300x300.webp",
                        "/assets/uploads/2025/11/7654334657809-300x300.webp",
                        "/assets/uploads/2025/11/7654334657810-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "12428",
                    "name" => [
                        "it" => "Casa Mobile T2 – Una soluzione abitativa moderna e flessibile",
                        "en" => "T2 Mobile Home – A modern and flexible housing solution",
                        "fr" => "Mobile Home T2 – Une solution d'habitat moderne et flexible",
                        "pt" => "Casa Móvel T2 – Uma solução habitacional moderna e flexível",
                        "es" => "Casa Móvil T2 – Una solución habitacional moderna y flexible"
                    ],
                    "price" => "3,050.00",
                    "old_price" => null,
                    "sku" => "876543456789",
                    "discount_percentage" => null,
                    "link" => "/product/casa-mobile-t2-una-soluzione-abitativa-moderna-e-flessibile/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Mobile Home Container T2: una casa compatta, moderna e personalizzabile, ideale per qualsiasi esigenza. Facile da trasportare, efficiente e sostenibile.",
                        "en" => "T2 Container Mobile Home: a compact, modern and customizable home, ideal for any need. Easy to transport, efficient and sustainable.",
                        "fr" => "Mobile Home Conteneur T2 : une maison compacte, moderne et personnalisable, idéale pour tous les besoins. Facile à transporter, efficace et durable.",
                        "pt" => "Casa Móvel Contêiner T2: uma casa compacta, moderna e personalizável, ideal para qualquer necessidade. Fácil de transportar, eficiente e sustentável.",
                        "es" => "Casa Móvil Contenedor T2: una casa compacta, moderna y personalizable, ideal para cualquier necesidad. Fácil de transportar, eficiente y sostenible."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/876433456789001-300x300.webp",
                        "/assets/uploads/2025/11/876433456789002-300x300.webp",
                        "/assets/uploads/2025/11/876433456789003-300x300.webp",
                        "/assets/uploads/2025/11/876433456789004-300x300.webp",
                        "/assets/uploads/2025/11/876433456789005-300x300.webp",
                        "/assets/uploads/2025/11/876433456789006-300x300.webp",
                        "/assets/uploads/2025/11/876433456789007-300x300.webp",
                        "/assets/uploads/2025/11/876433456789008-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10545",
                    "name" => [
                        "it" => "Casa Modulare González – Spazio Intelligente da 36 m²",
                        "en" => "González Modular House – 36 m² Intelligent Space",
                        "fr" => "Maison Modulaire González – Espace Intelligent de 36 m²",
                        "pt" => "Casa Modular González – Espaço Inteligente de 36 m²",
                        "es" => "Casa Modular González – Espacio Inteligente de 36 m²"
                    ],
                    "price" => "3,200.00",
                    "old_price" => "5,720.00",
                    "sku" => "3276610545",
                    "discount_percentage" => null,
                    "link" => "/product/casa-modulare-gonzalez-spazio-intelligente-da-36-m%c2%b2/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Soluzione abitativa modulare da 36 m² ideale per uso residenziale o turistico.\n1 camera, 1 bagno completo\nOpen space con cucina e soggiorno\nIsolamento poliuretano e lana di vetro\nFinestre termiche in PVC effetto legno\nImpianto elettrico completo e LED",
                        "en" => "36 m² modular housing solution ideal for residential or tourist use.\n1 bedroom, 1 full bathroom\nOpen space with kitchen and living room\nPolyurethane and fiberglass insulation\nThermal PVC windows with wood effect\nComplete electrical system and LED",
                        "fr" => "Solution d'habitat modulaire de 36 m² idéale pour usage résidentiel ou touristique.\n1 chambre, 1 salle de bain complète\nEspace ouvert avec cuisine et salon\nIsolation polyuréthane et laine de verre\nFenêtres thermiques PVC effet bois\nInstallation électrique complète et LED",
                        "pt" => "Solução habitacional modular de 36 m² ideal para uso residencial ou turístico.\n1 quarto, 1 banheiro completo\nEspaço aberto com cozinha e sala\nIsolamento poliuretano e lã de vidro\nJanelas térmicas em PVC efeito madeira\nSistema elétrico completo e LED",
                        "es" => "Solución habitacional modular de 36 m² ideal para uso residencial o turístico.\n1 dormitorio, 1 baño completo\nEspacio abierto con cocina y salón\nAislamiento de poliuretano y lana de vidrio\nVentanas térmicas de PVC efecto madera\nSistema eléctrico completo y LED"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-55-300x300.jpeg",
                        "/assets/uploads/2025/11/2-53-300x300.jpeg",
                        "/assets/uploads/2025/11/3-52-300x300.jpeg",
                        "/assets/uploads/2025/11/4-51-300x300.jpeg",
                        "/assets/uploads/2025/11/5-47-300x300.jpeg",
                        "/assets/uploads/2025/11/6-39-300x300.jpeg",
                        "/assets/uploads/2025/11/7-33-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10620",
                    "name" => [
                        "it" => "Casa Modulare Montes – 36 m² di Comfort, Design",
                        "en" => "Montes Modular House – 36 m² of Comfort, Design",
                        "fr" => "Maison Modulaire Montes – 36 m² de Confort, Design",
                        "pt" => "Casa Modular Montes – 36 m² de Conforto, Design",
                        "es" => "Casa Modular Montes – 36 m² de Confort, Diseño"
                    ],
                    "price" => "3,400.00",
                    "old_price" => "5,278.30",
                    "sku" => "3276610620",
                    "discount_percentage" => null,
                    "link" => "/product/casa-modulare-montes-36-m%c2%b2-di-comfort-design/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa modulare da 36 m² con layout efficiente e design moderno.\n2 camere da letto, 1 bagno completo\nAmpie finestre in alluminio nero termico\nIsolamento con poliuretano e lana di vetro\nRivestimenti interni in OSB, legno e cartongesso\nImpianto elettrico completo e luci LED",
                        "en" => "36 m² modular house with efficient layout and modern design.\n2 bedrooms, 1 full bathroom\nLarge thermal black aluminum windows\nInsulation with polyurethane and fiberglass\nInterior finishes in OSB, wood and plasterboard\nComplete electrical system and LED lights",
                        "fr" => "Maison modulaire de 36 m² avec agencement efficace et design moderne.\n2 chambres, 1 salle de bain complète\nGrandes fenêtres en aluminium noir thermique\nIsolation polyuréthane et laine de verre\nRevêtements intérieurs en OSB, bois et placo\nInstallation électrique complète et lumières LED",
                        "pt" => "Casa modular de 36 m² com layout eficiente e design moderno.\n2 quartos, 1 banheiro completo\nGrandes janelas em alumínio preto térmico\nIsolamento com poliuretano e lã de vidro\nAcabamentos internos em OSB, madeira e gesso cartonado\nSistema elétrico completo e luzes LED",
                        "es" => "Casa modular de 36 m² con distribución eficiente y diseño moderno.\n2 dormitorios, 1 baño completo\nGrandes ventanas de aluminio negro térmico\nAislamiento con poliuretano y lana de vidrio\nRevestimientos interiores en OSB, madera y cartón yeso\nSistema eléctrico completo y luces LED"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-2-300x300.jpeg",
                        "/assets/uploads/2025/11/2-45-300x300.jpeg",
                        "/assets/uploads/2025/11/3-44-300x300.jpeg",
                        "/assets/uploads/2025/11/4-43-300x300.jpeg",
                        "/assets/uploads/2025/11/5-39-300x300.jpeg",
                        "/assets/uploads/2025/11/6-32-300x300.jpeg",
                        "/assets/uploads/2025/11/7-26-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10539",
                    "name" => [
                        "it" => "Casa prefabbricata modulare in container",
                        "en" => "Modular prefabricated container house",
                        "fr" => "Maison préfabriquée modulaire en conteneur",
                        "pt" => "Casa pré-fabricada modular em contêiner",
                        "es" => "Casa prefabricada modular en contenedor"
                    ],
                    "price" => "3,500.00",
                    "old_price" => "5,136.70",
                    "sku" => "3276610539",
                    "discount_percentage" => null,
                    "link" => "/product/casa-prefabbricata-modulare-in-container/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Casa prefabbricata in container in acciaio Q355 HDG, isolata e altamente resistente.Adatta per abitazioni, uffici, alloggi temporanei e strutture modulari.\nStruttura zincata a caldo\nIsolamento tetto in PU ad alta densità\nPareti in EPS o lana di roccia\nFinestre a doppio vetro\nResiste a venti fino a 210 km/h",
                        "en" => "Prefabricated Q355 HDG steel container house, insulated and highly resistant. Suitable for homes, offices, temporary accommodation and modular structures.\nHot-dip galvanized structure\nHigh-density PU roof insulation\nEPS or rock wool walls\nDouble glazed windows\nResists winds up to 210 km/h",
                        "fr" => "Maison conteneur préfabriquée en acier Q355 HDG, isolée et hautement résistante. Adaptée pour habitations, bureaux, hébergements temporaires et structures modulaires.\nStructure galvanisée à chaud\nIsolation toit PU haute densité\nMurs en EPS ou laine de roche\nFenêtres double vitrage\nRésiste aux vents jusqu'à 210 km/h",
                        "pt" => "Casa contêiner pré-fabricada em aço Q355 HDG, isolada e altamente resistente. Adequada para residências, escritórios, alojamentos temporários e estruturas modulares.\nEstrutura galvanizada por imersão a quente\nIsolamento de telhado em PU de alta densidade\nParedes em EPS ou lã de rocha\nJanelas com vidro duplo\nResiste a ventos até 210 km/h",
                        "es" => "Casa contenedor prefabricada en acero Q355 HDG, aislada y altamente resistente. Adecuada para viviendas, oficinas, alojamientos temporales y estructuras modulares.\nEstructura galvanizada en caliente\nAislamiento de techo en PU de alta densidad\nParedes en EPS o lana de roca\nVentanas de doble acristalamiento\nResiste vientos de hasta 210 km/h"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-8-300x300.webp",
                        "/assets/uploads/2025/11/2-10-300x300.webp",
                        "/assets/uploads/2025/11/3-13-300x300.webp",
                        "/assets/uploads/2025/11/4-8-300x300.webp",
                        "/assets/uploads/2025/11/5-7-300x300.webp",
                        "/assets/uploads/2025/11/6-5-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11232",
                    "name" => [
                        "it" => "CHIOSCO/SNACK CONTAINER – UFFICIO – AREA VENDITA",
                        "en" => "KIOSK/SNACK CONTAINER – OFFICE – SALES AREA",
                        "fr" => "KIOSQUE/SNACK CONTENEUR – BUREAU – ZONE DE VENTE",
                        "pt" => "QUIOSQUE/SNACK CONTÊINER – ESCRITÓRIO – ÁREA DE VENDA",
                        "es" => "QUIOSCO/SNACK CONTENEDOR – OFICINA – ÁREA DE VENTA"
                    ],
                    "price" => "6,100.00",
                    "old_price" => "8,100.00",
                    "sku" => "3276611232",
                    "discount_percentage" => null,
                    "link" => "/product/chiosco-snack-container-ufficio-area-vendita/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Realizzazione di un chiosco, snack bar, food truck, taverna in un container marittimo per il primo viaggio.\n# Nessuna lastra di cemento!\n# Nessuna preparazione!\n# Nessun noioso assemblaggio!\n# Grande volume!\n# Cellulare!\n# Architettura della moda!\n# Nessun permesso di costruire!\n# Senza manutenzione!\nCapire :\n1 container primo viaggio da 40′ (12mx2,45×2,60m)\nAperture:\n1 Tenda a gas 2000 x 1200 mm\n1 Tenda a gas 3000 x 1200 mm\n1 anta 800×2000 mm\nContatori:\n1 Bancone pieghevole 2000x300mm\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella 1 riga\n3 luci LED impermeabili\n4 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nColore :\nVernice RAL 7016 in tutto il contenitore.",
                        "en" => "Creation of a kiosk, snack bar, food truck, tavern in a first voyage shipping container.\n# No concrete slab!\n# No preparation!\n# No tedious assembly!\n# Large volume!\n# Mobile!\n# Fashion architecture!\n# No building permit!\n# No maintenance!\nIncludes:\n1 first voyage 40′ container (12mx2.45×2.60m)\nOpenings:\n1 Gas awning 2000 x 1200 mm\n1 Gas awning 3000 x 1200 mm\n1 door 800×2000 mm\nCounters:\n1 Folding counter 2000x300mm\n1 Folding counter 3000x300mm\nELECTRICAL INSTALLATION:\n1 panel 1 row\n3 waterproof LED lights\n4 service sockets 16A+T\n1 single power switch\n1 quick meal\nInternal insulation:\n40mm White Food Sandwich Panel\nColor:\nRAL 7016 paint throughout the container.",
                        "fr" => "Réalisation d'un kiosque, snack bar, food truck, guinguette dans un conteneur maritime premier voyage.\n# Pas de dalle béton !\n# Aucune préparation !\n# Aucun assemblage fastidieux !\n# Gros volume !\n# Mobile !\n# Architecture tendance !\n# Pas de permis de construire !\n# Sans entretien !\nComprend :\n1 conteneur premier voyage 40′ (12mx2,45×2,60m)\nOuvertures :\n1 Store banne 2000 x 1200 mm\n1 Store banne 3000 x 1200 mm\n1 porte 800×2000 mm\nComptoirs :\n1 Comptoir pliant 2000x300mm\n1 Comptoir pliant 3000x300mm\nINSTALLATION ÉLECTRIQUE :\n1 tableau 1 rangée\n3 luminaires LED étanches\n4 prises de service 16A+T\n1 interrupteur d'alimentation simple\n1 prise rapide\nIsolation intérieure :\nPanneau Sandwich Alimentaire 40mm Blanc\nCouleur :\nPeinture RAL 7016 sur tout le conteneur.",
                        "pt" => "Criação de um quiosque, snack bar, food truck, taverna em um contêiner marítimo de primeira viagem.\n# Sem laje de concreto!\n# Sem preparação!\n# Nenhuma montagem tediosa!\n# Grande volume!\n# Móvel!\n# Arquitetura moderna!\n# Sem licença de construção!\n# Sem manutenção!\nInclui:\n1 contêiner de primeira viagem 40′ (12mx2,45×2,60m)\nAberturas:\n1 Toldo retrátil 2000 x 1200 mm\n1 Toldo retrátil 3000 x 1200 mm\n1 porta 800×2000 mm\nBalcões:\n1 Balcão dobrável 2000x300mm\n1 Balcão dobrável 3000x300mm\nINSTALAÇÃO ELÉTRICA:\n1 quadro 1 fileira\n3 luzes LED à prova d'água\n4 tomadas de serviço 16A+T\n1 interruptor de alimentação simples\n1 refeição rápida\nIsolamento interno:\nPainel Sanduíche Alimentar 40mm Branco\nCor:\nTinta RAL 7016 em todo o contêiner.",
                        "es" => "Creación de un quiosco, snack bar, food truck, taberna en un contenedor marítimo de primer viaje.\n# ¡Sin losa de hormigón!\n# ¡Sin preparación!\n# ¡Sin montaje tedioso!\n# ¡Gran volumen!\n# ¡Móvil!\n# ¡Arquitectura moderna!\n# ¡Sin permiso de construcción!\n# ¡Sin mantenimiento!\nIncluye:\n1 contenedor de primer viaje 40′ (12mx2,45×2,60m)\nAberturas:\n1 Toldo 2000 x 1200 mm\n1 Toldo 3000 x 1200 mm\n1 puerta 800×2000 mm\nMostradores:\n1 Mostrador plegable 2000x300mm\n1 Mostrador plegable 3000x300mm\nINSTALACIÓN ELÉCTRICA:\n1 cuadro 1 fila\n3 luces LED impermeables\n4 tomas de servicio 16A+T\n1 interruptor de alimentación simple\n1 toma rápida\nAislamiento interior:\nPanel Sándwich Alimentario 40mm Blanco\nColor:\nPintura RAL 7016 en todo el contenedor."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_1ca25ffe-d7fb-4a9d-9f32-b7cd20ecb708-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_471dece2-7bb0-4986-9a7b-cfc04abb0d1c-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_d156ba0a-ce76-440d-a430-0ea4a81b8b04-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_a90e8119-c992-4ade-8e5f-10973449a4c8-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11054",
                    "name" => [
                        "it" => "Container a doppia porta High Cube da 40 piedi",
                        "en" => "40ft High Cube Double Door Container",
                        "fr" => "Conteneur High Cube double porte 40 pieds",
                        "pt" => "Contêiner High Cube porta dupla 40 pés",
                        "es" => "Contenedor High Cube doble puerta 40 pies"
                    ],
                    "price" => "2,100.00",
                    "old_price" => null,
                    "sku" => "3276611054",
                    "discount_percentage" => null,
                    "link" => "/product/container-a-doppia-porta-high-cube-da-40-piedi/",
                    "categories" => ["container-di-stoccaggio", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "Questo container extra alto da 40 piedi ha porte su entrambi i lati anteriori e offre quindi un facile accesso da due lati. Ideale per lo stoccaggio e il trasporto. Certificato CSC, in acciaio CORTEN, impilabile e disponibile in ogni colore RAL.",
                        "en" => "This 40ft extra-high container has doors on both front sides and therefore offers easy access from two sides. Ideal for storage and transport. CSC certified, CORTEN steel, stackable and available in any RAL color.",
                        "fr" => "Ce conteneur extra-haut de 40 pieds a des portes sur les deux côtés avant et offre donc un accès facile depuis deux côtés. Idéal pour le stockage et le transport. Certifié CSC, en acier CORTEN, empilable et disponible en toutes couleurs RAL.",
                        "pt" => "Este contêiner extra alto de 40 pés tem portas em ambos os lados frontais e, portanto, oferece fácil acesso por dois lados. Ideal para armazenamento e transporte. Certificado CSC, aço CORTEN, empilhável e disponível em qualquer cor RAL.",
                        "es" => "Este contenedor extra alto de 40 pies tiene puertas en ambos lados frontales y por lo tanto ofrece fácil acceso desde dos lados. Ideal para almacenamiento y transporte. Certificado CSC, acero CORTEN, apilable y disponible en cualquier color RAL."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_40_hcdd_ral5013_10-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_40_hcdd_ral5013_13-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_40_hcdd_2_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_40hcdd_5_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11230",
                    "name" => [
                        "it" => "CONTAINER CHIOSCO – SNACK",
                        "en" => "KIOSK CONTAINER – SNACK",
                        "fr" => "CONTENEUR KIOSQUE – SNACK",
                        "pt" => "CONTÊINER QUIOSQUE – SNACK",
                        "es" => "CONTENEDOR QUIOSCO – SNACK"
                    ],
                    "price" => "4,100.00",
                    "old_price" => "5,000.00",
                    "sku" => "3276611230",
                    "discount_percentage" => null,
                    "link" => "/product/container-chiosco-snack/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Realizzazione di uno snack bar, taverna in un container marittimo.\nInclude:\n1 container primo viaggio da 20′ (6mx2,45×2,60m)\nAperture:\n1 Tenda a gas 3000 x 1200 mm\n1 Anta da 90×200 cm\nContatori:\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella 1 riga\n2 luci LED impermeabili\n4 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nPavimento: resina gelcoat grigia con scarico a pavimento per il drenaggio\nVerniciatura: vernice RAL 7016 su tutto il contenitore.\nImpianti idraulici: Arrivo ed evacuazione acqua, installazione approvvigionamento idrico.\nCappe:\nFornitura e posa in opera di una cappa da 2 mt con aspirazione a soffitto.\nImmersioni:\nFornitura e installazione di 1 serbatoio da 1200 m + cumulo istantaneo\nFrigoriferi:\n1 frigorifero negativo da 600 L\n2 Tavoli con 3 ante positive in acciaio inox\nFriggitrice:\n1 friggitrice doppia in acciaio inox da 14 litri",
                        "en" => "Creation of a snack bar, tavern in a shipping container.\nIncludes:\n1 first voyage 20′ container (6mx2.45×2.60m)\nOpenings:\n1 Gas awning 3000 x 1200 mm\n1 Door 90×200 cm\nCounters:\n1 Folding counter 3000x300mm\nELECTRICAL INSTALLATION:\n1 panel 1 row\n2 waterproof LED lights\n4 service sockets 16A+T\n1 single power switch\n1 quick meal\nInternal insulation:\n40mm White Food Sandwich Panel\nFloor: gray gelcoat resin with floor drain for drainage\nPainting: RAL 7016 paint throughout the container.\nPlumbing: Water supply and drainage, water supply installation.\nHoods:\nSupply and installation of a 2 m hood with ceiling extraction.\nImmersion:\nSupply and installation of 1 1200 L tank + instant water heater\nRefrigerators:\n1 600 L freezer\n2 Stainless steel tables with 3 positive doors\nDeep fryer:\n1 14 liter double stainless steel deep fryer",
                        "fr" => "Réalisation d'un snack bar, guinguette dans un conteneur maritime.\nComprend :\n1 conteneur premier voyage 20′ (6mx2,45×2,60m)\nOuvertures :\n1 Store banne 3000 x 1200 mm\n1 Porte 90×200 cm\nComptoirs :\n1 Comptoir pliant 3000x300mm\nINSTALLATION ÉLECTRIQUE :\n1 tableau 1 rangée\n2 luminaires LED étanches\n4 prises de service 16A+T\n1 interrupteur d'alimentation simple\n1 prise rapide\nIsolation intérieure :\nPanneau Sandwich Alimentaire 40mm Blanc\nSol : résine gelcoat grise avec drain de sol pour évacuation\nPeinture : peinture RAL 7016 sur tout le conteneur.\nPlomberie : Arrivée et évacuation d'eau, installation alimentation eau.\nHottes :\nFourniture et pose d'une hotte de 2 m avec extraction plafond.\nImmersion :\nFourniture et installation d'un cumulus instantané 1200 L\nRéfrigérateurs :\n1 réfrigérateur négatif 600 L\n2 Tables inox 3 portes positives\nFriteuse :\n1 friteuse double inox 14 litres",
                        "pt" => "Criação de um snack bar, taverna em um contêiner marítimo.\nInclui:\n1 contêiner de primeira viagem 20′ (6mx2,45×2,60m)\nAberturas:\n1 Toldo retrátil 3000 x 1200 mm\n1 Porta 90×200 cm\nBalcões:\n1 Balcão dobrável 3000x300mm\nINSTALAÇÃO ELÉTRICA:\n1 quadro 1 fileira\n2 luzes LED à prova d'água\n4 tomadas de serviço 16A+T\n1 interruptor de alimentação simples\n1 refeição rápida\nIsolamento interno:\nPainel Sanduíche Alimentar 40mm Branco\nPiso: resina gelcoat cinza com ralo para drenagem\nPintura: tinta RAL 7016 em todo o contêiner.\nEncanamento: Abastecimento e drenagem de água, instalação de abastecimento de água.",
                        "es" => "Creación de un snack bar, taberna en un contenedor marítimo.\nIncluye:\n1 contenedor de primer viaje 20′ (6mx2,45×2,60m)\nAberturas:\n1 Toldo 3000 x 1200 mm\n1 Puerta 90×200 cm\nMostradores:\n1 Mostrador plegable 3000x300mm\nINSTALACIÓN ELÉCTRICA:\n1 cuadro 1 fila\n2 luces LED impermeables\n4 tomas de servicio 16A+T\n1 interruptor de alimentación simple\n1 toma rápida\nAislamiento interior:\nPanel Sándwich Alimentario 40mm Blanco\nSuelo: resina gelcoat gris con desagüe para drenaje\nPintura: pintura RAL 7016 en todo el contenedor.\nFontanería: Llegada y evacuación de agua, instalación de suministro de agua.\nCampanas:\nSuministro e instalación de campana de 2 m con extracción de techo.\nInmersión:\nSuministro e instalación de 1 termo instantáneo de 1200 L\nNeveras:\n1 nevera negativa de 600 L\n2 Mesas de acero inoxidable con 3 puertas positivas\nFreidora:\n1 freidora doble de acero inoxidable de 14 litros"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_0a7593de-36dd-4bae-ad34-aa5ce608c131-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_03eef24f-5ec5-4bdc-ba50-6beff0ba4efd-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_27360151-961a-45d7-8c02-57214e119a48-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_f061789e-0711-4d40-a6b1-9a504cd6ece7-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_43215567-9066-4e2b-914a-406989efe0e7-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],


                [
                    "id" => "11490",
                    "name" => [
                        "it" => "Container commerciale da 29,4 m² – Soluzione modulare per spazi di vendita",
                        "en" => "29.4 m² Commercial Container – Modular Solution for Retail Spaces",
                        "fr" => "Conteneur commercial de 29,4 m² – Solution modulaire pour espaces de vente",
                        "pt" => "Contentor Comercial de 29,4 m² – Solução Modular para Espaços Comerciais",
                        "es" => "Contenedor Comercial de 29,4 m² – Solución Modular para Espacios Comerciales"
                    ],
                    "price" => "7,900.00",
                    "old_price" => "8,800.00",
                    "sku" => "3276611490",
                    "discount_percentage" => null,
                    "link" => "/product/container-commerciale-da-294-m%c2%b2-soluzione-modulare-per-spazi-di-vendita/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_39b91e4f57f1412c812b7e339c35b18d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_fdb4303698fc419ebb7d62429a3501f87Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ef03353297a54e22b84bcb3e6778420c7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ed7d518b54b0447fbaf5a8c3bfc4a6707Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_9f80cb22582540179156d9306ab2b3497Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_997d326658a9480abfc0a7a39794710b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_366fb54e42e24c269eab1791a6cf00937Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11489",
                    "name" => [
                        "it" => "Container commerciale da 29,4 m² – Spazio commerciale modulare e funzionale",
                        "en" => "29.4 m² Commercial Container – Modular and Functional Commercial Space",
                        "fr" => "Conteneur commercial de 29,4 m² – Espace commercial modulaire et fonctionnel",
                        "pt" => "Contentor Comercial de 29,4 m² – Espaço Comercial Modular e Funcional",
                        "es" => "Contenedor Comercial de 29,4 m² – Espacio Comercial Modular y Funcional"
                    ],
                    "price" => "7,350.00",
                    "old_price" => null,
                    "sku" => "3276611489",
                    "discount_percentage" => null,
                    "link" => "/product/container-commerciale-da-294-m%c2%b2-spazio-commerciale-modulare-e-funzionale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/s3-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ff7ea5a6e7f34a098ebf75cae3e3f87e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_937689695eb143dc9ad84611d07310ac7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_1ed6b34975554d85a9ed85bd4629fd1c7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ae17603b709243a29f2c57cc5f1f99b77Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_95c370d838334b3ea5134d1909f118d27Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_2d3797d1c60542f6a88998dbffaf61297Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_4c5b2d83c51f4de48c158ff0d4d095cc7Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11051",
                    "name" => [
                        "it" => "Container da 10 piedi con fondo in acciaio Hard Open Top",
                        "en" => "10 ft Hard Open Top Container with Steel Floor",
                        "fr" => "Conteneur 10 pieds Hard Open Top avec plancher en acier",
                        "pt" => "Contentor de 10 pés Hard Open Top com piso em aço",
                        "es" => "Contenedor de 10 pies Hard Open Top con suelo de acero"
                    ],
                    "price" => "1,100.00",
                    "old_price" => null,
                    "sku" => "3276611051",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-10-piedi-con-fondo-in-acciaio-hard-open-top/",
                    "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Container robusto con tetto in acciaio rimovibile e traversa per un facile carico dall'alto. Con pavimento in acciaio, Lockbox, ventilazione e certificato CSC.  Ideale per lo stoccaggio e il trasporto.",
                        "en" => "Robust container with removable steel roof and cross member for easy overhead loading. With steel floor, Lockbox, ventilation and CSC certificate. Ideal for storage and transport.",
                        "fr" => "Conteneur robuste avec toit en acier amovible et traverse pour un chargement facile par le haut. Avec plancher en acier, Lockbox, ventilation et certificat CSC. Idéal pour le stockage et le transport.",
                        "pt" => "Contentor robusto com teto de aço removível e travessa para fácil carregamento superior. Com piso de aço, Lockbox, ventilação e certificado CSC. Ideal para armazenamento e transporte.",
                        "es" => "Contenedor robusto con techo de acero desmontable y travesaño para fácil carga superior. Con suelo de acero, Lockbox, ventilación y certificado CSC. Ideal para almacenamiento y transporte."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_foto_2-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11832",
                    "name" => [
                        "it" => "CONTAINER DA 20 PIEDI",
                        "en" => "20 FT CONTAINER",
                        "fr" => "CONTENEUR 20 PIEDS",
                        "pt" => "CONTENTOR DE 20 PÉS",
                        "es" => "CONTENEDOR DE 20 PIES"
                    ],
                    "price" => "902.00",
                    "old_price" => "1,400.00",
                    "sku" => "3276611832",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-20-piedi/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059480-700x542-1-300x300.jpg",
                        "/assets/uploads/2025/11/1000059483-300x300.jpg",
                        "/assets/uploads/2025/11/1000059481-300x300.jpg",
                        "/assets/uploads/2025/11/1000059480-300x300.jpg",
                        "/assets/uploads/2025/11/1000059485-300x300.jpg",
                        "/assets/uploads/2025/11/1000059482-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10868",
                    "name" => [
                        "it" => "Container da 20 piedi con lato aperto",
                        "en" => "20 ft Open Side Container",
                        "fr" => "Conteneur 20 pieds à côté ouvert",
                        "pt" => "Contentor de 20 pés com lado aberto",
                        "es" => "Contenedor de 20 pies de lado abierto"
                    ],
                    "price" => "2,150.00",
                    "old_price" => "2,495.00",
                    "sku" => "3276610868",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-20-piedi-con-lato-aperto/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Il container da 20 piedi con lato aperto dispone di un'apertura completa della porta lungo un lato longitudinale e di porte standard sul lato anteriore. Ideale per il carico e lo scarico laterale di merci grandi o ingombranti. Realizzato in robusto acciaio CORTEN, certificato CSC, con pavimento in legno multistrato e Lockbox. Impilabile e adatto per carrelli elevatori. Acquista o noleggia ora!",
                        "en" => "The 20 ft open side container features a full door opening along one long side and standard doors on the front end. Ideal for side loading and unloading of large or bulky goods. Made of robust CORTEN steel, CSC certified, with plywood floor and Lockbox. Stackable and forkliftable. Buy or rent now!",
                        "fr" => "Le conteneur 20 pieds à côté ouvert dispose d'une ouverture de porte complète sur un côté long et de portes standard à l'avant. Idéal pour le chargement et déchargement latéral de marchandises volumineuses ou encombrantes. Fabriqué en acier CORTEN robuste, certifié CSC, avec plancher en contreplaqué et Lockbox. Empilable et adaptable pour chariots élévateurs. Achetez ou louez maintenant!",
                        "pt" => "O contentor de 20 pés de lado aberto apresenta uma abertura total da porta ao longo de um lado comprido e portas padrão na extremidade frontal. Ideal para carga e descarga lateral de mercadorias grandes ou volumosas. Fabricado em robusto aço CORTEN, certificado CSC, com piso de madeira compensada e Lockbox. Empilhável e adequado para empilhadoras. Compre ou alugue agora!",
                        "es" => "El contenedor de 20 pies de lado abierto cuenta con una abertura de puerta completa a lo largo de un lado largo y puertas estándar en el extremo frontal. Ideal para carga y descarga lateral de mercancías grandes o voluminosas. Fabricado en robusto acero CORTEN, certificado CSC, con suelo de madera contrachapada y Lockbox. Apilable y apto para carretillas elevadoras. ¡Compra o alquila ahora!"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_20os_2-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10871",
                    "name" => [
                        "it" => "Container da 20 piedi con lato aperto",
                        "en" => "20 ft Open Side Container",
                        "fr" => "Conteneur 20 pieds à côté ouvert",
                        "pt" => "Contentor de 20 pés com lado aberto",
                        "es" => "Contenedor de 20 pies de lado abierto"
                    ],
                    "price" => "3,400.00",
                    "old_price" => null,
                    "sku" => "3276610871",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-20-piedi-con-lato-aperto-2/",
                    "categories" => ["container-laterale-aperto", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894531_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894671_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894721_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894741_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894871_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894881_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_sl3894521_small_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_2aso_2_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10867",
                    "name" => [
                        "it" => "Container da 20 piedi High Cube con pavimento in acciaio",
                        "en" => "20 ft High Cube Container with Steel Floor",
                        "fr" => "Conteneur 20 pieds High Cube avec plancher en acier",
                        "pt" => "Contentor de 20 pés High Cube com piso em aço",
                        "es" => "Contenedor de 20 pies High Cube con suelo de acero"
                    ],
                    "price" => "1,800.00",
                    "old_price" => null,
                    "sku" => "3276610867",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-20-piedi-high-cube-con-pavimento-in-acciaio/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Container da 20 piedi High Cube con pavimento in acciaio. Container di stoccaggio extra alto con pavimento in acciaio completamente saldato, lockbox, ventilazione e tasche per carrello elevatore. Certificato CSC, realizzato in acciaio CORTEN – ideale per merci pesanti o sensibili allo sporco.",
                        "en" => "20 ft High Cube Container with steel floor. Extra-high storage container with fully welded steel floor, lockbox, ventilation and forklift pockets. CSC certified, made of CORTEN steel – ideal for heavy or dirt-sensitive goods.",
                        "fr" => "Conteneur 20 pieds High Cube avec plancher en acier. Conteneur de stockage extra-haut avec plancher en acier entièrement soudé, lockbox, ventilation et fourreaux pour chariot élévateur. Certifié CSC, en acier CORTEN – idéal pour les marchandises lourdes ou sensibles à la saleté.",
                        "pt" => "Contentor de 20 pés High Cube com piso em aço. Contentor de armazenamento extra-alto com piso de aço totalmente soldado, lockbox, ventilação e bolsas para empilhador. Certificado CSC, fabricado em aço CORTEN – ideal para mercadorias pesadas ou sensíveis à sujidade.",
                        "es" => "Contenedor de 20 pies High Cube con suelo de acero. Contenedor de almacenamiento extra alto con suelo de acero totalmente soldado, lockbox, ventilación y huecos para carretilla elevadora. Certificado CSC, fabricado en acero CORTEN – ideal para mercancías pesadas o sensibles a la suciedad."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/fd7d652d39eb_20hcsf3_1000x9999-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11173",
                    "name" => [
                        "it" => "Container da ufficio da 10 piedi",
                        "en" => "10 ft Office Container",
                        "fr" => "Conteneur de bureau 10 pieds",
                        "pt" => "Contentor de escritório de 10 pés",
                        "es" => "Contenedor de oficina de 10 pies"
                    ],
                    "price" => "750.00",
                    "old_price" => "900.00",
                    "sku" => "3276611173",
                    "discount_percentage" => null,
                    "link" => "/product/container-da-ufficio-da-10-piedi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il nostro container per ufficio da 10 piedi offre uno spazio di lavoro, un ufficio o uno studio che soddisfa le vostre esigenze. E' dotato di riscaldamento, illuminazione installata e isolamento anticondensa.\nÈ la soluzione ideale per privati o aziende che necessitano di uno spazio versatile e flessibile, che possa essere spostato da un cantiere all'altro o facilmente smontabile una volta terminato l'utilizzo. Questo è l'ideale per un uso temporaneo, così come per un uso a lungo termine.\nSpecifiche:\nDimensioni esterne (LxPxH): 2,99 mx 2,43 mx 2,89 m\nDimensioni interne (LxPxA): 2,82 mx 2,35 mx 2,69 m\n1 finestra antivandalica + 1 porta\nFoderato e coibentato in melamina\nPavimento in vinile\nKit elettrico: 2 prese doppie, 1 radiatore, 1 striscia luminosa da 1,5 metri, 1 unità di consumo e collegamento esterno.",
                        "en" => "Our 10 ft office container offers a workspace, office or study that meets your needs. It features heating, installed lighting and anti-condensation insulation.\nIt is the ideal solution for individuals or companies needing a versatile and flexible space that can be moved from site to site or easily dismantled after use. This is ideal for temporary use as well as for long-term use.\nSpecifications:\nExternal dimensions (LxWxH): 2.99 m x 2.43 m x 2.89 m\nInternal dimensions (LxWxH): 2.82 m x 2.35 m x 2.69 m\n1 anti-vandalism window + 1 door\nLined and insulated with melamine\nVinyl flooring\nElectrical kit: 2 double sockets, 1 radiator, 1 light strip of 1.5 meters, 1 consumer unit and external connection.",
                        "fr" => "Notre conteneur de bureau de 10 pieds offre un espace de travail, un bureau ou une étude qui répond à vos besoins. Il est équipé d'un chauffage, d'un éclairage installé et d'une isolation anti-condensation.\nC'est la solution idéale pour les particuliers ou les entreprises ayant besoin d'un espace polyvalent et flexible, pouvant être déplacé d'un chantier à l'autre ou facilement démonté après utilisation. Idéal pour une utilisation temporaire ou à long terme.\nSpécifications :\nDimensions extérieures (LxPxH) : 2,99 m x 2,43 m x 2,89 m\nDimensions intérieures (LxPxH) : 2,82 m x 2,35 m x 2,69 m\n1 fenêtre antivandalisme + 1 porte\nDoublé et isolé en mélaminé\nSol vinyle\nKit électrique : 2 prises doubles, 1 radiateur, 1 bande lumineuse de 1,5 mètres, 1 boîte à fusibles et connexion externe.",
                        "pt" => "O nosso contentor de escritório de 10 pés oferece um espaço de trabalho, escritório ou estúdio que satisfaz as suas necessidades. Dispõe de aquecimento, iluminação instalada e isolamento anticondensação.\nÉ a solução ideal para particulares ou empresas que necessitem de um espaço versátil e flexível, que possa ser deslocado de estaleiro para estaleiro ou facilmente desmontado após a utilização. É ideal para uso temporário, bem como para uso a longo prazo.\nEspecificações:\nDimensões externas (CxLxA): 2,99 m x 2,43 m x 2,89 m\nDimensões internas (CxLxA): 2,82 m x 2,35 m x 2,69 m\n1 janela antivandalismo + 1 porta\nRevestido e isolado em melanina\nPiso vinílico\nKit elétrico: 2 tomadas duplas, 1 radiador, 1 tira de luz de 1,5 metros, 1 quadro elétrico e ligação externa.",
                        "es" => "Nuestro contenedor de oficina de 10 pies ofrece un espacio de trabajo, oficina o estudio que se adapta a sus necesidades. Dispone de calefacción, iluminación instalada y aislamiento anticondensación.\nEs la solución ideal para particulares o empresas que necesitan un espacio versátil y flexible, que pueda trasladarse de una obra a otra o desmontarse fácilmente después de su uso. Es ideal para uso temporal, así como para uso a largo plazo.\nEspecificaciones:\nDimensiones exteriores (LxAnxAl): 2,99 m x 2,43 m x 2,89 m\nDimensiones interiores (LxAnxAl): 2,82 m x 2,35 m x 2,69 m\n1 ventana antivandálica + 1 puerta\nRevestido y aislado con melamina\nSuelo de vinilo\nKit eléctrico: 2 enchufes dobles, 1 radiador, 1 tira de luz de 1,5 metros, 1 cuadro eléctrico y conexión externa."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/3-4-2048x1366-1-768x746-1-300x300.webp",
                        "/assets/uploads/2025/11/5-2-2048x1366-1-300x300.jpeg",
                        "/assets/uploads/2025/11/2-6-768x512-1-300x300.webp",
                        "/assets/uploads/2025/11/pf-container-bureau-10-pieds-300x300.jpg",
                        "/assets/uploads/2025/11/7-2048x1366-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11725",
                    "name" => [
                        "it" => "CONTAINER DOPPIO SANITARIO CON 2 CABINE – WC E DOCCIA",
                        "en" => "DOUBLE SANITARY CONTAINER WITH 2 CABINS – TOILET AND SHOWER",
                        "fr" => "CONTENEUR SANITAIRE DOUBLE AVEC 2 CABINES – WC ET DOUCHE",
                        "pt" => "CONTENTOR SANITÁRIO DUPLO COM 2 CABINES – WC E DUCH",
                        "es" => "CONTENEDOR SANITARIO DOBLE CON 2 CABINAS – WC Y DUCHA"
                    ],
                    "price" => "1,815.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611725",
                    "discount_percentage" => null,
                    "link" => "/product/container-doppio-sanitario-con-2-cabine-wc-e-doccia/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-7-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-3-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-2-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-1-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-8-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-9-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-5-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-4-1_1024x1024-300x300.jpg",
                        "/assets/uploads/2025/11/MK4475-kontener-sanitarny-6-1_1024x1024-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10950",
                    "name" => [
                        "it" => "Container frigoriferici ISO 20ft HC usati",
                        "en" => "Used ISO 20ft HC Reefer Containers",
                        "fr" => "Conteneurs frigorifiques ISO 20ft HC d'occasion",
                        "pt" => "Contentores Frigoríficos ISO 20ft HC usados",
                        "es" => "Contenedores frigoríficos ISO 20ft HC usados"
                    ],
                    "price" => "7,840.00",
                    "old_price" => null,
                    "sku" => "3276610950",
                    "discount_percentage" => null,
                    "link" => "/product/container-frigoriferici-iso-20ft-hc-usati/",
                    "categories" => ["container-refrigerati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Container frigorifero High Cube da 20ft usato di alta qualità con unità Thermo King – ideale per il raffreddamento e lo stoccaggio affidabili di prodotti sensibili alla temperatura. Con altezza interna extra, robusto alloggiamento in acciaio e controllo preciso della temperatura da +25 °C a -25 °C. Perfetto per alimenti, farmaci o eventi. Pronto all'uso ad Amburgo.",
                        "en" => "High-quality used 20ft High Cube reefer container with Thermo King unit – ideal for reliable cooling and storage of temperature-sensitive products. With extra internal height, robust steel housing and precise temperature control from +25 °C to -25 °C. Perfect for food, pharmaceuticals or events. Ready for use in Hamburg.",
                        "fr" => "Conteneur frigorifique High Cube 20ft d'occasion de haute qualité avec unité Thermo King – idéal pour le refroidissement et le stockage fiables de produits sensibles à la température. Avec hauteur intérieure supplémentaire, boîtier en acier robuste et contrôle précis de la température de +25 °C à -25 °C. Parfait pour l'alimentation, les produits pharmaceutiques ou les événements. Prêt à l'emploi à Hambourg.",
                        "pt" => "Contentor frigorífico High Cube de 20ft usado de alta qualidade com unidade Thermo King – ideal para arrefecimento e armazenamento fiável de produtos sensíveis à temperatura. Com altura interna extra, robusta estrutura de aço e controlo preciso de temperatura de +25 °C a -25 °C. Perfeito para alimentos, produtos farmacêuticos ou eventos. Pronto a usar em Hamburgo.",
                        "es" => "Contenedor frigorífico High Cube de 20 pies usado de alta calidad con unidad Thermo King – ideal para refrigeración y almacenamiento fiables de productos sensibles a la temperatura. Con altura interior adicional, robusta carcasa de acero y control preciso de temperatura de +25 °C a -25 °C. Perfecto para alimentos, productos farmacéuticos o eventos. Listo para usar en Hamburgo."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20ft-Kuehlcontainer-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10951",
                    "name" => [
                        "it" => "Container frigorifero High Cube da 10 piedi",
                        "en" => "10 ft High Cube Reefer Container",
                        "fr" => "Conteneur frigorifique High Cube 10 pieds",
                        "pt" => "Contentor Frigorífico High Cube de 10 pés",
                        "es" => "Contenedor Frigorífico High Cube de 10 pies"
                    ],
                    "price" => "5,960.00",
                    "old_price" => null,
                    "sku" => "3276610951",
                    "discount_percentage" => null,
                    "link" => "/product/container-frigorifero-high-cube-da-10-piedi/",
                    "categories" => ["container-refrigerati", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Questo container frigorifero usato da 10 piedi, compatto e affidabile, è ideale per lo stoccaggio sicuro e il trasporto di merci sensibili alla temperatura. È completamente testato e in perfette condizioni. Offre un raffreddamento efficiente, uno stoccaggio sicuro e una costruzione robusta, ideale per aziende e privati che necessitano di celle frigorifere compatte.",
                        "en" => "This compact and reliable used 10 ft reefer container is ideal for the safe storage and transport of temperature-sensitive goods. It is fully tested and in perfect condition. It offers efficient cooling, secure storage and robust construction, ideal for businesses and individuals needing compact cold storage.",
                        "fr" => "Ce conteneur frigorifique compact et fiable de 10 pieds d'occasion est idéal pour le stockage et le transport sécurisés de marchandises sensibles à la température. Il est entièrement testé et en parfait état. Il offre un refroidissement efficace, un stockage sécurisé et une construction robuste, idéal pour les entreprises et les particuliers ayant besoin de chambres froides compactes.",
                        "pt" => "Este contentor frigorífico usado de 10 pés, compacto e fiável, é ideal para o armazenamento e transporte seguro de mercadorias sensíveis à temperatura. Está completamente testado e em perfeitas condições. Oferece arrefecimento eficiente, armazenamento seguro e construção robusta, ideal para empresas e particulares que necessitam de câmaras frigoríficas compactas.",
                        "es" => "Este contenedor frigorífico usado de 10 pies, compacto y fiable, es ideal para el almacenamiento y transporte seguros de mercancías sensibles a la temperatura. Está completamente probado y en perfectas condiciones. Ofrece refrigeración eficiente, almacenamiento seguro y construcción robusta, ideal para empresas y particulares que necesitan cámaras frigoríficas compactas."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20ft-thermo-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11061",
                    "name" => [
                        "it" => "Container frigorifero usato da 10 piedi bianco",
                        "en" => "Used 10 ft White Reefer Container",
                        "fr" => "Conteneur frigorifique 10 pieds d'occasion blanc",
                        "pt" => "Contentor Frigorífico Usado de 10 pés Branco",
                        "es" => "Contenedor Frigorífico Usado de 10 pies Blanco"
                    ],
                    "price" => "3,480.00",
                    "old_price" => null,
                    "sku" => "3276611061",
                    "discount_percentage" => null,
                    "link" => "/product/container-frigorifero-usato-da-10-piedi-bianco/",
                    "categories" => ["container-refrigerati", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Container frigorifero usato da 10 piedi. Questo container frigorifero usato da 10 piedi, compatto e affidabile, è ideale per lo stoccaggio sicuro e il trasporto di merci sensibili alla temperatura. È completamente testato e in perfette condizioni. Offre un raffreddamento efficiente, uno stoccaggio sicuro e una costruzione robusta, ideale per aziende e privati che necessitano di celle frigorifere compatte.",
                        "en" => "Used 10 ft reefer container. This compact and reliable used 10 ft reefer container is ideal for the safe storage and transport of temperature-sensitive goods. It is fully tested and in perfect condition. It offers efficient cooling, secure storage and robust construction, ideal for businesses and individuals needing compact cold storage.",
                        "fr" => "Conteneur frigorifique 10 pieds d'occasion. Ce conteneur frigorifique compact et fiable de 10 pieds d'occasion est idéal pour le stockage et le transport sécurisés de marchandises sensibles à la température. Il est entièrement testé et en parfait état. Il offre un refroidissement efficace, un stockage sécurisé et une construction robuste, idéal pour les entreprises et les particuliers ayant besoin de chambres froides compactes.",
                        "pt" => "Contentor frigorífico usado de 10 pés. Este contentor frigorífico usado de 10 pés, compacto e fiável, é ideal para o armazenamento e transporte seguro de mercadorias sensíveis à temperatura. Está completamente testado e em perfeitas condições. Oferece arrefecimento eficiente, armazenamento seguro e construção robusta, ideal para empresas e particulares que necessitam de câmaras frigoríficas compactas.",
                        "es" => "Contenedor frigorífico usado de 10 pies. Este contenedor frigorífico usado de 10 pies, compacto y fiable, es ideal para el almacenamiento y transporte seguros de mercancías sensibles a la temperatura. Está completamente probado y en perfectas condiciones. Ofrece refrigeración eficiente, almacenamiento seguro y construcción robusta, ideal para empresas y particulares que necesitan cámaras frigoríficas compactas."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/10ft-thermo-refrigerated-container-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10945",
                    "name" => [
                        "it" => "Container High Cube da 10 piedi",
                        "en" => "10 ft High Cube Container",
                        "fr" => "Conteneur 10 pieds High Cube",
                        "pt" => "Contentor de 10 pés High Cube",
                        "es" => "Contenedor de 10 pies High Cube"
                    ],
                    "price" => "1,480.00",
                    "old_price" => null,
                    "sku" => "3276610945",
                    "discount_percentage" => null,
                    "link" => "/product/container-high-cube-da-10-piedi/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Container compatto con altezza interna aggiuntiva per maggiore spazio di stoccaggio. In acciaio CORTEN, con pavimento in compensato, ventilazione, Lockbox e certificato CSC.  Ideale per lo stoccaggio e il trasporto.",
                        "en" => "Compact container with additional internal height for more storage space. Made of CORTEN steel, with plywood floor, ventilation, Lockbox and CSC certificate. Ideal for storage and transport.",
                        "fr" => "Conteneur compact avec hauteur intérieure supplémentaire pour plus d'espace de stockage. En acier CORTEN, avec plancher en contreplaqué, ventilation, Lockbox et certificat CSC. Idéal pour le stockage et le transport.",
                        "pt" => "Contentor compacto com altura interna adicional para mais espaço de armazenamento. Em aço CORTEN, com piso de madeira compensada, ventilação, Lockbox e certificado CSC. Ideal para armazenamento e transporte.",
                        "es" => "Contenedor compacto con altura interior adicional para más espacio de almacenamiento. De acero CORTEN, con suelo de madera contrachapada, ventilación, Lockbox y certificado CSC. Ideal para almacenamiento y transporte."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_img_0602-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10869",
                    "name" => [
                        "it" => "Container High Cube da 20 piedi con lato aperto",
                        "en" => "20 ft High Cube Open Side Container",
                        "fr" => "Conteneur 20 pieds High Cube à côté ouvert",
                        "pt" => "Contentor de 20 pés High Cube com lado aberto",
                        "es" => "Contenedor de 20 pies High Cube de lado abierto"
                    ],
                    "price" => "3,470.00",
                    "old_price" => null,
                    "sku" => "3276610869",
                    "discount_percentage" => null,
                    "link" => "/product/container-high-cube-da-20-piedi-con-lato-aperto/",
                    "categories" => ["container-laterale-aperto", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Questo container extra alto da 20 piedi ha un lato longitudinale completamente apribile, offrendo così il massimo spazio di stoccaggio e un facile accesso laterale. Ideale per lo stoccaggio e il trasporto. Disponibile per il noleggio o l'acquisto.",
                        "en" => "This extra-high 20 ft container has a fully openable long side, thus offering maximum storage space and easy side access. Ideal for storage and transport. Available for rent or purchase.",
                        "fr" => "Ce conteneur extra-haut de 20 pieds a un côté long entièrement ouvrable, offrant ainsi un espace de stockage maximal et un accès latéral facile. Idéal pour le stockage et le transport. Disponible à la location ou à l'achat.",
                        "pt" => "Este contentor extra-alto de 20 pés tem um lado comprido totalmente abrível, oferecendo assim o máximo espaço de armazenamento e fácil acesso lateral. Ideal para armazenamento e transporte. Disponível para aluguer ou compra.",
                        "es" => "Este contenedor extra alto de 20 pies tiene un lado largo totalmente abrible, ofreciendo así el máximo espacio de almacenamiento y un fácil acceso lateral. Ideal para almacenamiento y transporte. Disponible para alquiler o compra."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_3_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_10_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_8_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_20_oh_2_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_20_oh_3_normal-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_20_hc_os_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10942",
                    "name" => [
                        "it" => "Container High Cube da 20 piedi nuovo",
                        "en" => "New 20 ft High Cube Container",
                        "fr" => "Conteneur 20 pieds High Cube neuf",
                        "pt" => "Contentor de 20 pés High Cube novo",
                        "es" => "Contenedor de 20 pies High Cube nuevo"
                    ],
                    "price" => "1,950.00",
                    "old_price" => null,
                    "sku" => "3276610942",
                    "discount_percentage" => null,
                    "link" => "/product/container-high-cube-da-20-piedi-nuovo/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Container extra alto con 30 cm in più di altezza interna – ideale per lo stoccaggio e il trasporto a secco. Certificato CSC, con pavimento in legno multistrato, ventilazione, Lockbox e tasche per carrelli elevatori.  Disponibile nel colore RAL a scelta.",
                        "en" => "Extra-high container with 30 cm more internal height – ideal for storage and dry transport. CSC certified, with plywood floor, ventilation, Lockbox and forklift pockets. Available in your choice of RAL color.",
                        "fr" => "Conteneur extra-haut avec 30 cm de hauteur intérieure supplémentaire – idéal pour le stockage et le transport à sec. Certifié CSC, avec plancher en contreplaqué, ventilation, Lockbox et fourreaux pour chariot élévateur. Disponible dans la couleur RAL de votre choix.",
                        "pt" => "Contentor extra-alto com 30 cm de altura interna adicional – ideal para armazenamento e transporte seco. Certificado CSC, com piso de madeira compensada, ventilação, Lockbox e bolsas para empilhador. Disponível na cor RAL à escolha.",
                        "es" => "Contenedor extra alto con 30 cm más de altura interior – ideal para almacenamiento y transporte seco. Certificado CSC, con suelo de madera contrachapada, ventilación, Lockbox y huecos para carretilla elevadora. Disponible en el color RAL que elija."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_img_7980_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10952",
                    "name" => [
                        "it" => "Container High Cube Hard Open Top da 20 piedi (con fondo in acciaio)",
                        "en" => "20 ft High Cube Hard Open Top Container (with steel floor)",
                        "fr" => "Conteneur 20 pieds High Cube Hard Open Top (avec plancher en acier)",
                        "pt" => "Contentor de 20 pés High Cube Hard Open Top (com piso em aço)",
                        "es" => "Contenedor de 20 pies High Cube Hard Open Top (con suelo de acero)"
                    ],
                    "price" => "1,650.00",
                    "old_price" => null,
                    "sku" => "3276610952",
                    "discount_percentage" => null,
                    "link" => "/product/container-high-cube-hard-open-top-da-20-piedi-con-fondo-in-acciaio/",
                    "categories" => ["container-di-stoccaggio", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Container High Cube Hard Open Top da 20 piedi (con fondo in acciaio). Container extra alto con tetto in acciaio rimovibile, fondo in acciaio bugnato a tenuta di liquidi e Lockbox. Ideale per merci delicate o liquide e per trasformazioni individuali.  Certificato CSC – a noleggio o in vendita.",
                        "en" => "20 ft High Cube Hard Open Top Container (with steel floor). Extra-high container with removable steel roof, liquid-tight chequer plate steel floor and Lockbox. Ideal for delicate or liquid goods and for individual conversions. CSC certified – for rent or sale.",
                        "fr" => "Conteneur 20 pieds High Cube Hard Open Top (avec plancher en acier). Conteneur extra-haut avec toit en acier amovible, plancher en acier strié étanche aux liquides et Lockbox. Idéal pour les marchandises délicates ou liquides et pour les transformations individuelles. Certifié CSC – à louer ou à vendre.",
                        "pt" => "Contentor de 20 pés High Cube Hard Open Top (com piso em aço). Contentor extra-alto com teto de aço removível, piso de aço xadrez estanque a líquidos e Lockbox. Ideal para mercadorias delicadas ou líquidas e para transformações individuais. Certificado CSC – para aluguer ou venda.",
                        "es" => "Contenedor de 20 pies High Cube Hard Open Top (con suelo de acero). Contenedor extra alto con techo de acero desmontable, suelo de acero estriado estanco a líquidos y Lockbox. Ideal para mercancías delicadas o líquidas y para transformaciones individuales. Certificado CSC – en alquiler o venta."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_dsc03347_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10872",
                    "name" => [
                        "it" => "Container High Cube Open Side da 40 piedi",
                        "en" => "40 ft High Cube Open Side Container",
                        "fr" => "Conteneur 40 pieds High Cube Open Side",
                        "pt" => "Contentor de 40 pés High Cube Open Side",
                        "es" => "Contenedor de 40 pies High Cube Open Side"
                    ],
                    "price" => "6,450.00",
                    "old_price" => "6,750.00",
                    "sku" => "3276610872",
                    "discount_percentage" => null,
                    "link" => "/product/container-high-cube-open-side-da-40-piedi/",
                    "categories" => ["container-laterale-aperto", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "Questo container High Cube da 40 piedi ha un lato longitudinale completamente apribile ed è ideale per merci voluminose caricabili lateralmente. Con pavimento in legno, Lockbox, ventilazione e certificato CSC.  Acquisto possibile.",
                        "en" => "This 40 ft High Cube container has a fully openable long side and is ideal for bulky side-loadable goods. With wooden floor, Lockbox, ventilation and CSC certificate. Purchase possible.",
                        "fr" => "Ce conteneur High Cube de 40 pieds a un côté long entièrement ouvrable et est idéal pour les marchandises volumineuses chargeables latéralement. Avec plancher en bois, Lockbox, ventilation et certificat CSC. Achat possible.",
                        "pt" => "Este contentor High Cube de 40 pés tem um lado comprido totalmente abrível e é ideal para mercadorias volumosas carregáveis lateralmente. Com piso de madeira, Lockbox, ventilação e certificado CSC. Compra possível.",
                        "es" => "Este contenedor High Cube de 40 pies tiene un lado largo totalmente abrible y es ideal para mercancías voluminosas cargables lateralmente. Con suelo de madera, Lockbox, ventilación y certificado CSC. Compra posible."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06720-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06722-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06723-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06724-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06725-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06726-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06727-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06729-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06714-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06715-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06717-300x300.webp",
                        "/assets/uploads/2025/11/a0a2dea73060_dsc06719-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11062",
                    "name" => [
                        "it" => "Container Marittimo 10 Piedi STD – Compatto e Resistente",
                        "en" => "10 ft STD Shipping Container – Compact and Durable",
                        "fr" => "Conteneur Maritime 10 Pieds STD – Compact et Résistant",
                        "pt" => "Contentor Marítimo 10 Pés STD – Compacto e Resistente",
                        "es" => "Contenedor Marítimo 10 Pies STD – Compacto y Resistente"
                    ],
                    "price" => "629.00",
                    "old_price" => "800.00",
                    "sku" => "3276611062",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-10-piedi-std-compatto-e-resistente/",
                    "categories" => ["nao-categorizado"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard da 10 piedi, realizzato in acciaio CORTEN, dal design compatto e durevole. Ideale per stoccaggio personale o commerciale, con opzioni di personalizzazione disponibili.",
                        "en" => "Standard 10 ft shipping container, made of CORTEN steel, with a compact and durable design. Ideal for personal or commercial storage, with customization options available.",
                        "fr" => "Conteneur maritime standard de 10 pieds, en acier CORTEN, au design compact et durable. Idéal pour le stockage personnel ou commercial, avec options de personnalisation disponibles.",
                        "pt" => "Contentor marítimo padrão de 10 pés, fabricado em aço CORTEN, com design compacto e durável. Ideal para armazenamento pessoal ou comercial, com opções de personalização disponíveis.",
                        "es" => "Contenedor marítimo estándar de 10 pies, fabricado en acero CORTEN, con un diseño compacto y duradero. Ideal para almacenamiento personal o comercial, con opciones de personalización disponibles."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-5-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-4-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-3-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10946",
                    "name" => [
                        "it" => "Container marittimo da 20 piedi x 8 piedi verde scuro",
                        "en" => "20 ft x 8 ft Dark Green Shipping Container",
                        "fr" => "Conteneur maritime 20 pieds x 8 pieds vert foncé",
                        "pt" => "Contentor marítimo de 20 pés x 8 pés verde escuro",
                        "es" => "Contenedor marítimo de 20 pies x 8 pies verde oscuro"
                    ],
                    "price" => "1,480.00",
                    "old_price" => "1,900.00",
                    "sku" => "3276610946",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-da-20-piedi-x-8-piedi-verde-scuro/",
                    "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Scopri il nostro container standard usato da 20 piedi in verde scuro: robusto, resistente al vento e all'acqua, perfetto per lo stoccaggio e il trasporto. Con la sua struttura in acciaio resistente e le funzionali porte a doppia anta, offre una soluzione affidabile per un uso versatile. Disponibile subito e pronto all'uso!",
                        "en" => "Discover our used 20 ft standard container in dark green: robust, windproof and waterproof, perfect for storage and transport. With its durable steel structure and functional double doors, it offers a reliable solution for versatile use. Available immediately and ready to use!",
                        "fr" => "Découvrez notre conteneur standard 20 pieds d'occasion vert foncé : robuste, résistant au vent et à l'eau, parfait pour le stockage et le transport. Avec sa structure en acier durable et ses portes doubles fonctionnelles, il offre une solution fiable pour une utilisation polyvalente. Disponible immédiatement et prêt à l'emploi !",
                        "pt" => "Descubra o nosso contentor padrão usado de 20 pés em verde escuro: robusto, resistente ao vento e à água, perfeito para armazenamento e transporte. Com a sua estrutura de aço durável e as funcionais portas duplas, oferece uma solução fiável para utilização versátil. Disponível imediatamente e pronto a usar!",
                        "es" => "Descubra nuestro contenedor estándar usado de 20 pies en verde oscuro: robusto, resistente al viento y al agua, perfecto para almacenamiento y transporte. Con su duradera estructura de acero y sus funcionales puertas dobles, ofrece una solución fiable para un uso versátil. ¡Disponible inmediatamente y listo para usar!"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/32-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11836",
                    "name" => [
                        "it" => "Container marittimo da 20 piedi, viaggio unico, con porta avvolgibile.",
                        "en" => "20 ft Shipping Container, one-trip, with roller shutter door.",
                        "fr" => "Conteneur maritime 20 pieds, voyage unique, avec porte enroulable.",
                        "pt" => "Contentor marítimo de 20 pés, viagem única, com porta de enrolar.",
                        "es" => "Contenedor marítimo de 20 pies, viaje único, con puerta enrollable."
                    ],
                    "price" => "1,310.00",
                    "old_price" => "2,050.00",
                    "sku" => "3276611836",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-da-20-piedi-viaggio-unico-con-porta-avvolgibile/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059604-300x300.jpg",
                        "/assets/uploads/2025/11/1000059594-300x300.jpg",
                        "/assets/uploads/2025/11/1000059598-300x300.jpg",
                        "/assets/uploads/2025/11/1000059603-300x300.jpg",
                        "/assets/uploads/2025/11/1000059602-300x300.jpg",
                        "/assets/uploads/2025/11/1000059595-300x300.jpg",
                        "/assets/uploads/2025/11/1000059597-300x300.jpg",
                        "/assets/uploads/2025/11/1000059596-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11056",
                    "name" => [
                        "it" => "Container marittimo High Cube da 10 piedi",
                        "en" => "10 ft High Cube Shipping Container",
                        "fr" => "Conteneur maritime 10 pieds High Cube",
                        "pt" => "Contentor marítimo de 10 pés High Cube",
                        "es" => "Contenedor marítimo de 10 pies High Cube"
                    ],
                    "price" => "1,749.00",
                    "old_price" => null,
                    "sku" => "3276611056",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-high-cube-da-10-piedi/",
                    "categories" => ["container-di-stoccaggio", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Il container High Cube da 10 piedi fa parte della nostra nuova gamma di prodotti. È realizzato in acciaio CORTEN con protezione anticorrosione, un materiale particolarmente resistente con eccellenti proprietà antiruggine che aumentano significativamente la durata del container.\nQuesti mini container High Cube da 10 piedi sono la soluzione di stoccaggio mobile ideale per spazi ristretti.\nIl pavimento del container è costituito da 19 strati di compensato Keruing-Apitong di qualità marina. Questo compensato supera in qualità il compensato tradizionale, poiché ha un'alta densità e quindi un contenuto di umidità molto basso. Questo lo rende resistente agli attacchi di funghi e termiti, un vantaggio decisivo per l'elevata resilienza dei container marittimi durante il carico e lo scarico costanti, nonché durante il trasporto marittimo.\nIl container High Cube da 10 piedi è dotato di 4 aperture di ventilazione resistenti alle intemperie per una circolazione uniforme dell'aria, aste di bloccaggio alte 36 pollici per un facile accesso, tasche per carrelli elevatori per una facile movimentazione e un alloggiamento di sicurezza per lucchetto (Lockbox) per la massima protezione.\nIl container High Cube è un piede più alto rispetto ai container standard e offre quindi più spazio interno senza occupare spazio aggiuntivo sul pavimento.",
                        "en" => "The 10 ft High Cube container is part of our new product range. It is made of CORTEN steel with anti-corrosion protection, a particularly resistant material with excellent anti-rust properties that significantly increase the life of the container.\nThese 10 ft High Cube mini containers are the ideal mobile storage solution for tight spaces.\nThe container floor is made of 19 layers of marine-grade Keruing-Apitong plywood. This plywood surpasses traditional plywood in quality, as it has a high density and therefore a very low moisture content. This makes it resistant to fungal and termite attacks, a decisive advantage for the high resilience of shipping containers during constant loading and unloading, as well as during sea transport.\nThe 10 ft High Cube container is equipped with 4 weather-resistant ventilation openings for uniform air circulation, 36-inch high locking rods for easy access, forklift pockets for easy handling and a lock box for maximum protection.\nThe High Cube container is one foot taller than standard containers and thus offers more interior space without taking up additional floor space.",
                        "fr" => "Le conteneur High Cube de 10 pieds fait partie de notre nouvelle gamme de produits. Il est fabriqué en acier CORTEN avec protection anticorrosion, un matériau particulièrement résistant aux excellentes propriétés antirouille qui augmentent considérablement la durée de vie du conteneur.\nCes mini-conteneurs High Cube de 10 pieds sont la solution de stockage mobile idéale pour les espaces restreints.\nLe plancher du conteneur est constitué de 19 couches de contreplaqué Keruing-Apitong de qualité marine. Ce contreplaqué surpasse le contreplaqué traditionnel en qualité, car il a une densité élevée et donc une très faible teneur en humidité. Cela le rend résistant aux attaques de champignons et de termites, un avantage décisif pour la haute résilience des conteneurs maritimes lors du chargement et du déchargement constants, ainsi que lors du transport maritime.\nLe conteneur High Cube de 10 pieds est équipé de 4 ouvertures de ventilation résistantes aux intempéries pour une circulation d'air uniforme, de tiges de verrouillage hautes de 36 pouces pour un accès facile, de fourreaux pour chariot élévateur pour une manutention facile et d'un boîtier de sécurité pour cadenas (Lockbox) pour une protection maximale.\nLe conteneur High Cube est d'un pied plus haut que les conteneurs standard et offre donc plus d'espace intérieur sans occuper de surface au sol supplémentaire.",
                        "pt" => "O contentor High Cube de 10 pés faz parte da nossa nova gama de produtos. É fabricado em aço CORTEN com proteção anticorrosiva, um material particularmente resistente com excelentes propriedades antiferrugem que aumentam significativamente a vida útil do contentor.\nEstes mini contentores High Cube de 10 pés são a solução de armazenamento móvel ideal para espaços apertados.\nO piso do contentor é constituído por 19 camadas de contraplacado Keruing-Apitong de qualidade marítima. Este contraplacado supera o contraplacado tradicional em qualidade, pois tem uma alta densidade e, portanto, um teor de humidade muito baixo. Isto torna-o resistente a ataques de fungos e térmitas, uma vantagem decisiva para a elevada resiliência dos contentores marítimos durante a carga e descarga constantes, bem como durante o transporte marítimo.\nO contentor High Cube de 10 pés está equipado com 4 aberturas de ventilação resistentes às intempéries para circulação uniforme do ar, hastes de bloqueio de 36 polegadas para fácil acesso, bolsas para empilhador para fácil manuseamento e uma caixa de segurança para cadeado (Lockbox) para máxima proteção.\nO contentor High Cube é um pé mais alto do que os contentores padrão e oferece assim mais espaço interior sem ocupar espaço adicional no chão.",
                        "es" => "El contenedor High Cube de 10 pies es parte de nuestra nueva gama de productos. Está fabricado en acero CORTEN con protección anticorrosión, un material particularmente resistente con excelentes propiedades antioxidantes que aumentan significativamente la vida útil del contenedor.\nEstos mini contenedores High Cube de 10 pies son la solución de almacenamiento móvil ideal para espacios reducidos.\nEl suelo del contenedor consta de 19 capas de madera contrachapada Keruing-Apitong de calidad marina. Esta madera contrachapada supera en calidad a la madera contrachapada tradicional, ya que tiene una alta densidad y, por lo tanto, un contenido de humedad muy bajo. Esto lo hace resistente a los ataques de hongos y termitas, una ventaja decisiva para la alta resiliencia de los contenedores marítimos durante la carga y descarga constantes, así como durante el transporte marítimo.\nEl contenedor High Cube de 10 pies está equipado con 4 aberturas de ventilación resistentes a la intemperie para una circulación uniforme del aire, barras de bloqueo de 36 pulgadas para fácil acceso, huecos para carretilla elevadora para fácil manipulación y una caja de seguridad para candado (Lockbox) para máxima protección.\nEl contenedor High Cube es un pie más alto que los contenedores estándar y, por lo tanto, ofrece más espacio interior sin ocupar espacio adicional en el suelo."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a45af521-9d15-406d-98ff-73675ca623b9-1024x683-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11239",
                    "name" => [
                        "it" => "CONTAINER MARITTIMO REFRIGERATO DA 40 PIEDI USATO",
                        "en" => "USED 40FT REFRIGERATED SHIPPING CONTAINER",
                        "fr" => "CONTENEUR MARITIME RÉFRIGÉRÉ 40 PIEDS OCCASION",
                        "pt" => "CONTÊINER MARÍTIMO REFRIGERADO 40 PÉS USADO",
                        "es" => "CONTENEDOR MARÍTIMO REFRIGERADO 40 PIES USADO"
                    ],
                    "price" => "4,900.00",
                    "old_price" => "5,100.00",
                    "sku" => "3276611239",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-refrigerato-da-40-piedi-usato/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Caratteristiche generali\nSottocategoria: Container marittimo refrigerato\nMarca: THERMO KING\nEtà: 2014\nCondizione: usato\nProprietà\nTara: 4.650 kg\nCapacità di carico: 30.350 kg\nPeso massimo: 35.000 kg\nDimensioni complessive: (L) 12.190 cm x (L) 2.440 cm x (H) 2.890 cm\nDescrizione\nColore: bianco\nCarico utile: 30350 kg.\nMarchio dell'unità fredda: Thermo King",
                        "en" => "General features\nSubcategory: Refrigerated shipping container\nBrand: THERMO KING\nYear: 2014\nCondition: used\nProperties\nTare weight: 4,650 kg\nPayload: 30,350 kg\nMaximum weight: 35,000 kg\nOverall dimensions: (L) 12,190 cm x (W) 2,440 cm x (H) 2,890 cm\nDescription\nColor: white\nPayload: 30350 kg.\nRefrigeration unit brand: Thermo King",
                        "fr" => "Caractéristiques générales\nSous-catégorie : Conteneur maritime réfrigéré\nMarque : THERMO KING\nÂge : 2014\nÉtat : occasion\nPropriétés\nTare : 4 650 kg\nCapacité de charge : 30 350 kg\nPoids maximum : 35 000 kg\nDimensions hors tout : (L) 12 190 cm x (l) 2 440 cm x (H) 2 890 cm\nDescription\nCouleur : blanc\nCharge utile : 30350 kg.\nMarque de l'unité froide : Thermo King",
                        "pt" => "Características gerais\nSubcategoria: Contêiner marítimo refrigerado\nMarca: THERMO KING\nAno: 2014\nCondição: usado\nPropriedades\nTara: 4.650 kg\nCapacidade de carga: 30.350 kg\nPeso máximo: 35.000 kg\nDimensões totais: (C) 12.190 cm x (L) 2.440 cm x (A) 2.890 cm\nDescrição\nCor: branco\nCarga útil: 30350 kg.\nMarca da unidade frigorífica: Thermo King",
                        "es" => "Características generales\nSubcategoría: Contenedor marítimo refrigerado\nMarca: THERMO KING\nAño: 2014\nCondición: usado\nPropiedades\nTara: 4.650 kg\nCapacidad de carga: 30.350 kg\nPeso máximo: 35.000 kg\nDimensiones totales: (L) 12.190 cm x (A) 2.440 cm x (Al) 2.890 cm\nDescripción\nColor: blanco\nCarga útil: 30350 kg.\nMarca de la unidad frigorífica: Thermo King"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-2-300x300.jpeg",
                        "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-300x300.jpeg",
                        "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-1-300x300.jpeg",
                        "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-3-300x300.jpeg",
                        "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-4-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11052",
                    "name" => [
                        "it" => "Container marittimo standard da 12 piedi bianco",
                        "en" => "White 12ft standard shipping container",
                        "fr" => "Conteneur maritime standard 12 pieds blanc",
                        "pt" => "Contêiner marítimo padrão 12 pés branco",
                        "es" => "Contenedor marítimo estándar 12 pies blanco"
                    ],
                    "price" => "1,870.00",
                    "old_price" => null,
                    "sku" => "3276611052",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-standard-da-12-piedi-bianco/",
                    "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Il container standard da 12 piedi offre una soluzione pratica per le esigenze di stoccaggio e trasporto in spazi limitati. Con una robusta struttura in acciaio, un design resistente al vento e all'acqua e angoli ISO per una facile movimentazione, è ideale per cantieri, attività commerciali e uso privato. La soluzione intermedia perfetta tra i container da 10 e 20 piedi.",
                        "en" => "The 12ft standard container offers a practical solution for storage and transport needs in limited spaces. With a robust steel structure, wind and water resistant design and ISO corners for easy handling, it is ideal for construction sites, commercial activities and private use. The perfect intermediate solution between 10 and 20ft containers.",
                        "fr" => "Le conteneur standard de 12 pieds offre une solution pratique pour les besoins de stockage et de transport dans des espaces limités. Avec une structure en acier robuste, une conception résistante au vent et à l'eau et des coins ISO pour une manutention facile, il est idéal pour les chantiers, les activités commerciales et l'usage privé. La solution intermédiaire parfaite entre les conteneurs de 10 et 20 pieds.",
                        "pt" => "O contêiner padrão de 12 pés oferece uma solução prática para necessidades de armazenamento e transporte em espaços limitados. Com estrutura robusta de aço, design resistente ao vento e à água e cantos ISO para fácil movimentação, é ideal para canteiros de obras, atividades comerciais e uso privado. A solução intermediária perfeita entre contêineres de 10 e 20 pés.",
                        "es" => "El contenedor estándar de 12 pies ofrece una solución práctica para necesidades de almacenamiento y transporte en espacios limitados. Con una robusta estructura de acero, diseño resistente al viento y al agua y esquinas ISO para fácil manejo, es ideal para obras, actividades comerciales y uso privado. La solución intermedia perfecta entre contenedores de 10 y 20 pies."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/10ft-See-Containers-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11060",
                    "name" => [
                        "it" => "Container marittimo usato da 20 piedi blu",
                        "en" => "Used blue 20ft shipping container",
                        "fr" => "Conteneur maritime usagé 20 pieds bleu",
                        "pt" => "Contêiner marítimo usado 20 pés azul",
                        "es" => "Contenedor marítimo usado 20 pies azul"
                    ],
                    "price" => "1,145.00",
                    "old_price" => "1,350.00",
                    "sku" => "3276611060",
                    "discount_percentage" => null,
                    "link" => "/product/container-marittimo-usato-da-20-piedi-blu/",
                    "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Container da magazzino usato da 20 piedi in Germania, consegna inclusa (scarico su richiesta), disponibile immediatamente!\nOptional con allarme antintrusione!",
                        "en" => "Used 20ft warehouse container in Germany, delivery included (unloading on request), available immediately!\nOptional with anti-intrusion alarm!",
                        "fr" => "Conteneur d'entrepôt usagé de 20 pieds en Allemagne, livraison incluse (déchargement sur demande), disponible immédiatement !\nOption avec alarme anti-intrusion !",
                        "pt" => "Contêiner de armazém usado de 20 pés na Alemanha, entrega incluída (descarregamento sob consulta), disponível imediatamente!\nOpcional com alarme anti-intrusão!",
                        "es" => "Contenedor de almacén usado de 20 pies en Alemania, entrega incluida (descarga bajo petición), ¡disponible inmediatamente!\n¡Opcional con alarma antintrusión!"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/tempimagez2xrr5-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10870",
                    "name" => [
                        "it" => "Container officina da 20 piedi",
                        "en" => "20ft workshop container",
                        "fr" => "Conteneur atelier 20 pieds",
                        "pt" => "Contêiner oficina 20 pés",
                        "es" => "Contenedor taller 20 pies"
                    ],
                    "price" => "3,570.00",
                    "old_price" => "4,300.00",
                    "sku" => "3276610870",
                    "discount_percentage" => null,
                    "link" => "/product/container-officina-da-20-piedi/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Container officina da 20 piedi: la tua postazione di lavoro mobileCon banco da lavoro, scaffali, allacciamento elettrico e spazio di stoccaggio, questo container completamente attrezzato è la soluzione ideale per officine temporanee o permanenti. In acciaio CORTEN, certificato CSC, impilabile e disponibile in qualsiasi colore RAL. Disponibile per il noleggio o l'acquisto.",
                        "en" => "20ft workshop container: your mobile workstation. With workbench, shelves, electrical connection and storage space, this fully equipped container is the ideal solution for temporary or permanent workshops. Made of CORTEN steel, CSC certified, stackable and available in any RAL color. Available for rent or purchase.",
                        "fr" => "Conteneur atelier 20 pieds : votre poste de travail mobile. Avec établi, étagères, raccordement électrique et espace de stockage, ce conteneur entièrement équipé est la solution idéale pour les ateliers temporaires ou permanents. En acier CORTEN, certifié CSC, empilable et disponible en toutes couleurs RAL. Disponible à la location ou à l'achat.",
                        "pt" => "Contêiner oficina de 20 pés: sua estação de trabalho móvel. Com bancada, prateleiras, conexão elétrica e espaço de armazenamento, este contêiner totalmente equipado é a solução ideal para oficinas temporárias ou permanentes. Em aço CORTEN, certificado CSC, empilhável e disponível em qualquer cor RAL. Disponível para aluguel ou compra.",
                        "es" => "Contenedor taller de 20 pies: su puesto de trabajo móvil. Con banco de trabajo, estantes, conexión eléctrica y espacio de almacenamiento, este contenedor totalmente equipado es la solución ideal para talleres temporales o permanentes. En acero CORTEN, certificado CSC, apilable y disponible en cualquier color RAL. Disponible para alquiler o compra."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_20wc4_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11365",
                    "name" => [
                        "it" => "Container per officina da 10 piedi",
                        "en" => "10ft workshop container",
                        "fr" => "Conteneur atelier 10 pieds",
                        "pt" => "Contêiner oficina 10 pés",
                        "es" => "Contenedor taller 10 pies"
                    ],
                    "price" => "1,190.00",
                    "old_price" => "1,500.00",
                    "sku" => "3276611365",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-officina-da-10-piedi/",
                    "categories" => ["nao-categorizado"],
                    "short_description" => [
                        "it" => "Dimensioni esterne: 2.991 mm x 2.438 mm x 2.591 mm\n&nbsp;\nDimensioni interne: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDimensioni della porta: 2338 mm x 2280 mm\n&nbsp;\nVolume: 15,9 m³\n&nbsp;\nPallet europei: 5",
                        "en" => "External dimensions: 2,991 mm x 2,438 mm x 2,591 mm\n&nbsp;\nInternal dimensions: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDoor dimensions: 2338 mm x 2280 mm\n&nbsp;\nVolume: 15.9 m³\n&nbsp;\nEuro pallets: 5",
                        "fr" => "Dimensions extérieures : 2 991 mm x 2 438 mm x 2 591 mm\n&nbsp;\nDimensions intérieures : 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDimensions de la porte : 2338 mm x 2280 mm\n&nbsp;\nVolume : 15,9 m³\n&nbsp;\nPalettes européennes : 5",
                        "pt" => "Dimensões externas: 2.991 mm x 2.438 mm x 2.591 mm\n&nbsp;\nDimensões internas: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDimensões da porta: 2338 mm x 2280 mm\n&nbsp;\nVolume: 15,9 m³\n&nbsp;\nPaletes europeias: 5",
                        "es" => "Dimensiones exteriores: 2.991 mm x 2.438 mm x 2.591 mm\n&nbsp;\nDimensiones interiores: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDimensiones de la puerta: 2338 mm x 2280 mm\n&nbsp;\nVolumen: 15,9 m³\n&nbsp;\nPalés europeos: 5"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/image050-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image049-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image051-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image052-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image059-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image057-768x576-2-300x300.jpg",
                        "/assets/uploads/2025/11/image055-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image056-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/image060-768x576-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11838",
                    "name" => [
                        "it" => "Container per spedizioni con apertura laterale da 20 piedi",
                        "en" => "20ft side opening shipping container",
                        "fr" => "Conteneur maritime à ouverture latérale 20 pieds",
                        "pt" => "Contêiner marítimo com abertura lateral 20 pés",
                        "es" => "Contenedor marítimo con apertura lateral 20 pies"
                    ],
                    "price" => "1,250.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611838",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-spedizioni-con-apertura-laterale-da-20-piedi/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059645-300x300.jpg",
                        "/assets/uploads/2025/11/1000059649-300x300.jpg",
                        "/assets/uploads/2025/11/1000059648-300x300.jpg",
                        "/assets/uploads/2025/11/1000059647-300x300.jpg",
                        "/assets/uploads/2025/11/1000059646-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11834",
                    "name" => [
                        "it" => "Container per spedizioni con apertura laterale High Cube da 20 piedi",
                        "en" => "20ft High Cube side opening shipping container",
                        "fr" => "Conteneur maritime High Cube à ouverture latérale 20 pieds",
                        "pt" => "Contêiner marítimo High Cube com abertura lateral 20 pés",
                        "es" => "Contenedor marítimo High Cube con apertura lateral 20 pies"
                    ],
                    "price" => "1,250.00",
                    "old_price" => "1,800.00",
                    "sku" => "3276611834",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-spedizioni-con-apertura-laterale-high-cube-da-20-piedi/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059517-300x300.jpg",
                        "/assets/uploads/2025/11/1000059515-300x300.jpg",
                        "/assets/uploads/2025/11/1000059516-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11958",
                    "name" => [
                        "it" => "Container per spedizioni con apertura laterale High Cube da 40 piedi",
                        "en" => "40ft High Cube side opening shipping container",
                        "fr" => "Conteneur maritime High Cube à ouverture latérale 40 pieds",
                        "pt" => "Contêiner marítimo High Cube com abertura lateral 40 pés",
                        "es" => "Contenedor marítimo High Cube con apertura lateral 40 pies"
                    ],
                    "price" => "1,645.00",
                    "old_price" => "2,300.00",
                    "sku" => "3276611958",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-spedizioni-con-apertura-laterale-high-cube-da-40-piedi/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059428-300x300.jpg",
                        "/assets/uploads/2025/11/1000059429-300x300.jpg",
                        "/assets/uploads/2025/11/1000059422-300x300.jpg",
                        "/assets/uploads/2025/11/1000059426-300x300.jpg",
                        "/assets/uploads/2025/11/1000059424-300x300.jpg",
                        "/assets/uploads/2025/11/1000059427-300x300.jpg",
                        "/assets/uploads/2025/11/1000059423-300x300.jpg",
                        "/assets/uploads/2025/11/1000059431-300x300.jpg",
                        "/assets/uploads/2025/11/1000059425-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11959",
                    "name" => [
                        "it" => "Container per spedizioni con porta laterale da 40 piedi – Configurazione a 2 o 4 porte",
                        "en" => "40ft side door shipping container – 2 or 4 door configuration",
                        "fr" => "Conteneur maritime à porte latérale 40 pieds – Configuration 2 ou 4 portes",
                        "pt" => "Contêiner marítimo com porta lateral 40 pés – Configuração de 2 ou 4 portas",
                        "es" => "Contenedor marítimo con puerta lateral 40 pies – Configuración de 2 o 4 puertas"
                    ],
                    "price" => "2,350.00",
                    "old_price" => "3,000.00",
                    "sku" => "3276611959",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-spedizioni-con-porta-laterale-da-40-piedi-configurazione-a-2-o-4-porte/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059680-300x300.jpg",
                        "/assets/uploads/2025/11/1000059682-300x300.jpg",
                        "/assets/uploads/2025/11/1000059677-300x300.jpg",
                        "/assets/uploads/2025/11/1000059684-300x300.jpg",
                        "/assets/uploads/2025/11/1000059679-300x300.jpg",
                        "/assets/uploads/2025/11/1000059681-300x300.jpg",
                        "/assets/uploads/2025/11/1000059683-300x300.jpg",
                        "/assets/uploads/2025/11/1000059678-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11491",
                    "name" => [
                        "it" => "Container per ufficio sociale da 15 m²: compatto e funzionale",
                        "en" => "15 m² welfare office container: compact and functional",
                        "fr" => "Conteneur bureau social 15 m² : compact et fonctionnel",
                        "pt" => "Contêiner escritório social 15 m²: compacto e funcional",
                        "es" => "Contenedor oficina social 15 m²: compacto y funcional"
                    ],
                    "price" => "3,520.00",
                    "old_price" => "3,750.00",
                    "sku" => "3276611491",
                    "discount_percentage" => null,
                    "link" => "/product/container-per-ufficio-sociale-da-15-m%c2%b2-compatto-e-funzionale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_33fa97fe7562487d85303b5477f427167Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_35d3c128997849fa814f211bcad8cb757Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e394e70a727c4cab95aef6b477a0dfbc7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_0fcbbfdbf6ae4769a15591b8775d7c3d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_72c3a1c9be6c42debddc011d3b64970b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e5c03143ac514bf18e6c0bcf9178f6037Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_4936553f91144871aeefe9d4627bc64a7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_d10fb7cec82941e9afdbaaa47015b0c57Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10949",
                    "name" => [
                        "it" => "Container reefer domestico da 20 piedi",
                        "en" => "20ft domestic reefer container",
                        "fr" => "Conteneur reefer domestique 20 pieds",
                        "pt" => "Contêiner reefer doméstico 20 pés",
                        "es" => "Contenedor reefer doméstico 20 pies"
                    ],
                    "price" => "4,280.00",
                    "old_price" => "4,780.00",
                    "sku" => "3276610949",
                    "discount_percentage" => null,
                    "link" => "/product/container-reefer-domestico-da-20-piedi/",
                    "categories" => ["container-refrigerati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Container refrigerato ad alte prestazioni con intervallo di temperatura da -40 °C a +30 °C. Dotato di rivestimento in acciaio inossidabile, pavimento piatto, test PTI, tasche per carrelli elevatori e collegamento a 380V. Disponibile per il noleggio o l'acquisto.",
                        "en" => "High-performance refrigerated container with temperature range from -40 °C to +30 °C. Equipped with stainless steel lining, flat floor, PTI test, forklift pockets and 380V connection. Available for rent or purchase.",
                        "fr" => "Conteneur réfrigéré haute performance avec plage de température de -40 °C à +30 °C. Équipé d'un revêtement en acier inoxydable, d'un sol plat, d'un test PTI, de fourches pour chariots élévateurs et d'une connexion 380V. Disponible à la location ou à l'achat.",
                        "pt" => "Contêiner refrigerado de alto desempenho com faixa de temperatura de -40 °C a +30 °C. Equipado com revestimento em aço inoxidável, piso plano, teste PTI, bolsos para empilhadeira e conexão 380V. Disponível para aluguel ou compra.",
                        "es" => "Contenedor refrigerado de alto rendimiento con rango de temperatura de -40 °C a +30 °C. Equipado con revestimiento de acero inoxidable, suelo plano, prueba PTI, bolsillos para carretillas elevadoras y conexión 380V. Disponible para alquiler o compra."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_img_0866_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10947",
                    "name" => [
                        "it" => "Container refrigerato usato da 40 piedi HC ISO",
                        "en" => "Used 40ft HC ISO refrigerated container",
                        "fr" => "Conteneur réfrigéré occasion 40 pieds HC ISO",
                        "pt" => "Contêiner refrigerado usado 40 pés HC ISO",
                        "es" => "Contenedor refrigerado usado 40 pies HC ISO"
                    ],
                    "price" => "8,760.00",
                    "old_price" => null,
                    "sku" => "3276610947",
                    "discount_percentage" => null,
                    "link" => "/product/container-refrigerato-usato-da-40-piedi-hc-iso/",
                    "categories" => ["container-refrigerati", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "I container per surgelati e i container isolanti vengono utilizzati per il trasporto o lo stoccaggio delicato di alimenti, ma anche di altri beni per la cui integrità è necessario mantenere una determinata temperatura.\n&nbsp;",
                        "en" => "Freezer containers and insulated containers are used for the transport or delicate storage of food, but also of other goods whose integrity requires maintaining a certain temperature.\n&nbsp;",
                        "fr" => "Les conteneurs pour surgelés et les conteneurs isolants sont utilisés pour le transport ou le stockage délicat de denrées alimentaires, mais aussi d'autres marchandises dont l'intégrité nécessite le maintien d'une température déterminée.\n&nbsp;",
                        "pt" => "Contêineres para congelados e contêineres isolantes são usados para transporte ou armazenamento delicado de alimentos, mas também de outros produtos cuja integridade requer a manutenção de uma determinada temperatura.\n&nbsp;",
                        "es" => "Los contenedores para congelados y los contenedores aislantes se utilizan para el transporte o almacenamiento delicado de alimentos, pero también de otras mercancías cuya integridad requiere mantener una temperatura determinada.\n&nbsp;"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/40ft-refrigerated-container-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11487",
                    "name" => [
                        "it" => "Container ristorante HC da 20 piedi – Disposizione unidirezionale Ideale per la ristorazione mobile o come chiosco di vendita.",
                        "en" => "20ft HC restaurant container – One-way layout Ideal for mobile catering or as a sales kiosk.",
                        "fr" => "Conteneur restaurant HC 20 pieds – Disposition unidirectionnelle Idéal pour la restauration mobile ou comme kiosque de vente.",
                        "pt" => "Contêiner restaurante HC 20 pés – Layout unidirecional Ideal para catering móvel ou como quiosque de venda.",
                        "es" => "Contenedor restaurante HC 20 pies – Distribución unidireccional Ideal para restauración móvil o como quiosco de venta."
                    ],
                    "price" => "4,050.00",
                    "old_price" => "4,500.00",
                    "sku" => "3276611487",
                    "discount_percentage" => null,
                    "link" => "/product/container-ristorante-hc-da-20-piedi-disposizione-unidirezionale-ideale-per-la-ristorazione-mobile-o-come-chiosco-di-vendita/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_0c7986ded9934eb68d02c2b4053b4ef37Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a4bff253a0454ef9b5a909c0c1a755297Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e931a2f7e49b46e5860fb2890271ae5f7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_162fa17d931242fcaa9e0fabebef069b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_17104b6261714fb7ad5e3efda6fe7f157Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b8e41d237f83424b983ab1772c99e8657Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ac358e0a586e4d44bfa4b5407c73ea6d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_354ee26f4d4e470a9242f494c7f152e07Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_fae5b3bab3664056b1befb870a1249f87Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c0008bfe5aa64e87921ee9dfbfa8dbcd7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_cbcf2afca7c64500bcbe309ff151b4877Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_f0d38bf78a47476281e63c61a5527f0d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_58c2820489f3487cbd3c6a978c7054437Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8e97e2ec796a47e3bd8c7077b6881a3a7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_297e041c65b1477ebfda9ea14eaee1b37Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11565",
                    "name" => [
                        "it" => "Container sanitario 3×6 – 6 docce, 2 lavandini, scaldabagno da 300 litri",
                        "en" => "3×6 sanitary container – 6 showers, 2 sinks, 300 liter water heater",
                        "fr" => "Conteneur sanitaire 3×6 – 6 douches, 2 lavabos, chauffe-eau 300 litres",
                        "pt" => "Contêiner sanitário 3×6 – 6 chuveiros, 2 lavatórios, aquecedor de água 300 litros",
                        "es" => "Contenedor sanitario 3×6 – 6 duchas, 2 lavabos, calentador de agua 300 litros"
                    ],
                    "price" => "5,250.00",
                    "old_price" => "6,300.00",
                    "sku" => "3276611565",
                    "discount_percentage" => null,
                    "link" => "/product/container-sanitario-36-6-docce-2-lavandini-scaldabagno-da-300-litri/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_04d8f79b98e34af0a63bc86d42a1611a7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a7a5108900e64bc7b21a06646aff021c7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_864b242c190243c0af2821b93c03ffa87Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_6e61c99810844b1289ef6a8b7cba897d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_2d093cf8d4744d0f91bf5e38c9559a1d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_033cff8155c3469fbc515170f705e9037Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_23c61688bc3c4832b83cd46eba1300437Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_377ce9b67ab94871a475a0504b94633f7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_d2c633f887d64768b711f98eff6f31ca7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_0d829bc6d03a45209d36a7a44e55b3607Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_d02be654023d40dda17b3c5cf1bc4ecb7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_03a8f18d9c0a4d3dbbf3ccd237b1d5707Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8913b7cb4fa34258941f682def10a9a07Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_12f89c78f8d1426f8b681805891b5a5f7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_1988e69cb4d64ff58066e1f2aeea15017Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10944",
                    "name" => [
                        "it" => "Container standard da 10 piedi blu",
                        "en" => "Blue 10ft standard container",
                        "fr" => "Conteneur standard 10 pieds bleu",
                        "pt" => "Contêiner padrão 10 pés azul",
                        "es" => "Contenedor estándar 10 pies azul"
                    ],
                    "price" => "1,300.00",
                    "old_price" => null,
                    "sku" => "3276610944",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-da-10-piedi-blu/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Container compatto per lo stoccaggio in acciaio CORTEN con certificato CSC. Dotato di pavimento in compensato, ventilazione, lockbox e tasche per carrelli elevatori. Ideale per lo stoccaggio e il trasporto.",
                        "en" => "Compact CORTEN steel storage container with CSC certificate. Equipped with plywood floor, ventilation, lockbox and forklift pockets. Ideal for storage and transport.",
                        "fr" => "Conteneur de stockage compact en acier CORTEN avec certificat CSC. Équipé d'un plancher en contreplaqué, d'une ventilation, d'un lockbox et de fourches pour chariots élévateurs. Idéal pour le stockage et le transport.",
                        "pt" => "Contêiner de armazenamento compacto em aço CORTEN com certificado CSC. Equipado com piso de compensado, ventilação, lockbox e bolsos para empilhadeira. Ideal para armazenamento e transporte.",
                        "es" => "Contenedor de almacenamiento compacto de acero CORTEN con certificado CSC. Equipado con suelo de madera contrachapada, ventilación, lockbox y bolsillos para carretillas elevadoras. Ideal para almacenamiento y transporte."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_10ft-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10943",
                    "name" => [
                        "it" => "Container standard da 20 piedi",
                        "en" => "20ft standard container",
                        "fr" => "Conteneur standard 20 pieds",
                        "pt" => "Contêiner padrão 20 pés",
                        "es" => "Contenedor estándar 20 pies"
                    ],
                    "price" => "1,650.00",
                    "old_price" => "1,800.00",
                    "sku" => "3276610943",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-da-20-piedi/",
                    "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Il container più utilizzato al mondo per il trasporto e lo stoccaggio. Certificato CSC, in acciaio CORTEN, con pavimento in legno compensato, Lockbox e ventilazione. Ideale per lo stoccaggio a secco o il trasporto.",
                        "en" => "The most used container in the world for transport and storage. CSC certified, CORTEN steel, with plywood floor, Lockbox and ventilation. Ideal for dry storage or transport.",
                        "fr" => "Le conteneur le plus utilisé au monde pour le transport et le stockage. Certifié CSC, en acier CORTEN, avec plancher en contreplaqué, Lockbox et ventilation. Idéal pour le stockage à sec ou le transport.",
                        "pt" => "O contêiner mais usado no mundo para transporte e armazenamento. Certificado CSC, aço CORTEN, com piso de compensado, Lockbox e ventilação. Ideal para armazenamento seco ou transporte.",
                        "es" => "El contenedor más utilizado del mundo para transporte y almacenamiento. Certificado CSC, acero CORTEN, con suelo de madera contrachapada, Lockbox y ventilación. Ideal para almacenamiento en seco o transporte."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_fotos_20dv_new_ral_5013_normal-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11055",
                    "name" => [
                        "it" => "Container standard da 20 piedi con pavimento in acciaio",
                        "en" => "20ft standard container with steel floor",
                        "fr" => "Conteneur standard 20 pieds avec plancher en acier",
                        "pt" => "Contêiner padrão 20 pés com piso de aço",
                        "es" => "Contenedor estándar 20 pies con suelo de acero"
                    ],
                    "price" => "1,700.00",
                    "old_price" => null,
                    "sku" => "3276611055",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-da-20-piedi-con-pavimento-in-acciaio/",
                    "categories" => ["container-di-stoccaggio", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Container robusto per lo stoccaggio con pavimento in acciaio completamente saldato, Lockbox, ventilazione e certificato CSC. Ideale per merci pesanti o sensibili allo sporco. Impilabile e disponibile in ogni colore RAL.",
                        "en" => "Robust storage container with fully welded steel floor, Lockbox, ventilation and CSC certificate. Ideal for heavy or dirt-sensitive goods. Stackable and available in any RAL color.",
                        "fr" => "Conteneur de stockage robuste avec plancher en acier entièrement soudé, Lockbox, ventilation et certificat CSC. Idéal pour les marchandises lourdes ou sensibles à la saleté. Empilable et disponible en toutes couleurs RAL.",
                        "pt" => "Contêiner de armazenamento robusto com piso de aço totalmente soldado, Lockbox, ventilação e certificado CSC. Ideal para mercadorias pesadas ou sensíveis à sujeira. Empilhável e disponível em qualquer cor RAL.",
                        "es" => "Contenedor de almacenamiento robusto con suelo de acero totalmente soldado, Lockbox, ventilación y certificado CSC. Ideal para mercancías pesadas o sensibles a la suciedad. Apilable y disponible en cualquier color RAL."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_20sf2-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10873",
                    "name" => [
                        "it" => "Container standard da 40 piedi (usato)",
                        "en" => "40ft standard container (used)",
                        "fr" => "Conteneur standard 40 pieds (occasion)",
                        "pt" => "Contêiner padrão 40 pés (usado)",
                        "es" => "Contenedor estándar 40 pies (usado)"
                    ],
                    "price" => "1,200.00",
                    "old_price" => null,
                    "sku" => "3276610873",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-da-40-piedi-usato/",
                    "categories" => ["container-standard-usati", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "Container standard usato da 40 piediContainer robusto per lo stoccaggio e il trasporto. Certificato CSC, in acciaio CORTEN, con pavimento in legno multistrato, ventilazione e Lockbox. Ideale per uso permanente o temporaneo.",
                        "en" => "Used 40ft standard container. Robust container for storage and transport. CSC certified, CORTEN steel, with plywood floor, ventilation and Lockbox. Ideal for permanent or temporary use.",
                        "fr" => "Conteneur standard usagé 40 pieds. Conteneur robuste pour le stockage et le transport. Certifié CSC, en acier CORTEN, avec plancher en contreplaqué, ventilation et Lockbox. Idéal pour un usage permanent ou temporaire.",
                        "pt" => "Contêiner padrão usado 40 pés. Contêiner robusto para armazenamento e transporte. Certificado CSC, aço CORTEN, com piso de compensado, ventilação e Lockbox. Ideal para uso permanente ou temporário.",
                        "es" => "Contenedor estándar usado 40 pies. Contenedor robusto para almacenamiento y transporte. Certificado CSC, acero CORTEN, con suelo de madera contrachapada, ventilación y Lockbox. Ideal para uso permanente o temporal."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_photo_2019_09_30_08_39_29-291x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11057",
                    "name" => [
                        "it" => "Container standard da 40 piedi blu NUOVO",
                        "en" => "NEW blue 40ft standard container",
                        "fr" => "NEUF conteneur standard 40 pieds bleu",
                        "pt" => "NOVO contêiner padrão 40 pés azul",
                        "es" => "NUEVO contenedor estándar 40 pies azul"
                    ],
                    "price" => "2,390.00",
                    "old_price" => null,
                    "sku" => "3276611057",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-da-40-piedi-blu-nuovo/",
                    "categories" => ["container-standard-usati", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-2-2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11058",
                    "name" => [
                        "it" => "Container standard nuovo da 20 piedi per 8 piedi",
                        "en" => "New 20ft standard container 8ft",
                        "fr" => "Conteneur standard neuf 20 pieds 8 pieds",
                        "pt" => "Contêiner padrão novo 20 pés 8 pés",
                        "es" => "Contenedor estándar nuevo 20 pies 8 pies"
                    ],
                    "price" => "1,950.00",
                    "old_price" => null,
                    "sku" => "3276611058",
                    "discount_percentage" => null,
                    "link" => "/product/container-standard-nuovo-da-20-piedi-per-8-piedi/",
                    "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                    "short_description" => [
                        "it" => "Nuovo container standard da 20 piedi – bianco, versatile e pronto all'uso\nQuesto nuovo container standard da 20 piedi in elegante bianco è perfetto per il trasporto e lo stoccaggio di una vasta gamma di merci. Realizzato in acciaio Corten di alta qualità, offre massima stabilità, durata e resistenza agli agenti atmosferici. Con la sua verniciatura fresca e la struttura antiruggine, è ideale per l'uso immediato in ambito commerciale o privato.",
                        "en" => "New 20ft standard container – white, versatile and ready to use\nThis new 20ft standard container in elegant white is perfect for transporting and storing a wide range of goods. Made of high quality Corten steel, it offers maximum stability, durability and weather resistance. With its fresh paint and rust-proof structure, it is ideal for immediate use in commercial or private settings.",
                        "fr" => "Nouveau conteneur standard 20 pieds – blanc, polyvalent et prêt à l'emploi\nCe nouveau conteneur standard 20 pieds en blanc élégant est parfait pour le transport et le stockage d'une large gamme de marchandises. Fabriqué en acier Corten de haute qualité, il offre une stabilité, une durabilité et une résistance aux intempéries maximales. Avec sa peinture fraîche et sa structure antirouille, il est idéal pour une utilisation immédiate dans un contexte commercial ou privé.",
                        "pt" => "Novo contêiner padrão 20 pés – branco, versátil e pronto para uso\nEste novo contêiner padrão de 20 pés em branco elegante é perfeito para transportar e armazenar uma ampla variedade de mercadorias. Feito de aço Corten de alta qualidade, oferece máxima estabilidade, durabilidade e resistência às intempéries. Com sua pintura nova e estrutura à prova de ferrugem, é ideal para uso imediato em ambientes comerciais ou privados.",
                        "es" => "Nuevo contenedor estándar 20 pies – blanco, versátil y listo para usar\nEste nuevo contenedor estándar de 20 pies en blanco elegante es perfecto para transportar y almacenar una amplia gama de mercancías. Fabricado en acero Corten de alta calidad, ofrece máxima estabilidad, durabilidad y resistencia a la intemperie. Con su pintura fresca y estructura antioxidante, es ideal para uso inmediato en entornos comerciales o privados."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20ft-by-8ft-standard-container-NEW-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11484",
                    "name" => [
                        "it" => "Container Ufficio / Padiglione Modulare 3x6m – Funzionale e Attrezzato",
                        "en" => "Office Container / Modular Pavilion 3x6m – Functional and Equipped",
                        "fr" => "Conteneur Bureau / Pavillon Modulaire 3x6m – Fonctionnel et Équipé",
                        "pt" => "Contêiner Escritório / Pavilhão Modular 3x6m – Funcional e Equipado",
                        "es" => "Contenedor Oficina / Pabellón Modular 3x6m – Funcional y Equipado"
                    ],
                    "price" => "4,200.00",
                    "old_price" => "4,500.00",
                    "sku" => "3276611484",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-padiglione-modulare-3x6m-funzionale-e-attrezzato/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_31579367c9ec4e34adf7f97995431d187Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_42f9776f034a4839928e84190ef0eec57Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_86f18d212f6544aaa2272eb1b006898b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b4d9e7c1a86b4e1cbfcdf4b8716276017Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_27d4a28d695743e2bd42382cfa841ed57Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_3640f6e53ca2479bad8e3dc2aac125947Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_da519c883c1d47b09a6cd1cd3e3719a67Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_7d4b66f1848b45c89e2544f3c439929b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e1a5f66b83c6444f86ebba441348d5a97Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_9ed4c4383f114c518cfe2d1293335cea7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_efaf653353c940f89c995b972a990a6e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c2aefd7ac576463f8fc541daba418df87Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11675",
                    "name" => [
                        "it" => "Container ufficio 4×2,20 metri con servizi igienici",
                        "en" => "4×2.20 meter office container with toilet facilities",
                        "fr" => "Conteneur bureau 4×2,20 mètres avec sanitaires",
                        "pt" => "Contêiner escritório 4×2,20 metros com instalações sanitárias",
                        "es" => "Contenedor oficina 4×2,20 metros con aseos"
                    ],
                    "price" => "2,100.00",
                    "old_price" => "2,500.00",
                    "sku" => "3276611675",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-4220-metri-con-servizi-igienici/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000003279-300x300.jpg",
                        "/assets/uploads/2025/11/1000003277-300x300.jpg",
                        "/assets/uploads/2025/11/1000003276-300x300.jpg",
                        "/assets/uploads/2025/11/1000003273-300x300.jpg",
                        "/assets/uploads/2025/11/1000003271-300x300.jpg",
                        "/assets/uploads/2025/11/1000003285-300x300.jpg",
                        "/assets/uploads/2025/11/1000003283-300x300.jpg",
                        "/assets/uploads/2025/11/1000003281-300x300.jpg",
                        "/assets/uploads/2025/11/1000003274-300x300.jpg",
                        "/assets/uploads/2025/11/1000003275-300x300.jpg",
                        "/assets/uploads/2025/11/1000003272-300x300.jpg",
                        "/assets/uploads/2025/11/1000003278-300x300.jpg",
                        "/assets/uploads/2025/11/1000003282-300x300.jpg",
                        "/assets/uploads/2025/11/1000003280-300x300.jpg",
                        "/assets/uploads/2025/11/1000003284-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11676",
                    "name" => [
                        "it" => "Container ufficio Container abitativo con bagno/doccia",
                        "en" => "Office container Living container with bathroom/shower",
                        "fr" => "Conteneur bureau Conteneur habitable avec salle de bain/douche",
                        "pt" => "Contêiner escritório Contêiner habitável com banheiro/chuveiro",
                        "es" => "Contenedor oficina Contenedor habitable con baño/ducha"
                    ],
                    "price" => "3,150.00",
                    "old_price" => "3,600.00",
                    "sku" => "3276611676",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-container-abitativo-con-bagno-doccia/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000003301-300x300.jpg",
                        "/assets/uploads/2025/11/1000003307-300x300.jpg",
                        "/assets/uploads/2025/11/1000003304-300x300.jpg",
                        "/assets/uploads/2025/11/1000003306-300x300.jpg",
                        "/assets/uploads/2025/11/1000003312-300x300.jpg",
                        "/assets/uploads/2025/11/1000003303-300x300.jpg",
                        "/assets/uploads/2025/11/1000003302-300x300.jpg",
                        "/assets/uploads/2025/11/1000003311-300x300.jpg",
                        "/assets/uploads/2025/11/1000003310-300x300.jpg",
                        "/assets/uploads/2025/11/1000003305-300x300.jpg",
                        "/assets/uploads/2025/11/1000003309-300x300.jpg",
                        "/assets/uploads/2025/11/1000003308-300x300.jpg",
                        "/assets/uploads/2025/11/1000003313-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "11619",
                    "name" => [
                        "it" => "Container ufficio da 17 m² – Padiglione funzionale e mobile",
                        "en" => "17 m² office container – Functional and mobile pavilion",
                        "fr" => "Conteneur bureau 17 m² – Pavillon fonctionnel et mobile",
                        "pt" => "Contêiner escritório 17 m² – Pavilhão funcional e móvel",
                        "es" => "Contenedor oficina 17 m² – Pabellón funcional y móvil"
                    ],
                    "price" => "3,800.00",
                    "old_price" => "4,000.00",
                    "sku" => "3276611619",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-17-m%c2%b2-padiglione-funzionale-e-mobile-2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/S1-300x300.jpg",
                        "/assets/uploads/2025/11/1000002892-300x300.jpg",
                        "/assets/uploads/2025/11/1000002889-300x300.jpg",
                        "/assets/uploads/2025/11/1000002888-300x300.jpg",
                        "/assets/uploads/2025/11/1000002891-300x300.jpg",
                        "/assets/uploads/2025/11/1000002890-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11424",
                    "name" => [
                        "it" => "Container ufficio da 17 m² – Padiglione funzionale e mobile",
                        "en" => "17 m² office container – Functional and mobile pavilion",
                        "fr" => "Conteneur bureau 17 m² – Pavillon fonctionnel et mobile",
                        "pt" => "Contêiner escritório 17 m² – Pavilhão funcional e móvel",
                        "es" => "Contenedor oficina 17 m² – Pabellón funcional y móvil"
                    ],
                    "price" => "4,799.00",
                    "old_price" => "5,220.00",
                    "sku" => "3276611424",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-17-m%c2%b2-padiglione-funzionale-e-mobile/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_a01cdfce969d4d6b894fd37015be57bb7Emv2-300x231.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ee5959a9220a4308949aee6efbdf83ed7Emv2-252x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_28cddd826aab4ef2a8487cb10d21dadd7Emv2-300x281.png",
                        "/assets/uploads/2025/11/a1ef6f_0dcefcfdf3a84d9f8cf1884000efe7a37Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_de40c9b3f7164fb385b75f9ee647baa77Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c97062fa332d481d8737943e48f86cde7Emv2-300x283.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11620",
                    "name" => [
                        "it" => "Container ufficio da 18 m² – isolato e attrezzato",
                        "en" => "18 m² office container – insulated and equipped",
                        "fr" => "Conteneur bureau 18 m² – isolé et équipé",
                        "pt" => "Contêiner escritório 18 m² – isolado e equipado",
                        "es" => "Contenedor oficina 18 m² – aislado y equipado"
                    ],
                    "price" => "4,215.00",
                    "old_price" => "4,500.00",
                    "sku" => "3276611620",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-18-m%c2%b2-isolato-e-attrezzato/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002899-300x300.jpg",
                        "/assets/uploads/2025/11/1000002903-300x300.jpg",
                        "/assets/uploads/2025/11/1000002898-300x300.jpg",
                        "/assets/uploads/2025/11/1000002901-300x300.jpg",
                        "/assets/uploads/2025/11/1000002900-300x300.jpg",
                        "/assets/uploads/2025/11/1000002902-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11529",
                    "name" => [
                        "it" => "Container ufficio da 18 m² con servizi igienici: comfort e isolamento ottimale",
                        "en" => "18 m² office container with toilet facilities: comfort and optimal insulation",
                        "fr" => "Conteneur bureau 18 m² avec sanitaires : confort et isolation optimale",
                        "pt" => "Contêiner escritório 18 m² com instalações sanitárias: conforto e isolamento ideal",
                        "es" => "Contenedor oficina 18 m² con aseos: confort y aislamiento óptimo"
                    ],
                    "price" => "4,950.00",
                    "old_price" => "5,400.00",
                    "sku" => "3276611529",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-18-m%c2%b2-con-servizi-igienici-comfort-e-isolamento-ottimale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_922d68410b6d40e483488655bc84c6217Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a061fa44d6c74291b1d393005a3bce877Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_71f6a4ca8b0d4ff8a6da55a8505a78b27Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_72c3a1c9be6c42debddc011d3b64970b7Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_4936553f91144871aeefe9d4627bc64a7Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_35d3c128997849fa814f211bcad8cb757Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e5c03143ac514bf18e6c0bcf9178f6037Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_33fa97fe7562487d85303b5477f427167Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_0fcbbfdbf6ae4769a15591b8775d7c3d7Emv2-1-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_1df3b99923114c49bfaa279689e2601b7Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11723",
                    "name" => [
                        "it" => "Container ufficio da 18 m² con servizi igienici: comfort e isolamento ottimale",
                        "en" => "18 m² office container with toilet facilities: comfort and optimal insulation",
                        "fr" => "Conteneur bureau 18 m² avec sanitaires : confort et isolation optimale",
                        "pt" => "Contêiner escritório 18 m² com instalações sanitárias: conforto e isolamento ideal",
                        "es" => "Contenedor oficina 18 m² con aseos: confort y aislamiento óptimo"
                    ],
                    "price" => "4,120.00",
                    "old_price" => "5,100.00",
                    "sku" => "3276611723",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-18-m%c2%b2-con-servizi-igienici-comfort-e-isolamento-ottimale-2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000003432-300x300.jpg",
                        "/assets/uploads/2025/11/1000003435-300x300.jpg",
                        "/assets/uploads/2025/11/1000003434-300x300.jpg",
                        "/assets/uploads/2025/11/1000003431-300x300.jpg",
                        "/assets/uploads/2025/11/1000003436-300x300.jpg",
                        "/assets/uploads/2025/11/1000003433-300x300.jpg",
                        "/assets/uploads/2025/11/1000003437-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11236",
                    "name" => [
                        "it" => "CONTAINER UFFICIO DA 20 PIEDI",
                        "en" => "20FT OFFICE CONTAINER",
                        "fr" => "CONTENEUR BUREAU 20 PIEDS",
                        "pt" => "CONTÊINER ESCRITÓRIO 20 PÉS",
                        "es" => "CONTENEDOR OFICINA 20 PIES"
                    ],
                    "price" => "1,510.00",
                    "old_price" => "2,100.00",
                    "sku" => "3276611236",
                    "discount_percentage" => null,
                    "link" => "/product/container-ufficio-da-20-piedi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Incluso di serie:\n1 finestra scorrevole monovetro\n1 serranda di sicurezza in acciaio\nPorta personale in acciaio ad 1 anta\nRivestimento melaminico – Finitura ufficio\nIsolamento in lana di roccia da 50 mm\nPavimento interno in polietilene resistente all'usura\nPacchetto elettrico di base\n2 Luci della staffa\n1 interruttore\n1 radiatore\n2 prese doppie\n1 isolante esterno",
                        "en" => "Standard included:\n1 single-glazed sliding window\n1 steel security shutter\n1-leaf steel personnel door\nMelamine lining – Office finish\n50 mm rock wool insulation\nWear-resistant polyethylene internal floor\nBasic electrical package\n2 Bracket lights\n1 switch\n1 radiator\n2 double sockets\n1 external insulation",
                        "fr" => "Inclus de série :\n1 fenêtre coulissante simple vitrage\n1 volet de sécurité en acier\nPorte personnelle en acier 1 vantail\nRevêtement mélaminé – Finition bureau\nIsolation laine de roche 50 mm\nSol intérieur en polyéthylène résistant à l'usure\nPack électrique de base\n2 Lampes sur support\n1 interrupteur\n1 radiateur\n2 prises doubles\n1 isolant externe",
                        "pt" => "Incluído de série:\n1 janela de correr de vidro simples\n1 persiana de segurança em aço\nPorta de pessoal em aço de 1 folha\nRevestimento melamínico – Acabamento escritório\nIsolamento em lã de rocha 50 mm\nPiso interno em polietileno resistente ao desgaste\nPacote elétrico básico\n2 Luzes de suporte\n1 interruptor\n1 radiador\n2 tomadas duplas\n1 isolante externo",
                        "es" => "Incluido de serie:\n1 ventana corredera de vidrio simple\n1 persiana de seguridad de acero\nPuerta de personal de acero de 1 hoja\nRevestimiento melamínico – Acabado oficina\nAislamiento de lana de roca 50 mm\nSuelo interior de polietileno resistente al desgaste\nPaquete eléctrico básico\n2 Luces de soporte\n1 interruptor\n1 radiador\n2 tomas dobles\n1 aislante externo"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/e9026bb1-e4fe-47f1-bd8d-afbb1aa327af-768x576-1-300x300.webp",
                        "/assets/uploads/2025/11/888bcf05-f13e-4d69-91bb-a91f7d858e50-768x576-1-300x300.webp",
                        "/assets/uploads/2025/11/208ed79f-293a-439c-91af-0f2ae9e35c70-768x576-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10866",
                    "name" => [
                        "it" => "Contenitore 10 Piedi Usato – Compatto, Economico e Resistente",
                        "en" => "Used 10ft Container – Compact, Economical and Durable",
                        "fr" => "Conteneur 10 Pieds Occasion – Compact, Économique et Résistant",
                        "pt" => "Contêiner 10 Pés Usado – Compacto, Econômico e Resistente",
                        "es" => "Contenedor 10 Pies Usado – Compacto, Económico y Resistente"
                    ],
                    "price" => "610.61",
                    "old_price" => "872.30",
                    "sku" => "3276610866",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-10-piedi-usato-compatto-economico-e-resistente/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Un contenitore compatto da 10 piedi, perfetto per chi cerca una soluzione economica e sicura per lo stoccaggio. In acciaio corten, ricondizionato e pronto all'uso.\nStruttura in acciaio corten resistente\nVolume interno 16 m³\nPorte doppie con chiusura sicura",
                        "en" => "A compact 10ft container, perfect for those looking for an economical and secure storage solution. In corten steel, refurbished and ready to use.\nDurable corten steel structure\nInternal volume 16 m³\nDouble doors with secure locking",
                        "fr" => "Un conteneur compact de 10 pieds, parfait pour ceux qui recherchent une solution de stockage économique et sécurisée. En acier corten, rénové et prêt à l'emploi.\nStructure en acier corten résistante\nVolume intérieur 16 m³\nPortes doubles avec verrouillage sécurisé",
                        "pt" => "Um contêiner compacto de 10 pés, perfeito para quem procura uma solução de armazenamento econômica e segura. Em aço corten, reformado e pronto para uso.\nEstrutura de aço corten resistente\nVolume interno 16 m³\nPortas duplas com fechamento seguro",
                        "es" => "Un contenedor compacto de 10 pies, perfecto para quienes buscan una solución de almacenamiento económica y segura. En acero corten, reacondicionado y listo para usar.\nEstructura de acero corten resistente\nVolumen interno 16 m³\nPuertas dobles con cierre seguro"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-5-300x300.jpeg",
                        "/assets/uploads/2025/11/2-5-300x300.jpeg",
                        "/assets/uploads/2025/11/3-4-300x300.jpeg",
                        "/assets/uploads/2025/11/4-4-300x300.jpeg",
                        "/assets/uploads/2025/11/5-4-300x300.jpeg",
                        "/assets/uploads/2025/11/6-4-300x300.jpeg",
                        "/assets/uploads/2025/11/7-5-300x300.jpeg",
                        "/assets/uploads/2025/11/8-4-300x300.jpeg",
                        "/assets/uploads/2025/11/9-3-300x300.jpeg",
                        "/assets/uploads/2025/11/10-2-300x300.jpeg",
                        "/assets/uploads/2025/11/11-2-300x300.jpeg",
                        "/assets/uploads/2025/11/12-300x300.jpeg",
                        "/assets/uploads/2025/11/13-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10487",
                    "name" => [
                        "it" => "Contenitore 20 piedi con apertura laterale",
                        "en" => "20ft side opening container",
                        "fr" => "Conteneur 20 pieds à ouverture latérale",
                        "pt" => "Contêiner 20 pés com abertura lateral",
                        "es" => "Contenedor 20 pies con apertura lateral"
                    ],
                    "price" => "1,751.75",
                    "old_price" => "2,502.50",
                    "sku" => "3276610487",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-20-piedi-con-apertura-laterale/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Il contenitore da 20 piedi con apertura laterale offre un accesso completo su uno dei lati lunghi, rendendolo ideale per carichi voluminosi o frequenti operazioni di stoccaggio. Resistente e sicuro, è perfetto per uso industriale, agricolo o logistico.\nApertura laterale su 6 metri (4 ante)\nPavimento in legno trattato, resistente e sicuro\nStruttura in acciaio saldato e verniciato\nVentilazione integrata e chiusura con lucchetto\nDisponibile con impianto elettrico e altre opzioni",
                        "en" => "The 20ft side opening container offers complete access on one of the long sides, making it ideal for bulky loads or frequent storage operations. Strong and secure, it is perfect for industrial, agricultural or logistics use.\n6-meter side opening (4 doors)\nTreated wood floor, strong and safe\nWelded and painted steel structure\nIntegrated ventilation and padlock closure\nAvailable with electrical system and other options",
                        "fr" => "Le conteneur 20 pieds à ouverture latérale offre un accès complet sur l'un des côtés longs, ce qui le rend idéal pour les charges volumineuses ou les opérations de stockage fréquentes. Résistant et sécurisé, il est parfait pour un usage industriel, agricole ou logistique.\nOuverture latérale de 6 mètres (4 vantaux)\nPlancher en bois traité, résistant et sûr\nStructure en acier soudé et peint\nVentilation intégrée et fermeture par cadenas\nDisponible avec installation électrique et autres options",
                        "pt" => "O contêiner de 20 pés com abertura lateral oferece acesso completo em um dos lados longos, tornando-o ideal para cargas volumosas ou operações frequentes de armazenamento. Resistente e seguro, é perfeito para uso industrial, agrícola ou logístico.\nAbertura lateral de 6 metros (4 portas)\nPiso de madeira tratada, resistente e seguro\nEstrutura de aço soldado e pintado\nVentilação integrada e fechamento com cadeado\nDisponível com sistema elétrico e outras opções",
                        "es" => "El contenedor de 20 pies con apertura lateral ofrece acceso completo en uno de los lados largos, lo que lo hace ideal para cargas voluminosas u operaciones frecuentes de almacenamiento. Resistente y seguro, es perfecto para uso industrial, agrícola o logístico.\nApertura lateral de 6 metros (4 hojas)\nSuelo de madera tratada, resistente y seguro\nEstructura de acero soldado y pintado\nVentilación integrada y cierre con candado\nDisponible con sistema eléctrico y otras opciones"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/3-3-1-300x300.webp",
                        "/assets/uploads/2025/11/1-4-300x300.jpg",
                        "/assets/uploads/2025/11/2-1-1-300x300.webp",
                        "/assets/uploads/2025/11/4-2-300x300.jpg",
                        "/assets/uploads/2025/11/5-3-300x300.webp",
                        "/assets/uploads/2025/11/6-300x300.jpg",
                        "/assets/uploads/2025/11/7-300x300.jpg",
                        "/assets/uploads/2025/11/8-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10485",
                    "name" => [
                        "it" => "Contenitore 20 piedi Dry usato con doppia porta",
                        "en" => "Used 20ft Dry container with double door",
                        "fr" => "Conteneur 20 pieds Dry occasion avec double porte",
                        "pt" => "Contêiner 20 pés Dry usado com porta dupla",
                        "es" => "Contenedor 20 pies Dry usado con doble puerta"
                    ],
                    "price" => "1,322.32",
                    "old_price" => "1,889.03",
                    "sku" => "3276610485",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-20-piedi-dry-usato-con-doppia-porta/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Il contenitore Dry usato da 20 piedi con doppia apertura è la scelta ideale per chi cerca versatilità, robustezza e sicurezza. Dotato di accesso facilitato da entrambi i lati, si adatta perfettamente a contesti industriali, agricoli e residenziali. La struttura in acciaio e il pavimento trattato contro l'umidità lo rendono resistente nel tempo.\nDoppia porta per accesso frontale e posteriore\nPavimento in legno massiccio da 25 mm trattato\nStruttura in acciaio saldato da 3 mm\nVolume interno 31 m³\nFacile movimentazione con carrello o gru",
                        "en" => "The used 20ft Dry container with double opening is the ideal choice for those seeking versatility, robustness and security. With easy access from both sides, it adapts perfectly to industrial, agricultural and residential contexts. The steel structure and moisture-treated floor make it durable over time.\nDouble door for front and rear access\n25 mm treated solid wood floor\n3 mm welded steel structure\nInternal volume 31 m³\nEasy handling with forklift or crane",
                        "fr" => "Le conteneur Dry usagé de 20 pieds à double ouverture est le choix idéal pour ceux qui recherchent la polyvalence, la robustesse et la sécurité. Avec un accès facile des deux côtés, il s'adapte parfaitement aux contextes industriels, agricoles et résidentiels. La structure en acier et le plancher traité contre l'humidité le rendent durable dans le temps.\nDouble porte pour accès avant et arrière\nPlancher en bois massif traité de 25 mm\nStructure en acier soudé de 3 mm\nVolume intérieur 31 m³\nManutention facile avec chariot ou grue",
                        "pt" => "O contêiner Dry usado de 20 pés com dupla abertura é a escolha ideal para quem procura versatilidade, robustez e segurança. Com fácil acesso de ambos os lados, adapta-se perfeitamente a contextos industriais, agrícolas e residenciais. A estrutura de aço e o piso tratado contra umidade o tornam durável ao longo do tempo.\nPorta dupla para acesso frontal e traseiro\nPiso de madeira maciça tratada de 25 mm\nEstrutura de aço soldado de 3 mm\nVolume interno 31 m³\nFácil manuseio com empilhadeira ou guindaste",
                        "es" => "El contenedor Dry usado de 20 pies con doble apertura es la opción ideal para quienes buscan versatilidad, robustez y seguridad. Con fácil acceso desde ambos lados, se adapta perfectamente a contextos industriales, agrícolas y residenciales. La estructura de acero y el suelo tratado contra la humedad lo hacen duradero en el tiempo.\nDoble puerta para acceso frontal y trasero\nSuelo de madera maciza tratada de 25 mm\nEstructura de acero soldado de 3 mm\nVolumen interno 31 m³\nFácil manejo con carretilla o grúa"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-5-300x300.jpg",
                        "/assets/uploads/2025/11/1-6-300x300.jpg",
                        "/assets/uploads/2025/11/3-5-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10484",
                    "name" => [
                        "it" => "Contenitore 20 piedi HC",
                        "en" => "20ft HC Container",
                        "fr" => "Conteneur 20 pieds HC",
                        "pt" => "Contêiner 20 pés HC",
                        "es" => "Contenedor 20 pies HC"
                    ],
                    "price" => "1,651.65",
                    "old_price" => "2,359.50",
                    "sku" => "3276610484",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-20-piedi-hc/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Stai cercando una soluzione di stoccaggio ampia e resistente? Il nostro contenitore HC da 20 piedi di seconda mano è progettato per offrire massima durata, sicurezza e praticità in qualsiasi contesto, dai cantieri ai magazzini agricoli. Realizzato in acciaio saldato, con pavimento in legno trattato e volume interno maggiorato, rappresenta un'ottima scelta anche per usi personalizzati.\nVolume interno di 37 m³ con altezza maggiorata\nStruttura in acciaio da 3 mm e pareti da 1,5 mm\nPavimento in legno da 25 mm resistente all'umidità\nVentilazione e sistema anti-effrazione\nFacile movimentazione con gru o carrello elevatore",
                        "en" => "Are you looking for a spacious and durable storage solution? Our used 20ft HC container is designed to offer maximum durability, safety and practicality in any context, from construction sites to agricultural warehouses. Made of welded steel, with treated wooden floor and increased internal volume, it is an excellent choice also for customized uses.\nInternal volume of 37 m³ with increased height\n3 mm steel structure and 1.5 mm walls\n25 mm moisture-resistant wooden floor\nVentilation and anti-theft system\nEasy handling with crane or forklift",
                        "fr" => "Vous cherchez une solution de stockage spacieuse et résistante ? Notre conteneur HC 20 pieds d'occasion est conçu pour offrir une durabilité, une sécurité et une praticité maximales dans n'importe quel contexte, des chantiers aux entrepôts agricoles. Fabriqué en acier soudé, avec plancher en bois traité et volume intérieur augmenté, c'est un excellent choix également pour des usages personnalisés.\nVolume intérieur de 37 m³ avec hauteur augmentée\nStructure en acier de 3 mm et parois de 1,5 mm\nPlancher en bois de 25 mm résistant à l'humidité\nVentilation et système anti-effraction\nManutention facile avec grue ou chariot élévateur",
                        "pt" => "Você está procurando uma solução de armazenamento espaçosa e durável? Nosso contêiner HC de 20 pés usado é projetado para oferecer máxima durabilidade, segurança e praticidade em qualquer contexto, de canteiros de obras a armazéns agrícolas. Feito de aço soldado, com piso de madeira tratada e volume interno aumentado, é uma excelente escolha também para usos personalizados.\nVolume interno de 37 m³ com altura aumentada\nEstrutura de aço de 3 mm e paredes de 1,5 mm\nPiso de madeira de 25 mm resistente à umidade\nVentilação e sistema antifurto\nFácil manuseio com guindaste ou empilhadeira",
                        "es" => "¿Está buscando una solución de almacenamiento amplia y duradera? Nuestro contenedor HC de 20 pies usado está diseñado para ofrecer máxima durabilidad, seguridad y practicidad en cualquier contexto, desde obras de construcción hasta almacenes agrícolas. Fabricado en acero soldado, con suelo de madera tratada y volumen interior aumentado, es una excelente opción también para usos personalizados.\nVolumen interior de 37 m³ con altura aumentada\nEstructura de acero de 3 mm y paredes de 1,5 mm\nSuelo de madera de 25 mm resistente a la humedad\nVentilación y sistema antirrobo\nFácil manejo con grúa o carretilla elevadora"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-5-300x300.jpg",
                        "/assets/uploads/2025/11/2-2-1-300x300.webp",
                        "/assets/uploads/2025/11/3-4-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10486",
                    "name" => [
                        "it" => "Contenitore 20 piedi High Cube con porte avvolgibili",
                        "en" => "20ft High Cube container with roller shutter doors",
                        "fr" => "Conteneur 20 pieds High Cube avec portes enroulables",
                        "pt" => "Contêiner 20 pés High Cube com portas de enrolar",
                        "es" => "Contenedor 20 pies High Cube con puertas enrollables"
                    ],
                    "price" => "1,996.99",
                    "old_price" => "2,852.85",
                    "sku" => "3276610486",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-20-piedi-high-cube-con-porte-avvolgibili/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Robusto, versatile ed esteticamente curato, il contenitore 20 piedi High Cube con porte avvolgibili è perfetto per lo stoccaggio sicuro o la trasformazione in officina mobile. La struttura rinforzata in acciaio assicura resistenza nel tempo, mentre le porte avvolgibili garantiscono praticità anche negli spazi più stretti.\nAltezza maggiorata per un volume interno superiore\nPorte avvolgibili robuste e pratiche\nStruttura in acciaio con telaio rinforzato\nColore grigio chiaro dall'estetica discreta\nIdeale per officine, eventi, cantieri o magazzini mobili",
                        "en" => "Robust, versatile and aesthetically pleasing, the 20ft High Cube container with roller shutter doors is perfect for secure storage or conversion into a mobile workshop. The reinforced steel structure ensures durability over time, while the roller shutter doors guarantee practicality even in tight spaces.\nIncreased height for greater internal volume\nRobust and practical roller shutter doors\nSteel structure with reinforced frame\nLight gray color with discreet aesthetics\nIdeal for workshops, events, construction sites or mobile warehouses",
                        "fr" => "Robuste, polyvalent et esthétique, le conteneur 20 pieds High Cube avec portes enroulables est parfait pour le stockage sécurisé ou la transformation en atelier mobile. La structure en acier renforcé assure une durabilité dans le temps, tandis que les portes enroulables garantissent la praticité même dans les espaces restreints.\nHauteur augmentée pour un volume intérieur supérieur\nPortes enroulables robustes et pratiques\nStructure en acier avec cadre renforcé\nCouleur gris clair à l'esthétique discrète\nIdéal pour ateliers, événements, chantiers ou entrepôts mobiles",
                        "pt" => "Robusto, versátil e esteticamente agradável, o contêiner 20 pés High Cube com portas de enrolar é perfeito para armazenamento seguro ou conversão em oficina móvel. A estrutura de aço reforçado garante durabilidade ao longo do tempo, enquanto as portas de enrolar garantem praticidade mesmo em espaços apertados.\nAltura aumentada para maior volume interno\nPortas de enrolar robustas e práticas\nEstrutura de aço com estrutura reforçada\nCor cinza claro com estética discreta\nIdeal para oficinas, eventos, canteiros de obras ou armazéns móveis",
                        "es" => "Robusto, versátil y estéticamente agradable, el contenedor 20 pies High Cube con puertas enrollables es perfecto para almacenamiento seguro o conversión en taller móvil. La estructura de acero reforzado asegura durabilidad en el tiempo, mientras que las puertas enrollables garantizan practicidad incluso en espacios reducidos.\nAltura aumentada para mayor volumen interior\nPuertas enrollables robustas y prácticas\nEstructura de acero con marco reforzado\nColor gris claro de estética discreta\nIdeal para talleres, eventos, obras o almacenes móviles"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-11-300x300.jpeg",
                        "/assets/uploads/2025/11/1-11-300x300.jpeg",
                        "/assets/uploads/2025/11/3-10-300x300.jpeg",
                        "/assets/uploads/2025/11/4-10-300x300.jpeg",
                        "/assets/uploads/2025/11/5-10-300x300.jpeg",
                        "/assets/uploads/2025/11/6-8-300x300.jpeg",
                        "/assets/uploads/2025/11/7-9-300x300.jpeg",
                        "/assets/uploads/2025/11/8-8-300x300.jpeg",
                        "/assets/uploads/2025/11/9-7-300x300.jpeg",
                        "/assets/uploads/2025/11/11-6-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10703",
                    "name" => [
                        "it" => "Contenitore Bar Café 6 metri Snack-Box 20′",
                        "en" => "6 meter Bar Café Container Snack-Box 20′",
                        "fr" => "Conteneur Bar Café 6 mètres Snack-Box 20′",
                        "pt" => "Contêiner Bar Café 6 metros Snack-Box 20′",
                        "es" => "Contenedor Bar Café 6 metros Snack-Box 20′"
                    ],
                    "price" => "1,821.82",
                    "old_price" => "2,602.60",
                    "sku" => "3276610703",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-bar-cafe-6-metri-snack-box-20%e2%80%b2/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Contenitore Bar Café 6 metri – Soluzione modulare per ristorazione mobile\nBotole di servizio frontali e laterali ampie\nIsolamento termico con lana Dritherm\nRivestimento interno resistente e facile da pulire\nPavimento vinilico antiscivolo\nVerniciatura personalizzabile\nEquipaggiamento cucina su richiesta",
                        "en" => "6 meter Bar Café Container – Modular solution for mobile catering\nWide front and side service hatches\nThermal insulation with Dritherm wool\nDurable and easy-to-clean internal lining\nNon-slip vinyl floor\nCustomizable painting\nKitchen equipment on request",
                        "fr" => "Conteneur Bar Café 6 mètres – Solution modulaire pour restauration mobile\nLarges trappes de service frontales et latérales\nIsolation thermique avec laine Dritherm\nRevêtement intérieur résistant et facile à nettoyer\nSol vinyle antidérapant\nPeinture personnalisable\nÉquipement cuisine sur demande",
                        "pt" => "Contêiner Bar Café 6 metros – Solução modular para catering móvel\nAmplas aberturas de serviço frontais e laterais\nIsolamento térmico com lã Dritherm\nRevestimento interno resistente e fácil de limpar\nPiso vinílico antiderrapante\nPintura personalizável\nEquipamento de cozinha sob consulta",
                        "es" => "Contenedor Bar Café 6 metros – Solución modular para restauración móvil\nAmplias trampillas de servicio frontales y laterales\nAislamiento térmico con lana Dritherm\nRevestimiento interior resistente y fácil de limpiar\nSuelo vinílico antideslizante\nPintura personalizable\nEquipamiento de cocina bajo pedido"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-28-300x300.jpeg",
                        "/assets/uploads/2025/11/1-28-300x300.jpeg",
                        "/assets/uploads/2025/11/3-27-300x300.jpeg",
                        "/assets/uploads/2025/11/4-27-300x300.jpeg",
                        "/assets/uploads/2025/11/5-25-300x300.jpeg",
                        "/assets/uploads/2025/11/6-20-300x300.jpeg",
                        "/assets/uploads/2025/11/7-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11080",
                    "name" => [
                        "it" => "Contenitore Bar Démontable 3×2 Metri – Soluzione Compatta e Versatile",
                        "en" => "3×2 Meter Demountable Bar Container – Compact and Versatile Solution",
                        "fr" => "Conteneur Bar Démontable 3×2 Mètres – Solution Compacte et Polyvalente",
                        "pt" => "Contêiner Bar Desmontável 3×2 Metros – Solução Compacta e Versátil",
                        "es" => "Contenedor Bar Desmontable 3×2 Metros – Solución Compacta y Versátil"
                    ],
                    "price" => "1,150.00",
                    "old_price" => null,
                    "sku" => "3276611080",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-bar-demontable-32-metri-soluzione-compatta-e-versatile/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore Bar Démontable 3×2 Metri è una soluzione versatile e robusta per eventi e attività commerciali. Facile da montare, trasportare e personalizzare.",
                        "en" => "The 3×2 Meter Demountable Bar Container is a versatile and robust solution for events and commercial activities. Easy to assemble, transport and customize.",
                        "fr" => "Le Conteneur Bar Démontable 3×2 Mètres est une solution polyvalente et robuste pour les événements et les activités commerciales. Facile à monter, transporter et personnaliser.",
                        "pt" => "O Contêiner Bar Desmontável 3×2 Metros é uma solução versátil e robusta para eventos e atividades comerciais. Fácil de montar, transportar e personalizar.",
                        "es" => "El Contenedor Bar Desmontable 3×2 Metros es una solución versátil y robusta para eventos y actividades comerciales. Fácil de montar, transportar y personalizar."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Bar-Demontable-3x2-Metri-Soluzione-Compatta-e-Versatile-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11079",
                    "name" => [
                        "it" => "Contenitore Bar Démontable XL 4 x 2 m – Soluzione Modulare per Eventi",
                        "en" => "XL 4 x 2 m Demountable Bar Container – Modular Solution for Events",
                        "fr" => "Conteneur Bar Démontable XL 4 x 2 m – Solution Modulaire pour Événements",
                        "pt" => "Contêiner Bar Desmontável XL 4 x 2 m – Solução Modular para Eventos",
                        "es" => "Contenedor Bar Desmontable XL 4 x 2 m – Solución Modular para Eventos"
                    ],
                    "price" => "1,220.00",
                    "old_price" => null,
                    "sku" => "3276611079",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-bar-demontable-xl-4-x-2-m-soluzione-modulare-per-eventi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore Bar Démontable XL 4 x 2 m offre uno spazio flessibile e personalizzabile per eventi. Facile da trasportare e montare, è la scelta ideale per il tuo business.",
                        "en" => "The XL 4 x 2 m Demountable Bar Container offers flexible and customizable space for events. Easy to transport and assemble, it is the ideal choice for your business.",
                        "fr" => "Le Conteneur Bar Démontable XL 4 x 2 m offre un espace flexible et personnalisable pour les événements. Facile à transporter et à monter, c'est le choix idéal pour votre entreprise.",
                        "pt" => "O Contêiner Bar Desmontável XL 4 x 2 m oferece espaço flexível e personalizável para eventos. Fácil de transportar e montar, é a escolha ideal para o seu negócio.",
                        "es" => "El Contenedor Bar Desmontable XL 4 x 2 m ofrece un espacio flexible y personalizable para eventos. Fácil de transportar y montar, es la opción ideal para tu negocio."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Bar-Demontable-XL-4-x-2-m-Soluzione-Modulare-per-Eventi-0-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Bar-Demontable-XL-4-x-2-m-Soluzione-Modulare-per-Eventi-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10699",
                    "name" => [
                        "it" => "Contenitore Bar Personalizzato 6 Metri",
                        "en" => "6 Meter Customized Bar Container",
                        "fr" => "Conteneur Bar Personnalisé 6 Mètres",
                        "pt" => "Contêiner Bar Personalizado 6 Metros",
                        "es" => "Contenedor Bar Personalizado 6 Metros"
                    ],
                    "price" => "1,921.92",
                    "old_price" => "2,745.60",
                    "sku" => "3276610699",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-bar-personalizzato-6-metri/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Contenitore bar 6 m – food truck personalizzato\nContainer 20 piedi primo viaggio\nBancone pieghevole e marquesina a gas\nIsolamento con pannelli sandwich da 40 mm\nElettricità e idraulica installate\nPavimento in resina con scarico\nEsterno nero elegante",
                        "en" => "6 m bar container – customized food truck\nFirst voyage 20ft container\nFolding counter and gas awning\nInsulation with 40 mm sandwich panels\nElectricity and plumbing installed\nResin floor with drain\nElegant black exterior",
                        "fr" => "Conteneur bar 6 m – food truck personnalisé\nConteneur premier voyage 20 pieds\nComptoir pliant et marquise à gaz\nIsolation avec panneaux sandwich 40 mm\nÉlectricité et plomberie installées\nSol en résine avec drain\nExtérieur noir élégant",
                        "pt" => "Contêiner bar 6 m – food truck personalizado\nContêiner de primeira viagem 20 pés\nBalcão dobrável e toldo a gás\nIsolamento com painéis sanduíche de 40 mm\nEletricidade e encanamento instalados\nPiso de resina com dreno\nExterior preto elegante",
                        "es" => "Contenedor bar 6 m – food truck personalizado\nContenedor de primer viaje 20 pies\nMostrador plegable y toldo de gas\nAislamiento con paneles sándwich de 40 mm\nElectricidad y fontanería instaladas\nSuelo de resina con desagüe\nExterior negro elegante"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-27-300x300.jpeg",
                        "/assets/uploads/2025/11/2-4-300x300.jpeg",
                        "/assets/uploads/2025/11/3-26-300x300.jpeg",
                        "/assets/uploads/2025/11/4-26-300x300.jpeg",
                        "/assets/uploads/2025/11/5-24-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "10701",
                    "name" => [
                        "it" => "Contenitore Bar Smontabile 6×2 m",
                        "en" => "6×2 m Demountable Bar Container",
                        "fr" => "Conteneur Bar Démontable 6×2 m",
                        "pt" => "Contêiner Bar Desmontável 6×2 m",
                        "es" => "Contenedor Bar Desmontable 6×2 m"
                    ],
                    "price" => "1,521.52",
                    "old_price" => "2,173.60",
                    "sku" => "3276610701",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-bar-smontabile-6x2-m/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Contenitore Bar 6×2 m – Smontabile e modulare\nSuperficie aperta da 12 m²\nStruttura in acciaio zincato verniciato\nPensilina con chiusura + doppi sportelli\nSmontabile e facile da trasportare\nPersonalizzabile con accessori",
                        "en" => "6×2 m Bar Container – Demountable and modular\n12 m² open area\nPainted galvanized steel structure\nCanopy with closure + double doors\nDemountable and easy to transport\nCustomizable with accessories",
                        "fr" => "Conteneur Bar 6×2 m – Démontable et modulaire\nSurface ouverte de 12 m²\nStructure en acier galvanisé peint\nAuvent avec fermeture + double portes\nDémontable et facile à transporter\nPersonnalisable avec accessoires",
                        "pt" => "Contêiner Bar 6×2 m – Desmontável e modular\nÁrea aberta de 12 m²\nEstrutura de aço galvanizado pintado\nMarquise com fechamento + portas duplas\nDesmontável e fácil de transportar\nPersonalizável com acessórios",
                        "es" => "Contenedor Bar 6×2 m – Desmontable y modular\nSuperficie abierta de 12 m²\nEstructura de acero galvanizado pintado\nMarquesina con cierre + dobles puertas\nDesmontable y fácil de transportar\nPersonalizable con accesorios"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/1-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/4-1-1-1-300x300.webp",
                        "/assets/uploads/2025/11/5-1-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10698",
                    "name" => [
                        "it" => "Contenitore Caffetteria 20 Piedi",
                        "en" => "20ft Coffee Shop Container",
                        "fr" => "Conteneur Cafétéria 20 Pieds",
                        "pt" => "Contêiner cafetaria 20 Pés",
                        "es" => "Contenedor Cafetería 20 Pies"
                    ],
                    "price" => "3,203.20",
                    "old_price" => "4,576.00",
                    "sku" => "3276610698",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-caffetteria-20-piedi/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Contenitore bar 20 piedi – cucina mobile professionale\nCucina attrezzata con forno, frigo, lavastoviglie\nSpazio ottimizzato per servizio clienti\nRobusta struttura in acciaio\nIdeale per bar mobili e food truck\nPronto all'uso con attrezzature incluse",
                        "en" => "20ft bar container – professional mobile kitchen\nKitchen equipped with oven, fridge, dishwasher\nOptimized space for customer service\nRobust steel structure\nIdeal for mobile bars and food trucks\nReady to use with equipment included",
                        "fr" => "Conteneur bar 20 pieds – cuisine mobile professionnelle\nCuisine équipée avec four, frigo, lave-vaisselle\nEspace optimisé pour service client\nStructure acier robuste\nIdéal pour bars mobiles et food trucks\nPrêt à l'emploi avec équipement inclus",
                        "pt" => "Contêiner bar 20 pés – cozinha móvel profissional\nCozinha equipada com forno, geladeira, lava-louças\nEspaço otimizado para atendimento ao cliente\nEstrutura robusta de aço\nIdeal para bares móveis e food trucks\nPronto para uso com equipamentos incluídos",
                        "es" => "Contenedor bar 20 pies – cocina móvil profesional\nCocina equipada con horno, nevera, lavavajillas\nEspacio optimizado para servicio al cliente\nRobusta estructura de acero\nIdeal para bares móviles y food trucks\nListo para usar con equipo incluido"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-20-300x300.jpg",
                        "/assets/uploads/2025/11/2-11-300x300.jpg",
                        "/assets/uploads/2025/11/3-11-300x300.jpg",
                        "/assets/uploads/2025/11/4-8-300x300.jpg",
                        "/assets/uploads/2025/11/5-6-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10622",
                    "name" => [
                        "it" => "Contenitore Commerciale “Linz”",
                        "en" => "\"Linz\" Commercial Container",
                        "fr" => "Conteneur Commercial \"Linz\"",
                        "pt" => "Contêiner Comercial \"Linz\"",
                        "es" => "Contenedor Comercial \"Linz\""
                    ],
                    "price" => "2,622.62",
                    "old_price" => "3,746.60",
                    "sku" => "3276610622",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-commerciale-linz/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Modulo commerciale isolato da 6 metri, pronto all'uso.\nDesign effetto legno elegante\nIsolamento termico con pannelli sandwich da 10 cm\nFinestre fisse 90×190 cm per luce naturale\nImpianto elettrico CE + riscaldamento integrato\nPavimento in PVC resistente",
                        "en" => "6-meter insulated commercial module, ready to use.\nElegant wood-effect design\nThermal insulation with 10 cm sandwich panels\nFixed windows 90×190 cm for natural light\nCE electrical system + integrated heating\nDurable PVC flooring",
                        "fr" => "Module commercial isolé de 6 mètres, prêt à l'emploi.\nDesign élégant effet bois\nIsolation thermique avec panneaux sandwich 10 cm\nFenêtres fixes 90×190 cm pour lumière naturelle\nInstallation électrique CE + chauffage intégré\nSol PVC résistant",
                        "pt" => "Módulo comercial isolado de 6 metros, pronto para uso.\nDesign elegante efeito madeira\nIsolamento térmico com painéis sanduíche de 10 cm\nJanelas fixas 90×190 cm para luz natural\nSistema elétrico CE + aquecimento integrado\nPiso de PVC durável",
                        "es" => "Módulo comercial aislado de 6 metros, listo para usar.\nDiseño elegante efecto madera\nAislamiento térmico con paneles sándwich de 10 cm\nVentanas fijas 90×190 cm para luz natural\nSistema eléctrico CE + calefacción integrada\nSuelo de PVC duradero"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-19-300x300.jpeg",
                        "/assets/uploads/2025/11/2-19-300x300.jpeg",
                        "/assets/uploads/2025/11/3-18-300x300.jpeg",
                        "/assets/uploads/2025/11/4-18-300x300.jpeg",
                        "/assets/uploads/2025/11/5-17-300x300.jpeg",
                        "/assets/uploads/2025/11/6-15-300x300.jpeg",
                        "/assets/uploads/2025/11/7-14-300x300.jpeg",
                        "/assets/uploads/2025/11/8-12-300x300.jpeg",
                        "/assets/uploads/2025/11/9-11-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10479",
                    "name" => [
                        "it" => "Contenitore da 10 Piedi per Uso Agricolo",
                        "en" => "10ft Container for Agricultural Use",
                        "fr" => "Conteneur 10 Pieds pour Usage Agricole",
                        "pt" => "Contêiner 10 Pés para Uso Agrícola",
                        "es" => "Contenedor 10 Pies para Uso Agrícola"
                    ],
                    "price" => "710.00",
                    "old_price" => "1,029.60",
                    "sku" => "3276610479",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-da-10-piedi-per-uso-agricolo/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Il contenitore da 10 piedi per uso agricolo è la soluzione perfetta per chi desidera uno spazio sicuro, compatto e resistente per lo stoccaggio in fattoria. Realizzato da container marittimi riciclati, offre solidità e protezione totale.\nStruttura in acciaio riciclato da 20′\nDimensioni compatte: circa 3 metri\nPorta rinforzata e chiusura sicura\nColore verde abete, perfetto per ambienti naturali\nIdeale per stoccaggio di attrezzi, mangimi, sementi e prodotti agricoli",
                        "en" => "The 10ft container for agricultural use is the perfect solution for those wanting a safe, compact and durable space for farm storage. Made from recycled shipping containers, it offers solidity and total protection.\nRecycled 20′ steel structure\nCompact dimensions: about 3 meters\nReinforced door and secure closure\nFir green color, perfect for natural environments\nIdeal for storing tools, feed, seeds and agricultural products",
                        "fr" => "Le conteneur 10 pieds pour usage agricole est la solution parfaite pour ceux qui souhaitent un espace sûr, compact et résistant pour le stockage à la ferme. Fabriqué à partir de conteneurs maritimes recyclés, il offre solidité et protection totale.\nStructure en acier recyclé 20′\nDimensions compactes : environ 3 mètres\nPorte renforcée et fermeture sécurisée\nCouleur vert sapin, parfait pour environnements naturels\nIdéal pour stocker outils, aliments, semences et produits agricoles",
                        "pt" => "O contêiner de 10 pés para uso agrícola é a solução perfeita para quem deseja um espaço seguro, compacto e resistente para armazenamento na fazenda. Feito de contêineres marítimos reciclados, oferece solidez e proteção total.\nEstrutura de aço reciclado 20′\nDimensões compactas: cerca de 3 metros\nPorta reforçada e fechamento seguro\nCor verde abeto, perfeita para ambientes naturais\nIdeal para armazenar ferramentas, ração, sementes e produtos agrícolas",
                        "es" => "El contenedor de 10 pies para uso agrícola es la solución perfecta para quienes desean un espacio seguro, compacto y resistente para almacenamiento en granja. Fabricado a partir de contenedores marítimos reciclados, ofrece solidez y protección total.\nEstructura de acero reciclado 20′\nDimensiones compactas: unos 3 metros\nPuerta reforzada y cierre seguro\nColor verde abeto, perfecto para entornos naturales\nIdeal para almacenar herramientas, pienso, semillas y productos agrícolas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-1-300x300.jpeg",
                        "/assets/uploads/2025/11/1-1-300x300.jpeg",
                        "/assets/uploads/2025/11/3-300x300.jpeg",
                        "/assets/uploads/2025/11/4-300x300.jpeg",
                        "/assets/uploads/2025/11/5-300x300.jpeg",
                        "/assets/uploads/2025/11/6-1-300x300.jpeg",
                        "/assets/uploads/2025/11/6-300x300.jpeg",
                        "/assets/uploads/2025/11/7-1-300x300.jpeg",
                        "/assets/uploads/2025/11/8-300x300.jpeg",
                        "/assets/uploads/2025/11/9-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11156",
                    "name" => [
                        "it" => "Contenitore da Giardino 1,5 x 2,2 m – Verde RAL 6005",
                        "en" => "1.5 x 2.2 m Garden Container – RAL 6005 Green",
                        "fr" => "Conteneur de Jardin 1,5 x 2,2 m – Vert RAL 6005",
                        "pt" => "Contêiner de Jardim 1,5 x 2,2 m – Verde RAL 6005",
                        "es" => "Contenedor de Jardín 1,5 x 2,2 m – Verde RAL 6005"
                    ],
                    "price" => "780.00",
                    "old_price" => null,
                    "sku" => "3276611156",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-da-giardino-15-x-22-m-verde-ral-6005/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore da Giardino 1,5 x 2,2 m in verde RAL 6005 è perfetto per stoccare in sicurezza attrezzi e materiali. Resistente, compatto e facile da montare.",
                        "en" => "The 1.5 x 2.2 m Garden Container in RAL 6005 green is perfect for safely storing tools and materials. Durable, compact and easy to assemble.",
                        "fr" => "Le Conteneur de Jardin 1,5 x 2,2 m en vert RAL 6005 est parfait pour stocker en toute sécurité outils et matériaux. Résistant, compact et facile à monter.",
                        "pt" => "O Contêiner de Jardim 1,5 x 2,2 m em verde RAL 6005 é perfeito para armazenar com segurança ferramentas e materiais. Resistente, compacto e fácil de montar.",
                        "es" => "El Contenedor de Jardín 1,5 x 2,2 m en verde RAL 6005 es perfecto para almacenar de forma segura herramientas y materiales. Resistente, compacto y fácil de montar."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-1-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10492",
                    "name" => [
                        "it" => "Contenitore di stoccaggio 40 piedi High Cube",
                        "en" => "40ft High Cube Storage Container",
                        "fr" => "Conteneur de stockage 40 pieds High Cube",
                        "pt" => "Contêiner de armazenamento 40 pés High Cube",
                        "es" => "Contenedor de almacenamiento 40 pies High Cube"
                    ],
                    "price" => "2,320.00",
                    "old_price" => "3,546.40",
                    "sku" => "3276610492",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-di-stoccaggio-40-piedi-high-cube/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore di stoccaggio 40’ HC usato in ottimo stato, perfetto per uso professionale o privato. Struttura robusta, ventilazione inclusa, pronto all'uso.\nStruttura in acciaio saldato sp. 3 mm\nPavimento in legno 25 mm trattato\nVolume utile: 31 m³\nMovimentabile con gru o carrello elevatore\nProtezione per il lucchetto inclusa",
                        "en" => "Used 40' HC storage container in excellent condition, perfect for professional or private use. Robust structure, ventilation included, ready to use.\n3 mm thick welded steel structure\n25 mm treated wooden floor\nUseful volume: 31 m³\nCan be moved with crane or forklift\nLock protection included",
                        "fr" => "Conteneur de stockage 40' HC d'occasion en excellent état, parfait pour un usage professionnel ou privé. Structure robuste, ventilation incluse, prêt à l'emploi.\nStructure en acier soudé ép. 3 mm\nPlancher en bois traité 25 mm\nVolume utile : 31 m³\nManutention par grue ou chariot élévateur\nProtection antivol incluse",
                        "pt" => "Contêiner de armazenamento 40' HC usado em excelente estado, perfeito para uso profissional ou privado. Estrutura robusta, ventilação incluída, pronto para uso.\nEstrutura de aço soldado esp. 3 mm\nPiso de madeira tratada 25 mm\nVolume útil: 31 m³\nPode ser movido com guindaste ou empilhadeira\nProteção para cadeado incluída",
                        "es" => "Contenedor de almacenamiento 40' HC usado en excelente estado, perfecto para uso profesional o privado. Estructura robusta, ventilación incluida, listo para usar.\nEstructura de acero soldado de 3 mm\nSuelo de madera tratada de 25 mm\nVolumen útil: 31 m³\nMovible con grúa o carretilla elevadora\nProtección para candado incluida"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/3-1-300x300.jpg",
                        "/assets/uploads/2025/11/2-3-300x300.jpg",
                        "/assets/uploads/2025/11/4-1-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10493",
                    "name" => [
                        "it" => "Contenitore di stoccaggio 40 piedi High Cube",
                        "en" => "40ft High Cube Storage Container",
                        "fr" => "Conteneur de stockage 40 pieds High Cube",
                        "pt" => "Contêiner de armazenamento 40 pés High Cube",
                        "es" => "Contenedor de almacenamiento 40 pies High Cube"
                    ],
                    "price" => "2,450.00",
                    "old_price" => "3,603.60",
                    "sku" => "3276610493",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-di-stoccaggio-40-piedi-high-cube-2/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore di stoccaggio 40’ HC nuovo con altezza extra e ampio volume interno. Ideale per magazzino, cantiere o deposito agricolo.\nAltezza interna maggiorata\nPavimento in legno trattato (25 mm)\nStruttura in acciaio saldato 3 mm\nVolume utile: 31 m³\nVentilato e dotato di doppie porte",
                        "en" => "New 40' HC storage container with extra height and large internal volume. Ideal for warehouse, construction site or agricultural storage.\nIncreased internal height\nTreated wooden floor (25 mm)\n3 mm welded steel structure\nUseful volume: 31 m³\nVentilated and equipped with double doors",
                        "fr" => "Nouveau conteneur de stockage 40' HC avec hauteur supplémentaire et grand volume intérieur. Idéal pour entrepôt, chantier ou stockage agricole.\nHauteur intérieure augmentée\nPlancher en bois traité (25 mm)\nStructure en acier soudé 3 mm\nVolume utile : 31 m³\nVentilé et équipé de doubles portes",
                        "pt" => "Novo contêiner de armazenamento 40' HC com altura extra e grande volume interno. Ideal para armazém, canteiro de obras ou depósito agrícola.\nAltura interna aumentada\nPiso de madeira tratada (25 mm)\nEstrutura de aço soldado 3 mm\nVolume útil: 31 m³\nVentilado e equipado com portas duplas",
                        "es" => "Nuevo contenedor de almacenamiento 40' HC con altura extra y gran volumen interior. Ideal para almacén, obra o depósito agrícola.\nAltura interior aumentada\nSuelo de madera tratada (25 mm)\nEstructura de acero soldado 3 mm\nVolumen útil: 31 m³\nVentilado y equipado con dobles puertas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-3-300x300.jpg",
                        "/assets/uploads/2025/11/2-3-1-300x300.jpg",
                        "/assets/uploads/2025/11/4-4-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10494",
                    "name" => [
                        "it" => "Contenitore di stoccaggio 40 piedi standard",
                        "en" => "40ft standard storage container",
                        "fr" => "Conteneur de stockage standard 40 pieds",
                        "pt" => "Contêiner de armazenamento padrão 40 pés",
                        "es" => "Contenedor de almacenamiento estándar 40 pies"
                    ],
                    "price" => "2,055.00",
                    "old_price" => "3,117.40",
                    "sku" => "3276610494",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-di-stoccaggio-40-piedi-standard/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore da 40 piedi standard usato, perfetto per lo stoccaggio in cantieri, magazzini o ambienti agricoli.\nStruttura in acciaio saldato (3 mm)\nPavimento in legno trattato da 25 mm\nVolume utile: 31 m³\n4 prese d'aria, doppie porte\nManipolazione con muletto o gru",
                        "en" => "Used standard 40ft container, perfect for storage on construction sites, warehouses or agricultural environments.\nWelded steel structure (3 mm)\n25 mm treated wooden floor\nUseful volume: 31 m³\n4 air vents, double doors\nHandling with forklift or crane",
                        "fr" => "Conteneur standard 40 pieds d'occasion, parfait pour le stockage sur chantiers, entrepôts ou environnements agricoles.\nStructure en acier soudé (3 mm)\nPlancher en bois traité 25 mm\nVolume utile : 31 m³\n4 aérations, doubles portes\nManutention par chariot élévateur ou grue",
                        "pt" => "Contêiner padrão 40 pés usado, perfeito para armazenamento em canteiros de obras, armazéns ou ambientes agrícolas.\nEstrutura de aço soldado (3 mm)\nPiso de madeira tratada 25 mm\nVolume útil: 31 m³\n4 entradas de ar, portas duplas\nManuseio com empilhadeira ou guindaste",
                        "es" => "Contenedor estándar 40 pies usado, perfecto para almacenamiento en obras, almacenes o entornos agrícolas.\nEstructura de acero soldado (3 mm)\nSuelo de madera tratada de 25 mm\nVolumen útil: 31 m³\n4 rejillas de ventilación, dobles puertas\nManipulación con carretilla elevadora o grúa"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/3-1-1-300x300.webp",
                        "/assets/uploads/2025/11/1-1-1-300x300.webp",
                        "/assets/uploads/2025/11/2-6-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11163",
                    "name" => [
                        "it" => "Contenitore Frigorifero 10 Piedi – Soluzione Compatta per Stoccaggio",
                        "en" => "10ft Refrigerated Container – Compact Storage Solution",
                        "fr" => "Conteneur Frigorifique 10 Pieds – Solution Compacte de Stockage",
                        "pt" => "Contêiner Frigorífico 10 Pés – Solução Compacta de Armazenamento",
                        "es" => "Contenedor Frigorífico 10 Pies – Solución Compacta de Almacenamiento"
                    ],
                    "price" => "1,200.00",
                    "old_price" => null,
                    "sku" => "3276611163",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-10-piedi-soluzione-compatta-per-stoccaggio/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore Frigorifero 10 Piedi: compatto, isolato e ideale per alimenti, farmaci o prodotti chimici. Perfetto per stoccaggio e trasporto sicuro a temperatura controllata.",
                        "en" => "10ft Refrigerated Container: compact, insulated and ideal for food, pharmaceuticals or chemicals. Perfect for safe storage and transport at controlled temperature.",
                        "fr" => "Conteneur Frigorifique 10 Pieds : compact, isolé et idéal pour les aliments, médicaments ou produits chimiques. Parfait pour le stockage et le transport sécurisé à température contrôlée.",
                        "pt" => "Contêiner Frigorífico 10 Pés: compacto, isolado e ideal para alimentos, medicamentos ou produtos químicos. Perfeito para armazenamento e transporte seguro em temperatura controlada.",
                        "es" => "Contenedor Frigorífico 10 Pies: compacto, aislado e ideal para alimentos, medicamentos o productos químicos. Perfecto para almacenamiento y transporte seguro a temperatura controlada."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-10-Piedi-Soluzione-Compatta-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-10-Piedi-Soluzione-Compatta-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11166",
                    "name" => [
                        "it" => "Contenitore Frigorifero 20 Piedi Reefer- Soluzione Ideale per Stoccaggio",
                        "en" => "20ft Reefer Refrigerated Container – Ideal Storage Solution",
                        "fr" => "Conteneur Frigorifique 20 Pieds Reefer – Solution Idéale de Stockage",
                        "pt" => "Contêiner Frigorífico 20 Pés Reefer – Solução Ideal de Armazenamento",
                        "es" => "Contenedor Frigorífico 20 Pies Reefer – Solución Ideal de Almacenamiento"
                    ],
                    "price" => "3,600.00",
                    "old_price" => "4,000.00",
                    "sku" => "3276611166",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-20-piedi-reefer-soluzione-ideale-per-stoccaggio/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore Frigorifero 20 Piedi Reefer: perfetto per stoccaggio e trasporto di prodotti freschi e sensibili. Gamma termica da -25°C a +25°C, certificato ISO e pronto all'uso.",
                        "en" => "20ft Reefer Refrigerated Container: perfect for storage and transport of fresh and sensitive products. Temperature range from -25°C to +25°C, ISO certified and ready to use.",
                        "fr" => "Conteneur Frigorifique 20 Pieds Reefer : parfait pour le stockage et le transport de produits frais et sensibles. Plage de température de -25°C à +25°C, certifié ISO et prêt à l'emploi.",
                        "pt" => "Contêiner Frigorífico 20 Pés Reefer: perfeito para armazenamento e transporte de produtos frescos e sensíveis. Faixa de temperatura de -25°C a +25°C, certificado ISO e pronto para uso.",
                        "es" => "Contenedor Frigorífico 20 Pies Reefer: perfecto para almacenamiento y transporte de productos frescos y sensibles. Rango de temperatura de -25°C a +25°C, certificado ISO y listo para usar."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-0-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-2-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-1-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11164",
                    "name" => [
                        "it" => "Contenitore Frigorifero 40 Piedi – Soluzione Affidabile per Trasporto",
                        "en" => "40ft Refrigerated Container – Reliable Transport Solution",
                        "fr" => "Conteneur Frigorifique 40 Pieds – Solution Fiable pour Transport",
                        "pt" => "Contêiner Frigorífico 40 Pés – Solução Confiável para Transporte",
                        "es" => "Contenedor Frigorífico 40 Pies – Solución Fiable para Transporte"
                    ],
                    "price" => "4,600.00",
                    "old_price" => "5,500.00",
                    "sku" => "3276611164",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-40-piedi-soluzione-affidabile-per-trasporto/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore Frigorifero 40 Piedi: robusto, isolato e ideale per alimenti, farmaci e prodotti chimici. Perfetto per trasporto e stoccaggio sicuro a temperatura controllata.",
                        "en" => "40ft Refrigerated Container: robust, insulated and ideal for food, pharmaceuticals and chemicals. Perfect for safe transport and storage at controlled temperature.",
                        "fr" => "Conteneur Frigorifique 40 Pieds : robuste, isolé et idéal pour les aliments, médicaments et produits chimiques. Parfait pour le transport et le stockage sécurisé à température contrôlée.",
                        "pt" => "Contêiner Frigorífico 40 Pés: robusto, isolado e ideal para alimentos, medicamentos e produtos químicos. Perfeito para transporte e armazenamento seguro em temperatura controlada.",
                        "es" => "Contenedor Frigorífico 40 Pies: robusto, aislado e ideal para alimentos, medicamentos y productos químicos. Perfecto para transporte y almacenamiento seguro a temperatura controlada."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-40-Piedi-Soluzione-Affidabile-per-Trasporto-e-Stoccaggio-a-Temperatura-Controllata-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11167",
                    "name" => [
                        "it" => "Contenitore Frigorifero 40 Piedi Reefer Usato",
                        "en" => "Used 40ft Reefer Refrigerated Container",
                        "fr" => "Conteneur Frigorifique 40 Pieds Reefer Occasion",
                        "pt" => "Contêiner Frigorífico 40 Pés Reefer Usado",
                        "es" => "Contenedor Frigorífico 40 Pies Reefer Usado"
                    ],
                    "price" => "4,500.00",
                    "old_price" => null,
                    "sku" => "3276611167",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-40-piedi-reefer-usato/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore Frigorifero 40 Piedi Reefer Usato Classe A: robusto, certificato ISO, ideale per il trasporto e lo stoccaggio a temperatura controllata. Precisione termica e grande capacità interna.",
                        "en" => "Used Class A 40ft Reefer Refrigerated Container: robust, ISO certified, ideal for transport and storage at controlled temperature. Thermal precision and large internal capacity.",
                        "fr" => "Conteneur Frigorifique 40 Pieds Reefer Occasion Classe A : robuste, certifié ISO, idéal pour le transport et le stockage à température contrôlée. Précision thermique et grande capacité intérieure.",
                        "pt" => "Contêiner Frigorífico 40 Pés Reefer Usado Classe A: robusto, certificado ISO, ideal para transporte e armazenamento em temperatura controlada. Precisão térmica e grande capacidade interna.",
                        "es" => "Contenedor Frigorífico 40 Pies Reefer Usado Clase A: robusto, certificado ISO, ideal para transporte y almacenamiento a temperatura controlada. Precisión térmica y gran capacidad interna."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-40-Piedi-Reefer-Usato-Classe-A-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11165",
                    "name" => [
                        "it" => "Contenitore Frigorifero 45 Piedi Reefer – Soluzione Ideale per Stoccaggio",
                        "en" => "45ft Reefer Refrigerated Container – Ideal Storage Solution",
                        "fr" => "Conteneur Frigorifique 45 Pieds Reefer – Solution Idéale de Stockage",
                        "pt" => "Contêiner Frigorífico 45 Pés Reefer – Solução Ideal de Armazenamento",
                        "es" => "Contenedor Frigorífico 45 Pies Reefer – Solución Ideal de Almacenamiento"
                    ],
                    "price" => "6,000.00",
                    "old_price" => null,
                    "sku" => "3276611165",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-45-piedi-reefer-soluzione-ideale-per-stoccaggio/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore Frigorifero 45 Piedi Reefer: robusto, certificato ISO e perfetto per trasporto e stoccaggio di prodotti freschi o sensibili. Precisione da -25°C a +25°C.",
                        "en" => "45ft Reefer Refrigerated Container: robust, ISO certified and perfect for transport and storage of fresh or sensitive products. Precision from -25°C to +25°C.",
                        "fr" => "Conteneur Frigorifique 45 Pieds Reefer : robuste, certifié ISO et parfait pour le transport et le stockage de produits frais ou sensibles. Précision de -25°C à +25°C.",
                        "pt" => "Contêiner Frigorífico 45 Pés Reefer: robusto, certificado ISO e perfeito para transporte e armazenamento de produtos frescos ou sensíveis. Precisão de -25°C a +25°C.",
                        "es" => "Contenedor Frigorífico 45 Pies Reefer: robusto, certificado ISO y perfecto para transporte y almacenamiento de productos frescos o sensibles. Precisión de -25°C a +25°C."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-2-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10475",
                    "name" => [
                        "it" => "Contenitore Frigorifero Congelatore 20 Piedi RF",
                        "en" => "20ft RF Freezer Refrigerated Container",
                        "fr" => "Conteneur Frigorifique Congélateur 20 Pieds RF",
                        "pt" => "Contêiner Frigorífico Congelador 20 Pés RF",
                        "es" => "Contenedor Frigorífico Congelador 20 Pies RF"
                    ],
                    "price" => "2,510.00",
                    "old_price" => "3,846.70",
                    "sku" => "3276610475",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-congelatore-20-piedi-rf/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Il contenitore frigorifero 20 piedi RF è progettato per un controllo preciso della temperatura da -25°C a +25°C. Con pareti in poliuretano ad alto isolamento, unità refrigerante Carrier e certificazione CSC, è perfetto per uso alimentare e industriale.\nRange di temperatura: -25°C / +25°C\nIsolamento in schiuma poliuretanica (10–12 cm)\nUnità Carrier ad alta efficienza\nConnessione 380V, presa 32A integrata\nCertificato CSC, pronto all'uso",
                        "en" => "The 20ft RF refrigerated container is designed for precise temperature control from -25°C to +25°C. With high-insulation polyurethane walls, Carrier refrigeration unit and CSC certification, it is perfect for food and industrial use.\nTemperature range: -25°C / +25°C\nPolyurethane foam insulation (10-12 cm)\nHigh efficiency Carrier unit\n380V connection, integrated 32A socket\nCSC certified, ready to use",
                        "fr" => "Le conteneur frigorifique 20 pieds RF est conçu pour un contrôle précis de la température de -25°C à +25°C. Avec des parois en polyuréthane haute isolation, une unité frigorifique Carrier et une certification CSC, il est parfait pour un usage alimentaire et industriel.\nPlage de température : -25°C / +25°C\nIsolation mousse polyuréthane (10–12 cm)\nUnité Carrier haute efficacité\nConnexion 380V, prise 32A intégrée\nCertifié CSC, prêt à l'emploi",
                        "pt" => "O contêiner frigorífico 20 pés RF é projetado para controle preciso de temperatura de -25°C a +25°C. Com paredes de poliuretano de alto isolamento, unidade de refrigeração Carrier e certificação CSC, é perfeito para uso alimentar e industrial.\nFaixa de temperatura: -25°C / +25°C\nIsolamento de espuma de poliuretano (10–12 cm)\nUnidade Carrier de alta eficiência\nConexão 380V, tomada 32A integrada\nCertificado CSC, pronto para uso",
                        "es" => "El contenedor frigorífico 20 pies RF está diseñado para un control preciso de la temperatura de -25°C a +25°C. Con paredes de poliuretano de alto aislamiento, unidad frigorífica Carrier y certificación CSC, es perfecto para uso alimentario e industrial.\nRango de temperatura: -25°C / +25°C\nAislamiento de espuma de poliuretano (10–12 cm)\nUnidad Carrier de alta eficiencia\nConexión 380V, toma 32A integrada\nCertificado CSC, listo para usar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-4-300x300.webp",
                        "/assets/uploads/2025/11/2-4-300x300.webp",
                        "/assets/uploads/2025/11/3-4-300x300.webp",
                        "/assets/uploads/2025/11/4-3-300x300.webp",
                        "/assets/uploads/2025/11/5-2-300x300.webp",
                        "/assets/uploads/2025/11/6-2-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "10471",
                    "name" => [
                        "it" => "Contenitore Frigorifero da 10 Piedi",
                        "en" => "10ft Refrigerated Container",
                        "fr" => "Conteneur Frigorifique 10 Pieds",
                        "pt" => "Contêiner Frigorífico 10 Pés",
                        "es" => "Contenedor Frigorífico 10 Pies"
                    ],
                    "price" => "1,951.95",
                    "old_price" => "2,788.50",
                    "sku" => "3276610471",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-da-10-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Mantieni i tuoi prodotti freschi, surgelati o sensibili alla temperatura al sicuro con il nostro contenitore frigorifero da 10 piedi. Dotato di un sistema di refrigerazione attivo, isolamento ad alte prestazioni e finiture professionali, è la soluzione compatta e affidabile per lo stoccaggio in condizioni controllate.\nRange di temperatura: da -25°C a +25°C\nIsolamento PIR da 40 mm e XPS da 50 mm sul pavimento\nInterni bianchi in acciaio, igienici e lavabili\nSistema elettrico e gruppo frigorifero integrati\nVentilazione ottimizzata con doppia valvola",
                        "en" => "Keep your fresh, frozen or temperature-sensitive products safe with our 10ft refrigerated container. Equipped with an active refrigeration system, high-performance insulation and professional finishes, it is the compact and reliable solution for storage under controlled conditions.\nTemperature range: from -25°C to +25°C\n40 mm PIR insulation and 50 mm XPS on the floor\nWhite steel interiors, hygienic and washable\nIntegrated electrical system and refrigeration unit\nOptimized ventilation with double valve",
                        "fr" => "Gardez vos produits frais, surgelés ou sensibles à la température en sécurité avec notre conteneur frigorifique de 10 pieds. Équipé d'un système de réfrigération actif, d'une isolation haute performance et de finitions professionnelles, c'est la solution compacte et fiable pour le stockage en conditions contrôlées.\nPlage de température : de -25°C à +25°C\nIsolation PIR 40 mm et XPS 50 mm au sol\nIntérieurs en acier blanc, hygiéniques et lavables\nSystème électrique et groupe frigorifique intégrés\nVentilation optimisée avec double valve",
                        "pt" => "Mantenha seus produtos frescos, congelados ou sensíveis à temperatura seguros com nosso contêiner frigorífico de 10 pés. Equipado com sistema de refrigeração ativo, isolamento de alto desempenho e acabamentos profissionais, é a solução compacta e confiável para armazenamento em condições controladas.\nFaixa de temperatura: de -25°C a +25°C\nIsolamento PIR de 40 mm e XPS de 50 mm no piso\nInteriores em aço branco, higiênicos e laváveis\nSistema elétrico e unidade de refrigeração integrados\nVentilação otimizada com válvula dupla",
                        "es" => "Mantenga sus productos frescos, congelados o sensibles a la temperatura seguros con nuestro contenedor frigorífico de 10 pies. Equipado con un sistema de refrigeración activo, aislamiento de alto rendimiento y acabados profesionales, es la solución compacta y fiable para almacenamiento en condiciones controladas.\nRango de temperatura: de -25°C a +25°C\nAislamiento PIR de 40 mm y XPS de 50 mm en el suelo\nInteriores de acero blanco, higiénicos y lavables\nSistema eléctrico y grupo frigorífico integrados\nVentilación optimizada con doble válvula"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-300x300.webp",
                        "/assets/uploads/2025/11/2-300x300.webp",
                        "/assets/uploads/2025/11/3-300x300.webp",
                        "/assets/uploads/2025/11/4-300x300.webp",
                        "/assets/uploads/2025/11/5-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10472",
                    "name" => [
                        "it" => "Contenitore Frigorifero da 10 Piedi – Compatto, Refrigerato",
                        "en" => "10ft Refrigerated Container – Compact, Refrigerated",
                        "fr" => "Conteneur Frigorifique 10 Pieds – Compact, Réfrigéré",
                        "pt" => "Contêiner Frigorífico 10 Pés – Compacto, Refrigerado",
                        "es" => "Contenedor Frigorífico 10 Pies – Compacto, Refrigerado"
                    ],
                    "price" => "1,551.55",
                    "old_price" => "2,216.50",
                    "sku" => "3276610472",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-da-10-piedi-compatto-refrigerato/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Questo contenitore frigorifero da 10 piedi unisce compattezza, efficienza e prestazioni professionali. Con isolamento PIR e refrigerazione attiva, è perfetto per il trasporto o lo stoccaggio di merci sensibili alla temperatura. Igienico, robusto e ottimizzato per ambienti professionali.\nVolume interno: 12,45 m³ / Superficie: 5,48 m²\nRange temperatura: -25°C a +25°C\nIsolamento PIR e pavimento in XPS\nInterni in acciaio bianco, ventilazione integrata\nStruttura impilabile e facile da movimentare",
                        "en" => "This 10ft refrigerated container combines compactness, efficiency and professional performance. With PIR insulation and active refrigeration, it is perfect for transporting or storing temperature-sensitive goods. Hygienic, robust and optimized for professional environments.\nInternal volume: 12.45 m³ / Area: 5.48 m²\nTemperature range: -25°C to +25°C\nPIR insulation and XPS floor\nWhite steel interiors, integrated ventilation\nStackable structure and easy to handle",
                        "fr" => "Ce conteneur frigorifique de 10 pieds allie compacité, efficacité et performances professionnelles. Avec isolation PIR et réfrigération active, il est parfait pour le transport ou le stockage de marchandises sensibles à la température. Hygiénique, robuste et optimisé pour les environnements professionnels.\nVolume intérieur : 12,45 m³ / Surface : 5,48 m²\nPlage température : -25°C à +25°C\nIsolation PIR et sol XPS\nIntérieurs en acier blanc, ventilation intégrée\nStructure empilable et facile à manœuvrer",
                        "pt" => "Este contêiner frigorífico de 10 pés combina compacidade, eficiência e desempenho profissional. Com isolamento PIR e refrigeração ativa, é perfeito para transportar ou armazenar mercadorias sensíveis à temperatura. Higiênico, robusto e otimizado para ambientes profissionais.\nVolume interno: 12,45 m³ / Área: 5,48 m²\nFaixa de temperatura: -25°C a +25°C\nIsolamento PIR e piso XPS\nInteriores em aço branco, ventilação integrada\nEstrutura empilhável e fácil de manusear",
                        "es" => "Este contenedor frigorífico de 10 pies combina compacidad, eficiencia y rendimiento profesional. Con aislamiento PIR y refrigeración activa, es perfecto para transportar o almacenar mercancías sensibles a la temperatura. Higiénico, robusto y optimizado para entornos profesionales.\nVolumen interior: 12,45 m³ / Superficie: 5,48 m²\nRango temperatura: -25°C a +25°C\nAislamiento PIR y suelo XPS\nInteriores de acero blanco, ventilación integrada\nEstructura apilable y fácil de manejar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-1-300x300.webp",
                        "/assets/uploads/2025/11/2-1-300x300.webp",
                        "/assets/uploads/2025/11/3-1-300x300.webp",
                        "/assets/uploads/2025/11/4-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10473",
                    "name" => [
                        "it" => "Contenitore Frigorifero DNV da 10 Piedi",
                        "en" => "10ft DNV Refrigerated Container",
                        "fr" => "Conteneur Frigorifique DNV 10 Pieds",
                        "pt" => "Contêiner Frigorífico DNV 10 Pés",
                        "es" => "Contenedor Frigorífico DNV 10 Pies"
                    ],
                    "price" => "1,425.00",
                    "old_price" => "2,216.50",
                    "sku" => "3276610473",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-dnv-da-10-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Il contenitore frigorifero DNV da 10 piedi è progettato per l'utilizzo in ambienti offshore, garantendo refrigerazione sicura ed efficiente anche in condizioni estreme. Struttura certificata, motore affidabile e design resistente lo rendono perfetto per applicazioni industriali marittime.\nCertificazione DNV per uso offshore\nGruppo frigorifero efficiente e affidabile\nStruttura rinforzata per ambienti marittimi\nSistemi di sollevamento e movimentazione inclusi\nIdeale per la catena del freddo in mare aperto",
                        "en" => "The 10ft DNV refrigerated container is designed for use in offshore environments, ensuring safe and efficient refrigeration even in extreme conditions. Certified structure, reliable engine and robust design make it perfect for maritime industrial applications.\nDNV certification for offshore use\nEfficient and reliable refrigeration unit\nReinforced structure for marine environments\nLifting and handling systems included\nIdeal for cold chain at sea",
                        "fr" => "Le conteneur frigorifique DNV de 10 pieds est conçu pour une utilisation en environnement offshore, garantissant une réfrigération sûre et efficace même dans des conditions extrêmes. Structure certifiée, moteur fiable et conception robuste le rendent parfait pour les applications industrielles maritimes.\nCertification DNV pour usage offshore\nGroupe frigorifique efficace et fiable\nStructure renforcée pour environnements marins\nSystèmes de levage et manutention inclus\nIdéal pour la chaîne du froid en mer",
                        "pt" => "O contêiner frigorífico DNV de 10 pés é projetado para uso em ambientes offshore, garantindo refrigeração segura e eficiente mesmo em condições extremas. Estrutura certificada, motor confiável e design robusto o tornam perfeito para aplicações industriais marítimas.\nCertificação DNV para uso offshore\nUnidade de refrigeração eficiente e confiável\nEstrutura reforçada para ambientes marítimos\nSistemas de elevação e manuseio incluídos\nIdeal para cadeia fria no mar",
                        "es" => "El contenedor frigorífico DNV de 10 pies está diseñado para uso en entornos offshore, garantizando una refrigeración segura y eficiente incluso en condiciones extremas. Estructura certificada, motor fiable y diseño robusto lo hacen perfecto para aplicaciones industriales marítimas.\nCertificación DNV para uso offshore\nGrupo frigorífico eficiente y fiable\nEstructura reforzada para entornos marinos\nSistemas de elevación y manipulación incluidos\nIdeal para cadena de frío en alta mar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/7-300x300.webp",
                        "/assets/uploads/2025/11/1-2-300x300.webp",
                        "/assets/uploads/2025/11/2-2-300x300.webp",
                        "/assets/uploads/2025/11/3-2-300x300.webp",
                        "/assets/uploads/2025/11/4-2-300x300.webp",
                        "/assets/uploads/2025/11/5-1-300x300.webp",
                        "/assets/uploads/2025/11/6-300x300.webp",
                        "/assets/uploads/2025/11/8-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10476",
                    "name" => [
                        "it" => "Contenitore Frigorifero Reefer 40 Piedi High Cube",
                        "en" => "40ft High Cube Reefer Refrigerated Container",
                        "fr" => "Conteneur Frigorifique Reefer 40 Pieds High Cube",
                        "pt" => "Contêiner Frigorífico Reefer 40 Pés High Cube",
                        "es" => "Contenedor Frigorífico Reefer 40 Pies High Cube"
                    ],
                    "price" => "3,099.00",
                    "old_price" => "4,461.60",
                    "sku" => "3276610476",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-reefer-40-piedi-high-cube/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Perfetto per logistica globale e stoccaggio professionale, il contenitore frigorifero Reefer 40 piedi High Cube offre una capacità elevata, controllo preciso della temperatura e costruzione igienica in acciaio inox. Ideale per merci sensibili al freddo, da -40°C a +35°C.\nCapacità: 76 m³\nTemperatura: da -40°C a +35°C\nInterno in acciaio inox e alluminio\nTipo High Cube: maggiore volume utile\nCertificato CSC per uso internazionale",
                        "en" => "Perfect for global logistics and professional storage, the 40ft High Cube Reefer refrigerated container offers high capacity, precise temperature control and hygienic stainless steel construction. Ideal for cold-sensitive goods, from -40°C to +35°C.\nCapacity: 76 m³\nTemperature: from -40°C to +35°C\nStainless steel and aluminum interior\nHigh Cube type: greater useful volume\nCSC certified for international use",
                        "fr" => "Parfait pour la logistique mondiale et le stockage professionnel, le conteneur frigorifique Reefer 40 pieds High Cube offre une capacité élevée, un contrôle précis de la température et une construction hygiénique en acier inoxydable. Idéal pour les marchandises sensibles au froid, de -40°C à +35°C.\nCapacité : 76 m³\nTempérature : de -40°C à +35°C\nIntérieur en acier inoxydable et aluminium\nType High Cube : volume utile plus important\nCertifié CSC pour usage international",
                        "pt" => "Perfeito para logística global e armazenamento profissional, o contêiner frigorífico Reefer 40 pés High Cube oferece alta capacidade, controle preciso de temperatura e construção higiênica em aço inoxidável. Ideal para mercadorias sensíveis ao frio, de -40°C a +35°C.\nCapacidade: 76 m³\nTemperatura: de -40°C a +35°C\nInterior em aço inoxidável e alumínio\nTipo High Cube: maior volume útil\nCertificado CSC para uso internacional",
                        "es" => "Perfecto para logística global y almacenamiento profesional, el contenedor frigorífico Reefer 40 pies High Cube ofrece alta capacidad, control preciso de temperatura y construcción higiénica en acero inoxidable. Ideal para mercancías sensibles al frío, de -40°C a +35°C.\nCapacidad: 76 m³\nTemperatura: de -40°C a +35°C\nInterior de acero inoxidable y aluminio\nTipo High Cube: mayor volumen útil\nCertificado CSC para uso internacional"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-300x300.jpeg",
                        "/assets/uploads/2025/11/3-2-1-300x300.webp",
                        "/assets/uploads/2025/11/4-2-1-300x300.webp",
                        "/assets/uploads/2025/11/reefer-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10477",
                    "name" => [
                        "it" => "Contenitore Frigorifero Usato 40 Piedi",
                        "en" => "Used 40ft Refrigerated Container",
                        "fr" => "Conteneur Frigorifique Occasion 40 Pieds",
                        "pt" => "Contêiner Frigorífico Usado 40 Pés",
                        "es" => "Contenedor Frigorífico Usado 40 Pies"
                    ],
                    "price" => "2,220.00",
                    "old_price" => "3,317.60",
                    "sku" => "3276610477",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-usato-40-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Il contenitore frigorifero usato da 40 piedi garantisce una soluzione affidabile e certificata per il trasporto e lo stoccaggio a temperatura controllata. Dotato di isolamento in poliuretano, unità Carrier o Thermo King e rivestimento in acciaio inox, è ideale per merci sensibili.\nTemperatura operativa: -25°C / +25°C\nCertificazione CSC valida 1 anno\nInterno in acciaio inox, facile da pulire\nIsolamento in poliuretano ad alta efficienza\nUnità Carrier o Thermo King di qualità professionale",
                        "en" => "The used 40ft refrigerated container guarantees a reliable and certified solution for transport and storage at controlled temperature. Equipped with polyurethane insulation, Carrier or Thermo King unit and stainless steel lining, it is ideal for sensitive goods.\nOperating temperature: -25°C / +25°C\nCSC certification valid 1 year\nStainless steel interior, easy to clean\nHigh efficiency polyurethane insulation\nProfessional quality Carrier or Thermo King unit",
                        "fr" => "Le conteneur frigorifique usagé 40 pieds garantit une solution fiable et certifiée pour le transport et le stockage à température contrôlée. Équipé d'une isolation en polyuréthane, d'une unité Carrier ou Thermo King et d'un revêtement en acier inoxydable, il est idéal pour les marchandises sensibles.\nTempérature de fonctionnement : -25°C / +25°C\nCertification CSC valable 1 an\nIntérieur en acier inoxydable, facile à nettoyer\nIsolation polyuréthane haute efficacité\nUnité Carrier ou Thermo King de qualité professionnelle",
                        "pt" => "O contêiner frigorífico usado de 40 pés garante uma solução confiável e certificada para transporte e armazenamento em temperatura controlada. Equipado com isolamento de poliuretano, unidade Carrier ou Thermo King e revestimento de aço inoxidável, é ideal para mercadorias sensíveis.\nTemperatura operacional: -25°C / +25°C\nCertificação CSC válida 1 ano\nInterior em aço inoxidável, fácil de limpar\nIsolamento de poliuretano de alta eficiência\nUnidade Carrier ou Thermo King de qualidade profissional",
                        "es" => "El contenedor frigorífico usado de 40 pies garantiza una solución fiable y certificada para transporte y almacenamiento a temperatura controlada. Equipado con aislamiento de poliuretano, unidad Carrier o Thermo King y revestimiento de acero inoxidable, es ideal para mercancías sensibles.\nTemperatura operativa: -25°C / +25°C\nCertificación CSC válida 1 año\nInterior de acero inoxidable, fácil de limpiar\nAislamiento de poliuretano de alta eficiencia\nUnidad Carrier o Thermo King de calidad profesional"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-4-300x300.png",
                        "/assets/uploads/2025/11/2-4-300x300.png",
                        "/assets/uploads/2025/11/3-3-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10478",
                    "name" => [
                        "it" => "Contenitore Frigorifero Usato 40′ High Cube",
                        "en" => "Used 40′ High Cube Refrigerated Container",
                        "fr" => "Conteneur Frigorifique Occasion 40′ High Cube",
                        "pt" => "Contêiner Frigorífico Usado 40′ High Cube",
                        "es" => "Contenedor Frigorífico Usado 40′ High Cube"
                    ],
                    "price" => "3,095.00",
                    "old_price" => "4,504.50",
                    "sku" => "3276610478",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-frigorifero-usato-40-high-cube/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Cerchi un contenitore refrigerato professionale e pronto all'uso? Il nostro modello usato 40’ High Cube offre spazio, sicurezza e prestazioni elevate. Perfetto per alimenti, farmaci e sostanze sensibili alla temperatura, grazie al sistema refrigerante -40°C / +30°C.\nVolume utile: 67 m³\nStruttura in acciaio saldato e isolato\nPavimento in alluminio zigrinato\nSistema refrigerante 380V -40°C / +30°C\n4 punti di sollevamento + passaggio per forche",
                        "en" => "Looking for a professional, ready-to-use refrigerated container? Our used 40' High Cube model offers space, safety and high performance. Perfect for food, medicine and temperature-sensitive substances, thanks to the -40°C / +30°C refrigeration system.\nUseful volume: 67 m³\nWelded and insulated steel structure\nRibbed aluminum floor\n380V refrigeration system -40°C / +30°C\n4 lifting points + fork pockets",
                        "fr" => "Vous cherchez un conteneur réfrigéré professionnel prêt à l'emploi ? Notre modèle d'occasion 40' High Cube offre espace, sécurité et hautes performances. Parfait pour les aliments, médicaments et substances sensibles à la température, grâce au système frigorifique -40°C / +30°C.\nVolume utile : 67 m³\nStructure en acier soudé et isolé\nPlancher en aluminium strié\nSystème frigorifique 380V -40°C / +30°C\n4 points de levage + passages pour fourches",
                        "pt" => "Procurando um contêiner refrigerado profissional e pronto para uso? Nosso modelo usado 40' High Cube oferece espaço, segurança e alto desempenho. Perfeito para alimentos, medicamentos e substâncias sensíveis à temperatura, graças ao sistema de refrigeração -40°C / +30°C.\nVolume útil: 67 m³\nEstrutura de aço soldado e isolado\nPiso de alumínio estriado\nSistema de refrigeração 380V -40°C / +30°C\n4 pontos de elevação + passagem para garfos",
                        "es" => "¿Busca un contenedor frigorífico profesional y listo para usar? Nuestro modelo usado 40' High Cube ofrece espacio, seguridad y alto rendimiento. Perfecto para alimentos, medicamentos y sustancias sensibles a la temperatura, gracias al sistema frigorífico -40°C / +30°C.\nVolumen útil: 67 m³\nEstructura de acero soldado y aislado\nSuelo de aluminio estriado\nSistema frigorífico 380V -40°C / +30°C\n4 puntos de elevación + pasos para horquillas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/11-300x300.jpg",
                        "/assets/uploads/2025/11/1-300x300.jpg",
                        "/assets/uploads/2025/11/8.jpg",
                        "/assets/uploads/2025/11/9-300x300.jpg",
                        "/assets/uploads/2025/11/10-300x300.jpg",
                        "/assets/uploads/2025/11/12-300x300.jpg",
                        "/assets/uploads/2025/11/13-300x300.jpg",
                        "/assets/uploads/2025/11/14-300x300.jpg",
                        "/assets/uploads/2025/11/15-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10488",
                    "name" => [
                        "it" => "Contenitore Hazmat 20 piedi",
                        "en" => "20ft Hazmat Container",
                        "fr" => "Conteneur Hazmat 20 pieds",
                        "pt" => "Contêiner Hazmat 20 pés",
                        "es" => "Contenedor Hazmat 20 pies"
                    ],
                    "price" => "1,525.00",
                    "old_price" => "2,545.40",
                    "sku" => "3276610488",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-hazmat-20-piedi/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Il contenitore Hazmat da 20 piedi è progettato per il trasporto sicuro di materiali pericolosi. Costruito in acciaio CORTEN con vasca di raccolta, garantisce massima protezione in ambienti industriali.\nStruttura anticorrosiva in acciaio CORTEN\nVasca integrata e valvole di drenaggio\nGriglie in acciaio zincato e ventilazione\nCassetta di sicurezza e tasche per carrelli\nImpilabile, resistente e facile da movimentare",
                        "en" => "The 20ft Hazmat container is designed for the safe transport of dangerous materials. Built in CORTEN steel with collection tank, it guarantees maximum protection in industrial environments.\nAnti-corrosion CORTEN steel structure\nIntegrated tank and drainage valves\nGalvanized steel grates and ventilation\nSafety lockbox and forklift pockets\nStackable, durable and easy to handle",
                        "fr" => "Le conteneur Hazmat 20 pieds est conçu pour le transport sécurisé de matières dangereuses. Construit en acier CORTEN avec bac de rétention, il garantit une protection maximale en environnements industriels.\nStructure anticorrosion en acier CORTEN\nBac intégré et vannes de drainage\nGrilles en acier galvanisé et ventilation\nBoîte de sécurité et fourches pour chariots\nEmpilable, résistant et facile à manutentionner",
                        "pt" => "O contêiner Hazmat de 20 pés é projetado para o transporte seguro de materiais perigosos. Construído em aço CORTEN com tanque de coleta, garante máxima proteção em ambientes industriais.\nEstrutura anticorrosiva em aço CORTEN\nTanque integrado e válvulas de drenagem\nGrelhas de aço galvanizado e ventilação\nCaixa de segurança e bolsos para empilhadeira\nEmpilhável, resistente e fácil de manusear",
                        "es" => "El contenedor Hazmat de 20 pies está diseñado para el transporte seguro de materiales peligrosos. Construido en acero CORTEN con cubeto de retención, garantiza máxima protección en entornos industriales.\nEstructura anticorrosión de acero CORTEN\nCubeto integrado y válvulas de drenaje\nRejillas de acero galvanizado y ventilación\nCaja de seguridad y bolsillos para carretillas\nApilable, resistente y fácil de manejar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-23-300x300.webp",
                        "/assets/uploads/2025/11/2-22-300x300.webp",
                        "/assets/uploads/2025/11/3-21-300x300.webp",
                        "/assets/uploads/2025/11/4-18-300x300.webp",
                        "/assets/uploads/2025/11/5-20-300x300.webp",
                        "/assets/uploads/2025/11/6-16-300x300.webp",
                        "/assets/uploads/2025/11/7-13-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10496",
                    "name" => [
                        "it" => "Contenitore High Cube 40 piedi – Usato",
                        "en" => "40ft High Cube Container – Used",
                        "fr" => "Conteneur High Cube 40 pieds – Occasion",
                        "pt" => "Contêiner High Cube 40 pés – Usado",
                        "es" => "Contenedor High Cube 40 pies – Usado"
                    ],
                    "price" => "2,199.00",
                    "old_price" => "3,303.30",
                    "sku" => "3276610496",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-high-cube-40-piedi-usato/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube 40 piedi usato, perfetto per chi ha bisogno di più spazio utile.\nAltezza maggiorata: 2,89 m\nCertificazioni ISO & CSC\nCondizione Cargo Worthy\nStruttura in acciaio Corten\nVendita e noleggio disponibili",
                        "en" => "Used 40ft High Cube shipping container, perfect for those who need more useful space.\nIncreased height: 2.89 m\nISO & CSC certifications\nCargo Worthy condition\nCorten steel structure\nSale and rental available",
                        "fr" => "Conteneur maritime High Cube 40 pieds d'occasion, parfait pour ceux qui ont besoin de plus d'espace utile.\nHauteur augmentée : 2,89 m\nCertifications ISO & CSC\nCondition Cargo Worthy\nStructure en acier Corten\nVente et location disponibles",
                        "pt" => "Contêiner marítimo High Cube 40 pés usado, perfeito para quem precisa de mais espaço útil.\nAltura aumentada: 2,89 m\nCertificações ISO & CSC\nCondição Cargo Worthy\nEstrutura de aço Corten\nVenda e aluguel disponíveis",
                        "es" => "Contenedor marítimo High Cube 40 pies usado, perfecto para quienes necesitan más espacio útil.\nAltura aumentada: 2,89 m\nCertificaciones ISO y CSC\nCondición Cargo Worthy\nEstructura de acero Corten\nVenta y alquiler disponibles"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-1-1-300x300.png",
                        "/assets/uploads/2025/11/2-1-1-300x300.png",
                        "/assets/uploads/2025/11/3-300x300.png",
                        "/assets/uploads/2025/11/4-300x300.png",
                        "/assets/uploads/2025/11/5-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11833",
                    "name" => [
                        "it" => "Contenitore High Cube Open Side (HCOS) da 20 piedi",
                        "en" => "20ft High Cube Open Side (HCOS) Container",
                        "fr" => "Conteneur High Cube Open Side (HCOS) 20 pieds",
                        "pt" => "Contêiner High Cube Open Side (HCOS) 20 pés",
                        "es" => "Contenedor High Cube Open Side (HCOS) 20 pies"
                    ],
                    "price" => "1,350.00",
                    "old_price" => "1,900.00",
                    "sku" => "3276611833",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-high-cube-open-side-hcos-da-20-piedi/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059508-300x300.jpg",
                        "/assets/uploads/2025/11/1000059507-300x300.jpg",
                        "/assets/uploads/2025/11/1000059509-300x300.jpg",
                        "/assets/uploads/2025/11/1000059512-300x300.jpg",
                        "/assets/uploads/2025/11/1000059511-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10480",
                    "name" => [
                        "it" => "Contenitore Marittimo 10 Piedi",
                        "en" => "10ft Shipping Container",
                        "fr" => "Conteneur Maritime 10 Pieds",
                        "pt" => "Contêiner Marítimo 10 Pés",
                        "es" => "Contenedor Marítimo 10 Pies"
                    ],
                    "price" => "795.79",
                    "old_price" => "1,136.85",
                    "sku" => "3276610480",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-10-piedi/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Il contenitore marittimo da 10 piedi IICL6 è la soluzione perfetta per chi cerca uno spazio di stoccaggio professionale, compatto e affidabile. Realizzato in acciaio corten ad alta resistenza e rifinito in bianco elegante, è pronto per l'uso immediato in ambienti industriali, commerciali o privati.\nStruttura in acciaio corten ad alta resistenza\nStandard di qualità IICL6 – prestazioni eccellenti\nCapacità interna: ca. 16 m³ | Carico massimo: 10.000 kg\nColore bianco moderno (RAL 9010)\nIdeale per attrezzature, materiali o progetti modulari",
                        "en" => "The IICL6 10ft shipping container is the perfect solution for those looking for a professional, compact and reliable storage space. Made of high-strength corten steel and finished in elegant white, it is ready for immediate use in industrial, commercial or private environments.\nHigh-strength corten steel structure\nIICL6 quality standard – excellent performance\nInternal capacity: approx. 16 m³ | Maximum load: 10,000 kg\nModern white color (RAL 9010)\nIdeal for equipment, materials or modular projects",
                        "fr" => "Le conteneur maritime 10 pieds IICL6 est la solution parfaite pour ceux qui recherchent un espace de stockage professionnel, compact et fiable. Fabriqué en acier corten haute résistance et fini en blanc élégant, il est prêt à l'emploi immédiat dans des environnements industriels, commerciaux ou privés.\nStructure en acier corten haute résistance\nNorme de qualité IICL6 – performances excellentes\nCapacité intérieure : env. 16 m³ | Charge maximale : 10 000 kg\nCouleur blanc moderne (RAL 9010)\nIdéal pour équipements, matériaux ou projets modulaires",
                        "pt" => "O contêiner marítimo 10 pés IICL6 é a solução perfeita para quem procura um espaço de armazenamento profissional, compacto e confiável. Feito de aço corten de alta resistência e acabamento em branco elegante, está pronto para uso imediato em ambientes industriais, comerciais ou privados.\nEstrutura de aço corten de alta resistência\nPadrão de qualidade IICL6 – excelente desempenho\nCapacidade interna: aprox. 16 m³ | Carga máxima: 10.000 kg\nCor branca moderna (RAL 9010)\nIdeal para equipamentos, materiais ou projetos modulares",
                        "es" => "El contenedor marítimo 10 pies IICL6 es la solución perfecta para quienes buscan un espacio de almacenamiento profesional, compacto y fiable. Fabricado en acero corten de alta resistencia y acabado en blanco elegante, está listo para uso inmediato en entornos industriales, comerciales o privados.\nEstructura de acero corten de alta resistencia\nEstándar de calidad IICL6 – rendimiento excelente\nCapacidad interior: aprox. 16 m³ | Carga máxima: 10.000 kg\nColor blanco moderno (RAL 9010)\nIdeal para equipos, materiales o proyectos modulares"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-300x300.jpeg",
                        "/assets/uploads/2025/11/1-3-300x300.jpeg",
                        "/assets/uploads/2025/11/2-3-300x300.jpeg",
                        "/assets/uploads/2025/11/3-2-300x300.jpeg",
                        "/assets/uploads/2025/11/4-2-300x300.jpeg",
                        "/assets/uploads/2025/11/5-2-300x300.jpeg",
                        "/assets/uploads/2025/11/7-3-300x300.jpeg",
                        "/assets/uploads/2025/11/8-2-300x300.jpeg",
                        "/assets/uploads/2025/11/9-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10481",
                    "name" => [
                        "it" => "Contenitore Marittimo 10 Piedi con Doppia Porta",
                        "en" => "10ft Double Door Shipping Container",
                        "fr" => "Conteneur Maritime 10 Pieds Double Porte",
                        "pt" => "Contêiner Marítimo 10 Pés com Porta Dupla",
                        "es" => "Contenedor Marítimo 10 Pies con Doble Puerta"
                    ],
                    "price" => "720.72",
                    "old_price" => "1,029.60",
                    "sku" => "3276610481",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-10-piedi-con-doppia-porta/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Il contenitore marittimo da 10 piedi con doppia porta è la soluzione ideale per chi cerca versatilità, resistenza e accesso pratico. In condizioni “after one trip”, combina design compatto e massima funzionalità.\nDimensioni: 2,99 x 2,44 x 2,59 m\nColore blu RAL 5010\nStruttura robusta in acciaio corten\nDoppio accesso – porte apribili su entrambi i lati\nPerfetto per stoccaggio, officine mobili o moduli personalizzati",
                        "en" => "The 10ft double door shipping container is the ideal solution for those seeking versatility, durability and practical access. In “after one trip” condition, it combines compact design and maximum functionality.\nDimensions: 2.99 x 2.44 x 2.59 m\nBlue RAL 5010 color\nRobust corten steel structure\nDouble access – doors opening on both sides\nPerfect for storage, mobile workshops or custom modules",
                        "fr" => "Le conteneur maritime 10 pieds double porte est la solution idéale pour ceux qui recherchent polyvalence, résistance et accès pratique. En condition “after one trip”, il allie design compact et fonctionnalité maximale.\nDimensions : 2,99 x 2,44 x 2,59 m\nCouleur bleu RAL 5010\nStructure robuste en acier corten\nDouble accès – portes ouvrantes des deux côtés\nParfait pour stockage, ateliers mobiles ou modules personnalisés",
                        "pt" => "O contêiner marítimo de 10 pés com porta dupla é a solução ideal para quem busca versatilidade, resistência e acesso prático. Em condição “after one trip”, combina design compacto e máxima funcionalidade.\nDimensões: 2,99 x 2,44 x 2,59 m\nCor azul RAL 5010\nEstrutura robusta em aço corten\nDuplo acesso – portas abrindo em ambos os lados\nPerfeito para armazenamento, oficinas móveis ou módulos personalizados",
                        "es" => "El contenedor marítimo de 10 pies con doble puerta es la solución ideal para quienes buscan versatilidad, resistencia y acceso práctico. En condición “after one trip”, combina diseño compacto y máxima funcionalidad.\nDimensiones: 2,99 x 2,44 x 2,59 m\nColor azul RAL 5010\nEstructura robusta de acero corten\nDoble acceso – puertas abatibles en ambos lados\nPerfecto para almacenamiento, talleres móviles o módulos personalizados"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-6-300x300.jpeg",
                        "/assets/uploads/2025/11/1-6-300x300.jpeg",
                        "/assets/uploads/2025/11/3-5-300x300.jpeg",
                        "/assets/uploads/2025/11/4-5-300x300.jpeg",
                        "/assets/uploads/2025/11/5-5-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10482",
                    "name" => [
                        "it" => "Contenitore Marittimo 10 Piedi Nuovo",
                        "en" => "New 10ft Shipping Container",
                        "fr" => "Conteneur Maritime 10 Pieds Neuf",
                        "pt" => "Contêiner Marítimo 10 Pés Novo",
                        "es" => "Contenedor Marítimo 10 Pies Nuevo"
                    ],
                    "price" => "760.76",
                    "old_price" => "1,086.80",
                    "sku" => "3276610482",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-10-piedi-nuovo/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Questo contenitore marittimo da 10 piedi è la soluzione perfetta per chi cerca uno spazio di stoccaggio compatto, robusto e professionale. La sua struttura nuova, realizzata in acciaio corten ad alta resistenza, garantisce una protezione ottimale contro intemperie e urti. Facile da movimentare e personalizzare, è perfetto per ambienti aziendali, agricoli o industriali dove lo spazio è limitato ma la sicurezza è fondamentale.\nContenitore nuovo, usato una sola volta\nStruttura solida in acciaio corten\nVolume interno di circa 16 m³\nIdeale per stoccaggio sicuro in spazi ristretti\nPronto per consegna immediata",
                        "en" => "This 10ft shipping container is the perfect solution for those looking for a compact, robust and professional storage space. Its new structure, made of high-strength corten steel, guarantees optimal protection against weather and impacts. Easy to handle and customize, it is perfect for business, agricultural or industrial environments where space is limited but security is essential.\nNew container, used only once\nSolid corten steel structure\nInternal volume of approximately 16 m³\nIdeal for secure storage in tight spaces\nReady for immediate delivery",
                        "fr" => "Ce conteneur maritime de 10 pieds est la solution parfaite pour ceux qui recherchent un espace de stockage compact, robuste et professionnel. Sa structure neuve, en acier corten haute résistance, garantit une protection optimale contre les intempéries et les chocs. Facile à manutentionner et à personnaliser, il est parfait pour les environnements professionnels, agricoles ou industriels où l'espace est limité mais la sécurité essentielle.\nConteneur neuf, utilisé une seule fois\nStructure solide en acier corten\nVolume intérieur d'environ 16 m³\nIdéal pour stockage sécurisé dans espaces restreints\nPrêt pour livraison immédiate",
                        "pt" => "Este contêiner marítimo de 10 pés é a solução perfeita para quem procura um espaço de armazenamento compacto, robusto e profissional. Sua estrutura nova, feita de aço corten de alta resistência, garante proteção ideal contra intempéries e impactos. Fácil de manusear e personalizar, é perfeito para ambientes empresariais, agrícolas ou industriais onde o espaço é limitado, mas a segurança é fundamental.\nContêiner novo, usado apenas uma vez\nEstrutura sólida em aço corten\nVolume interno de aproximadamente 16 m³\nIdeal para armazenamento seguro em espaços apertados\nPronto para entrega imediata",
                        "es" => "Este contenedor marítimo de 10 pies es la solución perfecta para quienes buscan un espacio de almacenamiento compacto, robusto y profesional. Su estructura nueva, fabricada en acero corten de alta resistencia, garantiza una protección óptima contra la intemperie y los impactos. Fácil de manipular y personalizar, es perfecto para entornos empresariales, agrícolas o industriales donde el espacio es limitado pero la seguridad es fundamental.\nContenedor nuevo, usado solo una vez\nEstructura sólida de acero corten\nVolumen interior de aproximadamente 16 m³\nIdeal para almacenamiento seguro en espacios reducidos\nListo para entrega inmediata"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-4-300x300.jpeg",
                        "/assets/uploads/2025/11/2-2-300x300.jpeg",
                        "/assets/uploads/2025/11/3-3-300x300.jpeg",
                        "/assets/uploads/2025/11/4-3-300x300.jpeg",
                        "/assets/uploads/2025/11/5-3-300x300.jpeg",
                        "/assets/uploads/2025/11/6-3-300x300.jpeg",
                        "/assets/uploads/2025/11/7-4-300x300.jpeg",
                        "/assets/uploads/2025/11/8-3-300x300.jpeg",
                        "/assets/uploads/2025/11/9-2-300x300.jpeg",
                        "/assets/uploads/2025/11/10-1-300x300.jpeg",
                        "/assets/uploads/2025/11/11-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11073",
                    "name" => [
                        "it" => "Contenitore Marittimo 10 Piedi STD Usato – Compatto e Resistente",
                        "en" => "Used 10ft STD Shipping Container – Compact and Durable",
                        "fr" => "Conteneur Maritime 10 Pieds STD Occasion – Compact et Résistant",
                        "pt" => "Contêiner Marítimo 10 Pés STD Usado – Compacto e Resistente",
                        "es" => "Contenedor Marítimo 10 Pies STD Usado – Compacto y Resistente"
                    ],
                    "price" => "700.00",
                    "old_price" => null,
                    "sku" => "3276611073",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-10-piedi-std-usato-compatto-e-resistente/",
                    "categories" => ["nao-categorizado"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard usato da 10 piedi, compatto e versatile. Perfetto per stoccaggio personale o piccoli progetti modulari. Robusto, economico e sostenibile.",
                        "en" => "Used 10ft standard shipping container, compact and versatile. Perfect for personal storage or small modular projects. Robust, economical and sustainable.",
                        "fr" => "Conteneur maritime standard usagé 10 pieds, compact et polyvalent. Parfait pour le stockage personnel ou les petits projets modulaires. Robuste, économique et durable.",
                        "pt" => "Contêiner marítimo padrão usado de 10 pés, compacto e versátil. Perfeito para armazenamento pessoal ou pequenos projetos modulares. Robusto, econômico e sustentável.",
                        "es" => "Contenedor marítimo estándar usado de 10 pies, compacto y versátil. Perfecto para almacenamiento personal o pequeños proyectos modulares. Robusto, económico y sostenible."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11065",
                    "name" => [
                        "it" => "Contenitore Marittimo 20 Piedi DD – Doppio Accesso e Versatilità",
                        "en" => "20ft DD Shipping Container – Double Access and Versatility",
                        "fr" => "Conteneur Maritime 20 Pieds DD – Double Accès et Polyvalence",
                        "pt" => "Contêiner Marítimo 20 Pés DD – Duplo Acesso e Versatilidade",
                        "es" => "Contenedor Marítimo 20 Pies DD – Doble Acceso y Versatilidad"
                    ],
                    "price" => "1,150.00",
                    "old_price" => "1,850.00",
                    "sku" => "3276611065",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-piedi-dd-doppio-accesso-e-versatilita/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard Double Door da 20 piedi, progettato per massima accessibilità con porte su entrambe le estremità. Ideale per stoccaggio efficiente, progetti modulari e trasporto.",
                        "en" => "20ft Double Door standard shipping container, designed for maximum accessibility with doors at both ends. Ideal for efficient storage, modular projects and transport.",
                        "fr" => "Conteneur maritime standard Double Door 20 pieds, conçu pour une accessibilité maximale avec des portes aux deux extrémités. Idéal pour stockage efficace, projets modulaires et transport.",
                        "pt" => "Contêiner marítimo padrão Double Door de 20 pés, projetado para máxima acessibilidade com portas em ambas as extremidades. Ideal para armazenamento eficiente, projetos modulares e transporte.",
                        "es" => "Contenedor marítimo estándar Double Door de 20 pies, diseñado para máxima accesibilidad con puertas en ambos extremos. Ideal para almacenamiento eficiente, proyectos modulares y transporte."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-5-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-4-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-3-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11063",
                    "name" => [
                        "it" => "Contenitore Marittimo 20 Piedi HC – Spazio Extra e Resistenza",
                        "en" => "20ft HC Shipping Container – Extra Space and Durability",
                        "fr" => "Conteneur Maritime 20 Pieds HC – Espace Supplémentaire et Résistance",
                        "pt" => "Contêiner Marítimo 20 Pés HC – Espaço Extra e Resistência",
                        "es" => "Contenedor Marítimo 20 Pies HC – Espacio Extra y Resistencia"
                    ],
                    "price" => "907.00",
                    "old_price" => "1,150.00",
                    "sku" => "3276611063",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-piedi-hc-spazio-extra-e-resistenza/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube da 20 piedi, con design robusto e altezza aggiuntiva per stoccaggio voluminoso. Perfetto per progetti modulari o stoccaggio di grande capacità.",
                        "en" => "20ft High Cube shipping container, with robust design and additional height for bulky storage. Perfect for modular projects or high-capacity storage.",
                        "fr" => "Conteneur maritime High Cube 20 pieds, avec design robuste et hauteur supplémentaire pour stockage volumineux. Parfait pour projets modulaires ou stockage grande capacité.",
                        "pt" => "Contêiner marítimo High Cube 20 pés, com design robusto e altura adicional para armazenamento volumoso. Perfeito para projetos modulares ou armazenamento de alta capacidade.",
                        "es" => "Contenedor marítimo High Cube 20 pies, con diseño robusto y altura adicional para almacenamiento voluminoso. Perfecto para proyectos modulares o almacenamiento de gran capacidad."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-0-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11064",
                    "name" => [
                        "it" => "Contenitore Marittimo 20 Piedi OS – Accesso Laterale Totale",
                        "en" => "20ft OS Shipping Container – Full Side Access",
                        "fr" => "Conteneur Maritime 20 Pieds OS – Accès Latéral Total",
                        "pt" => "Contêiner Marítimo 20 Pés OS – Acesso Lateral Total",
                        "es" => "Contenedor Marítimo 20 Pies OS – Acceso Lateral Total"
                    ],
                    "price" => "1,450.00",
                    "old_price" => "1,850.00",
                    "sku" => "3276611064",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-piedi-os-accesso-laterale-totale/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo Open Side da 20 piedi, progettato per un accesso laterale totale e massima versatilità. Ideale per eventi, stoccaggio e progetti modulari.",
                        "en" => "20ft Open Side shipping container, designed for full side access and maximum versatility. Ideal for events, storage and modular projects.",
                        "fr" => "Conteneur maritime Open Side 20 pieds, conçu pour un accès latéral total et une polyvalence maximale. Idéal pour événements, stockage et projets modulaires.",
                        "pt" => "Contêiner marítimo Open Side 20 pés, projetado para acesso lateral total e máxima versatilidade. Ideal para eventos, armazenamento e projetos modulares.",
                        "es" => "Contenedor marítimo Open Side 20 pies, diseñado para acceso lateral total y máxima versatilidad. Ideal para eventos, almacenamiento y proyectos modulares."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-0-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-0-300x300.jpg",
                        "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11066",
                    "name" => [
                        "it" => "Contenitore Marittimo 20 Piedi STD – Versatile e Resistente",
                        "en" => "20ft STD Shipping Container – Versatile and Durable",
                        "fr" => "Conteneur Maritime 20 Pieds STD – Polyvalent et Résistant",
                        "pt" => "Contêiner Marítimo 20 Pés STD – Versátil e Resistente",
                        "es" => "Contenedor Marítimo 20 Pies STD – Versátil y Resistente"
                    ],
                    "price" => "907.00",
                    "old_price" => "1,200.00",
                    "sku" => "3276611066",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-piedi-std-versatile-e-resistente/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard da 20 piedi, realizzato in acciaio CORTEN, ideale per stoccaggio sicuro e trasporto. Versatile, robusto e personalizzabile secondo le tue esigenze.",
                        "en" => "20ft standard shipping container, made of CORTEN steel, ideal for secure storage and transport. Versatile, robust and customizable according to your needs.",
                        "fr" => "Conteneur maritime standard 20 pieds, en acier CORTEN, idéal pour stockage sécurisé et transport. Polyvalent, robuste et personnalisable selon vos besoins.",
                        "pt" => "Contêiner marítimo padrão 20 pés, fabricado em aço CORTEN, ideal para armazenamento seguro e transporte. Versátil, robusto e personalizável de acordo com suas necessidades.",
                        "es" => "Contenedor marítimo estándar 20 pies, fabricado en acero CORTEN, ideal para almacenamiento seguro y transporte. Versátil, robusto y personalizable según sus necesidades."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-6-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-5-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-4-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-3-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Versatile-e-Resistente-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11072",
                    "name" => [
                        "it" => "Contenitore Marittimo 20 Piedi STD Usato – Versatile ed Economico",
                        "en" => "Used 20ft STD Shipping Container – Versatile and Economical",
                        "fr" => "Conteneur Maritime 20 Pieds STD Occasion – Polyvalent et Économique",
                        "pt" => "Contêiner Marítimo 20 Pés STD Usado – Versátil e Econômico",
                        "es" => "Contenedor Marítimo 20 Pies STD Usado – Versátil y Económico"
                    ],
                    "price" => "800.00",
                    "old_price" => "1,000.00",
                    "sku" => "3276611072",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-piedi-std-usato-versatile-ed-economico/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard usato da 20 piedi, resistente ed economico. Ideale per stoccaggio sicuro, progetti modulari e trasporto. Personalizzabile su richiesta.",
                        "en" => "Used 20ft standard shipping container, durable and economical. Ideal for secure storage, modular projects and transport. Customizable on request.",
                        "fr" => "Conteneur maritime standard usagé 20 pieds, résistant et économique. Idéal pour stockage sécurisé, projets modulaires et transport. Personnalisable sur demande.",
                        "pt" => "Contêiner marítimo padrão usado de 20 pés, resistente e econômico. Ideal para armazenamento seguro, projetos modulares e transporte. Personalizável sob consulta.",
                        "es" => "Contenedor marítimo estándar usado de 20 pies, resistente y económico. Ideal para almacenamiento seguro, proyectos modulares y transporte. Personalizable bajo pedido."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10491",
                    "name" => [
                        "it" => "Contenitore marittimo 20’ in acciaio CORTEN",
                        "en" => "20′ CORTEN steel shipping container",
                        "fr" => "Conteneur maritime 20′ en acier CORTEN",
                        "pt" => "Contêiner marítimo 20′ em aço CORTEN",
                        "es" => "Contenedor marítimo 20′ en acero CORTEN"
                    ],
                    "price" => "1,475.00",
                    "old_price" => "2,345.20",
                    "sku" => "3276610491",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-20-in-acciaio-corten/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Contenitore marittimo 20 piedi in acciaio CORTEN disponibile in versione usata o primo viaggio. Certificato CSC, ermetico e dotato di protezione antieffrazione.\nPorte a 270° con doppia anta\nPavimento antiscivolo in legno marino 28 mm\nCertificato CSC valido – conforme ISO\nCappuccio di sicurezza incluso\nAdatto a trasporto, self-storage e trasformazioni",
                        "en" => "20ft shipping container in CORTEN steel available in used or first voyage version. CSC certified, airtight and equipped with anti-theft protection.\n270° opening double doors\n28 mm marine plywood anti-slip floor\nValid CSC certificate – ISO compliant\nSafety lock box included\nSuitable for transport, self-storage and conversions",
                        "fr" => "Conteneur maritime 20 pieds en acier CORTEN disponible en version occasion ou premier voyage. Certifié CSC, étanche et équipé d'une protection antivol.\nPortes doubles à ouverture 270°\nPlancher antidérapant en contreplaqué marin 28 mm\nCertificat CSC valide – conforme ISO\nBoîte de sécurité incluse\nAdapté au transport, self-stockage et transformations",
                        "pt" => "Contêiner marítimo 20 pés em aço CORTEN disponível em versão usada ou primeira viagem. Certificado CSC, hermético e equipado com proteção antifurto.\nPortas duplas com abertura de 270°\nPiso antiderrapante em madeira marinha 28 mm\nCertificado CSC válido – conforme ISO\nCaixa de segurança incluída\nAdequado para transporte, self-storage e transformações",
                        "es" => "Contenedor marítimo 20 pies en acero CORTEN disponible en versión usada o primer viaje. Certificado CSC, hermético y equipado con protección antirrobo.\nPuertas dobles con apertura de 270°\nSuelo antideslizante de madera marina de 28 mm\nCertificado CSC válido – conforme ISO\nCaja de seguridad incluida\nAdecuado para transporte, self-storage y transformaciones"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-17-300x300.jpg",
                        "/assets/uploads/2025/11/2-14-300x300.jpg",
                        "/assets/uploads/2025/11/3-14-300x300.jpg",
                        "/assets/uploads/2025/11/4-14-300x300.jpg",
                        "/assets/uploads/2025/11/5-13-300x300.jpg",
                        "/assets/uploads/2025/11/6-10-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11069",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi HC – Alta Capacità e Versatilità",
                        "en" => "40ft HC Shipping Container – High Capacity and Versatility",
                        "fr" => "Conteneur Maritime 40 Pieds HC – Haute Capacité et Polyvalence",
                        "pt" => "Contêiner Marítimo 40 Pés HC – Alta Capacidade e Versatilidade",
                        "es" => "Contenedor Marítimo 40 Pies HC – Alta Capacidad y Versatilidad"
                    ],
                    "price" => "1,210.00",
                    "old_price" => "1,900.00",
                    "sku" => "3276611069",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-hc-alta-capacita-e-versatilita/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube da 40 piedi, progettato per stoccaggio voluminoso o progetti modulari. Alta capacità, robustezza e sostenibilità per ogni esigenza.",
                        "en" => "40ft High Cube shipping container, designed for bulky storage or modular projects. High capacity, robustness and sustainability for every need.",
                        "fr" => "Conteneur maritime High Cube 40 pieds, conçu pour stockage volumineux ou projets modulaires. Haute capacité, robustesse et durabilité pour chaque besoin.",
                        "pt" => "Contêiner marítimo High Cube 40 pés, projetado para armazenamento volumoso ou projetos modulares. Alta capacidade, robustez e sustentabilidade para cada necessidade.",
                        "es" => "Contenedor marítimo High Cube 40 pies, diseñado para almacenamiento voluminoso o proyectos modulares. Alta capacidad, robustez y sostenibilidad para cada necesidad."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-5-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-5-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-4-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-3-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-0-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Alta-Capacita-e-Versatilita-6-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11067",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi HC DD – Alta Capacità e Doppio Accesso",
                        "en" => "40ft HC DD Shipping Container – High Capacity and Double Access",
                        "fr" => "Conteneur Maritime 40 Pieds HC DD – Haute Capacité et Double Accès",
                        "pt" => "Contêiner Marítimo 40 Pés HC DD – Alta Capacidade e Duplo Acesso",
                        "es" => "Contenedor Marítimo 40 Pies HC DD – Alta Capacidad y Doble Acceso"
                    ],
                    "price" => "1,510.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611067",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-hc-dd-alta-capacita-e-doppio-accesso/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube Double Door da 40 piedi, con doppio accesso e capacità extra. Ideale per progetti di stoccaggio, trasporto e modulari. Versatile e resistente, perfetto per ogni esigenza.",
                        "en" => "40ft High Cube Double Door shipping container, with double access and extra capacity. Ideal for storage, transport and modular projects. Versatile and durable, perfect for every need.",
                        "fr" => "Conteneur maritime High Cube Double Door 40 pieds, avec double accès et capacité supplémentaire. Idéal pour projets de stockage, transport et modulaires. Polyvalent et résistant, parfait pour chaque besoin.",
                        "pt" => "Contêiner marítimo High Cube Double Door 40 pés, com duplo acesso e capacidade extra. Ideal para projetos de armazenamento, transporte e modulares. Versátil e durável, perfeito para cada necessidade.",
                        "es" => "Contenedor marítimo High Cube Double Door 40 pies, con doble acceso y capacidad extra. Ideal para proyectos de almacenamiento, transporte y modulares. Versátil y duradero, perfecto para cada necesidad."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-Alta-Capacita-e-Doppio-Accesso-6-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-6-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-5-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-4-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-3-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11074",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi HC Usato – Alta Capacità e Versatilità",
                        "en" => "Used 40ft HC Shipping Container – High Capacity and Versatility",
                        "fr" => "Conteneur Maritime 40 Pieds HC Occasion – Haute Capacité et Polyvalence",
                        "pt" => "Contêiner Marítimo 40 Pés HC Usado – Alta Capacidade e Versatilidade",
                        "es" => "Contenedor Marítimo 40 Pies HC Usado – Alta Capacidad y Versatilidad"
                    ],
                    "price" => "1,140.00",
                    "old_price" => "1,850.00",
                    "sku" => "3276611074",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-hc-usato-alta-capacita-e-versatilita/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube usato da 40 piedi, perfetto per stoccaggio voluminoso e progetti modulari. Resistente, economico e personalizzabile su richiesta.",
                        "en" => "Used 40ft High Cube shipping container, perfect for bulky storage and modular projects. Durable, economical and customizable on request.",
                        "fr" => "Conteneur maritime High Cube usagé 40 pieds, parfait pour stockage volumineux et projets modulaires. Résistant, économique et personnalisable sur demande.",
                        "pt" => "Contêiner marítimo High Cube usado 40 pés, perfeito para armazenamento volumoso e projetos modulares. Durável, econômico e personalizável sob consulta.",
                        "es" => "Contenedor marítimo High Cube usado 40 pies, perfecto para almacenamiento voluminoso y proyectos modulares. Duradero, económico y personalizable bajo pedido."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/40-hc-d-occasion_5-1024x768-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11068",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi OS – Accesso Laterale Totale e Praticità",
                        "en" => "40ft OS Shipping Container – Full Side Access and Practicality",
                        "fr" => "Conteneur Maritime 40 Pieds OS – Accès Latéral Total et Praticité",
                        "pt" => "Contêiner Marítimo 40 Pés OS – Acesso Lateral Total e Praticidade",
                        "es" => "Contenedor Marítimo 40 Pies OS – Acceso Lateral Total y Practicidad"
                    ],
                    "price" => "1,849.00",
                    "old_price" => "2,500.00",
                    "sku" => "3276611068",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-os-accesso-laterale-totale-e-praticita/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo Open Side da 40 piedi, progettato per accesso laterale totale e massima praticità. Ideale per eventi, stoccaggio e progetti modulari. Personalizzabile secondo le tue esigenze.",
                        "en" => "40ft Open Side shipping container, designed for full side access and maximum practicality. Ideal for events, storage and modular projects. Customizable according to your needs.",
                        "fr" => "Conteneur maritime Open Side 40 pieds, conçu pour un accès latéral total et une praticité maximale. Idéal pour événements, stockage et projets modulaires. Personnalisable selon vos besoins.",
                        "pt" => "Contêiner marítimo Open Side 40 pés, projetado para acesso lateral total e máxima praticidade. Ideal para eventos, armazenamento e projetos modulares. Personalizável de acordo com suas necessidades.",
                        "es" => "Contenedor marítimo Open Side 40 pies, diseñado para acceso lateral total y máxima practicidad. Ideal para eventos, almacenamiento y proyectos modulares. Personalizable según sus necesidades."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-OS-–-Accesso-Laterale-Totale-e-Praticita-2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11070",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi STD – Spazio Ampio e Versatilità",
                        "en" => "40ft STD Shipping Container – Wide Space and Versatility",
                        "fr" => "Conteneur Maritime 40 Pieds STD – Grand Espace et Polyvalence",
                        "pt" => "Contêiner Marítimo 40 Pés STD – Espaço Amplo e Versatilidade",
                        "es" => "Contenedor Marítimo 40 Pies STD – Amplio Espacio y Versatilidad"
                    ],
                    "price" => "1,210.00",
                    "old_price" => "1,860.00",
                    "sku" => "3276611070",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-std-spazio-ampio-e-versatilita/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard da 40 piedi, ideale per stoccaggio e progetti modulari. Ampio, resistente e personalizzabile, perfetto per ogni esigenza.",
                        "en" => "40ft standard shipping container, ideal for storage and modular projects. Spacious, durable and customizable, perfect for every need.",
                        "fr" => "Conteneur maritime standard 40 pieds, idéal pour stockage et projets modulaires. Spacieux, résistant et personnalisable, parfait pour chaque besoin.",
                        "pt" => "Contêiner marítimo padrão 40 pés, ideal para armazenamento e projetos modulares. Espaçoso, durável e personalizável, perfeito para cada necessidade.",
                        "es" => "Contenedor marítimo estándar 40 pies, ideal para almacenamiento y proyectos modulares. Espacioso, duradero y personalizable, perfecto para cada necesidad."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Spazio-Ampio-e-Versatilita-300x291.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11071",
                    "name" => [
                        "it" => "Contenitore Marittimo 40 Piedi STD Usato – Spazioso ed Economico",
                        "en" => "Used 40ft STD Shipping Container – Spacious and Economical",
                        "fr" => "Conteneur Maritime 40 Pieds STD Occasion – Spacieux et Économique",
                        "pt" => "Contêiner Marítimo 40 Pés STD Usado – Espaçoso e Econômico",
                        "es" => "Contenedor Marítimo 40 Pies STD Usado – Espacioso y Económico"
                    ],
                    "price" => "1,150.00",
                    "old_price" => "1,800.00",
                    "sku" => "3276611071",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-40-piedi-std-usato-spazioso-ed-economico/",
                    "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard usato da 40 piedi, resistente e conveniente. Perfetto per stoccaggio sicuro, trasporto e progetti modulari. Personalizzabile su richiesta.",
                        "en" => "Used 40ft standard shipping container, durable and affordable. Perfect for secure storage, transport and modular projects. Customizable on request.",
                        "fr" => "Conteneur maritime standard usagé 40 pieds, résistant et économique. Parfait pour stockage sécurisé, transport et projets modulaires. Personnalisable sur demande.",
                        "pt" => "Contêiner marítimo padrão usado 40 pés, durável e acessível. Perfeito para armazenamento seguro, transporte e projetos modulares. Personalizável sob consulta.",
                        "es" => "Contenedor marítimo estándar usado 40 pies, duradero y asequible. Perfecto para almacenamiento seguro, transporte y proyectos modulares. Personalizable bajo pedido."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-2-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10483",
                    "name" => [
                        "it" => "Contenitore marittimo Dry Van 10 piedi usato",
                        "en" => "Used 10ft Dry Van shipping container",
                        "fr" => "Conteneur maritime Dry Van 10 pieds occasion",
                        "pt" => "Contêiner marítimo Dry Van 10 pés usado",
                        "es" => "Contenedor marítimo Dry Van 10 pies usado"
                    ],
                    "price" => "650.65",
                    "old_price" => "929.50",
                    "sku" => "3276610483",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-dry-van-10-piedi-usato/",
                    "categories" => ["contentores-10-pes"],
                    "short_description" => [
                        "it" => "Hai bisogno di una soluzione di stoccaggio mobile, sicura e salvaspazio? Il nostro contenitore Dry Van da 10 piedi usato offre praticità, resistenza e flessibilità. Grazie alla certificazione CSC, può essere utilizzato anche nel trasporto intermodale. La sua struttura compatta lo rende ideale per cantieri, officine o ambienti industriali con spazio limitato.\nPavimento in legno multistrato da 28 mm\nTenuta stagna contro vento e acqua\nCertificazione CSC per trasporto via terra, mare o ferrovia\nSerratura di sicurezza integrata\nFacile da movimentare con carrelli elevatori",
                        "en" => "Do you need a mobile, safe and space-saving storage solution? Our used 10ft Dry Van container offers practicality, durability and flexibility. Thanks to CSC certification, it can also be used for intermodal transport. Its compact structure makes it ideal for construction sites, workshops or industrial environments with limited space.\n28 mm plywood floor\nWind and water tight seal\nCSC certification for transport by land, sea or rail\nIntegrated security lock\nEasy to handle with forklifts",
                        "fr" => "Besoin d'une solution de stockage mobile, sûre et peu encombrante ? Notre conteneur Dry Van 10 pieds d'occasion offre praticité, résistance et flexibilité. Grâce à la certification CSC, il peut également être utilisé pour le transport intermodal. Sa structure compacte le rend idéal pour les chantiers, ateliers ou environnements industriels avec espace limité.\nPlancher en contreplaqué 28 mm\nÉtanchéité au vent et à l'eau\nCertification CSC pour transport terrestre, maritime ou ferroviaire\nSerrure de sécurité intégrée\nFacile à manutentionner avec chariots élévateurs",
                        "pt" => "Você precisa de uma solução de armazenamento móvel, segura e que economize espaço? Nosso contêiner Dry Van de 10 pés usado oferece praticidade, resistência e flexibilidade. Graças à certificação CSC, também pode ser usado para transporte intermodal. Sua estrutura compacta o torna ideal para canteiros de obras, oficinas ou ambientes industriais com espaço limitado.\nPiso de compensado de 28 mm\nVedação contra vento e água\nCertificação CSC para transporte terrestre, marítimo ou ferroviário\nFechadura de segurança integrada\nFácil de manusear com empilhadeiras",
                        "es" => "Necesita una solución de almacenamiento móvil, segura y que ahorre espacio? Nuestro contenedor Dry Van de 10 pies usado ofrece practicidad, resistencia y flexibilidad. Gracias a la certificación CSC, también se puede utilizar para transporte intermodal. Su estructura compacta lo hace ideal para obras, talleres o entornos industriales con espacio limitado.\nSuelo de madera contrachapada de 28 mm\nSellado hermético al viento y al agua\nCertificación CSC para transporte por tierra, mar o ferrocarril\nCerradura de seguridad integrada\nFácil de manejar con carretillas elevadoras"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-5-300x300.webp",
                        "/assets/uploads/2025/11/2-5-300x300.webp",
                        "/assets/uploads/2025/11/2-11-1-300x300.webp",
                        "/assets/uploads/2025/11/3-10-1-300x300.webp",
                        "/assets/uploads/2025/11/4-9-1-300x300.webp",
                        "/assets/uploads/2025/11/5-8-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10497",
                    "name" => [
                        "it" => "Contenitore Marittimo High Cube 40′ con 4 Porte Laterali – Usato",
                        "en" => "Used 40′ High Cube Shipping Container with 4 Side Doors",
                        "fr" => "Conteneur Maritime High Cube 40′ avec 4 Portes Latérales – Occasion",
                        "pt" => "Contêiner Marítimo High Cube 40′ com 4 Portas Laterais – Usado",
                        "es" => "Contenedor Marítimo High Cube 40′ con 4 Puertas Laterales – Usado"
                    ],
                    "price" => "2,510.00",
                    "old_price" => "3,875.30",
                    "sku" => "3276610497",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-marittimo-high-cube-40-con-4-porte-laterali-usato/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore marittimo High Cube 40' usato, dotato di 4 porte laterali per accesso indipendente alla merce. Soluzione ideale per logistica intensiva, stoccaggio flessibile o adattamenti tecnici.\nStruttura in acciaio Corten\nPorte con chiusura di sicurezza a 4 barre\nFinitura moderna grigio ocra\nAccesso facilitato su più lati",
                        "en" => "Used 40' High Cube shipping container, equipped with 4 side doors for independent access to goods. Ideal solution for intensive logistics, flexible storage or technical adaptations.\nCorten steel structure\nDoors with 4-bar security locking\nModern ochre gray finish\nEasy access on multiple sides",
                        "fr" => "Conteneur maritime High Cube 40' d'occasion, équipé de 4 portes latérales pour un accès indépendant aux marchandises. Solution idéale pour logistique intensive, stockage flexible ou adaptations techniques.\nStructure en acier Corten\nPortes avec verrouillage sécurité 4 barres\nFinition moderne gris ocre\nAccès facilité sur plusieurs côtés",
                        "pt" => "Contêiner marítimo High Cube 40' usado, equipado com 4 portas laterais para acesso independente às mercadorias. Solução ideal para logística intensiva, armazenamento flexível ou adaptações técnicas.\nEstrutura de aço Corten\nPortas com fechamento de segurança de 4 barras\nAcabamento moderno cinza ocre\nAcesso facilitado em vários lados",
                        "es" => "Contenedor marítimo High Cube 40' usado, equipado con 4 puertas laterales para acceso independiente a las mercancías. Solución ideal para logística intensiva, almacenamiento flexible o adaptaciones técnicas.\nEstructura de acero Corten\nPuertas con cierre de seguridad de 4 barras\nAcabado moderno gris ocre\nAcceso facilitado en varios lados"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/8-10-300x300.jpeg",
                        "/assets/uploads/2025/11/1-13-300x300.jpeg",
                        "/assets/uploads/2025/11/2-13-300x300.jpeg",
                        "/assets/uploads/2025/11/3-12-300x300.jpeg",
                        "/assets/uploads/2025/11/4-12-300x300.jpeg",
                        "/assets/uploads/2025/11/5-12-300x300.jpeg",
                        "/assets/uploads/2025/11/6-10-300x300.jpeg",
                        "/assets/uploads/2025/11/7-11-300x300.jpeg",
                        "/assets/uploads/2025/11/9-9-300x300.jpeg",
                        "/assets/uploads/2025/11/10-7-300x300.jpeg",
                        "/assets/uploads/2025/11/12-5-300x300.jpeg",
                        "/assets/uploads/2025/11/13-4-300x300.jpeg",
                        "/assets/uploads/2025/11/14-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11485",
                    "name" => [
                        "it" => "Contenitore modulare 40 piedi – Ufficio/Mensa con finestre a bovindo",
                        "en" => "40ft modular container – Office/Canteen with bay windows",
                        "fr" => "Conteneur modulaire 40 pieds – Bureau/Cantine avec fenêtres en saillie",
                        "pt" => "Contêiner modular 40 pés – Escritório/Cantina com janelas salientes",
                        "es" => "Contenedor modular 40 pies – Oficina/Cantina con ventanales"
                    ],
                    "price" => "6,900.00",
                    "old_price" => "7,500.00",
                    "sku" => "3276611485",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-modulare-40-piedi-ufficio-mensa-con-finestre-a-bovindo/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/S4-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_eac25cc329554a4a8928dc322afe868b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_db11ae4ce20f4e7bb4bf7a4ac91c49f97Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_38b5bf9d168c422b9a2aeea279ebb5267Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_7f261ee4729546169716806f51a821d37Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_86324eb3d60c4d7e9b4b8600f1b170fc7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8b49d18cc8624905b3ace1657321db187Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_fd728f8c14484c80b024a764ef00d65d7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_7cc1a32d24ef4e71b49fe0f8089500707Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_f41dc0f443c6439484f72f24c06af0237Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_32d038a4d167494faa9887e5c3e1830c7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_7a1ce6cdea4a440bbd4e4cc857c39aa07Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11157",
                    "name" => [
                        "it" => "Contenitore Modulare Ampliato Duo 29m² – Spazio Multifunzionale",
                        "en" => "Duo 29m² Expanded Modular Container – Multifunctional Space",
                        "fr" => "Conteneur Modulaire Agrandi Duo 29m² – Espace Multifonctionnel",
                        "pt" => "Contêiner Modular Ampliado Duo 29m² – Espaço Multifuncional",
                        "es" => "Contenedor Modular Ampliado Duo 29m² – Espacio Multifuncional"
                    ],
                    "price" => "4,500.00",
                    "old_price" => "5,000.00",
                    "sku" => "3276611157",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-modulare-ampliato-duo-29m%c2%b2-spazio-multifunzionale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore Modulare Ampliato Duo 29m² offre uno spazio versatile e moderno. Isolato e pronto all'uso, è ideale per uffici o ambienti multifunzionali.",
                        "en" => "The Duo 29m² Expanded Modular Container offers versatile and modern space. Insulated and ready to use, it is ideal for offices or multifunctional environments.",
                        "fr" => "Le Conteneur Modulaire Agrandi Duo 29m² offre un espace polyvalent et moderne. Isolé et prêt à l'emploi, il est idéal pour les bureaux ou les environnements multifonctionnels.",
                        "pt" => "O Contêiner Modular Ampliado Duo 29m² oferece espaço versátil e moderno. Isolado e pronto para uso, é ideal para escritórios ou ambientes multifuncionais.",
                        "es" => "El Contenedor Modular Ampliado Duo 29m² ofrece un espacio versátil y moderno. Aislado y listo para usar, es ideal para oficinas o entornos multifuncionales."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Modulare-Ampliato-Duo-29m²-Spazio-Multifunzionale-0-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Modulare-Ampliato-Duo-29m²-Spazio-Multifunzionale-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10498",
                    "name" => [
                        "it" => "Contenitore Open Top 40′ – Usato Categoria B",
                        "en" => "40′ Open Top Container – Used Category B",
                        "fr" => "Conteneur Open Top 40′ – Occasion Catégorie B",
                        "pt" => "Contêiner Open Top 40′ – Usado Categoria B",
                        "es" => "Contenedor Open Top 40′ – Usado Categoría B"
                    ],
                    "price" => "1,910.00",
                    "old_price" => "2,509.95",
                    "sku" => "3276610498",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-open-top-40-usato-categoria-b/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore Open Top 40' usato (Categoria B), ideale per carico dall'alto con copertura in telo. Struttura robusta in acciaio Corten, certificato CSC, con pavimento in legno multistrato.\nAccesso superiore per carichi speciali\nTelo resistente alle intemperie\nPavimento da 28 mm\nErmetico a vento e acqua\nPortata utile fino a 25.480 kg",
                        "en" => "Used 40' Open Top container (Category B), ideal for top loading with tarpaulin cover. Robust Corten steel structure, CSC certified, with plywood floor.\nTop access for special loads\nWeather-resistant tarpaulin\n28 mm floor\nWind and water tight\nPayload up to 25,480 kg",
                        "fr" => "Conteneur Open Top 40' d'occasion (Catégorie B), idéal pour chargement par le haut avec bâche. Structure robuste en acier Corten, certifié CSC, avec plancher en contreplaqué.\nAccès supérieur pour charges spéciales\nBâche résistante aux intempéries\nPlancher 28 mm\nÉtanche au vent et à l'eau\nCharge utile jusqu'à 25 480 kg",
                        "pt" => "Contêiner Open Top 40' usado (Categoria B), ideal para carregamento superior com cobertura de lona. Estrutura robusta de aço Corten, certificado CSC, com piso de compensado.\nAcesso superior para cargas especiais\nLona resistente às intempéries\nPiso de 28 mm\nHermético ao vento e água\nCapacidade de carga útil até 25.480 kg",
                        "es" => "Contenedor Open Top 40' usado (Categoría B), ideal para carga superior con cubierta de lona. Estructura robusta de acero Corten, certificado CSC, con suelo de madera contrachapada.\nAcceso superior para cargas especiales\nLona resistente a la intemperie\nSuelo de 28 mm\nHermético al viento y al agua\nCapacidad de carga útil hasta 25.480 kg"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-13-1-300x300.webp",
                        "/assets/uploads/2025/11/2-15-1-300x300.webp",
                        "/assets/uploads/2025/11/3-14-1-300x300.webp",
                        "/assets/uploads/2025/11/4-13-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11364",
                    "name" => [
                        "it" => "Contenitore per barre da 20 piedi",
                        "en" => "20ft Bar container",
                        "fr" => "Conteneur pour barres 20 pieds",
                        "pt" => "Contêiner para barras 20 pés",
                        "es" => "Contenedor para barras 20 pies"
                    ],
                    "price" => "1,849.00",
                    "old_price" => "2,500.00",
                    "sku" => "3276611364",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-per-barre-da-20-piedi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni esterne: L 6058 mm x P 2438 mm x A 2591 mm\n&nbsp;\nDimensioni interne: L 5898 mm x P 2352 mm x A 2390 mm\n&nbsp;\nDimensioni della porta: L 2338 mm x P 2280 mm\n&nbsp;\nVolume: 33,1 m³\n&nbsp;\nPallet europei: 11\nPeso a vuoto: 2200 kg\n&nbsp;\nCarico utile: 28280 kg\n&nbsp;\nPeso totale: 30480 kg\n&nbsp;\nCodice tipo ISO: 22G1\n&nbsp;\nChiave del gruppo ISO: 22 GP\n&nbsp;",
                        "en" => "External dimensions: L 6058 mm x W 2438 mm x H 2591 mm\n&nbsp;\nInternal dimensions: L 5898 mm x W 2352 mm x H 2390 mm\n&nbsp;\nDoor dimensions: L 2338 mm x H 2280 mm\n&nbsp;\nVolume: 33.1 m³\n&nbsp;\nEuro pallets: 11\nTare weight: 2200 kg\n&nbsp;\nPayload: 28280 kg\n&nbsp;\nGross weight: 30480 kg\n&nbsp;\nISO type code: 22G1\n&nbsp;\nISO group key: 22 GP\n&nbsp;",
                        "fr" => "Dimensions extérieures : L 6058 mm x l 2438 mm x H 2591 mm\n&nbsp;\nDimensions intérieures : L 5898 mm x l 2352 mm x H 2390 mm\n&nbsp;\nDimensions de la porte : L 2338 mm x H 2280 mm\n&nbsp;\nVolume : 33,1 m³\n&nbsp;\nPalettes européennes : 11\nPoids à vide : 2200 kg\n&nbsp;\nCharge utile : 28280 kg\n&nbsp;\nPoids brut : 30480 kg\n&nbsp;\nCode type ISO : 22G1\n&nbsp;\nClé du groupe ISO : 22 GP\n&nbsp;",
                        "pt" => "Dimensões externas: C 6058 mm x L 2438 mm x A 2591 mm\n&nbsp;\nDimensões internas: C 5898 mm x L 2352 mm x A 2390 mm\n&nbsp;\nDimensões da porta: C 2338 mm x A 2280 mm\n&nbsp;\nVolume: 33,1 m³\n&nbsp;\nPaletes europeias: 11\nPeso vazio: 2200 kg\n&nbsp;\nCarga útil: 28280 kg\n&nbsp;\nPeso bruto: 30480 kg\n&nbsp;\nCódigo de tipo ISO: 22G1\n&nbsp;\nChave do grupo ISO: 22 GP\n&nbsp;",
                        "es" => "Dimensiones exteriores: L 6058 mm x A 2438 mm x Al 2591 mm\n&nbsp;\nDimensiones interiores: L 5898 mm x A 2352 mm x Al 2390 mm\n&nbsp;\nDimensiones de la puerta: L 2338 mm x Al 2280 mm\n&nbsp;\nVolumen: 33,1 m³\n&nbsp;\nPalés europeos: 11\nPeso en vacío: 2200 kg\n&nbsp;\nCarga útil: 28280 kg\n&nbsp;\nPeso bruto: 30480 kg\n&nbsp;\nCódigo de tipo ISO: 22G1\n&nbsp;\nClave del grupo ISO: 22 GP\n&nbsp;"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Barcontainer-2-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/Barcontainer-4-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/Barcontainer-4-768x576-2-300x300.jpg",
                        "/assets/uploads/2025/11/Barcontainer-5-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/Barcontainer-6-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/Barcontainer-3-768x576-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11075",
                    "name" => [
                        "it" => "Contenitore Refrigerato 20 Piedi STD – Precisione e Sicurezza",
                        "en" => "20ft STD Refrigerated Container – Precision and Safety",
                        "fr" => "Conteneur Réfrigéré 20 Pieds STD – Précision et Sécurité",
                        "pt" => "Contêiner Refrigerado 20 Pés STD – Precisão e Segurança",
                        "es" => "Contenedor Refrigerado 20 Pies STD – Precisión y Seguridad"
                    ],
                    "price" => "1,700.00",
                    "old_price" => null,
                    "sku" => "3276611075",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-refrigerato-20-piedi-std-precisione-e-sicurezza/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore refrigerato da 20 piedi nuovo, progettato per trasporto e stoccaggio sicuro di prodotti sensibili alla temperatura. Garanzia di 2 anni inclusa.",
                        "en" => "New 20ft refrigerated container, designed for safe transport and storage of temperature-sensitive products. 2-year warranty included.",
                        "fr" => "Conteneur réfrigéré 20 pieds neuf, conçu pour le transport et le stockage sécurisé de produits sensibles à la température. Garantie 2 ans incluse.",
                        "pt" => "Contêiner refrigerado 20 pés novo, projetado para transporte e armazenamento seguro de produtos sensíveis à temperatura. Garantia de 2 anos incluída.",
                        "es" => "Contenedor refrigerado 20 pies nuevo, diseñado para transporte y almacenamiento seguro de productos sensibles a la temperatura. Garantía de 2 años incluida."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-20-Piedi-STD-Precisione-e-Sicurezza-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-20-Piedi-STD-Precisione-e-Sicurezza-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11076",
                    "name" => [
                        "it" => "Contenitore Refrigerato 20′ STD – Usato Soluzione Ideale per Stoccaggio",
                        "en" => "Used 20′ STD Refrigerated Container – Ideal Storage Solution",
                        "fr" => "Conteneur Réfrigéré 20′ STD – Occasion Solution Idéale de Stockage",
                        "pt" => "Contêiner Refrigerado 20′ STD – Usado Solução Ideal de Armazenamento",
                        "es" => "Contenedor Refrigerado 20′ STD – Usado Solución Ideal de Almacenamiento"
                    ],
                    "price" => "1,200.00",
                    "old_price" => null,
                    "sku" => "3276611076",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-refrigerato-20%e2%80%b2-std-usato-soluzione-ideale-per-stoccaggio/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore refrigerato da 20 piedi usato, progettato per stoccaggio e trasporto sicuro di prodotti sensibili alla temperatura. Coperto da una garanzia di 2 anni.",
                        "en" => "Used 20ft refrigerated container, designed for safe storage and transport of temperature-sensitive products. Covered by a 2-year warranty.",
                        "fr" => "Conteneur réfrigéré 20 pieds d\'occasion, conçu pour le stockage et le transport sécurisé de produits sensibles à la température. Couvert par une garantie de 2 ans.",
                        "pt" => "Contêiner refrigerado 20 pés usado, projetado para armazenamento e transporte seguro de produtos sensíveis à temperatura. Coberto por uma garantia de 2 anos.",
                        "es" => "Contenedor refrigerado 20 pies usado, diseñado para almacenamiento y transporte seguro de productos sensibles a la temperatura. Cubierto por una garantía de 2 años."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-20′-STD-–-Usato-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11077",
                    "name" => [
                        "it" => "Contenitore Refrigerato 40 Piedi HC – Alta Capacità e Prestazioni",
                        "en" => "40ft HC Refrigerated Container – High Capacity and Performance",
                        "fr" => "Conteneur Réfrigéré 40 Pieds HC – Haute Capacité et Performance",
                        "pt" => "Contêiner Refrigerado 40 Pés HC – Alta Capacidade e Desempenho",
                        "es" => "Contenedor Refrigerado 40 Pies HC – Alta Capacidad y Rendimiento"
                    ],
                    "price" => "5,100.00",
                    "old_price" => null,
                    "sku" => "3276611077",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-refrigerato-40-piedi-hc-alta-capacita-e-prestazioni/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore refrigerato High Cube da 40 piedi nuovo, perfetto per grandi volumi di merci sensibili alla temperatura. Include garanzia di 2 anni e personalizzazioni disponibili.",
                        "en" => "New 40ft High Cube refrigerated container, perfect for large volumes of temperature-sensitive goods. Includes 2-year warranty and available customizations.",
                        "fr" => "Conteneur réfrigéré High Cube 40 pieds neuf, parfait pour grands volumes de marchandises sensibles à la température. Inclut garantie 2 ans et personnalisations disponibles.",
                        "pt" => "Contêiner refrigerado High Cube 40 pés novo, perfeito para grandes volumes de mercadorias sensíveis à temperatura. Inclui garantia de 2 anos e personalizações disponíveis.",
                        "es" => "Contenedor refrigerado High Cube 40 pies nuevo, perfecto para grandes volúmenes de mercancías sensibles a la temperatura. Incluye garantía de 2 años y personalizaciones disponibles."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-–-Alta-Capacita-e-Prestazioni-5-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11078",
                    "name" => [
                        "it" => "Contenitore Refrigerato 40 Piedi HC Usato – Grande Capacità e Affidabilità",
                        "en" => "Used 40ft HC Refrigerated Container – Great Capacity and Reliability",
                        "fr" => "Conteneur Réfrigéré 40 Pieds HC Occasion – Grande Capacité et Fiabilité",
                        "pt" => "Contêiner Refrigerado 40 Pés HC Usado – Grande Capacidade e Confiabilidade",
                        "es" => "Contenedor Refrigerado 40 Pies HC Usado – Gran Capacidad y Fiabilidad"
                    ],
                    "price" => "4,500.00",
                    "old_price" => null,
                    "sku" => "3276611078",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-refrigerato-40-piedi-hc-usato-grande-capacita-e-affidabilita/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Contenitore refrigerato High Cube da 40 piedi usato, progettato per grandi volumi di merci sensibili alla temperatura. Include garanzia di 2 anni e personalizzazioni disponibili.",
                        "en" => "Used 40ft High Cube refrigerated container, designed for large volumes of temperature-sensitive goods. Includes 2-year warranty and available customizations.",
                        "fr" => "Conteneur réfrigéré High Cube 40 pieds d'occasion, conçu pour grands volumes de marchandises sensibles à la température. Inclut garantie 2 ans et personnalisations disponibles.",
                        "pt" => "Contêiner refrigerado High Cube 40 pés usado, projetado para grandes volumes de mercadorias sensíveis à temperatura. Inclui garantia de 2 anos e personalizações disponíveis.",
                        "es" => "Contenedor refrigerado High Cube 40 pies usado, diseñado para grandes volúmenes de mercancías sensibles a la temperatura. Incluye garantía de 2 años y personalizaciones disponibles."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-1-300x300.jpg",
                        "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11174",
                    "name" => [
                        "it" => "Contenitore sanitario – WC + doccia + serbatoio",
                        "en" => "Sanitary container – Toilet + shower + tank",
                        "fr" => "Conteneur sanitaire – WC + douche + réservoir",
                        "pt" => "Contêiner sanitário – WC + chuveiro + tanque",
                        "es" => "Contenedor sanitario – WC + ducha + tanque"
                    ],
                    "price" => "1,800.00",
                    "old_price" => "2,500.00",
                    "sku" => "3276611174",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-wc-doccia-serbatoio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Collega semplicemente elettricità, acqua e acque reflue: subito pronto per l'uso\nCabina WC doppia 3×2 metri con serbatoio acque nere con wc e doccia\n– 2 finestre\n– Profilo sandwich da 80 mm termicamente isolato per una bassa perdita di energia\n– Porta esterna in lamiera d'acciaio Hörmann zincata\n– Orinatoi\n– Impianto elettrico completo secondo le direttive CE\n– Prese 230V\n– 2 plafoniere\n– Collegamento 11KW/400V\n– Rivestimento del pavimento in PVC – robusto e veloce da pulire\n– radiatore elettrico a parete\n– Serbatoio delle acque grigie\n– Scale\nNoleggio possibile a tariffe mensili basse. Possiamo anche produrre in qualsiasi momento in altre dimensioni e colori secondo le vostre specifiche.",
                        "en" => "Simply connect electricity, water and wastewater: immediately ready for use\nDouble toilet cabin 3×2 meters with black water tank with toilet and shower\n– 2 windows\n– 80 mm thermally insulated sandwich panel for low energy loss\n– Galvanized Hörmann steel sheet external door\n– Urinals\n– Complete electrical system according to CE directives\n– 230V sockets\n– 2 ceiling lights\n– 11KW/400V connection\n– PVC floor covering – durable and quick to clean\n– Electric wall radiator\n– Grey water tank\n– Stairs\nRental possible at low monthly rates. We can also produce at any time in other dimensions and colors according to your specifications.",
                        "fr" => "Connectez simplement électricité, eau et eaux usées : immédiatement prêt à l'emploi\nCabine WC double 3×2 mètres avec réservoir d'eaux noires avec WC et douche\n– 2 fenêtres\n– Panneau sandwich 80 mm thermiquement isolé pour faible perte d'énergie\n– Porte extérieure en tôle d'acier Hörmann galvanisée\n– Urinoirs\n– Installation électrique complète selon directives CE\n– Prises 230V\n– 2 plafonniers\n– Connexion 11KW/400V\n– Revêtement de sol PVC – robuste et rapide à nettoyer\n– Radiateur électrique mural\n– Réservoir d'eaux grises\n– Escaliers\nLocation possible à tarifs mensuels bas. Nous pouvons également produire à tout moment en d'autres dimensions et couleurs selon vos spécifications.",
                        "pt" => "Basta conectar eletricidade, água e águas residuais: imediatamente pronto para uso\nCabine dupla WC 3×2 metros com tanque de águas negras com WC e chuveiro\n– 2 janelas\n– Painel sanduíche de 80 mm termicamente isolado para baixa perda de energia\n– Porta externa em chapa de aço Hörmann galvanizada\n– Mictórios\n– Sistema elétrico completo conforme diretivas CE\n– Tomadas 230V\n– 2 luminárias de teto\n– Conexão 11KW/400V\n– Revestimento de piso em PVC – durável e rápido de limpar\n– Radiador elétrico de parede\n– Tanque de águas cinzas\n– Escadas\nAluguel possível com tarifas mensais baixas. Também podemos produzir a qualquer momento em outras dimensões e cores de acordo com suas especificações.",
                        "es" => "Simplemente conecte electricidad, agua y aguas residuales: inmediatamente listo para usar\nCabina WC doble 3×2 metros con tanque de aguas negras con WC y ducha\n– 2 ventanas\n– Panel sándwich de 80 mm térmicamente aislado para baja pérdida de energía\n– Puerta exterior de chapa de acero Hörmann galvanizada\n– Urinarios\n– Sistema eléctrico completo según directivas CE\n– Tomas 230V\n– 2 plafones\n– Conexión 11KW/400V\n– Revestimiento de suelo de PVC – duradero y rápido de limpiar\n– Radiador eléctrico de pared\n– Tanque de aguas grises\n– Escaleras\nAlquiler posible con tarifas mensuales bajas. También podemos producir en cualquier momento en otras dimensiones y colores según sus especificaciones."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/319_0026321769-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321762-1-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321763-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321764-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321765-768x886-1-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321766-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321767-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321768-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321772-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321774-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321778-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321779-300x300.jpg",
                        "/assets/uploads/2025/11/319_0026321761-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "10795",
                    "name" => [
                        "it" => "Contenitore Sanitario 2×2 m con Doccia e Serbatoio",
                        "en" => "2×2 m Sanitary Container with Shower and Tank",
                        "fr" => "Conteneur Sanitaire 2×2 m avec Douche et Réservoir",
                        "pt" => "Contêiner Sanitário 2×2 m com Chuveiro e Tanque",
                        "es" => "Contenedor Sanitario 2×2 m con Ducha y Tanque"
                    ],
                    "price" => "1,916.91",
                    "old_price" => "2,738.45",
                    "sku" => "3276610795",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-2x2-m-con-doccia-e-serbatoio/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Il modulo sanitario compatto 2×2 m offre tutto ciò che serve: doccia separata, lavabo, acqua calda e serbatoio reflui, perfetto per ogni situazione temporanea.\nScaldacqua istantaneo da 11 kW\nRadiatore elettrico a parete\nPavimento in PVC antiscivolo e ventilazione naturale",
                        "en" => "The compact 2×2 m sanitary module offers everything you need: separate shower, washbasin, hot water and wastewater tank, perfect for any temporary situation.\n11 kW instantaneous water heater\nElectric wall radiator\nNon-slip PVC floor and natural ventilation",
                        "fr" => "Le module sanitaire compact 2×2 m offre tout ce dont vous avez besoin : douche séparée, lavabo, eau chaude et réservoir d'eaux usées, parfait pour toute situation temporaire.\nChauffe-eau instantané 11 kW\nRadiateur électrique mural\nSol PVC antidérapant et ventilation naturelle",
                        "pt" => "O módulo sanitário compacto 2×2 m oferece tudo que você precisa: chuveiro separado, lavatório, água quente e tanque de águas residuais, perfeito para qualquer situação temporária.\nAquecedor de água instantâneo de 11 kW\nRadiador elétrico de parede\nPiso de PVC antiderrapante e ventilação natural",
                        "es" => "El módulo sanitario compacto 2×2 m ofrece todo lo necesario: ducha separada, lavabo, agua caliente y tanque de aguas residuales, perfecto para cualquier situación temporal.\nCalentador de agua instantáneo de 11 kW\nRadiador eléctrico de pared\nSuelo de PVC antideslizante y ventilación natural"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-9-1-300x300.webp",
                        "/assets/uploads/2025/11/1-7-1-300x300.webp",
                        "/assets/uploads/2025/11/3-8-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11530",
                    "name" => [
                        "it" => "Contenitore sanitario doppio 2,4 x 1,5 m – WC + orinatoio separati",
                        "en" => "Double sanitary container 2.4 x 1.5 m – Separate toilet + urinal",
                        "fr" => "Conteneur sanitaire double 2,4 x 1,5 m – WC + urinoir séparés",
                        "pt" => "Contêiner sanitário duplo 2,4 x 1,5 m – WC + mictório separados",
                        "es" => "Contenedor sanitario doble 2,4 x 1,5 m – WC + urinario separados"
                    ],
                    "price" => "1,020.00",
                    "old_price" => "1,180.00",
                    "sku" => "3276611530",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-doppio-24-x-15-m-wc-orinatoio-separati/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_9f53f0a0b36943ebba130262166efe547Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_54204c65f79144c59c5e19051f51a1b87Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8061ab2fdd9e48aa81b11bc26461b1ef7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_aba2a76856bc4c83bbd95d4cfdeb0bed7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_867be485470c400e9529fc0503efd1c27Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_cc248a6a8b4a409ebde0558a50c8b9777Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_4f707aa55c764f678d62ce02e57e139e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_dca632245bab4d949cd9fef5c7f775747Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c60705c3a3da4a75a9dff9c36bef53537Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b19ee4568f5c4a3d9e5504c33a7876497Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_626788619495419fb807b56c310dd3327Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10796",
                    "name" => [
                        "it" => "Contenitore Sanitario Doppio 3×2 m",
                        "en" => "Double Sanitary Container 3×2 m",
                        "fr" => "Conteneur Sanitaire Double 3×2 m",
                        "pt" => "Contêiner Sanitário Duplo 3×2 m",
                        "es" => "Contenedor Sanitario Doble 3×2 m"
                    ],
                    "price" => "1,741.74",
                    "old_price" => "2,488.20",
                    "sku" => "3276610796",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-doppio-3x2-m/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Il modulo sanitario doppio 3×2 m è una soluzione igienica compatta e autonoma, con 2 WC separati, lavabi, acqua calda e pavimento antiscivolo, perfetto per qualsiasi ambiente professionale o temporaneo.\nIlluminazione LED + luce naturale\nBoiler per acqua calda ai lavabi\nStruttura robusta e pronta all'uso",
                        "en" => "The double sanitary module 3×2 m is a compact and self-contained hygienic solution, with 2 separate toilets, washbasins, hot water and non-slip floor, perfect for any professional or temporary environment.\nLED lighting + natural light\nHot water boiler for washbasins\nRobust structure and ready to use",
                        "fr" => "Le module sanitaire double 3×2 m est une solution hygiénique compacte et autonome, avec 2 WC séparés, lavabos, eau chaude et sol antidérapant, parfait pour tout environnement professionnel ou temporaire.\nÉclairage LED + lumière naturelle\nChauffe-eau pour lavabos\nStructure robuste et prête à l'emploi",
                        "pt" => "O módulo sanitário duplo 3×2 m é uma solução higiênica compacta e autônoma, com 2 WC separados, lavatórios, água quente e piso antiderrapante, perfeito para qualquer ambiente profissional ou temporário.\nIluminação LED + luz natural\nAquecedor de água para lavatórios\nEstrutura robusta e pronta para uso",
                        "es" => "El módulo sanitario doble 3×2 m es una solución higiénica compacta y autónoma, con 2 WC separados, lavabos, agua caliente y suelo antideslizante, perfecto para cualquier entorno profesional o temporal.\nIluminación LED + luz natural\nCalentador de agua para lavabos\nEstructura robusta y lista para usar"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-5-1-300x300.webp",
                        "/assets/uploads/2025/11/2-7-1-300x300.webp",
                        "/assets/uploads/2025/11/3-6-1-300x300.webp",
                        "/assets/uploads/2025/11/4-6-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11305",
                    "name" => [
                        "it" => "CONTENITORE SANITARIO WC + DOCCIA COLLEGABILE GRIGIO",
                        "en" => "GRAY CONNECTABLE SANITARY CONTAINER TOILET + SHOWER",
                        "fr" => "CONTENEUR SANITAIRE WC + DOUCHE CONNECTABLE GRIS",
                        "pt" => "CONTÊINER SANITÁRIO WC + CHUVEIRO CONECTÁVEL CINZA",
                        "es" => "CONTENEDOR SANITARIO WC + DUCHA CONECTABLE GRIS"
                    ],
                    "price" => "1,860.00",
                    "old_price" => "2,500.00",
                    "sku" => "3276611305",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-wc-doccia-collegabile-grigio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il blocco sanitario modulare consente di realizzare installazioni sanitarie in tempi brevissimi, ad un prezzo molto competitivo rispetto ad una soluzione costruttiva.\nCaratteristiche tecniche\nDIMENSIONI\nAltezza esterna: 240 cm\nAltezza interna: 220 cm\nLarghezza: 220 cm\nProfondità: 120 cm\nSTRUTTURA\nDescrizione: Acciaio zincato e laccato.\nColore: Grigio RAL7016\nSpessore: 2 mm\nSoffitto: altezza 240 mm\nFunzionamento: 4 prese nel tetto per ganci di sollevamento\nPARETI E TETTO\nMateriale: pannelli sandwich\nIsolamento: schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore del tetto: 40 mm\nCopertura tetto: Lamiera di acciaio zincato con greche\nColore pannello: Grigio RAL 7016\nTERRA\nStruttura: pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nCARPENTERIA\nAnta: 2 ante in alluminio, dimensioni 85 x 190 cm\nEstrattore d'aria: 1 in ogni cabina\nSANITARIO\n1 lavabo in ceramica da 35 cm con rubinetto acqua fredda e specchio\n1 WC integrato con cassetta completamente in ceramica\n1 piatto doccia in ceramica\nIngresso e uscita acqua sulla parete posteriore – NF\nELETTRICITÀ: 220 V\nIlluminazione: 1 plafoniera LED in ogni cabina\nPannello: 1 pannello comprensivo di interdifferenziale e interruttori automatici\nInterruttori: 1 in ogni cabina\nUna scatola di giunzione esterna\nScaldabagno non incluso (può essere installato a un costo aggiuntivo).",
                        "en" => "The modular sanitary block allows sanitary installations to be created in a very short time, at a very competitive price compared to a construction solution.\nTechnical features\nDIMENSIONS\nExternal height: 240 cm\nInternal height: 220 cm\nWidth: 220 cm\nDepth: 120 cm\nSTRUCTURE\nDescription: Galvanized and lacquered steel.\nColor: Gray RAL7016\nThickness: 2 mm\nCeiling: height 240 mm\nOperation: 4 roof sockets for lifting hooks\nWALLS AND ROOF\nMaterial: sandwich panels\nInsulation: rigid polyurethane foam\nWall thickness: 50 mm\nRoof thickness: 40 mm\nRoof covering: Corrugated galvanized steel sheet\nPanel color: Gray RAL 7016\nFLOOR\nStructure: fiber cement panels\nThickness: 16 mm\nCovering: PVC\nCARPENTRY\nDoor: 2 aluminum doors, dimensions 85 x 190 cm\nAir extractor: 1 in each cabin\nSANITARY\n1 ceramic washbasin 35 cm with cold water tap and mirror\n1 integrated toilet with fully ceramic cistern\n1 ceramic shower tray\nWater inlet and outlet on the rear wall – NF\nELECTRICITY: 220 V\nLighting: 1 LED ceiling light in each cabin\nPanel: 1 panel including main switch and circuit breakers\nSwitches: 1 in each cabin\nAn external junction box\nWater heater not included (can be installed at an additional cost).",
                        "fr" => "Le bloc sanitaire modulaire permet de réaliser des installations sanitaires en très peu de temps, à un prix très compétitif par rapport à une solution constructive.\nCaractéristiques techniques\nDIMENSIONS\nHauteur extérieure : 240 cm\nHauteur intérieure : 220 cm\nLargeur : 220 cm\nProfondeur : 120 cm\nSTRUCTURE\nDescription : Acier galvanisé et laqué.\nCouleur : Gris RAL7016\nÉpaisseur : 2 mm\nPlafond : hauteur 240 mm\nFonctionnement : 4 prises en toit pour crochets de levage\nMURS ET TOIT\nMatériau : panneaux sandwich\nIsolation : mousse de polyuréthane rigide\nÉpaisseur du mur : 50 mm\nÉpaisseur du toit : 40 mm\nCouverture toit : Tôle d'acier galvanisé ondulée\nCouleur panneau : Gris RAL 7016\nSOL\nStructure : panneaux fibrociment\nÉpaisseur : 16 mm\nRevêtement : PVC\nMENUISERIE\nPorte : 2 portes aluminium, dimensions 85 x 190 cm\nExtracteur d'air : 1 dans chaque cabine\nSANITAIRE\n1 lavabo céramique 35 cm avec robinet eau froide et miroir\n1 WC intégré avec réservoir entièrement céramique\n1 receveur de douche céramique\nArrivée et sortie d'eau sur le mur arrière – NF\nÉLECTRICITÉ : 220 V\nÉclairage : 1 plafonnier LED dans chaque cabine\nTableau : 1 tableau comprenant interrupteur différentiel et disjoncteurs\nInterrupteurs : 1 dans chaque cabine\nUne boîte de jonction externe\nChauffe-eau non inclus (peut être installé moyennant un coût supplémentaire).",
                        "pt" => "O bloco sanitário modular permite criar instalações sanitárias em muito pouco tempo, a um preço muito competitivo em comparação com uma solução construtiva.\nCaracterísticas técnicas\nDIMENSÕES\nAltura externa: 240 cm\nAltura interna: 220 cm\nLargura: 220 cm\nProfundidade: 120 cm\nESTRUTURA\nDescrição: Aço galvanizado e laqueado.\nCor: Cinza RAL7016\nEspessura: 2 mm\nTeto: altura 240 mm\nFuncionamento: 4 tomadas no teto para ganchos de elevação\nPAREDES E TELHADO\nMaterial: painéis sanduíche\nIsolamento: espuma rígida de poliuretano\nEspessura da parede: 50 mm\nEspessura do telhado: 40 mm\nCobertura do telhado: Chapa de aço galvanizado ondulada\nCor do painel: Cinza RAL 7016\nPISO\nEstrutura: painéis de fibrocimento\nEspessura: 16 mm\nRevestimento: PVC\nMARCENARIA\nPorta: 2 portas de alumínio, dimensões 85 x 190 cm\nExtrator de ar: 1 em cada cabine\nSANITÁRIO\n1 lavatório cerâmico 35 cm com torneira de água fria e espelho\n1 WC integrado com cisterna totalmente cerâmica\n1 base de chuveiro cerâmica\nEntrada e saída de água na parede traseira – NF\nELETRICIDADE: 220 V\nIluminação: 1 luminária de teto LED em cada cabine\nPainel: 1 painel incluindo disjuntor diferencial e disjuntores\nInterruptores: 1 em cada cabine\nUma caixa de junção externa\nAquecedor de água não incluído (pode ser instalado com custo adicional).",
                        "es" => "El bloque sanitario modular permite realizar instalaciones sanitarias en muy poco tiempo, a un precio muy competitivo en comparación con una solución constructiva.\nCaracterísticas técnicas\nDIMENSIONES\nAltura exterior: 240 cm\nAltura interior: 220 cm\nAncho: 220 cm\nProfundidad: 120 cm\nESTRUCTURA\nDescripción: Acero galvanizado y laqueado.\nColor: Gris RAL7016\nEspesor: 2 mm\nTecho: altura 240 mm\nFuncionamiento: 4 tomas en techo para ganchos de elevación\nPAREDES Y TECHO\nMaterial: paneles sándwich\nAislamiento: espuma rígida de poliuretano\nEspesor de pared: 50 mm\nEspesor del techo: 40 mm\nCubierta del techo: Chapa de acero galvanizado ondulada\nColor del panel: Gris RAL 7016\nSUELO\nEstructura: paneles de fibrocemento\nEspesor: 16 mm\nRevestimiento: PVC\nCARPINTERÍA\nPuerta: 2 puertas de aluminio, dimensiones 85 x 190 cm\nExtractor de aire: 1 en cada cabina\nSANITARIO\n1 lavabo cerámico 35 cm con grifo de agua fría y espejo\n1 WC integrado con cisterna totalmente cerámica\n1 plato de ducha cerámico\nEntrada y salida de agua en pared trasera – NF\nELECTRICIDAD: 220 V\nIluminación: 1 plafón LED en cada cabina\nPanel: 1 panel que incluye interruptor diferencial y disyuntores\nInterruptores: 1 en cada cabina\nUna caja de conexión externa\nCalentador de agua no incluido (se puede instalar con costo adicional)."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_0ce91f2a-cc18-489e-97e3-060870ce4879-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_ac272a97-9f8c-4de1-b382-0577c77c83d9-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_b59f4ad0-2170-4fbd-b8ab-b8e683f68d2e-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_1f8091b4-30be-4507-b36e-e1fe7143be19-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_49f92360-0cd4-406d-8247-6565c86405b0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11564",
                    "name" => [
                        "it" => "Contenitore sanitario/spogliatoio 6×2,9",
                        "en" => "Sanitary/changing room container 6×2.9",
                        "fr" => "Conteneur sanitaire/vestiaire 6×2,9",
                        "pt" => "Contêiner sanitário/vestiário 6×2,9",
                        "es" => "Contenedor sanitario/vestuario 6×2,9"
                    ],
                    "price" => "4,399.00",
                    "old_price" => "5,000.00",
                    "sku" => "3276611564",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sanitario-spogliatoio-629/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_322a334d53aa4155b8289792234d580b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_8478039370814021aead0312a67cf9f07Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ea37cffaf8fb4cd6b08c9d700ee131ae7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_fff4e03768a245fb8bf44105e6c37e6f7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_1fa7f82dbf294cf08ec8ca207744f86b7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_29d0d2d32bd644df99378360da5609fc7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_116b5dffbb294f649915e8370ec232467Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_e7d463929f814347b34e65c9617c15987Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_1d610f9a0b174e56a399e95f797fa51c7Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "10700",
                    "name" => [
                        "it" => "Contenitore Snack-BOX 20' DRY Privilege",
                        "en" => "20' DRY Privilege Snack-BOX Container",
                        "fr" => "Conteneur Snack-BOX 20' DRY Privilege",
                        "pt" => "Contentor Snack-BOX 20' DRY Privilege",
                        "es" => "Contenedor Snack-BOX 20' DRY Privilege"
                    ],
                    "price" => "2,252.25",
                    "old_price" => "3,217.50",
                    "sku" => "3276610700",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-snack-box-20-dry-privilege/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Snack-BOX 20' DRY Privilege – Chiosco gastronomico top\nContainer 20 piedi primo viaggio\nIsolamento completo e finiture in legno\nPavimento in PVC + impianto elettrico\nAnta frontale sollevabile 1,5 m\nArea tecnica integrata\nVerniciatura personalizzata",
                        "en" => "Snack-BOX 20' DRY Privilege – Top food kiosk\nFirst trip 20 ft container\nComplete insulation and wooden finishes\nPVC flooring + electrical system\n1.5 m liftable front door\nIntegrated technical area\nCustom painting",
                        "fr" => "Snack-BOX 20' DRY Privilege – Kiosque gastronomique haut de gamme\nConteneur 20 pieds premier voyage\nIsolation complète et finitions en bois\nSol PVC + installation électrique\nPorte avant relevable 1,5 m\nZone technique intégrée\nPeinture personnalisée",
                        "pt" => "Snack-BOX 20' DRY Privilege – Quiosque gastronómico top\nContentor 20 pés primeira viagem\nIsolamento completo e acabamentos em madeira\nPiso em PVC + instalação elétrica\nPorta frontal elevável 1,5 m\nÁrea técnica integrada\nPintura personalizada",
                        "es" => "Snack-BOX 20' DRY Privilege – Quiosco gastronómico superior\nContenedor 20 pies primer viaje\nAislamiento completo y acabados en madera\nSuelo de PVC + instalación eléctrica\nPuerta frontal elevable 1,5 m\nÁrea técnica integrada\nPintura personalizada"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-31-300x300.jpeg",
                        "/assets/uploads/2025/11/1-31-300x300.jpeg",
                        "/assets/uploads/2025/11/3-30-300x300.jpeg",
                        "/assets/uploads/2025/11/4-30-300x300.jpeg",
                        "/assets/uploads/2025/11/5-28-300x300.jpeg",
                        "/assets/uploads/2025/11/6-22-300x300.jpeg",
                        "/assets/uploads/2025/11/7-18-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11425",
                    "name" => [
                        "it" => "Contenitore sociale attrezzato di 21 m² – WC, cucina e spogliatoio",
                        "en" => "21 m² Equipped Social Container – Toilet, Kitchen and Changing Room",
                        "fr" => "Conteneur social équipé de 21 m² – WC, cuisine et vestiaire",
                        "pt" => "Contentor social equipado de 21 m² – WC, cozinha e vestiário",
                        "es" => "Contenedor social equipado de 21 m² – WC, cocina y vestuario"
                    ],
                    "price" => "5,499.00",
                    "old_price" => "6,300.00",
                    "sku" => "3276611425",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sociale-attrezzato-di-21-m%c2%b2-wc-cucina-e-spogliatoio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_9eb454b725b64988b2755ea1848e281e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_19801d54760c45afa6a825655cdae0547Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_5db0e901ea894b16a4f0bf615e8d908e7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_c257c338b64a49d9937a7f556d36a0d37Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a08be2647f9e43928ab6677832a2ad797Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_eab966588cc94f6ba3284603e92136df7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_b43d241fc3724506b2a81ce4d9fe6dd27Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11426",
                    "name" => [
                        "it" => "Contenitore sociale di 21 m² – WC e spogliatoio",
                        "en" => "21 m² Social Container – Toilet and Changing Room",
                        "fr" => "Conteneur social de 21 m² – WC et vestiaire",
                        "pt" => "Contentor social de 21 m² – WC e vestiário",
                        "es" => "Contenedor social de 21 m² – WC y vestuario"
                    ],
                    "price" => "5,699.00",
                    "old_price" => "6,300.00",
                    "sku" => "3276611426",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-sociale-di-21-m%c2%b2-wc-e-spogliatoio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a1ef6f_99a415ff8dca46fea3b7986c34e034e77Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_ab8c1fc2b6ee4e53af93d5ecbc874d497Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_04f0106d8e7f45e69d079aec54f2c3bd7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_727bd2b58ff340b0b0661d1a151f968c7Emv2-300x300.jpg",
                        "/assets/uploads/2025/11/a1ef6f_a371772a534149c7a15e997402e790767Emv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10489",
                    "name" => [
                        "it" => "Contenitore Standard 20 piedi – Usato certificato CSC",
                        "en" => "20 ft Standard Container – Used CSC Certified",
                        "fr" => "Conteneur Standard 20 pieds – Occasion certifié CSC",
                        "pt" => "Contentor Padrão 20 pés – Usado certificado CSC",
                        "es" => "Contenedor Estándar 20 pies – Usado certificado CSC"
                    ],
                    "price" => "1,210.00",
                    "old_price" => "1,823.25",
                    "sku" => "3276610489",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-standard-20-piedi-usato-certificato-csc/",
                    "categories" => ["contentores-20-pes"],
                    "short_description" => [
                        "it" => "Il contenitore standard da 20 piedi usato è la soluzione ideale per trasporto intermodale e stoccaggio. Certificato CSC, offre massima resistenza e versatilità.\nStruttura solida e resistente\nPavimento in legno marino trattato\nCertificazioni ISO e CSC\nErmetico a vento e acqua (WWT)\nOmologato per uso internazionale",
                        "en" => "The used 20 ft standard container is the ideal solution for intermodal transport and storage. CSC certified, offers maximum strength and versatility.\nSolid and resistant structure\nTreated marine wooden floor\nISO and CSC certifications\nWind and water tight (WWT)\nApproved for international use",
                        "fr" => "Le conteneur standard 20 pieds d'occasion est la solution idéale pour le transport intermodal et le stockage. Certifié CSC, il offre une résistance et une polyvalence maximales.\nStructure solide et résistante\nPlancher en bois marin traité\nCertifications ISO et CSC\nÉtanche au vent et à l'eau (WWT)\nHomologué pour usage international",
                        "pt" => "O contentor padrão de 20 pés usado é a solução ideal para transporte intermodal e armazenamento. Certificado CSC, oferece máxima resistência e versatilidade.\nEstrutura sólida e resistente\nPiso em madeira marítima tratada\nCertificações ISO e CSC\nHermético ao vento e água (WWT)\nHomologado para uso internacional",
                        "es" => "El contenedor estándar de 20 pies usado es la solución ideal para transporte intermodal y almacenamiento. Certificado CSC, ofrece máxima resistencia y versatilidad.\nEstructura sólida y resistente\nSuelo de madera marina tratada\nCertificaciones ISO y CSC\nHermético al viento y agua (WWT)\nHomologado para uso internacional"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-3-300x300.png",
                        "/assets/uploads/2025/11/2-3-300x300.png",
                        "/assets/uploads/2025/11/3-2-300x300.png",
                        "/assets/uploads/2025/11/4-2-300x300.png",
                        "/assets/uploads/2025/11/5-2-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10495",
                    "name" => [
                        "it" => "Contenitore standard 40 piedi – Usato certificato CSC",
                        "en" => "40 ft Standard Container – Used CSC Certified",
                        "fr" => "Conteneur standard 40 pieds – Occasion certifié CSC",
                        "pt" => "Contentor padrão 40 pés – Usado certificado CSC",
                        "es" => "Contenedor estándar 40 pies – Usado certificado CSC"
                    ],
                    "price" => "2,099.00",
                    "old_price" => "3,045.90",
                    "sku" => "3276610495",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-standard-40-piedi-usato-certificato-csc/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Contenitore marittimo standard 40 piedi usato, robusto e certificato per trasporto e stoccaggio.\nCertificato ISO & CSC\nCondizione Cargo Worthy\nTenuta stagna (Wind & Water Tight)\nPavimento in legno marinato\nVendita e noleggio disponibili",
                        "en" => "Used 40 ft standard shipping container, robust and certified for transport and storage.\nISO & CSC certified\nCargo Worthy condition\nWind & Water Tight\nMarine treated wooden floor\nSale and rental available",
                        "fr" => "Conteneur maritime standard 40 pieds d'occasion, robuste et certifié pour le transport et le stockage.\nCertifié ISO & CSC\nÉtat Cargo Worthy\nÉtanche (Wind & Water Tight)\nPlancher en bois mariné\nVente et location disponibles",
                        "pt" => "Contentor marítimo padrão 40 pés usado, robusto e certificado para transporte e armazenamento.\nCertificado ISO & CSC\nCondição Cargo Worthy\nEstanque (Wind & Water Tight)\nPiso em madeira tratada\nVenda e aluguer disponíveis",
                        "es" => "Contenedor marítimo estándar 40 pies usado, robusto y certificado para transporte y almacenamiento.\nCertificado ISO & CSC\nCondición Cargo Worthy\nHermético (Wind & Water Tight)\nSuelo de madera tratada\nVenta y alquiler disponibles"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-2-300x300.png",
                        "/assets/uploads/2025/11/2-2-300x300.png",
                        "/assets/uploads/2025/11/3-1-300x300.png",
                        "/assets/uploads/2025/11/4-1-300x300.png",
                        "/assets/uploads/2025/11/5-1-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10474",
                    "name" => [
                        "it" => "Contenitore Super Frigorifero Doppia Zona 20 Piedi",
                        "en" => "20 ft Dual Zone Super Refrigerated Container",
                        "fr" => "Conteneur Super Frigorifique Double Zone 20 Pieds",
                        "pt" => "Contentor Super Frigorífico Zona Dupla 20 Pés",
                        "es" => "Contenedor Super Frigorífico Doble Zona 20 Pies"
                    ],
                    "price" => "3,799.00",
                    "old_price" => "4,505.50",
                    "sku" => "3276610474",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-super-frigorifero-doppia-zona-20-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Massima versatilità per il tuo business con il contenitore super frigorifero doppia zona da 20 piedi. Grazie ai suoi due compartimenti indipendenti, offre temperature differenziate fino a -60°C e +5°C, perfette per la logistica di prodotti surgelati e freschi.\nDoppia zona indipendente: -60°C e +5°C\nIdeale per alimenti, farmaci e surgelati\nIsolamento ad alte prestazioni\nRefrigerazione precisa e sicura\nProgettato per uso intensivo professionale",
                        "en" => "Maximum versatility for your business with the 20 ft dual zone super refrigerated container. Thanks to its two independent compartments, it offers differentiated temperatures up to -60°C and +5°C, perfect for the logistics of frozen and fresh products.\nIndependent dual zone: -60°C and +5°C\nIdeal for food, pharmaceuticals and frozen products\nHigh-performance insulation\nPrecise and safe refrigeration\nDesigned for intensive professional use",
                        "fr" => "Polyvalence maximale pour votre entreprise avec le conteneur super frigorifique double zone 20 pieds. Grâce à ses deux compartiments indépendants, il offre des températures différenciées jusqu'à -60°C et +5°C, parfaites pour la logistique de produits surgelés et frais.\nDouble zone indépendante : -60°C et +5°C\nIdéal pour l'alimentation, les produits pharmaceutiques et surgelés\nIsolation haute performance\nRéfrigération précise et sûre\nConçu pour un usage professionnel intensif",
                        "pt" => "Versatilidade máxima para o seu negócio com o contentor super frigorífico zona dupla de 20 pés. Graças aos seus dois compartimentos independentes, oferece temperaturas diferenciadas até -60°C e +5°C, perfeitas para a logística de produtos congelados e frescos.\nZona dupla independente: -60°C e +5°C\nIdeal para alimentos, produtos farmacêuticos e congelados\nIsolamento de alto desempenho\nRefrigeração precisa e segura\nProjetado para uso profissional intensivo",
                        "es" => "Máxima versatilidad para tu negocio con el contenedor super frigorífico doble zona de 20 pies. Gracias a sus dos compartimentos independientes, ofrece temperaturas diferenciadas hasta -60°C y +5°C, perfectas para la logística de productos congelados y frescos.\nDoble zona independiente: -60°C y +5°C\nIdeal para alimentos, productos farmacéuticos y congelados\nAislamiento de alto rendimiento\nRefrigeración precisa y segura\nDiseñado para uso profesional intensivo"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-3-300x300.webp",
                        "/assets/uploads/2025/11/2-3-300x300.webp",
                        "/assets/uploads/2025/11/3-3-300x300.webp",
                        "/assets/uploads/2025/11/4-300x300.jpg",
                        "/assets/uploads/2025/11/5-300x300.jpg",
                        "/assets/uploads/2025/11/6-1-300x300.webp",
                        "/assets/uploads/2025/11/7-1-300x300.webp",
                        "/assets/uploads/2025/11/8-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10696",
                    "name" => [
                        "it" => "Contenitore Ufficio 20 Piedi con Vetrata Laterale",
                        "en" => "20 ft Office Container with Side Window",
                        "fr" => "Conteneur Bureau 20 Pieds avec Vitrage Latéral",
                        "pt" => "Contentor Escritório 20 Pés com Envidraçado Lateral",
                        "es" => "Contenedor Oficina 20 Pies con Ventanal Lateral"
                    ],
                    "price" => "2,312.31",
                    "old_price" => "3,303.30",
                    "sku" => "3276610696",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-20-piedi-con-vetrata-laterale/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Contenitore Ufficio 20 piedi con vetrata di 4,5 m.\nStruttura robusta e modulare\nImpianto elettrico completo\nClimatizzazione inclusa\nInterni luminosi e pronti all'uso\nFacile trasporto e installazione",
                        "en" => "20 ft Office Container with 4.5 m window.\nRobust and modular structure\nComplete electrical system\nAir conditioning included\nBright interiors ready to use\nEasy transport and installation",
                        "fr" => "Conteneur Bureau 20 pieds avec vitrage de 4,5 m.\nStructure robuste et modulaire\nInstallation électrique complète\nClimatisation incluse\nIntérieurs lumineux prêts à l'emploi\nTransport et installation faciles",
                        "pt" => "Contentor Escritório 20 pés com envidraçado de 4,5 m.\nEstrutura robusta e modular\nInstalação elétrica completa\nClimatização incluída\nInteriores luminosos prontos a usar\nFácil transporte e instalação",
                        "es" => "Contenedor Oficina 20 pies con ventanal de 4,5 m.\nEstructura robusta y modular\nInstalación eléctrica completa\nClimatización incluida\nInteriores luminosos listos para usar\nFácil transporte e instalación"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-40-300x300.jpeg",
                        "/assets/uploads/2025/11/2-40-300x300.jpeg",
                        "/assets/uploads/2025/11/3-38-300x300.jpeg",
                        "/assets/uploads/2025/11/4-38-300x300.jpeg",
                        "/assets/uploads/2025/11/5-34-300x300.jpeg",
                        "/assets/uploads/2025/11/6-28-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10627",
                    "name" => [
                        "it" => "Contenitore Ufficio 20' Completamente Attrezzato",
                        "en" => "20' Fully Equipped Office Container",
                        "fr" => "Conteneur Bureau 20' Complètement Équipé",
                        "pt" => "Contentor Escritório 20' Completamente Equipado",
                        "es" => "Contenedor Oficina 20' Completamente Equipado"
                    ],
                    "price" => "2,962.96",
                    "old_price" => "4,232.80",
                    "sku" => "3276610627",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-20-completamente-attrezzato/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Contenitore ufficio 20' pronto all'uso, comodo e robusto.\nIsolamento termico/acustico in lana minerale\nFinestre con vetri isolanti e tapparelle\nImpianto elettrico completo + riscaldamento\nFinitura interna ed esterna di alta qualità\nInstallazione e trasporto rapidi",
                        "en" => "20' office container ready to use, comfortable and robust.\nMineral wool thermal/acoustic insulation\nWindows with insulating glass and shutters\nComplete electrical system + heating\nHigh quality internal and external finish\nQuick installation and transport",
                        "fr" => "Conteneur bureau 20' prêt à l'emploi, confortable et robuste.\nIsolation thermique/acoustique en laine minérale\nFenêtres avec double vitrage et volets\nInstallation électrique complète + chauffage\nFinition intérieure et extérieure de haute qualité\nInstallation et transport rapides",
                        "pt" => "Contentor escritório 20' pronto a usar, confortável e robusto.\nIsolamento térmico/acústico em lã mineral\nJanelas com vidro isolante e persianas\nInstalação elétrica completa + aquecimento\nAcabamento interior e exterior de alta qualidade\nInstalação e transporte rápidos",
                        "es" => "Contenedor oficina 20' listo para usar, cómodo y robusto.\nAislamiento térmico/acústico en lana mineral\nVentanas con vidrio aislante y persianas\nInstalación eléctrica completa + calefacción\nAcabado interior y exterior de alta calidad\nInstalación y transporte rápidos"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-41-300x300.jpeg",
                        "/assets/uploads/2025/11/2-41-300x300.jpeg",
                        "/assets/uploads/2025/11/3-39-300x300.jpeg",
                        "/assets/uploads/2025/11/4-39-300x300.jpeg",
                        "/assets/uploads/2025/11/5-35-300x300.jpeg",
                        "/assets/uploads/2025/11/6-29-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10628",
                    "name" => [
                        "it" => "Contenitore Ufficio 6×3 m",
                        "en" => "6×3 m Office Container",
                        "fr" => "Conteneur Bureau 6×3 m",
                        "pt" => "Contentor Escritório 6×3 m",
                        "es" => "Contenedor Oficina 6×3 m"
                    ],
                    "price" => "1,921.92",
                    "old_price" => "2,745.60",
                    "sku" => "3276610628",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-6x3-m/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Ufficio modulare 6×3 m, confortevole e completo.\nStruttura robusta in acciaio\nIsolamento termico e acustico in lana minerale\nImpianto elettrico con prese 230V e luce per bagno\nPavimento in linoleum resistente\nAmpie finestre e riscaldamento incluso",
                        "en" => "6×3 m modular office, comfortable and complete.\nRobust steel structure\nMineral wool thermal and acoustic insulation\nElectrical system with 230V sockets and bathroom light\nResistant linoleum flooring\nLarge windows and heating included",
                        "fr" => "Bureau modulaire 6×3 m, confortable et complet.\nStructure robuste en acier\nIsolation thermique et acoustique en laine minérale\nInstallation électrique avec prises 230V et lumière salle de bain\nSol en linoléum résistant\nGrandes fenêtres et chauffage inclus",
                        "pt" => "Escritório modular 6×3 m, confortável e completo.\nEstrutura robusta em aço\nIsolamento térmico e acústico em lã mineral\nInstalação elétrica com tomadas 230V e luz para casa de banho\nPiso em linóleo resistente\nAmplas janelas e aquecimento incluído",
                        "es" => "Oficina modular 6×3 m, cómoda y completa.\nEstructura robusta de acero\nAislamiento térmico y acústico en lana mineral\nInstalación eléctrica con enchufes 230V y luz para baño\nSuelo de linóleo resistente\nAmplias ventanas y calefacción incluida"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-4-1-300x300.webp",
                        "/assets/uploads/2025/11/2-5-1-300x300.webp",
                        "/assets/uploads/2025/11/2-23-300x300.webp",
                        "/assets/uploads/2025/11/3-8-300x300.webp",
                        "/assets/uploads/2025/11/3-22-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10629",
                    "name" => [
                        "it" => "Contenitore Ufficio 6×3 m Modello H1-630",
                        "en" => "6×3 m Office Container Model H1-630",
                        "fr" => "Conteneur Bureau 6×3 m Modèle H1-630",
                        "pt" => "Contentor Escritório 6×3 m Modelo H1-630",
                        "es" => "Contenedor Oficina 6×3 m Modelo H1-630"
                    ],
                    "price" => "2,222.22",
                    "old_price" => "3,174.60",
                    "sku" => "3276610629",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-6x3-m-modello-h1-630/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Contenitore Ufficio H1-630 da 18 m², robusto e confortevole.\nStruttura in acciaio zincato\nRivestimento interno in legno\nPorta d'accesso 0,75 × 2 m\nTetto a doppia falda\nDisponibile a Santiago – El Monte",
                        "en" => "H1-630 Office Container of 18 m², robust and comfortable.\nGalvanized steel structure\nWooden interior lining\nAccess door 0.75 × 2 m\nGable roof\nAvailable in Santiago – El Monte",
                        "fr" => "Conteneur Bureau H1-630 de 18 m², robuste et confortable.\nStructure en acier galvanisé\nRevêtement intérieur en bois\nPorte d'accès 0,75 × 2 m\nToit à double pente\nDisponible à Santiago – El Monte",
                        "pt" => "Contentor Escritório H1-630 de 18 m², robusto e confortável.\nEstrutura em aço galvanizado\nRevestimento interior em madeira\nPorta de acesso 0,75 × 2 m\nTelhado de duas águas\nDisponível em Santiago – El Monte",
                        "es" => "Contenedor Oficina H1-630 de 18 m², robusto y cómodo.\nEstructura de acero galvanizado\nRevestimiento interior de madera\nPuerta de acceso 0,75 × 2 m\nTecho a dos aguas\nDisponible en Santiago – El Monte"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-20-300x300.webp",
                        "/assets/uploads/2025/11/2-23-1-300x300.webp",
                        "/assets/uploads/2025/11/3-22-1-300x300.webp",
                        "/assets/uploads/2025/11/4-19-300x300.webp",
                        "/assets/uploads/2025/11/5-16-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11159",
                    "name" => [
                        "it" => "Contenitore Ufficio da Cantiere 20' – Usura Normale",
                        "en" => "20' Construction Site Office Container – Normal Wear",
                        "fr" => "Conteneur Bureau de Chantier 20' – Usure Normale",
                        "pt" => "Contentor Escritório de Estaleiro 20' – Desgaste Normal",
                        "es" => "Contenedor Oficina de Obra 20' – Desgaste Normal"
                    ],
                    "price" => "1,260.00",
                    "old_price" => null,
                    "sku" => "3276611159",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-da-cantiere-20%e2%80%b2-usura-normale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore Ufficio da Cantiere 20' è una soluzione economica e resistente per creare spazi di lavoro temporanei. Dotato di finestre, riscaldamento e impianto elettrico, è pronto all'uso.",
                        "en" => "The 20' Construction Site Office Container is an economical and resistant solution for creating temporary workspaces. Equipped with windows, heating and electrical system, it is ready to use.",
                        "fr" => "Le Conteneur Bureau de Chantier 20' est une solution économique et résistante pour créer des espaces de travail temporaires. Équipé de fenêtres, chauffage et installation électrique, il est prêt à l'emploi.",
                        "pt" => "O Contentor Escritório de Estaleiro 20' é uma solução económica e resistente para criar espaços de trabalho temporários. Equipado com janelas, aquecimento e instalação elétrica, está pronto a usar.",
                        "es" => "El Contenedor Oficina de Obra 20' es una solución económica y resistente para crear espacios de trabajo temporales. Equipado con ventanas, calefacción e instalación eléctrica, está listo para usar."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-0-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-1-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-2-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11160",
                    "name" => [
                        "it" => "Contenitore Ufficio Mobile 20' – Usura Normale",
                        "en" => "20' Mobile Office Container – Normal Wear",
                        "fr" => "Conteneur Bureau Mobile 20' – Usure Normale",
                        "pt" => "Contentor Escritório Móvel 20' – Desgaste Normal",
                        "es" => "Contenedor Oficina Móvil 20' – Desgaste Normal"
                    ],
                    "price" => "1,500.00",
                    "old_price" => null,
                    "sku" => "3276611160",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-mobile-20%e2%80%b2-usura-normale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Il Contenitore Ufficio Mobile 20' è una soluzione pratica ed economica per spazi di lavoro temporanei. Isolato, elettrificato e pronto all'uso, è perfetto per cantieri e progetti temporanei.",
                        "en" => "The 20' Mobile Office Container is a practical and economical solution for temporary workspaces. Insulated, electrified and ready to use, it is perfect for construction sites and temporary projects.",
                        "fr" => "Le Conteneur Bureau Mobile 20' est une solution pratique et économique pour les espaces de travail temporaires. Isolé, électrifié et prêt à l'emploi, il est parfait pour les chantiers et projets temporaires.",
                        "pt" => "O Contentor Escritório Móvel 20' é uma solução prática e económica para espaços de trabalho temporários. Isolado, eletrificado e pronto a usar, é perfeito para estaleiros e projetos temporários.",
                        "es" => "El Contenedor Oficina Móvil 20' es una solución práctica y económica para espacios de trabajo temporales. Aislado, electrificado y listo para usar, es perfecto para obras y proyectos temporales."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-0-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-300x300.png",
                        "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-1-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10625",
                    "name" => [
                        "it" => "Contenitore Ufficio Standard 6,00 × 2,43 m",
                        "en" => "Standard Office Container 6.00 × 2.43 m",
                        "fr" => "Conteneur Bureau Standard 6,00 × 2,43 m",
                        "pt" => "Contentor Escritório Padrão 6,00 × 2,43 m",
                        "es" => "Contenedor Oficina Estándar 6,00 × 2,43 m"
                    ],
                    "price" => "2,482.48",
                    "old_price" => "3,546.40",
                    "sku" => "3276610625",
                    "discount_percentage" => null,
                    "link" => "/product/contenitore-ufficio-standard-600-x-243-m/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-67-300x292.jpeg",
                        "/assets/uploads/2025/11/1-68-300x292.jpeg",
                        "/assets/uploads/2025/11/3-63-300x292.jpeg",
                        "/assets/uploads/2025/11/4-63-300x292.jpeg",
                        "/assets/uploads/2025/11/5-59-300x290.jpeg",
                        "/assets/uploads/2025/11/6-49-300x295.jpeg",
                        "/assets/uploads/2025/11/7-38-300x292.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11240",
                    "name" => [
                        "it" => "CONTENITORI REFRIGERATI DA 20 PIEDI",
                        "en" => "20 FT REFRIGERATED CONTAINERS",
                        "fr" => "CONTENEURS RÉFRIGÉRÉS 20 PIEDS",
                        "pt" => "CONTENTORES REFRIGERADOS 20 PÉS",
                        "es" => "CONTENEDORES REFRIGERADOS 20 PIES"
                    ],
                    "price" => "3,499.00",
                    "old_price" => "4,100.00",
                    "sku" => "3276611240",
                    "discount_percentage" => null,
                    "link" => "/product/contenitori-refrigerati-da-20-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Unità container refrigerate da 20 piedi che incorporano un sistema di refrigerazione integrato che consente il trasporto o lo stoccaggio sicuro di prodotti deperibili o di prodotti che devono essere mantenuti a una temperatura specifica. Queste unità sono ideali per lo stoccaggio e il trasporto di merci a temperature calde e fredde. Queste unità utilizzano un semplice ingresso di alimentazione plug and play, che consente di alimentare le unità in modo rapido ed efficiente o possono essere alimentate da un generatore diesel. Le unità container refrigerate sono personalizzabili in termini di lunghezza, potenza e design, e possono essere dotate di diverse tipologie di accessori per soddisfare le esigenze del cliente. Le nostre unità possono anche essere dotate di sistemi di localizzazione GPS e funzionalità satellitare di temperatura remota, che consentono di monitorare e regolare la temperatura del contenitore da remoto.",
                        "en" => "20 ft refrigerated container units incorporating an integrated refrigeration system allowing safe transport or storage of perishable products or products that need to be kept at a specific temperature. These units are ideal for storing and transporting goods at hot and cold temperatures. These units use a simple plug and play power inlet, allowing the units to be powered quickly and efficiently or can be powered by a diesel generator. Refrigerated container units are customizable in terms of length, power and design, and can be equipped with different types of accessories to meet customer needs. Our units can also be equipped with GPS tracking systems and remote satellite temperature functionality, allowing you to monitor and adjust the container temperature remotely.",
                        "fr" => "Unités conteneurs réfrigérés de 20 pieds intégrant un système de réfrigération intégré permettant le transport ou le stockage en toute sécurité de produits périssables ou de produits devant être maintenus à une température spécifique. Ces unités sont idéales pour le stockage et le transport de marchandises à températures chaudes et froides. Ces unités utilisent une simple entrée d'alimentation plug and play, permettant d'alimenter les unités rapidement et efficacement ou peuvent être alimentées par un générateur diesel. Les unités conteneurs réfrigérés sont personnalisables en termes de longueur, puissance et design, et peuvent être équipées de différents types d'accessoires pour répondre aux besoins du client. Nos unités peuvent également être équipées de systèmes de localisation GPS et de fonctionnalités satellite de température à distance, permettant de surveiller et régler la température du conteneur à distance.",
                        "pt" => "Unidades de contentores refrigerados de 20 pés que incorporam um sistema de refrigeração integrado que permite o transporte ou armazenamento seguro de produtos perecíveis ou de produtos que necessitam ser mantidos a uma temperatura específica. Estas unidades são ideais para armazenamento e transporte de mercadorias a temperaturas quentes e frias. Estas unidades utilizam uma simples entrada de alimentação plug and play, permitindo alimentar as unidades de forma rápida e eficiente ou podem ser alimentadas por um gerador a diesel. As unidades de contentores refrigerados são personalizáveis em termos de comprimento, potência e design, e podem ser equipadas com diferentes tipos de acessórios para satisfazer as necessidades do cliente. As nossas unidades também podem ser equipadas com sistemas de localização GPS e funcionalidade de temperatura remota por satélite, permitindo monitorizar e ajustar a temperatura do contentor remotamente.",
                        "es" => "Unidades de contenedores refrigerados de 20 pies que incorporan un sistema de refrigeración integrado que permite el transporte o almacenamiento seguro de productos perecederos o productos que deben mantenerse a una temperatura específica. Estas unidades son ideales para el almacenamiento y transporte de mercancías a temperaturas cálidas y frías. Estas unidades utilizan una simple entrada de alimentación plug and play, que permite alimentar las unidades de forma rápida y eficiente o pueden ser alimentadas por un generador diésel. Las unidades de contenedores refrigerados son personalizables en términos de longitud, potencia y diseño, y pueden equiparse con diferentes tipos de accesorios para satisfacer las necesidades del cliente. Nuestras unidades también pueden equiparse con sistemas de localización GPS y funcionalidad satelital de temperatura remota, que permiten monitorear y ajustar la temperatura del contenedor de forma remota."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-2-600x450-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-7-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-5-600x450-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-4-600x450-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-3-600x450-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-1-300x300.jpg",
                        "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-6-600x450-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11231",
                    "name" => [
                        "it" => "FRIGORIFERI PORTATILI 10 PIEDI NUOVI",
                        "en" => "NEW 10 FT PORTABLE REFRIGERATORS",
                        "fr" => "FRIGORIFIQUES PORTATIFS 10 PIEDS NEUFS",
                        "pt" => "FRIGORÍFICOS PORTÁTEIS 10 PÉS NOVOS",
                        "es" => "FRIGORÍFICOS PORTÁTILES 10 PIES NUEVOS"
                    ],
                    "price" => "1,550.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611231",
                    "discount_percentage" => null,
                    "link" => "/product/frigoriferi-portatili-10-piedi-nuovi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Le caratteristiche delle nostre celle frigorifere mobili le rendono particolarmente utili quando si lavora con carrelli del supermercato, transpallet manuali o carrelli elevatori elettrici poiché hanno un pavimento piatto per poter rotolare facilmente e disponiamo di rampe leggere che reggono fino a 750Kg e di rampe più robuste che sostenere fino a 4500Kg. Inoltre, l'impianto di illuminazione e l'apertura interna della porta permettono di movimentare la merce al suo interno in tutta sicurezza.\nCon le celle frigorifere portatili da 3 m/10′ puoi controllare la temperatura e l'umidità. Le nostre celle frigorifere portatili coprono un intervallo di temperatura programmabile da +30ºC a -40ºC con una temperatura esterna di +38ºC. C'è anche la possibilità di verificare che la catena del freddo non sia stata interrotta durante lo stoccaggio della merce tramite meccanismi che permettono di memorizzare i valori della temperatura ogni 10 minuti in modo da avere la tranquillità che la merce sia in perfette condizioni.\nLe celle frigorifere mobili sono contenitori marittimi refrigerati con modifiche per facilitarne l'utilizzo come magazzino refrigerato, come ad esempio:\nApertura delle porte tipo cella frigorifera.\nApertura interna.\nIlluminazione interna.\nAllarme uomo bloccato.\nTenda a stecche.\nPavimento piatto per facilitare l'utilizzo di transpallet o carrelli elevatori.\nRampa opzionale.\nSe sei interessato al noleggio o all'acquisto di una delle nostre celle frigorifere portatili, visita la sezione offerte dove troverai le offerte più interessanti oppure contattaci. I nostri rappresentanti di vendita risponderanno a qualsiasi domanda o problema e ti faranno un'offerta di noleggio o vendita su misura per le tue esigenze.",
                        "en" => "The features of our mobile cold rooms make them particularly useful when working with supermarket trolleys, manual pallet trucks or electric forklifts as they have a flat floor for easy rolling and we have light ramps that hold up to 750Kg and more robust ramps that hold up to 4500Kg. In addition, the lighting system and internal door opening allow goods to be handled safely inside.\nWith 3 m/10′ portable cold rooms you can control temperature and humidity. Our portable cold rooms cover a programmable temperature range from +30ºC to -40ºC with an external temperature of +38ºC. There is also the possibility of checking that the cold chain has not been interrupted during storage of goods through mechanisms that allow temperature values to be stored every 10 minutes so that you have the peace of mind that the goods are in perfect condition.\nMobile cold rooms are refrigerated shipping containers with modifications to facilitate their use as a refrigerated warehouse, such as:\nCold room type door opening.\nInternal opening.\nInternal lighting.\nMan trapped alarm.\nStrip curtain.\nFlat floor to facilitate the use of pallet trucks or forklifts.\nOptional ramp.\nIf you are interested in renting or purchasing one of our portable cold rooms, visit the offers section where you will find the most interesting offers or contato us. Our sales representatives will answer any questions or problems and will make you a rental or sale offer tailored to your needs.",
                        "fr" => "Les caractéristiques de nos chambres froides mobiles les rendent particulièrement utiles lorsque vous travaillez avec des chariots de supermarché, des transpalettes manuels ou des chariots élévateurs électriques car elles ont un sol plat pour rouler facilement et nous disposons de rampes légères supportant jusqu'à 750Kg et de rampes plus robustes supportant jusqu'à 4500Kg. De plus, le système d'éclairage et l'ouverture intérieure de la porte permettent de manipuler les marchandises en toute sécurité à l'intérieur.\nAvec les chambres froides portables de 3 m/10′ vous pouvez contrôler la température et l'humidité. Nos chambres froides portables couvrent une plage de température programmable de +30ºC à -40ºC avec une température extérieure de +38ºC. Il est également possible de vérifier que la chaîne du froid n'a pas été interrompue pendant le stockage des marchandises grâce à des mécanismes permettant de mémoriser les valeurs de température toutes les 10 minutes afin d'avoir l'esprit tranquille que les marchandises sont en parfait état.\nLes chambres froides mobiles sont des conteneurs maritimes réfrigérés avec des modifications pour faciliter leur utilisation comme entrepôt frigorifique, comme par exemple :\nOuverture des portes type chambre froide.\nOuverture intérieure.\nÉclairage intérieur.\nAlarme homme bloqué.\nRideau à lanières.\nSol plat pour faciliter l'utilisation de transpalettes ou de chariots élévateurs.\nRampe en option.\nSi vous êtes intéressé par la location ou l'achat d'une de nos chambres froides portables, visitez la section offres où vous trouverez les offres les plus intéressantes ou contatoez-nous. Nos représentants commerciaux répondront à toutes vos questions ou problèmes et vous feront une offre de location ou de vente adaptée à vos besoins.",
                        "pt" => "As características das nossas câmaras frigoríficas móveis tornam-nas particularmente úteis quando se trabalha com carrinhos de supermercado, transpaletes manuais ou empilhadoras elétricas, pois têm um piso plano para rolar facilmente e dispomos de rampas leves que suportam até 750Kg e rampas mais robustas que suportam até 4500Kg. Além disso, o sistema de iluminação e a abertura interna da porta permitem movimentar a mercadoria em seu interior com total segurança.\nCom as câmaras frigoríficas portáteis de 3 m/10′ pode controlar a temperatura e a humidade. As nossas câmaras frigoríficas portáteis cobrem uma gama de temperatura programável de +30ºC a -40ºC com uma temperatura externa de +38ºC. Há também a possibilidade de verificar se a cadeia de frio não foi interrompida durante o armazenamento da mercadoria através de mecanismos que permitem armazenar os valores da temperatura a cada 10 minutos, para que tenha a tranquilidade de que a mercadoria está em perfeitas condições.\nAs câmaras frigoríficas móveis são contentores marítimos refrigerados com modificações para facilitar a sua utilização como armazém refrigerado, como por exemplo:\nAbertura das portas tipo câmara frigorífica.\nAbertura interna.\nIluminação interna.\nAlarme de homem bloqueado.\nCortina de tiras.\nPiso plano para facilitar a utilização de transpaletes ou empilhadoras.\nRampa opcional.\nSe estiver interessado em alugar ou comprar uma das nossas câmaras frigoríficas portáteis, visite a secção de ofertas onde encontrará as ofertas mais interessantes ou contatoe-nos. Os nossos representantes de vendas responderão a qualquer questão ou problema e far-lhe-ão uma oferta de aluguer ou venda adaptada às suas necessidades.",
                        "es" => "Las características de nuestras cámaras frigoríficas móviles las hacen particularmente útiles cuando se trabaja con carros de supermercado, transpaletas manuales o carretillas elevadoras eléctricas ya que tienen un suelo plano para rodar fácilmente y disponemos de rampas ligeras que soportan hasta 750Kg y rampas más robustas que soportan hasta 4500Kg. Además, el sistema de iluminación y la apertura interior de la puerta permiten manipular la mercancía en su interior con total seguridad.\nCon las cámaras frigoríficas portátiles de 3 m/10′ puedes controlar la temperatura y la humedad. Nuestras cámaras frigoríficas portátiles cubren un rango de temperatura programable de +30ºC a -40ºC con una temperatura exterior de +38ºC. También existe la posibilidad de verificar que la cadena de frío no se ha interrumpido durante el almacenamiento de la mercancía mediante mecanismos que permiten almacenar los valores de la temperatura cada 10 minutos para que tengas la tranquilidad de que la mercancía está en perfectas condiciones.\nLas cámaras frigoríficas móviles son contenedores marítimos refrigerados con modificaciones para facilitar su uso como almacén refrigerado, como por ejemplo:\nApertura de puertas tipo cámara frigorífica.\nApertura interior.\nIluminación interior.\nAlarma hombre atrapado.\nCortina de tiras.\nSuelo plano para facilitar el uso de transpaletas o carretillas elevadoras.\nRampa opcional.\nSi estás interesado en alquilar o comprar una de nuestras cámaras frigoríficas portátiles, visita la sección de ofertas donde encontrarás las ofertas más interesantes o contáctanos. Nuestros representantes de ventas responderán a cualquier pregunta o problema y te harán una oferta de alquiler o venta adaptada a tus necesidades."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/camara-frigorifica-portatil-10-maquinaria-1-300x300.jpg",
                        "/assets/uploads/2025/11/oferta-156_1-1-300x300.jpg",
                        "/assets/uploads/2025/11/cont-pallet-wide-5-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11622",
                    "name" => [
                        "it" => "Mini casa mobile con due camere da letto e cucina – Modello Deluxe Stahlworks",
                        "en" => "Mobile mini home with two bedrooms and kitchen – Stahlworks Deluxe Model",
                        "fr" => "Mini maison mobile avec deux chambres et cuisine – Modèle Deluxe Stahlworks",
                        "pt" => "Mini casa móvel com dois quartos e cozinha – Modelo Deluxe Stahlworks",
                        "es" => "Mini casa móvil con dos dormitorios y cocina – Modelo Deluxe Stahlworks"
                    ],
                    "price" => "8,995.00",
                    "old_price" => "10,800.00",
                    "sku" => "3276611622",
                    "discount_percentage" => null,
                    "link" => "/product/mini-casa-mobile-con-due-camere-da-letto-e-cucina-modello-deluxe-stahlworks/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002921-300x300.jpg",
                        "/assets/uploads/2025/11/1000002915-300x300.jpg",
                        "/assets/uploads/2025/11/1000002922-300x300.jpg",
                        "/assets/uploads/2025/11/1000002927-300x300.jpg",
                        "/assets/uploads/2025/11/1000002923-300x300.jpg",
                        "/assets/uploads/2025/11/1000002928-300x300.jpg",
                        "/assets/uploads/2025/11/1000002925-300x300.jpg",
                        "/assets/uploads/2025/11/1000002914-300x300.jpg",
                        "/assets/uploads/2025/11/1000002924-300x300.jpg",
                        "/assets/uploads/2025/11/1000002920-300x300.jpg",
                        "/assets/uploads/2025/11/1000002926-300x300.jpg",
                        "/assets/uploads/2025/11/1000002919-300x300.jpg",
                        "/assets/uploads/2025/11/1000002917-300x300.jpg",
                        "/assets/uploads/2025/11/1000002918-300x300.jpg",
                        "/assets/uploads/2025/11/1000002916-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11830",
                    "name" => [
                        "it" => "Mini container da 12 piedi",
                        "en" => "12 ft Mini Container",
                        "fr" => "Mini conteneur 12 pieds",
                        "pt" => "Mini contentor de 12 pés",
                        "es" => "Mini contenedor de 12 pies"
                    ],
                    "price" => "1,025.00",
                    "old_price" => "1,100.00",
                    "sku" => "3276611830",
                    "discount_percentage" => null,
                    "link" => "/product/mini-container-da-12-piedi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059438-300x300.jpg",
                        "/assets/uploads/2025/11/1000059437-300x300.jpg",
                        "/assets/uploads/2025/11/1000059440-300x300.jpg",
                        "/assets/uploads/2025/11/1000059436-300x300.jpg",
                        "/assets/uploads/2025/11/1000059439-300x300.jpg",
                        "/assets/uploads/2025/11/1000059435-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11566",
                    "name" => [
                        "it" => "Moderna mini casa di 36 m² – 2 camere da letto e cucina attrezzata",
                        "en" => "Modern 36 m² mini home – 2 bedrooms and equipped kitchen",
                        "fr" => "Moderne mini maison de 36 m² – 2 chambres et cuisine équipée",
                        "pt" => "Moderna mini casa de 36 m² – 2 quartos e cozinha equipada",
                        "es" => "Moderna mini casa de 36 m² – 2 dormitorios y cocina equipada"
                    ],
                    "price" => "9,100.00",
                    "old_price" => "10,800.00",
                    "sku" => "3276611566",
                    "discount_percentage" => null,
                    "link" => "/product/moderna-mini-casa-di-36-m%c2%b2-2-camere-da-letto-e-cucina-attrezzata/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002868-300x300.jpg",
                        "/assets/uploads/2025/11/1000002859-300x300.jpg",
                        "/assets/uploads/2025/11/1000002872-300x300.jpg",
                        "/assets/uploads/2025/11/1000002865-300x300.jpg",
                        "/assets/uploads/2025/11/1000002870-300x300.jpg",
                        "/assets/uploads/2025/11/1000002871-300x300.jpg",
                        "/assets/uploads/2025/11/1000002863-300x300.jpg",
                        "/assets/uploads/2025/11/1000002867-300x300.jpg",
                        "/assets/uploads/2025/11/1000002862-300x300.jpg",
                        "/assets/uploads/2025/11/1000002864-300x300.jpg",
                        "/assets/uploads/2025/11/1000002860-300x300.jpg",
                        "/assets/uploads/2025/11/1000002869-300x300.jpg",
                        "/assets/uploads/2025/11/1000002873-300x300.jpg",
                        "/assets/uploads/2025/11/1000002866-300x300.jpg",
                        "/assets/uploads/2025/11/1000002861-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11169",
                    "name" => [
                        "it" => "Modulo Abitabile T0 in Container – Design Moderno e Isolamento Ottimale",
                        "en" => "T0 Livable Container Module – Modern Design and Optimal Insulation",
                        "fr" => "Module Habitable T0 en Conteneur – Design Moderne et Isolation Optimale",
                        "pt" => "Módulo Habitável T0 em Contentor – Design Moderno e Isolamento Ótimo",
                        "es" => "Módulo Habitable T0 en Contenedor – Diseño Moderno y Aislamiento Óptimo"
                    ],
                    "price" => "5,500.00",
                    "old_price" => "6,850.00",
                    "sku" => "3276611169",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-abitabile-t0-in-container-design-moderno-e-isolamento-ottimale/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Modulo Abitabile T0: compatto, moderno e isolato. Perfetto per spazi abitativi, professionali o ricreativi. Personalizzabile e pronto all'uso.",
                        "en" => "T0 Livable Module: compact, modern and insulated. Perfect for living, professional or recreational spaces. Customizable and ready to use.",
                        "fr" => "Module Habitable T0 : compact, moderne et isolé. Parfait pour les espaces de vie, professionnels ou de loisirs. Personnalisable et prêt à l'emploi.",
                        "pt" => "Módulo Habitável T0: compacto, moderno e isolado. Perfeito para espaços habitacionais, profissionais ou recreativos. Personalizável e pronto a usar.",
                        "es" => "Módulo Habitable T0: compacto, moderno y aislado. Perfecto para espacios habitacionales, profesionales o recreativos. Personalizable y listo para usar."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-3-300x300.png",
                        "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-2-300x300.png",
                        "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11621",
                    "name" => [
                        "it" => "Modulo commerciale 18m² con servizi igienici",
                        "en" => "18m² Commercial Module with toilet facilities",
                        "fr" => "Module commercial 18m² avec sanitaires",
                        "pt" => "Módulo comercial 18m² com instalações sanitárias",
                        "es" => "Módulo comercial 18m² con aseos"
                    ],
                    "price" => "5,100.00",
                    "old_price" => null,
                    "sku" => "3276611621",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-commerciale-18m%c2%b2-con-servizi-igienici/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002908-300x300.jpg",
                        "/assets/uploads/2025/11/1000002909-300x300.jpg",
                        "/assets/uploads/2025/11/1000002905-300x300.jpg",
                        "/assets/uploads/2025/11/1000002906-300x300.jpg",
                        "/assets/uploads/2025/11/1000002907-300x300.jpg",
                        "/assets/uploads/2025/11/1000002904-300x300.jpg",
                        "/assets/uploads/2025/11/1000002912-300x300.jpg",
                        "/assets/uploads/2025/11/1000002911-300x300.jpg",
                        "/assets/uploads/2025/11/1000002910-300x300.jpg",
                        "/assets/uploads/2025/11/1000002913-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11162",
                    "name" => [
                        "it" => "Modulo Container Abitabile 17 m² – Soluzione Versatile per Ogni Esigenza",
                        "en" => "17 m² Livable Container Module – Versatile Solution for Every Need",
                        "fr" => "Module Conteneur Habitable 17 m² – Solution Polyvalente pour Chaque Besoin",
                        "pt" => "Módulo Contentor Habitável 17 m² – Solução Versátil para Cada Necessidade",
                        "es" => "Módulo Contenedor Habitable 17 m² – Solución Versátil para Cada Necesidad"
                    ],
                    "price" => "5,100.00",
                    "old_price" => null,
                    "sku" => "3276611162",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-container-abitabile-17-m%c2%b2-soluzione-versatile-per-ogni-esigenza/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Modulo Container Abitabile 17 m²: compatto, economico e versatile. Include bagno completo, cucina attrezzata e isolamento termico. Perfetto per ogni esigenza abitativa o commerciale.",
                        "en" => "17 m² Livable Container Module: compact, economical and versatile. Includes complete bathroom, equipped kitchen and thermal insulation. Perfect for any housing or commercial need.",
                        "fr" => "Module Conteneur Habitable 17 m² : compact, économique et polyvalent. Comprend salle de bain complète, cuisine équipée et isolation thermique. Parfait pour tout besoin résidentiel ou commercial.",
                        "pt" => "Módulo Contentor Habitável 17 m²: compacto, económico e versátil. Inclui casa de banho completa, cozinha equipada e isolamento térmico. Perfeito para qualquer necessidade habitacional ou comercial.",
                        "es" => "Módulo Contenedor Habitable 17 m²: compacto, económico y versátil. Incluye baño completo, cocina equipada y aislamiento térmico. Perfecto para cualquier necesidad habitacional o comercial."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Modulo-Container-Abitabile-17-m²-Soluzione-Versatile-per-Ogni-Esigenza-300x300.jpg",
                        "/assets/uploads/2025/11/Modulo-Container-Abitabile-17-m²-Soluzione-Versatile-per-Ogni-Esigenza-2-300x300.jpg",
                        "/assets/uploads/2025/11/Modulo-Container-Abitabile-17-m²-Soluzione-Versatile-per-Ogni-Esigenza-1-300x300.jpg",
                        "/assets/uploads/2025/11/Modulo-Container-Abitabile-17-m²-Soluzione-Versatile-per-Ogni-Esigenza-0-300x300.jpg",
                        "/assets/uploads/2025/11/1000003579-300x300.jpg",
                        "/assets/uploads/2025/11/1000003581-300x300.jpg",
                        "/assets/uploads/2025/11/1000003585-300x300.jpg",
                        "/assets/uploads/2025/11/1000003582-300x300.jpg",
                        "/assets/uploads/2025/11/1000003583-300x300.jpg",
                        "/assets/uploads/2025/11/1000003580-300x300.jpg",
                        "/assets/uploads/2025/11/1000003584-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11175",
                    "name" => [
                        "it" => "Modulo Container Abitabile di 17 mq",
                        "en" => "17 sqm Livable Container Module",
                        "fr" => "Module Conteneur Habitable de 17 m²",
                        "pt" => "Módulo Contentor Habitável de 17 m²",
                        "es" => "Módulo Contenedor Habitable de 17 m²"
                    ],
                    "price" => "5,100.00",
                    "old_price" => null,
                    "sku" => "3276611175",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-container-abitabile-di-17-mq/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano.\nSpecifiche:\nDimensioni (LxLxA): 6 mx 2,9 mx 2,7 m\n– Tutto l'anno: realizzati con pannelli sandwich in polistirolo, perfettamente isolanti sia d'estate che d'inverno,\n– Installazione completa di ventilazione, elettricità, acqua e fognature.\n– Dotato di bagno e angolo cottura, basta allacciare acqua, fogna ed elettricità.\n– Durevole: realizzati con materiali di alta qualità, i pannelli sandwich non richiedono manutenzione.\n– Mobile – la casa viene consegnata completamente attrezzata e può essere spostata in qualsiasi momento.\nIsolamento:\n– Pannello sandwich standard di spessore 100 mm con anima in polistirolo con coefficiente di trasmittanza termica pari a 0,38 W/m2K.\nCostruzione:\n– Pannelli sandwich (lamiera zincata verniciata a polvere 0,5 mm – polistirolo 100 mm – lamiera zincata verniciata a polvere 0,5 mm)\n– Angoli (lamiera di acciaio da 0,5 mm)\nBagno :\n– WC compatti,\n– Lavello con mobile 45,\n– Cabina doccia 90×90\n– Scaldabagno elettrico da 50 litri\nCucina :\n– Mobile con lavello 1 vasca e rubinetteria da 80 cm\n– Pensile 80\n– Mobile freestanding 40 cm\n– Pensile 40 cm",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs.\nSpecifications:\nDimensions (LxWxH): 6 m x 2.9 m x 2.7 m\n– All year round: made with polystyrene sandwich panels, perfectly insulating both in summer and winter,\n– Complete installation of ventilation, electricity, water and sewage.\n– Equipped with bathroom and kitchenette, just connect water, sewage and electricity.\n– Durable: made with high quality materials, the sandwich panels require no maintenance.\n– Mobile – the house is delivered fully equipped and can be moved at any time.\nInsulation:\n– Standard 100 mm thick sandwich panel with polystyrene core with thermal transmittance coefficient of 0.38 W/m2K.\nConstruction:\n– Sandwich panels (0.5 mm powder-coated galvanized sheet – 100 mm polystyrene – 0.5 mm powder-coated galvanized sheet)\n– Corners (0.5 mm steel sheet)\nBathroom:\n– Compact toilet,\n– Sink with 45 cabinet,\n– 90×90 shower cubicle\n– 50 liter electric water heater\nKitchen:\n– Cabinet with 1-bowl sink and 80 cm faucet\n– 80 wall unit\n– 40 cm freestanding cabinet\n– 40 cm wall unit",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent.\nSpécifications :\nDimensions (LxLxH) : 6 m x 2,9 m x 2,7 m\n– Toute l'année : fabriqués avec des panneaux sandwich en polystyrène, parfaitement isolants été comme hiver,\n– Installation complète de ventilation, électricité, eau et égouts.\n– Équipé de salle de bain et kitchenette, il suffit de raccorder l'eau, les égouts et l'électricité.\n– Durable : fabriqués avec des matériaux de haute qualité, les panneaux sandwich ne nécessitent aucun entretien.\n– Mobile – la maison est livrée entièrement équipée et peut être déplacée à tout moment.\nIsolation :\n– Panneau sandwich standard de 100 mm d'épaisseur avec âme en polystyrène avec coefficient de transmission thermique de 0,38 W/m2K.\nConstruction :\n– Panneaux sandwich (tôle galvanisée laquée 0,5 mm – polystyrène 100 mm – tôle galvanisée laquée 0,5 mm)\n– Angles (tôle d'acier 0,5 mm)\nSalle de bain :\n– WC compacts,\n– Lavabo avec meuble 45,\n– Cabine de douche 90×90\n– Chauffe-eau électrique 50 litres\nCuisine :\n– Meuble avec évier 1 bac et robinetterie 80 cm\n– Meuble haut 80\n– Meuble indépendant 40 cm\n– Meuble haut 40 cm",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem.\nEspecificações:\nDimensões (CxLxA): 6 m x 2,9 m x 2,7 m\n– Todo o ano: fabricados com painéis sanduíche de poliestireno, perfeitamente isolantes tanto no verão como no inverno,\n– Instalação completa de ventilação, eletricidade, água e esgotos.\n– Equipado com casa de banho e kitchenette, basta ligar água, esgoto e eletricidade.\n– Durável: fabricados com materiais de alta qualidade, os painéis sanduíche não requerem manutenção.\n– Móvel – a casa é entregue completamente equipada e pode ser deslocada a qualquer momento.\nIsolamento:\n– Painel sanduíche padrão de espessura 100 mm com núcleo em poliestireno com coeficiente de transmissão térmica de 0,38 W/m2K.\nConstrução:\n– Painéis sanduíche (chapa galvanizada pintada a pó 0,5 mm – poliestireno 100 mm – chapa galvanizada pintada a pó 0,5 mm)\n– Cantos (chapa de aço 0,5 mm)\nCasa de banho:\n– Sanita compacta,\n– Lavatório com móvel 45,\n– Cabina de duche 90×90\n– Esquentador elétrico 50 litros\nCozinha:\n– Móvel com lava-loiça 1 tanque e torneiras 80 cm\n– Armário suspenso 80\n– Móvel independente 40 cm\n– Armário suspenso 40 cm",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen.\nEspecificaciones:\nDimensiones (LxAnxAl): 6 m x 2,9 m x 2,7 m\n– Todo el año: fabricados con paneles sándwich de poliestireno, perfectamente aislantes tanto en verano como en invierno,\n– Instalación completa de ventilación, electricidad, agua y alcantarillado.\n– Equipado con baño y kitchenette, solo hay que conectar agua, alcantarillado y electricidad.\n– Duradero: fabricados con materiales de alta calidad, los paneles sándwich no requieren mantenimiento.\n– Móvil: la casa se entrega completamente equipada y se puede trasladar en cualquier momento.\nAislamiento:\n– Panel sándwich estándar de 100 mm de espesor con núcleo de poliestireno con coeficiente de transmitancia térmica de 0,38 W/m2K.\nConstrucción:\n– Paneles sándwich (chapa galvanizada pintada al polvo 0,5 mm – poliestireno 100 mm – chapa galvanizada pintada al polvo 0,5 mm)\n– Esquinas (chapa de acero 0,5 mm)\nBaño:\n– Inodoro compacto,\n– Lavabo con mueble 45,\n– Plato de ducha 90×90\n– Calentador de agua eléctrico 50 litros\nCocina:\n– Mueble con fregadero 1 seno y grifería 80 cm\n– Mueble alto 80\n– Mueble independiente 40 cm\n– Mueble alto 40 cm"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/37e3c5_55e31a003e0f4990bb439420dbf6973fmv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_db63513a3f7d4f979c7a522908e8e79fmv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_ca6be839dc9149788c78ab2d903c4a38mv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_45e63d6ab6bf4419aa5c411de6948d95mv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_8c951b64a5e446c0bd8327938bfa09abmv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_9bf2532851624a8180e632292417dd39mv2-300x300.jpg",
                        "/assets/uploads/2025/11/37e3c5_22b03e84de0840d2968ebed73d21a5e0mv2-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11229",
                    "name" => [
                        "it" => "Modulo Container Abitabile di 21 m2",
                        "en" => "21 sqm Livable Container Module",
                        "fr" => "Module Conteneur Habitable de 21 m²",
                        "pt" => "Módulo Contentor Habitável de 21 m²",
                        "es" => "Módulo Contenedor Habitable de 21 m²"
                    ],
                    "price" => "4,299.00",
                    "old_price" => "6,100.00",
                    "sku" => "3276611229",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-container-abitabile-di-21-m2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 7 mx 3 mx 2,5 m\n• Telaio in acciaio 100x50x3\n• Pannello sandwich PIR con anima da 100 mm (poliuretano)\n• Bagno con vasca\n• Tapparelle + zanzariere\n• Rivestimento di facciata color noce",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions (LxWxH): 7 m x 3 m x 2.5 m\n• 100x50x3 steel frame\n• PIR sandwich panel with 100 mm core (polyurethane)\n• Bathroom with bathtub\n• Roller shutters + mosquito nets\n• Walnut color facade cladding",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions (LxPxH) : 7 m x 3 m x 2,5 m\n• Cadre en acier 100x50x3\n• Panneau sandwich PIR avec âme de 100 mm (polyuréthane)\n• Salle de bain avec baignoire\n• Volets roulants + moustiquaires\n• Revêtement de façade couleur noyer",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões (CxLxA): 7 m x 3 m x 2,5 m\n• Estrutura de aço 100x50x3\n• Painel sanduíche PIR com núcleo de 100 mm (poliuretano)\n• Casa de banho com banheira\n• Persianas + mosquiteiros\n• Revestimento de fachada cor nogueira",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones (LxAnxAl): 7 m x 3 m x 2,5 m\n• Estructura de acero 100x50x3\n• Panel sándwich PIR con núcleo de 100 mm (poliuretano)\n• Baño con bañera\n• Persianas + mosquiteras\n• Revestimiento de fachada color nogal"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/photo-produit-300x300.jpg",
                        "/assets/uploads/2025/11/2-3-2-300x300.jpg",
                        "/assets/uploads/2025/11/4-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/5-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/8-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/7-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-1-768x1024-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11168",
                    "name" => [
                        "it" => "Modulo Container Aménagé – Modernità, Flessibilità",
                        "en" => "Fitted Container Module – Modernity, Flexibility",
                        "fr" => "Module Conteneur Aménagé – Modernité, Flexibilité",
                        "pt" => "Módulo Contentor Equipado – Modernidade, Flexibilidade",
                        "es" => "Módulo Contenedor Equipado – Modernidad, Flexibilidad"
                    ],
                    "price" => "1,650.00",
                    "old_price" => null,
                    "sku" => "3276611168",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-container-amenage-modernita-flessibilita/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Modulo Container Aménagé: una soluzione versatile e sostenibile, ideale per uffici, spazi abitativi o professionali. Moderno, climatizzato e personalizzabile.",
                        "en" => "Fitted Container Module: a versatile and sustainable solution, ideal for offices, living or professional spaces. Modern, air-conditioned and customizable.",
                        "fr" => "Module Conteneur Aménagé : une solution polyvalente et durable, idéale pour les bureaux, les espaces de vie ou professionnels. Moderne, climatisé et personnalisable.",
                        "pt" => "Módulo Contentor Equipado: uma solução versátil e sustentável, ideal para escritórios, espaços habitacionais ou profissionais. Moderno, climatizado e personalizável.",
                        "es" => "Módulo Contenedor Equipado: una solución versátil y sostenible, ideal para oficinas, espacios habitacionales o profesionales. Moderno, climatizado y personalizable."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-300x300.png",
                        "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-2-300x300.png",
                        "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-1-300x300.png",
                        "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-0-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11161",
                    "name" => [
                        "it" => "Modulo Container Prefabbricato 18 m² – Spazio Extra Pronto all'Uso",
                        "en" => "Prefabricated Container Module 18 m² – Extra Space Ready to Use",
                        "fr" => "Module Conteneur Préfabriqué 18 m² – Espace Supplémentaire Prêt à l'Emploi",
                        "pt" => "Módulo Contentor Pré-fabricado 18 m² – Espaço Extra Pronto a Usar",
                        "es" => "Módulo Contenedor Prefabricado 18 m² – Espacio Extra Listo para Usar"
                    ],
                    "price" => "4,160.00",
                    "old_price" => null,
                    "sku" => "3276611161",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-container-prefabbricato-18-m%c2%b2-spazio-extra-pronto-alluso/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Module Conteneur Préfabriqué 18 m² : entièrement isolé, équipé de fenêtres, portes, système électrique et éclairage LED. Solution idéale pour les bureaux, les maisons ou les espaces commerciaux.",
                        "en" => "Prefabricated Container Module 18 m²: fully insulated, equipped with windows, doors, electrical system and LED lighting. Ideal solution for offices, homes or commercial spaces.",
                        "fr" => "Module Conteneur Préfabriqué 18 m² : entièrement isolé, équipé de fenêtres, portes, système électrique et éclairage LED. Solution idéale pour les bureaux, les maisons ou les espaces commerciaux.",
                        "pt" => "Módulo Contentor Pré-fabricado 18 m²: totalmente isolado, equipado com janelas, portas, sistema elétrico e iluminação LED. Solução ideal para escritórios, casas ou espaços comerciais.",
                        "es" => "Módulo Contenedor Prefabricado 18 m²: totalmente aislado, equipado con ventanas, puertas, sistema eléctrico e iluminación LED. Solución ideal para oficinas, casas o espacios comerciales."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-300x300.jpg",
                        "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-1-300x300.jpg",
                        "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-0-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10623",
                    "name" => [
                        "it" => "Modulo Prefabbricato “DALÍ” 8×3 m",
                        "en" => "“DALÍ” Prefabricated Module 8×3 m",
                        "fr" => "Module Préfabriqué “DALÍ” 8×3 m",
                        "pt" => "Módulo Pré-fabricado “DALÍ” 8×3 m",
                        "es" => "Módulo Prefabricado “DALÍ” 8×3 m"
                    ],
                    "price" => "2,642.64",
                    "old_price" => "3,775.20",
                    "sku" => "3276610623",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-dali-8x3-m/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Modulo moderno da 24 m² con bagno e ampie vetrate.\nStruttura in acciaio nero opaco\nInterni in legno e cartongesso liscio\nBagno attrezzato + impianto elettrico completo\nIsolamento in poliuretano e lana di vetro\nAmpie finestre in alluminio termoisolato",
                        "en" => "Modern 24 m² module with bathroom and large windows.\nMatt black steel structure\nWood and smooth plasterboard interiors\nEquipped bathroom + complete electrical system\nPolyurethane and fiberglass insulation\nLarge thermal break aluminum windows",
                        "fr" => "Module moderne de 24 m² avec salle de bain et grandes baies vitrées.\nStructure en acier noir mat\nIntérieurs en bois et plaques de plâtre lisses\nSalle de bain équipée + installation électrique complète\nIsolation en polyuréthane et laine de verre\nGrandes fenêtres en aluminium à rupture thermique",
                        "pt" => "Módulo moderno de 24 m² com casa de banho e amplos envidraçados.\nEstrutura em aço preto fosco\nInteriores em madeira e gesso cartonado liso\nCasa de banho equipada + instalação elétrica completa\nIsolamento em poliuretano e lã de vidro\nAmplas janelas em alumínio com corte térmico",
                        "es" => "Módulo moderno de 24 m² con baño y amplios ventanales.\nEstructura de acero negro mate\nInteriores de madera y cartón yeso liso\nBaño equipado + instalación eléctrica completa\nAislamiento de poliuretano y lana de vidrio\nAmplias ventanas de aluminio con rotura de puente térmico"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-7-300x300.webp",
                        "/assets/uploads/2025/11/2-24-300x300.webp",
                        "/assets/uploads/2025/11/3-23-300x300.webp",
                        "/assets/uploads/2025/11/4-21-300x300.webp",
                        "/assets/uploads/2025/11/5-18-1-300x300.webp",
                        "/assets/uploads/2025/11/5-18-300x300.webp",
                        "/assets/uploads/2025/11/6-14-300x300.webp",
                        "/assets/uploads/2025/11/7-11-300x300.webp",
                        "/assets/uploads/2025/11/8-9-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11228",
                    "name" => [
                        "it" => "Modulo prefabbricato 10 mq",
                        "en" => "10 sqm Prefabricated Module",
                        "fr" => "Module préfabriqué 10 m²",
                        "pt" => "Módulo pré-fabricado 10 m²",
                        "es" => "Módulo prefabricado 10 m²"
                    ],
                    "price" => "1,910.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611228",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-10-mq/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni\nDimensioni esterne (LxPxA): 4 m x 2,4 m x 2,6 m\nDimensioni interne (LxLxH): 3,8 mx 2,2 mx 2,35 m\nTetto: Copertura coibentata realizzata con pannelli sandwich composti da lamiere di acciaio zincato laccato RAL 9002 e anima isolante in poliuretano da 40 mm.\nRivestimento: Pareti coibentate realizzate con pannelli sandwich composti da lamiere di acciaio zincato laccate RAL 9002 e nucleo isolante in poliuretano da 50 mm.\nPorta esterna: falegnameria in PVC (845 x 1960 mm. Serratura a 4 punti. 3 chiavi fornite).\nFinestre: 2 finestre standard, doppi vetri – infissi in PVC, 970×1200 mm, 1 anta apribile.\nPavimento: telaio in acciaio zincato (rinforzo 200 kg/m²) e pavimento costituito da un pannello in fibrocemento da 16 mm non infiammabile e imputrescibile, non isolato. Rivestimento per pavimenti in PVC per uso pubblico, imitazione parquet.\nAlimentazione elettrica:\n– 1 quadro 220V/50Hz con magnetotermici\n– Cablaggio a superficie\n– 2 prese elettriche 16A+T\n– 1 rilevatore di fumo\nIlluminazione:\n– 2 pannelli LED interni\n– 1 striscia LED esterna.\n– 1 doppio interruttore",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions\nExternal dimensions (LxWxH): 4 m x 2.4 m x 2.6 m\nInternal dimensions (LxWxH): 3.8 m x 2.2 m x 2.35 m\nRoof: Insulated covering made of sandwich panels composed of RAL 9002 lacquered galvanized steel sheets and 40 mm polyurethane insulating core.\nCladding: Insulated walls made of sandwich panels composed of RAL 9002 lacquered galvanized steel sheets and 50 mm polyurethane insulating core.\nExternal door: PVC joinery (845 x 1960 mm. 4-point lock. 3 keys supplied).\nWindows: 2 standard windows, double glazing – PVC frames, 970×1200 mm, 1 opening sash.\nFloor: galvanized steel frame (reinforcement 200 kg/m²) and floor consisting of a 16 mm non-flammable and rot-proof fiber cement panel, not insulated. PVC floor covering for public use, parquet imitation.\nElectrical supply:\n– 1 220V/50Hz panel with circuit breakers\n– Surface wiring\n– 2 electrical sockets 16A+T\n– 1 smoke detector\nLighting:\n– 2 internal LED panels\n– 1 external LED strip.\n– 1 double switch",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions\nDimensions extérieures (LxPxH) : 4 m x 2,4 m x 2,6 m\nDimensions intérieures (LxPxH) : 3,8 m x 2,2 m x 2,35 m\nToit : Couverture isolée réalisée avec des panneaux sandwich composés de tôles d'acier galvanisé laqué RAL 9002 et d'une âme isolante en polyuréthane de 40 mm.\nRevêtement : Murs isolés réalisés avec des panneaux sandwich composés de tôles d'acier galvanisé laquées RAL 9002 et d'une âme isolante en polyuréthane de 50 mm.\nPorte extérieure : menuiserie PVC (845 x 1960 mm. Serrure 4 points. 3 clés fournies).\nFenêtres : 2 fenêtres standard, double vitrage – cadres PVC, 970×1200 mm, 1 vantail ouvrant.\nPlancher : châssis en acier galvanisé (renfort 200 kg/m²) et plancher constitué d'un panneau en fibrociment de 16 mm non inflammable et imputrescible, non isolé. Revêtement de sol PVC pour usage public, imitation parquet.\nAlimentation électrique :\n– 1 tableau 220V/50Hz avec disjoncteurs\n– Câblage apparent\n– 2 prises électriques 16A+T\n– 1 détecteur de fumée\nÉclairage :\n– 2 panneaux LED intérieurs\n– 1 bandeau LED extérieur.\n– 1 double interrupteur",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões\nDimensões externas (CxLxA): 4 m x 2,4 m x 2,6 m\nDimensões internas (CxLxA): 3,8 m x 2,2 m x 2,35 m\nTelhado: Cobertura isolada realizada com painéis sanduíche compostos por chapas de aço galvanizado lacado RAL 9002 e núcleo isolante em poliuretano de 40 mm.\nRevestimento: Paredes isoladas realizadas com painéis sanduíche compostos por chapas de aço galvanizado lacadas RAL 9002 e núcleo isolante em poliuretano de 50 mm.\nPorta exterior: caixilharia PVC (845 x 1960 mm. Fechadura multiponto. 3 chaves fornecidas).\nJanelas: 2 janelas padrão, vidro duplo – caixilhos PVC, 970×1200 mm, 1 folha de abrir.\nPiso: estrutura em aço galvanizado (reforço 200 kg/m²) e piso constituído por um painel em fibrocimento de 16 mm não inflamável e imputrescível, não isolado. Revestimento de piso em PVC para uso público, imitação de parquet.\nAlimentação elétrica:\n– 1 quadro 220V/50Hz com disjuntores\n– Cablagem à vista\n– 2 tomadas elétricas 16A+T\n– 1 detetor de fumo\nIluminação:\n– 2 painéis LED interiores\n– 1 fita LED exterior.\n– 1 interruptor duplo",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones\nDimensiones exteriores (LxAnxAl): 4 m x 2,4 m x 2,6 m\nDimensiones interiores (LxAnxAl): 3,8 m x 2,2 m x 2,35 m\nTecho: Cubierta aislada realizada con paneles sándwich compuestos por chapas de acero galvanizado lacado RAL 9002 y alma aislante de poliuretano de 40 mm.\nRevestimiento: Muros aislados realizados con paneles sándwich compuestos por chapas de acero galvanizado lacadas RAL 9002 y núcleo aislante de poliuretano de 50 mm.\nPuerta exterior: carpintería de PVC (845 x 1960 mm. Cerradura multipunto. 3 llaves suministradas).\nVentanas: 2 ventanas estándar, doble acristalamiento – marcos de PVC, 970×1200 mm, 1 hoja abatible.\nSuelo: bastidor de acero galvanizado (refuerzo 200 kg/m²) y suelo constituido por un panel de fibrocemento de 16 mm no inflamable e imputrescible, no aislado. Revestimiento de suelo de PVC para uso público, imitación parqué.\nAlimentación eléctrica:\n– 1 cuadro 220V/50Hz con magnetotérmicos\n– Cableado superficial\n– 2 tomas eléctricas 16A+T\n– 1 detector de humos\nIluminación:\n– 2 paneles LED interiores\n– 1 tira LED exterior.\n– 1 interruptor doble"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Module-4m-ADC-Module-2021-min-300x300.png",
                        "/assets/uploads/2025/11/Module-4m-ADC-Module-2021-min-1-300x300.png",
                        "/assets/uploads/2025/11/Baraque-de-chantier-interieur-10m²-ADC-Module-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11176",
                    "name" => [
                        "it" => "Modulo prefabbricato 14 mq con zona sanitaria",
                        "en" => "14 sqm Prefabricated Module with sanitary area",
                        "fr" => "Module préfabriqué 14 m² avec zone sanitaire",
                        "pt" => "Módulo pré-fabricado 14 m² com área sanitária",
                        "es" => "Módulo prefabricado 14 m² con área sanitaria"
                    ],
                    "price" => "4,100.00",
                    "old_price" => "4,500.00",
                    "sku" => "3276611176",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-14-mq-con-zona-sanitaria/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci.\nSpecifiche:\nDimensioni\nDimensioni esterne (LxPxA): 5,95 x 2,4 x 2,5 m\nDimensioni interne zona sanitaria: 1,50 m x 2,20 m\nDimensioni interne zona reception: 4,30 m x 2,20 m\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nTetto: altezza 250 mm\nMovimentazione: 4 prese sul tetto per ganci di sollevamento\nPAVIMENTO\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nPorta: 1 porta esterna in alluminio dim.90 x 200 cm. 1 porta interna in alluminio dim.80 x 200 cm.\nFinestre: 2 finestre in PVC dim. 100 x 100 cm, doppi vetri, 1 anta\nELETTRICITÀ\nIlluminazione: 2 neon LED\nPrese: 2 prese di corrente\nTabella: 1 tabella comprensiva di interdifferenziale e interruttori automatici\nCambio: 1",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us.\nSpecifications:\nDimensions\nExternal dimensions (LxWxH): 5.95 x 2.4 x 2.5 m\nInternal dimensions sanitary area: 1.50 m x 2.20 m\nInternal dimensions reception area: 4.30 m x 2.20 m\nWalls and roof\nMaterial: sandwich panels\nInsulation: Rigid polyurethane foam\nWall thickness: 50 mm\nCeiling thickness: 40 mm\nCeiling covering: Galvanized steel sheet with Greek waves\nFrame\nDescription: Galvanized and lacquered steel\nThickness: 2 mm\nRoof: height 250 mm\nHandling: 4 roof sockets for lifting hooks\nFLOOR\nStructure: Fiber cement panels\nThickness: 16 mm\nCovering: PVC\nJOINERY\nDoor: 1 aluminum external door size 90 x 200 cm. 1 aluminum internal door size 80 x 200 cm.\nWindows: 2 PVC windows size 100 x 100 cm, double glazing, 1 sash\nELECTRICITY\nLighting: 2 LED neon lights\nSockets: 2 power sockets\nPanel: 1 panel including differential switch and circuit breakers\nSwitch: 1",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous.\nSpécifications :\nDimensions\nDimensions extérieures (LxPxH) : 5,95 x 2,4 x 2,5 m\nDimensions intérieures zone sanitaire : 1,50 m x 2,20 m\nDimensions intérieures zone réception : 4,30 m x 2,20 m\nMurs et toit\nMatériau : panneaux sandwich\nIsolation : Mousse de polyuréthane rigide\nÉpaisseur du mur : 50 mm\nÉpaisseur du plafond : 40 mm\nCouverture du plafond : Tôle d'acier galvanisé à ondes grecques\nChâssis\nDescription : Acier galvanisé et laqué\nÉpaisseur : 2 mm\nToit : hauteur 250 mm\nManutention : 4 prises en toit pour crochets de levage\nPLANCHER\nStructure : Panneaux en fibrociment\nÉpaisseur : 16 mm\nRevêtement : PVC\nMENUISERIE\nPorte : 1 porte extérieure en aluminium dim.90 x 200 cm. 1 porte intérieure en aluminium dim.80 x 200 cm.\nFenêtres : 2 fenêtres PVC dim. 100 x 100 cm, double vitrage, 1 vantail\nÉLECTRICITÉ\nÉclairage : 2 néons LED\nPrises : 2 prises de courant\nTableau : 1 tableau comprenant interrupteur différentiel et disjoncteurs\nInterrupteur : 1",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos.\nEspecificações:\nDimensões\nDimensões externas (CxLxA): 5,95 x 2,4 x 2,5 m\nDimensões internas área sanitária: 1,50 m x 2,20 m\nDimensões internas área receção: 4,30 m x 2,20 m\nParedes e teto\nMaterial: painéis sanduíche\nIsolamento: Espuma de poliuretano rígida\nEspessura da parede: 50 mm\nEspessura do teto: 40 mm\nCobertura do teto: Chapa de aço galvanizado com ondas gregas\nEstrutura\nDescrição: Aço galvanizado e lacado\nEspessura: 2 mm\nTeto: altura 250 mm\nMovimentação: 4 tomadas no teto para ganchos de elevação\nPISO\nEstrutura: Painéis de fibrocimento\nEspessura: 16 mm\nRevestimento: PVC\nSERRALHARIA\nPorta: 1 porta exterior em alumínio dim.90 x 200 cm. 1 porta interior em alumínio dim.80 x 200 cm.\nJanelas: 2 janelas PVC dim. 100 x 100 cm, vidro duplo, 1 folha\nELETRICIDADE\nIluminação: 2 néon LED\nTomadas: 2 tomadas elétricas\nQuadro: 1 quadro incluindo diferencial e disjuntores\nInterruptor: 1",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos.\nEspecificaciones:\nDimensiones\nDimensiones exteriores (LxAnxAl): 5,95 x 2,4 x 2,5 m\nDimensiones interiores área sanitaria: 1,50 m x 2,20 m\nDimensiones interiores área recepción: 4,30 m x 2,20 m\nParedes y techo\nMaterial: paneles sándwich\nAislamiento: Espuma de poliuretano rígida\nEspesor de pared: 50 mm\nEspesor de techo: 40 mm\nCubierta de techo: Chapa de acero galvanizado con ondas griegas\nBastidor\nDescripción: Acero galvanizado y lacado\nEspesor: 2 mm\nTecho: altura 250 mm\nManipulación: 4 tomas en techo para ganchos de elevación\nSUELO\nEstructura: Paneles de fibrocemento\nEspesor: 16 mm\nRevestimiento: PVC\nCARPINTERÍA\nPuerta: 1 puerta exterior de aluminio dim.90 x 200 cm. 1 puerta interior de aluminio dim.80 x 200 cm.\nVentanas: 2 ventanas PVC dim. 100 x 100 cm, doble acristalamiento, 1 hoja\nELECTRICIDAD\nIluminación: 2 neones LED\nEnchufes: 2 tomas de corriente\nCuadro: 1 cuadro que incluye diferencial y magnetotérmicos\nInterruptor: 1"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-3-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-3-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/2-3-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-3-scaled-2-300x300.jpg",
                        "/assets/uploads/2025/11/4-3-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/5-2-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/6-2-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/7-1-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/8-1-scaled-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11227",
                    "name" => [
                        "it" => "Modulo prefabbricato da 12 m²",
                        "en" => "12 m² Prefabricated Module",
                        "fr" => "Module préfabriqué de 12 m²",
                        "pt" => "Módulo pré-fabricado de 12 m²",
                        "es" => "Módulo prefabricado de 12 m²"
                    ],
                    "price" => "2,320.00",
                    "old_price" => "2,400.00",
                    "sku" => "3276611227",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-da-12-m%c2%b2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni: LxPxA: 4,94 x 2,50 x 2,70 metri\n– Una struttura di 4,94 x 2,50 m con un'altezza del soffitto di 2,26 m in acciaio zincato laccato bianco\n– Pannelli parete con isolamento in schiuma poliuretanica da 35 mm\n– Tetto in lamiera zincata\n– Isolamento in lana di vetro da 100 mm\n– Soffitto metallico in vassoio di acciaio bianco\n– Pavimento in truciolare CTBH da 22 mm\n– Rivestimento pavimento in PVC blu U2P2\nFalegnameria:\n– 1 porta esterna cieca da 0,90 m\n– Finestra scorrevole in PVC da 1,00 x 1,20 m in doppio vetro e tapparella\nAttrezzatura :\n– Quadro elettrico generale\n– Tubo LED 1x36W\n– Termoconvettore elettrico da 1500 W\n– Prese di corrente",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions: LxWxH: 4.94 x 2.50 x 2.70 meters\n– A structure of 4.94 x 2.50 m with a ceiling height of 2.26 m in white lacquered galvanized steel\n– Wall panels with 35 mm polyurethane foam insulation\n– Galvanized sheet roof\n– 100 mm fiberglass insulation\n– White steel tray metal ceiling\n– 22 mm CTBH chipboard floor\n– Blue U2P2 PVC floor covering\nJoinery:\n– 1 0.90 m solid external door\n– 1.00 x 1.20 m PVC sliding window with double glazing and roller shutter\nEquipment:\n– Main electrical panel\n– LED tube 1x36W\n– 1500 W electric convector heater\n– Power sockets",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions : LxPxH : 4,94 x 2,50 x 2,70 mètres\n– Une structure de 4,94 x 2,50 m avec une hauteur sous plafond de 2,26 m en acier galvanisé laqué blanc\n– Panneaux muraux avec isolation en mousse polyuréthane de 35 mm\n– Toit en tôle galvanisée\n– Isolation en laine de verre de 100 mm\n– Plafond métallique en bac acier blanc\n– Plancher en aggloméré CTBH de 22 mm\n– Revêtement de sol PVC bleu U2P2\nMenuiserie :\n– 1 porte extérieure pleine 0,90 m\n– Fenêtre coulissante PVC 1,00 x 1,20 m double vitrage et volet roulant\nÉquipement :\n– Tableau électrique général\n– Tube LED 1x36W\n– Convecteur électrique 1500 W\n– Prises de courant",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões: CxLxA: 4,94 x 2,50 x 2,70 metros\n– Uma estrutura de 4,94 x 2,50 m com pé-direito de 2,26 m em aço galvanizado lacado branco\n– Painéis de parede com isolamento em espuma de poliuretano de 35 mm\n– Telhado em chapa galvanizada\n– Isolamento em lã de vidro de 100 mm\n– Teto metálico em bandeja de aço branco\n– Piso em aglomerado CTBH de 22 mm\n– Revestimento de piso em PVC azul U2P2\nCarpintaria:\n– 1 porta exterior cega de 0,90 m\n– Janela deslizante em PVC de 1,00 x 1,20 m com vidro duplo e persiana\nEquipamento:\n– Quadro elétrico geral\n– Tubo LED 1x36W\n– Termoconvetor elétrico 1500 W\n– Tomadas elétricas",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones: LxAnxAl: 4,94 x 2,50 x 2,70 metros\n– Una estructura de 4,94 x 2,50 m con una altura de techo de 2,26 m en acero galvanizado lacado blanco\n– Paneles de pared con aislamiento de espuma de poliuretano de 35 mm\n– Techo de chapa galvanizada\n– Aislamiento de lana de vidrio de 100 mm\n– Techo metálico de bandeja de acero blanco\n– Suelo de aglomerado CTBH de 22 mm\n– Revestimiento de suelo de PVC azul U2P2\nCarpintería:\n– 1 puerta exterior ciega de 0,90 m\n– Ventana corredera de PVC de 1,00 x 1,20 m con doble acristalamiento y persiana\nEquipamiento:\n– Cuadro eléctrico general\n– Tubo LED 1x36W\n– Convector eléctrico 1500 W\n– Tomas de corriente"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-3-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-3-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-2-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-4-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-5-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-6-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11226",
                    "name" => [
                        "it" => "Modulo prefabbricato da 15 mq",
                        "en" => "15 sqm Prefabricated Module",
                        "fr" => "Module préfabriqué de 15 m²",
                        "pt" => "Módulo pré-fabricado de 15 m²",
                        "es" => "Módulo prefabricado de 15 m²"
                    ],
                    "price" => "3,599.00",
                    "old_price" => "3,700.00",
                    "sku" => "3276611226",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-da-15-mq/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 6 mx 2,5 mx 2,58 m\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nPavimento\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nPorta: 1 anta in alluminio satinato dim.90 x 200 cm\nFinestre: 2 finestre in alluminio didim200 x 100 cm, doppi vetri, 1 anta\nELETTRICITÀ\nIlluminazione: 2 neon LED\nPrese: 2 prese di corrente\nTabella: 1 tabella comprensiva di interdifferenziale e interruttori automatici\nCambio: 1",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions (LxWxH): 6 m x 2.5 m x 2.58 m\nWalls and roof\nMaterial: sandwich panels\nInsulation: Rigid polyurethane foam\nWall thickness: 50 mm\nCeiling thickness: 40 mm\nCeiling covering: Galvanized steel sheet with Greek waves\nFloor\nStructure: Fiber cement panels\nThickness: 16 mm\nCovering: PVC\nJOINERY\nDoor: 1 satin aluminum door size 90 x 200 cm\nWindows: 2 aluminum windows size 200 x 100 cm, double glazing, 1 sash\nELECTRICITY\nLighting: 2 LED neon lights\nSockets: 2 power sockets\nPanel: 1 panel including differential switch and circuit breakers\nSwitch: 1",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions (LxPxH) : 6 m x 2,5 m x 2,58 m\nMurs et toit\nMatériau : panneaux sandwich\nIsolation : Mousse de polyuréthane rigide\nÉpaisseur du mur : 50 mm\nÉpaisseur du plafond : 40 mm\nCouverture du plafond : Tôle d'acier galvanisé à ondes grecques\nPlancher\nStructure : Panneaux en fibrociment\nÉpaisseur : 16 mm\nRevêtement : PVC\nMENUISERIE\nPorte : 1 porte en aluminium satiné dim.90 x 200 cm\nFenêtres : 2 fenêtres en aluminium dim.200 x 100 cm, double vitrage, 1 vantail\nÉLECTRICITÉ\nÉclairage : 2 néons LED\nPrises : 2 prises de courant\nTableau : 1 tableau comprenant interrupteur différentiel et disjoncteurs\nInterrupteur : 1",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões (CxLxA): 6 m x 2,5 m x 2,58 m\nParedes e teto\nMaterial: painéis sanduíche\nIsolamento: Espuma de poliuretano rígida\nEspessura da parede: 50 mm\nEspessura do teto: 40 mm\nCobertura do teto: Chapa de aço galvanizado com ondas gregas\nPiso\nEstrutura: Painéis de fibrocimento\nEspessura: 16 mm\nRevestimento: PVC\nSERRALHARIA\nPorta: 1 porta em alumínio acetinado dim.90 x 200 cm\nJanelas: 2 janelas em alumínio dim.200 x 100 cm, vidro duplo, 1 folha\nELETRICIDADE\nIluminação: 2 néon LED\nTomadas: 2 tomadas elétricas\nQuadro: 1 quadro incluindo diferencial e disjuntores\nInterruptor: 1",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones (LxAnxAl): 6 m x 2,5 m x 2,58 m\nParedes y techo\nMaterial: paneles sándwich\nAislamiento: Espuma de poliuretano rígida\nEspesor de pared: 50 mm\nEspesor de techo: 40 mm\nCubierta de techo: Chapa de acero galvanizado con ondas griegas\nSuelo\nEstructura: Paneles de fibrocemento\nEspesor: 16 mm\nRevestimiento: PVC\nCARPINTERÍA\nPuerta: 1 puerta de aluminio satinado dim.90 x 200 cm\nVentanas: 2 ventanas de aluminio dim.200 x 100 cm, doble acristalamiento, 1 hoja\nELECTRICIDAD\nIluminación: 2 neones LED\nEnchufes: 2 tomas de corriente\nCuadro: 1 cuadro que incluye diferencial y magnetotérmicos\nInterruptor: 1"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20230713_144328-scaled-1-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144328-scaled-2-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144341-scaled-1-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144434-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144446-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144454-scaled-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144516-scaled-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144601-768x576-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144612-scaled-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144627-scaled-1-768x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230713_144651-scaled-1-768x576-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11180",
                    "name" => [
                        "it" => "Modulo prefabbricato da 18 m²",
                        "en" => "18 m² Prefabricated Module",
                        "fr" => "Module préfabriqué de 18 m²",
                        "pt" => "Módulo pré-fabricado de 18 m²",
                        "es" => "Módulo prefabricado de 18 m²"
                    ],
                    "price" => "4,500.00",
                    "old_price" => null,
                    "sku" => "3276611180",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-da-18-m%c2%b2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni: LxPxA: 4,70 x 3,84 x 2,64 metri\n– Pannelli parete con isolamento in lana di roccia da 40 mm\n– 2 telai da 3,84 x 2,35 m in acciaio zincato grigio chiaro su telaio e con altezza soffitto di 2,30 m\n– Tetto in lamiera zincata, isolamento in lana di vetro da 100 mm\n– Rivestimento del soffitto in vassoio di acciaio bianco\n– Nuovo pavimento in truciolare CTBH da 22 mm\n– Nuovo rivestimento del pavimento in plastica\nFalegnameria:\n– 1 anta singola in vetro da 0,90 mt\n– 3 vetrate\n– 2 timpani e 1 lato lungo\n– 2 telai alti con sbarre e OB da 0,50 x 0,40 m con doppi vetri\nAttrezzatura :\n– Quadro elettrico generale monofase stagno\n– 3 fluorescenti doppie impermeabili\n– Faretto LED\n– 3 prese di corrente\n– Termoconvettori elettrici: 2 da 1000 W",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions: LxWxH: 4.70 x 3.84 x 2.64 meters\n– Wall panels with 40 mm rock wool insulation\n– 2 frames of 3.84 x 2.35 m in light gray galvanized steel on frame and with ceiling height of 2.30 m\n– Galvanized sheet roof, 100 mm fiberglass insulation\n– White steel tray ceiling covering\n– New 22 mm CTBH chipboard floor\n– New plastic floor covering\nJoinery:\n– 1 single glass door 0.90 m\n– 3 windows\n– 2 gables and 1 long side\n– 2 high frames with bars and OB of 0.50 x 0.40 m with double glazing\nEquipment:\n– Waterproof single-phase main electrical panel\n– 3 waterproof double fluorescent lights\n– LED spotlight\n– 3 power sockets\n– Electric convector heaters: 2 of 1000 W",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions : LxPxH : 4,70 x 3,84 x 2,64 mètres\n– Panneaux muraux avec isolation en laine de roche 40 mm\n– 2 châssis de 3,84 x 2,35 m en acier galvanisé gris clair sur cadre et avec hauteur sous plafond de 2,30 m\n– Toit en tôle galvanisée, isolation laine de verre 100 mm\n– Revêtement de plafond en bac acier blanc\n– Nouveau plancher en aggloméré CTBH 22 mm\n– Nouveau revêtement de sol plastique\nMenuiserie :\n– 1 porte vitrée simple 0,90 m\n– 3 baies vitrées\n– 2 pignons et 1 côté long\n– 2 châssis hauts avec barreaux et OB de 0,50 x 0,40 m avec double vitrage\nÉquipement :\n– Tableau électrique général monophasé étanche\n– 3 fluorescentes doubles étanches\n– Projecteur LED\n– 3 prises de courant\n– Convecteurs électriques : 2 de 1000 W",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões: CxLxA: 4,70 x 3,84 x 2,64 metros\n– Painéis de parede com isolamento em lã de rocha de 40 mm\n– 2 estruturas de 3,84 x 2,35 m em aço galvanizado cinza claro sobre estrutura e com pé-direito de 2,30 m\n– Telhado em chapa galvanizada, isolamento em lã de vidro de 100 mm\n– Revestimento de teto em bandeja de aço branco\n– Novo piso em aglomerado CTBH de 22 mm\n– Novo revestimento de piso em plástico\nCarpintaria:\n– 1 porta de vidro simples de 0,90 m\n– 3 envidraçados\n– 2 empenas e 1 lado comprido\n– 2 caixilhos altos com barras e OB de 0,50 x 0,40 m com vidro duplo\nEquipamento:\n– Quadro elétrico geral monofásico estanque\n– 3 fluorescentes duplas estanques\n– Foco LED\n– 3 tomadas elétricas\n– Termoconvetores elétricos: 2 de 1000 W",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones: LxAnxAl: 4,70 x 3,84 x 2,64 metros\n– Paneles de pared con aislamiento de lana de roca de 40 mm\n– 2 bastidores de 3,84 x 2,35 m en acero galvanizado gris claro sobre bastidor y con altura de techo de 2,30 m\n– Techo de chapa galvanizada, aislamiento de lana de vidrio de 100 mm\n– Revestimiento de techo en bandeja de acero blanco\n– Nuevo suelo de aglomerado CTBH de 22 mm\n– Nuevo revestimiento de suelo de plástico\nCarpintería:\n– 1 puerta acristalada simple de 0,90 m\n– 3 ventanales\n– 2 hastiales y 1 lado largo\n– 2 marcos altos con barrotes y OB de 0,50 x 0,40 m con doble acristalamiento\nEquipamiento:\n– Cuadro eléctrico general monofásico estanco\n– 3 fluorescentes dobles estancas\n– Foco LED\n– 3 tomas de corriente\n– Convectores eléctricos: 2 de 1000 W"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-6-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-5-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-4-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-3-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-2-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_bulle_vente_18m²-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11179",
                    "name" => [
                        "it" => "Modulo Prefabbricato da 24 mq con Sanitari",
                        "en" => "24 sqm Prefabricated Module with Sanitary Facilities",
                        "fr" => "Module Préfabriqué de 24 m² avec Sanitaires",
                        "pt" => "Módulo Pré-fabricado de 24 m² com Sanitários",
                        "es" => "Módulo Prefabricado de 24 m² con Sanitarios"
                    ],
                    "price" => "6,960.00",
                    "old_price" => "8,500.00",
                    "sku" => "3276611179",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-da-24-mq-con-sanitari/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxLxA): 8,20 x 2,92 x 2,92 m\n– 1 struttura da 8,20 x 2,92 m con altezza soffitto di 2,48 m in acciaio zincato laccato bianco\n– Pannelli parete con isolamento in schiuma poliuretanica da 40 mm\n– Tetto in lamiera zincata\n– Isolamento in lana di vetro da 100 mm\n– Rivestimento del soffitto in vassoio di acciaio bianco\n– Pavimento in resina\nFalegnameria:\n– Una porta esterna solida di 0,90 m\n– 2 telai alti da 0,40 m x 0,50 m\n– 2 porte interne isoplane da 0,80 mt\nAttrezzatura :\n– Quadro elettrico trifase\n– Doppia fluorescente con griglia e 2 fluorescenti singole stagne\n– Termoconvettori elettrici: 2 da 1000 W\n– Serbatoio acqua calda da 300 litri\n– 1 abbeveratoio con 4 punti acqua e 1 abbeveratoio con 2 punti acqua\n– Toilette inglese: 3\n– Orinatoio: 3\n– Piatto doccia: 3",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions (LxWxH): 8.20 x 2.92 x 2.92 m\n– 1 structure of 8.20 x 2.92 m with ceiling height of 2.48 m in white lacquered galvanized steel\n– Wall panels with 40 mm polyurethane foam insulation\n– Galvanized sheet roof\n– 100 mm fiberglass insulation\n– White steel tray ceiling covering\n– Resin floor\nJoinery:\n– A solid external door of 0.90 m\n– 2 high frames of 0.40 m x 0.50 m\n– 2 internal isoplane doors of 0.80 m\nEquipment:\n– Three-phase electrical panel\n– Double fluorescent with grid and 2 single waterproof fluorescent lights\n– Electric convector heaters: 2 of 1000 W\n– 300 liter hot water tank\n– 1 drinking trough with 4 water points and 1 drinking trough with 2 water points\n– English toilets: 3\n– Urinals: 3\n– Shower trays: 3",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions (LxLxH) : 8,20 x 2,92 x 2,92 m\n– 1 structure de 8,20 x 2,92 m avec hauteur sous plafond de 2,48 m en acier galvanisé laqué blanc\n– Panneaux muraux avec isolation en mousse polyuréthane de 40 mm\n– Toit en tôle galvanisée\n– Isolation en laine de verre de 100 mm\n– Revêtement de plafond en bac acier blanc\n– Sol en résine\nMenuiserie :\n– Une porte extérieure pleine de 0,90 m\n– 2 châssis hauts de 0,40 m x 0,50 m\n– 2 portes intérieures isoplane de 0,80 m\nÉquipement :\n– Tableau électrique triphasé\n– Double fluorescent avec grille et 2 fluorescents simples étanches\n– Convecteurs électriques : 2 de 1000 W\n– Ballon d'eau chaude 300 litres\n– 1 abreuvoir avec 4 points d'eau et 1 abreuvoir avec 2 points d'eau\n– Toilettes anglaises : 3\n– Urinoirs : 3\n– Receveurs de douche : 3",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões (CxLxA): 8,20 x 2,92 x 2,92 m\n– 1 estrutura de 8,20 x 2,92 m com pé-direito de 2,48 m em aço galvanizado lacado branco\n– Painéis de parede com isolamento em espuma de poliuretano de 40 mm\n– Telhado em chapa galvanizada\n– Isolamento em lã de vidro de 100 mm\n– Revestimento de teto em bandeja de aço branco\n– Piso em resina\nCarpintaria:\n– Uma porta exterior sólida de 0,90 m\n– 2 caixilhos altos de 0,40 m x 0,50 m\n– 2 portas interiores isoplane de 0,80 m\nEquipamento:\n– Quadro elétrico trifásico\n– Fluorescente duplo com grelha e 2 fluorescentes simples estanques\n– Termoconvetores elétricos: 2 de 1000 W\n– Reservatório de água quente de 300 litros\n– 1 bebedouro com 4 pontos de água e 1 bebedouro com 2 pontos de água\n– Sanitas inglesas: 3\n– Urinóis: 3\n– Bases de duche: 3",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones (LxAnxAl): 8,20 x 2,92 x 2,92 m\n– 1 estructura de 8,20 x 2,92 m con altura de techo de 2,48 m en acero galvanizado lacado blanco\n– Paneles de pared con aislamiento de espuma de poliuretano de 40 mm\n– Techo de chapa galvanizada\n– Aislamiento de lana de vidrio de 100 mm\n– Revestimiento de techo en bandeja de acero blanco\n– Suelo de resina\nCarpintería:\n– Una puerta exterior sólida de 0,90 m\n– 2 marcos altos de 0,40 m x 0,50 m\n– 2 puertas interiores isoplane de 0,80 m\nEquipamiento:\n– Cuadro eléctrico trifásico\n– Fluorescente doble con rejilla y 2 fluorescentes simples estancos\n– Convectores eléctricos: 2 de 1000 W\n– Depósito de agua caliente de 300 litros\n– 1 abrevadero con 4 puntos de agua y 1 abrevadero con 2 puntos de agua\n– Inodoros ingleses: 3\n– Urinarios: 3\n– Platos de ducha: 3"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-7-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-6-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-5-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-4-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-3-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-2-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_sanitaires_24m²-1-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11178",
                    "name" => [
                        "it" => "Modulo prefabbricato da 50 mq",
                        "en" => "50 sqm Prefabricated Module",
                        "fr" => "Module préfabriqué de 50 m²",
                        "pt" => "Módulo pré-fabricado de 50 m²",
                        "es" => "Módulo prefabricado de 50 m²"
                    ],
                    "price" => "7,900.00",
                    "old_price" => "9,400.00",
                    "sku" => "3276611178",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-da-50-mq/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 8,24 mx 6,00 mx 3,00 m\n– 2 telai da 8,24 m x 3 m x 3 m in acciaio zincato laccato bianco e un'altezza del soffitto di 2,51 m\n– Pannelli parete con isolamento in schiuma poliuretanica da 80 mm\n– Tetto in lamiera zincata\n– Rivestimento soffitto in vassoio di acciaio microforato\n– Isolamento in lana di vetro da 100 mm\n– Nuovo pavimento in truciolare CTBH da 22 mm\n– Nuovo rivestimento del pavimento in plastica\nFalegnameria:\n– 1 porta esterna in vetro da 0,90 m\n– 3 finestre di 2,00 x 1,20 m in doppi vetri e tapparella\n– 2 porte interne isoplane da 0,83 m\nAttrezzatura :\n– Quadro elettrico generale monofase\n– 8 fluorescenti a doppia griglia\n– Prese di corrente\n– Termoconvettori elettrici: 3 da 2000 W e 1 da 500 W",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions (LxWxH): 8.24 m x 6.00 m x 3.00 m\n– 2 frames of 8.24 m x 3 m x 3 m in white lacquered galvanized steel and a ceiling height of 2.51 m\n– Wall panels with 80 mm polyurethane foam insulation\n– Galvanized sheet roof\n– Micro-perforated steel tray ceiling covering\n– 100 mm fiberglass insulation\n– New 22 mm CTBH chipboard floor\n– New plastic floor covering\nJoinery:\n– 1 glass external door of 0.90 m\n– 3 windows of 2.00 x 1.20 m with double glazing and roller shutter\n– 2 internal isoplane doors of 0.83 m\nEquipment:\n– Single-phase main electrical panel\n– 8 double-grid fluorescent lights\n– Power sockets\n– Electric convector heaters: 3 of 2000 W and 1 of 500 W",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions (LxPxH) : 8,24 m x 6,00 m x 3,00 m\n– 2 châssis de 8,24 m x 3 m x 3 m en acier galvanisé laqué blanc et une hauteur sous plafond de 2,51 m\n– Panneaux muraux avec isolation en mousse polyuréthane de 80 mm\n– Toit en tôle galvanisée\n– Revêtement de plafond en bac acier microperforé\n– Isolation en laine de verre de 100 mm\n– Nouveau plancher en aggloméré CTBH de 22 mm\n– Nouveau revêtement de sol plastique\nMenuiserie :\n– 1 porte extérieure vitrée de 0,90 m\n– 3 fenêtres de 2,00 x 1,20 m en double vitrage et volet roulant\n– 2 portes intérieures isoplane de 0,83 m\nÉquipement :\n– Tableau électrique général monophasé\n– 8 fluorescentes à double grille\n– Prises de courant\n– Convecteurs électriques : 3 de 2000 W et 1 de 500 W",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões (CxLxA): 8,24 m x 6,00 m x 3,00 m\n– 2 estruturas de 8,24 m x 3 m x 3 m em aço galvanizado lacado branco e pé-direito de 2,51 m\n– Painéis de parede com isolamento em espuma de poliuretano de 80 mm\n– Telhado em chapa galvanizada\n– Revestimento de teto em bandeja de aço microperfurado\n– Isolamento em lã de vidro de 100 mm\n– Novo piso em aglomerado CTBH de 22 mm\n– Novo revestimento de piso em plástico\nCarpintaria:\n– 1 porta exterior envidraçada de 0,90 m\n– 3 janelas de 2,00 x 1,20 m com vidro duplo e persiana\n– 2 portas interiores isoplane de 0,83 m\nEquipamento:\n– Quadro elétrico geral monofásico\n– 8 fluorescentes de grelha dupla\n– Tomadas elétricas\n– Termoconvetores elétricos: 3 de 2000 W e 1 de 500 W",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones (LxAnxAl): 8,24 m x 6,00 m x 3,00 m\n– 2 bastidores de 8,24 m x 3 m x 3 m en acero galvanizado lacado blanco y una altura de techo de 2,51 m\n– Paneles de pared con aislamiento de espuma de poliuretano de 80 mm\n– Techo de chapa galvanizada\n– Revestimiento de techo en bandeja de acero microperforado\n– Aislamiento de lana de vidrio de 100 mm\n– Nuevo suelo de aglomerado CTBH de 22 mm\n– Nuevo revestimiento de suelo de plástico\nCarpintería:\n– 1 puerta exterior acristalada de 0,90 m\n– 3 ventanas de 2,00 x 1,20 m con doble acristalamiento y persiana\n– 2 puertas interiores isoplane de 0,83 m\nEquipamiento:\n– Cuadro eléctrico general monofásico\n– 8 fluorescentes de doble rejilla\n– Tomas de corriente\n– Convectores eléctricos: 3 de 2000 W y 1 de 500 W"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-4-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-2-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-3-300x300.jpg",
                        "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_1025-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11724",
                    "name" => [
                        "it" => "Modulo prefabbricato di 7 m2 senza servizi igienici (possibilità di avere più dimensioni)",
                        "en" => "7 m2 Prefabricated Module without toilet facilities (possibility of having more sizes)",
                        "fr" => "Module préfabriqué de 7 m² sans sanitaires (possibilité d'avoir d'autres dimensions)",
                        "pt" => "Módulo pré-fabricado de 7 m² sem instalações sanitárias (possibilidade de ter mais tamanhos)",
                        "es" => "Módulo prefabricado de 7 m² sin aseos (posibilidad de tener más tamaños)"
                    ],
                    "price" => "1,210.00",
                    "old_price" => "1,400.00",
                    "sku" => "3276611724",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-di-7-m2-senza-servizi-igienici-possibilita-di-avere-piu-dimensioni/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000003571-300x300.jpg",
                        "/assets/uploads/2025/11/1000003572-300x300.jpg",
                        "/assets/uploads/2025/11/1000003569-300x300.jpg",
                        "/assets/uploads/2025/11/1000003570-300x300.jpg",
                        "/assets/uploads/2025/11/1000003573-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10626",
                    "name" => [
                        "it" => "Modulo Prefabbricato Nero – Elegante, Isolato e Multifunzione",
                        "en" => "Black Prefabricated Module – Elegant, Insulated and Multifunctional",
                        "fr" => "Module Préfabriqué Noir – Élégant, Isolé et Multifonction",
                        "pt" => "Módulo Pré-fabricado Preto – Elegante, Isolado e Multifuncional",
                        "es" => "Módulo Prefabricado Negro – Elegante, Aislado y Multifuncional"
                    ],
                    "price" => "2,797.79",
                    "old_price" => "3,996.85",
                    "sku" => "3276610626",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-prefabbricato-nero-elegante-isolato-e-multifunzione/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Modulo prefabbricato nero moderno e funzionale, pronto all'uso.\nStruttura in acciaio trattato anticorrosione\nPannelli sandwich con isolamento termico e acustico\nDesign elegante e sobrio\nRapido da installare, facile da trasportare\nCompletamente personalizzabile: impianti, arredi, servizi",
                        "en" => "Modern and functional black prefabricated module, ready to use.\nAnti-corrosion treated steel structure\nSandwich panels with thermal and acoustic insulation\nElegant and sober design\nQuick to install, easy to transport\nFully customizable: systems, furnishings, services",
                        "fr" => "Module préfabriqué noir moderne et fonctionnel, prêt à l'emploi.\nStructure en acier traité anticorrosion\nPanneaux sandwich avec isolation thermique et acoustique\nDesign élégant et sobre\nRapide à installer, facile à transporter\nEntièrement personnalisable : installations, ameublement, services",
                        "pt" => "Módulo pré-fabricado preto moderno e funcional, pronto a usar.\nEstrutura em aço tratado anticorrosão\nPainéis sanduíche com isolamento térmico e acústico\nDesign elegante e sóbrio\nRápido de instalar, fácil de transportar\nCompletamente personalizável: instalações, mobiliário, serviços",
                        "es" => "Módulo prefabricado negro moderno y funcional, listo para usar.\nEstructura de acero tratado anticorrosión\nPaneles sándwich con aislamiento térmico y acústico\nDiseño elegante y sobrio\nRápido de instalar, fácil de transportar\nCompletamente personalizable: instalaciones, mobiliario, servicios"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-3-1-300x300.jpg",
                        "/assets/uploads/2025/11/2-3-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-4-1-300x300.jpg",
                        "/assets/uploads/2025/11/4-3-1-300x300.jpg",
                        "/assets/uploads/2025/11/5-3-300x300.jpg",
                        "/assets/uploads/2025/11/6-2-300x300.jpg",
                        "/assets/uploads/2025/11/7-3-300x300.jpg",
                        "/assets/uploads/2025/11/8-2-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10707",
                    "name" => [
                        "it" => "Modulo Sanitario 6×2,44 m con 5 WC",
                        "en" => "Sanitary Module 6×2.44 m with 5 Toilets",
                        "fr" => "Module Sanitaire 6×2,44 m avec 5 WC",
                        "pt" => "Módulo Sanitário 6×2,44 m com 5 WC",
                        "es" => "Módulo Sanitario 6×2,44 m con 5 WC"
                    ],
                    "price" => "2,552.55",
                    "old_price" => "3,646.50",
                    "sku" => "3276610707",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-sanitario-6x244-m-con-5-wc/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Modulo Sanitario 6×2,44 m – 5 WC Indipendenti e Lavabi Integrati\n5 cabine WC con serratura\n2 lavabi con acqua calda\nPavimento antiscivolo in PVC\nIsolamento in lana minerale\nIlluminazione LED e riscaldamento\nFinestrature a lucernario + barra gru",
                        "en" => "Sanitary Module 6×2.44 m – 5 Independent Toilets and Integrated Washbasins\n5 toilet cabins with lock\n2 washbasins with hot water\nAnti-slip PVC floor\nMineral wool insulation\nLED lighting and heating\nSkylight windows + crane bar",
                        "fr" => "Module Sanitaire 6×2,44 m – 5 WC Indépendants et Lavabos Intégrés\n5 cabines WC avec serrure\n2 lavabos avec eau chaude\nSol PVC antidérapant\nIsolation en laine minérale\nÉclairage LED et chauffage\nFenêtres en lucarne + barre de grue",
                        "pt" => "Módulo Sanitário 6×2,44 m – 5 WC Independentes e Lavatórios Integrados\n5 cabines WC com fechadura\n2 lavatórios com água quente\nPiso antiderrapante em PVC\nIsolamento em lã mineral\nIluminação LED e aquecimento\nJanelas claraboia + barra de grua",
                        "es" => "Módulo Sanitario 6×2,44 m – 5 WC Independientes y Lavabos Integrados\n5 cabinas WC con cerradura\n2 lavabos con agua caliente\nSuelo antideslizante de PVC\nAislamiento de lana mineral\nIluminación LED y calefacción\nVentanas tipo lucernario + barra grúa"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-6-1-300x300.webp",
                        "/assets/uploads/2025/11/2-8-1-300x300.webp",
                        "/assets/uploads/2025/11/3-7-1-300x300.webp",
                        "/assets/uploads/2025/11/4-7-1-300x300.webp",
                        "/assets/uploads/2025/11/5-6-1-300x300.webp",
                        "/assets/uploads/2025/11/6-4-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10865",
                    "name" => [
                        "it" => "Modulo Sanitario Compatto S1",
                        "en" => "S1 Compact Sanitary Module",
                        "fr" => "Module Sanitaire Compact S1",
                        "pt" => "Módulo Sanitário Compacto S1",
                        "es" => "Módulo Sanitario Compacto S1"
                    ],
                    "price" => "769.77",
                    "old_price" => "1,099.67",
                    "sku" => "3276610865",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-sanitario-compatto-s1/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Il Modulo Sanitario S1 è la risposta ideale per chi cerca una soluzione igienica veloce, robusta e compatta. Progettato per un uso professionale intensivo, combina praticità, comfort e facilità di trasporto.\nStruttura in acciaio zincato e pannelli isolati\nWC in ceramica + lavabo con specchio\nElettrificato, pronto all'uso in 3 settimane",
                        "en" => "The S1 Sanitary Module is the ideal answer for those looking for a fast, robust and compact hygienic solution. Designed for intensive professional use, it combines practicality, comfort and ease of transport.\nGalvanized steel structure and insulated panels\nCeramic toilet + washbasin with mirror\nElectrified, ready to use in 3 weeks",
                        "fr" => "Le Module Sanitaire S1 est la réponse idéale pour ceux qui recherchent une solution hygiénique rapide, robuste et compacte. Conçu pour un usage professionnel intensif, il allie praticité, confort et facilité de transport.\nStructure en acier galvanisé et panneaux isolés\nWC céramique + lavabo avec miroir\nÉlectrifié, prêt à l'emploi en 3 semaines",
                        "pt" => "O Módulo Sanitário S1 é a resposta ideal para quem procura uma solução higiénica rápida, robusta e compacta. Projetado para uso profissional intensivo, combina praticidade, conforto e facilidade de transporte.\nEstrutura em aço galvanizado e painéis isolados\nSanita em cerâmica + lavatório com espelho\nEletrificado, pronto a usar em 3 semanas",
                        "es" => "El Módulo Sanitario S1 es la respuesta ideal para quienes buscan una solución higiénica rápida, robusta y compacta. Diseñado para uso profesional intensivo, combina practicidad, confort y facilidad de transporte.\nEstructura de acero galvanizado y paneles aislados\nInodoro de cerámica + lavabo con espejo\nElectrificado, listo para usar en 3 semanas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-16-1-300x300.webp",
                        "/assets/uploads/2025/11/1-14-1-300x300.webp",
                        "/assets/uploads/2025/11/3-15-1-300x300.webp",
                        "/assets/uploads/2025/11/5-12-1-300x300.webp",
                        "/assets/uploads/2025/11/6-9-1-300x300.webp",
                        "/assets/uploads/2025/11/BA4-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10706",
                    "name" => [
                        "it" => "Modulo Sanitario con Doccia e WC Separati",
                        "en" => "Sanitary Module with Separate Shower and Toilet",
                        "fr" => "Module Sanitaire avec Douche et WC Séparés",
                        "pt" => "Módulo Sanitário com Duche e WC Separados",
                        "es" => "Módulo Sanitario con Ducha y WC Separados"
                    ],
                    "price" => "1,838.84",
                    "old_price" => "2,626.91",
                    "sku" => "3276610706",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-sanitario-con-doccia-e-wc-separati/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Modulo Sanitario con Doccia e WC Separati – Igiene e comfort ovunque\nStruttura in acciaio robusta\nPannelli isolanti PIR da 100 mm\nBagno completo + WC separato\nScarico elettrico incluso\nIlluminazione esterna\nRivestimento moderno in color noce",
                        "en" => "Sanitary Module with Separate Shower and Toilet – Hygiene and comfort anywhere\nRobust steel structure\n100 mm PIR insulating panels\nComplete bathroom + separate toilet\nElectric drain included\nExternal lighting\nModern walnut color cladding",
                        "fr" => "Module Sanitaire avec Douche et WC Séparés – Hygiène et confort partout\nStructure en acier robuste\nPanneaux isolants PIR 100 mm\nSalle de bain complète + WC séparé\nVidange électrique incluse\nÉclairage extérieur\nRevêtement moderne couleur noyer",
                        "pt" => "Módulo Sanitário com Duche e WC Separados – Higiene e conforto em qualquer lugar\nEstrutura robusta em aço\nPainéis isolantes PIR 100 mm\nCasa de banho completa + WC separado\nDreno elétrico incluído\nIluminação exterior\nRevestimento moderno cor nogueira",
                        "es" => "Módulo Sanitario con Ducha y WC Separados – Higiene y confort en cualquier lugar\nEstructura robusta de acero\nPaneles aislantes PIR de 100 mm\nBaño completo + WC separado\nDesagüe eléctrico incluido\nIluminación exterior\nRevestimiento moderno color nogal"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-5-1-1-300x300.webp",
                        "/assets/uploads/2025/11/1-11-300x300.jpg",
                        "/assets/uploads/2025/11/3-5-1-300x300.webp",
                        "/assets/uploads/2025/11/4-4-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10797",
                    "name" => [
                        "it" => "Modulo Sanitario PMR con WC e Doccia",
                        "en" => "PRM Sanitary Module with Toilet and Shower",
                        "fr" => "Module Sanitaire PMR avec WC et Douche",
                        "pt" => "Módulo Sanitário PMR com WC e Duche",
                        "es" => "Módulo Sanitario PMR con WC y Ducha"
                    ],
                    "price" => "1,721.72",
                    "old_price" => "2,459.60",
                    "sku" => "3276610797",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-sanitario-pmr-con-wc-e-doccia/",
                    "categories" => ["sanitario"], // inchangé
                    "short_description" => [
                        "it" => "Il modulo PMR WC + Doccia offre una soluzione sanitaria completa e accessibile, progettata per persone con mobilità ridotta. Struttura robusta, isolamento termico, comfort e conformità normativa lo rendono perfetto per ogni contesto.\nWC, lavabo e doccia adattati\nPavimento in PVC antiscivolo\nPronto per installazione e trasporto",
                        "en" => "The PRM Toilet + Shower module offers a complete and accessible sanitary solution, designed for people with reduced mobility. Robust structure, thermal insulation, comfort and regulatory compliance make it perfect for any context.\nAdapted toilet, washbasin and shower\nAnti-slip PVC floor\nReady for installation and transport",
                        "fr" => "Le module PMR WC + Douche offre une solution sanitaire complète et accessible, conçue pour les personnes à mobilité réduite. Structure robuste, isolation thermique, confort et conformité réglementaire le rendent parfait pour tout contexte.\nWC, lavabo et douche adaptés\nSol PVC antidérapant\nPrêt pour installation et transport",
                        "pt" => "O módulo PMR WC + Duche oferece uma solução sanitária completa e acessível, projetada para pessoas com mobilidade reduzida. Estrutura robusta, isolamento térmico, conforto e conformidade regulamentar tornam-no perfeito para qualquer contexto.\nSanita, lavatório e duche adaptados\nPiso antiderrapante em PVC\nPronto para instalação e transporte",
                        "es" => "El módulo PMR WC + Ducha ofrece una solución sanitaria completa y accesible, diseñada para personas con movilidad reducida. Estructura robusta, aislamiento térmico, confort y cumplimiento normativo lo hacen perfecto para cualquier contexto.\nInodoro, lavabo y ducha adaptados\nSuelo antideslizante de PVC\nListo para instalación y transporte"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/10-4-300x300.jpg",
                        "/assets/uploads/2025/11/1-15-300x300.jpg",
                        "/assets/uploads/2025/11/2-12-300x300.jpg",
                        "/assets/uploads/2025/11/3-12-300x300.jpg",
                        "/assets/uploads/2025/11/4-11-300x300.jpg",
                        "/assets/uploads/2025/11/5-10-300x300.jpg",
                        "/assets/uploads/2025/11/6-8-300x300.jpg",
                        "/assets/uploads/2025/11/7-300x300.png",
                        "/assets/uploads/2025/11/7-7-300x300.jpg",
                        "/assets/uploads/2025/11/8-6-300x300.jpg",
                        "/assets/uploads/2025/11/9-3-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11177",
                    "name" => [
                        "it" => "Modulo Sanitario WC Doppio Uomo – Donna",
                        "en" => "Double Sanitary Module Men – Women Toilet",
                        "fr" => "Module Sanitaire WC Double Homme – Femme",
                        "pt" => "Módulo Sanitário WC Duplo Homem – Mulher",
                        "es" => "Módulo Sanitario WC Doble Hombre – Mujer"
                    ],
                    "price" => "880.00",
                    "old_price" => "1,300.00",
                    "sku" => "3276611177",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-sanitario-wc-doppio-uomo-donna/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\n&nbsp;\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 2,30 x 1,35 x 2,5 m\nProfondità: 1,20 m\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nTetto: altezza 240 mm\nMovimentazione: 4 prese sul tetto per ganci di sollevamento\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nPavimento\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nAnta: 2 ante in alluminio dim.85×190 cm\nEstrattore d'aria: 1 in ogni cabina\nInstallazione sanitaria\n1 Lavandino in ceramica dim. 35 cm con rubinetto acqua fredda e specchio in ogni cabina\n1 WC all'inglese dotato di serbatoio interamente in ceramica in ogni cabina\nArrivo e uscita dell'acqua in attesa sulla parete di fondo\nELETTRICITÀ a 220 V\nIlluminazione: 1 plafoniera LED in ogni cabina\nTavolo: 1 tavolo comprensivo di interdifferenziale e interruttore automatico\nCambio: 1 in ogni cabina\nUna scatola di connessione esterna",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\n&nbsp;\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs. For all your customization needs, contato us\nSpecifications:\nDimensions (LxWxH): 2.30 x 1.35 x 2.5 m\nDepth: 1.20 m\nFrame\nDescription: Galvanized and lacquered steel\nThickness: 2 mm\nRoof: height 240 mm\nHandling: 4 roof sockets for lifting hooks\nWalls and roof\nMaterial: sandwich panels\nInsulation: Rigid polyurethane foam\nWall thickness: 50 mm\nCeiling thickness: 40 mm\nCeiling covering: Galvanized steel sheet with Greek waves\nFloor\nStructure: Fiber cement panels\nThickness: 16 mm\nCovering: PVC\nJOINERY\nDoor: 2 aluminum doors size 85×190 cm\nAir extractor: 1 in each cabin\nSanitary installation\n1 Ceramic sink size 35 cm with cold water tap and mirror in each cabin\n1 English-style toilet with fully ceramic cistern in each cabin\nWater inlet and outlet pending on the back wall\nELECTRICITY 220 V\nLighting: 1 LED ceiling light in each cabin\nPanel: 1 panel including differential switch and circuit breaker\nSwitch: 1 in each cabin\nAn external connection box",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\n&nbsp;\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez passer commande directement si ces caractéristiques vous conviennent. Pour tous vos besoins de personnalisation, contatoez-nous\nSpécifications :\nDimensions (LxPxH) : 2,30 x 1,35 x 2,5 m\nProfondeur : 1,20 m\nChâssis\nDescription : Acier galvanisé et laqué\nÉpaisseur : 2 mm\nToit : hauteur 240 mm\nManutention : 4 prises en toit pour crochets de levage\nMurs et toit\nMatériau : panneaux sandwich\nIsolation : Mousse de polyuréthane rigide\nÉpaisseur du mur : 50 mm\nÉpaisseur du plafond : 40 mm\nCouverture du plafond : Tôle d'acier galvanisé à ondes grecques\nPlancher\nStructure : Panneaux en fibrociment\nÉpaisseur : 16 mm\nRevêtement : PVC\nMENUISERIE\nPorte : 2 portes en aluminium dim.85×190 cm\nExtracteur d'air : 1 dans chaque cabine\nInstallation sanitaire\n1 Lavabo en céramique dim. 35 cm avec robinet eau froide et miroir dans chaque cabine\n1 WC anglais avec réservoir entièrement en céramique dans chaque cabine\nArrivée et sortie d'eau en attente sur le mur du fond\nÉLECTRICITÉ 220 V\nÉclairage : 1 plafonnier LED dans chaque cabine\nTableau : 1 tableau comprenant interrupteur différentiel et disjoncteur\nInterrupteur : 1 dans chaque cabine\nUne boîte de connexion externe",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\n&nbsp;\nAs características listadas abaixo são as características padrão deste módulo. Pode efetuar uma encomenda diretamente se estas características lhe satisfizerem. Para todas as suas necessidades de personalização, contatoe-nos\nEspecificações:\nDimensões (CxLxA): 2,30 x 1,35 x 2,5 m\nProfundidade: 1,20 m\nEstrutura\nDescrição: Aço galvanizado e lacado\nEspessura: 2 mm\nTeto: altura 240 mm\nMovimentação: 4 tomadas no teto para ganchos de elevação\nParedes e teto\nMaterial: painéis sanduíche\nIsolamento: Espuma de poliuretano rígida\nEspessura da parede: 50 mm\nEspessura do teto: 40 mm\nCobertura do teto: Chapa de aço galvanizado com ondas gregas\nPiso\nEstrutura: Painéis de fibrocimento\nEspessura: 16 mm\nRevestimento: PVC\nSERRALHARIA\nPorta: 2 portas em alumínio dim.85×190 cm\nExtrator de ar: 1 em cada cabine\nInstalação sanitária\n1 Lavatório em cerâmica dim. 35 cm com torneira de água fria e espelho em cada cabine\n1 Sanita inglesa com autoclismo totalmente em cerâmica em cada cabine\nChegada e saída de água em espera na parede do fundo\nELETRICIDADE 220 V\nIluminação: 1 plafon LED em cada cabine\nQuadro: 1 quadro incluindo diferencial e disjuntor\nInterruptor: 1 em cada cabine\nUma caixa de ligação externa",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\n&nbsp;\nLas características enumeradas a continuación son las características estándar de este módulo. Puede realizar un pedido directamente si estas características le satisfacen. Para todas sus necesidades de personalización, contáctenos\nEspecificaciones:\nDimensiones (LxAnxAl): 2,30 x 1,35 x 2,5 m\nProfundidad: 1,20 m\nBastidor\nDescripción: Acero galvanizado y lacado\nEspesor: 2 mm\nTecho: altura 240 mm\nManipulación: 4 tomas en techo para ganchos de elevación\nParedes y techo\nMaterial: paneles sándwich\nAislamiento: Espuma de poliuretano rígida\nEspesor de pared: 50 mm\nEspesor de techo: 40 mm\nCubierta de techo: Chapa de acero galvanizado con ondas griegas\nSuelo\nEstructura: Paneles de fibrocemento\nEspesor: 16 mm\nRevestimiento: PVC\nCARPINTERÍA\nPuerta: 2 puertas de aluminio dim.85×190 cm\nExtractor de aire: 1 en cada cabina\nInstalación sanitaria\n1 Lavabo de cerámica dim. 35 cm con grifo de agua fría y espejo en cada cabina\n1 Inodoro inglés con cisterna totalmente de cerámica en cada cabina\nLlegada y salida de agua en espera en la pared del fondo\nELECTRICIDAD 220 V\nIluminación: 1 plafón LED en cada cabina\nCuadro: 1 cuadro que incluye diferencial y disyuntor\nInterruptor: 1 en cada cabina\nUna caja de conexión externa"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/4-1-1-300x300.jpg",
                        "/assets/uploads/2025/11/1-1-2-300x300.jpg",
                        "/assets/uploads/2025/11/1-1-1-768x801-1-300x300.jpg",
                        "/assets/uploads/2025/11/2-1-701x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/3-1-741x1024-1-300x300.jpg",
                        "/assets/uploads/2025/11/5-1-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11304",
                    "name" => [
                        "it" => "MODULO WC SANITARIO SEMPLICE – COLORE GRIGIO",
                        "en" => "SIMPLE SANITARY TOILET MODULE – GRAY COLOR",
                        "fr" => "MODULE WC SANITAIRE SIMPLE – COULEUR GRISE",
                        "pt" => "MÓDULO WC SANITÁRIO SIMPLES – COR CINZA",
                        "es" => "MÓDULO WC SANITARIO SIMPLE – COLOR GRIS"
                    ],
                    "price" => "550.00",
                    "old_price" => "680.00",
                    "sku" => "3276611304",
                    "discount_percentage" => null,
                    "link" => "/product/modulo-wc-sanitario-semplice-colore-grigio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi ordinare direttamente se queste funzionalità ti soddisfano.\nBilancio\nDimensioni: 1,20 x 1,20 x 2,40 mt\nProfondità: 120 cm\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nSoffitto: altezza 240 mm\nFunzionamento: 4 prese nel tetto per ganci di sollevamento\nPareti e soffitto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 40 mm\nSpessore del tetto: 40 mm\nCopertura tetto: Lamiera di acciaio zincato con greche\nTerra\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nCarpenteria\nAnta: 1 anta in alluminio da 85 x 190 cm.\nVentola di scarico: 1\nInstallazione sanitaria\n1 lavabo in ceramica da 35 cm con rubinetto acqua fredda e specchio.\n1 WC in stile inglese dotato di serbatoio interamente in ceramica\nArrivo e partenza dell'acqua in attesa sulla parete di fondo.\nELETTRICITÀ a 220 V\nIlluminazione: 1 plafoniera LED\nTavola: 1 tavola comprensiva di interdifferenziale e interruttore.\nModifica: 1\nUna scatola di giunzione esterna",
                        "en" => "Contractual photos (Module sold in perfect condition as shown in the photos)\nThe features listed below are the standard features of this module. You can order directly if these features meet your needs.\nBudget\nDimensions: 1.20 x 1.20 x 2.40 m\nDepth: 120 cm\nFrame\nDescription: Galvanized and lacquered steel\nThickness: 2 mm\nCeiling: height 240 mm\nOperation: 4 roof sockets for lifting hooks\nWalls and ceiling\nMaterial: sandwich panels\nInsulation: Rigid polyurethane foam\nWall thickness: 40 mm\nRoof thickness: 40 mm\nRoof covering: Galvanized steel sheet with waves\nFloor\nStructure: Fiber cement panels\nThickness: 16 mm\nCovering: PVC\nJoinery\nDoor: 1 aluminum door 85 x 190 cm.\nExhaust fan: 1\nSanitary installation\n1 ceramic washbasin 35 cm with cold water tap and mirror.\n1 English-style toilet with fully ceramic cistern\nWater inlet and outlet pending on the back wall.\nELECTRICITY 220 V\nLighting: 1 LED ceiling light\nPanel: 1 panel including differential switch and switch.\nSwitch: 1\nAn external junction box",
                        "fr" => "Photos contractuelles (Module vendu en parfait état comme présenté sur les photos)\nLes caractéristiques énumérées ci-dessous sont les caractéristiques standard de ce module. Vous pouvez commander directement si ces fonctionnalités vous satisfont.\nBudget\nDimensions : 1,20 x 1,20 x 2,40 m\nProfondeur : 120 cm\nChâssis\nDescription : Acier galvanisé et laqué\nÉpaisseur : 2 mm\nPlafond : hauteur 240 mm\nFonctionnement : 4 prises en toit pour crochets de levage\nMurs et plafond\nMatériau : panneaux sandwich\nIsolation : Mousse de polyuréthane rigide\nÉpaisseur du mur : 40 mm\nÉpaisseur du toit : 40 mm\nCouverture du toit : Tôle d'acier galvanisé avec ondes\nPlancher\nStructure : Panneaux en fibrociment\nÉpaisseur : 16 mm\nRevêtement : PVC\nMenuiserie\nPorte : 1 porte en aluminium 85 x 190 cm.\nVentilateur d'extraction : 1\nInstallation sanitaire\n1 lavabo en céramique 35 cm avec robinet eau froide et miroir.\n1 WC anglais avec réservoir entièrement en céramique\nArrivée et sortie d'eau en attente sur le mur du fond.\nÉLECTRICITÉ 220 V\nÉclairage : 1 plafonnier LED\nTableau : 1 tableau comprenant interrupteur différentiel et interrupteur.\nInterrupteur : 1\nUne boîte de jonction externe",
                        "pt" => "Fotos contratuais (Módulo vendido em perfeitas condições como apresentado nas fotos)\nAs características listadas abaixo são as características padrão deste módulo. Pode encomendar diretamente se estas funcionalidades lhe satisfizerem.\nOrçamento\nDimensões: 1,20 x 1,20 x 2,40 m\nProfundidade: 120 cm\nEstrutura\nDescrição: Aço galvanizado e lacado\nEspessura: 2 mm\nTeto: altura 240 mm\nFuncionamento: 4 tomadas no teto para ganchos de elevação\nParedes e teto\nMaterial: painéis sanduíche\nIsolamento: Espuma de poliuretano rígida\nEspessura da parede: 40 mm\nEspessura do teto: 40 mm\nCobertura do teto: Chapa de aço galvanizado com ondas\nPiso\nEstrutura: Painéis de fibrocimento\nEspessura: 16 mm\nRevestimento: PVC\nCarpintaria\nPorta: 1 porta em alumínio 85 x 190 cm.\nVentilador de exaustão: 1\nInstalação sanitária\n1 lavatório em cerâmica 35 cm com torneira de água fria e espelho.\n1 Sanita inglesa com autoclismo totalmente em cerâmica\nChegada e saída de água em espera na parede do fundo.\nELETRICIDADE 220 V\nIluminação: 1 plafon LED\nQuadro: 1 quadro incluindo diferencial e interruptor.\nInterruptor: 1\nUma caixa de junção externa",
                        "es" => "Fotos contractuales (Módulo vendido en perfectas condiciones como se muestra en las fotos)\nLas características enumeradas a continuación son las características estándar de este módulo. Puede ordenar directamente si estas funcionalidades le satisfacen.\nPresupuesto\nDimensiones: 1,20 x 1,20 x 2,40 m\nProfundidad: 120 cm\nBastidor\nDescripción: Acero galvanizado y lacado\nEspesor: 2 mm\nTecho: altura 240 mm\nFuncionamiento: 4 tomas en techo para ganchos de elevación\nParedes y techo\nMaterial: paneles sándwich\nAislamiento: Espuma de poliuretano rígida\nEspesor de pared: 40 mm\nEspesor de techo: 40 mm\nCubierta de techo: Chapa de acero galvanizado con ondas\nSuelo\nEstructura: Paneles de fibrocemento\nEspesor: 16 mm\nRevestimiento: PVC\nCarpintería\nPuerta: 1 puerta de aluminio 85 x 190 cm.\nVentilador de extracción: 1\nInstalación sanitaria\n1 lavabo de cerámica 35 cm con grifo de agua fría y espejo.\n1 Inodoro inglés con cisterna totalmente de cerámica\nLlegada y salida de agua en espera en la pared del fondo.\nELECTRICIDAD 220 V\nIluminación: 1 plafón LED\nCuadro: 1 cuadro que incluye diferencial e interruptor.\nInterruptor: 1\nUna caja de conexión externa"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/5-scaled-2-300x300.jpg",
                        "/assets/uploads/2025/11/3-2-300x300.jpg",
                        "/assets/uploads/2025/11/2-scaled-2-300x300.jpg",
                        "/assets/uploads/2025/11/4-3-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "11362",
                    "name" => [
                        "it" => "MONOBLOCCO 6×2,5 USO UFFICIO",
                        "en" => "6×2.5 OFFICE MONOBLOCK",
                        "fr" => "MONOBLOC 6×2,5 USAGE BUREAU",
                        "pt" => "MONOBLOCO 6×2,5 USO ESCRITÓRIO",
                        "es" => "MONOBLOCO 6×2,5 USO OFICINA"
                    ],
                    "price" => "1,580.00",
                    "old_price" => "1,800.00",
                    "sku" => "3276611362",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-6x25-uso-ufficio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 593 x 243 cm.\nDimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 262 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare\nrivestito con lamiera grecata, rivestito con legno IDRO V100 sp.18 mm, rivestito con PVC Standard.\nSerramenti in alluminio RAL 9010.\nVetro 4 mm trasparente.\nN.1 Porta mezzo vetro, completa di barre antintrusione,\ncon maniglia e serratura standard,\ncon dimensioni 100 x 210h esterna cm.\nN.1 Finestra scorrevole, completa di barre antintrusione,\ncon dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.1 Interruttore.\nN.1 Presa\nN.2 Plafoniere 45W-LED.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE.\nN.1 Scatola esterna per allaccio impianto elettrico.",
                        "en" => "Base dimensions 593 x 243 cm.\nRoof dimensions 600 x 250 cm.\nInternal height 240 cm External height 262 cm.\nWall Panel thickness 40 mm – Polyurethane\n1 External side micro-ribbed sheet metal BG RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nHigh-load base with tubular structure\ncovered with corrugated sheet metal, covered with IDRO V100 wood thickness 18 mm, covered with Standard PVC.\nAluminum frames RAL 9010.\n4 mm clear glass.\nNo.1 Half-glass door, complete with anti-intrusion bars,\nwith handle and standard lock,\nexternal dimensions 100 x 210h cm.\nNo.1 Sliding window, complete with anti-intrusion bars,\nexternal dimensions 100 x 100h cm.\nStandard electrical system according to CEE 220V regulations, with visible PVC pipe, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets.\nNo.1 Switch.\nNo.1 Socket\nNo.2 45W-LED ceiling lights.\nNo.1 HISENSE BTU 9000 Inverter Mono Split Air Conditioner.\nNo.1 External box for electrical system connection.",
                        "fr" => "Dimensions à la base 593 x 243 cm.\nDimensions au toit 600 x 250 cm.\nHauteur intérieure 240 cm Hauteur extérieure 262 cm.\nPanneau mural ép.40 mm – Polyuréthane\n1 Côté extérieur tôle micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nPanneau de toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nSoubassement haute portance avec structure tubulaire\nrevêtu de tôle nervurée, recouvert de bois IDRO V100 ép.18 mm, revêtu de PVC Standard.\nMenuiseries aluminium RAL 9010.\nVerre 4 mm transparent.\nN.1 Porte mi-vitrée, complète avec barres anti-intrusion,\navec poignée et serrure standard,\ndimensions extérieures 100 x 210h cm.\nN.1 Fenêtre coulissante, complète avec barres anti-intrusion,\ndimensions extérieures 100 x 100h cm.\nInstallation électrique standard norme CEE 220V, avec tube PVC apparent, comprenant :\nN.1 Tableau électrique.\nN.1 Différentiel Général.\nN.1 Différentiel pour prises.\nN.1 Interrupteur.\nN.1 Prise\nN.2 Plafonniers 45W-LED.\nN.1 Climatiseur Mono Split Inverter BTU 9000-HISENSE.\nN.1 Boîte extérieure pour raccordement électrique.",
                        "pt" => "Dimensões da base 593 x 243 cm.\nDimensões do telhado 600 x 250 cm.\nAltura interna 240 cm Altura externa 262 cm.\nPainel de Parede esp.40 mm – Poliuretano\n1 Lado externo chapa micro nervurada BG RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nBase de alta capacidade com estrutura tubular\nrevestida com chapa nervurada, revestida com madeira IDRO V100 esp.18 mm, revestida com PVC Standard.\nEsquadrias de alumínio RAL 9010.\nVidro 4 mm transparente.\nN.1 Porta meio vidro, completa com barras anti-intrusão,\ncom maçaneta e fechadura padrão,\ndimensões externas 100 x 210h cm.\nN.1 Janela de correr, completa com barras anti-intrusão,\ndimensões externas 100 x 100h cm.\nSistema elétrico padrão norma CEE 220V, com tubo PVC aparente, incluindo:\nN.1 Quadro elétrico.\nN.1 Diferencial Geral.\nN.1 Diferencial para tomadas.\nN.1 Interruptor.\nN.1 Tomada\nN.2 Luminárias de teto 45W-LED.\nN.1 Ar condicionado Mono Split Inverter BTU 9000-HISENSE.\nN.1 Caixa externa para conexão elétrica.",
                        "es" => "Dimensiones de la base 593 x 243 cm.\nDimensiones del techo 600 x 250 cm.\nAltura interior 240 cm Altura exterior 262 cm.\nPanel de Pared esp.40 mm – Poliuretano\n1 Lado exterior chapa micro nervada BG RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nBase de alta capacidad con estructura tubular\nrevestida con chapa grecada, revestida con madera IDRO V100 esp.18 mm, revestida con PVC Estándar.\nCarpintería de aluminio RAL 9010.\nVidrio 4 mm transparente.\nN.1 Puerta medio vidrio, completa con barras antintrusión,\ncon manija y cerradura estándar,\ndimensiones exteriores 100 x 210h cm.\nN.1 Ventana corredera, completa con barras antintrusión,\ndimensiones exteriores 100 x 100h cm.\nInstalación eléctrica estándar norma CEE 220V, con tubo PVC visto, incluyendo:\nN.1 Cuadro eléctrico.\nN.1 Diferencial General.\nN.1 Diferencial para tomas.\nN.1 Interruptor.\nN.1 Toma\nN.2 Plafones 45W-LED.\nN.1 Aire acondicionado Mono Split Inverter BTU 9000-HISENSE.\nN.1 Caja exterior para conexión eléctrica."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/20230719_142906-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143013-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143019-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143030-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143038-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143043-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_143055-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_142854-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_142916-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_142927-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230719_142938-scaled-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11309",
                    "name" => [
                        "it" => "MONOBLOCCO USO BAGNO",
                        "en" => "BATHROOM MONOBLOCK",
                        "fr" => "MONOBLOC SANITAIRE",
                        "pt" => "MONOBLOCO BANHEIRO",
                        "es" => "MONOBLOCO BAÑO"
                    ],
                    "price" => "9,800.00",
                    "old_price" => "11,000.00",
                    "sku" => "3276611309",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-bagno/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "A corredo della progettazione, per pratica edilizia, compreso di:\nProgettazione strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nStesura relazione di calcolo secondo normativa vigente, compresa predisposizione documentazione per denuncia comunale.\nNr.1 Modulo con Dimensioni al basamento 1023 x 293 cm.\nNr.1 Modulo con Dimensioni al tetto 1030 x 300 cm.\nNr.1 Modulo con Dimensioni al tetto 1030 x 50 cm.\nH interna 270 cm H esterna 342 cm.\nPannello Parete e Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare\nrivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm Poliuretano,\nrivestito con legno CEMENTO sp.16 mm,\nrivestito con Pavimento Vinilico Modulare colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 1050 x 370 cm.\nSerramenti in Alluminio RAL 9010.\nVetro Camera 4/9/4mm Stampato.\nN.1 Porta cieca tutto pannello a due ante battenti, con maniglia e serratura standard, con dimensioni 200 x 210h est cm.\nN.4 Porte cieche tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210h est cm.\nN.2 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 100 x 210h est cm.\nN.5 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h est cm.\nN.11 Finestre con apertura a vasistas, con dimensioni 50 x 50h est cm, complete di zanzariera fissa.\nN.1 Finestra con apertura a vasistas, con dimensioni 100 x 50h est cm, complete di zanzariera fissa.\nImpianto elettrico competo di relazione, incassato, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale. N.1 Plafoniera 45W-LED. N.11 Plafoniere 19W-LED. N.7 Interruttori.\nN.7 Prese.\nN.1 Scatola per allacciamento esterno.\nImpianto Idraulico interno, con tubo MEPLA 20mm, incassato, compreso di:\nN.1 Bagno disabile completi di (Wc + Lavabo in ceramica) e relativi maniglioni.\nN.1 Lavabo in ceramica 90 cm + Struttura + N.2 Miscelatori.\nN.1 Specchio.\nN.5 Wc in ceramica + Sedile + Cassetta esterna.\nN.2 Orinatoi in ceramica. N.5 Portarotolo + Scopino.\nN.4 Lavabo in ceramica 60 cm + Colonna + Miscelatore.\nN.4 Specchio.\nN.1 Boiler elettrico 60 litri, acqua calda.\nRivestimento perimetrale esterno con sottostruttura rivestita con mattonelle di HPL (Finitura finto legno)",
                        "en" => "Included with the design, for building permit application:\nStructural design of metal building, (excluding foundation calculation or verification).\nPreparation of calculation report according to current regulations, including preparation of documentation for municipal filing.\nNo.1 Module with Base dimensions 1023 x 293 cm.\nNo.1 Module with Roof dimensions 1030 x 300 cm.\nNo.1 Module with Roof dimensions 1030 x 50 cm.\nInternal height 270 cm External height 342 cm.\nWall Panel and First Roof thickness 100 mm – Polyurethane\n1 External side SMOOTH sheet metal BG RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nHigh-load base with tubular structure\ncovered with corrugated sheet metal, covered with Wall Panel thickness 100 mm Polyurethane,\ncovered with CEMENT wood thickness 16 mm,\ncovered with Modular Vinyl Flooring LIGHT GREY color.\nSecond roof, for greater insulation, maximum airtightness and durability over time, with tubular structure and bent sheet metal, single-pitch, covered with:\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-Ribbed sheet metal BG RAL 9002.\nPerimeter eaves fascia RAL 9002, complete with downpipes to ground.\nDimensions 1050 x 370 cm.\nAluminum frames RAL 9010.\n4/9/4mm Insulated Glass Frosted.\nNo.1 Full-panel double-leaf swing blind door, with handle and standard lock, external dimensions 200 x 210h cm.\nNo.4 Full-panel single-leaf swing blind doors, with handle and standard lock, external dimensions 80 x 210h cm.\nNo.2 Full-panel single-leaf swing blind doors, with standard handle and free/occupied lock, external dimensions 100 x 210h cm.\nNo.5 Full-panel single-leaf swing blind doors, with standard handle and free/occupied lock, external dimensions 80 x 210h cm.\nNo.11 Tilting windows, external dimensions 50 x 50h cm, complete with fixed mosquito screen.\nNo.1 Tilting window, external dimensions 100 x 50h cm, complete with fixed mosquito screen.\nComplete electrical system with report, recessed, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch. No.1 45W-LED ceiling light. No.11 19W-LED ceiling lights. No.7 Switches.\nNo.7 Sockets.\nNo.1 External connection box.\nInternal plumbing system, with 20mm MEPLA pipe, recessed, including:\nNo.1 Disabled bathroom complete with (Ceramic Toilet + Sink) and related grab rails.\nNo.1 Ceramic sink 90 cm + Structure + No.2 Mixers.\nNo.1 Mirror.\nNo.5 Ceramic toilets + Seat + External cistern.\nNo.2 Ceramic urinals. No.5 Toilet roll holder + Brush holder.\nNo.4 Ceramic sink 60 cm + Column + Mixer.\nNo.4 Mirror.\nNo.1 60 liter electric water heater, hot water.\nExternal perimeter cladding with substructure covered with HPL tiles (Wood-look finish)",
                        "fr" => "Inclus avec la conception, pour permis de construire :\nConception structurelle de bâtiment métallique, (hors calcul ou vérification des fondations).\nRédaction de note de calcul selon normes en vigueur, y compris préparation documentation pour dépôt en mairie.\nNo.1 Module avec dimensions base 1023 x 293 cm.\nNo.1 Module avec dimensions toit 1030 x 300 cm.\nNo.1 Module avec dimensions toit 1030 x 50 cm.\nHauteur intérieure 270 cm Hauteur extérieure 342 cm.\nPanneau mural et premier toit ép.100 mm – Polyuréthane\n1 Côté extérieur tôle LISSE BG RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nSoubassement haute portance avec structure tubulaire\nrevêtu de tôle nervurée, revêtu de Panneau mural ép.100 mm Polyuréthane,\nrecouvert de bois CIMENT ép.16 mm,\nrecouvert de sol vinyle modulaire teinte GRIS CLAIR.\nSecond toit, pour meilleure isolation, étanchéité maximale et durabilité, avec structure tubulaire et tôlerie pliée, un seul pan, revêtu de :\nPanneau toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nBande de rive périphérique RAL 9002, complète avec descentes d'eau au sol.\nDimensions 1050 x 370 cm.\nMenuiseries Aluminium RAL 9010.\nDouble vitrage 4/9/4mm imprimé.\nNo.1 Porte pleine tout panneau deux vantaux, avec poignée et serrure standard, dimensions extérieures 200 x 210h cm.\nNo.4 Portes pleines tout panneau un vantail, avec poignée et serrure standard, dimensions extérieures 80 x 210h cm.\nNo.2 Portes pleines tout panneau un vantail, avec poignée standard et serrure libre/occupé, dimensions extérieures 100 x 210h cm.\nNo.5 Portes pleines tout panneau un vantail, avec poignée standard et serrure libre/occupé, dimensions extérieures 80 x 210h cm.\nNo.11 Fenêtres oscillo-battantes, dimensions extérieures 50 x 50h cm, complètes avec moustiquaire fixe.\nNo.1 Fenêtre oscillo-battante, dimensions extérieures 100 x 50h cm, complète avec moustiquaire fixe.\nInstallation électrique complète avec rapport, encastrée, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général. No.1 Plafonnier 45W-LED. No.11 Plafonniers 19W-LED. No.7 Interrupteurs.\nNo.7 Prises.\nNo.1 Boîte de raccordement extérieure.\nInstallation sanitaire intérieure, avec tube MEPLA 20mm, encastrée, comprenant :\nNo.1 Salle de bain handicapés complète (WC + Lavabo céramique) et barres d'appui.\nNo.1 Lavabo céramique 90 cm + Structure + No.2 Mitigeurs.\nNo.1 Miroir.\nNo.5 WC céramique + Abattant + Réservoir externe.\nNo.2 Urinoirs céramique. No.5 Porte-rouleau + Balai.\nNo.4 Lavabo céramique 60 cm + Colonne + Mitigeur.\nNo.4 Miroir.\nNo.1 Chauffe-eau électrique 60 litres, eau chaude.\nRevêtement extérieur périphérique avec sous-structure revêtue de carreaux HPL (Finition imitation bois)",
                        "pt" => "Incluído no projeto, para processo de construção:\nProjeto estrutural de edifício metálico, (excluindo cálculo ou verificação de fundações).\nElaboração de memorial de cálculo conforme normas vigentes, incluindo preparação de documentação para registro municipal.\nNo.1 Módulo com Dimensões da base 1023 x 293 cm.\nNo.1 Módulo com Dimensões do telhado 1030 x 300 cm.\nNo.1 Módulo com Dimensões do telhado 1030 x 50 cm.\nAltura interna 270 cm Altura externa 342 cm.\nPainel de Parede e Primeiro Telhado esp.100 mm – Poliuretano\n1 Lado externo chapa LISA BG RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nBase de alta capacidade com estrutura tubular\nrevestida com chapa nervurada, revestida com Painel de Parede esp.100 mm Poliuretano,\nrevestida com madeira CIMENTO esp.16 mm,\nrevestida com Piso Vinílico Modular cor CINZA CLARO.\nSegundo telhado, para maior isolamento, máxima estanqueidade e durabilidade, com estrutura tubular e chapas dobradas, uma água, revestido com:\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro Nervurada BG RAL 9002.\nFascia de beiral perimetral RAL 9002, completa com condutores de descida ao solo.\nDimensões 1050 x 370 cm.\nEsquadrias de Alumínio RAL 9010.\nVidro Insulado 4/9/4mm Fosco.\nNo.1 Porta cega painel completo duas folhas, com maçaneta e fechadura padrão, dimensões externas 200 x 210h cm.\nNo.4 Portas cegas painel completo uma folha, com maçaneta e fechadura padrão, dimensões externas 80 x 210h cm.\nNo.2 Portas cegas painel completo uma folha, com maçaneta padrão e fechadura livre/ocupado, dimensões externas 100 x 210h cm.\nNo.5 Portas cegas painel completo uma folha, com maçaneta padrão e fechadura livre/ocupado, dimensões externas 80 x 210h cm.\nNo.11 Janelas basculantes, dimensões externas 50 x 50h cm, completas com tela mosquiteiro fixa.\nNo.1 Janela basculante, dimensões externas 100 x 50h cm, completa com tela mosquiteiro fixa.\nSistema elétrico completo com laudo, embutido, incluindo:\nNo.1 Quadro Elétrico.\nNo.1 Diferencial Geral. No.1 Luminária de teto 45W-LED. No.11 Luminárias de teto 19W-LED. No.7 Interruptores.\nNo.7 Tomadas.\nNo.1 Caixa para conexão externa.\nSistema hidráulico interno, com tubo MEPLA 20mm, embutido, incluindo:\nNo.1 Banheiro para deficientes completo (Vaso sanitário + Lavatório cerâmico) e barras de apoio.\nNo.1 Lavatório cerâmico 90 cm + Estrutura + No.2 Misturadores.\nNo.1 Espelho.\nNo.5 Vasos sanitários cerâmicos + Assento + Caixa externa.\nNo.2 Mictórios cerâmicos. No.5 Porta-rolo + Escovinha.\nNo.4 Lavatório cerâmico 60 cm + Coluna + Misturador.\nNo.4 Espelho.\nNo.1 Aquecedor elétrico 60 litros, água quente.\nRevestimento externo perimetral com subestrutura revestida com placas HPL (Acabamento imitação madeira)",
                        "es" => "Incluido en el diseño, para trámites de construcción:\nDiseño estructural de edificio metálico, (excluido cálculo o verificación de cimentaciones).\nElaboración de memoria de cálculo según normativa vigente, incluyendo preparación de documentación para registro municipal.\nNo.1 Módulo con Dimensiones de base 1023 x 293 cm.\nNo.1 Módulo con Dimensiones de techo 1030 x 300 cm.\nNo.1 Módulo con Dimensiones de techo 1030 x 50 cm.\nAltura interior 270 cm Altura exterior 342 cm.\nPanel de Pared y Primer Techo esp.100 mm – Poliuretano\n1 Lado exterior chapa LISA BG RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nBase de alta capacidad con estructura tubular\nrevestida con chapa grecada, revestida con Panel de Pared esp.100 mm Poliuretano,\nrevestida con madera CEMENTO esp.16 mm,\nrevestida con Pavimento Vinílico Modular color GRIS CLARO.\nSegundo techo, para mayor aislamiento, máxima estanqueidad y durabilidad, con estructura tubular y chapa plegada, una vertiente, revestido con:\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro Nervada BG RAL 9002.\nFaja de alero perimetral RAL 9002, completa con bajantes a suelo.\nDimensiones 1050 x 370 cm.\nCarpintería de Aluminio RAL 9010.\nDoble acristalamiento 4/9/4mm impreso.\nNo.1 Puerta ciega panel completo dos hojas, con manija y cerradura estándar, dimensiones exteriores 200 x 210h cm.\nNo.4 Puertas ciegas panel completo una hoja, con manija y cerradura estándar, dimensiones exteriores 80 x 210h cm.\nNo.2 Puertas ciegas panel completo una hoja, con manija estándar y cerradura libre/ocupado, dimensiones exteriores 100 x 210h cm.\nNo.5 Puertas ciegas panel completo una hoja, con manija estándar y cerradura libre/ocupado, dimensiones exteriores 80 x 210h cm.\nNo.11 Ventanas practicables, dimensiones exteriores 50 x 50h cm, completas con mosquitero fijo.\nNo.1 Ventana practicable, dimensiones exteriores 100 x 50h cm, completa con mosquitero fijo.\nInstalación eléctrica completa con informe, empotrada, incluyendo:\nNo.1 Cuadro Eléctrico.\nNo.1 Diferencial General. No.1 Plafón 45W-LED. No.11 Plafones 19W-LED. No.7 Interruptores.\nNo.7 Tomas.\nNo.1 Caja para conexión exterior.\nInstalación hidráulica interior, con tubo MEPLA 20mm, empotrada, incluyendo:\nNo.1 Baño para discapacitados completo (Inodoro + Lavabo cerámico) y barras de apoyo.\nNo.1 Lavabo cerámico 90 cm + Estructura + No.2 Mezcladores.\nNo.1 Espejo.\nNo.5 Inodoros cerámicos + Asiento + Cisterna externa.\nNo.2 Urinarios cerámicos. No.5 Portarrollos + Escobilla.\nNo.4 Lavabo cerámico 60 cm + Columna + Mezclador.\nNo.4 Espejo.\nNo.1 Calentador eléctrico 60 litros, agua caliente.\nRevestimiento exterior perimetral con subestructura revestida con baldosas HPL (Acabado imitación madera)"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/IMG-20230623-WA0031-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133542-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230623-WA0032-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133137-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133643-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230623-WA0027-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133146-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230623-WA0028-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230623-WA0030-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133154-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230623-WA0029-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133206-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133218-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133230-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133301-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133315-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133320-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230531_133524-scaled-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "11313",
                    "name" => [
                        "it" => "MONOBLOCCO USO BOX AUTO",
                        "en" => "GARAGE BOX MONOBLOCK",
                        "fr" => "MONOBLOC BOX AUTO",
                        "pt" => "MONOBLOCO BOX AUTO",
                        "es" => "MONOBLOCO BOX AUTO"
                    ],
                    "price" => "6,100.00",
                    "old_price" => "7,200.00",
                    "sku" => "3276611313",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-box-auto/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Nr.2 Pz con Dimensioni al basamento 593 x 293 cm.\nNr.2 Pz con Dimensioni al tetto 600 x 300 cm.\nH interna 240 cm H esterna 277 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nSenza basamento.\nCompleto di Nr.10 Squadrette per fissaggio a vs basamento esistente.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 620 x 620 cm.\nN.2 Basculanti zincate, con apertura motorizzata, complete di maniglia e serratura standard e contrappesi di sicurezza.\nN.2 Finestre in alluminio RAL 9010, con vetro 4 mm trasparente, apertura scorrevole, con dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.2 Interruttori.\nN.2 Prese.\nN.4 Plafoniere 45W-LED.\nN.1 Scatola esterna per allaccio impianto elettrico.",
                        "en" => "No.2 Units with Base dimensions 593 x 293 cm.\nNo.2 Units with Roof dimensions 600 x 300 cm.\nInternal height 240 cm External height 277 cm.\nWall Panel thickness 40 mm – Polyurethane\n1 External side micro-ribbed sheet metal BG RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nWithout base.\nComplete with No.10 Brackets for fixing to your existing base.\nSecond roof, for greater insulation, maximum airtightness and durability over time, with tubular structure and bent sheet metal, single-pitch, covered with:\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-Ribbed sheet metal BG RAL 9002\nPerimeter eaves fascia RAL 9002, complete with downpipes to ground.\nDimensions 620 x 620 cm.\nNo.2 Galvanized up-and-over doors, with motorized opening, complete with handle and standard lock and safety counterweights.\nNo.2 Aluminum windows RAL 9010, with 4 mm clear glass, sliding opening, external dimensions 100 x 100h cm.\nStandard electrical system according to CEE 220V regulations, with visible PVC pipe, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets.\nNo.2 Switches.\nNo.2 Sockets.\nNo.4 45W-LED ceiling lights.\nNo.1 External box for electrical system connection.",
                        "fr" => "No.2 Unités avec dimensions base 593 x 293 cm.\nNo.2 Unités avec dimensions toit 600 x 300 cm.\nHauteur intérieure 240 cm Hauteur extérieure 277 cm.\nPanneau mural ép.40 mm – Polyuréthane\n1 Côté extérieur tôle micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nPanneau de toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nSans soubassement.\nComplet avec No.10 Équerres pour fixation sur votre base existante.\nSecond toit, pour meilleure isolation, étanchéité maximale et durabilité, avec structure tubulaire et tôlerie pliée, un seul pan, revêtu de :\nPanneau toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002\nBande de rive périphérique RAL 9002, complète avec descentes d'eau au sol.\nDimensions 620 x 620 cm.\nNo.2 Portes basculantes galvanisées, avec ouverture motorisée, complètes avec poignée et serrure standard et contrepoids de sécurité.\nNo.2 Fenêtres aluminium RAL 9010, avec verre 4 mm transparent, ouverture coulissante, dimensions extérieures 100 x 100h cm.\nInstallation électrique standard norme CEE 220V, avec tube PVC apparent, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général.\nNo.1 Différentiel pour prises.\nNo.2 Interrupteurs.\nNo.2 Prises.\nNo.4 Plafonniers 45W-LED.\nNo.1 Boîte extérieure pour raccordement électrique.",
                        "pt" => "No.2 Unidades com Dimensões da base 593 x 293 cm.\nNo.2 Unidades com Dimensões do telhado 600 x 300 cm.\nAltura interna 240 cm Altura externa 277 cm.\nPainel de Parede esp.40 mm – Poliuretano\n1 Lado externo chapa micro nervurada BG RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nSem base.\nCompleto com No.10 Cantoneiras para fixação em sua base existente.\nSegundo telhado, para maior isolamento, máxima estanqueidade e durabilidade, com estrutura tubular e chapas dobradas, uma água, revestido com:\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro Nervurada BG RAL 9002\nFascia de beiral perimetral RAL 9002, completa com condutores de descida ao solo.\nDimensões 620 x 620 cm.\nNo.2 Portas basculantes galvanizadas, com abertura motorizada, completas com maçaneta e fechadura padrão e contrapesos de segurança.\nNo.2 Janelas de alumínio RAL 9010, com vidro 4 mm transparente, abertura de correr, dimensões externas 100 x 100h cm.\nSistema elétrico padrão norma CEE 220V, com tubo PVC aparente, incluindo:\nNo.1 Quadro elétrico.\nNo.1 Diferencial Geral.\nNo.1 Diferencial para tomadas.\nNo.2 Interruptores.\nNo.2 Tomadas.\nNo.4 Luminárias de teto 45W-LED.\nNo.1 Caixa externa para conexão elétrica.",
                        "es" => "No.2 Unidades con Dimensiones de base 593 x 293 cm.\nNo.2 Unidades con Dimensiones de techo 600 x 300 cm.\nAltura interior 240 cm Altura exterior 277 cm.\nPanel de Pared esp.40 mm – Poliuretano\n1 Lado exterior chapa micro nervada BG RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nSin base.\nCompleto con No.10 Escuadras para fijación a su base existente.\nSegundo techo, para mayor aislamiento, máxima estanqueidad y durabilidad, con estructura tubular y chapa plegada, una vertiente, revestido con:\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro Nervada BG RAL 9002\nFaja de alero perimetral RAL 9002, completa con bajantes a suelo.\nDimensiones 620 x 620 cm.\nNo.2 Puertas basculantes galvanizadas, con apertura motorizada, completas con manija y cerradura estándar y contrapesos de seguridad.\nNo.2 Ventanas de aluminio RAL 9010, con vidrio 4 mm transparente, apertura corredera, dimensiones exteriores 100 x 100h cm.\nInstalación eléctrica estándar norma CEE 220V, con tubo PVC visto, incluyendo:\nNo.1 Cuadro eléctrico.\nNo.1 Diferencial General.\nNo.1 Diferencial para tomas.\nNo.2 Interruptores.\nNo.2 Tomas.\nNo.4 Plafones 45W-LED.\nNo.1 Caja exterior para conexión eléctrica."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.27.44-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.28.20-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.28.30-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11311",
                    "name" => [
                        "it" => "MONOBLOCCO USO PORTINERIA",
                        "en" => "GATEHOUSE MONOBLOCK",
                        "fr" => "MONOBLOC GUÉRITE",
                        "pt" => "MONOBLOCO PORTARIA",
                        "es" => "MONOBLOCO GARITA"
                    ],
                    "price" => "5,099.00",
                    "old_price" => "6,200.00",
                    "sku" => "3276611311",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-portineria/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "A corredo della progettazione, per pratica edilizia, compreso di:\nProgettazione strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nStesura relazione di calcolo secondo normativa vigente, compresa predisposizione documentazione per denuncia comunale.\nProgettazione di impianto idrotermosanitario, per monoblocco ad uso PORTINERIA.\nRedazione Relazione Energetica per edificio di nuova costruzione:\ncon verifiche numeriche dei parametri minimi di legge\ncon analisi delle stratigrafie di progetto e verifica dei ponti termici (assenza condensazioni interstiziali);\ncon verifica del rispetto degli obblighi di integrazione delle fonti rinnovabili\nFornitura di assistenza tecnica, per la compilazione di documentazione tecnica, di progetto impianto elettrico, a servizio di monoblocco ad uso PORTINERIA PG8608 R03.\nL'incarico comprenderà planimetrie, schema quadro elettrico, dimensionamenti e piccola relazione tecnica.\nEscluso relazione energetica e APE.\nNr.1 Modulo con dimensioni al basamento 590 x 343 cm.\nNr.1 Modulo con Dimensioni al tetto 670 x 250 cm.\nNr.1 Modulo con Dimensioni al tetto 670 x 70 cm.\nH interna 270 cm H esterna 344 cm. Tot Mq 25\nPannello Parete E Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con Pavimento Vinilico Modulare colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 7022, completo di pluviali di scarico a terra.\nDimensioni 690 x 340 cm.\nSerramenti in Alluminio RAL 7022.\nVetro Camera 4/9/4 Trasparente.\nN.1 Porta mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100x210h est cm.\nN.1 Finestre con apertura scorrevole, completa di zanzariera scorrevole, con dimensioni 200 x 100h est cm.\nN.1 Finestra fissa, con dimensioni 180 x 100h esterna cm.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 100 x 210h esterna cm.\nN.1 Finestrino bagno con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 100 x 50h esterna cm.\nEscluso impianto elettrico\nEscluso impianto fotovoltaico e linea vita (da installare in loco a vostro carico).\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Bagno disabili (Wc + Lavabo in ceramica) completo di maniglioni.\nN.1 Boiler elettrico 15 litri, acqua calda.\nRivestimento facciate perimetrali con pellicola adesiva – finitura colore CORTEN.",
                        "en" => "Included with the design, for building permit application:\nStructural design of metal building, (excluding foundation calculation or verification).\nPreparation of calculation report according to current regulations, including preparation of documentation for municipal filing.\nDesign of hydro-thermal-sanitary system, for GATEHOUSE monoblock.\nPreparation of Energy Report for new building:\nwith numerical checks of minimum legal parameters\nwith analysis of project stratigraphy and verification of thermal bridges (absence of interstitial condensation);\nwith verification of compliance with renewable energy integration obligations\nProvision of technical assistance, for the compilation of technical documentation, for the electrical system design, for GATEHOUSE monoblock PG8608 R03.\nThe assignment will include floor plans, electrical panel diagram, sizing and a small technical report.\nExcluding energy report and APE.\nNo.1 Module with base dimensions 590 x 343 cm.\nNo.1 Module with Roof dimensions 670 x 250 cm.\nNo.1 Module with Roof dimensions 670 x 70 cm.\nInternal height 270 cm External height 344 cm. Total area 25 sqm\nWall Panel and First Roof thickness 100 mm – Polyurethane\n1 External side SMOOTH sheet metal BG RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with Wall Panel thickness 100 mm Polyurethane, covered with IDRO V100 wood thickness 18 mm, covered with Modular Vinyl Flooring LIGHT GREY color.\nSecond roof, for greater insulation, maximum airtightness and durability over time, with tubular structure and bent sheet metal, single-pitch, covered with:\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-Ribbed sheet metal BG RAL 9002.\nPerimeter eaves fascia RAL 7022, complete with downpipes to ground.\nDimensions 690 x 340 cm.\nAluminum frames RAL 7022.\n4/9/4 Clear Insulated Glass.\nNo.1 Half-glass single-leaf swing door, with handle and standard lock, external dimensions 100x210h cm.\nNo.1 Sliding window, complete with sliding mosquito screen, external dimensions 200 x 100h cm.\nNo.1 Fixed window, external dimensions 180 x 100h cm.\nNo.1 Full-panel single-leaf swing blind door, with standard handle and free/occupied lock, external dimensions 100 x 210h cm.\nNo.1 Bathroom tilting window, complete with external fixed mosquito screen, external dimensions 100 x 50h cm.\nExcluding electrical system\nExcluding photovoltaic system and lifeline (to be installed on site at your expense).\nInternal plumbing system with visible MEPLA pipe, including:\nNo.1 Disabled bathroom (Ceramic Toilet + Sink) complete with grab rails.\nNo.1 15 liter electric water heater, hot water.\nPerimeter facade cladding with adhesive film – CORTEN color finish.",
                        "fr" => "Inclus avec la conception, pour permis de construire :\nConception structurelle de bâtiment métallique, (hors calcul ou vérification des fondations).\nRédaction de note de calcul selon normes en vigueur, y compris préparation documentation pour dépôt en mairie.\nConception de système hydro-thermo-sanitaire, pour monobloc GUÉRITE.\nRédaction du Rapport Énergétique pour bâtiment neuf :\navec vérifications numériques des paramètres légaux minimaux\navec analyse des stratigraphies de projet et vérification des ponts thermiques (absence de condensation interstitielle) ;\navec vérification du respect des obligations d'intégration des énergies renouvelables\nFourniture d'assistance technique, pour la compilation de documentation technique, pour le projet d'installation électrique, au service du monobloc GUÉRITE PG8608 R03.\nLa mission comprendra plans, schéma de tableau électrique, dimensionnements et petit rapport technique.\nHors rapport énergétique et APE.\nNo.1 Module avec dimensions base 590 x 343 cm.\nNo.1 Module avec dimensions toit 670 x 250 cm.\nNo.1 Module avec dimensions toit 670 x 70 cm.\nHauteur intérieure 270 cm Hauteur extérieure 344 cm. Total 25 m²\nPanneau mural et premier toit ép.100 mm – Polyuréthane\n1 Côté extérieur tôle LISSE BG RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, revêtu de Panneau mural ép.100 mm Polyuréthane, recouvert de bois IDRO V100 ép.18 mm, recouvert de sol vinyle modulaire teinte GRIS CLAIR.\nSecond toit, pour meilleure isolation, étanchéité maximale et durabilité, avec structure tubulaire et tôlerie pliée, un seul pan, revêtu de :\nPanneau toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nBande de rive périphérique RAL 7022, complète avec descentes d'eau au sol.\nDimensions 690 x 340 cm.\nMenuiseries Aluminium RAL 7022.\nDouble vitrage 4/9/4 transparent.\nNo.1 Porte mi-vitrée un vantail, avec poignée et serrure standard, dimensions extérieures 100x210h cm.\nNo.1 Fenêtre coulissante, complète avec moustiquaire coulissante, dimensions extérieures 200 x 100h cm.\nNo.1 Fenêtre fixe, dimensions extérieures 180 x 100h cm.\nNo.1 Porte pleine tout panneau un vantail, avec poignée standard et serrure libre/occupé, dimensions extérieures 100 x 210h cm.\nNo.1 Vasistas salle de bain, complet avec moustiquaire fixe extérieure, dimensions extérieures 100 x 50h cm.\nHors installation électrique\nHors installation photovoltaïque et ligne de vie (à installer sur place à votre charge).\nInstallation sanitaire intérieure avec tube MEPLA apparent, comprenant :\nNo.1 Salle de bain handicapés (WC + Lavabo céramique) complète avec barres d'appui.\nNo.1 Chauffe-eau électrique 15 litres, eau chaude.\nRevêtement façades périphériques avec film adhésif – finition couleur CORTEN.",
                        "pt" => "Incluído no projeto, para processo de construção:\nProjeto estrutural de edifício metálico, (excluindo cálculo ou verificação de fundações).\nElaboração de memorial de cálculo conforme normas vigentes, incluindo preparação de documentação para registro municipal.\nProjeto de sistema hidro-termo-sanitário, para monobloco PORTARIA.\nElaboração de Relatório Energético para edifício novo:\ncom verificações numéricas dos parâmetros legais mínimos\ncom análise das estratigrafias de projeto e verificação de pontes térmicas (ausência de condensações intersticiais);\ncom verificação do cumprimento das obrigações de integração de fontes renováveis\nFornecimento de assistência técnica, para compilação de documentação técnica, de projeto de sistema elétrico, para monobloco PORTARIA PG8608 R03.\nO encargo incluirá plantas, esquema de quadro elétrico, dimensionamentos e pequeno relatório técnico.\nExcluindo relatório energético e APE.\nNo.1 Módulo com dimensões da base 590 x 343 cm.\nNo.1 Módulo com Dimensões do telhado 670 x 250 cm.\nNo.1 Módulo com Dimensões do telhado 670 x 70 cm.\nAltura interna 270 cm Altura externa 344 cm. Total 25 m²\nPainel de Parede e Primeiro Telhado esp.100 mm – Poliuretano\n1 Lado externo chapa LISA BG RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com Painel de Parede esp.100 mm Poliuretano, revestida com madeira IDRO V100 esp.18 mm, revestida com Piso Vinílico Modular cor CINZA CLARO.\nSegundo telhado, para maior isolamento, máxima estanqueidade e durabilidade, com estrutura tubular e chapas dobradas, uma água, revestido com:\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro Nervurada BG RAL 9002.\nFascia de beiral perimetral RAL 7022, completa com condutores de descida ao solo.\nDimensões 690 x 340 cm.\nEsquadrias de Alumínio RAL 7022.\nVidro Insulado 4/9/4 Transparente.\nNo.1 Porta meio vidro uma folha, com maçaneta e fechadura padrão, dimensões externas 100x210h cm.\nNo.1 Janela de correr, completa com tela mosquiteiro de correr, dimensões externas 200 x 100h cm.\nNo.1 Janela fixa, dimensões externas 180 x 100h cm.\nNo.1 Porta cega painel completo uma folha, com maçaneta padrão e fechadura livre/ocupado, dimensões externas 100 x 210h cm.\nNo.1 Janela basculante banheiro, completa com tela mosquiteiro fixa externa, dimensões externas 100 x 50h cm.\nExcluindo sistema elétrico\nExcluindo sistema fotovoltaico e linha de vida (a instalar no local por sua conta).\nSistema hidráulico interno com tubo MEPLA aparente, incluindo:\nNo.1 Banheiro para deficientes (Vaso sanitário + Lavatório cerâmico) completo com barras de apoio.\nNo.1 Aquecedor elétrico 15 litros, água quente.\nRevestimento de fachadas perimetrais com filme adesivo – acabamento cor CORTEN.",
                        "es" => "Incluido en el diseño, para trámites de construcción:\nDiseño estructural de edificio metálico, (excluido cálculo o verificación de cimentaciones).\nElaboración de memoria de cálculo según normativa vigente, incluyendo preparación de documentación para registro municipal.\nDiseño de sistema hidro-termo-sanitario, para monoblocco GARITA.\nElaboración de Informe Energético para edificio nuevo:\ncon verificaciones numéricas de los parámetros legales mínimos\ncon análisis de las estratigrafías de proyecto y verificación de puentes térmicos (ausencia de condensaciones intersticiales);\ncon verificación del cumplimiento de las obligaciones de integración de energías renovables\nSuministro de asistencia técnica, para la compilación de documentación técnica, de proyecto de instalación eléctrica, para monoblocco GARITA PG8608 R03.\nEl encargo incluirá planos, esquema de cuadro eléctrico, dimensionamientos y pequeño informe técnico.\nExcluido informe energético y APE.\nNo.1 Módulo con dimensiones de base 590 x 343 cm.\nNo.1 Módulo con Dimensiones de techo 670 x 250 cm.\nNo.1 Módulo con Dimensiones de techo 670 x 70 cm.\nAltura interior 270 cm Altura exterior 344 cm. Total 25 m²\nPanel de Pared y Primer Techo esp.100 mm – Poliuretano\n1 Lado exterior chapa LISA BG RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con Panel de Pared esp.100 mm Poliuretano, revestida con madera IDRO V100 esp.18 mm, revestida con Pavimento Vinílico Modular color GRIS CLARO.\nSegundo techo, para mayor aislamiento, máxima estanqueidad y durabilidad, con estructura tubular y chapa plegada, una vertiente, revestido con:\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro Nervada BG RAL 9002.\nFaja de alero perimetral RAL 7022, completa con bajantes a suelo.\nDimensiones 690 x 340 cm.\nCarpintería de Aluminio RAL 7022.\nDoble acristalamiento 4/9/4 Transparente.\nNo.1 Puerta medio vidrio una hoja, con manija y cerradura estándar, dimensiones exteriores 100x210h cm.\nNo.1 Ventana corredera, completa con mosquitero corredero, dimensiones exteriores 200 x 100h cm.\nNo.1 Ventana fija, dimensiones exteriores 180 x 100h cm.\nNo.1 Puerta ciega panel completo una hoja, con manija estándar y cerradura libre/ocupado, dimensiones exteriores 100 x 210h cm.\nNo.1 Ventanilla baño practicable, completa con mosquitero fijo exterior, dimensiones exteriores 100 x 50h cm.\nExcluida instalación eléctrica\nExcluido sistema fotovoltaico y línea de vida (a instalar in situ por su cuenta).\nInstalación hidráulica interior con tubo MEPLA visto, incluyendo:\nNo.1 Baño para discapacitados (Inodoro + Lavabo cerámico) completo con barras de apoyo.\nNo.1 Calentador eléctrico 15 litros, agua caliente.\nRevestimiento de fachadas perimetrales con película adhesiva – acabado color CORTEN."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-6-300x300.jpeg",
                        "/assets/uploads/2025/11/IMG_20230808_155624_9-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_20230808_155612_5-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_20230808_155557_6-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-7-300x300.jpeg",
                        "/assets/uploads/2025/11/IMG_20230808_155553_1-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_20230808_155548_1-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-5-300x300.jpeg",
                        "/assets/uploads/2025/11/IMG_20230808_155536_2-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-4-300x300.jpeg",
                        "/assets/uploads/2025/11/IMG_20230808_155532_4-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-2-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.46-1-300x300.jpeg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.472-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.471-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.469-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.468-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.466-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.465-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.464-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.463-300x300.jpg",
                        "/assets/uploads/2025/11/20230807_131541-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_20230808_155528_4-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/20230807_131552-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2023-09-12-ore-11.48.47-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_20230808_155636_4-scaled-1-300x300.jpg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.47-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.47-2-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2023-09-12-at-11.48.47-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "11312",
                    "name" => [
                        "it" => "MONOBLOCCO USO PORTINERIA",
                        "en" => "GATEHOUSE MONOBLOCK",
                        "fr" => "MONOBLOC GUÉRITE",
                        "pt" => "MONOBLOCO PORTARIA",
                        "es" => "MONOBLOCO GARITA"
                    ],
                    "price" => "3,090.00",
                    "old_price" => "4,000.00",
                    "sku" => "3276611312",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-portineria-2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 393 x 243 cm.\nDimensioni al tetto 520 x 275 cm.\nH interna 270 cm H esterna 332 cm.\nPannello Parete sp.80 mm – Poliuretano\n1 Lato lamiera esterna Micro Nervata BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nPannello Tetto sp.80+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.80 mm Poliuretano, rivestito con legno IDRO V100 sp.18mm, rivestito con PVC Antiscivolo.\nSecondo tetto, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.80 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 7016, completo di pluviali di scarico a terra.\nSerramenti in Alluminio Freddo RAL 7016.\nVetro 4/9/4 stampato.\nN.1 Porta di Ingresso a un'anta tutto vetro, con maniglione antipanico a 1 punto, con dimensioni 100x210h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, con dimensioni 200 x 100h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, con dimensioni 100 x 100h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, completa di serramento passacarte inferiore, con dimensioni 100 x 100h est cm.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h esterna cm.\nN.1 Finestrino bagno, con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 50 x 50h esterna cm.\nImpianto elettrico norma CEE 220V, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ. N.1 Differenziale Prese. N.1 Differenziale Luci.\nN.2 Plafoniere 19W – LED. N.2 Interruttori.\nN.5 Prese.\nN.1 Presa RJ45.\nN.1 Condizionatore Mono SPLIT Inverter BTU 9000-HISENSE.\nN.1 Interfono.\nN.1 Scatola per allacciamento esterno.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Wc in ceramica + sedile + cassetta esterna.\nN.1 Portarotolo + Scopino.\nN.1 Lavabo in ceramica 60 cm + colonna + mix.\nN.1 Specchio + Mensola\nN.1 Boiler Elettrico 15 Litri Acqua Calda.\nRivestimento facciate perimetrali con pellicola adesiva – finitura colore CORTEN.",
                        "en" => "Base dimensions 393 x 243 cm.\nRoof dimensions 520 x 275 cm.\nInternal height 270 cm External height 332 cm.\nWall Panel thickness 80 mm – Polyurethane\n1 External side Micro-Ribbed sheet metal BG RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nRoof Panel thickness 80+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with Wall Panel thickness 80 mm Polyurethane, covered with IDRO V100 wood thickness 18mm, covered with Anti-slip PVC.\nSecond roof, with tubular structure and bent sheet metal, single-pitch, covered with:\nRoof Panel thickness 80 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-Ribbed sheet metal BG RAL 9002.\nPerimeter eaves fascia RAL 7016, complete with downpipes to ground.\nCold Aluminum frames RAL 7016.\n4/9/4 frosted glass.\nNo.1 Single-leaf all-glass Entrance door, with 1-point panic bar, external dimensions 100x210h cm.\nNo.1 Sliding windows, complete with sliding mosquito screen, external dimensions 200 x 100h cm.\nNo.1 Sliding windows, complete with sliding mosquito screen, external dimensions 100 x 100h cm.\nNo.1 Sliding windows, complete with sliding mosquito screen, complete with lower pass-through frame, external dimensions 100 x 100h cm.\nNo.1 Full-panel single-leaf swing blind door, with standard handle and free/occupied lock, external dimensions 80 x 210h cm.\nNo.1 Bathroom tilting window, complete with external fixed mosquito screen, external dimensions 50 x 50h cm.\nElectrical system according to CEE 220V regulations, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets. No.1 Differential switch for Sockets. No.1 Differential switch for Lights.\nNo.2 19W – LED ceiling lights. No.2 Switches.\nNo.5 Sockets.\nNo.1 RJ45 socket.\nNo.1 HISENSE BTU 9000 Inverter Mono SPLIT Air Conditioner.\nNo.1 Intercom.\nNo.1 External connection box.\nInternal plumbing system with visible MEPLA pipe, including:\nNo.1 Ceramic toilet + seat + external cistern.\nNo.1 Toilet roll holder + Brush holder.\nNo.1 Ceramic sink 60 cm + column + mixer.\nNo.1 Mirror + Shelf\nNo.1 15 Liter Electric Water Heater.\nPerimeter facade cladding with adhesive film – CORTEN color finish.",
                        "fr" => "Dimensions base 393 x 243 cm.\nDimensions toit 520 x 275 cm.\nHauteur intérieure 270 cm Hauteur extérieure 332 cm.\nPanneau mural ép.80 mm – Polyuréthane\n1 Côté extérieur tôle Micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nPanneau toit ép.80+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, revêtu de Panneau mural ép.80 mm Polyuréthane, recouvert de bois IDRO V100 ép.18mm, revêtu de PVC antidérapant.\nSecond toit, avec structure tubulaire et tôlerie pliée, un seul pan, revêtu de :\nPanneau toit ép.80 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nBande de rive périphérique RAL 7016, complète avec descentes d'eau au sol.\nMenuiseries Aluminium Froid RAL 7016.\nVerre 4/9/4 imprimé.\nNo.1 Porte d'entrée un vantail tout verre, avec barre antipanique 1 point, dimensions extérieures 100x210h cm.\nNo.1 Fenêtres coulissantes, complètes avec moustiquaire coulissante, dimensions extérieures 200 x 100h cm.\nNo.1 Fenêtres coulissantes, complètes avec moustiquaire coulissante, dimensions extérieures 100 x 100h cm.\nNo.1 Fenêtres coulissantes, complètes avec moustiquaire coulissante, complète avec chassis passe-courrier inférieur, dimensions extérieures 100 x 100h cm.\nNo.1 Porte pleine tout panneau un vantail, avec poignée standard et serrure libre/occupé, dimensions extérieures 80 x 210h cm.\nNo.1 Vasistas salle de bain, avec ouverture oscillo-battante, complet avec moustiquaire fixe extérieure, dimensions extérieures 50 x 50h cm.\nInstallation électrique norme CEE 220V, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général.\nNo.1 Différentiel pour prises. No.1 Différentiel Prises. No.1 Différentiel Lumières.\nNo.2 Plafonniers 19W – LED. No.2 Interrupteurs.\nNo.5 Prises.\nNo.1 Prise RJ45.\nNo.1 Climatiseur Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Interphone.\nNo.1 Boîte de raccordement externe.\nInstallation sanitaire intérieure avec tube MEPLA apparent, comprenant :\nNo.1 WC céramique + abattant + réservoir externe.\nNo.1 Porte-rouleau + Balai.\nNo.1 Lavabo céramique 60 cm + colonne + mitigeur.\nNo.1 Miroir + Étagère\nNo.1 Chauffe-eau électrique 15 litres.\nRevêtement façades périphériques avec film adhésif – finition couleur CORTEN.",
                        "pt" => "Dimensões da base 393 x 243 cm.\nDimensões do telhado 520 x 275 cm.\nAltura interna 270 cm Altura externa 332 cm.\nPainel de Parede esp.80 mm – Poliuretano\n1 Lado externo chapa Micro Nervurada BG RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nPainel de Telhado esp.80+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com Painel de Parede esp.80 mm Poliuretano, revestida com madeira IDRO V100 esp.18mm, revestida com PVC Antiderrapante.\nSegundo telhado, com estrutura tubular e chapas dobradas, uma água, revestido com:\nPainel de Telhado esp.80 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro Nervurada BG RAL 9002.\nFascia de beiral perimetral RAL 7016, completa com condutores de descida ao solo.\nEsquadrias de Alumínio Frio RAL 7016.\nVidro 4/9/4 fosco.\nNo.1 Porta de Entrada uma folha todo vidro, com barra antipânico 1 ponto, dimensões externas 100x210h cm.\nNo.1 Janelas de correr, completas com tela mosquiteiro de correr, dimensões externas 200 x 100h cm.\nNo.1 Janelas de correr, completas com tela mosquiteiro de correr, dimensões externas 100 x 100h cm.\nNo.1 Janelas de correr, completas com tela mosquiteiro de correr, completa com estrutura de passagem inferior, dimensões externas 100 x 100h cm.\nNo.1 Porta cega painel completo uma folha, com maçaneta padrão e fechadura livre/ocupado, dimensões externas 80 x 210h cm.\nNo.1 Janela basculante banheiro, completa com tela mosquiteiro fixa externa, dimensões externas 50 x 50h cm.\nSistema elétrico norma CEE 220V, incluindo:\nNo.1 Quadro Elétrico.\nNo.1 Diferencial Geral.\nNo.1 Diferencial para tomadas. No.1 Diferencial Tomadas. No.1 Diferencial Luzes.\nNo.2 Luminárias de teto 19W – LED. No.2 Interruptores.\nNo.5 Tomadas.\nNo.1 Tomada RJ45.\nNo.1 Ar condicionado Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Interfone.\nNo.1 Caixa para conexão externa.\nSistema hidráulico interno com tubo MEPLA aparente, incluindo:\nNo.1 Vaso sanitário cerâmico + assento + caixa externa.\nNo.1 Porta-rolo + Escovinha.\nNo.1 Lavatório cerâmico 60 cm + coluna + misturador.\nNo.1 Espelho + Prateleira\nNo.1 Aquecedor Elétrico 15 Litros Água Quente.\nRevestimento de fachadas perimetrais com filme adesivo – acabamento cor CORTEN.",
                        "es" => "Dimensiones de base 393 x 243 cm.\nDimensiones de techo 520 x 275 cm.\nAltura interior 270 cm Altura exterior 332 cm.\nPanel de Pared esp.80 mm – Poliuretano\n1 Lado exterior chapa Micro Nervada BG RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nPanel de Techo esp.80+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con Panel de Pared esp.80 mm Poliuretano, revestida con madera IDRO V100 esp.18mm, revestida con PVC Antideslizante.\nSegundo techo, con estructura tubular y chapa plegada, una vertiente, revestido con:\nPanel de Techo esp.80 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro Nervada BG RAL 9002.\nFaja de alero perimetral RAL 7016, completa con bajantes a suelo.\nCarpintería de Aluminio Frío RAL 7016.\nVidrio 4/9/4 impreso.\nNo.1 Puerta de Entrada una hoja todo vidrio, con barra antipánico 1 punto, dimensiones exteriores 100x210h cm.\nNo.1 Ventanas correderas, completas con mosquitero corredero, dimensiones exteriores 200 x 100h cm.\nNo.1 Ventanas correderas, completas con mosquitero corredero, dimensiones exteriores 100 x 100h cm.\nNo.1 Ventanas correderas, completas con mosquitero corredero, completa con marco pasacorrespondencia inferior, dimensiones exteriores 100 x 100h cm.\nNo.1 Puerta ciega panel completo una hoja, con manija estándar y cerradura libre/ocupado, dimensiones exteriores 80 x 210h cm.\nNo.1 Ventanilla baño practicable, completa con mosquitero fijo exterior, dimensiones exteriores 50 x 50h cm.\nInstalación eléctrica norma CEE 220V, incluyendo:\nNo.1 Cuadro Eléctrico.\nNo.1 Diferencial General.\nNo.1 Diferencial para tomas. No.1 Diferencial Tomas. No.1 Diferencial Luces.\nNo.2 Plafones 19W – LED. No.2 Interruptores.\nNo.5 Tomas.\nNo.1 Toma RJ45.\nNo.1 Aire acondicionado Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Interfono.\nNo.1 Caja para conexión exterior.\nInstalación hidráulica interior con tubo MEPLA visto, incluyendo:\nNo.1 Inodoro cerámico + asiento + cisterna externa.\nNo.1 Portarrollos + Escobilla.\nNo.1 Lavabo cerámico 60 cm + columna + mezclador.\nNo.1 Espejo + Estante\nNo.1 Calentador Eléctrico 15 Litros Agua Caliente.\nRevestimiento de fachadas perimetrales con película adhesiva – acabado color CORTEN."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/IMG_9467-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_9465-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_9469-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_9472-300x300.jpg",
                        "/assets/uploads/2025/11/IMG_9473-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11306",
                    "name" => [
                        "it" => "MONOBLOCCO USO UFFICIO",
                        "en" => "OFFICE MONOBLOCK",
                        "fr" => "MONOBLOC BUREAU",
                        "pt" => "MONOBLOCO ESCRITÓRIO",
                        "es" => "MONOBLOCO OFICINA"
                    ],
                    "price" => "6,900.00",
                    "old_price" => "7,600.00",
                    "sku" => "3276611306",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-ufficio/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "A corredo della progettazione, per pratica edilizia, compreso di:\nRedazione Relazione Strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nVerifica strutturale degli elementi metallici del prefabbricato, con predisposizione del fascicolo Ex Legge 1860-71 e NTC 2018 per deposito presso gli organi competenti e relazioni di calcolo che possano essere richieste, dagli organi competenti.\nPredisposizione dei moduli per la denuncia sismico-strutturale.\nRedazione Relazione Energetica, per edificio di nuova costruzione, con verifiche numeriche dei parametri minimi di legge, con analisi delle stratigrafie di progetto e verifica dei ponti termici (assenza condensazioni interstiziali), con verifica del rispetto degli obblighi, di integrazione delle fonti rinnovabili.\nRedazione Relazione Elettrotecnica, per edificio di nuova costruzione, comprensiva di progetto impianto elettrico.\nL'incarico comprenderà planimetrie, schema quadro elettrico, dimensionamenti e piccola relazione tecnica.\nEscluso relazione energetica e APE.\nLa nostra fornitura prevede anche la consegna digitale, di un FASCICOLO TECNICO comprendente:\nLa DoP (Declaration of Performance) che accompagna la marcatura CE del manufatto.\nAttestazione ISO3834-3:2005 (marcatura CE), a completa garanzia strutturale del manufatto, realizzato per vostro conto.\nRegolarità contributiva DURC.\nPiano di manutenzione ordinaria e straordinaria.\nScheda di garanzia per i componenti principali.\nDICO Elettrica e Idraulica a seconda degli allestimenti interni.\nNr.02 Moduli con Dimensioni al basamento 993 x 293 cm.\nNr.02 Moduli con Dimensioni al tetto 1000 x 300 cm.\nH interna 270 cm H esterna 661 cm.\nTot Mq 60.\nPannello Parete e Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nVerniciatura esterna pannello parete RAL6005, compresa.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm – Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con: Pavimento Vinilico Modulare Colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 1020 x 320 cm.\nSerramenti in alluminio RAL 9010. Taglio Termico.\nVetro Camera 3+3/15/3+3 mm trasparente.\nN.1 Porta mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.4 Finestre a due ante scorrevoli, complete di zanzariera scorrevole, con dimensioni 200 x 100h esterna cm.\nVetro Camera 3+3/15/3+3 mm stampato.\nN.2 Porte mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.2 Finestrini con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 50 x 50h esterna cm.\nN.3 Finestrini con apertura a vasistas, completi di zanzariera fissa esterna, con dimensioni 100 x 50h esterna cm.\nN.1 Porta cieche tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210h esterna cm.\nN.2 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h esterna cm.\nN.2 Porte a soffietto colore Grigio.\nImpianto elettrico competo di relazione, con tubo PVC Bianco a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale Prese.\nN.1 Differenziale Luci.\nN.1 Differenziale CDZ.\nN.2 Plafoniere 45W-LED.\nN.3 Plafoniere NOVALUX 35W-LED.\nN.4 Plafoniere 19W-LED.\nN.5 Interruttori.\nN.13 Prese.\nN.2 Condizionatori Mono SPLIT Inverter BTU 9000-HISENSE.\nN.1 Condizionatore Mono SPLIT Inverter BTU 12000-HISENSE.\nN.1 Scatola per allacciamento esterno.\nN.1 Impianto Fotovoltaico a tetto, dimensionato per 3Kw.\nN.1 Linea vita a tetto.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.2 Wc in ceramica + Sedile + Cassetta Esterna.\nN.2 Portarotolo + Scopino.\nN.3 Lavabo in Ceramica 60 cm + Colonna + Miscelatore.\nN.3 Specchio.\nN.2 Piatti doccia in ceramica 80 x 80 cm.\nN.2 Aste doccia + Soffione + Miscelatore.\nN.2 Boiler Elettrici 60 Litri Acqua Calda.\nN.1 Scala di accesso (esterna) a una rampa, completa di ballatoio, zincata a caldo, con struttura in tubolare e gradini grigliati, completa di parapetto.",
                        "en" => "Included with the design, for building permit application:\nPreparation of Structural Report for metal building, (excluding foundation calculation or verification).\nStructural verification of the metal elements of the prefabricated building, with preparation of the file under Ex Law 1860-71 and NTC 2018 for filing with the competent authorities and calculation reports that may be requested by the competent authorities.\nPreparation of forms for seismic-structural declaration.\nPreparation of Energy Report, for new building, with numerical checks of minimum legal parameters, analysis of project stratigraphy and verification of thermal bridges (absence of interstitial condensation), verification of compliance with renewable energy integration obligations.\nPreparation of Electrotechnical Report, for new building, including electrical system design.\nThe assignment will include floor plans, electrical panel diagram, sizing and a small technical report.\nExcluding energy report and APE.\nOur supply also includes the digital delivery of a TECHNICAL FILE comprising:\nThe DoP (Declaration of Performance) accompanying the CE marking of the product.\nISO3834-3:2005 certification (CE marking), for complete structural guarantee of the product, made on your behalf.\nDURC contribution regularity.\nOrdinary and extraordinary maintenance plan.\nWarranty sheet for main components.\nElectrical and Hydraulic DECLARATION depending on internal fittings.\nNo.02 Modules with Base dimensions 993 x 293 cm.\nNo.02 Modules with Roof dimensions 1000 x 300 cm.\nInternal height 270 cm External height 661 cm.\nTotal area 60 sqm.\nWall Panel and First Roof thickness 100 mm – Polyurethane\n1 External side SMOOTH sheet metal BG RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nExternal painting of wall panel RAL6005, included.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with Wall Panel thickness 100 mm – Polyurethane, covered with IDRO V100 wood thickness 18 mm, covered with: Modular Vinyl Flooring LIGHT GREY color.\nSecond roof, for greater insulation, maximum airtightness and durability over time, with tubular structure and bent sheet metal, single-pitch, covered with:\nRoof Panel thickness 30+35 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-Ribbed sheet metal BG RAL 9002.\nPerimeter eaves fascia RAL 9002, complete with downpipes to ground.\nDimensions 1020 x 320 cm.\nAluminum frames RAL 9010. Thermal Break.\n3+3/15/3+3 mm clear Insulated Glass.\nNo.1 Half-glass single-leaf swing door, with handle and standard lock, external dimensions 100 x 210h cm.\nNo.4 Double-leaf sliding windows, complete with sliding mosquito screen, external dimensions 200 x 100h cm.\n3+3/15/3+3 mm frosted Insulated Glass.\nNo.2 Half-glass single-leaf swing doors, with handle and standard lock, external dimensions 100 x 210h cm.\nNo.2 Tilting windows, complete with external fixed mosquito screen, external dimensions 50 x 50h cm.\nNo.3 Tilting windows, complete with external fixed mosquito screen, external dimensions 100 x 50h cm.\nNo.1 Full-panel single-leaf swing blind door, with handle and standard lock, external dimensions 80 x 210h cm.\nNo.2 Full-panel single-leaf swing blind doors, with standard handle and free/occupied lock, external dimensions 80 x 210h cm.\nNo.2 Folding doors Gray color.\nComplete electrical system with report, with visible White PVC pipe, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for Sockets.\nNo.1 Differential switch for Lights.\nNo.1 Differential switch for socket outlets.\nNo.2 45W-LED ceiling lights.\nNo.3 NOVALUX 35W-LED ceiling lights.\nNo.4 19W-LED ceiling lights.\nNo.5 Switches.\nNo.13 Sockets.\nNo.2 HISENSE BTU 9000 Inverter Mono SPLIT Air Conditioners.\nNo.1 HISENSE BTU 12000 Inverter Mono SPLIT Air Conditioner.\nNo.1 External connection box.\nNo.1 Rooftop Photovoltaic system, sized for 3kW.\nNo.1 Roof lifeline.\nInternal plumbing system with visible MEPLA pipe, including:\nNo.2 Ceramic toilets + Seat + External Cistern.\nNo.2 Toilet roll holder + Brush holder.\nNo.3 Ceramic Sinks 60 cm + Column + Mixer.\nNo.3 Mirror.\nNo.2 Ceramic shower trays 80 x 80 cm.\nNo.2 Shower rods + Shower head + Mixer.\nNo.2 Electric Water Heaters 60 Liters.\nNo.1 Single-flight access staircase (external), complete with landing, hot-dip galvanized, with tubular structure and gridded steps, complete with parapet.",
                        "fr" => "Inclus avec la conception, pour permis de construire :\nRédaction du Rapport Structurel pour bâtiment métallique, (hors calcul ou vérification des fondations).\nVérification structurelle des éléments métalliques du préfabriqué, avec préparation du dossier Ex Loi 1860-71 et NTC 2018 pour dépôt auprès des autorités compétentes et notes de calcul pouvant être demandées par les autorités compétentes.\nPréparation des formulaires pour déclaration sismo-structurelle.\nRédaction du Rapport Énergétique, pour bâtiment neuf, avec vérifications numériques des paramètres légaux minimaux, analyse des stratigraphies de projet et vérification des ponts thermiques (absence de condensations interstitielles), vérification du respect des obligations d'intégration des énergies renouvelables.\nRédaction du Rapport Électrotechnique, pour bâtiment neuf, incluant le projet d'installation électrique.\nLa mission comprendra plans, schéma de tableau électrique, dimensionnements et petit rapport technique.\nHors rapport énergétique et APE.\nNotre fourniture comprend également la livraison numérique d'un DOSSIER TECHNIQUE comprenant :\nLa DoP (Declaration of Performance) accompagnant le marquage CE du produit.\nAttestation ISO3834-3:2005 (marquage CE), garantie structurelle complète du produit, réalisé pour votre compte.\nRégularité contributive DURC.\nPlan de maintenance ordinaire et extraordinaire.\nFiche de garantie pour les composants principaux.\nDÉCLARATION Électrique et Hydraulique selon les aménagements intérieurs.\nNo.02 Modules avec dimensions base 993 x 293 cm.\nNo.02 Modules avec dimensions toit 1000 x 300 cm.\nHauteur intérieure 270 cm Hauteur extérieure 661 cm.\nSurface totale 60 m².\nPanneau mural et premier toit ép.100 mm – Polyuréthane\n1 Côté extérieur tôle LISSE BG RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nPeinture extérieure panneau mural RAL6005, incluse.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, revêtu de Panneau mural ép.100 mm – Polyuréthane, recouvert de bois IDRO V100 ép.18 mm, recouvert de : Sol vinyle modulaire teinte GRIS CLAIR.\nSecond toit, pour meilleure isolation, étanchéité maximale et durabilité, avec structure tubulaire et tôlerie pliée, un seul pan, revêtu de :\nPanneau toit ép.30+35 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nBande de rive périphérique RAL 9002, complète avec descentes d'eau au sol.\nDimensions 1020 x 320 cm.\nMenuiseries aluminium RAL 9010. Rupture de Pont Thermique.\nDouble vitrage 3+3/15/3+3 mm transparent.\nNo.1 Porte mi-vitrée un vantail, avec poignée et serrure standard, dimensions extérieures 100 x 210h cm.\nNo.4 Fenêtres coulissantes deux vantaux, complètes avec moustiquaire coulissante, dimensions extérieures 200 x 100h cm.\nDouble vitrage 3+3/15/3+3 mm imprimé.\nNo.2 Portes mi-vitrées un vantail, avec poignée et serrure standard, dimensions extérieures 100 x 210h cm.\nNo.2 Vasistas, complets avec moustiquaire fixe extérieure, dimensions extérieures 50 x 50h cm.\nNo.3 Vasistas, complets avec moustiquaire fixe extérieure, dimensions extérieures 100 x 50h cm.\nNo.1 Porte pleine tout panneau un vantail, avec poignée et serrure standard, dimensions extérieures 80 x 210h cm.\nNo.2 Portes pleines tout panneau un vantail, avec poignée standard et serrure libre/occupé, dimensions extérieures 80 x 210h cm.\nNo.2 Portes accordéon couleur Gris.\nInstallation électrique complète avec rapport, avec tube PVC Blanc apparent, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général.\nNo.1 Différentiel Prises.\nNo.1 Différentiel Lumières.\nNo.1 Différentiel pour prises.\nNo.2 Plafonniers 45W-LED.\nNo.3 Plafonniers NOVALUX 35W-LED.\nNo.4 Plafonniers 19W-LED.\nNo.5 Interrupteurs.\nNo.13 Prises.\nNo.2 Climatiseurs Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Climatiseur Mono SPLIT Inverter BTU 12000-HISENSE.\nNo.1 Boîte de raccordement externe.\nNo.1 Installation photovoltaïque en toiture, dimensionnée pour 3kW.\nNo.1 Ligne de vie en toiture.\nInstallation sanitaire intérieure avec tube MEPLA apparent, comprenant :\nNo.2 WC céramique + Abattant + Réservoir Externe.\nNo.2 Porte-rouleau + Balai.\nNo.3 Lavabo céramique 60 cm + Colonne + Mitigeur.\nNo.3 Miroir.\nNo.2 Receveurs de douche céramique 80 x 80 cm.\nNo.2 Barres de douche + Pommeau + Mitigeur.\nNo.2 Chauffe-eau électriques 60 litres.\nNo.1 Escalier d'accès (extérieur) une volée, complet avec palier, galvanisé à chaud, avec structure tubulaire et marches grillagées, complet avec garde-corps.",
                        "pt" => "Incluído no projeto, para processo de construção:\nElaboração de Relatório Estrutural para edifício metálico, (excluindo cálculo ou verificação de fundações).\nVerificação estrutural dos elementos metálicos do pré-fabricado, com preparação do processo Ex Lei 1860-71 e NTC 2018 para depósito junto aos órgãos competentes e memoriais de cálculo que possam ser solicitados pelos órgãos competentes.\nPreparação dos formulários para declaração sísmico-estrutural.\nElaboração de Relatório Energético, para edifício novo, com verificações numéricas dos parâmetros legais mínimos, análise das estratigrafias de projeto e verificação de pontes térmicas (ausência de condensações intersticiais), verificação do cumprimento das obrigações de integração de fontes renováveis.\nElaboração de Relatório Eletrotécnico, para edifício novo, incluindo projeto de sistema elétrico.\nO encargo incluirá plantas, esquema de quadro elétrico, dimensionamentos e pequeno relatório técnico.\nExcluindo relatório energético e APE.\nNosso fornecimento também inclui a entrega digital de um DOSSIÊ TÉCNICO contendo:\nA DoP (Declaração de Desempenho) que acompanha a marcação CE do produto.\nAtestado ISO3834-3:2005 (marcação CE), garantia estrutural completa do produto, realizado em seu nome.\nRegularidade contributiva DURC.\nPlano de manutenção ordinária e extraordinária.\nFicha de garantia para os componentes principais.\nDECLARAÇÃO Elétrica e Hidráulica conforme acabamentos internos.\nNo.02 Módulos com Dimensões da base 993 x 293 cm.\nNo.02 Módulos com Dimensões do telhado 1000 x 300 cm.\nAltura interna 270 cm Altura externa 661 cm.\nÁrea total 60 m².\nPainel de Parede e Primeiro Telhado esp.100 mm – Poliuretano\n1 Lado externo chapa LISA BG RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nPintura externa painel parede RAL6005, incluída.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com Painel de Parede esp.100 mm – Poliuretano, revestida com madeira IDRO V100 esp.18 mm, revestida com: Piso Vinílico Modular cor CINZA CLARO.\nSegundo telhado, para maior isolamento, máxima estanqueidade e durabilidade, com estrutura tubular e chapas dobradas, uma água, revestido com:\nPainel de Telhado esp.30+35 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro Nervurada BG RAL 9002.\nFascia de beiral perimetral RAL 9002, completa com condutores de descida ao solo.\nDimensões 1020 x 320 cm.\nEsquadrias de alumínio RAL 9010. Corte Térmico.\nVidro Insulado 3+3/15/3+3 mm transparente.\nNo.1 Porta meio vidro uma folha, com maçaneta e fechadura padrão, dimensões externas 100 x 210h cm.\nNo.4 Janelas de correr duas folhas, completas com tela mosquiteiro de correr, dimensões externas 200 x 100h cm.\nVidro Insulado 3+3/15/3+3 mm fosco.\nNo.2 Portas meio vidro uma folha, com maçaneta e fechadura padrão, dimensões externas 100 x 210h cm.\nNo.2 Janelas basculantes, completas com tela mosquiteiro fixa externa, dimensões externas 50 x 50h cm.\nNo.3 Janelas basculantes, completas com tela mosquiteiro fixa externa, dimensões externas 100 x 50h cm.\nNo.1 Porta cega painel completo uma folha, com maçaneta e fechadura padrão, dimensões externas 80 x 210h cm.\nNo.2 Portas cegas painel completo uma folha, com maçaneta padrão e fechadura livre/ocupado, dimensões externas 80 x 210h cm.\nNo.2 Portas sanfonadas cor Cinza.\nSistema elétrico completo com laudo, com tubo PVC Branco aparente, incluindo:\nNo.1 Quadro Elétrico.\nNo.1 Diferencial Geral.\nNo.1 Diferencial Tomadas.\nNo.1 Diferencial Luzes.\nNo.1 Diferencial para tomadas.\nNo.2 Luminárias de teto 45W-LED.\nNo.3 Luminárias de teto NOVALUX 35W-LED.\nNo.4 Luminárias de teto 19W-LED.\nNo.5 Interruptores.\nNo.13 Tomadas.\nNo.2 Ar condicionado Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Ar condicionado Mono SPLIT Inverter BTU 12000-HISENSE.\nNo.1 Caixa para conexão externa.\nNo.1 Sistema Fotovoltaico no telhado, dimensionado para 3kW.\nNo.1 Linha de vida no telhado.\nSistema hidráulico interno com tubo MEPLA aparente, incluindo:\nNo.2 Vasos sanitários cerâmicos + Assento + Caixa Externa.\nNo.2 Porta-rolo + Escovinha.\nNo.3 Lavatório Cerâmico 60 cm + Coluna + Misturador.\nNo.3 Espelho.\nNo.2 Bases de chuveiro cerâmicas 80 x 80 cm.\nNo.2 Barras de chuveiro + Chuveiro + Misturador.\nNo.2 Aquecedores Elétricos 60 Litros.\nNo.1 Escada de acesso (externa) um lance, completa com patamar, galvanizada a quente, com estrutura tubular e degraus gradeados, completa com parapeito.",
                        "es" => "Incluido en el diseño, para trámites de construcción:\nElaboración de Informe Estructural para edificio metálico, (excluido cálculo o verificación de cimentaciones).\nVerificación estructural de los elementos metálicos del prefabricado, con preparación del expediente Ex Ley 1860-71 y NTC 2018 para depósito ante los órganos competentes y memorias de cálculo que puedan ser solicitadas por los órganos competentes.\nPreparación de los formularios para declaración sísmico-estructural.\nElaboración de Informe Energético, para edificio nuevo, con verificaciones numéricas de los parámetros legales mínimos, análisis de las estratigrafías de proyecto y verificación de puentes térmicos (ausencia de condensaciones intersticiales), verificación del cumplimiento de las obligaciones de integración de energías renovables.\nElaboración de Informe Electrotécnico, para edificio nuevo, incluyendo proyecto de instalación eléctrica.\nEl encargo incluirá planos, esquema de cuadro eléctrico, dimensionamientos y pequeño informe técnico.\nExcluido informe energético y APE.\nNuestro suministro también incluye la entrega digital de un EXPEDIENTE TÉCNICO que comprende:\nLa DoP (Declaración de Prestaciones) que acompaña al marcado CE del producto.\nCertificación ISO3834-3:2005 (marcado CE), garantía estructural completa del producto, realizado por su cuenta.\nRegularidad contributiva DURC.\nPlan de mantenimiento ordinario y extraordinario.\nFicha de garantía para los componentes principales.\nDECLARACIÓN Eléctrica e Hidráulica según los acabados interiores.\nNo.02 Módulos con Dimensiones de base 993 x 293 cm.\nNo.02 Módulos con Dimensiones de techo 1000 x 300 cm.\nAltura interior 270 cm Altura exterior 661 cm.\nSuperficie total 60 m².\nPanel de Pared y Primer Techo esp.100 mm – Poliuretano\n1 Lado exterior chapa LISA BG RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nPintura exterior panel pared RAL6005, incluida.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con Panel de Pared esp.100 mm – Poliuretano, revestida con madera IDRO V100 esp.18 mm, revestida con: Pavimento Vinílico Modular color GRIS CLARO.\nSegundo techo, para mayor aislamiento, máxima estanqueidad y durabilidad, con estructura tubular y chapa plegada, una vertiente, revestido con:\nPanel de Techo esp.30+35 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro Nervada BG RAL 9002.\nFaja de alero perimetral RAL 9002, completa con bajantes a suelo.\nDimensiones 1020 x 320 cm.\nCarpintería de aluminio RAL 9010. Rotura de Puente Térmico.\nDoble acristalamiento 3+3/15/3+3 mm transparente.\nNo.1 Puerta medio vidrio una hoja, con manija y cerradura estándar, dimensiones exteriores 100 x 210h cm.\nNo.4 Ventanas correderas dos hojas, completas con mosquitero corredero, dimensiones exteriores 200 x 100h cm.\nDoble acristalamiento 3+3/15/3+3 mm impreso.\nNo.2 Puertas medio vidrio una hoja, con manija y cerradura estándar, dimensiones exteriores 100 x 210h cm.\nNo.2 Ventanas practicables, completas con mosquitero fijo exterior, dimensiones exteriores 50 x 50h cm.\nNo.3 Ventanas practicables, completas con mosquitero fijo exterior, dimensiones exteriores 100 x 50h cm.\nNo.1 Puerta ciega panel completo una hoja, con manija y cerradura estándar, dimensiones exteriores 80 x 210h cm.\nNo.2 Puertas ciegas panel completo una hoja, con manija estándar y cerradura libre/ocupado, dimensiones exteriores 80 x 210h cm.\nNo.2 Puertas plegables color Gris.\nInstalación eléctrica completa con informe, con tubo PVC Blanco visto, incluyendo:\nNo.1 Cuadro Eléctrico.\nNo.1 Diferencial General.\nNo.1 Diferencial Tomas.\nNo.1 Diferencial Luces.\nNo.1 Diferencial para tomas.\nNo.2 Plafones 45W-LED.\nNo.3 Plafones NOVALUX 35W-LED.\nNo.4 Plafones 19W-LED.\nNo.5 Interruptores.\nNo.13 Tomas.\nNo.2 Aires acondicionados Mono SPLIT Inverter BTU 9000-HISENSE.\nNo.1 Aire acondicionado Mono SPLIT Inverter BTU 12000-HISENSE.\nNo.1 Caja para conexión exterior.\nNo.1 Instalación Fotovoltaica en techo, dimensionada para 3kW.\nNo.1 Línea de vida en techo.\nInstalación hidráulica interior con tubo MEPLA visto, incluyendo:\nNo.2 Inodoros cerámicos + Asiento + Cisterna Externa.\nNo.2 Portarrollos + Escobilla.\nNo.3 Lavabo Cerámico 60 cm + Columna + Mezclador.\nNo.3 Espejo.\nNo.2 Platos de ducha cerámicos 80 x 80 cm.\nNo.2 Barras de ducha + Alcachofa + Mezclador.\nNo.2 Calentadores Eléctricos 60 Litros.\nNo.1 Escalera de acceso (exterior) un tramo, completa con rellano, galvanizada en caliente, con estructura tubular y peldaños de rejilla, completa con barandilla."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_4eb976df-1-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_4eb976df-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_806e37ee-300x300.jpg",
                        "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_e05b6fcf-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],

                [
                    "id" => "11310",
                    "name" => [
                        "it" => "MONOBLOCCO USO UFFICIO",
                        "en" => "OFFICE MONOBLOCK",
                        "fr" => "MONOBLOC BUREAU",
                        "pt" => "MONOBLOCO ESCRITÓRIO",
                        "es" => "MONOBLOCO OFICINA"
                    ],
                    "price" => "3,390.00",
                    "old_price" => "4,000.00",
                    "sku" => "3276611310",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-ufficio-2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 593 x 243 cm. Dimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 272 cm.\nPannello parete sp.40 mm – Poliuretano.\n1 Lamiera esterna Micro Nervata BG RAL 9002.\n1 Lamiera interna Micro Nervata BG RAL 9002.\nPannello tetto sp.30+35 mm – Poliuretano.\n1 Lamiera esterna 5 greche BG RAL 9002.\n1 Lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare zincato, rivestita con lamiere grecate zincate, rivestito con legno Idro V100 sp.18 mm, rivestito con PVC Standard.\nSerramenti in alluminio RAL 9010.\nVetro antisfondamento trasparente.\nN.1 Porta di Ingresso tutto vetro a due ante battenti, con maniglia e serratura standard, con dimensioni 220 x 240h esterna cm.\nN.3 Finestroni fissi con dimensioni 170 x 240h esterna cm.\nImpianto Elettrico Norma CEE 200V, con tubo PVC Bianco a vista,compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.1 Interruttore.\nN.1 Presa.\nN.2 Plafoniere 45W-LED.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE. N.1 Scatola per allacciamento esterno.",
                        "en" => "Base dimensions 593 x 243 cm. Roof dimensions 600 x 250 cm.\nInternal height 240 cm External height 272 cm.\nWall Panel thickness 40 mm – Polyurethane.\n1 External Micro-Ribbed sheet metal BG RAL 9002.\n1 Internal Micro-Ribbed sheet metal BG RAL 9002.\nRoof Panel thickness 30+35 mm – Polyurethane.\n1 External 5-corrugated sheet metal BG RAL 9002.\n1 Internal micro-ribbed sheet metal BG RAL 9002.\nHigh-load base with galvanized tubular structure, covered with galvanized corrugated sheets, covered with Idro V100 wood thickness 18 mm, covered with Standard PVC.\nAluminum frames RAL 9010.\nClear anti-break glass.\nNo.1 All-glass double-leaf swing Entrance door, with handle and standard lock, external dimensions 220 x 240h cm.\nNo.3 Fixed large windows with external dimensions 170 x 240h cm.\nElectrical System according to CEE 200V regulations, with visible White PVC pipe, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets.\nNo.1 Switch.\nNo.1 Socket.\nNo.2 45W-LED ceiling lights.\nNo.1 HISENSE BTU 9000 Inverter Mono Split Air Conditioner. No.1 External connection box.",
                        "fr" => "Dimensions base 593 x 243 cm. Dimensions toit 600 x 250 cm.\nHauteur intérieure 240 cm Hauteur extérieure 272 cm.\nPanneau mural ép.40 mm – Polyuréthane.\n1 Tôle extérieure Micro-nervurée BG RAL 9002.\n1 Tôle intérieure Micro-nervurée BG RAL 9002.\nPanneau toit ép.30+35 mm – Polyuréthane.\n1 Tôle extérieure 5 nervures BG RAL 9002.\n1 Tôle intérieure micro-nervurée BG RAL 9002.\nSoubassement haute portance avec structure tubulaire galvanisée, revêtue de tôles nervurées galvanisées, recouvert de bois Idro V100 ép.18 mm, revêtu de PVC Standard.\nMenuiseries aluminium RAL 9010.\nVerre anti-effraction transparent.\nNo.1 Porte d'entrée tout verre deux vantaux, avec poignée et serrure standard, dimensions extérieures 220 x 240h cm.\nNo.3 Grandes fenêtres fixes dimensions extérieures 170 x 240h cm.\nInstallation électrique norme CEE 200V, avec tube PVC Blanc apparent, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général.\nNo.1 Différentiel pour prises.\nNo.1 Interrupteur.\nNo.1 Prise.\nNo.2 Plafonniers 45W-LED.\nNo.1 Climatiseur Mono Split Inverter BTU 9000-HISENSE. No.1 Boîte de raccordement externe.",
                        "pt" => "Dimensões da base 593 x 243 cm. Dimensões do telhado 600 x 250 cm.\nAltura interna 240 cm Altura externa 272 cm.\nPainel de Parede esp.40 mm – Poliuretano.\n1 Chapa externa Micro Nervurada BG RAL 9002.\n1 Chapa interna Micro Nervurada BG RAL 9002.\nPainel de Telhado esp.30+35 mm – Poliuretano.\n1 Chapa externa 5 nervuras BG RAL 9002.\n1 Chapa interna micro nervurada BG RAL 9002.\nBase de alta capacidade com estrutura tubular galvanizada, revestida com chapas nervuradas galvanizadas, revestida com madeira Idro V100 esp.18 mm, revestida com PVC Standard.\nEsquadrias de alumínio RAL 9010.\nVidro antivandalismo transparente.\nNo.1 Porta de Entrada todo vidro duas folhas, com maçaneta e fechadura padrão, dimensões externas 220 x 240h cm.\nNo.3 Grandes janelas fixas dimensões externas 170 x 240h cm.\nSistema Elétrico Norma CEE 200V, com tubo PVC Branco aparente, incluindo:\nNo.1 Quadro Elétrico.\nNo.1 Diferencial Geral.\nNo.1 Diferencial para tomadas.\nNo.1 Interruptor.\nNo.1 Tomada.\nNo.2 Luminárias de teto 45W-LED.\nNo.1 Ar condicionado Mono Split Inverter BTU 9000-HISENSE. No.1 Caixa para conexão externa.",
                        "es" => "Dimensiones base 593 x 243 cm. Dimensiones techo 600 x 250 cm.\nAltura interior 240 cm Altura exterior 272 cm.\nPanel de Pared esp.40 mm – Poliuretano.\n1 Chapa exterior Micro Nervada BG RAL 9002.\n1 Chapa interior Micro Nervada BG RAL 9002.\nPanel de Techo esp.30+35 mm – Poliuretano.\n1 Chapa exterior 5 grecas BG RAL 9002.\n1 Chapa interior micro nervada BG RAL 9002.\nBase de alta capacidad con estructura tubular galvanizada, revestida con chapas grecadas galvanizadas, revestida con madera Idro V100 esp.18 mm, revestida con PVC Estándar.\nCarpintería de aluminio RAL 9010.\nVidrio antivandalismo transparente.\nNo.1 Puerta de Entrada todo vidrio dos hojas, con manija y cerradura estándar, dimensiones exteriores 220 x 240h cm.\nNo.3 Grandes ventanales fijos dimensiones exteriores 170 x 240h cm.\nInstalación Eléctrica Norma CEE 200V, con tubo PVC Blanco visto, incluyendo:\nNo.1 Cuadro Eléctrico.\nNo.1 Diferencial General.\nNo.1 Diferencial para tomas.\nNo.1 Interruptor.\nNo.1 Toma.\nNo.2 Plafones 45W-LED.\nNo.1 Aire acondicionado Mono Split Inverter BTU 9000-HISENSE. No.1 Caja para conexión exterior."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-3-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-4-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-5-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-6-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.26-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2022-07-27-at-09.22.27-2-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11307",
                    "name" => [
                        "it" => "MONOBLOCCO USO UFFICIO 4×2",
                        "en" => "4×2 OFFICE MONOBLOCK",
                        "fr" => "MONOBLOC BUREAU 4×2",
                        "pt" => "MONOBLOCO ESCRITÓRIO 4×2",
                        "es" => "MONOBLOCO OFICINA 4×2"
                    ],
                    "price" => "899.00",
                    "old_price" => "910.00",
                    "sku" => "3276611307",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-ufficio-4x2/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 393 x 193 cm.\nDimensioni al tetto 400 x 200 cm.\nH interna 220 cm H esterna 242 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna Micro nervata BG RAL 9002.\n1 Lato lamiera interna Micro nervata BG RAL 9002.\nPannello Tetto sp.30 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con legno cemento sp.18 mm, rivestito con PVC Antiscivolo.\nSerramenti in alluminio RAL 9010.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.1 Finestra con paertura ad anta/ribalta, con vetrio camera 4/9/4 trasparente, completa di tenda veneziana colore Bianco, con dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC Bianco a vista, compreso di: N.1\nQuadro elettrico.\nN.1 Differenziale Generale.\nN.1 Interruttore.\nN.1 Presa.\nN.1 Plafoniera 19W-LED.\nN.1 Scatola esterna per allaccio impianto elettrico.\nEscluso trasporto e posa in opera.\nEscluso opere murarie e allacciamenti esterni.\nEscluso tutto quanto non indicato a preventivo.\nCome da disegno tecnico PG1329 R00 in allegato.",
                        "en" => "Base dimensions 393 x 193 cm.\nRoof dimensions 400 x 200 cm.\nInternal height 220 cm External height 242 cm.\nWall Panel thickness 40 mm – Polyurethane\n1 External side Micro-ribbed sheet metal BG RAL 9002.\n1 Internal side Micro-ribbed sheet metal BG RAL 9002.\nRoof Panel thickness 30 mm – Polyurethane\n1 External side 5-corrugated sheet metal RAL 9002.\n1 Internal side Micro-ribbed sheet metal BG RAL 9002.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with cement wood thickness 18 mm, covered with Anti-slip PVC.\nAluminum frames RAL 9010.\nNo.1 Full-panel single-leaf swing blind door, with handle and standard lock, external dimensions 100 x 210h cm.\nNo.1 Tilt and turn window, with 4/9/4 clear insulated glass, complete with White venetian blind, external dimensions 100 x 100h cm.\nStandard electrical system according to CEE 220V regulations, with visible White PVC pipe, including: No.1\nElectrical panel.\nNo.1 Main differential switch.\nNo.1 Switch.\nNo.1 Socket.\nNo.1 19W-LED ceiling light.\nNo.1 External box for electrical system connection.\nExcluding transport and installation.\nExcluding masonry works and external connections.\nExcluding anything not specified in the quote.\nAs per attached technical drawing PG1329 R00.",
                        "fr" => "Dimensions base 393 x 193 cm.\nDimensions toit 400 x 200 cm.\nHauteur intérieure 220 cm Hauteur extérieure 242 cm.\nPanneau mural ép.40 mm – Polyuréthane\n1 Côté extérieur tôle Micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nPanneau toit ép.30 mm – Polyuréthane\n1 Côté extérieur tôle 5 nervures RAL 9002.\n1 Côté intérieur tôle Micro-nervurée BG RAL 9002.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, recouvert de bois ciment ép.18 mm, revêtu de PVC antidérapant.\nMenuiseries aluminium RAL 9010.\nNo.1 Porte pleine tout panneau un vantail, avec poignée et serrure standard, dimensions extérieures 100 x 210h cm.\nNo.1 Fenêtre oscillo-battante, avec double vitrage 4/9/4 transparent, complète avec store vénitien Blanc, dimensions extérieures 100 x 100h cm.\nInstallation électrique standard norme CEE 220V, avec tube PVC Blanc apparent, comprenant : No.1\nTableau électrique.\nNo.1 Différentiel Général.\nNo.1 Interrupteur.\nNo.1 Prise.\nNo.1 Plafonnier 19W-LED.\nNo.1 Boîte extérieure pour raccordement électrique.\nHors transport et pose.\nHors travaux de maçonnerie et raccordements externes.\nHors tout ce qui n'est pas indiqué dans le devis.\nSelon dessin technique PG1329 R00 ci-joint.",
                        "pt" => "Dimensões da base 393 x 193 cm.\nDimensões do telhado 400 x 200 cm.\nAltura interna 220 cm Altura externa 242 cm.\nPainel de Parede esp.40 mm – Poliuretano\n1 Lado externo chapa Micro nervurada BG RAL 9002.\n1 Lado interno chapa Micro nervurada BG RAL 9002.\nPainel de Telhado esp.30 mm – Poliuretano\n1 Lado externo chapa 5 nervuras RAL 9002.\n1 Lado interno chapa Micro nervurada BG RAL 9002.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com madeira cimento esp.18 mm, revestida com PVC Antiderrapante.\nEsquadrias de alumínio RAL 9010.\nNo.1 Porta cega painel completo uma folha, com maçaneta e fechadura padrão, dimensões externas 100 x 210h cm.\nNo.1 Janela basculante, com vidro insulado 4/9/4 transparente, completa com persiana veneziana Branca, dimensões externas 100 x 100h cm.\nSistema elétrico padrão norma CEE 220V, com tubo PVC Branco aparente, incluindo: No.1\nQuadro elétrico.\nNo.1 Diferencial Geral.\nNo.1 Interruptor.\nNo.1 Tomada.\nNo.1 Luminária de teto 19W-LED.\nNo.1 Caixa externa para conexão elétrica.\nExcluindo transporte e instalação.\nExcluindo obras de alvenaria e conexões externas.\nExcluindo tudo o que não estiver indicado no orçamento.\nConforme desenho técnico anexo PG1329 R00.",
                        "es" => "Dimensiones base 393 x 193 cm.\nDimensiones techo 400 x 200 cm.\nAltura interior 220 cm Altura exterior 242 cm.\nPanel de Pared esp.40 mm – Poliuretano\n1 Lado exterior chapa Micro nervada BG RAL 9002.\n1 Lado interior chapa Micro nervada BG RAL 9002.\nPanel de Techo esp.30 mm – Poliuretano\n1 Lado exterior chapa 5 grecas RAL 9002.\n1 Lado interior chapa Micro nervada BG RAL 9002.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con madera cemento esp.18 mm, revestida con PVC Antideslizante.\nCarpintería de aluminio RAL 9010.\nNo.1 Puerta ciega panel completo una hoja, con manija y cerradura estándar, dimensiones exteriores 100 x 210h cm.\nNo.1 Ventana practicable, con doble acristalamiento 4/9/4 transparente, completa con persiana veneciana Blanca, dimensiones exteriores 100 x 100h cm.\nInstalación eléctrica estándar norma CEE 220V, con tubo PVC Blanco visto, incluyendo: No.1\nCuadro eléctrico.\nNo.1 Diferencial General.\nNo.1 Interruptor.\nNo.1 Toma.\nNo.1 Plafón 19W-LED.\nNo.1 Caja exterior para conexión eléctrica.\nExcluido transporte y montaje.\nExcluidas obras de albañilería y conexiones externas.\nExcluido todo lo no indicado en el presupuesto.\nSegún plano técnico adjunto PG1329 R00."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-6-300x300.jpeg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-5-300x300.jpeg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-4-300x300.jpeg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-3-300x300.jpeg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-2-300x300.jpeg",
                        "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-1-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11308",
                    "name" => [
                        "it" => "MONOBLOCCO USO UFFICIO VENDITE 12×2,5",
                        "en" => "12×2.5 SALES OFFICE MONOBLOCK",
                        "fr" => "MONOBLOC BUREAU DE VENTE 12×2,5",
                        "pt" => "MONOBLOCO ESCRITÓRIO DE VENDAS 12×2,5",
                        "es" => "MONOBLOCO OFICINA DE VENTAS 12×2,5"
                    ],
                    "price" => "5,590.00",
                    "old_price" => "7,600.00",
                    "sku" => "3276611308",
                    "discount_percentage" => null,
                    "link" => "/product/monoblocco-uso-ufficio-vendite-12x25/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Dimensioni al basamento 1193 x 243 cm.\nDimensioni al tetto 1200 x 250 cm.\nH interna 270 cm H esterna 316 cm.\nTot Mq 30\nPannello Parete sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nPannello Tetto sp.100+35 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con Pannello Parete sp.100 mm – Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con:\nPavimento Vinilico Modulare colorazione LIGHT GREY.\nSerramenti in Alluminio RAL 9010.\nVetro Camera 3+3/9/3+3 Antisfondamento trasparente.\nN.1 Porta di ingresso tutto vetro a due ante battenti, con maniglia e serratura standard, con dimensioni 200 x 260h esterna cm.\nN.3 Finestroni fissi tutto vetro, con dimensioni 200 x 260h sterna cm.\nN.1 Porta cieca tutto pannello, a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210 h esterna cm.\nNr.1 Cassaforte da appoggio, completa di sportello a basculante, chiavi a doppia mappa, per ricezione chiavi di ritorno.\nImpianto elettrico nascosto, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale CDZ.\nN.2 Interruttori.\nN.5 Prese.\nN.3 Prese RJ45.\nN.4 Plafoniere NOVALUX 35W-LED.\nN.1 Condizionatore mono split inverter BTU 18000-HISENSE.\nN.1 Scatola esterna per allacciamento.",
                        "en" => "Base dimensions 1193 x 243 cm.\nRoof dimensions 1200 x 250 cm.\nInternal height 270 cm External height 316 cm.\nTotal area 30 sqm\nWall Panel thickness 100 mm – Polyurethane\n1 External side SMOOTH sheet metal BG RAL 9002.\n1 Internal side SMOOTH sheet metal BG RAL 9002.\nRoof Panel thickness 100+35 mm – Polyurethane\n1 External side micro-ribbed sheet metal BG RAL 9002.\n1 Internal side micro-ribbed sheet metal BG RAL 9002.\nHigh-load base with tubular structure, covered with corrugated sheet metal, covered with Wall Panel thickness 100 mm – Polyurethane, covered with IDRO V100 wood thickness 18 mm, covered with:\nModular Vinyl Flooring LIGHT GREY color.\nAluminum frames RAL 9010.\n3+3/9/3+3 clear Anti-break Insulated Glass.\nNo.1 All-glass double-leaf swing entrance door, with handle and standard lock, external dimensions 200 x 260h cm.\nNo.3 Fixed all-glass large windows, external dimensions 200 x 260h cm.\nNo.1 Full-panel single-leaf swing blind door, with handle and standard lock, external dimensions 80 x 210 h cm.\nNo.1 Countertop safe, complete with tilting door, double-bit keys, for return key reception.\nRecessed electrical system, including:\nNo.1 Electrical panel.\nNo.1 Main differential switch.\nNo.1 Differential switch for socket outlets.\nNo.2 Switches.\nNo.5 Sockets.\nNo.3 RJ45 sockets.\nNo.4 NOVALUX 35W-LED ceiling lights.\nNo.1 HISENSE BTU 18000 inverter mono split air conditioner.\nNo.1 External connection box.",
                        "fr" => "Dimensions base 1193 x 243 cm.\nDimensions toit 1200 x 250 cm.\nHauteur intérieure 270 cm Hauteur extérieure 316 cm.\nSurface totale 30 m²\nPanneau mural ép.100 mm – Polyuréthane\n1 Côté extérieur tôle LISSE BG RAL 9002.\n1 Côté intérieur tôle LISSE BG RAL 9002.\nPanneau toit ép.100+35 mm – Polyuréthane\n1 Côté extérieur tôle micro-nervurée BG RAL 9002.\n1 Côté intérieur tôle micro-nervurée BG RAL 9002.\nSoubassement haute portance avec structure tubulaire, revêtu de tôle nervurée, revêtue de Panneau mural ép.100 mm – Polyuréthane, recouvert de bois IDRO V100 ép.18 mm, revêtu de :\nSol vinyle modulaire teinte GRIS CLAIR.\nMenuiseries Aluminium RAL 9010.\nDouble vitrage 3+3/9/3+3 anti-effraction transparent.\nNo.1 Porte d'entrée tout verre deux vantaux, avec poignée et serrure standard, dimensions extérieures 200 x 260h cm.\nNo.3 Grandes fenêtres fixes tout verre, dimensions extérieures 200 x 260h cm.\nNo.1 Porte pleine tout panneau, un vantail, avec poignée et serrure standard, dimensions extérieures 80 x 210 h cm.\nNo.1 Coffre-fort de comptoir, complet avec volet basculant, clés à double panneton, pour réception des clés retour.\nInstallation électrique encastrée, comprenant :\nNo.1 Tableau électrique.\nNo.1 Différentiel Général.\nNo.1 Différentiel pour prises.\nNo.2 Interrupteurs.\nNo.5 Prises.\nNo.3 Prises RJ45.\nNo.4 Plafonniers NOVALUX 35W-LED.\nNo.1 Climatiseur mono split inverter BTU 18000-HISENSE.\nNo.1 Boîte de raccordement externe.",
                        "pt" => "Dimensões da base 1193 x 243 cm.\nDimensões do telhado 1200 x 250 cm.\nAltura interna 270 cm Altura externa 316 cm.\nÁrea total 30 m²\nPainel de Parede esp.100 mm – Poliuretano\n1 Lado externo chapa LISA BG RAL 9002.\n1 Lado interno chapa LISA BG RAL 9002.\nPainel de Telhado esp.100+35 mm – Poliuretano\n1 Lado externo chapa micro nervurada BG RAL 9002.\n1 Lado interno chapa micro nervurada BG RAL 9002.\nBase de alta capacidade com estrutura tubular, revestida com chapa nervurada, revestida com Painel de Parede esp.100 mm – Poliuretano, revestida com madeira IDRO V100 esp.18 mm, revestida com:\nPiso Vinílico Modular cor CINZA CLARO.\nEsquadrias de Alumínio RAL 9010.\nVidro Insulado 3+3/9/3+3 antivandalismo transparente.\nNo.1 Porta de entrada todo vidro duas folhas, com maçaneta e fechadura padrão, dimensões externas 200 x 260h cm.\nNo.3 Grandes janelas fixas todo vidro, dimensões externas 200 x 260h cm.\nNo.1 Porta cega painel completo, uma folha, com maçaneta e fechadura padrão, dimensões externas 80 x 210 h cm.\nNo.1 Cofre de apoio, completo com portinhola basculante, chaves de dupla mapa, para recepção de chaves de retorno.\nSistema elétrico embutido, incluindo:\nNo.1 Quadro Elétrico.\nNo.1 Diferencial Geral.\nNo.1 Diferencial para tomadas.\nNo.2 Interruptores.\nNo.5 Tomadas.\nNo.3 Tomadas RJ45.\nNo.4 Luminárias de teto NOVALUX 35W-LED.\nNo.1 Ar condicionado mono split inverter BTU 18000-HISENSE.\nNo.1 Caixa para conexão externa.",
                        "es" => "Dimensiones base 1193 x 243 cm.\nDimensiones techo 1200 x 250 cm.\nAltura interior 270 cm Altura exterior 316 cm.\nSuperficie total 30 m²\nPanel de Pared esp.100 mm – Poliuretano\n1 Lado exterior chapa LISA BG RAL 9002.\n1 Lado interior chapa LISA BG RAL 9002.\nPanel de Techo esp.100+35 mm – Poliuretano\n1 Lado exterior chapa micro nervada BG RAL 9002.\n1 Lado interior chapa micro nervada BG RAL 9002.\nBase de alta capacidad con estructura tubular, revestida con chapa grecada, revestida con Panel de Pared esp.100 mm – Poliuretano, revestida con madera IDRO V100 esp.18 mm, revestida con:\nPavimento Vinílico Modular color GRIS CLARO.\nCarpintería de Aluminio RAL 9010.\nDoble acristalamiento 3+3/9/3+3 antivandalismo transparente.\nNo.1 Puerta de entrada todo vidrio dos hojas, con manija y cerradura estándar, dimensiones exteriores 200 x 260h cm.\nNo.3 Grandes ventanales fijos todo vidrio, dimensiones exteriores 200 x 260h cm.\nNo.1 Puerta ciega panel completo, una hoja, con manija y cerradura estándar, dimensiones exteriores 80 x 210 h cm.\nNo.1 Caja fuerte de apoyo, completa con trampilla basculante, llaves de doble mapa, para recepción de llaves de retorno.\nInstalación eléctrica empotrada, incluyendo:\nNo.1 Cuadro Eléctrico.\nNo.1 Diferencial General.\nNo.1 Diferencial para tomas.\nNo.2 Interruptores.\nNo.5 Tomas.\nNo.3 Tomas RJ45.\nNo.4 Plafones NOVALUX 35W-LED.\nNo.1 Aire acondicionado mono split inverter BTU 18000-HISENSE.\nNo.1 Caja para conexión exterior."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_6-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_3-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_4-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_5-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_7-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_8-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_1-2-300x300.jpeg",
                        "/assets/uploads/2025/11/monoblocchi-prefabbricati-pigreco_2-2-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11419",
                    "name" => [
                        "it" => "Nuova Casa – Reale I",
                        "en" => "New House – Reale I",
                        "fr" => "Nouvelle Maison – Reale I",
                        "pt" => "Nova Casa – Reale I",
                        "es" => "Nueva Casa – Reale I"
                    ],
                    "price" => "8,890.00",
                    "old_price" => "9,100.00",
                    "sku" => "3276611419",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-reale-i/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.02-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.03-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.01-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.02-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.05-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.03-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.04-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.06-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.05-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.01.04-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11422",
                    "name" => [
                        "it" => "Nuova Casa – Campo III",
                        "en" => "New House – Campo III",
                        "fr" => "Nouvelle Maison – Campo III",
                        "pt" => "Nova Casa – Campo III",
                        "es" => "Nueva Casa – Campo III"
                    ],
                    "price" => "11,620.00",
                    "old_price" => "13,000.00",
                    "sku" => "3276611422",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-campo-iii/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.54-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.58-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.55-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.57-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.56-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.55-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.59-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.57-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-08-02-at-18.27.58-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11420",
                    "name" => [
                        "it" => "Nuova Casa – Reale II",
                        "en" => "New House – Reale II",
                        "fr" => "Nouvelle Maison – Reale II",
                        "pt" => "Nova Casa – Reale II",
                        "es" => "Nueva Casa – Reale II"
                    ],
                    "price" => "9,300.00",
                    "old_price" => "10,500.00",
                    "sku" => "3276611420",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-reale-ii/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/419975132_255084294286701_4250557926240316821_n-300x300.jpg",
                        "/assets/uploads/2025/11/420039726_678984861104499_1674706623031510395_n-300x300.jpg",
                        "/assets/uploads/2025/11/416946312_387552290424313_1277301685219357336_n-300x300.jpg",
                        "/assets/uploads/2025/11/417255933_1082844512905656_5529442241088208457_n-300x300.jpg",
                        "/assets/uploads/2025/11/417226135_1130186125088456_6687760241775696116_n-300x300.jpg",
                        "/assets/uploads/2025/11/416938894_1149139166458647_2185502808503993211_n-300x300.jpg",
                        "/assets/uploads/2025/11/420088396_1118169255845685_8968650159463026674_n-300x300.jpg",
                        "/assets/uploads/2025/11/417438862_401537932233881_1234804349684597025_n-300x300.jpg",
                        "/assets/uploads/2025/11/419995655_345560878243101_9025403128220499498_n-300x300.jpg",
                        "/assets/uploads/2025/11/417147677_705166284757450_1687177399870846737_n-300x300.jpg",
                        "/assets/uploads/2025/11/417121041_1828350564269317_1794586466919402006_n-300x300.jpg",
                        "/assets/uploads/2025/11/419960792_906659910710307_718152423510318704_n-300x300.jpg",
                        "/assets/uploads/2025/11/432200367_343160582060634_1582672944590939442_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11421",
                    "name" => [
                        "it" => "Nuova Casa – Reale III",
                        "en" => "New House – Reale III",
                        "fr" => "Nouvelle Maison – Reale III",
                        "pt" => "Nova Casa – Reale III",
                        "es" => "Nueva Casa – Reale III"
                    ],
                    "price" => "10,050.00",
                    "old_price" => "12,000.00",
                    "sku" => "3276611421",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-reale-iii/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/433475555_437385198797728_5847710547608803768_n-300x300.jpg",
                        "/assets/uploads/2025/11/118697265_1259057794435497_7717353178909499072_n-300x300.jpg",
                        "/assets/uploads/2025/11/118724574_1259057994435477_2979238828785557103_n-300x300.jpg",
                        "/assets/uploads/2025/11/118785584_1259052591102684_5787463404880689497_n-300x300.jpg",
                        "/assets/uploads/2025/11/118762531_1259057924435484_3454623315490048770_n-300x300.jpg",
                        "/assets/uploads/2025/11/118655062_1259057824435494_3252295422219084741_n-300x300.jpg",
                        "/assets/uploads/2025/11/118699800_1259058017768808_4559701787038736100_n-300x300.jpg",
                        "/assets/uploads/2025/11/118725447_1259052561102687_8769335878793214696_n-1-300x300.jpg",
                        "/assets/uploads/2025/11/118625859_1259057967768813_2968911701921459101_n-300x300.jpg",
                        "/assets/uploads/2025/11/118599922_1259057891102154_3523907555371163606_n-300x300.jpg",
                        "/assets/uploads/2025/11/118764779_1259057827768827_3886157771480863040_n-300x300.jpg",
                        "/assets/uploads/2025/11/118770012_1259057937768816_4297948972541134166_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11423",
                    "name" => [
                        "it" => "Nuova casa – Tempesta II",
                        "en" => "New house – Tempesta II",
                        "fr" => "Nouvelle maison – Tempesta II",
                        "pt" => "Nova casa – Tempesta II",
                        "es" => "Nueva casa – Tempesta II"
                    ],
                    "price" => "10,435.00",
                    "old_price" => "11,970.00",
                    "sku" => "3276611423",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-tempesta-ii/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/417230407_907082487467091_1414065393715076364_n-300x300.jpg",
                        "/assets/uploads/2025/11/417212293_7422546577755442_4854141023115159746_n-300x300.jpg",
                        "/assets/uploads/2025/11/420289836_1069889627390411_8751703803697116175_n-300x300.jpg",
                        "/assets/uploads/2025/11/420035020_781817927112807_8757009610962470651_n-300x300.jpg",
                        "/assets/uploads/2025/11/403394887_1033594414386444_8770186015856799564_n-300x300.jpg",
                        "/assets/uploads/2025/11/416989499_398293452665328_3959879589680576899_n-300x300.jpg",
                        "/assets/uploads/2025/11/420067207_2685899455050925_1439172023061312116_n-300x300.jpg",
                        "/assets/uploads/2025/11/420024327_201161473022852_2778253516074114091_n-300x300.jpg",
                        "/assets/uploads/2025/11/417190136_1676049683169213_4972112830951367434_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11366",
                    "name" => [
                        "it" => "Nuova casa 10 x 4m – Premium",
                        "en" => "New house 10 x 4m – Premium",
                        "fr" => "Nouvelle maison 10 x 4m – Premium",
                        "pt" => "Nova casa 10 x 4m – Premium",
                        "es" => "Nueva casa 10 x 4m – Premium"
                    ],
                    "price" => "10,090.00",
                    "old_price" => "12,000.00",
                    "sku" => "3276611366",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-10-x-4m-premium/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-0-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-7-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-1-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-3-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-928129-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-4-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-9-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-8-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-2-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-6-300x300.jpg",
                        "/assets/uploads/2025/11/nuova-casa-10-x-4m-premium-5-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11368",
                    "name" => [
                        "it" => "Nuova casa 10x4m – II",
                        "en" => "New house 10x4m – II",
                        "fr" => "Nouvelle maison 10x4m – II",
                        "pt" => "Nova casa 10x4m – II",
                        "es" => "Nueva casa 10x4m – II"
                    ],
                    "price" => "9,299.00",
                    "old_price" => "12,000.00",
                    "sku" => "3276611368",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-10x4m-ii/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/420065883_919007309814786_2484390016964364294_n-300x300.jpg",
                        "/assets/uploads/2025/11/417244735_1876822802735579_9065071513816167017_n-300x300.jpg",
                        "/assets/uploads/2025/11/420213399_1308033179870644_8544463689609152324_n-300x300.jpg",
                        "/assets/uploads/2025/11/417249735_903847091237809_2739910074288036887_n-300x300.jpg",
                        "/assets/uploads/2025/11/420042451_424116903280541_8102312775945675201_n-300x300.jpg",
                        "/assets/uploads/2025/11/417092948_1642774292921817_1069210669452750907_n-300x300.jpg",
                        "/assets/uploads/2025/11/420845450_350780161240064_6533294222398078311_n-300x300.jpg",
                        "/assets/uploads/2025/11/420016722_1544683296373716_1144964618403308450_n-300x300.jpg",
                        "/assets/uploads/2025/11/417306267_1565156924246438_4134782512895588843_n-300x300.jpg",
                        "/assets/uploads/2025/11/417562017_4245058369068149_7635846696452305664_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11726",
                    "name" => [
                        "it" => "Nuova casa 11,4 x 3,5 mt",
                        "en" => "New house 11.4 x 3.5 m",
                        "fr" => "Nouvelle maison 11,4 x 3,5 m",
                        "pt" => "Nova casa 11,4 x 3,5 m",
                        "es" => "Nueva casa 11,4 x 3,5 m"
                    ],
                    "price" => "9,810.00",
                    "old_price" => "11,000.00",
                    "sku" => "3276611726",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-114-x-35-mt-11-970e-iva-inclusa/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000007678-300x300.jpg",
                        "/assets/uploads/2025/11/1000007673-300x300.jpg",
                        "/assets/uploads/2025/11/1000007672-300x300.jpg",
                        "/assets/uploads/2025/11/1000007676-300x300.jpg",
                        "/assets/uploads/2025/11/1000007675-300x300.jpg",
                        "/assets/uploads/2025/11/1000007677-300x300.jpg",
                        "/assets/uploads/2025/11/1000007671-300x300.jpg",
                        "/assets/uploads/2025/11/1000007674-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11418",
                    "name" => [
                        "it" => "Nuova casa Samos 2 – 10×3,5m",
                        "en" => "New Samos 2 house – 10×3.5m",
                        "fr" => "Nouvelle maison Samos 2 – 10×3,5m",
                        "pt" => "Nova casa Samos 2 – 10×3,5m",
                        "es" => "Nueva casa Samos 2 – 10×3,5m"
                    ],
                    "price" => "8,100.00",
                    "old_price" => "9,800.00",
                    "sku" => "3276611418",
                    "discount_percentage" => null,
                    "link" => "/product/nuova-casa-samos-2-1035m/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.43-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.43-4-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.43-2-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.44-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.42-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.44-1-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.43-3-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.43-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.42-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.45-300x300.jpeg",
                        "/assets/uploads/2025/11/WhatsApp-Image-2024-10-06-at-12.03.44-2-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11835",
                    "name" => [
                        "it" => "Nuovo container da 20 piedi (Offriamo uno sconto per l'acquisto di più unità)",
                        "en" => "New 20 ft container (We offer a discount for purchasing multiple units)",
                        "fr" => "Nouveau conteneur 20 pieds (Nous offrons une réduction pour l'achat de plusieurs unités)",
                        "pt" => "Novo contentor de 20 pés (Oferecemos desconto para compra de várias unidades)",
                        "es" => "Nuevo contenedor de 20 pies (Ofrecemos descuento por compra de múltiples unidades)"
                    ],
                    "price" => "905.00",
                    "old_price" => "1,300.00",
                    "sku" => "3276611835",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-container-da-20-piedi-offriamo-uno-sconto-per-lacquisto-di-piu-unita/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059572-300x300.jpg",
                        "/assets/uploads/2025/11/1000059566-300x300.jpg",
                        "/assets/uploads/2025/11/1000059565-300x300.jpg",
                        "/assets/uploads/2025/11/1000059568-300x300.jpg",
                        "/assets/uploads/2025/11/1000059567-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11829",
                    "name" => [
                        "it" => "Nuovo container High Cube con tribune da 40 piedi e 74 posti.",
                        "en" => "New 40 ft High Cube container with stands for 74 seats.",
                        "fr" => "Nouveau conteneur High Cube 40 pieds avec tribunes de 74 places.",
                        "pt" => "Novo contentor High Cube de 40 pés com bancadas para 74 lugares.",
                        "es" => "Nuevo contenedor High Cube de 40 pies con gradas para 74 asientos."
                    ],
                    "price" => "4,450.00",
                    "old_price" => "6,500.00",
                    "sku" => "3276611829",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-container-high-cube-con-tribune-da-40-piedi-e-74-posti/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059150-300x300.jpg",
                        "/assets/uploads/2025/11/1000059149-300x270.jpg",
                        "/assets/uploads/2025/11/1000059157-300x300.jpg",
                        "/assets/uploads/2025/11/1000059152-300x300.jpg",
                        "/assets/uploads/2025/11/1000059156-300x300.jpg",
                        "/assets/uploads/2025/11/1000059151-300x300.jpg",
                        "/assets/uploads/2025/11/1000059155-300x300.jpg",
                        "/assets/uploads/2025/11/1000059160-300x300.jpg",
                        "/assets/uploads/2025/11/1000059154-300x300.jpg",
                        "/assets/uploads/2025/11/1000059153-300x300.jpg",
                        "/assets/uploads/2025/11/1000059158-300x300.jpg",
                        "/assets/uploads/2025/11/1000059159-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11837",
                    "name" => [
                        "it" => "Nuovo container per spedizioni con apertura laterale da 20 piedi",
                        "en" => "New 20 ft shipping container with side opening",
                        "fr" => "Nouveau conteneur d'expédition 20 pieds avec ouverture latérale",
                        "pt" => "Novo contentor de transporte de 20 pés com abertura lateral",
                        "es" => "Nuevo contenedor de envío de 20 pies con apertura lateral"
                    ],
                    "price" => "1,350.00",
                    "old_price" => "2,000.00",
                    "sku" => "3276611837",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-container-per-spedizioni-con-apertura-laterale-da-20-piedi/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000059630-300x300.jpg",
                        "/assets/uploads/2025/11/1000059629-300x300.jpg",
                        "/assets/uploads/2025/11/1000059633-300x300.jpg",
                        "/assets/uploads/2025/11/1000059632-300x300.jpg",
                        "/assets/uploads/2025/11/1000059631-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11238",
                    "name" => [
                        "it" => "NUOVO CONTENITORE MARITTIMO REFRIGERATO DA 20 PIEDI",
                        "en" => "NEW 20 FT REFRIGERATED SHIPPING CONTAINER",
                        "fr" => "NOUVEAU CONTENEUR MARITIME RÉFRIGÉRÉ 20 PIEDS",
                        "pt" => "NOVO CONTENTOR MARÍTIMO REFRIGERADO 20 PÉS",
                        "es" => "NUEVO CONTENEDOR MARÍTIMO REFRIGERADO 20 PIES"
                    ],
                    "price" => "3,580.00",
                    "old_price" => "4,100.00",
                    "sku" => "3276611238",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-contenitore-marittimo-refrigerato-da-20-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Container di spedizione reefer da 20′ / nuovo frigorifero\nLunghezza: 6 metri, altezza esterna: 2.591 e interna: 2.261 (mt.)\nMacchine Carrier o Thermo King\nDimensioni esterne (LxPxH): 6058 x 2438 x 2591 mm.\nNuovo container/frigorifero refrigerato da 20 piedi, utilizzato per applicazioni relative al mantenimento dei prodotti a temperatura costante.\nCoibentato per mantenere al meglio la temperatura assegnata, le pareti interne sono in acciaio inox e il pavimento è in alluminio scanalato tipo T.\nLe marche di macchine che offriamo più comunemente utilizzate sono Carrier e Thermo King, anche se è possibile fornirne anche altre come Star Cool o Daikin.\nÈ conforme ai requisiti di trasporto CSC e TIR e agli standard ISO nella sua costruzione.\nApplicazioni più comuni: Trasporto marittimo e intermodale di merci deperibili, congelamento o conservazione frigorifera, di pesce, frutta, carne, conservazione dell'uva nell'industria vinicola, del cuoio, di prodotti farmaceutici, ecc.\nIl modo corretto di utilizzare questa apparecchiatura è preraffreddare l'unità e, una volta raggiunta questa temperatura, posizionare i prodotti nel contenitore.",
                        "en" => "20′ reefer shipping container / new refrigerator\nLength: 6 meters, external height: 2.591 and internal: 2.261 (m.)\nCarrier or Thermo King machines\nExternal dimensions (LxWxH): 6058 x 2438 x 2591 mm.\nNew 20 foot refrigerated container/refrigerator, used for applications related to maintaining products at constant temperature.\nInsulated to best maintain the assigned temperature, the internal walls are stainless steel and the floor is grooved T-type aluminum.\nThe machine brands we most commonly offer are Carrier and Thermo King, although others such as Star Cool or Daikin can also be supplied.\nIt complies with CSC and TIR transport requirements and ISO standards in its construction.\nMost common applications: Maritime and intermodal transport of perishable goods, freezing or refrigerated storage of fish, fruit, meat, grape preservation in the wine industry, leather, pharmaceutical products, etc.\nThe correct way to use this equipment is to pre-cool the unit and, once this temperature is reached, place the products in the container.",
                        "fr" => "Conteneur d'expédition reefer 20′ / nouveau réfrigérateur\nLongueur : 6 mètres, hauteur extérieure : 2.591 et intérieure : 2.261 (m.)\nMachines Carrier ou Thermo King\nDimensions extérieures (LxPxH) : 6058 x 2438 x 2591 mm.\nNouveau conteneur/réfrigérateur réfrigéré 20 pieds, utilisé pour les applications liées au maintien des produits à température constante.\nIsolé pour maintenir au mieux la température assignée, les parois intérieures sont en acier inoxydable et le sol est en aluminium strié type T.\nLes marques de machines que nous proposons le plus couramment sont Carrier et Thermo King, bien que d'autres comme Star Cool ou Daikin puissent également être fournies.\nIl est conforme aux exigences de transport CSC et TIR et aux normes ISO dans sa construction.\nApplications les plus courantes : Transport maritime et intermodal de marchandises périssables, congélation ou stockage frigorifique de poisson, fruits, viande, conservation du raisin dans l'industrie vinicole, du cuir, produits pharmaceutiques, etc.\nLa bonne façon d'utiliser cet équipement est de pré-refroidir l'unité et, une fois cette température atteinte, de placer les produits dans le conteneur.",
                        "pt" => "Contentor de transporte reefer de 20′ / novo frigorífico\nComprimento: 6 metros, altura externa: 2.591 e interna: 2.261 (m.)\nMáquinas Carrier ou Thermo King\nDimensões externas (CxLxA): 6058 x 2438 x 2591 mm.\nNovo contentor/frigorífico refrigerado de 20 pés, utilizado para aplicações relacionadas com a manutenção de produtos a temperatura constante.\nIsolado para melhor manter a temperatura atribuída, as paredes internas são em aço inoxidável e o piso é em alumínio ranhurado tipo T.\nAs marcas de máquinas que oferecemos mais comumente são Carrier e Thermo King, embora outras como Star Cool ou Daikin também possam ser fornecidas.\nCumpre os requisitos de transporte CSC e TIR e os padrões ISO na sua construção.\nAplicações mais comuns: Transporte marítimo e intermodal de produtos perecíveis, congelação ou armazenamento refrigerado de peixe, fruta, carne, conservação de uvas na indústria vinícola, couro, produtos farmacêuticos, etc.\nA forma correta de utilizar este equipamento é pré-arrefecer a unidade e, uma vez atingida esta temperatura, colocar os produtos no contentor.",
                        "es" => "Contenedor de envío reefer de 20′ / nuevo refrigerador\nLongitud: 6 metros, altura externa: 2.591 e interna: 2.261 (m.)\nMáquinas Carrier o Thermo King\nDimensiones exteriores (LxAnxAl): 6058 x 2438 x 2591 mm.\nNuevo contenedor/refrigerador refrigerado de 20 pies, utilizado para aplicaciones relacionadas con el mantenimiento de productos a temperatura constante.\nAislado para mantener mejor la temperatura asignada, las paredes internas son de acero inoxidable y el suelo es de aluminio ranurado tipo T.\nLas marcas de máquinas que ofrecemos más comúnmente son Carrier y Thermo King, aunque también se pueden suministrar otras como Star Cool o Daikin.\nCumple con los requisitos de transporte CSC y TIR y con los estándares ISO en su construcción.\nAplicaciones más comunes: Transporte marítimo e intermodal de mercancías perecederas, congelación o almacenamiento frigorífico de pescado, fruta, carne, conservación de uva en la industria vinícola, cuero, productos farmacéuticos, etc.\nLa forma correcta de utilizar este equipo es preenfriar la unidad y, una vez alcanzada esta temperatura, colocar los productos en el contenedor."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/4EA26151-BB43-4855-8772-46FF7F6D06EC-300x300.jpg",
                        "/assets/uploads/2025/11/5C935429-E138-4A10-99D9-315C678D0415-300x300.jpg",
                        "/assets/uploads/2025/11/A4655589-CC21-4582-8A1A-1FF3B52EDDE2-300x300.jpg",
                        "/assets/uploads/2025/11/77D71318-A04D-4E46-9CD1-6CFC97190403-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11235",
                    "name" => [
                        "it" => "NUOVO CONTENITORE PER UFFICIO DA 20 PIEDI",
                        "en" => "NEW 20 FT OFFICE CONTAINER",
                        "fr" => "NOUVEAU CONTENEUR DE BUREAU 20 PIEDS",
                        "pt" => "NOVO CONTENTOR PARA ESCRITÓRIO 20 PÉS",
                        "es" => "NUEVO CONTENEDOR PARA OFICINA 20 PIES"
                    ],
                    "price" => "1,810.00",
                    "old_price" => "2,600.00",
                    "sku" => "3276611235",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-contenitore-per-ufficio-da-20-piedi/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Nuovo container standard da 20 piedi, con impilatore di vetro da 4.500 mm sulla parete laterale. Impianto elettrico e aria condizionata.",
                        "en" => "New 20 ft standard container, with 4.500 mm glass stacker on the side wall. Electrical system and air conditioning.",
                        "fr" => "Nouveau conteneur standard 20 pieds, avec empileur de verre de 4.500 mm sur le mur latéral. Installation électrique et climatisation.",
                        "pt" => "Novo contentor padrão de 20 pés, com empilhador de vidro de 4.500 mm na parede lateral. Instalação elétrica e ar condicionado.",
                        "es" => "Nuevo contenedor estándar de 20 pies, con apilador de vidrio de 4.500 mm en la pared lateral. Instalación eléctrica y aire acondicionado."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/IMG-20230928-WA0063-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230928-WA0061-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230928-WA0060-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230928-WA0058-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230928-WA0062-300x300.jpg",
                        "/assets/uploads/2025/11/IMG-20230928-WA0065-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11237",
                    "name" => [
                        "it" => "NUOVO CONTENITORE REFRIGERATO DA 40 PIEDI",
                        "en" => "NEW 40 FT REFRIGERATED CONTAINER",
                        "fr" => "NOUVEAU CONTENEUR RÉFRIGÉRÉ 40 PIEDS",
                        "pt" => "NOVO CONTENTOR REFRIGERADO 40 PÉS",
                        "es" => "NUEVO CONTENEDOR REFRIGERADO 40 PIES"
                    ],
                    "price" => "5,600.00",
                    "old_price" => null,
                    "sku" => "3276611237",
                    "discount_percentage" => null,
                    "link" => "/product/nuovo-contenitore-refrigerato-da-40-piedi/",
                    "categories" => ["contentores-refrigerados"],
                    "short_description" => [
                        "it" => "Il nuovo container refrigerato da 40 piedi o anche chiamato container refrigerato refrigerato da 12 m, è ampiamente utilizzato per le attività di stoccaggio di prodotti freschi. Il container refrigerato da 40′ è alimentato da una presa da 380V. È dotato di macchine che operano in un intervallo di temperatura compreso tra +25°C e -25°C.\nTutti i nostri contenitori refrigerati Reefer sono dotati di certificato CSC Veritas e di un test PTI (refrigeration unit test) valido.\nLavoriamo con motori Carrier, Thermoking, Daikin e Starcool.\nDIMENSIONI INTERNE\n-Lunghezza: 11.583 mm\n-Larghezza: 2294 mm\n-Altezza: 2.569 mm\n-Altezza interna (fino al limite di carico): 2.469 mm\nDimensioni esterne\n– Lunghezza: 12.192 mm\n– Larghezza: 2438 mm\n– Altezza: 2.896 mm\nDimensioni della porta\n-Larghezza: 2292 mm\n-Altezza: 2.562 mm\nTemperatura: da -25 a 25°C\nRefrigerante\n-R134A\n-R404\n-R442 su richiesta\nStruttura: CORTEN e INOX\nTERRA\nGUIDA IN ALLUMINIO A T\nGestione tramite console Daikin, Thermoking o Carrier\nStoccaggio fino a 23 Europallet\nApertura a doppia anta su una delle facce esterne\nLe porte si aprono a 270°\nInformazioni aggiuntive\n– Carico massimo: 29.350 kg\n– Peso a vuoto: 4.650 kg\n– Peso massimo: 34.000 kg\n– Volume interno utile (fino alla linea massima di ventilazione): 65,60 m3",
                        "en" => "The new 40 ft refrigerated container, also called 12 m refrigerated container, is widely used for fresh product storage activities. The 40′ refrigerated container is powered by a 380V socket. It is equipped with machines operating in a temperature range between +25°C and -25°C.\nAll our Reefer refrigerated containers are equipped with CSC Veritas certificate and a valid PTI (refrigeration unit test).\nWe work with Carrier, Thermoking, Daikin and Starcool engines.\nINTERNAL DIMENSIONS\n-Length: 11,583 mm\n-Width: 2294 mm\n-Height: 2,569 mm\n-Internal height (up to load limit): 2,469 mm\nExternal dimensions\n– Length: 12,192 mm\n– Width: 2438 mm\n– Height: 2,896 mm\nDoor dimensions\n-Width: 2292 mm\n-Height: 2,562 mm\nTemperature: from -25 to 25°C\nRefrigerant\n-R134A\n-R404\n-R442 on request\nStructure: CORTEN and INOX\nFLOOR\nT-TYPE ALUMINUM GUIDE\nManagement via Daikin, Thermoking or Carrier console\nStorage up to 23 Europallet\nDouble door opening on one of the external faces\nDoors open at 270°\nAdditional information\n– Maximum load: 29,350 kg\n– Empty weight: 4,650 kg\n– Maximum weight: 34,000 kg\n– Useful internal volume (up to maximum ventilation line): 65.60 m3",
                        "fr" => "Le nouveau conteneur réfrigéré 40 pieds, également appelé conteneur réfrigéré 12 m, est largement utilisé pour les activités de stockage de produits frais. Le conteneur réfrigéré 40′ est alimenté par une prise 380V. Il est équipé de machines fonctionnant dans une plage de température comprise entre +25°C et -25°C.\nTous nos conteneurs réfrigérés Reefer sont dotés d'un certificat CSC Veritas et d'un test PTI (refrigeration unit test) valide.\nNous travaillons avec des moteurs Carrier, Thermoking, Daikin et Starcool.\nDIMENSIONS INTÉRIEURES\n-Longueur : 11 583 mm\n-Largeur : 2294 mm\n-Hauteur : 2 569 mm\n-Hauteur intérieure (jusqu'à la limite de charge) : 2 469 mm\nDimensions extérieures\n– Longueur : 12 192 mm\n– Largeur : 2438 mm\n– Hauteur : 2 896 mm\nDimensions de la porte\n-Largeur : 2292 mm\n-Hauteur : 2 562 mm\nTempérature : de -25 à 25°C\nRéfrigérant\n-R134A\n-R404\n-R442 sur demande\nStructure : CORTEN et INOX\nSOL\nGUIDE EN ALUMINIUM TYPE T\nGestion via console Daikin, Thermoking ou Carrier\nStockage jusqu'à 23 Europalettes\nOuverture à double vantail sur une des faces externes\nLes portes s'ouvrent à 270°\nInformations complémentaires\n– Charge maximale : 29 350 kg\n– Poids à vide : 4 650 kg\n– Poids maximum : 34 000 kg\n– Volume intérieur utile (jusqu'à la ligne de ventilation maximale) : 65,60 m3",
                        "pt" => "O novo contentor refrigerado de 40 pés, também chamado de contentor refrigerado de 12 m, é amplamente utilizado para atividades de armazenamento de produtos frescos. O contentor refrigerado de 40′ é alimentado por uma tomada de 380V. Está equipado com máquinas que operam numa faixa de temperatura entre +25°C e -25°C.\nTodos os nossos contentores refrigerados Reefer possuem certificado CSC Veritas e um teste PTI (teste da unidade de refrigeração) válido.\nTrabalhamos com motores Carrier, Thermoking, Daikin e Starcool.\nDIMENSÕES INTERNAS\n-Comprimento: 11.583 mm\n-Largura: 2294 mm\n-Altura: 2.569 mm\n-Altura interna (até ao limite de carga): 2.469 mm\nDimensões externas\n– Comprimento: 12.192 mm\n– Largura: 2438 mm\n– Altura: 2.896 mm\nDimensões da porta\n-Largura: 2292 mm\n-Altura: 2.562 mm\nTemperatura: de -25 a 25°C\nRefrigerante\n-R134A\n-R404\n-R442 sob consulta\nEstrutura: CORTEN e INOX\nPISO\nGUIA EM ALUMÍNIO TIPO T\nGestão através de consola Daikin, Thermoking ou Carrier\nArmazenamento até 23 Europaletes\nAbertura de porta dupla numa das faces externas\nAs portas abrem a 270°\nInformações adicionais\n– Carga máxima: 29.350 kg\n– Peso vazio: 4.650 kg\n– Peso máximo: 34.000 kg\n– Volume interno útil (até à linha máxima de ventilação): 65,60 m3",
                        "es" => "El nuevo contenedor refrigerado de 40 pies, también llamado contenedor refrigerado de 12 m, es ampliamente utilizado para actividades de almacenamiento de productos frescos. El contenedor refrigerado de 40′ está alimentado por una toma de 380V. Está equipado con máquinas que operan en un rango de temperatura entre +25°C y -25°C.\nTodos nuestros contenedores refrigerados Reefer cuentan con certificado CSC Veritas y una prueba PTI (prueba de unidad de refrigeración) válida.\nTrabajamos con motores Carrier, Thermoking, Daikin y Starcool.\nDIMENSIONES INTERIORES\n-Longitud: 11.583 mm\n-Anchura: 2294 mm\n-Altura: 2.569 mm\n-Altura interior (hasta el límite de carga): 2.469 mm\nDimensiones exteriores\n– Longitud: 12.192 mm\n– Anchura: 2438 mm\n– Altura: 2.896 mm\nDimensiones de la puerta\n-Anchura: 2292 mm\n-Altura: 2.562 mm\nTemperatura: de -25 a 25°C\nRefrigerante\n-R134A\n-R404\n-R442 bajo pedido\nEstructura: CORTEN e INOX\nSUELO\nGUÍA DE ALUMINIO TIPO T\nGestión mediante consola Daikin, Thermoking o Carrier\nAlmacenamiento hasta 23 Europalés\nApertura de doble puerta en una de las caras externas\nLas puertas se abren a 270°\nInformación adicional\n– Carga máxima: 29.350 kg\n– Peso vacío: 4.650 kg\n– Peso máximo: 34.000 kg\n– Volumen interior útil (hasta la línea máxima de ventilación): 65,60 m3"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/B0775DA6-6EB2-41C8-805E-BD4C464E6679-300x300.jpg",
                        "/assets/uploads/2025/11/8EF5D085-344A-4B3F-B95F-45C3CB7D4C67-300x300.jpg",
                        "/assets/uploads/2025/11/5D3078A0-A4A1-441C-9C61-3111AC8F1E76-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11674",
                    "name" => [
                        "it" => "Piccola casa Deluxe 19 piedi x 20 piedi – Stahlworks 2025",
                        "en" => "Deluxe small house 19 ft x 20 ft – Stahlworks 2025",
                        "fr" => "Petite maison Deluxe 19 pieds x 20 pieds – Stahlworks 2025",
                        "pt" => "Pequena casa Deluxe 19 pés x 20 pés – Stahlworks 2025",
                        "es" => "Pequeña casa Deluxe 19 pies x 20 pies – Stahlworks 2025"
                    ],
                    "price" => "8,900.00",
                    "old_price" => "9,500.00",
                    "sku" => "3276611674",
                    "discount_percentage" => null,
                    "link" => "/product/piccola-casa-deluxe-19-piedi-x-20-piedi-stahlworks-2025/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002942-300x300.jpg",
                        "/assets/uploads/2025/11/1000002936-300x300.jpg",
                        "/assets/uploads/2025/11/1000002931-300x300.jpg",
                        "/assets/uploads/2025/11/1000002933-300x300.jpg",
                        "/assets/uploads/2025/11/1000002934-300x300.jpg",
                        "/assets/uploads/2025/11/1000002939-300x300.jpg",
                        "/assets/uploads/2025/11/1000002940-300x300.jpg",
                        "/assets/uploads/2025/11/1000002937-300x300.jpg",
                        "/assets/uploads/2025/11/1000002938-300x300.jpg",
                        "/assets/uploads/2025/11/1000002935-300x300.jpg",
                        "/assets/uploads/2025/11/1000002932-300x300.jpg",
                        "/assets/uploads/2025/11/1000002941-300x300.jpg",
                        "/assets/uploads/2025/11/1000002929-300x300.jpg",
                        "/assets/uploads/2025/11/1000002943-300x300.jpg",
                        "/assets/uploads/2025/11/1000002930-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10731",
                    "name" => [
                        "it" => "piscinas Container LC 15'",
                        "en" => "LC 15' Container Pool",
                        "fr" => "Piscine Container LC 15'",
                        "pt" => "piscinas Contentor LC 15'",
                        "es" => "piscinas Contenedor LC 15'"
                    ],
                    "price" => "3,543.54",
                    "old_price" => "5,062.20",
                    "sku" => "3276610731",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-container-lc-15/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "La piscinas Container LC 15' offre un'esperienza esclusiva in spazi ridotti.Questo modulo compatto, realizzato in acciaio resistente, è perfetto per chi cerca una piscinas privata moderna, funzionale e facilmente trasportabile.\nDesign stackable (fino a 3 unità) per spazi modulari\nOttime capacità di carico e isolamento, ideale per ambienti esterni\nPossibilità di personalizzazione per adattarsi ad ogni esigenza",
                        "en" => "The LC 15' Container Pool offers an exclusive experience in small spaces. This compact module, made of resistant steel, is perfect for those looking for a modern, functional and easily transportable private pool.\nStackable design (up to 3 units) for modular spaces\nExcellent load capacity and insulation, ideal for outdoor environments\nCustomization possibility to adapt to every need",
                        "fr" => "La Piscine Container LC 15' offre une expérience exclusive dans les petits espaces. Ce module compact, en acier résistant, est parfait pour ceux qui recherchent une piscine privée moderne, fonctionnelle et facilement transportable.\nDesign empilable (jusqu'à 3 unités) pour espaces modulables\nExcellente capacité de charge et isolation, idéal pour les environnements extérieurs\nPossibilité de personnalisation pour s'adapter à chaque besoin",
                        "pt" => "A piscinas Contentor LC 15' oferece uma experiência exclusiva em espaços reduzidos. Este módulo compacto, em aço resistente, é perfeito para quem procura uma piscinas privada moderna, funcional e facilmente transportável.\nDesign empilhável (até 3 unidades) para espaços modulares\nExcelente capacidade de carga e isolamento, ideal para ambientes exteriores\nPossibilidade de personalização para se adaptar a cada necessidade",
                        "es" => "La piscinas Contenedor LC 15' ofrece una experiencia exclusiva en espacios reducidos. Este módulo compacto, de acero resistente, es perfecto para quienes buscan una piscinas privada moderna, funcional y fácilmente transportable.\nDiseño apilable (hasta 3 unidades) para espacios modulares\nExcelente capacidad de carga y aislamiento, ideal para ambientes exteriores\nPosibilidad de personalización para adaptarse a cada necesidad"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/6-54-300x300.jpeg",
                        "/assets/uploads/2025/11/7-41-300x300.jpeg",
                        "/assets/uploads/2025/11/8-29-300x300.jpeg",
                        "/assets/uploads/2025/11/9-22-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10705",
                    "name" => [
                        "it" => "piscinas Contenitore 12 Metri",
                        "en" => "12 Meter Container Pool",
                        "fr" => "Piscine Conteneur 12 Mètres",
                        "pt" => "piscinas Contentor 12 Metros",
                        "es" => "piscinas Contenedor 12 Metros"
                    ],
                    "price" => "5,625.62",
                    "old_price" => "8,036.60",
                    "sku" => "3276610705",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-contenitore-12-metri/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "piscinas Contenitore 12 Metri – Design industriale e comfort senza lavori\nInstallazione senza permessi\nCapacità oltre 30.000 litri\nIlluminazione LED subacquea\nSistema di filtrazione completo\nLocale tecnico integrato o esterno\n100% personalizzabile",
                        "en" => "12 Meter Container Pool – Industrial design and comfort without construction work\nInstallation without permits\nCapacity over 30,000 liters\nUnderwater LED lighting\nComplete filtration system\nIntegrated or external technical room\n100% customizable",
                        "fr" => "Piscine Conteneur 12 Mètres – Design industriel et confort sans travaux\nInstallation sans permis\nCapacité de plus de 30 000 litres\nÉclairage LED subaquatique\nSystème de filtration complet\nLocal technique intégré ou externe\n100% personnalisable",
                        "pt" => "piscinas Contentor 12 Metros – Design industrial e conforto sem obras\nInstalação sem licenças\nCapacidade superior a 30.000 litros\nIluminação LED subaquática\nSistema de filtração completo\nCompartimento técnico integrado ou externo\n100% personalizável",
                        "es" => "piscinas Contenedor 12 Metros – Diseño industrial y confort sin obras\nInstalación sin permisos\nCapacidad superior a 30.000 litros\nIluminación LED subacuática\nSistema de filtración completo\nCuarto técnico integrado o externo\n100% personalizable"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-16-300x300.webp",
                        "/assets/uploads/2025/11/2-18-300x300.webp",
                        "/assets/uploads/2025/11/3-17-1-300x300.webp",
                        "/assets/uploads/2025/11/4-12-300x300.jpg",
                        "/assets/uploads/2025/11/5-11-300x300.jpg",
                        "/assets/uploads/2025/11/6-11-300x300.webp",
                        "/assets/uploads/2025/11/7-8-300x300.webp",
                        "/assets/uploads/2025/11/8-6-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10794",
                    "name" => [
                        "it" => "piscinas Contenitore 20' – Design Pronto all'Uso",
                        "en" => "20' Container Pool – Ready-to-Use Design",
                        "fr" => "Piscine Conteneur 20' – Design Prêt à l'Emploi",
                        "pt" => "piscinas Contentor 20' – Design Pronto a Usar",
                        "es" => "piscinas Contenedor 20' – Diseño Listo para Usar"
                    ],
                    "price" => "4,954.95",
                    "old_price" => "7,078.50",
                    "sku" => "3276610794",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-contenitore-20-design-pronto-alluso/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "Una piscinas container di design, completamente attrezzata e pronta all'uso per trasformare il tuo spazio esterno in un'oasi privata. Nessuno scavo, nessuna attesa.\nStruttura container rinforzata con rivestimento effetto mosaico\nLED sommersi e scala in acciaio inox\nPorta bambini, piattaforma WPC, pronta in 1 giorno",
                        "en" => "A designer container pool, fully equipped and ready to use to transform your outdoor space into a private oasis. No excavation, no waiting.\nReinforced container structure with mosaic effect coating\nSubmerged LEDs and stainless steel ladder\nChild safety gate, WPC platform, ready in 1 day",
                        "fr" => "Une piscine conteneur de designer, entièrement équipée et prête à l'emploi pour transformer votre espace extérieur en oasis privée. Aucun terrassement, aucune attente.\nStructure conteneur renforcée avec revêtement effet mosaïque\nLED immergées et échelle en acier inoxydable\nBarrière enfant, plateforme WPC, prête en 1 jour",
                        "pt" => "Uma piscinas contentor de design, completamente equipada e pronta a usar para transformar o seu espaço exterior num oásis privado. Sem escavações, sem esperas.\nEstrutura de contentor reforçada com revestimento efeito mosaico\nLED submersos e escada em aço inoxidável\nPorta de segurança para crianças, plataforma WPC, pronta em 1 dia",
                        "es" => "Una piscinas contenedor de diseño, completamente equipada y lista para usar para transformar tu espacio exterior en un oasis privado. Sin excavaciones, sin esperas.\nEstructura de contenedor reforzada con revestimiento efecto mosaico\nLED sumergidos y escalera de acero inoxidable\nPuerta de seguridad para niños, plataforma WPC, lista en 1 día"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-74-300x300.jpeg",
                        "/assets/uploads/2025/11/1-74-300x300.jpeg",
                        "/assets/uploads/2025/11/4-70-300x300.jpeg",
                        "/assets/uploads/2025/11/5-66-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10792",
                    "name" => [
                        "it" => "piscinas Contenitore 20' – Pronta all'Uso, Stile Garantito",
                        "en" => "20' Container Pool – Ready to Use, Guaranteed Style",
                        "fr" => "Piscine Conteneur 20' – Prête à l'Emploi, Style Garanti",
                        "pt" => "piscinas Contentor 20' – Pronta a Usar, Estilo Garantido",
                        "es" => "piscinas Contenedor 20' – Lista para Usar, Estilo Garantizado"
                    ],
                    "price" => "3,923.92",
                    "old_price" => "5,605.60",
                    "sku" => "3276610792",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-contenitore-20%e2%80%b2-pronta-alluso-stile-garantito/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "Una piscinas container elegante e resistente per trasformare il tuo giardino in un angolo di benessere.Grazie alla struttura in acciaio rinforzato e agli accessori di lusso, è pronta all'uso in poche ore!\nLED multicolore, frigo integrato, zona tanning\nRivestimento epossidico e isolamento termico\nRiscaldamento e filtrazione inclusi",
                        "en" => "An elegant and resistant container pool to transform your garden into a wellness corner. Thanks to the reinforced steel structure and luxury accessories, it is ready to use in a few hours!\nMulticolored LEDs, integrated fridge, tanning area\nEpoxy coating and thermal insulation\nHeating and filtration included",
                        "fr" => "Une piscine conteneur élégante et résistante pour transformer votre jardin en coin bien-être. Grâce à la structure en acier renforcé et aux accessoires de luxe, elle est prête à l'emploi en quelques heures!\nLED multicolores, frigo intégré, zone de bronzage\nRevêtement époxy et isolation thermique\nChauffage et filtration inclus",
                        "pt" => "Uma piscinas contentor elegante e resistente para transformar o seu jardim num recanto de bem-estar. Graças à estrutura de aço reforçado e aos acessórios de luxo, está pronta a usar em poucas horas!\nLED multicolor, frigorífico integrado, zona de bronzeamento\nRevestimento epóxi e isolamento térmico\nAquecimento e filtração incluídos",
                        "es" => "Una elegante y resistente piscinas contenedor para transformar tu jardín en un rincón de bienestar. ¡Gracias a la estructura de acero reforzado y los accesorios de lujo, está lista para usar en pocas horas!\nLED multicolor, nevera integrada, zona de bronceado\nRevestimiento epoxi y aislamiento térmico\nCalefacción y filtración incluidas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-73-300x300.jpeg",
                        "/assets/uploads/2025/11/2-73-300x300.jpeg",
                        "/assets/uploads/2025/11/3-69-300x300.jpeg",
                        "/assets/uploads/2025/11/4-69-300x300.jpeg",
                        "/assets/uploads/2025/11/5-65-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10704",
                    "name" => [
                        "it" => "piscinas Contenitore Premium 6,2 x 2,5 m",
                        "en" => "Premium Container Pool 6.2 x 2.5 m",
                        "fr" => "Piscine Conteneur Premium 6,2 x 2,5 m",
                        "pt" => "piscinas Contentor Premium 6,2 x 2,5 m",
                        "es" => "piscinas Contenedor Premium 6,2 x 2,5 m"
                    ],
                    "price" => "5,630.62",
                    "old_price" => "8,043.75",
                    "sku" => "3276610704",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-contenitore-premium-62-x-25-m/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "piscinas Contenitore Premium 6,2 m – Design moderno e comfort 4 stagioni\nPronta all'uso con pompa di calore inclusa\nCopertura scorrevole in plexiglass\nIlluminazione LED per bagni notturni\nFondo e scale in WPC antiscivolo\nSistema di filtrazione ad alte prestazioni\nKit di pulizia incluso",
                        "en" => "Premium Container Pool 6.2 m – Modern design and 4-season comfort\nReady to use with heat pump included\nSliding plexiglass cover\nLED lighting for night swimming\nAnti-slip WPC bottom and stairs\nHigh-performance filtration system\nCleaning kit included",
                        "fr" => "Piscine Conteneur Premium 6,2 m – Design moderne et confort 4 saisons\nPrête à l'emploi avec pompe à chaleur incluse\nCouverture coulissante en plexiglas\nÉclairage LED pour bains de nuit\nFond et marches en WPC antidérapant\nSystème de filtration haute performance\nKit de nettoyage inclus",
                        "pt" => "piscinas Contentor Premium 6,2 m – Design moderno e conforto 4 estações\nPronta a usar com bomba de calor incluída\nCobertura deslizante em plexiglass\nIluminação LED para banhos noturnos\nFundo e escadas em WPC antiderrapante\nSistema de filtração de alto desempenho\nKit de limpeza incluído",
                        "es" => "piscinas Contenedor Premium 6,2 m – Diseño moderno y confort 4 estaciones\nLista para usar con bomba de calor incluida\nCubierta corredera de plexiglás\nIluminación LED para baños nocturnos\nFondo y escaleras de WPC antideslizante\nSistema de filtración de alto rendimiento\nKit de limpieza incluido"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-8-300x300.jpg",
                        "/assets/uploads/2025/11/2-300x300.jpg",
                        "/assets/uploads/2025/11/3-300x300.jpg",
                        "/assets/uploads/2025/11/4-1-300x300.jpg",
                        "/assets/uploads/2025/11/5-1-300x300.jpg",
                        "/assets/uploads/2025/11/6-1-300x300.jpg",
                        "/assets/uploads/2025/11/7-1-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10791",
                    "name" => [
                        "it" => "piscinas ElitePool Sport & Spa",
                        "en" => "ElitePool Sport & Spa Pool",
                        "fr" => "Piscine ElitePool Sport & Spa",
                        "pt" => "piscinas ElitePool Sport & Spa",
                        "es" => "piscinas ElitePool Sport & Spa"
                    ],
                    "price" => "3,378.37",
                    "old_price" => "4,826.25",
                    "sku" => "3276610791",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-elitepool-sport-spa/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "La ElitePool Sport & Spa è la piscinas modulare perfetta per chi desidera combinare sport, relax e design in un'unica soluzione compatta e tecnologica.Dotata di sistema di nuoto controcorrente, finestra panoramica integrata e copertura automatica, garantisce un'esperienza di lusso direttamente nel tuo giardino.\nVasca in polipropilene e struttura in acciaio\nIlluminazione LED e pompa di calore\nCopertura scorrevole automatica con telecomando",
                        "en" => "The ElitePool Sport & Spa is the perfect modular pool for those who want to combine sport, relaxation and design in a single compact and technological solution. Equipped with a counter-current swimming system, integrated panoramic window and automatic cover, it guarantees a luxury experience directly in your garden.\nPolypropylene tank and steel structure\nLED lighting and heat pump\nAutomatic sliding cover with remote control",
                        "fr" => "La ElitePool Sport & Spa est la piscine modulaire parfaite pour ceux qui souhaitent combiner sport, détente et design dans une seule solution compacte et technologique. Dotée d'un système de nage à contre-courant, d'une fenêtre panoramique intégrée et d'une couverture automatique, elle garantit une expérience de luxe directement dans votre jardin.\nBassin en polypropylène et structure en acier\nÉclairage LED et pompe à chaleur\nCouverture coulissante automatique avec télécommande",
                        "pt" => "A ElitePool Sport & Spa é a piscinas modular perfeita para quem deseja combinar desporto, relaxamento e design numa única solução compacta e tecnológica. Equipada com sistema de natação contra-corrente, janela panorâmica integrada e cobertura automática, garante uma experiência de luxo diretamente no seu jardim.\nTanque em polipropileno e estrutura em aço\nIluminação LED e bomba de calor\nCobertura deslizante automática com comando",
                        "es" => "La ElitePool Sport & Spa es la piscinas modular perfecta para quienes desean combinar deporte, relax y diseño en una única solución compacta y tecnológica. Equipada con sistema de natación a contracorriente, ventana panorámica integrada y cubierta automática, garantiza una experiencia de lujo directamente en tu jardín.\nVaso de polipropileno y estructura de acero\nIluminación LED y bomba de calor\nCubierta corredera automática con mando a distancia"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-6-1-300x270.jpg",
                        "/assets/uploads/2025/11/2-7-300x270.jpg",
                        "/assets/uploads/2025/11/3-6-300x270.jpg",
                        "/assets/uploads/2025/11/4-3-1-1-300x270.webp",
                        "/assets/uploads/2025/11/5-3-1-300x270.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10793",
                    "name" => [
                        "it" => "piscinas Sport & Spa in Polipropilene",
                        "en" => "Polypropylene Sport & Spa Pool",
                        "fr" => "Piscine Sport & Spa en Polypropylène",
                        "pt" => "piscinas Sport & Spa em Polipropileno",
                        "es" => "piscinas Sport & Spa en Polipropileno"
                    ],
                    "price" => "5,105.10",
                    "old_price" => "7,293.00",
                    "sku" => "3276610793",
                    "discount_percentage" => null,
                    "link" => "/product/piscinas-sport-spa-in-polipropilene/",
                    "categories" => ["piscinas"],
                    "short_description" => [
                        "it" => "Un'esperienza completa di benessere e sport in giardino con la piscinas fuori terra Sport & Spa in polipropilene. Allenati, rilassati e goditi l'eleganza.\nSistema Jet-Swim regolabile per nuoto controcorrente\nPompa di calore, LED e filtrazione inclusi\nPronta all'uso in 24 ore, senza opere murarie",
                        "en" => "A complete wellness and sports experience in the garden with the Sport & Spa above-ground polypropylene pool. Train, relax and enjoy the elegance.\nAdjustable Jet-Swim system for counter-current swimming\nHeat pump, LED and filtration included\nReady to use in 24 hours, no masonry work",
                        "fr" => "Une expérience complète de bien-être et de sport dans le jardin avec la piscine hors-sol Sport & Spa en polypropylène. Entraînez-vous, détendez-vous et profitez de l'élégance.\nSystème Jet-Swim réglable pour nage à contre-courant\nPompe à chaleur, LED et filtration inclus\nPrête à l'emploi en 24 heures, sans maçonnerie",
                        "pt" => "Uma experiência completa de bem-estar e desporto no jardim com a piscinas acima do solo Sport & Spa em polipropileno. Treine, relaxe e desfrute da elegância.\nSistema Jet-Swim ajustável para natação contra-corrente\nBomba de calor, LED e filtração incluídos\nPronta a usar em 24 horas, sem obras de alvenaria",
                        "es" => "Una experiencia completa de bienestar y deporte en el jardín con la piscinas elevada Sport & Spa de polipropileno. Entrena, relájate y disfruta de la elegancia.\nSistema Jet-Swim ajustable para natación a contracorriente\nBomba de calor, LED y filtración incluidos\nLista para usar en 24 horas, sin obras de albañilería"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-7-1-300x276.jpg",
                        "/assets/uploads/2025/11/2-8-300x278.jpg",
                        "/assets/uploads/2025/11/3-4-1-1-300x271.webp",
                        "/assets/uploads/2025/11/4-7-300x256.jpg",
                        "/assets/uploads/2025/11/5-4-1-300x262.webp",
                        "/assets/uploads/2025/11/6-4-300x278.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11367",
                    "name" => [
                        "it" => "Re della Nuova Casa – 1",
                        "en" => "King of the New House – 1",
                        "fr" => "Roi de la Nouvelle Maison – 1",
                        "pt" => "Rei da Nova Casa – 1",
                        "es" => "Rey de la Nueva Casa – 1"
                    ],
                    "price" => "9,699.00",
                    "old_price" => "10,560.00",
                    "sku" => "3276611367",
                    "discount_percentage" => null,
                    "link" => "/product/re-della-nuova-casa-1/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/325928184_892433998768604_8763895310723324424_n-300x300.jpg",
                        "/assets/uploads/2025/11/326096627_884476026036937_2385885670855429869_n-300x300.jpg",
                        "/assets/uploads/2025/11/326082886_563147195675137_8678736941959032680_n-300x300.jpg",
                        "/assets/uploads/2025/11/325941688_903654980826744_823274411623961840_n-300x300.jpg",
                        "/assets/uploads/2025/11/325206200_482853917383646_6215370490962704202_n-300x300.jpg",
                        "/assets/uploads/2025/11/325623869_1662701584182671_5226369081286477279_n-300x300.jpg",
                        "/assets/uploads/2025/11/325896412_1207336193227113_2190616670215283058_n-300x300.jpg",
                        "/assets/uploads/2025/11/325467809_935164774142896_763542153755966074_n-300x300.jpg",
                        "/assets/uploads/2025/11/326270578_840975973654076_276854648698111817_n-300x300.jpg",
                        "/assets/uploads/2025/11/325848178_531879705671116_7393851848604399670_n-300x300.jpg",
                        "/assets/uploads/2025/11/326219488_1136009647113803_6908760792462968144_n-300x300.jpg",
                        "/assets/uploads/2025/11/325853867_501345202069679_3965833226892761027_n-300x300.jpg",
                        "/assets/uploads/2025/11/325916579_5975947179132794_6073977506289527902_n-300x300.jpg",
                        "/assets/uploads/2025/11/326127732_3518658285016175_347486268096731797_n-300x300.jpg",
                        "/assets/uploads/2025/11/325918784_1491861827976497_879281557305606816_n-300x300.jpg",
                        "/assets/uploads/2025/11/325305902_717614683345208_2381326647512729625_n-300x300.jpg",
                        "/assets/uploads/2025/11/325647387_2398722080280399_8484449171984139352_n-300x300.jpg",
                        "/assets/uploads/2025/11/325928525_1213127676281961_6896238669853306140_n-300x300.jpg",
                        "/assets/uploads/2025/11/325941137_650707920188718_7496014670750951912_n-300x300.jpg",
                        "/assets/uploads/2025/11/325292601_568167538191409_7653947945478308759_n-300x300.jpg",
                        "/assets/uploads/2025/11/325579899_1651566511942088_6738137843285935915_n-300x300.jpg",
                        "/assets/uploads/2025/11/321234284_913369456332031_651144706193721275_n-300x300.jpg",
                        "/assets/uploads/2025/11/325435980_501767205405698_8044043369855982358_n-300x300.jpg",
                        "/assets/uploads/2025/11/325800316_681591257044612_5935309113154802830_n-300x300.jpg",
                        "/assets/uploads/2025/11/325800316_3350111515210324_8462651535369178190_n-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10948",
                    "name" => [
                        "it" => "Reefer High Cube da 40 piedi",
                        "en" => "40 ft High Cube Reefer",
                        "fr" => "Reefer High Cube 40 pieds",
                        "pt" => "Reefer High Cube de 40 pés",
                        "es" => "Reefer High Cube de 40 pies"
                    ],
                    "price" => "6,970.00",
                    "old_price" => null,
                    "sku" => "3276610948",
                    "discount_percentage" => null,
                    "link" => "/product/reefer-high-cube-da-40-piedi/",
                    "categories" => ["container-refrigerati", "contenitori-40-piedi"],
                    "short_description" => [
                        "it" => "Il container frigorifero più grande della gamma – con intervallo di temperatura da -25 °C a +25 °C. Ideale per lo stoccaggio e il trasporto refrigerato. Testato PTI, con pavimento a T, rivestimento in acciaio inox e collegamento a 380V.   Disponibile per il noleggio o l'acquisto.",
                        "en" => "The largest reefer container in the range – with temperature range from -25 °C to +25 °C. Ideal for refrigerated storage and transport. PTI tested, with T-floor, stainless steel lining and 380V connection. Available for rent or purchase.",
                        "fr" => "Le plus grand conteneur frigorifique de la gamme – avec plage de température de -25 °C à +25 °C. Idéal pour le stockage et le transport réfrigéré. Testé PTI, avec plancher à T, revêtement en acier inoxydable et connexion 380V. Disponible à la location ou à l'achat.",
                        "pt" => "O maior contentor frigorífico da gama – com intervalo de temperatura de -25 °C a +25 °C. Ideal para armazenamento e transporte refrigerado. Testado PTI, com piso em T, revestimento em aço inoxidável e ligação 380V. Disponível para aluguer ou compra.",
                        "es" => "El contenedor frigorífico más grande de la gama – con rango de temperatura de -25 °C a +25 °C. Ideal para almacenamiento y transporte refrigerado. Probado PTI, con suelo en T, revestimiento de acero inoxidable y conexión 380V. Disponible para alquiler o compra."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_p1020526_small_1000x9999-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11233",
                    "name" => [
                        "it" => "SNACK – CONTENITORE GUINGUETTE",
                        "en" => "SNACK – GUINGUETTE CONTAINER",
                        "fr" => "SNACK – CONTENEUR GUINGUETTE",
                        "pt" => "SNACK – CONTENTOR GUINGUETTE",
                        "es" => "SNACK – CONTENEDOR GUINGUETTE"
                    ],
                    "price" => "4,100.00",
                    "old_price" => "5,500.00",
                    "sku" => "3276611233",
                    "discount_percentage" => null,
                    "link" => "/product/snack-contenitore-guinguette/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Realizzazione di uno snack bar, food truck, taverna in un container marittimo.\nCapire :\n1 container primo viaggio da 20′ (6mx2,45×2,60m)\nAperture:\n1 Tenda a gas 2000 x 1200 mm\n1 Tenda a gas 3000 x 1200 mm\nContatori:\n1 Bancone pieghevole 2000x300mm\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella a 2 righe\n2 luci LED impermeabili\n10 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nPavimento: resina gelcoat grigia con scarico a pavimento per il drenaggio\nVerniciatura: vernice RAL 7016 su tutto il contenitore.\nRivestimento in legno: realizzazione rivestimento in legno di abete Douglas\nImpianto idraulico: ingresso e uscita dell'acqua, installazione dell'approvvigionamento idrico.\nCappa: Fornitura e posa in opera di una cappa da 2 mt con aspirazione a soffitto.\nImmersione: Fornitura e installazione di un'immersione cumuliforme istantanea",
                        "en" => "Creation of a snack bar, food truck, tavern in a shipping container.\nIncludes:\n1 first trip 20′ container (6mx2.45×2.60m)\nOpenings:\n1 Gas strut window 2000 x 1200 mm\n1 Gas strut window 3000 x 1200 mm\nCounters:\n1 Folding counter 2000x300mm\n1 Folding counter 3000x300mm\nELECTRICAL INSTALLATION:\n1 2-row panel\n2 waterproof LED lights\n10 service sockets 16A+T\n1 single power switch\n1 quick meal\nInternal insulation:\n40mm White Food Sandwich Panel\nFloor: gray gelcoat resin with floor drain for drainage\nPainting: RAL 7016 paint on the entire container.\nWood cladding: Douglas fir wood cladding\nPlumbing system: water inlet and outlet, water supply installation.\nHood: Supply and installation of a 2 m hood with ceiling extraction.\nImmersion: Supply and installation of an instantaneous cumulus immersion heater",
                        "fr" => "Réalisation d'un snack bar, food truck, guinguette dans un conteneur maritime.\nComprend :\n1 conteneur premier voyage 20′ (6mx2,45×2,60m)\nOuvertures :\n1 Rideau gaz 2000 x 1200 mm\n1 Rideau gaz 3000 x 1200 mm\nComptoirs :\n1 Comptoir rabattable 2000x300mm\n1 Comptoir rabattable 3000x300mm\nINSTALLATION ÉLECTRIQUE :\n1 tableau 2 rangées\n2 lumières LED étanches\n10 prises de service 16A+T\n1 interrupteur d'alimentation simple\n1 repas rapide\nIsolation intérieure :\nPanneau Sandwich Alimentaire 40mm Blanc\nSol : résine gelcoat grise avec sol drainant pour l'évacuation de l'eau\nPeinture : peinture RAL 7016 sur l'intégralité du conteneur.\nBardage bois : réalisation d'un bardage en bois Douglas\nPlomberie : arrivée et sortie d'eau, installation de l'alimentation en eau.\nHotte : Fourniture et pose d'une hotte de 2 mt avec aspiration en plafond.\nImmersion : Fourniture et pose d'un ballon d'eau chaude instantanée",
                        "pt" => "Criação de um snack bar, food truck, taberna num contentor marítimo.\nInclui:\n1 contentor primeira viagem 20′ (6mx2,45×2,60m)\nAberturas:\n1 Janela com amortecedor a gás 2000 x 1200 mm\n1 Janela com amortecedor a gás 3000 x 1200 mm\nBalcões:\n1 Balcão rebatível 2000x300mm\n1 Balcão rebatível 3000x300mm\nINSTALAÇÃO ELÉTRICA:\n1 quadro de 2 filas\n2 luzes LED estanques\n10 tomadas de serviço 16A+T\n1 interruptor de alimentação simples\n1 refeição rápida\nIsolamento interno:\nPainel Sanduíche Alimentar Branco 40mm\nPiso: resina gelcoat cinzenta com ralo de piso para drenagem\nPintura: tinta RAL 7016 em todo o contentor.\nRevestimento em madeira: revestimento em madeira de abeto Douglas\nCanalização: entrada e saída de água, instalação do abastecimento de água.\nExaustor: Fornecimento e instalação de um exaustor de 2 m com extração no teto.\nImersão: Fornecimento e instalação de um esquentador instantâneo",
                        "es" => "Creación de un snack bar, food truck, taberna en un contenedor marítimo.\nIncluye:\n1 contenedor primer viaje 20′ (6mx2,45×2,60m)\nAberturas:\n1 Ventana con muelle de gas 2000 x 1200 mm\n1 Ventana con muelle de gas 3000 x 1200 mm\nMostradores:\n1 Mostrador abatible 2000x300mm\n1 Mostrador abatible 3000x300mm\nINSTALACIÓN ELÉCTRICA:\n1 cuadro de 2 filas\n2 luces LED estancas\n10 tomas de servicio 16A+T\n1 interruptor de alimentación simple\n1 comida rápida\nAislamiento interior:\nPanel Sándwich Alimentario Blanco 40mm\nSuelo: resina gelcoat gris con desagüe de suelo para drenaje\nPintura: pintura RAL 7016 en todo el contenedor.\nRevestimiento de madera: revestimiento de madera de abeto Douglas\nFontanería: entrada y salida de agua, instalación del suministro de agua.\nCampana: Suministro e instalación de una campana de 2 m con extracción en techo.\nInmersión: Suministro e instalación de un calentador instantáneo acumulativo"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_765ba40e-8c94-4cb1-a7bd-e7dc5d561a0d-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_24e63ff7-6f33-4566-b554-8b8f484205ec-300x300.jpg",
                        "/assets/uploads/2025/11/rn-image_picker_lib_temp_ea0905d2-cc6f-4c74-b314-2aa99b2dc74e-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10702",
                    "name" => [
                        "it" => "Snack-BOX 20' con Accessori Speciali",
                        "en" => "20' Snack-BOX with Special Accessories",
                        "fr" => "Snack-BOX 20' avec Accessoires Spéciaux",
                        "pt" => "Snack-BOX 20' com Acessórios Especiais",
                        "es" => "Snack-BOX 20' con Accesorios Especiales"
                    ],
                    "price" => "1,726.72",
                    "old_price" => "2,466.75",
                    "sku" => "3276610702",
                    "discount_percentage" => null,
                    "link" => "/product/snack-box-20%e2%80%b2-con-accessori-speciali/",
                    "categories" => ["cafetaria-bar-restaurante"],
                    "short_description" => [
                        "it" => "Snack-BOX 20' – Contenitore professionale per uso alimentare\nIsolamento termico e vernice alimentare\nSerranda elettrica + porta acciaio Corten\nPavimento antiscivolo con scarico\nImpianto elettrico certificato\nPerfetto per street food, fiere e chioschi mobili",
                        "en" => "20' Snack-BOX – Professional container for food use\nThermal insulation and food-safe paint\nElectric roller shutter + Corten steel door\nAnti-slip floor with drain\nCertified electrical system\nPerfect for street food, fairs and mobile kiosks",
                        "fr" => "Snack-BOX 20' – Conteneur professionnel pour usage alimentaire\nIsolation thermique et peinture alimentaire\nVolet roulant électrique + porte acier Corten\nSol antidérapant avec vidange\nInstallation électrique certifiée\nParfait pour le street food, les foires et kiosques mobiles",
                        "pt" => "Snack-BOX 20' – Contentor profissional para uso alimentar\nIsolamento térmico e tinta alimentar\nPorta de enrolar elétrica + porta em aço Corten\nPiso antiderrapante com dreno\nInstalação elétrica certificada\nPerfeito para street food, feiras e quiosques móveis",
                        "es" => "Snack-BOX 20' – Contenedor profesional para uso alimentario\nAislamiento térmico y pintura alimentaria\nPuerta enrollable eléctrica + puerta de acero Corten\nSuelo antideslizante con desagüe\nInstalación eléctrica certificada\nPerfecto para street food, ferias y quioscos móviles"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-4-1-300x300.webp",
                        "/assets/uploads/2025/11/1-3-1-300x300.webp",
                        "/assets/uploads/2025/11/3-7-300x300.webp",
                        "/assets/uploads/2025/11/4-3-1-300x300.webp",
                        "/assets/uploads/2025/11/5-2-1-300x300.webp",
                        "/assets/uploads/2025/11/6-1-1-300x300.webp",
                        "/assets/uploads/2025/11/7-2-300x300.webp",
                        "/assets/uploads/2025/11/8-2-300x300.webp",
                        "/assets/uploads/2025/11/9-300x300.webp",
                        "/assets/uploads/2025/11/10-300x245.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10500",
                    "name" => [
                        "it" => "Tiny House Modular L15",
                        "en" => "Tiny House Modular L15",
                        "fr" => "Tiny House Modular L15",
                        "pt" => "Tiny House Modular L15",
                        "es" => "Tiny House Modular L15"
                    ],
                    "price" => "4,924.92",
                    "old_price" => "7,035.60",
                    "sku" => "3276610500",
                    "discount_percentage" => null,
                    "link" => "/product/tiny-house-modular-l15/",
                    "categories" => ["contentores-casa"],
                    "short_description" => [
                        "it" => "Tiny House Modular L15 su container marittimo 20' High Cube nuova e abitabile.Perfetta come casa secondaria, ufficio privato o soluzione abitativa sostenibile.\nSuperficie utile: 11,2 m²\nIsolamento U ≤ 0,16 W/m²K\nCucina e bagno completi\nClimatizzazione e LED inclusi\nPronta all'uso, 100% arredata",
                        "en" => "Tiny House Modular L15 on new and habitable 20' High Cube shipping container. Perfect as a second home, private office or sustainable housing solution.\nUsable area: 11.2 m²\nInsulation U ≤ 0.16 W/m²K\nComplete kitchen and bathroom\nAir conditioning and LED included\nReady to use, 100% furnished",
                        "fr" => "Tiny House Modular L15 sur conteneur maritime 20' High Cube neuf et habitable. Parfaite comme résidence secondaire, bureau privé ou solution d'habitat durable.\nSurface utile : 11,2 m²\nIsolation U ≤ 0,16 W/m²K\nCuisine et salle de bain complètes\nClimatisation et LED inclus\nPrête à l'emploi, 100% meublée",
                        "pt" => "Tiny House Modular L15 em contentor marítimo 20' High Cube novo e habitável. Perfeita como segunda casa, escritório privado ou solução habitacional sustentável.\nÁrea útil: 11,2 m²\nIsolamento U ≤ 0,16 W/m²K\nCozinha e casa de banho completas\nClimatização e LED incluídos\nPronta a usar, 100% mobilada",
                        "es" => "Tiny House Modular L15 sobre contenedor marítimo 20' High Cube nuevo y habitable. Perfecta como segunda vivienda, oficina privada o solución habitacional sostenible.\nSuperficie útil: 11,2 m²\nAislamiento U ≤ 0,16 W/m²K\nCocina y baño completos\nClimatización y LED incluidos\nLista para usar, 100% amueblada"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-54-300x300.jpeg",
                        "/assets/uploads/2025/11/2-52-300x300.jpeg",
                        "/assets/uploads/2025/11/3-51-300x300.jpeg",
                        "/assets/uploads/2025/11/4-50-300x300.jpeg",
                        "/assets/uploads/2025/11/5-46-300x300.jpeg",
                        "/assets/uploads/2025/11/6-38-300x300.jpeg",
                        "/assets/uploads/2025/11/7-32-300x300.jpeg",
                        "/assets/uploads/2025/11/8-23-300x300.jpeg",
                        "/assets/uploads/2025/11/9-18-300x300.jpeg",
                        "/assets/uploads/2025/11/10-12-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11234",
                    "name" => [
                        "it" => "TRIBUNA / TRIBUNA CONTAINER",
                        "en" => "BLEACHERS / CONTAINER BLEACHERS",
                        "fr" => "TRIBUNE / TRIBUNE CONTAINER",
                        "pt" => "BANCADA / BANCADA CONTENTOR",
                        "es" => "GRADA / GRADA CONTENEDOR"
                    ],
                    "price" => "4,600.00",
                    "old_price" => "5,500.00",
                    "sku" => "3276611234",
                    "discount_percentage" => null,
                    "link" => "/product/tribuna-tribuna-container/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Tribune e tribune per eventi sportivi, spettacoli, concerti e spettacoli di ogni tipo.\nLa tribuna/tribuna può misurare 6 m x 2,45 m oppure 12 m x 2,45 m.\nTribuna completamente coperta, trasportabile e impermeabile",
                        "en" => "Bleachers and stands for sporting events, shows, concerts and performances of all kinds.\nThe bleachers/stand can measure 6 m x 2.45 m or 12 m x 2.45 m.\nFully covered, transportable and waterproof bleacher",
                        "fr" => "Tribunes et gradins pour événements sportifs, spectacles, concerts et représentations de toutes sortes.\nLa tribune/les gradins peuvent mesurer 6 m x 2,45 m ou 12 m x 2,45 m.\nTribune entièrement couverte, transportable et imperméable",
                        "pt" => "Bancadas e arquibancadas para eventos desportivos, espetáculos, concertos e atuações de todos os tipos.\nA bancada/arquibancada pode medir 6 m x 2,45 m ou 12 m x 2,45 m.\nBancada totalmente coberta, transportável e impermeável",
                        "es" => "Gradas y tribunas para eventos deportivos, espectáculos, conciertos y actuaciones de todo tipo.\nLa grada/tribuna puede medir 6 m x 2,45 m o 12 m x 2,45 m.\nGrada totalmente cubierta, transportable e impermeable"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2ef49d77ecab6ee3476b2ea2fd61c8b73a01c72b-300x300.jpg",
                        "/assets/uploads/2025/11/349845a4e3b1f28babfa7348b50902fb45e1f7cb-300x300.jpg",
                        "/assets/uploads/2025/11/a205d93f21cb6ca3edde318d2eac3d089e109c91-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11158",
                    "name" => [
                        "it" => "Ufficio Container di 18 m² con Servizi Igienici",
                        "en" => "18 m² Office Container with Toilet Facilities",
                        "fr" => "Conteneur Bureau de 18 m² avec Sanitaires",
                        "pt" => "Contentor Escritório de 18 m² com Instalações Sanitárias",
                        "es" => "Contenedor Oficina de 18 m² con Aseos"
                    ],
                    "price" => "4,000.00",
                    "old_price" => null,
                    "sku" => "3276611158",
                    "discount_percentage" => null,
                    "link" => "/product/ufficio-container-di-18-m%c2%b2-con-servizi-igienici/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "Ufficio container di 18 m² con servizi igienici integrati, ideale per uno spazio di lavoro moderno e confortevole. Installazione veloce e garanzia di 2 anni.",
                        "en" => "18 m² office container with integrated toilet facilities, ideal for a modern and comfortable workspace. Quick installation and 2-year warranty.",
                        "fr" => "Conteneur bureau de 18 m² avec sanitaires intégrés, idéal pour un espace de travail moderne et confortable. Installation rapide et garantie de 2 ans.",
                        "pt" => "Contentor escritório de 18 m² com instalações sanitárias integradas, ideal para um espaço de trabalho moderno e confortável. Instalação rápida e garantia de 2 anos.",
                        "es" => "Contenedor oficina de 18 m² con aseos integrados, ideal para un espacio de trabajo moderno y confortable. Instalación rápida y garantía de 2 años."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-4-300x300.png",
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-300x300.png",
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-0-300x300.png",
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-1-300x300.png",
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-2-300x300.png",
                        "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-3-300x300.png"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10697",
                    "name" => [
                        "it" => "Ufficio da Giardino 20 Piedi su Misura",
                        "en" => "Custom 20 Ft Garden Office",
                        "fr" => "Bureau de Jardin 20 Pieds sur Mesure",
                        "pt" => "Escritório de Jardim 20 Pés Sob Medida",
                        "es" => "Oficina de Jardín 20 Pies a Medida"
                    ],
                    "price" => "2,632.63",
                    "old_price" => "3,760.90",
                    "sku" => "3276610697",
                    "discount_percentage" => null,
                    "link" => "/product/ufficio-da-giardino-20-piedi-su-misura/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Ufficio container 20 piedi da giardino – 100% personalizzato\nStruttura in container marittimo\nAmpia vetrata + porte pieghevoli\nIsolamento termico/acustico elevato\nDesign moderno e su misura\nConsegna e installazione rapide",
                        "en" => "20 ft garden container office – 100% customized\nShipping container structure\nLarge window + folding doors\nHigh thermal/acoustic insulation\nModern and custom design\nFast delivery and installation",
                        "fr" => "Bureau conteneur 20 pieds de jardin – 100% personnalisé\nStructure en conteneur maritime\nGrande baie vitrée + portes pliantes\nIsolation thermique/acoustique élevée\nDesign moderne et sur mesure\nLivraison et installation rapides",
                        "pt" => "Escritório contentor de 20 pés para jardim – 100% personalizado\nEstrutura em contentor marítimo\nAmpla janela + portas dobráveis\nElevado isolamento térmico/acústico\nDesign moderno e sob medida\nEntrega e instalação rápidas",
                        "es" => "Oficina contenedor de 20 pies para jardín – 100% personalizada\nEstructura de contenedor marítimo\nAmplio ventanal + puertas plegables\nAlto aislamiento térmico/acústico\nDiseño moderno y a medida\nEntrega e instalación rápidas"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/2-34-300x300.jpeg",
                        "/assets/uploads/2025/11/1-34-300x300.jpeg",
                        "/assets/uploads/2025/11/3-33-300x300.jpeg",
                        "/assets/uploads/2025/11/4-33-300x300.jpeg",
                        "/assets/uploads/2025/11/5-30-300x300.jpeg",
                        "/assets/uploads/2025/11/6-24-300x300.jpeg",
                        "/assets/uploads/2025/11/7-20-300x300.jpeg",
                        "/assets/uploads/2025/11/8-16-300x300.jpeg",
                        "/assets/uploads/2025/11/9-14-300x300.jpeg",
                        "/assets/uploads/2025/11/10-9-300x300.jpeg",
                        "/assets/uploads/2025/11/12-7-300x300.jpeg",
                        "/assets/uploads/2025/11/13-6-300x300.jpeg",
                        "/assets/uploads/2025/11/14-3-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10624",
                    "name" => [
                        "it" => "Ufficio Modulare Portatile – 4 Moduli da 6×9,72 m",
                        "en" => "Portable Modular Office – 4 Modules of 6×9.72 m",
                        "fr" => "Bureau Modulaire Portable – 4 Modules de 6×9,72 m",
                        "pt" => "Escritório Modular Portátil – 4 Módulos de 6×9,72 m",
                        "es" => "Oficina Modular Portátil – 4 Módulos de 6×9,72 m"
                    ],
                    "price" => "6,916.91",
                    "old_price" => "9,881.30",
                    "sku" => "3276610624",
                    "discount_percentage" => null,
                    "link" => "/product/ufficio-modulare-portatile-4-moduli-da-6x972-m/",
                    "categories" => ["escritorio"],
                    "short_description" => [
                        "it" => "Ufficio portatile prefabbricato da 4 moduli, ampio e isolato.\nStruttura in acciaio grigio antracite\nPareti isolate in lana di roccia 50 mm\nTetto in poliuretano 70 mm\n12 finestre con persiane + 4 finestre verticali\nWC + lavabo + cantina attrezzata\nPavimento in PVC su pannello impermeabile\nPreinstallazione per lavastoviglie\nPronto per la movimentazione e l'arredo",
                        "en" => "Prefabricated portable office with 4 modules, spacious and insulated.\nAnthracite gray steel structure\n50 mm rock wool insulated walls\n70 mm polyurethane roof\n12 windows with shutters + 4 vertical windows\nToilet + sink + equipped cellar\nPVC flooring on waterproof panel\nPre-installation for dishwasher\nReady for handling and furnishing",
                        "fr" => "Bureau portable préfabriqué de 4 modules, spacieux et isolé.\nStructure en acier gris anthracite\nMurs isolés laine de roche 50 mm\nToit en polyuréthane 70 mm\n12 fenêtres avec persiennes + 4 fenêtres verticales\nWC + lavabo + cave équipée\nSol PVC sur panneau imperméable\nPré-installation pour lave-vaisselle\nPrêt pour la manutention et l'ameublement",
                        "pt" => "Escritório portátil pré-fabricado de 4 módulos, amplo e isolado.\nEstrutura em aço cinza antracite\nParedes isoladas em lã de rocha 50 mm\nTelhado em poliuretano 70 mm\n12 janelas com persianas + 4 janelas verticais\nWC + lavatório + adega equipada\nPiso em PVC em painel impermeável\nPré-instalação para máquina de lavar loiça\nPronto para movimentação e mobiliário",
                        "es" => "Oficina portátil prefabricada de 4 módulos, amplia y aislada.\nEstructura de acero gris antracita\nParedes aisladas de lana de roca 50 mm\nTejado de poliuretano 70 mm\n12 ventanas con persianas + 4 ventanas verticales\nWC + lavabo + bodega equipada\nSuelo de PVC sobre panel impermeable\nPreinstalación para lavavajillas\nListo para manipulación y mobiliario"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/8-4-1-300x300.webp",
                        "/assets/uploads/2025/11/1-8-1-300x300.webp",
                        "/assets/uploads/2025/11/2-10-1-300x300.webp",
                        "/assets/uploads/2025/11/3-9-1-300x300.webp",
                        "/assets/uploads/2025/11/4-8-1-300x300.webp",
                        "/assets/uploads/2025/11/5-7-1-300x300.webp",
                        "/assets/uploads/2025/11/6-5-1-300x300.webp",
                        "/assets/uploads/2025/11/7-4-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "10499",
                    "name" => [
                        "it" => "Unità di Contenimento 40' High Cube – Nuova",
                        "en" => "40' High Cube Containment Unit – New",
                        "fr" => "Unité de Confinement 40' High Cube – Neuve",
                        "pt" => "Unidade de Contenção 40' High Cube – Nova",
                        "es" => "Unidad de Contención 40' High Cube – Nueva"
                    ],
                    "price" => "2,792.79",
                    "old_price" => "3,989.70",
                    "sku" => "3276610499",
                    "discount_percentage" => null,
                    "link" => "/product/unita-di-contenimento-40-high-cube-nuova/",
                    "categories" => ["contentores-40-pes"],
                    "short_description" => [
                        "it" => "Unità di contenimento 40' HC nuova, perfetta per stoccaggio o progetti modulari.Struttura in acciaio CORTEN, volume ottimizzato, massima resistenza.\nDimensioni interne: 12,03 × 2,35 × 2,69 m\nVolume utile: 76,4 m³\nPeso: 3.940 kg circa\nStruttura robusta e nuova\nIdeale per usi industriali o abitativi",
                        "en" => "New 40' HC containment unit, perfect for storage or modular projects. CORTEN steel structure, optimized volume, maximum resistance.\nInternal dimensions: 12.03 × 2.35 × 2.69 m\nUsable volume: 76.4 m³\nWeight: approx. 3,940 kg\nRobust and new structure\nIdeal for industrial or residential uses",
                        "fr" => "Unité de confinement 40' HC neuve, parfaite pour le stockage ou les projets modulaires. Structure en acier CORTEN, volume optimisé, résistance maximale.\nDimensions intérieures : 12,03 × 2,35 × 2,69 m\nVolume utile : 76,4 m³\nPoids : environ 3 940 kg\nStructure robuste et neuve\nIdéal pour usages industriels ou résidentiels",
                        "pt" => "Unidade de contenção 40' HC nova, perfeita para armazenamento ou projetos modulares. Estrutura em aço CORTEN, volume otimizado, máxima resistência.\nDimensões internas: 12,03 × 2,35 × 2,69 m\nVolume útil: 76,4 m³\nPeso: aproximadamente 3.940 kg\nEstrutura robusta e nova\nIdeal para usos industriais ou habitacionais",
                        "es" => "Unidad de contención 40' HC nueva, perfecta para almacenamiento o proyectos modulares. Estructura de acero CORTEN, volumen optimizado, máxima resistencia.\nDimensiones interiores: 12,03 × 2,35 × 2,69 m\nVolumen útil: 76,4 m³\nPeso: aproximadamente 3.940 kg\nEstructura robusta y nueva\nIdeal para usos industriales o residenciales"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1-15-300x300.jpeg",
                        "/assets/uploads/2025/11/2-15-300x300.jpeg",
                        "/assets/uploads/2025/11/3-14-300x300.jpeg",
                        "/assets/uploads/2025/11/4-14-300x300.jpeg",
                        "/assets/uploads/2025/11/5-13-300x300.jpeg",
                        "/assets/uploads/2025/11/6-11-300x300.jpeg",
                        "/assets/uploads/2025/11/7-12-300x300.jpeg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11053",
                    "name" => [
                        "it" => "Vasche di raccolta per container da 8 piedi",
                        "en" => "8 ft Container Collection Tanks",
                        "fr" => "Bassins de collecte pour conteneurs 8 pieds",
                        "pt" => "Tanques de recolha para contentores de 8 pés",
                        "es" => "Tanques de recogida para contenedores de 8 pies"
                    ],
                    "price" => "1,780.00",
                    "old_price" => null,
                    "sku" => "3276611053",
                    "discount_percentage" => null,
                    "link" => "/product/vasche-di-raccolta-per-container-da-8-piedi/",
                    "categories" => ["container-standard-usati", "contenitori-10-piedi"],
                    "short_description" => [
                        "it" => "Container speciale 2.2m x 2.4mContainer compatto in acciaio CORTEN con fondo in acciaio a tenuta di liquidi, cassetta di sicurezza con serratura e tasche per carrello elevatore. Ideale per sostanze pericolose o inquinanti. Certificato CSC, impilabile, disponibile in RAL 5013 o nel colore desiderato. Nuovo o usato – possibilità di acquisto e noleggio.",
                        "en" => "Special container 2.2m x 2.4m. Compact CORTEN steel container with liquid-tight steel floor, lockable security box and forklift pockets. Ideal for hazardous or polluting substances. CSC certified, stackable, available in RAL 5013 or desired color. New or used – purchase and rental possibilities.",
                        "fr" => "Conteneur spécial 2,2m x 2,4m. Conteneur compact en acier CORTEN avec fond en acier étanche aux liquides, boîte de sécurité verrouillable et fourreaux pour chariot élévateur. Idéal pour les substances dangereuses ou polluantes. Certifié CSC, empilable, disponible en RAL 5013 ou couleur souhaitée. Neuf ou occasion – possibilités d'achat et de location.",
                        "pt" => "Contentor especial 2.2m x 2.4m. Contentor compacto em aço CORTEN com fundo em aço estanque a líquidos, caixa de segurança com fechadura e bolsas para empilhador. Ideal para substâncias perigosas ou poluentes. Certificado CSC, empilhável, disponível em RAL 5013 ou cor desejada. Novo ou usado – possibilidades de compra e aluguer.",
                        "es" => "Contenedor especial 2,2m x 2,4m. Contenedor compacto de acero CORTEN con fondo de acero estanco a líquidos, caja de seguridad con cerradura y huecos para carretilla elevadora. Ideal para sustancias peligrosas o contaminantes. Certificado CSC, apilable, disponible en RAL 5013 o color deseado. Nuevo o usado – posibilidades de compra y alquiler."
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/a0a2dea73060_08lb_03-1-1-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11172",
                    "name" => [
                        "it" => "VENDITA CONTAINER 20 piedi HC | Nuovo 20 piedi HC | Nuovo",
                        "en" => "SALE 20 ft HC CONTAINER | New 20 ft HC | New",
                        "fr" => "VENTE CONTENEUR 20 pieds HC | Neuf 20 pieds HC | Neuf",
                        "pt" => "VENDA CONTENTOR 20 pés HC | Novo 20 pés HC | Novo",
                        "es" => "VENTA CONTENEDOR 20 pies HC | Nuevo 20 pies HC | Nuevo"
                    ],
                    "price" => "907.00",
                    "old_price" => "1,150.00",
                    "sku" => "3276611172",
                    "discount_percentage" => null,
                    "link" => "/product/vendita-container-20-piedi-hc-nuovo-20-piedi-hc-nuovo/",
                    "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                    "short_description" => [
                        "it" => "DIMENSIONI INTERNI\nLunghezza: 5,89 m\nLarghezza: 2,35 mt\nAltezza: 2,69 mt\nDIMENSIONI ESTERNO\nLunghezza: 6,05 mt\nLarghezza: 2,43 mt\nAltezza: 2,89 mt",
                        "en" => "INTERNAL DIMENSIONS\nLength: 5.89 m\nWidth: 2.35 m\nHeight: 2.69 m\nEXTERNAL DIMENSIONS\nLength: 6.05 m\nWidth: 2.43 m\nHeight: 2.89 m",
                        "fr" => "DIMENSIONS INTÉRIEURES\nLongueur : 5,89 m\nLargeur : 2,35 m\nHauteur : 2,69 m\nDIMENSIONS EXTÉRIEURES\nLongueur : 6,05 m\nLargeur : 2,43 m\nHauteur : 2,89 m",
                        "pt" => "DIMENSÕES INTERNAS\nComprimento: 5,89 m\nLargura: 2,35 m\nAltura: 2,69 m\nDIMENSÕES EXTERNAS\nComprimento: 6,05 m\nLargura: 2,43 m\nAltura: 2,89 m",
                        "es" => "DIMENSIONES INTERIORES\nLongitud: 5,89 m\nAnchura: 2,35 m\nAltura: 2,69 m\nDIMENSIONES EXTERIORES\nLongitud: 6,05 m\nAnchura: 2,43 m\nAltura: 2,89 m"
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/ctmu-rear.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-front-right.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-rear-left.jpg-1-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-front.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-front-left.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-base.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-open-door.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-roof.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-right-side.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-rear-right.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-rear-left.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-left-side.jpg-300x300.webp",
                        "/assets/uploads/2025/11/ctmu-rear-left-top.jpg-300x300.webp"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ],
                [
                    "id" => "11567",
                    "name" => [
                        "it" => "XXL Tiny House / Chalet di lusso pieghevole – 40 piedi / 12 metri",
                        "en" => "XXL Tiny House / Folding luxury chalet – 40 ft / 12 meters",
                        "fr" => "XXL Tiny House / Chalet de luxe pliant – 40 pieds / 12 mètres",
                        "pt" => "XXL Tiny House / Chalé de luxo dobrável – 40 pés / 12 metros",
                        "es" => "XXL Tiny House / Chalet de lujo plegable – 40 pies / 12 metros"
                    ],
                    "price" => "9,900.00",
                    "old_price" => "12,500.00",
                    "sku" => "3276611567",
                    "discount_percentage" => null,
                    "link" => "/product/xxl-tiny-house-chalet-di-lusso-pieghevole-40-piedi-12-metri/",
                    "categories" => ["contentores-modulares"],
                    "short_description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ],
                    "images" => [
                        "/assets/uploads/2025/11/1000002878-300x300.jpg",
                        "/assets/uploads/2025/11/1000002877-300x300.jpg",
                        "/assets/uploads/2025/11/1000002875-300x300.jpg",
                        "/assets/uploads/2025/11/1000002876-300x300.jpg",
                        "/assets/uploads/2025/11/1000002886-300x300.jpg",
                        "/assets/uploads/2025/11/1000002879-300x300.jpg",
                        "/assets/uploads/2025/11/1000002874-300x300.jpg",
                        "/assets/uploads/2025/11/1000002884-300x300.jpg",
                        "/assets/uploads/2025/11/1000002887-300x300.jpg",
                        "/assets/uploads/2025/11/1000002881-300x300.jpg",
                        "/assets/uploads/2025/11/1000002882-300x300.jpg",
                        "/assets/uploads/2025/11/1000002885-300x300.jpg",
                        "/assets/uploads/2025/11/1000002880-300x300.jpg",
                        "/assets/uploads/2025/11/1000002883-300x300.jpg"
                    ],
                    "description" => [
                        "it" => "",
                        "en" => "",
                        "fr" => "",
                        "pt" => "",
                        "es" => ""
                    ]
                ]




            ];



        $this->command->info('Starting to seed ' . count($articlesData) . ' articles...');
        $this->command->info('Using language: ' . $targetLocale);

        $bar = $this->command->getOutput()->createProgressBar(count($articlesData));
        $bar->start();

        // Tableau pour suivre les slugs utilisés
        $usedSlugs = [];

        foreach ($articlesData as $item) {
            try {
                // Utiliser le nom en italien pour générer le slug
                $italianName = $item['name']['it'];

                // Nettoyer et convertir les prix
                $price = $this->cleanPrice($item['price']);
                $oldPrice = isset($item['old_price']) ? $this->cleanPrice($item['old_price']) : null;

                // Créer un slug unique
                $baseSlug = Str::slug($italianName);
                $slug = $baseSlug;
                $counter = 1;

                while (in_array($slug, $usedSlugs) || Article::where('slug', $slug)->exists()) {
                    $slug = $baseSlug . '-' . $counter;
                    $counter++;
                }
                $usedSlugs[] = $slug;

                // Vérifier si l'article existe déjà par SKU
                $existingArticle = Article::where('sku', $item['sku'])->first();

                if (!$existingArticle) {
                    // Créer l'article avec les traductions
                    $article = Article::create([
                        'name' => $item['name'],
                        'slug' => $slug,
                        'sku' => $item['sku'],
                        'price' => $price,
                        'old_price' => $oldPrice,
                        'discount_percentage' => $item['discount_percentage'] ?? null,
                        'short_description' => $item['short_description'],
                        'description' => $item['short_description'],
                        'link' => $item['link'] ?? null,
                        'stock' => rand(1, 20),
                        'category_id' => $this->getCategoryId($item['categories'], $categories, $targetLocale)
                    ]);

                    // Ajouter les images
                    if (!empty($item['images'])) {
                        $position = 0;
                        foreach ($item['images'] as $imageUrl) {
                            if (is_string($imageUrl) && !empty($imageUrl)) {
                                $imageExists = ArticleImage::where('article_id', $article->id)
                                    ->where('image_path', $imageUrl)
                                    ->exists();

                                if (!$imageExists) {
                                    ArticleImage::create([
                                        'article_id' => $article->id,
                                        'image_path' => $imageUrl,
                                        'position' => $position,
                                        'is_primary' => $position === 0
                                    ]);
                                    $position++;
                                }
                            }
                        }
                    }
                }

                $bar->advance();
            } catch (\Exception $e) {
                $this->command->error("\nError processing article {$item['sku']}: " . $e->getMessage());
                if (isset($item['name']['it'])) {
                    $this->command->warn("Article name: " . $item['name']['it']);
                }
            }
        }

        $bar->finish();
        $this->command->info("\n\nArticles seeded successfully with translations in 5 languages!");
    }

    /**
     * Nettoie les prix (supprime les virgules, espaces, etc.)
     */
    private function cleanPrice($price)
    {
        if (empty($price)) {
            return null;
        }

        if (preg_match('/,\d{3}\./', $price)) {
            $price = str_replace(',', '', $price);
        } else if (preg_match('/,\d{2}$/', $price)) {
            $price = str_replace(',', '.', $price);
        }

        $price = preg_replace('/[^0-9.]/', '', $price);

        $parts = explode('.', $price);
        if (count($parts) > 2) {
            $price = $parts[0] . '.' . implode('', array_slice($parts, 1));
        }

        return floatval($price);
    }

    /**
     * Récupère l'ID de la première catégorie valide
     */
    private function getCategoryId($categories, $categoriesCollection, $targetLocale)
    {
        if (empty($categories)) {
            // Chercher la catégorie par défaut avec son slug en portugais
            $defaultSlug = Str::slug('Não Categorizado');
            $defaultCategory = $categoriesCollection->firstWhere('slug', $defaultSlug);
            return $defaultCategory ? $defaultCategory->id : 1;
        }

        // Prendre la première catégorie (slug en italien)
        $categorySlugFromData = $categories[0];

        // Trouver la catégorie correspondante en utilisant le slug portugais
        $category = $categoriesCollection->get($categorySlugFromData);

        // Si la catégorie n'est pas trouvée, essayer une correspondance partielle
        if (!$category) {
            foreach ($categoriesCollection as $slug => $cat) {
                $slugClean = str_replace('-', '', strtolower($slug));
                $searchClean = str_replace('-', '', strtolower($categorySlugFromData));

                if ($slugClean === $searchClean || str_contains($slugClean, $searchClean) || str_contains($searchClean, $slugClean)) {
                    $category = $cat;
                    break;
                }
            }
        }

        return $category ? $category->id : $this->getDefaultCategoryId($categoriesCollection);
    }

    /**
     * Récupère l'ID d'une catégorie par défaut
     */
    private function getDefaultCategoryId($categoriesCollection)
    {
        // Chercher la catégorie "Não Categorizado" en portugais
        foreach ($categoriesCollection as $cat) {
            $ptName = $cat->getTranslation('name', 'pt') ?? '';
            if (
                str_contains(strtolower($ptName), 'não categorizado') ||
                str_contains(strtolower($ptName), 'nao categorizado')
            ) {
                return $cat->id;
            }
        }

        $defaultCategory = $categoriesCollection->first();
        return $defaultCategory ? $defaultCategory->id : 1;
    }
}
