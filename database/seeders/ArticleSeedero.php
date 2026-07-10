<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Category;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Désactiver les événements pour accélérer le seeding
        Article::unsetEventDispatcher();

        // Récupérer toutes les catégories
        $categories = Category::all()->keyBy('slug');

        // Les données des articles (garder votre tableau existant ici)
        $articlesData = [
            [
                "id" => "11363",
                "name" => "2 MONOBLOCCHI USO UFFICIO CON BAGNO",
                "price" => "7,100.00",
                "old_price" => "8,000.00",
                "sku" => "3276611363",
                "discount_percentage" => "-11%",
                "link" => "/product/2-monoblocchi-uso-ufficio-con-bagno/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 593 x 243 cm.\nDimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 272 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con legno IDRO V100 sp.18 mm, rivestito con PVC Antiscivolo.\nSerramenti in alluminio RAL 9010\nVetro 4 mm Trasparente.\nN.1 Porta mezzo vetro a un'anta di ingresso, completa di barre antintrusione, con maniglia e serratura standard, con dimensioni100 x 210h esterna cm.\nN.1 Finestra scorrevole, completa di barre antintrusione, con dimensioni 100 x 100h esterna cm.\nN.1 Porta cieca tutto pannello a un'anta, con maniglia e serratura standard, con dimensioni 80 x 210h esterna cm.\nN.1 Finestrino con apertura a vasistas, con vetro 4 mm tampato, senza barre antintrusione, con dimensioni 50 x 50h esterna cm.\nN.1 Porta a soffietto colore GRIGIO.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Wc in ceramica + sedile + cassetta esterna.\nN.1 Portarotolo + Scopino.\nN.1 Lavabo in ceramica 60 cm + colonna + mix.\nN.1 Mensola + Specchio.\nN.1 Piatto doccia in ceramica 90 x 90 cm.\nN.1 Asta doccia + Miscelatore + Soffione.\nN.1 Porta sapone angolare.\nN.1 Boiler elettrico 60 Litri Acqua Calda.\nImpianto elettrico standard norma CEE 220V, con tubo PVC Biancoa vista, compreso di:\nN.1 Quadro elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.2 Interruttori.\nN.2 Prese.\nN.1 Plafoniera 19W-LED.\nN.1 Plafoniera 45W-LED.\nN.1 Termoconvettore 500W.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE.\nN.1 Scatola esterna per allaccio impianto elettrico.",
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
                "description" => ""
            ],
            [
                "id" => "11170",
                "name" => "Abri Pool House in Composito – La Soluzione Perfetta per il tuo Spazio Piscina",
                "price" => "4,200.00",
                "old_price" => "5,700.00",
                "sku" => "3276611170",
                "discount_percentage" => null,
                "link" => "/product/abri-pool-house-in-composito-la-soluzione-perfetta-per-il-tuo-spazio-piscina/",
                "categories" => ["container-modulari"],
                "short_description" => "Abri Pool House in Composito: struttura moderna e resistente per il tuo spazio piscina. Facile da montare, eco-sostenibile e personalizzabile. Garanzia 7 anni.",
                "images" => [
                    "/assets/uploads/2025/11/ABR-POOL-15-COMPO-300x300.png",
                    "/assets/uploads/2025/11/ABR-POOL-15-COMPO-0-300x300.png"
                ],
                "description" => ""
            ],


            [
                "id" => "11416",
                "name" => "Bellissima e confortevole casa mobile Chalet Wood Gray",
                "price" => "9,175.00",
                "old_price" => "10,900.00",
                "sku" => "3276611416",
                "discount_percentage" => null,
                "link" => "/product/bellissima-e-confortevole-casa-mobile-chalet-wood-gray/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10540",
                "name" => "Casa container 20 piedi HC – Completamente attrezzata",
                "price" => "3,523.52",
                "old_price" => "5,033.60",
                "sku" => "3276610540",
                "discount_percentage" => null,
                "link" => "/product/casa-container-20-piedi-hc-completamente-attrezzata/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa container compatta da 20 piedi HC, rivestita in fibrocemento effetto legno.Dotata di cucina, bagno, isolamento e finiture interne di alta qualità.\nEstetica moderna effetto legno\nIsolamento termico/acustico\nCucina e bagno inclusi\nImpianto elettrico completo\nPronta all'uso",
                "images" => [
                    "/assets/uploads/2025/11/1-51-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11488",
                "name" => "Casa container 35 m² – Modello A Cottage, abitabile tutto l'anno",
                "price" => "8,565.00",
                "old_price" => "10,500.00",
                "sku" => "3276611488",
                "discount_percentage" => null,
                "link" => "/product/casa-container-35-m%c2%b2-modello-a-cottage-abitabile-tutto-lanno/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10541",
                "name" => "Casa container abitativa 40 piedi",
                "price" => "4,314.31",
                "old_price" => "6,163.30",
                "sku" => "3276610541",
                "discount_percentage" => null,
                "link" => "/product/casa-container-abitativa-40-piedi/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa container da 40 piedi abitabile, prodotta da Max Shipping Inc.Cucina e bagno inclusi, soggiorno spazioso e consegna veloce in tutto il mondo.\nSpazio abitativo ottimizzato\nCucina attrezzata\nBagno completo\nPerfetta per coppie\nConsegna internazionale rapida",
                "images" => [
                    "/assets/uploads/2025/11/1-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11486",
                "name" => "Casa container da 40 piedi HQ / 12 m – Alloggi moderni e funzionali",
                "price" => "8,430.00",
                "old_price" => "9,000.00",
                "sku" => "3276611486",
                "discount_percentage" => null,
                "link" => "/product/casa-container-da-40-piedi-hq-12-m-alloggi-moderni-e-funzionali/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10544",
                "name" => "Casa Container Modello PLAYERO",
                "price" => "4,764.76",
                "old_price" => "6,806.80",
                "sku" => "3276610544",
                "discount_percentage" => null,
                "link" => "/product/casa-container-modello-playero/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Abitazione container di design con ampi spazi e comfort moderni.\nContainer 40′ High Cube\n1 camera e 1 bagno completo\nCucina in PVC a L e armadio a specchio\n2 porte scorrevoli in vetro, climatizzazione inverter\nIsolamento totale e connessioni per generatore",
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
                "description" => ""
            ],
            [
                "id" => "10543",
                "name" => "Casa Container Prefabbricata",
                "price" => "3,723.72",
                "old_price" => "5,319.60",
                "sku" => "3276610543",
                "discount_percentage" => null,
                "link" => "/product/casa-container-prefabbricata/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa prefabbricata container resistente e veloce da montare.\nStruttura in acciaio Q235B\nPannelli sandwich in lana di roccia da 75 mm\nPavimento ignifugo in MGO da 18 mm\nFinestre antieffrazione in alluminio\nIgnifuga A1, antisismica e antivento",
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
                "description" => ""
            ],
            [
                "id" => "10542",
                "name" => "Casa Container Prefabbricata Modulabile",
                "price" => "4,899.89",
                "old_price" => "6,999.85",
                "sku" => "3276610542",
                "discount_percentage" => null,
                "link" => "/product/casa-container-prefabbricata-modulabile/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa prefabbricata container modulare, progettata per condizioni estreme.\nStruttura in acciaio rinforzato\nIsolamento avanzato con pannelli sandwich\nPersonalizzabile in ogni dettaglio\nResistente a sismi e vento forte\nIdeale per abitazioni, uffici o spazi commerciali",
                "images" => [
                    "/assets/uploads/2025/11/1-6-300x300.webp",
                    "/assets/uploads/2025/11/2-8-300x300.webp",
                    "/assets/uploads/2025/11/3-11-300x300.webp",
                    "/assets/uploads/2025/11/4-6-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10621",
                "name" => "Casa Mobile Luisiana Taos – Comfort Abitativo",
                "price" => "4,200.00",
                "old_price" => "6,866.00",
                "sku" => "3276610621",
                "discount_percentage" => null,
                "link" => "/product/casa-mobile-luisiana-taos-comfort-abitativo/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa mobile moderna da 40 m², perfetta per ogni stagione.\nModello 2023 con design contemporaneo\n2 camere da letto e 2 bagni completi\nCucina full optional e soggiorno arredato\nWC separato e predisposizione per lavatrice\nIsolamento termico per uso annuale",
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
                "description" => ""
            ],
            [
                "id" => "12449",
                "name" => "Casa mobile moderna – Dimensioni 10,5 x 3,8 m",
                "price" => "5,500.00",
                "old_price" => null,
                "sku" => "9876543456789",
                "discount_percentage" => null,
                "link" => "/product/casa-mobile-moderna-dimensioni-105-x-38-m/",
                "categories" => ["contenitori-casa"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "12437",
                "name" => "Casa mobile moderna – Dimensioni 12×4 m",
                "price" => "8,000.00",
                "old_price" => null,
                "sku" => "097654456789",
                "discount_percentage" => null,
                "link" => "/product/casa-mobile-moderna-dimensioni-12x4-m/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Moderna casa mobile 12x4m: costruzione in acciaio e legno, isolamento termico avanzato e configurazioni personalizzabili per ogni esigenza vitale.",
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
                "description" => ""
            ],
            [
                "id" => "12428",
                "name" => "Casa Mobile T2 – Una soluzione abitativa moderna e flessibile",
                "price" => "3,050.00",
                "old_price" => null,
                "sku" => "876543456789",
                "discount_percentage" => null,
                "link" => "/product/casa-mobile-t2-una-soluzione-abitativa-moderna-e-flessibile/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Mobile Home Container T2: una casa compatta, moderna e personalizzabile, ideale per qualsiasi esigenza. Facile da trasportare, efficiente e sostenibile.",
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
                "description" => ""
            ],
            [
                "id" => "10545",
                "name" => "Casa Modulare González – Spazio Intelligente da 36 m²",
                "price" => "3,200.00",
                "old_price" => "5,720.00",
                "sku" => "3276610545",
                "discount_percentage" => null,
                "link" => "/product/casa-modulare-gonzalez-spazio-intelligente-da-36-m%c2%b2/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Soluzione abitativa modulare da 36 m² ideale per uso residenziale o turistico.\n1 camera, 1 bagno completo\nOpen space con cucina e soggiorno\nIsolamento poliuretano e lana di vetro\nFinestre termiche in PVC effetto legno\nImpianto elettrico completo e LED",
                "images" => [
                    "/assets/uploads/2025/11/1-55-300x300.jpeg",
                    "/assets/uploads/2025/11/2-53-300x300.jpeg",
                    "/assets/uploads/2025/11/3-52-300x300.jpeg",
                    "/assets/uploads/2025/11/4-51-300x300.jpeg",
                    "/assets/uploads/2025/11/5-47-300x300.jpeg",
                    "/assets/uploads/2025/11/6-39-300x300.jpeg",
                    "/assets/uploads/2025/11/7-33-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10620",
                "name" => "Casa Modulare Montes – 36 m² di Comfort, Design",
                "price" => "3,400.00",
                "old_price" => "5,278.30",
                "sku" => "3276610620",
                "discount_percentage" => null,
                "link" => "/product/casa-modulare-montes-36-m%c2%b2-di-comfort-design/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa modulare da 36 m² con layout efficiente e design moderno.\n2 camere da letto, 1 bagno completo\nAmpie finestre in alluminio nero termico\nIsolamento con poliuretano e lana di vetro\nRivestimenti interni in OSB, legno e cartongesso\nImpianto elettrico completo e luci LED",
                "images" => [
                    "/assets/uploads/2025/11/1-2-300x300.jpeg",
                    "/assets/uploads/2025/11/2-45-300x300.jpeg",
                    "/assets/uploads/2025/11/3-44-300x300.jpeg",
                    "/assets/uploads/2025/11/4-43-300x300.jpeg",
                    "/assets/uploads/2025/11/5-39-300x300.jpeg",
                    "/assets/uploads/2025/11/6-32-300x300.jpeg",
                    "/assets/uploads/2025/11/7-26-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10539",
                "name" => "Casa prefabbricata modulare in container",
                "price" => "3,500.00",
                "old_price" => "5,136.70",
                "sku" => "3276610539",
                "discount_percentage" => null,
                "link" => "/product/casa-prefabbricata-modulare-in-container/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Casa prefabbricata in container in acciaio Q355 HDG, isolata e altamente resistente.Adatta per abitazioni, uffici, alloggi temporanei e strutture modulari.\nStruttura zincata a caldo\nIsolamento tetto in PU ad alta densità\nPareti in EPS o lana di roccia\nFinestre a doppio vetro\nResiste a venti fino a 210 km/h",
                "images" => [
                    "/assets/uploads/2025/11/1-8-300x300.webp",
                    "/assets/uploads/2025/11/2-10-300x300.webp",
                    "/assets/uploads/2025/11/3-13-300x300.webp",
                    "/assets/uploads/2025/11/4-8-300x300.webp",
                    "/assets/uploads/2025/11/5-7-300x300.webp",
                    "/assets/uploads/2025/11/6-5-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11232",
                "name" => "CHIOSCO/SNACK CONTAINER – UFFICIO – AREA VENDITA",
                "price" => "6,100.00",
                "old_price" => "8,100.00",
                "sku" => "3276611232",
                "discount_percentage" => null,
                "link" => "/product/chiosco-snack-container-ufficio-area-vendita/",
                "categories" => ["container-modulari"],
                "short_description" => "Realizzazione di un chiosco, snack bar, food truck, taverna in un container marittimo per il primo viaggio.\n# Nessuna lastra di cemento!\n# Nessuna preparazione!\n# Nessun noioso assemblaggio!\n# Grande volume!\n# Cellulare!\n# Architettura della moda!\n# Nessun permesso di costruire!\n# Senza manutenzione!\nCapire :\n1 container primo viaggio da 40′ (12mx2,45×2,60m)\nAperture:\n1 Tenda a gas 2000 x 1200 mm\n1 Tenda a gas 3000 x 1200 mm\n1 anta 800×2000 mm\nContatori:\n1 Bancone pieghevole 2000x300mm\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella 1 riga\n3 luci LED impermeabili\n4 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nColore :\nVernice RAL 7016 in tutto il contenitore.",
                "images" => [
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_1ca25ffe-d7fb-4a9d-9f32-b7cd20ecb708-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_471dece2-7bb0-4986-9a7b-cfc04abb0d1c-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_d156ba0a-ce76-440d-a430-0ea4a81b8b04-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_a90e8119-c992-4ade-8e5f-10973449a4c8-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11054",
                "name" => "Container a doppia porta High Cube da 40 piedi",
                "price" => "2,100.00",
                "old_price" => null,
                "sku" => "3276611054",
                "discount_percentage" => null,
                "link" => "/product/container-a-doppia-porta-high-cube-da-40-piedi/",
                "categories" => ["container-di-stoccaggio", "contenitori-40-piedi"],
                "short_description" => "Questo container extra alto da 40 piedi ha porte su entrambi i lati anteriori e offre quindi un facile accesso da due lati. Ideale per lo stoccaggio e il trasporto. Certificato CSC, in acciaio CORTEN, impilabile e disponibile in ogni colore RAL.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_40_hcdd_ral5013_10-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_40_hcdd_ral5013_13-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_40_hcdd_2_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_40hcdd_5_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11230",
                "name" => "CONTAINER CHIOSCO – SNACK",
                "price" => "4,100.00",
                "old_price" => "5,000.00",
                "sku" => "3276611230",
                "discount_percentage" => null,
                "link" => "/product/container-chiosco-snack/",
                "categories" => ["container-modulari"],
                "short_description" => "Realizzazione di uno snack bar, taverna in un container marittimo.\nInclude:\n1 container primo viaggio da 20′ (6mx2,45×2,60m)\nAperture:\n1 Tenda a gas 3000 x 1200 mm\n1 Anta da 90×200 cm\nContatori:\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella 1 riga\n2 luci LED impermeabili\n4 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nPavimento: resina gelcoat grigia con scarico a pavimento per il drenaggio\nVerniciatura: vernice RAL 7016 su tutto il contenitore.\nImpianti idraulici: Arrivo ed evacuazione acqua, installazione approvvigionamento idrico.\nCappe:\nFornitura e posa in opera di una cappa da 2 mt con aspirazione a soffitto.\nImmersioni:\nFornitura e installazione di 1 serbatoio da 1200 m + cumulo istantaneo\nFrigoriferi:\n1 frigorifero negativo da 600 L\n2 Tavoli con 3 ante positive in acciaio inox\nFriggitrice:\n1 friggitrice doppia in acciaio inox da 14 litri",
                "images" => [
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_0a7593de-36dd-4bae-ad34-aa5ce608c131-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_03eef24f-5ec5-4bdc-ba50-6beff0ba4efd-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_27360151-961a-45d7-8c02-57214e119a48-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_f061789e-0711-4d40-a6b1-9a504cd6ece7-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_43215567-9066-4e2b-914a-406989efe0e7-300x300.jpg"
                ],
                "description" => ""
            ],


            [
                "id" => "11490",
                "name" => "Container commerciale da 29,4 m² – Soluzione modulare per spazi di vendita",
                "price" => "7,900.00",
                "old_price" => "8,800.00",
                "sku" => "3276611490",
                "discount_percentage" => null,
                "link" => "/product/container-commerciale-da-294-m%c2%b2-soluzione-modulare-per-spazi-di-vendita/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/a1ef6f_39b91e4f57f1412c812b7e339c35b18d7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_fdb4303698fc419ebb7d62429a3501f87Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_ef03353297a54e22b84bcb3e6778420c7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_ed7d518b54b0447fbaf5a8c3bfc4a6707Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_9f80cb22582540179156d9306ab2b3497Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_997d326658a9480abfc0a7a39794710b7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_366fb54e42e24c269eab1791a6cf00937Emv2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11489",
                "name" => "Container commerciale da 29,4 m² – Spazio commerciale modulare e funzionale",
                "price" => "7,350.00",
                "old_price" => null,
                "sku" => "3276611489",
                "discount_percentage" => null,
                "link" => "/product/container-commerciale-da-294-m%c2%b2-spazio-commerciale-modulare-e-funzionale/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11051",
                "name" => "Container da 10 piedi con fondo in acciaio Hard Open Top",
                "price" => "1,100.00",
                "old_price" => null,
                "sku" => "3276611051",
                "discount_percentage" => null,
                "link" => "/product/container-da-10-piedi-con-fondo-in-acciaio-hard-open-top/",
                "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-10-piedi"],
                "short_description" => "Container robusto con tetto in acciaio rimovibile e traversa per un facile carico dall'alto. Con pavimento in acciaio, Lockbox, ventilazione e certificato CSC.  Ideale per lo stoccaggio e il trasporto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_foto_2-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11832",
                "name" => "CONTAINER DA 20 PIEDI",
                "price" => "902.00",
                "old_price" => "1,400.00",
                "sku" => "3276611832",
                "discount_percentage" => null,
                "link" => "/product/container-da-20-piedi/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059480-700x542-1-300x300.jpg",
                    "/assets/uploads/2025/11/1000059483-300x300.jpg",
                    "/assets/uploads/2025/11/1000059481-300x300.jpg",
                    "/assets/uploads/2025/11/1000059480-300x300.jpg",
                    "/assets/uploads/2025/11/1000059485-300x300.jpg",
                    "/assets/uploads/2025/11/1000059482-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10868",
                "name" => "Container da 20 piedi con lato aperto",
                "price" => "2,150.00",
                "old_price" => "2,495.00",
                "sku" => "3276610868",
                "discount_percentage" => null,
                "link" => "/product/container-da-20-piedi-con-lato-aperto/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Il container da 20 piedi con lato aperto dispone di un'apertura completa della porta lungo un lato longitudinale e di porte standard sul lato anteriore. Ideale per il carico e lo scarico laterale di merci grandi o ingombranti. Realizzato in robusto acciaio CORTEN, certificato CSC, con pavimento in legno multistrato e Lockbox. Impilabile e adatto per carrelli elevatori. Acquista o noleggia ora!",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_20os_2-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10871",
                "name" => "Container da 20 piedi con lato aperto",
                "price" => "3,400.00",
                "old_price" => null,
                "sku" => "3276610871",
                "discount_percentage" => null,
                "link" => "/product/container-da-20-piedi-con-lato-aperto-2/",
                "categories" => ["container-laterale-aperto", "contenitori-20-piedi"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10867",
                "name" => "Container da 20 piedi High Cube con pavimento in acciaio",
                "price" => "1,800.00",
                "old_price" => null,
                "sku" => "3276610867",
                "discount_percentage" => null,
                "link" => "/product/container-da-20-piedi-high-cube-con-pavimento-in-acciaio/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Container da 20 piedi High Cube con pavimento in acciaioContainer di stoccaggio extra alto con pavimento in acciaio completamente saldato, lockbox, ventilazione e tasche per carrello elevatore. Certificato CSC, realizzato in acciaio CORTEN – ideale per merci pesanti o sensibili allo sporco.",
                "images" => [
                    "/assets/uploads/2025/11/fd7d652d39eb_20hcsf3_1000x9999-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11173",
                "name" => "Container da ufficio da 10 piedi",
                "price" => "750.00",
                "old_price" => "900.00",
                "sku" => "3276611173",
                "discount_percentage" => null,
                "link" => "/product/container-da-ufficio-da-10-piedi/",
                "categories" => ["container-modulari"],
                "short_description" => "Il nostro container per ufficio da 10 piedi offre uno spazio di lavoro, un ufficio o uno studio che soddisfa le vostre esigenze. E' dotato di riscaldamento, illuminazione installata e isolamento anticondensa.\nÈ la soluzione ideale per privati o aziende che necessitano di uno spazio versatile e flessibile, che possa essere spostato da un cantiere all'altro o facilmente smontabile una volta terminato l'utilizzo. Questo è l'ideale per un uso temporaneo, così come per un uso a lungo termine.\nSpecifiche:\nDimensioni esterne (LxPxH): 2,99 mx 2,43 mx 2,89 m\nDimensioni interne (LxPxA): 2,82 mx 2,35 mx 2,69 m\n1 finestra antivandalica + 1 porta\nFoderato e coibentato in melamina\nPavimento in vinile\nKit elettrico: 2 prese doppie, 1 radiatore, 1 striscia luminosa da 1,5 metri, 1 unità di consumo e collegamento esterno.",
                "images" => [
                    "/assets/uploads/2025/11/3-4-2048x1366-1-768x746-1-300x300.webp",
                    "/assets/uploads/2025/11/5-2-2048x1366-1-300x300.jpeg",
                    "/assets/uploads/2025/11/2-6-768x512-1-300x300.webp",
                    "/assets/uploads/2025/11/pf-container-bureau-10-pieds-300x300.jpg",
                    "/assets/uploads/2025/11/7-2048x1366-1-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11725",
                "name" => "CONTAINER DOPPIO SANITARIO CON 2 CABINE – WC E DOCCIA",
                "price" => "1,815.00",
                "old_price" => "2,000.00",
                "sku" => "3276611725",
                "discount_percentage" => null,
                "link" => "/product/container-doppio-sanitario-con-2-cabine-wc-e-doccia/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10950",
                "name" => "Container frigoriferici ISO 20ft HC usati",
                "price" => "7,840.00",
                "old_price" => null,
                "sku" => "3276610950",
                "discount_percentage" => null,
                "link" => "/product/container-frigoriferici-iso-20ft-hc-usati/",
                "categories" => ["container-refrigerati", "contenitori-20-piedi"],
                "short_description" => "Container frigorifero High Cube da 20ft usato di alta qualità con unità Thermo King – ideale per il raffreddamento e lo stoccaggio affidabili di prodotti sensibili alla temperatura. Con altezza interna extra, robusto alloggiamento in acciaio e controllo preciso della temperatura da +25 °C a -25 °C. Perfetto per alimenti, farmaci o eventi. Pronto all'uso ad Amburgo.",
                "images" => [
                    "/assets/uploads/2025/11/20ft-Kuehlcontainer-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10951",
                "name" => "Container frigorifero High Cube da 10 piedi",
                "price" => "5,960.00",
                "old_price" => null,
                "sku" => "3276610951",
                "discount_percentage" => null,
                "link" => "/product/container-frigorifero-high-cube-da-10-piedi/",
                "categories" => ["container-refrigerati", "contenitori-10-piedi"],
                "short_description" => "Questo container frigorifero usato da 10 piedi, compatto e affidabile, è ideale per lo stoccaggio sicuro e il trasporto di merci sensibili alla temperatura. È completamente testato e in perfette condizioni. Offre un raffreddamento efficiente, uno stoccaggio sicuro e una costruzione robusta, ideale per aziende e privati che necessitano di celle frigorifere compatte.",
                "images" => [
                    "/assets/uploads/2025/11/20ft-thermo-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11061",
                "name" => "Container frigorifero usato da 10 piedi bianco",
                "price" => "3,480.00",
                "old_price" => null,
                "sku" => "3276611061",
                "discount_percentage" => null,
                "link" => "/product/container-frigorifero-usato-da-10-piedi-bianco/",
                "categories" => ["container-refrigerati", "contenitori-10-piedi"],
                "short_description" => "Container frigorifero usato da 10 piedi\nQuesto container frigorifero usato da 10 piedi, compatto e affidabile, è ideale per lo stoccaggio sicuro e il trasporto di merci sensibili alla temperatura. È completamente testato e in perfette condizioni. Offre un raffreddamento efficiente, uno stoccaggio sicuro e una costruzione robusta, ideale per aziende e privati che necessitano di celle frigorifere compatte.",
                "images" => [
                    "/assets/uploads/2025/11/10ft-thermo-refrigerated-container-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10945",
                "name" => "Container High Cube da 10 piedi",
                "price" => "1,480.00",
                "old_price" => null,
                "sku" => "3276610945",
                "discount_percentage" => null,
                "link" => "/product/container-high-cube-da-10-piedi/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Container compatto con altezza interna aggiuntiva per maggiore spazio di stoccaggio. In acciaio CORTEN, con pavimento in compensato, ventilazione, Lockbox e certificato CSC.  Ideale per lo stoccaggio e il trasporto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_img_0602-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10869",
                "name" => "Container High Cube da 20 piedi con lato aperto",
                "price" => "3,470.00",
                "old_price" => null,
                "sku" => "3276610869",
                "discount_percentage" => null,
                "link" => "/product/container-high-cube-da-20-piedi-con-lato-aperto/",
                "categories" => ["container-laterale-aperto", "contenitori-20-piedi"],
                "short_description" => "Questo container extra alto da 20 piedi ha un lato longitudinale completamente apribile, offrendo così il massimo spazio di stoccaggio e un facile accesso laterale. Ideale per lo stoccaggio e il trasporto. Disponibile per il noleggio o l'acquisto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_3_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_10_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_8_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_20_oh_2_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_20_oh_3_normal-300x300.webp",
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_20_hc_os_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10942",
                "name" => "Container High Cube da 20 piedi nuovo",
                "price" => "1,950.00",
                "old_price" => null,
                "sku" => "3276610942",
                "discount_percentage" => null,
                "link" => "/product/container-high-cube-da-20-piedi-nuovo/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Container extra alto con 30 cm in più di altezza interna – ideale per lo stoccaggio e il trasporto a secco. Certificato CSC, con pavimento in legno multistrato, ventilazione, Lockbox e tasche per carrelli elevatori.  Disponibile nel colore RAL a scelta.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_img_7980_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10952",
                "name" => "Container High Cube Hard Open Top da 20 piedi (con fondo in acciaio)",
                "price" => "1,650.00",
                "old_price" => null,
                "sku" => "3276610952",
                "discount_percentage" => null,
                "link" => "/product/container-high-cube-hard-open-top-da-20-piedi-con-fondo-in-acciaio/",
                "categories" => ["container-di-stoccaggio", "contenitori-20-piedi"],
                "short_description" => "Container High Cube Hard Open Top da 20 piedi (con fondo in acciaio)Container extra alto con tetto in acciaio rimovibile, fondo in acciaio bugnato a tenuta di liquidi e Lockbox. Ideale per merci delicate o liquide e per trasformazioni individuali.  Certificato CSC – a noleggio o in vendita.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_dsc03347_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10872",
                "name" => "Container High Cube Open Side da 40 piedi",
                "price" => "6,450.00",
                "old_price" => "6,750.00",
                "sku" => "3276610872",
                "discount_percentage" => null,
                "link" => "/product/container-high-cube-open-side-da-40-piedi/",
                "categories" => ["container-laterale-aperto", "contenitori-40-piedi"],
                "short_description" => "Questo container High Cube da 40 piedi ha un lato longitudinale completamente apribile ed è ideale per merci voluminose caricabili lateralmente. Con pavimento in legno, Lockbox, ventilazione e certificato CSC.  Acquisto possibile.",
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
                "description" => ""
            ],
            [
                "id" => "11062",
                "name" => "Container Marittimo 10 Piedi STD – Compatto e Resistente",
                "price" => "629.00",
                "old_price" => "800.00",
                "sku" => "3276611062",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-10-piedi-std-compatto-e-resistente/",
                "categories" => ["non-categorizzato"],
                "short_description" => "Contenitore marittimo standard da 10 piedi, realizzato in acciaio CORTEN, dal design compatto e durevole. Ideale per stoccaggio personale o commerciale, con opzioni di personalizzazione disponibili.",
                "images" => [
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-5-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-4-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-3-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-10-Pies-STD-Compacto-y-Resistente-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10946",
                "name" => "Container marittimo da 20 piedi x 8 piedi verde scuro",
                "price" => "1,480.00",
                "old_price" => "1,900.00",
                "sku" => "3276610946",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-da-20-piedi-x-8-piedi-verde-scuro/",
                "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                "short_description" => "Scopri il nostro container standard usato da 20 piedi in verde scuro: robusto, resistente al vento e all'acqua, perfetto per lo stoccaggio e il trasporto. Con la sua struttura in acciaio resistente e le funzionali porte a doppia anta, offre una soluzione affidabile per un uso versatile. Disponibile subito e pronto all'uso!",
                "images" => [
                    "/assets/uploads/2025/11/32-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11836",
                "name" => "Container marittimo da 20 piedi, viaggio unico, con porta avvolgibile.",
                "price" => "1,310.00",
                "old_price" => "2,050.00",
                "sku" => "3276611836",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-da-20-piedi-viaggio-unico-con-porta-avvolgibile/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11056",
                "name" => "Container marittimo High Cube da 10 piedi",
                "price" => "1,749.00",
                "old_price" => null,
                "sku" => "3276611056",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-high-cube-da-10-piedi/",
                "categories" => ["container-di-stoccaggio", "contenitori-10-piedi"],
                "short_description" => "Il container High Cube da 10 piedi fa parte della nostra nuova gamma di prodotti. È realizzato in acciaio CORTEN con protezione anticorrosione, un materiale particolarmente resistente con eccellenti proprietà antiruggine che aumentano significativamente la durata del container.\nQuesti mini container High Cube da 10 piedi sono la soluzione di stoccaggio mobile ideale per spazi ristretti.\nIl pavimento del container è costituito da 19 strati di compensato Keruing-Apitong di qualità marina. Questo compensato supera in qualità il compensato tradizionale, poiché ha un'alta densità e quindi un contenuto di umidità molto basso. Questo lo rende resistente agli attacchi di funghi e termiti, un vantaggio decisivo per l'elevata resilienza dei container marittimi durante il carico e lo scarico costanti, nonché durante il trasporto marittimo.\nIl container High Cube da 10 piedi è dotato di 4 aperture di ventilazione resistenti alle intemperie per una circolazione uniforme dell'aria, aste di bloccaggio alte 36 pollici per un facile accesso, tasche per carrelli elevatori per una facile movimentazione e un alloggiamento di sicurezza per lucchetto (Lockbox) per la massima protezione.\nIl container High Cube è un piede più alto rispetto ai container standard e offre quindi più spazio interno senza occupare spazio aggiuntivo sul pavimento.",
                "images" => [
                    "/assets/uploads/2025/11/a45af521-9d15-406d-98ff-73675ca623b9-1024x683-1-300x300.webp"
                ],
                "description" => ""
            ],


            [
                "id" => "11239",
                "name" => "CONTAINER MARITTIMO REFRIGERATO DA 40 PIEDI USATO",
                "price" => "4,900.00",
                "old_price" => "5,100.00",
                "sku" => "3276611239",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-refrigerato-da-40-piedi-usato/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Caratteristiche generali\nSottocategoria: Container marittimo refrigerato\nMarca: THERMO KING\nEtà: 2014\nCondizione: usato\nProprietà\nTara: 4.650 kg\nCapacità di carico: 30.350 kg\nPeso massimo: 35.000 kg\nDimensioni complessive: (L) 12.190 cm x (L) 2.440 cm x (H) 2.890 cm\nDescrizione\nColore: bianco\nCarico utile: 30350 kg.\nMarchio dell'unità fredda: Thermo King",
                "images" => [
                    "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-2-300x300.jpeg",
                    "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-300x300.jpeg",
                    "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-1-300x300.jpeg",
                    "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-3-300x300.jpeg",
                    "/assets/uploads/2025/11/contenedor_maritimo_refrigerado_thermo_king_40hc_rf_2014_7164482-4-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11052",
                "name" => "Container marittimo standard da 12 piedi bianco",
                "price" => "1,870.00",
                "old_price" => null,
                "sku" => "3276611052",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-standard-da-12-piedi-bianco/",
                "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-10-piedi"],
                "short_description" => "Il container standard da 12 piedi offre una soluzione pratica per le esigenze di stoccaggio e trasporto in spazi limitati. Con una robusta struttura in acciaio, un design resistente al vento e all'acqua e angoli ISO per una facile movimentazione, è ideale per cantieri, attività commerciali e uso privato. La soluzione intermedia perfetta tra i container da 10 e 20 piedi.",
                "images" => [
                    "/assets/uploads/2025/11/10ft-See-Containers-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11060",
                "name" => "Container marittimo usato da 20 piedi blu",
                "price" => "1,145.00",
                "old_price" => "1,350.00",
                "sku" => "3276611060",
                "discount_percentage" => null,
                "link" => "/product/container-marittimo-usato-da-20-piedi-blu/",
                "categories" => ["container-di-stoccaggio", "container-standard-usati", "contenitori-20-piedi"],
                "short_description" => "Container da magazzino usato da 20 piedi in Germania, consegna inclusa (scarico su richiesta), disponibile immediatamente!\nOptional con allarme antintrusione!",
                "images" => [
                    "/assets/uploads/2025/11/tempimagez2xrr5-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10870",
                "name" => "Container officina da 20 piedi",
                "price" => "3,570.00",
                "old_price" => "4,300.00",
                "sku" => "3276610870",
                "discount_percentage" => null,
                "link" => "/product/container-officina-da-20-piedi/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Container officina da 20 piedi: la tua postazione di lavoro mobileCon banco da lavoro, scaffali, allacciamento elettrico e spazio di stoccaggio, questo container completamente attrezzato è la soluzione ideale per officine temporanee o permanenti. In acciaio CORTEN, certificato CSC, impilabile e disponibile in qualsiasi colore RAL.  Disponibile per il noleggio o l'acquisto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_20wc4_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11365",
                "name" => "Container per officina da 10 piedi",
                "price" => "1,190.00",
                "old_price" => "1,500.00",
                "sku" => "3276611365",
                "discount_percentage" => null,
                "link" => "/product/container-per-officina-da-10-piedi/",
                "categories" => ["non-categorizzato"],
                "short_description" => "Dimensioni esterne: 2.991 mm x 2.438 mm x 2.591 mm\n&nbsp;\nDimensioni interne: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nDimensioni della porta: 2338 mm x 2280 mm\n&nbsp;\nVolume: 15,9 m³\n&nbsp;\nPallet europei: 5",
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
                "description" => ""
            ],
            [
                "id" => "11838",
                "name" => "Container per spedizioni con apertura laterale da 20 piedi",
                "price" => "1,250.00",
                "old_price" => "2,000.00",
                "sku" => "3276611838",
                "discount_percentage" => null,
                "link" => "/product/container-per-spedizioni-con-apertura-laterale-da-20-piedi/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059645-300x300.jpg",
                    "/assets/uploads/2025/11/1000059649-300x300.jpg",
                    "/assets/uploads/2025/11/1000059648-300x300.jpg",
                    "/assets/uploads/2025/11/1000059647-300x300.jpg",
                    "/assets/uploads/2025/11/1000059646-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11834",
                "name" => "Container per spedizioni con apertura laterale High Cube da 20 piedi",
                "price" => "1,250.00",
                "old_price" => "1,800.00",
                "sku" => "3276611834",
                "discount_percentage" => null,
                "link" => "/product/container-per-spedizioni-con-apertura-laterale-high-cube-da-20-piedi/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059517-300x300.jpg",
                    "/assets/uploads/2025/11/1000059515-300x300.jpg",
                    "/assets/uploads/2025/11/1000059516-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11958",
                "name" => "Container per spedizioni con apertura laterale High Cube da 40 piedi",
                "price" => "1,645.00",
                "old_price" => "2,300.00",
                "sku" => "3276611958",
                "discount_percentage" => null,
                "link" => "/product/container-per-spedizioni-con-apertura-laterale-high-cube-da-40-piedi/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11959",
                "name" => "Container per spedizioni con porta laterale da 40 piedi – Configurazione a 2 o 4 porte",
                "price" => "2,350.00",
                "old_price" => "3,000.00",
                "sku" => "3276611959",
                "discount_percentage" => null,
                "link" => "/product/container-per-spedizioni-con-porta-laterale-da-40-piedi-configurazione-a-2-o-4-porte/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11491",
                "name" => "Container per ufficio sociale da 15 m²: compatto e funzionale",
                "price" => "3,520.00",
                "old_price" => "3,750.00",
                "sku" => "3276611491",
                "discount_percentage" => null,
                "link" => "/product/container-per-ufficio-sociale-da-15-m%c2%b2-compatto-e-funzionale/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10949",
                "name" => "Container reefer domestico da 20 piedi",
                "price" => "4,280.00",
                "old_price" => "4,780.00",
                "sku" => "3276610949",
                "discount_percentage" => null,
                "link" => "/product/container-reefer-domestico-da-20-piedi/",
                "categories" => ["container-refrigerati", "contenitori-20-piedi"],
                "short_description" => "Container refrigerato ad alte prestazioni con intervallo di temperatura da -40 °C a +30 °C. Dotato di rivestimento in acciaio inossidabile, pavimento piatto, test PTI, tasche per carrelli elevatori e collegamento a 380V.  Disponibile per il noleggio o l'acquisto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_img_0866_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10947",
                "name" => "Container refrigerato usato da 40 piedi HC ISO",
                "price" => "8,760.00",
                "old_price" => null,
                "sku" => "3276610947",
                "discount_percentage" => null,
                "link" => "/product/container-refrigerato-usato-da-40-piedi-hc-iso/",
                "categories" => ["container-refrigerati", "contenitori-40-piedi"],
                "short_description" => "I container per surgelati e i container isolanti vengono utilizzati per il trasporto o lo stoccaggio delicato di alimenti, ma anche di altri beni per la cui integrità è necessario mantenere una determinata temperatura.\n&nbsp;",
                "images" => [
                    "/assets/uploads/2025/11/40ft-refrigerated-container-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11487",
                "name" => "Container ristorante HC da 20 piedi – Disposizione unidirezionale Ideale per la ristorazione mobile o come chiosco di vendita.",
                "price" => "4,050.00",
                "old_price" => "4,500.00",
                "sku" => "3276611487",
                "discount_percentage" => null,
                "link" => "/product/container-ristorante-hc-da-20-piedi-disposizione-unidirezionale-ideale-per-la-ristorazione-mobile-o-come-chiosco-di-vendita/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11565",
                "name" => "Container sanitario 3×6 – 6 docce, 2 lavandini, scaldabagno da 300 litri",
                "price" => "5,250.00",
                "old_price" => "6,300.00",
                "sku" => "3276611565",
                "discount_percentage" => null,
                "link" => "/product/container-sanitario-36-6-docce-2-lavandini-scaldabagno-da-300-litri/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10944",
                "name" => "Container standard da 10 piedi blu",
                "price" => "1,300.00",
                "old_price" => null,
                "sku" => "3276610944",
                "discount_percentage" => null,
                "link" => "/product/container-standard-da-10-piedi-blu/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Container compatto per lo stoccaggio in acciaio CORTEN con certificato CSC. Dotato di pavimento in compensato, ventilazione, lockbox e tasche per carrelli elevatori.  Ideale per lo stoccaggio e il trasporto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_10ft-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10943",
                "name" => "Container standard da 20 piedi",
                "price" => "1,650.00",
                "old_price" => "1,800.00",
                "sku" => "3276610943",
                "discount_percentage" => null,
                "link" => "/product/container-standard-da-20-piedi/",
                "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                "short_description" => "Il container più utilizzato al mondo per il trasporto e lo stoccaggio. Certificato CSC, in acciaio CORTEN, con pavimento in legno compensato, Lockbox e ventilazione.  Ideale per lo stoccaggio a secco o il trasporto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_fotos_20dv_new_ral_5013_normal-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11055",
                "name" => "Container standard da 20 piedi con pavimento in acciaio",
                "price" => "1,700.00",
                "old_price" => null,
                "sku" => "3276611055",
                "discount_percentage" => null,
                "link" => "/product/container-standard-da-20-piedi-con-pavimento-in-acciaio/",
                "categories" => ["container-di-stoccaggio", "contenitori-20-piedi"],
                "short_description" => "Container robusto per lo stoccaggio con pavimento in acciaio completamente saldato, Lockbox, ventilazione e certificato CSC. Ideale per merci pesanti o sensibili allo sporco.  Impilabile e disponibile in ogni colore RAL.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_20sf2-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10873",
                "name" => "Container standard da 40 piedi (usato)",
                "price" => "1,200.00",
                "old_price" => null,
                "sku" => "3276610873",
                "discount_percentage" => null,
                "link" => "/product/container-standard-da-40-piedi-usato/",
                "categories" => ["container-standard-usati", "contenitori-40-piedi"],
                "short_description" => "Container standard usato da 40 piediContainer robusto per lo stoccaggio e il trasporto. Certificato CSC, in acciaio CORTEN, con pavimento in legno multistrato, ventilazione e Lockbox.  Ideale per uso permanente o temporaneo.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_photo_2019_09_30_08_39_29-291x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11057",
                "name" => "Container standard da 40 piedi blu NUOVO",
                "price" => "2,390.00",
                "old_price" => null,
                "sku" => "3276611057",
                "discount_percentage" => null,
                "link" => "/product/container-standard-da-40-piedi-blu-nuovo/",
                "categories" => ["container-standard-usati", "contenitori-40-piedi"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1-2-2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11058",
                "name" => "Container standard nuovo da 20 piedi per 8 piedi",
                "price" => "1,950.00",
                "old_price" => null,
                "sku" => "3276611058",
                "discount_percentage" => null,
                "link" => "/product/container-standard-nuovo-da-20-piedi-per-8-piedi/",
                "categories" => ["container-standard-usati", "contenitori-20-piedi"],
                "short_description" => "Nuovo container standard da 20 piedi – bianco, versatile e pronto all'uso\nQuesto nuovo container standard da 20 piedi in elegante bianco è perfetto per il trasporto e lo stoccaggio di una vasta gamma di merci. Realizzato in acciaio Corten di alta qualità, offre massima stabilità, durata e resistenza agli agenti atmosferici. Con la sua verniciatura fresca e la struttura antiruggine, è ideale per l'uso immediato in ambito commerciale o privato.",
                "images" => [
                    "/assets/uploads/2025/11/20ft-by-8ft-standard-container-NEW-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11484",
                "name" => "Container Ufficio / Padiglione Modulare 3x6m – Funzionale e Attrezzato",
                "price" => "4,200.00",
                "old_price" => "4,500.00",
                "sku" => "3276611484",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-padiglione-modulare-3x6m-funzionale-e-attrezzato/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11675",
                "name" => "Container ufficio 4×2,20 metri con servizi igienici",
                "price" => "2,100.00",
                "old_price" => "2,500.00",
                "sku" => "3276611675",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-4220-metri-con-servizi-igienici/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11676",
                "name" => "Container ufficio Container abitativo con bagno/doccia",
                "price" => "3,150.00",
                "old_price" => "3,600.00",
                "sku" => "3276611676",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-container-abitativo-con-bagno-doccia/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11619",
                "name" => "Container ufficio da 17 m² – Padiglione funzionale e mobile",
                "price" => "3,800.00",
                "old_price" => "4,000.00",
                "sku" => "3276611619",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-17-m%c2%b2-padiglione-funzionale-e-mobile-2/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/S1-300x300.jpg",
                    "/assets/uploads/2025/11/1000002892-300x300.jpg",
                    "/assets/uploads/2025/11/1000002889-300x300.jpg",
                    "/assets/uploads/2025/11/1000002888-300x300.jpg",
                    "/assets/uploads/2025/11/1000002891-300x300.jpg",
                    "/assets/uploads/2025/11/1000002890-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11424",
                "name" => "Container ufficio da 17 m² – Padiglione funzionale e mobile",
                "price" => "4,799.00",
                "old_price" => "5,220.00",
                "sku" => "3276611424",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-17-m%c2%b2-padiglione-funzionale-e-mobile/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/a1ef6f_a01cdfce969d4d6b894fd37015be57bb7Emv2-300x231.jpg",
                    "/assets/uploads/2025/11/a1ef6f_ee5959a9220a4308949aee6efbdf83ed7Emv2-252x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_28cddd826aab4ef2a8487cb10d21dadd7Emv2-300x281.png",
                    "/assets/uploads/2025/11/a1ef6f_0dcefcfdf3a84d9f8cf1884000efe7a37Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_de40c9b3f7164fb385b75f9ee647baa77Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_c97062fa332d481d8737943e48f86cde7Emv2-300x283.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11620",
                "name" => "Container ufficio da 18 m² – isolato e attrezzato",
                "price" => "4,215.00",
                "old_price" => "4,500.00",
                "sku" => "3276611620",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-18-m%c2%b2-isolato-e-attrezzato/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000002899-300x300.jpg",
                    "/assets/uploads/2025/11/1000002903-300x300.jpg",
                    "/assets/uploads/2025/11/1000002898-300x300.jpg",
                    "/assets/uploads/2025/11/1000002901-300x300.jpg",
                    "/assets/uploads/2025/11/1000002900-300x300.jpg",
                    "/assets/uploads/2025/11/1000002902-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11529",
                "name" => "Container ufficio da 18 m² con servizi igienici: comfort e isolamento ottimale",
                "price" => "4,950.00",
                "old_price" => "5,400.00",
                "sku" => "3276611529",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-18-m%c2%b2-con-servizi-igienici-comfort-e-isolamento-ottimale/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11723",
                "name" => "Container ufficio da 18 m² con servizi igienici: comfort e isolamento ottimale",
                "price" => "4,120.00",
                "old_price" => "5,100.00",
                "sku" => "3276611723",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-18-m%c2%b2-con-servizi-igienici-comfort-e-isolamento-ottimale-2/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000003432-300x300.jpg",
                    "/assets/uploads/2025/11/1000003435-300x300.jpg",
                    "/assets/uploads/2025/11/1000003434-300x300.jpg",
                    "/assets/uploads/2025/11/1000003431-300x300.jpg",
                    "/assets/uploads/2025/11/1000003436-300x300.jpg",
                    "/assets/uploads/2025/11/1000003433-300x300.jpg",
                    "/assets/uploads/2025/11/1000003437-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11236",
                "name" => "CONTAINER UFFICIO DA 20 PIEDI",
                "price" => "1,510.00",
                "old_price" => "2,100.00",
                "sku" => "3276611236",
                "discount_percentage" => null,
                "link" => "/product/container-ufficio-da-20-piedi/",
                "categories" => ["container-modulari"],
                "short_description" => "Incluso di serie:\n1 finestra scorrevole monovetro\n1 serranda di sicurezza in acciaio\nPorta personale in acciaio ad 1 anta\nRivestimento melaminico – Finitura ufficio\nIsolamento in lana di roccia da 50 mm\nPavimento interno in polietilene resistente all'usura\nPacchetto elettrico di base\n2 Luci della staffa\n1 interruttore\n1 radiatore\n2 prese doppie\n1 isolante esterno",
                "images" => [
                    "/assets/uploads/2025/11/e9026bb1-e4fe-47f1-bd8d-afbb1aa327af-768x576-1-300x300.webp",
                    "/assets/uploads/2025/11/888bcf05-f13e-4d69-91bb-a91f7d858e50-768x576-1-300x300.webp",
                    "/assets/uploads/2025/11/208ed79f-293a-439c-91af-0f2ae9e35c70-768x576-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10866",
                "name" => "Contenitore 10 Piedi Usato – Compatto, Economico e Resistente",
                "price" => "610.61",
                "old_price" => "872.30",
                "sku" => "3276610866",
                "discount_percentage" => null,
                "link" => "/product/contenitore-10-piedi-usato-compatto-economico-e-resistente/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Un contenitore compatto da 10 piedi, perfetto per chi cerca una soluzione economica e sicura per lo stoccaggio. In acciaio corten, ricondizionato e pronto all'uso.\nStruttura in acciaio corten resistente\nVolume interno 16 m³\nPorte doppie con chiusura sicura",
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
                "description" => ""
            ],
            [
                "id" => "10487",
                "name" => "Contenitore 20 piedi con apertura laterale",
                "price" => "1,751.75",
                "old_price" => "2,502.50",
                "sku" => "3276610487",
                "discount_percentage" => null,
                "link" => "/product/contenitore-20-piedi-con-apertura-laterale/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Il contenitore da 20 piedi con apertura laterale offre un accesso completo su uno dei lati lunghi, rendendolo ideale per carichi voluminosi o frequenti operazioni di stoccaggio. Resistente e sicuro, è perfetto per uso industriale, agricolo o logistico.\nApertura laterale su 6 metri (4 ante)\nPavimento in legno trattato, resistente e sicuro\nStruttura in acciaio saldato e verniciato\nVentilazione integrata e chiusura con lucchetto\nDisponibile con impianto elettrico e altre opzioni",
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
                "description" => ""
            ],
            [
                "id" => "10485",
                "name" => "Contenitore 20 piedi Dry usato con doppia porta",
                "price" => "1,322.32",
                "old_price" => "1,889.03",
                "sku" => "3276610485",
                "discount_percentage" => null,
                "link" => "/product/contenitore-20-piedi-dry-usato-con-doppia-porta/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Il contenitore Dry usato da 20 piedi con doppia apertura è la scelta ideale per chi cerca versatilità, robustezza e sicurezza. Dotato di accesso facilitato da entrambi i lati, si adatta perfettamente a contesti industriali, agricoli e residenziali. La struttura in acciaio e il pavimento trattato contro l'umidità lo rendono resistente nel tempo.\nDoppia porta per accesso frontale e posteriore\nPavimento in legno massiccio da 25 mm trattato\nStruttura in acciaio saldato da 3 mm\nVolume interno 31 m³\nFacile movimentazione con carrello o gru",
                "images" => [
                    "/assets/uploads/2025/11/2-5-300x300.jpg",
                    "/assets/uploads/2025/11/1-6-300x300.jpg",
                    "/assets/uploads/2025/11/3-5-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10484",
                "name" => "Contenitore 20 piedi HC",
                "price" => "1,651.65",
                "old_price" => "2,359.50",
                "sku" => "3276610484",
                "discount_percentage" => null,
                "link" => "/product/contenitore-20-piedi-hc/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Stai cercando una soluzione di stoccaggio ampia e resistente? Il nostro contenitore HC da 20 piedi di seconda mano è progettato per offrire massima durata, sicurezza e praticità in qualsiasi contesto, dai cantieri ai magazzini agricoli. Realizzato in acciaio saldato, con pavimento in legno trattato e volume interno maggiorato, rappresenta un'ottima scelta anche per usi personalizzati.\nVolume interno di 37 m³ con altezza maggiorata\nStruttura in acciaio da 3 mm e pareti da 1,5 mm\nPavimento in legno da 25 mm resistente all'umidità\nVentilazione e sistema anti-effrazione\nFacile movimentazione con gru o carrello elevatore",
                "images" => [
                    "/assets/uploads/2025/11/1-5-300x300.jpg",
                    "/assets/uploads/2025/11/2-2-1-300x300.webp",
                    "/assets/uploads/2025/11/3-4-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10486",
                "name" => "Contenitore 20 piedi High Cube con porte avvolgibili",
                "price" => "1,996.99",
                "old_price" => "2,852.85",
                "sku" => "3276610486",
                "discount_percentage" => null,
                "link" => "/product/contenitore-20-piedi-high-cube-con-porte-avvolgibili/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Robusto, versatile ed esteticamente curato, il contenitore 20 piedi High Cube con porte avvolgibili è perfetto per lo stoccaggio sicuro o la trasformazione in officina mobile. La struttura rinforzata in acciaio assicura resistenza nel tempo, mentre le porte avvolgibili garantiscono praticità anche negli spazi più stretti.\nAltezza maggiorata per un volume interno superiore\nPorte avvolgibili robuste e pratiche\nStruttura in acciaio con telaio rinforzato\nColore grigio chiaro dall'estetica discreta\nIdeale per officine, eventi, cantieri o magazzini mobili",
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
                "description" => ""
            ],
            [
                "id" => "10703",
                "name" => "Contenitore Bar Café 6 metri Snack-Box 20′",
                "price" => "1,821.82",
                "old_price" => "2,602.60",
                "sku" => "3276610703",
                "discount_percentage" => null,
                "link" => "/product/contenitore-bar-cafe-6-metri-snack-box-20%e2%80%b2/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Contenitore Bar Café 6 metri – Soluzione modulare per ristorazione mobile\nBotole di servizio frontali e laterali ampie\nIsolamento termico con lana Dritherm\nRivestimento interno resistente e facile da pulire\nPavimento vinilico antiscivolo\nVerniciatura personalizzabile\nEquipaggiamento cucina su richiesta",
                "images" => [
                    "/assets/uploads/2025/11/2-28-300x300.jpeg",
                    "/assets/uploads/2025/11/1-28-300x300.jpeg",
                    "/assets/uploads/2025/11/3-27-300x300.jpeg",
                    "/assets/uploads/2025/11/4-27-300x300.jpeg",
                    "/assets/uploads/2025/11/5-25-300x300.jpeg",
                    "/assets/uploads/2025/11/6-20-300x300.jpeg",
                    "/assets/uploads/2025/11/7-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11080",
                "name" => "Contenitore Bar Démontable 3×2 Metri – Soluzione Compatta e Versatile",
                "price" => "1,150.00",
                "old_price" => null,
                "sku" => "3276611080",
                "discount_percentage" => null,
                "link" => "/product/contenitore-bar-demontable-32-metri-soluzione-compatta-e-versatile/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore Bar Démontable 3×2 Metri è una soluzione versatile e robusta per eventi e attività commerciali. Facile da montare, trasportare e personalizzare.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Bar-Demontable-3x2-Metri-Soluzione-Compatta-e-Versatile-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11079",
                "name" => "Contenitore Bar Démontable XL 4 x 2 m – Soluzione Modulare per Eventi",
                "price" => "1,220.00",
                "old_price" => null,
                "sku" => "3276611079",
                "discount_percentage" => null,
                "link" => "/product/contenitore-bar-demontable-xl-4-x-2-m-soluzione-modulare-per-eventi/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore Bar Démontable XL 4 x 2 m offre uno spazio flessibile e personalizzabile per eventi. Facile da trasportare e montare, è la scelta ideale per il tuo business.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Bar-Demontable-XL-4-x-2-m-Soluzione-Modulare-per-Eventi-0-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Bar-Demontable-XL-4-x-2-m-Soluzione-Modulare-per-Eventi-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10699",
                "name" => "Contenitore Bar Personalizzato 6 Metri",
                "price" => "1,921.92",
                "old_price" => "2,745.60",
                "sku" => "3276610699",
                "discount_percentage" => null,
                "link" => "/product/contenitore-bar-personalizzato-6-metri/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Contenitore bar 6 m – food truck personalizzato\nContainer 20 piedi primo viaggio\nBancone pieghevole e marquesina a gas\nIsolamento con pannelli sandwich da 40 mm\nElettricità e idraulica installate\nPavimento in resina con scarico\nEsterno nero elegante",
                "images" => [
                    "/assets/uploads/2025/11/1-27-300x300.jpeg",
                    "/assets/uploads/2025/11/2-4-300x300.jpeg",
                    "/assets/uploads/2025/11/3-26-300x300.jpeg",
                    "/assets/uploads/2025/11/4-26-300x300.jpeg",
                    "/assets/uploads/2025/11/5-24-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10701",
                "name" => "Contenitore Bar Smontabile 6×2 m",
                "price" => "1,521.52",
                "old_price" => "2,173.60",
                "sku" => "3276610701",
                "discount_percentage" => null,
                "link" => "/product/contenitore-bar-smontabile-6x2-m/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Contenitore Bar 6×2 m – Smontabile e modulare\nSuperficie aperta da 12 m²\nStruttura in acciaio zincato verniciato\nPensilina con chiusura + doppi sportelli\nSmontabile e facile da trasportare\nPersonalizzabile con accessori",
                "images" => [
                    "/assets/uploads/2025/11/2-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/1-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/3-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/4-1-1-1-300x300.webp",
                    "/assets/uploads/2025/11/5-1-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10698",
                "name" => "Contenitore Caffetteria 20 Piedi",
                "price" => "3,203.20",
                "old_price" => "4,576.00",
                "sku" => "3276610698",
                "discount_percentage" => null,
                "link" => "/product/contenitore-caffetteria-20-piedi/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Contenitore bar 20 piedi – cucina mobile professionale\nCucina attrezzata con forno, frigo, lavastoviglie\nSpazio ottimizzato per servizio clienti\nRobusta struttura in acciaio\nIdeale per bar mobili e food truck\nPronto all'uso con attrezzature incluse",
                "images" => [
                    "/assets/uploads/2025/11/1-20-300x300.jpg",
                    "/assets/uploads/2025/11/2-11-300x300.jpg",
                    "/assets/uploads/2025/11/3-11-300x300.jpg",
                    "/assets/uploads/2025/11/4-8-300x300.jpg",
                    "/assets/uploads/2025/11/5-6-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10622",
                "name" => "Contenitore Commerciale “Linz”",
                "price" => "2,622.62",
                "old_price" => "3,746.60",
                "sku" => "3276610622",
                "discount_percentage" => null,
                "link" => "/product/contenitore-commerciale-linz/",
                "categories" => ["ufficio"],
                "short_description" => "Modulo commerciale isolato da 6 metri, pronto all'uso.\nDesign effetto legno elegante\nIsolamento termico con pannelli sandwich da 10 cm\nFinestre fisse 90×190 cm per luce naturale\nImpianto elettrico CE + riscaldamento integrato\nPavimento in PVC resistente",
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
                "description" => ""
            ],
            [
                "id" => "10479",
                "name" => "Contenitore da 10 Piedi per Uso Agricolo",
                "price" => "710.00",
                "old_price" => "1,029.60",
                "sku" => "3276610479",
                "discount_percentage" => null,
                "link" => "/product/contenitore-da-10-piedi-per-uso-agricolo/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Il contenitore da 10 piedi per uso agricolo è la soluzione perfetta per chi desidera uno spazio sicuro, compatto e resistente per lo stoccaggio in fattoria. Realizzato da container marittimi riciclati, offre solidità e protezione totale.\nStruttura in acciaio riciclato da 20′\nDimensioni compatte: circa 3 metri\nPorta rinforzata e chiusura sicura\nColore verde abete, perfetto per ambienti naturali\nIdeale per stoccaggio di attrezzi, mangimi, sementi e prodotti agricoli",
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
                "description" => ""
            ],
            [
                "id" => "11156",
                "name" => "Contenitore da Giardino 1,5 x 2,2 m – Verde RAL 6005",
                "price" => "780.00",
                "old_price" => null,
                "sku" => "3276611156",
                "discount_percentage" => null,
                "link" => "/product/contenitore-da-giardino-15-x-22-m-verde-ral-6005/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore da Giardino 1,5 x 2,2 m in verde RAL 6005 è perfetto per stoccare in sicurezza attrezzi e materiali. Resistente, compatto e facile da montare.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-1-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-da-Giardino-15-x-22-m-Verde-RAL-6005-0-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10492",
                "name" => "Contenitore di stoccaggio 40 piedi High Cube",
                "price" => "2,320.00",
                "old_price" => "3,546.40",
                "sku" => "3276610492",
                "discount_percentage" => null,
                "link" => "/product/contenitore-di-stoccaggio-40-piedi-high-cube/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore di stoccaggio 40’ HC usato in ottimo stato, perfetto per uso professionale o privato. Struttura robusta, ventilazione inclusa, pronto all'uso.\nStruttura in acciaio saldato sp. 3 mm\nPavimento in legno 25 mm trattato\nVolume utile: 31 m³\nMovimentabile con gru o carrello elevatore\nProtezione per il lucchetto inclusa",
                "images" => [
                    "/assets/uploads/2025/11/3-1-300x300.jpg",
                    "/assets/uploads/2025/11/2-3-300x300.jpg",
                    "/assets/uploads/2025/11/4-1-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10493",
                "name" => "Contenitore di stoccaggio 40 piedi High Cube",
                "price" => "2,450.00",
                "old_price" => "3,603.60",
                "sku" => "3276610493",
                "discount_percentage" => null,
                "link" => "/product/contenitore-di-stoccaggio-40-piedi-high-cube-2/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore di stoccaggio 40’ HC nuovo con altezza extra e ampio volume interno. Ideale per magazzino, cantiere o deposito agricolo.\nAltezza interna maggiorata\nPavimento in legno trattato (25 mm)\nStruttura in acciaio saldato 3 mm\nVolume utile: 31 m³\nVentilato e dotato di doppie porte",
                "images" => [
                    "/assets/uploads/2025/11/2-3-300x300.jpg",
                    "/assets/uploads/2025/11/2-3-1-300x300.jpg",
                    "/assets/uploads/2025/11/4-4-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10494",
                "name" => "Contenitore di stoccaggio 40 piedi standard",
                "price" => "2,055.00",
                "old_price" => "3,117.40",
                "sku" => "3276610494",
                "discount_percentage" => null,
                "link" => "/product/contenitore-di-stoccaggio-40-piedi-standard/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore da 40 piedi standard usato, perfetto per lo stoccaggio in cantieri, magazzini o ambienti agricoli.\nStruttura in acciaio saldato (3 mm)\nPavimento in legno trattato da 25 mm\nVolume utile: 31 m³\n4 prese d'aria, doppie porte\nManipolazione con muletto o gru",
                "images" => [
                    "/assets/uploads/2025/11/3-1-1-300x300.webp",
                    "/assets/uploads/2025/11/1-1-1-300x300.webp",
                    "/assets/uploads/2025/11/2-6-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11163",
                "name" => "Contenitore Frigorifero 10 Piedi – Soluzione Compatta per Stoccaggio",
                "price" => "1,200.00",
                "old_price" => null,
                "sku" => "3276611163",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-10-piedi-soluzione-compatta-per-stoccaggio/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore Frigorifero 10 Piedi: compatto, isolato e ideale per alimenti, farmaci o prodotti chimici. Perfetto per stoccaggio e trasporto sicuro a temperatura controllata.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-10-Piedi-Soluzione-Compatta-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-10-Piedi-Soluzione-Compatta-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-0-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11166",
                "name" => "Contenitore Frigorifero 20 Piedi Reefer- Soluzione Ideale per Stoccaggio",
                "price" => "3,600.00",
                "old_price" => "4,000.00",
                "sku" => "3276611166",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-20-piedi-reefer-soluzione-ideale-per-stoccaggio/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore Frigorifero 20 Piedi Reefer: perfetto per stoccaggio e trasporto di prodotti freschi e sensibili. Gamma termica da -25°C a +25°C, certificato ISO e pronto all'uso.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-0-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-2-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-20-Piedi-Reefer-1-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11164",
                "name" => "Contenitore Frigorifero 40 Piedi – Soluzione Affidabile per Trasporto",
                "price" => "4,600.00",
                "old_price" => "5,500.00",
                "sku" => "3276611164",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-40-piedi-soluzione-affidabile-per-trasporto/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore Frigorifero 40 Piedi: robusto, isolato e ideale per alimenti, farmaci e prodotti chimici. Perfetto per trasporto e stoccaggio sicuro a temperatura controllata.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-40-Piedi-Soluzione-Affidabile-per-Trasporto-e-Stoccaggio-a-Temperatura-Controllata-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11167",
                "name" => "Contenitore Frigorifero 40 Piedi Reefer Usato",
                "price" => "4,500.00",
                "old_price" => null,
                "sku" => "3276611167",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-40-piedi-reefer-usato/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore Frigorifero 40 Piedi Reefer Usato Classe A: robusto, certificato ISO, ideale per il trasporto e lo stoccaggio a temperatura controllata. Precisione termica e grande capacità interna.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-40-Piedi-Reefer-Usato-Classe-A-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11165",
                "name" => "Contenitore Frigorifero 45 Piedi Reefer – Soluzione Ideale per Stoccaggio",
                "price" => "6,000.00",
                "old_price" => null,
                "sku" => "3276611165",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-45-piedi-reefer-soluzione-ideale-per-stoccaggio/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore Frigorifero 45 Piedi Reefer: robusto, certificato ISO e perfetto per trasporto e stoccaggio di prodotti freschi o sensibili. Precisione da -25°C a +25°C.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-2-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Frigorifero-45-Piedi-Reefer-Soluzione-Ideale-per-Stoccaggio-e-Trasporto-a-Temperatura-Controllata-0-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10475",
                "name" => "Contenitore Frigorifero Congelatore 20 Piedi RF",
                "price" => "2,510.00",
                "old_price" => "3,846.70",
                "sku" => "3276610475",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-congelatore-20-piedi-rf/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Il contenitore frigorifero 20 piedi RF è progettato per un controllo preciso della temperatura da -25°C a +25°C. Con pareti in poliuretano ad alto isolamento, unità refrigerante Carrier e certificazione CSC, è perfetto per uso alimentare e industriale.\nRange di temperatura: -25°C / +25°C\nIsolamento in schiuma poliuretanica (10–12 cm)\nUnità Carrier ad alta efficienza\nConnessione 380V, presa 32A integrata\nCertificato CSC, pronto all'uso",
                "images" => [
                    "/assets/uploads/2025/11/1-4-300x300.webp",
                    "/assets/uploads/2025/11/2-4-300x300.webp",
                    "/assets/uploads/2025/11/3-4-300x300.webp",
                    "/assets/uploads/2025/11/4-3-300x300.webp",
                    "/assets/uploads/2025/11/5-2-300x300.webp",
                    "/assets/uploads/2025/11/6-2-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10471",
                "name" => "Contenitore Frigorifero da 10 Piedi",
                "price" => "1,951.95",
                "old_price" => "2,788.50",
                "sku" => "3276610471",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-da-10-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Mantieni i tuoi prodotti freschi, surgelati o sensibili alla temperatura al sicuro con il nostro contenitore frigorifero da 10 piedi. Dotato di un sistema di refrigerazione attivo, isolamento ad alte prestazioni e finiture professionali, è la soluzione compatta e affidabile per lo stoccaggio in condizioni controllate.\nRange di temperatura: da -25°C a +25°C\nIsolamento PIR da 40 mm e XPS da 50 mm sul pavimento\nInterni bianchi in acciaio, igienici e lavabili\nSistema elettrico e gruppo frigorifero integrati\nVentilazione ottimizzata con doppia valvola",
                "images" => [
                    "/assets/uploads/2025/11/1-300x300.webp",
                    "/assets/uploads/2025/11/2-300x300.webp",
                    "/assets/uploads/2025/11/3-300x300.webp",
                    "/assets/uploads/2025/11/4-300x300.webp",
                    "/assets/uploads/2025/11/5-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10472",
                "name" => "Contenitore Frigorifero da 10 Piedi – Compatto, Refrigerato",
                "price" => "1,551.55",
                "old_price" => "2,216.50",
                "sku" => "3276610472",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-da-10-piedi-compatto-refrigerato/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Questo contenitore frigorifero da 10 piedi unisce compattezza, efficienza e prestazioni professionali. Con isolamento PIR e refrigerazione attiva, è perfetto per il trasporto o lo stoccaggio di merci sensibili alla temperatura. Igienico, robusto e ottimizzato per ambienti professionali.\nVolume interno: 12,45 m³ / Superficie: 5,48 m²\nRange temperatura: -25°C a +25°C\nIsolamento PIR e pavimento in XPS\nInterni in acciaio bianco, ventilazione integrata\nStruttura impilabile e facile da movimentare",
                "images" => [
                    "/assets/uploads/2025/11/1-1-300x300.webp",
                    "/assets/uploads/2025/11/2-1-300x300.webp",
                    "/assets/uploads/2025/11/3-1-300x300.webp",
                    "/assets/uploads/2025/11/4-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10473",
                "name" => "Contenitore Frigorifero DNV da 10 Piedi",
                "price" => "1,425.00",
                "old_price" => "2,216.50",
                "sku" => "3276610473",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-dnv-da-10-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Il contenitore frigorifero DNV da 10 piedi è progettato per l'utilizzo in ambienti offshore, garantendo refrigerazione sicura ed efficiente anche in condizioni estreme. Struttura certificata, motore affidabile e design resistente lo rendono perfetto per applicazioni industriali marittime.\nCertificazione DNV per uso offshore\nGruppo frigorifero efficiente e affidabile\nStruttura rinforzata per ambienti marittimi\nSistemi di sollevamento e movimentazione inclusi\nIdeale per la catena del freddo in mare aperto",
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
                "description" => ""
            ],
            [
                "id" => "10476",
                "name" => "Contenitore Frigorifero Reefer 40 Piedi High Cube",
                "price" => "3,099.00",
                "old_price" => "4,461.60",
                "sku" => "3276610476",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-reefer-40-piedi-high-cube/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Perfetto per logistica globale e stoccaggio professionale, il contenitore frigorifero Reefer 40 piedi High Cube offre una capacità elevata, controllo preciso della temperatura e costruzione igienica in acciaio inox. Ideale per merci sensibili al freddo, da -40°C a +35°C.\nCapacità: 76 m³\nTemperatura: da -40°C a +35°C\nInterno in acciaio inox e alluminio\nTipo High Cube: maggiore volume utile\nCertificato CSC per uso internazionale",
                "images" => [
                    "/assets/uploads/2025/11/2-300x300.jpeg",
                    "/assets/uploads/2025/11/3-2-1-300x300.webp",
                    "/assets/uploads/2025/11/4-2-1-300x300.webp",
                    "/assets/uploads/2025/11/reefer-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10477",
                "name" => "Contenitore Frigorifero Usato 40 Piedi",
                "price" => "2,220.00",
                "old_price" => "3,317.60",
                "sku" => "3276610477",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-usato-40-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Il contenitore frigorifero usato da 40 piedi garantisce una soluzione affidabile e certificata per il trasporto e lo stoccaggio a temperatura controllata. Dotato di isolamento in poliuretano, unità Carrier o Thermo King e rivestimento in acciaio inox, è ideale per merci sensibili.\nTemperatura operativa: -25°C / +25°C\nCertificazione CSC valida 1 anno\nInterno in acciaio inox, facile da pulire\nIsolamento in poliuretano ad alta efficienza\nUnità Carrier o Thermo King di qualità professionale",
                "images" => [
                    "/assets/uploads/2025/11/1-4-300x300.png",
                    "/assets/uploads/2025/11/2-4-300x300.png",
                    "/assets/uploads/2025/11/3-3-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10478",
                "name" => "Contenitore Frigorifero Usato 40′ High Cube",
                "price" => "3,095.00",
                "old_price" => "4,504.50",
                "sku" => "3276610478",
                "discount_percentage" => null,
                "link" => "/product/contenitore-frigorifero-usato-40-high-cube/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Cerchi un contenitore refrigerato professionale e pronto all'uso? Il nostro modello usato 40’ High Cube offre spazio, sicurezza e prestazioni elevate. Perfetto per alimenti, farmaci e sostanze sensibili alla temperatura, grazie al sistema refrigerante -40°C / +30°C.\nVolume utile: 67 m³\nStruttura in acciaio saldato e isolato\nPavimento in alluminio zigrinato\nSistema refrigerante 380V -40°C / +30°C\n4 punti di sollevamento + passaggio per forche",
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
                "description" => ""
            ],
            [
                "id" => "10488",
                "name" => "Contenitore Hazmat 20 piedi",
                "price" => "1,525.00",
                "old_price" => "2,545.40",
                "sku" => "3276610488",
                "discount_percentage" => null,
                "link" => "/product/contenitore-hazmat-20-piedi/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "&nbsp;\nIl contenitore Hazmat da 20 piedi è progettato per il trasporto sicuro di materiali pericolosi. Costruito in acciaio CORTEN con vasca di raccolta, garantisce massima protezione in ambienti industriali.\nStruttura anticorrosiva in acciaio CORTEN\nVasca integrata e valvole di drenaggio\nGriglie in acciaio zincato e ventilazione\nCassetta di sicurezza e tasche per carrelli\nImpilabile, resistente e facile da movimentare",
                "images" => [
                    "/assets/uploads/2025/11/1-23-300x300.webp",
                    "/assets/uploads/2025/11/2-22-300x300.webp",
                    "/assets/uploads/2025/11/3-21-300x300.webp",
                    "/assets/uploads/2025/11/4-18-300x300.webp",
                    "/assets/uploads/2025/11/5-20-300x300.webp",
                    "/assets/uploads/2025/11/6-16-300x300.webp",
                    "/assets/uploads/2025/11/7-13-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10496",
                "name" => "Contenitore High Cube 40 piedi – Usato",
                "price" => "2,199.00",
                "old_price" => "3,303.30",
                "sku" => "3276610496",
                "discount_percentage" => null,
                "link" => "/product/contenitore-high-cube-40-piedi-usato/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore marittimo High Cube 40 piedi usato, perfetto per chi ha bisogno di più spazio utile.\nAltezza maggiorata: 2,89 m\nCertificazioni ISO & CSC\nCondizione Cargo Worthy\nStruttura in acciaio Corten\nVendita e noleggio disponibili",
                "images" => [
                    "/assets/uploads/2025/11/1-1-1-300x300.png",
                    "/assets/uploads/2025/11/2-1-1-300x300.png",
                    "/assets/uploads/2025/11/3-300x300.png",
                    "/assets/uploads/2025/11/4-300x300.png",
                    "/assets/uploads/2025/11/5-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11833",
                "name" => "Contenitore High Cube Open Side (HCOS) da 20 piedi",
                "price" => "1,350.00",
                "old_price" => "1,900.00",
                "sku" => "3276611833",
                "discount_percentage" => null,
                "link" => "/product/contenitore-high-cube-open-side-hcos-da-20-piedi/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059508-300x300.jpg",
                    "/assets/uploads/2025/11/1000059507-300x300.jpg",
                    "/assets/uploads/2025/11/1000059509-300x300.jpg",
                    "/assets/uploads/2025/11/1000059512-300x300.jpg",
                    "/assets/uploads/2025/11/1000059511-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10480",
                "name" => "Contenitore Marittimo 10 Piedi",
                "price" => "795.79",
                "old_price" => "1,136.85",
                "sku" => "3276610480",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-10-piedi/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Il contenitore marittimo da 10 piedi IICL6 è la soluzione perfetta per chi cerca uno spazio di stoccaggio professionale, compatto e affidabile. Realizzato in acciaio corten ad alta resistenza e rifinito in bianco elegante, è pronto per l'uso immediato in ambienti industriali, commerciali o privati.\nStruttura in acciaio corten ad alta resistenza\nStandard di qualità IICL6 – prestazioni eccellenti\nCapacità interna: ca. 16 m³ | Carico massimo: 10.000 kg\nColore bianco moderno (RAL 9010)\nIdeale per attrezzature, materiali o progetti modulari",
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
                "description" => ""
            ],
            [
                "id" => "10481",
                "name" => "Contenitore Marittimo 10 Piedi con Doppia Porta",
                "price" => "720.72",
                "old_price" => "1,029.60",
                "sku" => "3276610481",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-10-piedi-con-doppia-porta/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Descrizione corta\nIl contenitore marittimo da 10 piedi con doppia porta è la soluzione ideale per chi cerca versatilità, resistenza e accesso pratico. In condizioni “after one trip”, combina design compatto e massima funzionalità.\nDimensioni: 2,99 x 2,44 x 2,59 m\nColore blu RAL 5010\nStruttura robusta in acciaio corten\nDoppio accesso – porte apribili su entrambi i lati\nPerfetto per stoccaggio, officine mobili o moduli personalizzati",
                "images" => [
                    "/assets/uploads/2025/11/2-6-300x300.jpeg",
                    "/assets/uploads/2025/11/1-6-300x300.jpeg",
                    "/assets/uploads/2025/11/3-5-300x300.jpeg",
                    "/assets/uploads/2025/11/4-5-300x300.jpeg",
                    "/assets/uploads/2025/11/5-5-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10482",
                "name" => "Contenitore Marittimo 10 Piedi Nuovo",
                "price" => "760.76",
                "old_price" => "1,086.80",
                "sku" => "3276610482",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-10-piedi-nuovo/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Questo contenitore marittimo da 10 piedi è la soluzione perfetta per chi cerca uno spazio di stoccaggio compatto, robusto e professionale. La sua struttura nuova, realizzata in acciaio corten ad alta resistenza, garantisce una protezione ottimale contro intemperie e urti. Facile da movimentare e personalizzare, è perfetto per ambienti aziendali, agricoli o industriali dove lo spazio è limitato ma la sicurezza è fondamentale.\nContenitore nuovo, usato una sola volta\nStruttura solida in acciaio corten\nVolume interno di circa 16 m³\nIdeale per stoccaggio sicuro in spazi ristretti\nPronto per consegna immediata",
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
                "description" => ""
            ],
            [
                "id" => "11073",
                "name" => "Contenitore Marittimo 10 Piedi STD Usato – Compatto e Resistente",
                "price" => "700.00",
                "old_price" => null,
                "sku" => "3276611073",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-10-piedi-std-usato-compatto-e-resistente/",
                "categories" => ["non-categorizzato"],
                "short_description" => "Contenitore marittimo standard usato da 10 piedi, compatto e versatile. Perfetto per stoccaggio personale o piccoli progetti modulari. Robusto, economico e sostenibile.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-10-Piedi-STD-Usato-Compatto-e-Resistente-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11065",
                "name" => "Contenitore Marittimo 20 Piedi DD – Doppio Accesso e Versatilità",
                "price" => "1,150.00",
                "old_price" => "1,850.00",
                "sku" => "3276611065",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-piedi-dd-doppio-accesso-e-versatilita/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo standard Double Door da 20 piedi, progettato per massima accessibilità con porte su entrambe le estremità. Ideale per stoccaggio efficiente, progetti modulari e trasporto.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-5-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-4-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-3-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-DD-Doppio-Accesso-e-Versatilita-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11063",
                "name" => "Contenitore Marittimo 20 Piedi HC – Spazio Extra e Resistenza",
                "price" => "907.00",
                "old_price" => "1,150.00",
                "sku" => "3276611063",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-piedi-hc-spazio-extra-e-resistenza/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo High Cube da 20 piedi, con design robusto e altezza aggiuntiva per stoccaggio voluminoso. Perfetto per progetti modulari o stoccaggio di grande capacità.",
                "images" => [
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-0-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-HC-Espacio-Extra-y-Resistencia-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11064",
                "name" => "Contenitore Marittimo 20 Piedi OS – Accesso Laterale Totale",
                "price" => "1,450.00",
                "old_price" => "1,850.00",
                "sku" => "3276611064",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-piedi-os-accesso-laterale-totale/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo Open Side da 20 piedi, progettato per un accesso laterale totale e massima versatilità. Ideale per eventi, stoccaggio e progetti modulari.",
                "images" => [
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-0-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-0-300x300.jpg",
                    "/assets/uploads/2025/11/Contenedor-Maritimo-20-Pies-OS-Acceso-Lateral-Total-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11066",
                "name" => "Contenitore Marittimo 20 Piedi STD – Versatile e Resistente",
                "price" => "907.00",
                "old_price" => "1,200.00",
                "sku" => "3276611066",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-piedi-std-versatile-e-resistente/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo standard da 20 piedi, realizzato in acciaio CORTEN, ideale per stoccaggio sicuro e trasporto. Versatile, robusto e personalizzabile secondo le tue esigenze.",
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
                "description" => ""
            ],
            [
                "id" => "11072",
                "name" => "Contenitore Marittimo 20 Piedi STD Usato – Versatile ed Economico",
                "price" => "800.00",
                "old_price" => "1,000.00",
                "sku" => "3276611072",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-piedi-std-usato-versatile-ed-economico/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo standard usato da 20 piedi, resistente ed economico. Ideale per stoccaggio sicuro, progetti modulari e trasporto. Personalizzabile su richiesta.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-20-Piedi-STD-Usato-Versatile-ed-Economico-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10491",
                "name" => "Contenitore marittimo 20’ in acciaio CORTEN",
                "price" => "1,475.00",
                "old_price" => "2,345.20",
                "sku" => "3276610491",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-20-in-acciaio-corten/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Contenitore marittimo 20 piedi in acciaio CORTEN disponibile in versione usata o primo viaggio. Certificato CSC, ermetico e dotato di protezione antieffrazione.\nPorte a 270° con doppia anta\nPavimento antiscivolo in legno marino 28 mm\nCertificato CSC valido – conforme ISO\nCappuccio di sicurezza incluso\nAdatto a trasporto, self-storage e trasformazioni",
                "images" => [
                    "/assets/uploads/2025/11/1-17-300x300.jpg",
                    "/assets/uploads/2025/11/2-14-300x300.jpg",
                    "/assets/uploads/2025/11/3-14-300x300.jpg",
                    "/assets/uploads/2025/11/4-14-300x300.jpg",
                    "/assets/uploads/2025/11/5-13-300x300.jpg",
                    "/assets/uploads/2025/11/6-10-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11069",
                "name" => "Contenitore Marittimo 40 Piedi HC – Alta Capacità e Versatilità",
                "price" => "1,210.00",
                "old_price" => "1,900.00",
                "sku" => "3276611069",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-hc-alta-capacita-e-versatilita/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo High Cube da 40 piedi, progettato per stoccaggio voluminoso o progetti modulari. Alta capacità, robustezza e sostenibilità per ogni esigenza.",
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
                "description" => ""
            ],
            [
                "id" => "11067",
                "name" => "Contenitore Marittimo 40 Piedi HC DD – Alta Capacità e Doppio Accesso",
                "price" => "1,510.00",
                "old_price" => "2,000.00",
                "sku" => "3276611067",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-hc-dd-alta-capacita-e-doppio-accesso/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo High Cube Double Door da 40 piedi, con doppio accesso e capacità extra. Ideale per progetti di stoccaggio, trasporto e modulari. Versatile e resistente, perfetto per ogni esigenza.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-Alta-Capacita-e-Doppio-Accesso-6-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-6-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-5-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-4-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-DD-–-Alta-Capacita-e-Doppio-Accesso-3-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11074",
                "name" => "Contenitore Marittimo 40 Piedi HC Usato – Alta Capacità e Versatilità",
                "price" => "1,140.00",
                "old_price" => "1,850.00",
                "sku" => "3276611074",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-hc-usato-alta-capacita-e-versatilita/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo High Cube usato da 40 piedi, perfetto per stoccaggio voluminoso e progetti modulari. Resistente, economico e personalizzabile su richiesta.",
                "images" => [
                    "/assets/uploads/2025/11/40-hc-d-occasion_5-1024x768-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-HC-Usato-Alta-Capacita-e-Versatilita-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11068",
                "name" => "Contenitore Marittimo 40 Piedi OS – Accesso Laterale Totale e Praticità",
                "price" => "1,849.00",
                "old_price" => "2,500.00",
                "sku" => "3276611068",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-os-accesso-laterale-totale-e-praticita/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo Open Side da 40 piedi, progettato per accesso laterale totale e massima praticità. Ideale per eventi, stoccaggio e progetti modulari. Personalizzabile secondo le tue esigenze.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-OS-–-Accesso-Laterale-Totale-e-Praticita-2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11070",
                "name" => "Contenitore Marittimo 40 Piedi STD – Spazio Ampio e Versatilità",
                "price" => "1,210.00",
                "old_price" => "1,860.00",
                "sku" => "3276611070",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-std-spazio-ampio-e-versatilita/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo standard da 40 piedi, ideale per stoccaggio e progetti modulari. Ampio, resistente e personalizzabile, perfetto per ogni esigenza.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Spazio-Ampio-e-Versatilita-300x291.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11071",
                "name" => "Contenitore Marittimo 40 Piedi STD Usato – Spazioso ed Economico",
                "price" => "1,150.00",
                "old_price" => "1,800.00",
                "sku" => "3276611071",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-40-piedi-std-usato-spazioso-ed-economico/",
                "categories" => ["contenitori-40-piedi", "non-categorizzato"],
                "short_description" => "Contenitore marittimo standard usato da 40 piedi, resistente e conveniente. Perfetto per stoccaggio sicuro, trasporto e progetti modulari. Personalizzabile su richiesta.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-2-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Marittimo-40-Piedi-STD-Usato-Spazioso-ed-Economico-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10483",
                "name" => "Contenitore marittimo Dry Van 10 piedi usato",
                "price" => "650.65",
                "old_price" => "929.50",
                "sku" => "3276610483",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-dry-van-10-piedi-usato/",
                "categories" => ["contenitori-10-piedi"],
                "short_description" => "Hai bisogno di una soluzione di stoccaggio mobile, sicura e salvaspazio? Il nostro contenitore Dry Van da 10 piedi usato offre praticità, resistenza e flessibilità. Grazie alla certificazione CSC, può essere utilizzato anche nel trasporto intermodale. La sua struttura compatta lo rende ideale per cantieri, officine o ambienti industriali con spazio limitato.\nPavimento in legno multistrato da 28 mm\nTenuta stagna contro vento e acqua\nCertificazione CSC per trasporto via terra, mare o ferrovia\nSerratura di sicurezza integrata\nFacile da movimentare con carrelli elevatori",
                "images" => [
                    "/assets/uploads/2025/11/1-5-300x300.webp",
                    "/assets/uploads/2025/11/2-5-300x300.webp",
                    "/assets/uploads/2025/11/2-11-1-300x300.webp",
                    "/assets/uploads/2025/11/3-10-1-300x300.webp",
                    "/assets/uploads/2025/11/4-9-1-300x300.webp",
                    "/assets/uploads/2025/11/5-8-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10497",
                "name" => "Contenitore Marittimo High Cube 40′ con 4 Porte Laterali – Usato",
                "price" => "2,510.00",
                "old_price" => "3,875.30",
                "sku" => "3276610497",
                "discount_percentage" => null,
                "link" => "/product/contenitore-marittimo-high-cube-40-con-4-porte-laterali-usato/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore marittimo High Cube 40’ usato, dotato di 4 porte laterali per accesso indipendente alla merce.Soluzione ideale per logistica intensiva, stoccaggio flessibile o adattamenti tecnici.\nStruttura in acciaio Corten\nPorte con chiusura di sicurezza a 4 barre\nFinitura moderna grigio ocra\nAccesso facilitato su più lati",
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
                "description" => ""
            ],
            [
                "id" => "11485",
                "name" => "Contenitore modulare 40 piedi – Ufficio/Mensa con finestre a bovindo",
                "price" => "6,900.00",
                "old_price" => "7,500.00",
                "sku" => "3276611485",
                "discount_percentage" => null,
                "link" => "/product/contenitore-modulare-40-piedi-ufficio-mensa-con-finestre-a-bovindo/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11157",
                "name" => "Contenitore Modulare Ampliato Duo 29m² – Spazio Multifunzionale",
                "price" => "4,500.00",
                "old_price" => "5,000.00",
                "sku" => "3276611157",
                "discount_percentage" => null,
                "link" => "/product/contenitore-modulare-ampliato-duo-29m%c2%b2-spazio-multifunzionale/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore Modulare Ampliato Duo 29m² offre uno spazio versatile e moderno. Isolato e pronto all'uso, è ideale per uffici o ambienti multifunzionali.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Modulare-Ampliato-Duo-29m²-Spazio-Multifunzionale-0-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Modulare-Ampliato-Duo-29m²-Spazio-Multifunzionale-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10498",
                "name" => "Contenitore Open Top 40′ – Usato Categoria B",
                "price" => "1,910.00",
                "old_price" => "2,509.95",
                "sku" => "3276610498",
                "discount_percentage" => null,
                "link" => "/product/contenitore-open-top-40-usato-categoria-b/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore Open Top 40’ usato (Categoria B), ideale per carico dall'alto con copertura in telo.Struttura robusta in acciaio Corten, certificato CSC, con pavimento in legno multistrato.\nAccesso superiore per carichi speciali\nTelo resistente alle intemperie\nPavimento da 28 mm\nErmetico a vento e acqua\nPortata utile fino a 25.480 kg",
                "images" => [
                    "/assets/uploads/2025/11/1-13-1-300x300.webp",
                    "/assets/uploads/2025/11/2-15-1-300x300.webp",
                    "/assets/uploads/2025/11/3-14-1-300x300.webp",
                    "/assets/uploads/2025/11/4-13-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11364",
                "name" => "Contenitore per barre da 20 piedi",
                "price" => "1,849.00",
                "old_price" => "2,500.00",
                "sku" => "3276611364",
                "discount_percentage" => null,
                "link" => "/product/contenitore-per-barre-da-20-piedi/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni esterne: L 6058 mm x P 2438 mm x A 2591 mm\n&nbsp;\nDimensioni interne: L 5898 mm x P 2352 mm x A 2390 mm\n&nbsp;\nDimensioni della porta: L 2338 mm x P 2280 mm\n&nbsp;\nVolume: 33,1 m³\n&nbsp;\nPallet europei: 11\nPeso a vuoto: 2200 kg\n&nbsp;\nCarico utile: 28280 kg\n&nbsp;\nPeso totale: 30480 kg\n&nbsp;\nCodice tipo ISO: 22G1\n&nbsp;\nChiave del gruppo ISO: 22 GP\n&nbsp;",
                "images" => [
                    "/assets/uploads/2025/11/Barcontainer-2-768x576-1-300x300.jpg",
                    "/assets/uploads/2025/11/Barcontainer-4-768x576-1-300x300.jpg",
                    "/assets/uploads/2025/11/Barcontainer-4-768x576-2-300x300.jpg",
                    "/assets/uploads/2025/11/Barcontainer-5-768x576-1-300x300.jpg",
                    "/assets/uploads/2025/11/Barcontainer-6-768x576-1-300x300.jpg",
                    "/assets/uploads/2025/11/Barcontainer-3-768x576-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11075",
                "name" => "Contenitore Refrigerato 20 Piedi STD – Precisione e Sicurezza",
                "price" => "1,700.00",
                "old_price" => null,
                "sku" => "3276611075",
                "discount_percentage" => null,
                "link" => "/product/contenitore-refrigerato-20-piedi-std-precisione-e-sicurezza/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore refrigerato da 20 piedi nuovo, progettato per trasporto e stoccaggio sicuro di prodotti sensibili alla temperatura. Garanzia di 2 anni inclusa.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-20-Piedi-STD-Precisione-e-Sicurezza-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-20-Piedi-STD-Precisione-e-Sicurezza-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11076",
                "name" => "Contenitore Refrigerato 20′ STD – Usato  Soluzione Ideale per Stoccaggio",
                "price" => "1,200.00",
                "old_price" => null,
                "sku" => "3276611076",
                "discount_percentage" => null,
                "link" => "/product/contenitore-refrigerato-20%e2%80%b2-std-usato-soluzione-ideale-per-stoccaggio/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore refrigerato da 20 piedi usato, progettato per stoccaggio e trasporto sicuro di prodotti sensibili alla temperatura. Coperto da una garanzia di 2 anni.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-20′-STD-–-Usato-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11077",
                "name" => "Contenitore Refrigerato 40 Piedi HC – Alta Capacità e Prestazioni",
                "price" => "5,100.00",
                "old_price" => null,
                "sku" => "3276611077",
                "discount_percentage" => null,
                "link" => "/product/contenitore-refrigerato-40-piedi-hc-alta-capacita-e-prestazioni/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore refrigerato High Cube da 40 piedi nuovo, perfetto per grandi volumi di merci sensibili alla temperatura. Include garanzia di 2 anni e personalizzazioni disponibili.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-–-Alta-Capacita-e-Prestazioni-5-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11078",
                "name" => "Contenitore Refrigerato 40 Piedi HC Usato – Grande Capacità e Affidabilità",
                "price" => "4,500.00",
                "old_price" => null,
                "sku" => "3276611078",
                "discount_percentage" => null,
                "link" => "/product/contenitore-refrigerato-40-piedi-hc-usato-grande-capacita-e-affidabilita/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Contenitore refrigerato High Cube da 40 piedi usato, progettato per grandi volumi di merci sensibili alla temperatura. Include garanzia di 2 anni e personalizzazioni disponibili.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-1-300x300.jpg",
                    "/assets/uploads/2025/11/Contenitore-Refrigerato-40-Piedi-HC-Usato-Grande-Capacita-e-Affidabilita-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11174",
                "name" => "Contenitore sanitario – WC + doccia + serbatoio",
                "price" => "1,800.00",
                "old_price" => "2,500.00",
                "sku" => "3276611174",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-wc-doccia-serbatoio/",
                "categories" => ["container-modulari"],
                "short_description" => "Collega semplicemente elettricità, acqua e acque reflue: subito pronto per l'uso\nCabina WC doppia 3×2 metri con serbatoio acque nere con wc e doccia\n– 2 finestre\n– Profilo sandwich da 80 mm termicamente isolato per una bassa perdita di energia\n– Porta esterna in lamiera d'acciaio Hörmann zincata\n– Orinatoi\n– Impianto elettrico completo secondo le direttive CE\n– Prese 230V\n– 2 plafoniere\n– Collegamento 11KW/400V\n– Rivestimento del pavimento in PVC – robusto e veloce da pulire\n– radiatore elettrico a parete\n– Serbatoio delle acque grigie\n– Scale\nNoleggio possibile a tariffe mensili basse. Possiamo anche produrre in qualsiasi momento in altre dimensioni e colori secondo le vostre specifiche.",
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
                "description" => ""
            ],
            [
                "id" => "10795",
                "name" => "Contenitore Sanitario 2×2 m con Doccia e Serbatoio",
                "price" => "1,916.91",
                "old_price" => "2,738.45",
                "sku" => "3276610795",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-2x2-m-con-doccia-e-serbatoio/",
                "categories" => ["sanitario"],
                "short_description" => "Il modulo sanitario compatto 2×2 m offre tutto ciò che serve: doccia separata, lavabo, acqua calda e serbatoio reflui, perfetto per ogni situazione temporanea.\nScaldacqua istantaneo da 11 kW\nRadiatore elettrico a parete\nPavimento in PVC antiscivolo e ventilazione naturale",
                "images" => [
                    "/assets/uploads/2025/11/2-9-1-300x300.webp",
                    "/assets/uploads/2025/11/1-7-1-300x300.webp",
                    "/assets/uploads/2025/11/3-8-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11530",
                "name" => "Contenitore sanitario doppio 2,4 x 1,5 m – WC + orinatoio separati",
                "price" => "1,020.00",
                "old_price" => "1,180.00",
                "sku" => "3276611530",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-doppio-24-x-15-m-wc-orinatoio-separati/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10796",
                "name" => "Contenitore Sanitario Doppio 3×2 m",
                "price" => "1,741.74",
                "old_price" => "2,488.20",
                "sku" => "3276610796",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-doppio-3x2-m/",
                "categories" => ["sanitario"],
                "short_description" => "Il modulo sanitario doppio 3×2 m è una soluzione igienica compatta e autonoma, con 2 WC separati, lavabi, acqua calda e pavimento antiscivolo, perfetto per qualsiasi ambiente professionale o temporaneo.\nIlluminazione LED + luce naturale\nBoiler per acqua calda ai lavabi\nStruttura robusta e pronta all'uso",
                "images" => [
                    "/assets/uploads/2025/11/1-5-1-300x300.webp",
                    "/assets/uploads/2025/11/2-7-1-300x300.webp",
                    "/assets/uploads/2025/11/3-6-1-300x300.webp",
                    "/assets/uploads/2025/11/4-6-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11305",
                "name" => "CONTENITORE SANITARIO WC + DOCCIA COLLEGABILE GRIGIO",
                "price" => "1,860.00",
                "old_price" => "2,500.00",
                "sku" => "3276611305",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-wc-doccia-collegabile-grigio/",
                "categories" => ["container-modulari"],
                "short_description" => "Il blocco sanitario modulare consente di realizzare installazioni sanitarie in tempi brevissimi, ad un prezzo molto competitivo rispetto ad una soluzione costruttiva.\nCaratteristiche tecniche\nDIMENSIONI\nAltezza esterna: 240 cm\nAltezza interna: 220 cm\nLarghezza: 220 cm\nProfondità: 120 cm\nSTRUTTURA\nDescrizione: Acciaio zincato e laccato.\nColore: Grigio RAL7016\nSpessore: 2 mm\nSoffitto: altezza 240 mm\nFunzionamento: 4 prese nel tetto per ganci di sollevamento\nPARETI E TETTO\nMateriale: pannelli sandwich\nIsolamento: schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore del tetto: 40 mm\nCopertura tetto: Lamiera di acciaio zincato con greche\nColore pannello: Grigio RAL 7016\nTERRA\nStruttura: pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nCARPENTERIA\nAnta: 2 ante in alluminio, dimensioni 85 x 190 cm\nEstrattore d'aria: 1 in ogni cabina\nSANITARIO\n1 lavabo in ceramica da 35 cm con rubinetto acqua fredda e specchio\n1 WC integrato con cassetta completamente in ceramica\n1 piatto doccia in ceramica\nIngresso e uscita acqua sulla parete posteriore – NF\nELETTRICITÀ: 220 V\nIlluminazione: 1 plafoniera LED in ogni cabina\nPannello: 1 pannello comprensivo di interdifferenziale e interruttori automatici\nInterruttori: 1 in ogni cabina\nUna scatola di giunzione esterna\nScaldabagno non incluso (può essere installato a un costo aggiuntivo).",
                "images" => [
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_0ce91f2a-cc18-489e-97e3-060870ce4879-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_ac272a97-9f8c-4de1-b382-0577c77c83d9-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_b59f4ad0-2170-4fbd-b8ab-b8e683f68d2e-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_1f8091b4-30be-4507-b36e-e1fe7143be19-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_49f92360-0cd4-406d-8247-6565c86405b0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11564",
                "name" => "Contenitore sanitario/spogliatoio 6×2,9",
                "price" => "4,399.00",
                "old_price" => "5,000.00",
                "sku" => "3276611564",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sanitario-spogliatoio-629/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],


            [
                "id" => "10700",
                "name" => "Contenitore Snack-BOX 20’ DRY Privilege",
                "price" => "2,252.25",
                "old_price" => "3,217.50",
                "sku" => "3276610700",
                "discount_percentage" => null,
                "link" => "/product/contenitore-snack-box-20-dry-privilege/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Snack-BOX 20’ DRY Privilege – Chiosco gastronomico top\nContainer 20 piedi primo viaggio\nIsolamento completo e finiture in legno\nPavimento in PVC + impianto elettrico\nAnta frontale sollevabile 1,5 m\nArea tecnica integrata\nVerniciatura personalizzata",
                "images" => [
                    "/assets/uploads/2025/11/2-31-300x300.jpeg",
                    "/assets/uploads/2025/11/1-31-300x300.jpeg",
                    "/assets/uploads/2025/11/3-30-300x300.jpeg",
                    "/assets/uploads/2025/11/4-30-300x300.jpeg",
                    "/assets/uploads/2025/11/5-28-300x300.jpeg",
                    "/assets/uploads/2025/11/6-22-300x300.jpeg",
                    "/assets/uploads/2025/11/7-18-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11425",
                "name" => "Contenitore sociale attrezzato di 21 m² – WC, cucina e spogliatoio",
                "price" => "5,499.00",
                "old_price" => "6,300.00",
                "sku" => "3276611425",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sociale-attrezzato-di-21-m%c2%b2-wc-cucina-e-spogliatoio/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/a1ef6f_9eb454b725b64988b2755ea1848e281e7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_19801d54760c45afa6a825655cdae0547Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_5db0e901ea894b16a4f0bf615e8d908e7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_c257c338b64a49d9937a7f556d36a0d37Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_a08be2647f9e43928ab6677832a2ad797Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_eab966588cc94f6ba3284603e92136df7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_b43d241fc3724506b2a81ce4d9fe6dd27Emv2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11426",
                "name" => "Contenitore sociale di 21 m² –, WC e spogliatoio",
                "price" => "5,699.00",
                "old_price" => "6,300.00",
                "sku" => "3276611426",
                "discount_percentage" => null,
                "link" => "/product/contenitore-sociale-di-21-m%c2%b2-wc-e-spogliatoio/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/a1ef6f_99a415ff8dca46fea3b7986c34e034e77Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_ab8c1fc2b6ee4e53af93d5ecbc874d497Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_04f0106d8e7f45e69d079aec54f2c3bd7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_727bd2b58ff340b0b0661d1a151f968c7Emv2-300x300.jpg",
                    "/assets/uploads/2025/11/a1ef6f_a371772a534149c7a15e997402e790767Emv2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10489",
                "name" => "Contenitore Standard 20 piedi – Usato certificato CSC",
                "price" => "1,210.00",
                "old_price" => "1,823.25",
                "sku" => "3276610489",
                "discount_percentage" => null,
                "link" => "/product/contenitore-standard-20-piedi-usato-certificato-csc/",
                "categories" => ["contenitori-20-piedi"],
                "short_description" => "Il contenitore standard da 20 piedi usato è la soluzione ideale per trasporto intermodale e stoccaggio. Certificato CSC, offre massima resistenza e versatilità.\nStruttura solida e resistente\nPavimento in legno marino trattato\nCertificazioni ISO e CSC\nErmetico a vento e acqua (WWT)\nOmologato per uso internazionale",
                "images" => [
                    "/assets/uploads/2025/11/1-3-300x300.png",
                    "/assets/uploads/2025/11/2-3-300x300.png",
                    "/assets/uploads/2025/11/3-2-300x300.png",
                    "/assets/uploads/2025/11/4-2-300x300.png",
                    "/assets/uploads/2025/11/5-2-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10495",
                "name" => "Contenitore standard 40 piedi – Usato certificato CSC",
                "price" => "2,099.00",
                "old_price" => "3,045.90",
                "sku" => "3276610495",
                "discount_percentage" => null,
                "link" => "/product/contenitore-standard-40-piedi-usato-certificato-csc/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Contenitore marittimo standard 40 piedi usato, robusto e certificato per trasporto e stoccaggio.\nCertificato ISO & CSC\nCondizione Cargo Worthy\nTenuta stagna (Wind & Water Tight)\nPavimento in legno marinato\nVendita e noleggio disponibili",
                "images" => [
                    "/assets/uploads/2025/11/1-2-300x300.png",
                    "/assets/uploads/2025/11/2-2-300x300.png",
                    "/assets/uploads/2025/11/3-1-300x300.png",
                    "/assets/uploads/2025/11/4-1-300x300.png",
                    "/assets/uploads/2025/11/5-1-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10474",
                "name" => "Contenitore Super Frigorifero Doppia Zona 20 Piedi",
                "price" => "3,799.00",
                "old_price" => "4,505.50",
                "sku" => "3276610474",
                "discount_percentage" => null,
                "link" => "/product/contenitore-super-frigorifero-doppia-zona-20-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Massima versatilità per il tuo business con il contenitore super frigorifero doppia zona da 20 piedi. Grazie ai suoi due compartimenti indipendenti, offre temperature differenziate fino a -60°C e +5°C, perfette per la logistica di prodotti surgelati e freschi.\nDoppia zona indipendente: -60°C e +5°C\nIdeale per alimenti, farmaci e surgelati\nIsolamento ad alte prestazioni\nRefrigerazione precisa e sicura\nProgettato per uso intensivo professionale",
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
                "description" => ""
            ],
            [
                "id" => "10696",
                "name" => "Contenitore Ufficio 20 Piedi con Vetrata Laterale",
                "price" => "2,312.31",
                "old_price" => "3,303.30",
                "sku" => "3276610696",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-20-piedi-con-vetrata-laterale/",
                "categories" => ["ufficio"],
                "short_description" => "Contenitore Ufficio 20 piedi con vetrata di 4,5 m.\nStruttura robusta e modulare\nImpianto elettrico completo\nClimatizzazione inclusa\nInterni luminosi e pronti all'uso\nFacile trasporto e installazione",
                "images" => [
                    "/assets/uploads/2025/11/1-40-300x300.jpeg",
                    "/assets/uploads/2025/11/2-40-300x300.jpeg",
                    "/assets/uploads/2025/11/3-38-300x300.jpeg",
                    "/assets/uploads/2025/11/4-38-300x300.jpeg",
                    "/assets/uploads/2025/11/5-34-300x300.jpeg",
                    "/assets/uploads/2025/11/6-28-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10627",
                "name" => "Contenitore Ufficio 20’ Completamente Attrezzato",
                "price" => "2,962.96",
                "old_price" => "4,232.80",
                "sku" => "3276610627",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-20-completamente-attrezzato/",
                "categories" => ["ufficio"],
                "short_description" => "Contenitore ufficio 20’ pronto all'uso, comodo e robusto.\nIsolamento termico/acustico in lana minerale\nFinestre con vetri isolanti e tapparelle\nImpianto elettrico completo + riscaldamento\nFinitura interna ed esterna di alta qualità\nInstallazione e trasporto rapidi",
                "images" => [
                    "/assets/uploads/2025/11/1-41-300x300.jpeg",
                    "/assets/uploads/2025/11/2-41-300x300.jpeg",
                    "/assets/uploads/2025/11/3-39-300x300.jpeg",
                    "/assets/uploads/2025/11/4-39-300x300.jpeg",
                    "/assets/uploads/2025/11/5-35-300x300.jpeg",
                    "/assets/uploads/2025/11/6-29-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10628",
                "name" => "Contenitore Ufficio 6×3 m",
                "price" => "1,921.92",
                "old_price" => "2,745.60",
                "sku" => "3276610628",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-6x3-m/",
                "categories" => ["ufficio"],
                "short_description" => "Ufficio modulare 6×3 m, confortevole e completo.\nStruttura robusta in acciaio\nIsolamento termico e acustico in lana minerale\nImpianto elettrico con prese 230V e luce per bagno\nPavimento in linoleum resistente\nAmpie finestre e riscaldamento incluso",
                "images" => [
                    "/assets/uploads/2025/11/1-4-1-300x300.webp",
                    "/assets/uploads/2025/11/2-5-1-300x300.webp",
                    "/assets/uploads/2025/11/2-23-300x300.webp",
                    "/assets/uploads/2025/11/3-8-300x300.webp",
                    "/assets/uploads/2025/11/3-22-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10629",
                "name" => "Contenitore Ufficio 6×3 m Modello H1-630",
                "price" => "2,222.22",
                "old_price" => "3,174.60",
                "sku" => "3276610629",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-6x3-m-modello-h1-630/",
                "categories" => ["ufficio"],
                "short_description" => "Contenitore Ufficio H1-630 da 18 m², robusto e confortevole.\nStruttura in acciaio zincato\nRivestimento interno in legno\nPorta d'accesso 0,75 × 2 m\nTetto a doppia falda\nDisponibile a Santiago – El Monte",
                "images" => [
                    "/assets/uploads/2025/11/1-20-300x300.webp",
                    "/assets/uploads/2025/11/2-23-1-300x300.webp",
                    "/assets/uploads/2025/11/3-22-1-300x300.webp",
                    "/assets/uploads/2025/11/4-19-300x300.webp",
                    "/assets/uploads/2025/11/5-16-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11159",
                "name" => "Contenitore Ufficio da Cantiere 20′ – Usura Normale",
                "price" => "1,260.00",
                "old_price" => null,
                "sku" => "3276611159",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-da-cantiere-20%e2%80%b2-usura-normale/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore Ufficio da Cantiere 20′ è una soluzione economica e resistente per creare spazi di lavoro temporanei. Dotato di finestre, riscaldamento e impianto elettrico, è pronto all'uso.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-0-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-1-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Ufficio-da-Cantiere-20′-–-Usura-Normale-2-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11160",
                "name" => "Contenitore Ufficio Mobile 20′ – Usura Normale",
                "price" => "1,500.00",
                "old_price" => null,
                "sku" => "3276611160",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-mobile-20%e2%80%b2-usura-normale/",
                "categories" => ["container-modulari"],
                "short_description" => "Il Contenitore Ufficio Mobile 20′ è una soluzione pratica ed economica per spazi di lavoro temporanei. Isolato, elettrificato e pronto all'uso, è perfetto per cantieri e progetti temporanei.",
                "images" => [
                    "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-0-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-300x300.png",
                    "/assets/uploads/2025/11/Contenitore-Ufficio-Mobile-20′-–-Usura-Normale-1-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10625",
                "name" => "Contenitore Ufficio Standard 6,00 × 2,43 m",
                "price" => "2,482.48",
                "old_price" => "3,546.40",
                "sku" => "3276610625",
                "discount_percentage" => null,
                "link" => "/product/contenitore-ufficio-standard-600-x-243-m/",
                "categories" => ["ufficio"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/2-67-300x292.jpeg",
                    "/assets/uploads/2025/11/1-68-300x292.jpeg",
                    "/assets/uploads/2025/11/3-63-300x292.jpeg",
                    "/assets/uploads/2025/11/4-63-300x292.jpeg",
                    "/assets/uploads/2025/11/5-59-300x290.jpeg",
                    "/assets/uploads/2025/11/6-49-300x295.jpeg",
                    "/assets/uploads/2025/11/7-38-300x292.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11240",
                "name" => "CONTENITORI REFRIGERATI DA 20 PIEDI",
                "price" => "3,499.00",
                "old_price" => "4,100.00",
                "sku" => "3276611240",
                "discount_percentage" => null,
                "link" => "/product/contenitori-refrigerati-da-20-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Unità container refrigerate da 20 piedi che incorporano un sistema di refrigerazione integrato che consente il trasporto o lo stoccaggio sicuro di prodotti deperibili o di prodotti che devono essere mantenuti a una temperatura specifica. Queste unità sono ideali per lo stoccaggio e il trasporto di merci a temperature calde e fredde. Queste unità utilizzano un semplice ingresso di alimentazione plug and play, che consente di alimentare le unità in modo rapido ed efficiente o possono essere alimentate da un generatore diesel. Le unità container refrigerate sono personalizzabili in termini di lunghezza, potenza e design, e possono essere dotate di diverse tipologie di accessori per soddisfare le esigenze del cliente. Le nostre unità possono anche essere dotate di sistemi di localizzazione GPS e funzionalità satellitare di temperatura remota, che consentono di monitorare e regolare la temperatura del contenitore da remoto.",
                "images" => [
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-2-600x450-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-7-768x576-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-5-600x450-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-4-600x450-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-3-600x450-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-1-300x300.jpg",
                    "/assets/uploads/2025/11/20FT-REFRIGERATED-CONTAINER-6-600x450-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11231",
                "name" => "FRIGORIFERI PORTATILI 10 PIEDI NUOVI",
                "price" => "1,550.00",
                "old_price" => "2,000.00",
                "sku" => "3276611231",
                "discount_percentage" => null,
                "link" => "/product/frigoriferi-portatili-10-piedi-nuovi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Le caratteristiche delle nostre celle frigorifere mobili le rendono particolarmente utili quando si lavora con carrelli del supermercato, transpallet manuali o carrelli elevatori elettrici poiché hanno un pavimento piatto per poter rotolare facilmente e disponiamo di rampe leggere che reggono fino a 750Kg e di rampe più robuste che sostenere fino a 4500Kg. Inoltre, l'impianto di illuminazione e l'apertura interna della porta permettono di movimentare la merce al suo interno in tutta sicurezza.\nCon le celle frigorifere portatili da 3 m/10′ puoi controllare la temperatura e l'umidità. Le nostre celle frigorifere portatili coprono un intervallo di temperatura programmabile da +30ºC a -40ºC con una temperatura esterna di +38ºC. C'è anche la possibilità di verificare che la catena del freddo non sia stata interrotta durante lo stoccaggio della merce tramite meccanismi che permettono di memorizzare i valori della temperatura ogni 10 minuti in modo da avere la tranquillità che la merce sia in perfette condizioni.\nLe celle frigorifere mobili sono contenitori marittimi refrigerati con modifiche per facilitarne l'utilizzo come magazzino refrigerato, come ad esempio:\nApertura delle porte tipo cella frigorifera.\nApertura interna.\nIlluminazione interna.\nAllarme uomo bloccato.\nTenda a stecche.\nPavimento piatto per facilitare l'utilizzo di transpallet o carrelli elevatori.\nRampa opzionale.\nSe sei interessato al noleggio o all'acquisto di una delle nostre celle frigorifere portatili, visita la sezione offerte dove troverai le offerte più interessanti oppure contattaci. I nostri rappresentanti di vendita risponderanno a qualsiasi domanda o problema e ti faranno un'offerta di noleggio o vendita su misura per le tue esigenze.",
                "images" => [
                    "/assets/uploads/2025/11/camara-frigorifica-portatil-10-maquinaria-1-300x300.jpg",
                    "/assets/uploads/2025/11/oferta-156_1-1-300x300.jpg",
                    "/assets/uploads/2025/11/cont-pallet-wide-5-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11622",
                "name" => "Mini casa mobile con due camere da letto e cucina – Modello Deluxe Stahlworks",
                "price" => "8,995.00",
                "old_price" => "10,800.00",
                "sku" => "3276611622",
                "discount_percentage" => null,
                "link" => "/product/mini-casa-mobile-con-due-camere-da-letto-e-cucina-modello-deluxe-stahlworks/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11830",
                "name" => "Mini container da 12 piedi",
                "price" => "1,025.00",
                "old_price" => "1,100.00",
                "sku" => "3276611830",
                "discount_percentage" => null,
                "link" => "/product/mini-container-da-12-piedi/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059438-300x300.jpg",
                    "/assets/uploads/2025/11/1000059437-300x300.jpg",
                    "/assets/uploads/2025/11/1000059440-300x300.jpg",
                    "/assets/uploads/2025/11/1000059436-300x300.jpg",
                    "/assets/uploads/2025/11/1000059439-300x300.jpg",
                    "/assets/uploads/2025/11/1000059435-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11566",
                "name" => "Moderna mini casa di 36 m² – 2 camere da letto e cucina attrezzata",
                "price" => "9,100.00",
                "old_price" => "10,800.00",
                "sku" => "3276611566",
                "discount_percentage" => null,
                "link" => "/product/moderna-mini-casa-di-36-m%c2%b2-2-camere-da-letto-e-cucina-attrezzata/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11169",
                "name" => "Modulo Abitabile T0 in Container – Design Moderno e Isolamento Ottimale",
                "price" => "5,500.00",
                "old_price" => "6,850.00",
                "sku" => "3276611169",
                "discount_percentage" => null,
                "link" => "/product/modulo-abitabile-t0-in-container-design-moderno-e-isolamento-ottimale/",
                "categories" => ["container-modulari"],
                "short_description" => "Modulo Abitabile T0: compatto, moderno e isolato. Perfetto per spazi abitativi, professionali o ricreativi. Personalizzabile e pronto all'uso.",
                "images" => [
                    "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-3-300x300.png",
                    "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-2-300x300.png",
                    "/assets/uploads/2025/11/Modulo-Abitabile-T0-in-Container-Design-Moderno-e-Isolamento-Ottimale-0-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11621",
                "name" => "Modulo commerciale 18m² con servizi igienici",
                "price" => "5,100.00",
                "old_price" => null,
                "sku" => "3276611621",
                "discount_percentage" => null,
                "link" => "/product/modulo-commerciale-18m%c2%b2-con-servizi-igienici/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11162",
                "name" => "Modulo Container Abitabile 17 m² – Soluzione Versatile per Ogni Esigenza",
                "price" => "5,100.00",
                "old_price" => null,
                "sku" => "3276611162",
                "discount_percentage" => null,
                "link" => "/product/modulo-container-abitabile-17-m%c2%b2-soluzione-versatile-per-ogni-esigenza/",
                "categories" => ["container-modulari"],
                "short_description" => "Modulo Container Abitabile 17 m²: compatto, economico e versatile. Include bagno completo, cucina attrezzata e isolamento termico. Perfetto per ogni esigenza abitativa o commerciale.",
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
                "description" => ""
            ],
            [
                "id" => "11175",
                "name" => "Modulo Container Abitabile di 17 mq",
                "price" => "5,100.00",
                "old_price" => null,
                "sku" => "3276611175",
                "discount_percentage" => null,
                "link" => "/product/modulo-container-abitabile-di-17-mq/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano.\nSpecifiche:\nDimensioni (LxLxA): 6 mx 2,9 mx 2,7 m\n– Tutto l'anno: realizzati con pannelli sandwich in polistirolo, perfettamente isolanti sia d'estate che d'inverno,\n– Installazione completa di ventilazione, elettricità, acqua e fognature.\n– Dotato di bagno e angolo cottura, basta allacciare acqua, fogna ed elettricità.\n– Durevole: realizzati con materiali di alta qualità, i pannelli sandwich non richiedono manutenzione.\n– Mobile – la casa viene consegnata completamente attrezzata e può essere spostata in qualsiasi momento.\nIsolamento:\n– Pannello sandwich standard di spessore 100 mm con anima in polistirolo con coefficiente di trasmittanza termica pari a 0,38 W/m2K.\nCostruzione:\n– Pannelli sandwich (lamiera zincata verniciata a polvere 0,5 mm – polistirolo 100 mm – lamiera zincata verniciata a polvere 0,5 mm)\n– Angoli (lamiera di acciaio da 0,5 mm)\nBagno :\n– WC compatti,\n– Lavello con mobile 45,\n– Cabina doccia 90×90\n– Scaldabagno elettrico da 50 litri\nCucina :\n– Mobile con lavello 1 vasca e rubinetteria da 80 cm\n– Pensile 80\n– Mobile freestanding 40 cm\n– Pensile 40 cm",
                "images" => [
                    "/assets/uploads/2025/11/37e3c5_55e31a003e0f4990bb439420dbf6973fmv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_db63513a3f7d4f979c7a522908e8e79fmv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_ca6be839dc9149788c78ab2d903c4a38mv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_45e63d6ab6bf4419aa5c411de6948d95mv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_8c951b64a5e446c0bd8327938bfa09abmv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_9bf2532851624a8180e632292417dd39mv2-300x300.jpg",
                    "/assets/uploads/2025/11/37e3c5_22b03e84de0840d2968ebed73d21a5e0mv2-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11229",
                "name" => "Modulo Container Abitabile di 21 m2",
                "price" => "4,299.00",
                "old_price" => "6,100.00",
                "sku" => "3276611229",
                "discount_percentage" => null,
                "link" => "/product/modulo-container-abitabile-di-21-m2/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano.\nSpecifiche:\nDimensioni (LxPxA): 7 mx 3 mx 2,5 m\n• Telaio in acciaio 100x50x3\n• Pannello sandwich PIR con anima da 100 mm (poliuretano)\n• Bagno con vasca\n• Tapparelle + zanzariere\n• Rivestimento di facciata color noce",
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
                "description" => ""
            ],
            [
                "id" => "11168",
                "name" => "Modulo Container Aménagé – Modernità, Flessibilità",
                "price" => "1,650.00",
                "old_price" => null,
                "sku" => "3276611168",
                "discount_percentage" => null,
                "link" => "/product/modulo-container-amenage-modernita-flessibilita/",
                "categories" => ["container-modulari"],
                "short_description" => "Modulo Container Aménagé: una soluzione versatile e sostenibile, ideale per uffici, spazi abitativi o professionali. Moderno, climatizzato e personalizzabile.",
                "images" => [
                    "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-300x300.png",
                    "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-2-300x300.png",
                    "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-1-300x300.png",
                    "/assets/uploads/2025/11/Modulo-Container-Amenage-Modernita-Flessibilita-0-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "11161",
                "name" => "Modulo Container Prefabbricato 18 m² – Spazio Extra Pronto all'Uso",
                "price" => "4,160.00",
                "old_price" => null,
                "sku" => "3276611161",
                "discount_percentage" => null,
                "link" => "/product/modulo-container-prefabbricato-18-m%c2%b2-spazio-extra-pronto-alluso/",
                "categories" => ["container-modulari"],
                "short_description" => "Module Conteneur Préfabriqué 18 m² : entièrement isolé, équipé de fenêtres, portes, système électrique et éclairage LED. Solution idéale pour les bureaux, les maisons ou les espaces commerciaux.",
                "images" => [
                    "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-300x300.jpg",
                    "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-1-300x300.jpg",
                    "/assets/uploads/2025/11/Modulo-Container-Prefabbricato-18-m²-Spazio-Extra-Pronto-allUso-0-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10623",
                "name" => "Modulo Prefabbricato “DALÍ” 8×3 m",
                "price" => "2,642.64",
                "old_price" => "3,775.20",
                "sku" => "3276610623",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-dali-8x3-m/",
                "categories" => ["ufficio"],
                "short_description" => "Modulo moderno da 24 m² con bagno e ampie vetrate.\nStruttura in acciaio nero opaco\nInterni in legno e cartongesso liscio\nBagno attrezzato + impianto elettrico completo\nIsolamento in poliuretano e lana di vetro\nAmpie finestre in alluminio termoisolato",
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
                "description" => ""
            ],
            [
                "id" => "11228",
                "name" => "Modulo prefabbricato 10 mq",
                "price" => "1,910.00",
                "old_price" => "2,000.00",
                "sku" => "3276611228",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-10-mq/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni\nDimensioni esterne (LxPxA): 4 m x 2,4 m x 2,6 m\nDimensioni interne (LxLxH): 3,8 mx 2,2 mx 2,35 m\nTetto: Copertura coibentata realizzata con pannelli sandwich composti da lamiere di acciaio zincato laccato RAL 9002 e anima isolante in poliuretano da 40 mm.\nRivestimento: Pareti coibentate realizzate con pannelli sandwich composti da lamiere di acciaio zincato laccate RAL 9002 e nucleo isolante in poliuretano da 50 mm.\nPorta esterna: falegnameria in PVC (845 x 1960 mm. Serratura a 4 punti. 3 chiavi fornite).\nFinestre: 2 finestre standard, doppi vetri – infissi in PVC, 970×1200 mm, 1 anta apribile.\nPavimento: telaio in acciaio zincato (rinforzo 200 kg/m²) e pavimento costituito da un pannello in fibrocemento da 16 mm non infiammabile e imputrescibile, non isolato. Rivestimento per pavimenti in PVC per uso pubblico, imitazione parquet.\nAlimentazione elettrica:\n– 1 quadro 220V/50Hz con magnetotermici\n– Cablaggio a superficie\n– 2 prese elettriche 16A+T\n– 1 rilevatore di fumo\nIlluminazione:\n– 2 pannelli LED interni\n– 1 striscia LED esterna.\n– 1 doppio interruttore",
                "images" => [
                    "/assets/uploads/2025/11/Module-4m-ADC-Module-2021-min-300x300.png",
                    "/assets/uploads/2025/11/Module-4m-ADC-Module-2021-min-1-300x300.png",
                    "/assets/uploads/2025/11/Baraque-de-chantier-interieur-10m²-ADC-Module-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11176",
                "name" => "Modulo prefabbricato 14 mq con zona sanitaria",
                "price" => "4,100.00",
                "old_price" => "4,500.00",
                "sku" => "3276611176",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-14-mq-con-zona-sanitaria/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci.\nSpecifiche:\nDimensioni\nDimensioni esterne (LxPxA): 5,95 x 2,4 x 2,5 m\nDimensioni interne zona sanitaria: 1,50 m x 2,20 m\nDimensioni interne zona reception: 4,30 m x 2,20 m\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nTetto: altezza 250 mm\nMovimentazione: 4 prese sul tetto per ganci di sollevamento\nPAVIMENTO\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nPorta: 1 porta esterna in alluminio dim.90 x 200 cm. 1 porta interna in alluminio dim.80 x 200 cm.\nFinestre: 2 finestre in PVC dim. 100 x 100 cm, doppi vetri, 1 anta\nELETTRICITÀ\nIlluminazione: 2 neon LED\nPrese: 2 prese di corrente\nTabella: 1 tabella comprensiva di interdifferenziale e interruttori automatici\nCambio: 1",
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
                "description" => ""
            ],
            [
                "id" => "11227",
                "name" => "Modulo prefabbricato da 12 m²",
                "price" => "2,320.00",
                "old_price" => "2,400.00",
                "sku" => "3276611227",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-da-12-m%c2%b2/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni: LxPxA: 4,94 x 2,50 x 2,70 metri\n– Una struttura di 4,94 x 2,50 m con un'altezza del soffitto di 2,26 m in acciaio zincato laccato bianco\n– Pannelli parete con isolamento in schiuma poliuretanica da 35 mm\n– Tetto in lamiera zincata\n– Isolamento in lana di vetro da 100 mm\n– Soffitto metallico in vassoio di acciaio bianco\n– Pavimento in truciolare CTBH da 22 mm\n– Rivestimento pavimento in PVC blu U2P2\nFalegnameria:\n– 1 porta esterna cieca da 0,90 m\n– Finestra scorrevole in PVC da 1,00 x 1,20 m in doppio vetro e tapparella\nAttrezzatura :\n– Quadro elettrico generale\n– Tubo LED 1x36W\n– Termoconvettore elettrico da 1500 W\n– Prese di corrente",
                "images" => [
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-3-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-3-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-2-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-4-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-5-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref1251-6-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11226",
                "name" => "Modulo prefabbricato da 15 mq",
                "price" => "3,599.00",
                "old_price" => "3,700.00",
                "sku" => "3276611226",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-da-15-mq/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 6 mx 2,5 mx 2,58 m\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nPavimento\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nPorta: 1 anta in alluminio satinato dim.90 x 200 cm\nFinestre: 2 finestre in alluminio didim200 x 100 cm, doppi vetri, 1 anta\nELETTRICITÀ\nIlluminazione: 2 neon LED\nPrese: 2 prese di corrente\nTabella: 1 tabella comprensiva di interdifferenziale e interruttori automatici\nCambio: 1",
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
                "description" => ""
            ],
            [
                "id" => "11180",
                "name" => "Modulo prefabbricato da 18 m²",
                "price" => "4,500.00",
                "old_price" => null,
                "sku" => "3276611180",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-da-18-m%c2%b2/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni: LxPxA: 4,70 x 3,84 x 2,64 metri\n– Pannelli parete con isolamento in lana di roccia da 40 mm\n– 2 telai da 3,84 x 2,35 m in acciaio zincato grigio chiaro su telaio e con altezza soffitto di 2,30 m\n– Tetto in lamiera zincata, isolamento in lana di vetro da 100 mm\n– Rivestimento del soffitto in vassoio di acciaio bianco\n– Nuovo pavimento in truciolare CTBH da 22 mm\n– Nuovo rivestimento del pavimento in plastica\nFalegnameria:\n– 1 anta singola in vetro da 0,90 mt\n– 3 vetrate\n– 2 timpani e 1 lato lungo\n– 2 telai alti con sbarre e OB da 0,50 x 0,40 m con doppi vetri\nAttrezzatura :\n– Quadro elettrico generale monofase stagno\n– 3 fluorescenti doppie impermeabili\n– Faretto LED\n– 3 prese di corrente\n– Termoconvettori elettrici: 2 da 1000 W",
                "images" => [
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-6-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-5-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-4-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-3-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-2-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_bulle_vente_18m²-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11179",
                "name" => "Modulo Prefabbricato da 24 mq con Sanitari",
                "price" => "6,960.00",
                "old_price" => "8,500.00",
                "sku" => "3276611179",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-da-24-mq-con-sanitari/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxLxA): 8,20 x 2,92 x 2,92 m\n– 1 struttura da 8,20 x 2,92 m con altezza soffitto di 2,48 m in acciaio zincato laccato bianco\n– Pannelli parete con isolamento in schiuma poliuretanica da 40 mm\n– Tetto in lamiera zincata\n– Isolamento in lana di vetro da 100 mm\n– Rivestimento del soffitto in vassoio di acciaio bianco\n– Pavimento in resina\nFalegnameria:\n– Una porta esterna solida di 0,90 m\n– 2 telai alti da 0,40 m x 0,50 m\n– 2 porte interne isoplane da 0,80 mt\nAttrezzatura :\n– Quadro elettrico trifase\n– Doppia fluorescente con griglia e 2 fluorescenti singole stagne\n– Termoconvettori elettrici: 2 da 1000 W\n– Serbatoio acqua calda da 300 litri\n– 1 abbeveratoio con 4 punti acqua e 1 abbeveratoio con 2 punti acqua\n– Toilette inglese: 3\n– Orinatoio: 3\n– Piatto doccia: 3",
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
                "description" => ""
            ],
            [
                "id" => "11178",
                "name" => "Modulo prefabbricato da 50 mq",
                "price" => "7,900.00",
                "old_price" => "9,400.00",
                "sku" => "3276611178",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-da-50-mq/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 8,24 mx 6,00 mx 3,00 m\n– 2 telai da 8,24 m x 3 m x 3 m in acciaio zincato laccato bianco e un'altezza del soffitto di 2,51 m\n– Pannelli parete con isolamento in schiuma poliuretanica da 80 mm\n– Tetto in lamiera zincata\n– Rivestimento soffitto in vassoio di acciaio microforato\n– Isolamento in lana di vetro da 100 mm\n– Nuovo pavimento in truciolare CTBH da 22 mm\n– Nuovo rivestimento del pavimento in plastica\nFalegnameria:\n– 1 porta esterna in vetro da 0,90 m\n– 3 finestre di 2,00 x 1,20 m in doppi vetri e tapparella\n– 2 porte interne isoplane da 0,83 m\nAttrezzatura :\n– Quadro elettrico generale monofase\n– 8 fluorescenti a doppia griglia\n– Prese di corrente\n– Termoconvettori elettrici: 3 da 2000 W e 1 da 500 W",
                "images" => [
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-4-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-2-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_102-3-300x300.jpg",
                    "/assets/uploads/2025/11/batiment_modulaire_occasion_ref100_1025-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11724",
                "name" => "Modulo prefabbricato di 7 m2 senza servizi igienici (possibilità di avere più dimensioni)",
                "price" => "1,210.00",
                "old_price" => "1,400.00",
                "sku" => "3276611724",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-di-7-m2-senza-servizi-igienici-possibilita-di-avere-piu-dimensioni/",
                "categories" => ["container-modulari"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000003571-300x300.jpg",
                    "/assets/uploads/2025/11/1000003572-300x300.jpg",
                    "/assets/uploads/2025/11/1000003569-300x300.jpg",
                    "/assets/uploads/2025/11/1000003570-300x300.jpg",
                    "/assets/uploads/2025/11/1000003573-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10626",
                "name" => "Modulo Prefabbricato Nero – Elegante, Isolato e Multifunzione",
                "price" => "2,797.79",
                "old_price" => "3,996.85",
                "sku" => "3276610626",
                "discount_percentage" => null,
                "link" => "/product/modulo-prefabbricato-nero-elegante-isolato-e-multifunzione/",
                "categories" => ["ufficio"],
                "short_description" => "Modulo prefabbricato nero moderno e funzionale, pronto all'uso.\nStruttura in acciaio trattato anticorrosione\nPannelli sandwich con isolamento termico e acustico\nDesign elegante e sobrio\nRapido da installare, facile da trasportare\nCompletamente personalizzabile: impianti, arredi, servizi",
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
                "description" => ""
            ],
            [
                "id" => "10707",
                "name" => "Modulo Sanitario 6×2,44 m con 5 WC",
                "price" => "2,552.55",
                "old_price" => "3,646.50",
                "sku" => "3276610707",
                "discount_percentage" => null,
                "link" => "/product/modulo-sanitario-6x244-m-con-5-wc/",
                "categories" => ["sanitario"],
                "short_description" => "Modulo Sanitario 6×2,44 m – 5 WC Indipendenti e Lavabi Integrati\n5 cabine WC con serratura\n2 lavabi con acqua calda\nPavimento antiscivolo in PVC\nIsolamento in lana minerale\nIlluminazione LED e riscaldamento\nFinestrature a lucernario + barra gru",
                "images" => [
                    "/assets/uploads/2025/11/1-6-1-300x300.webp",
                    "/assets/uploads/2025/11/2-8-1-300x300.webp",
                    "/assets/uploads/2025/11/3-7-1-300x300.webp",
                    "/assets/uploads/2025/11/4-7-1-300x300.webp",
                    "/assets/uploads/2025/11/5-6-1-300x300.webp",
                    "/assets/uploads/2025/11/6-4-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10865",
                "name" => "Modulo Sanitario Compatto S1",
                "price" => "769.77",
                "old_price" => "1,099.67",
                "sku" => "3276610865",
                "discount_percentage" => null,
                "link" => "/product/modulo-sanitario-compatto-s1/",
                "categories" => ["sanitario"],
                "short_description" => "Il Modulo Sanitario S1 è la risposta ideale per chi cerca una soluzione igienica veloce, robusta e compatta. Progettato per un uso professionale intensivo, combina praticità, comfort e facilità di trasporto.\nStruttura in acciaio zincato e pannelli isolati\nWC in ceramica + lavabo con specchio\nElettrificato, pronto all'uso in 3 settimane",
                "images" => [
                    "/assets/uploads/2025/11/2-16-1-300x300.webp",
                    "/assets/uploads/2025/11/1-14-1-300x300.webp",
                    "/assets/uploads/2025/11/3-15-1-300x300.webp",
                    "/assets/uploads/2025/11/5-12-1-300x300.webp",
                    "/assets/uploads/2025/11/6-9-1-300x300.webp",
                    "/assets/uploads/2025/11/BA4-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10706",
                "name" => "Modulo Sanitario con Doccia e WC Separati",
                "price" => "1,838.84",
                "old_price" => "2,626.91",
                "sku" => "3276610706",
                "discount_percentage" => null,
                "link" => "/product/modulo-sanitario-con-doccia-e-wc-separati/",
                "categories" => ["sanitario"],
                "short_description" => "Modulo Sanitario con Doccia e WC Separati – Igiene e comfort ovunque\nStruttura in acciaio robusta\nPannelli isolanti PIR da 100 mm\nBagno completo + WC separato\nScarico elettrico incluso\nIlluminazione esterna\nRivestimento moderno in color noce",
                "images" => [
                    "/assets/uploads/2025/11/2-5-1-1-300x300.webp",
                    "/assets/uploads/2025/11/1-11-300x300.jpg",
                    "/assets/uploads/2025/11/3-5-1-300x300.webp",
                    "/assets/uploads/2025/11/4-4-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10797",
                "name" => "Modulo Sanitario PMR con WC e Doccia",
                "price" => "1,721.72",
                "old_price" => "2,459.60",
                "sku" => "3276610797",
                "discount_percentage" => null,
                "link" => "/product/modulo-sanitario-pmr-con-wc-e-doccia/",
                "categories" => ["sanitario"],
                "short_description" => "Il modulo PMR WC + Doccia offre una soluzione sanitaria completa e accessibile, progettata per persone con mobilità ridotta. Struttura robusta, isolamento termico, comfort e conformità normativa lo rendono perfetto per ogni contesto.\nWC, lavabo e doccia adattati\nPavimento in PVC antiscivolo\nPronto per installazione e trasporto",
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
                "description" => ""
            ],
            [
                "id" => "11177",
                "name" => "Modulo Sanitario WC Doppio Uomo – Donna",
                "price" => "880.00",
                "old_price" => "1,300.00",
                "sku" => "3276611177",
                "discount_percentage" => null,
                "link" => "/product/modulo-sanitario-wc-doppio-uomo-donna/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\n&nbsp;\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi effettuare un ordine direttamente se queste caratteristiche ti soddisfano. Per tutte le vostre esigenze di personalizzazione, contattateci\nSpecifiche:\nDimensioni (LxPxA): 2,30 x 1,35 x 2,5 m\nProfondità: 1,20 m\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nTetto: altezza 240 mm\nMovimentazione: 4 prese sul tetto per ganci di sollevamento\nPareti e tetto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 50 mm\nSpessore soffitto: 40 mm\nCopertura a soffitto: Lamiera di acciaio zincato con onde greche\nPavimento\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nFALEGNAMERIA\nAnta: 2 ante in alluminio dim.85×190 cm\nEstrattore d'aria: 1 in ogni cabina\nInstallazione sanitaria\n1 Lavandino in ceramica dim. 35 cm con rubinetto acqua fredda e specchio in ogni cabina\n1 WC all'inglese dotato di serbatoio interamente in ceramica in ogni cabina\nArrivo e uscita dell'acqua in attesa sulla parete di fondo\nELETTRICITÀ a 220 V\nIlluminazione: 1 plafoniera LED in ogni cabina\nTavolo: 1 tavolo comprensivo di interdifferenziale e interruttore automatico\nCambio: 1 in ogni cabina\nUna scatola di connessione esterna",
                "images" => [
                    "/assets/uploads/2025/11/4-1-1-300x300.jpg",
                    "/assets/uploads/2025/11/1-1-2-300x300.jpg",
                    "/assets/uploads/2025/11/1-1-1-768x801-1-300x300.jpg",
                    "/assets/uploads/2025/11/2-1-701x1024-1-300x300.jpg",
                    "/assets/uploads/2025/11/3-1-741x1024-1-300x300.jpg",
                    "/assets/uploads/2025/11/5-1-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11304",
                "name" => "MODULO WC SANITARIO SEMPLICE – COLORE GRIGIO",
                "price" => "550.00",
                "old_price" => "680.00",
                "sku" => "3276611304",
                "discount_percentage" => null,
                "link" => "/product/modulo-wc-sanitario-semplice-colore-grigio/",
                "categories" => ["container-modulari"],
                "short_description" => "Foto contrattuali (Modulo venduto in perfette condizioni come presentato nelle foto)\nLe caratteristiche elencate di seguito sono le caratteristiche standard di questo modulo. Puoi ordinare direttamente se queste funzionalità ti soddisfano.\nBilancio\nDimensioni: 1,20 x 1,20 x 2,40 mt\nProfondità: 120 cm\nTelaio\nDescrizione: Acciaio zincato e laccato\nSpessore: 2 mm\nSoffitto: altezza 240 mm\nFunzionamento: 4 prese nel tetto per ganci di sollevamento\nPareti e soffitto\nMateriale: pannelli sandwich\nIsolamento: Schiuma di poliuretano rigido\nSpessore della parete: 40 mm\nSpessore del tetto: 40 mm\nCopertura tetto: Lamiera di acciaio zincato con greche\nTerra\nStruttura: Pannelli in fibrocemento\nSpessore: 16 mm\nRivestimento: PVC\nCarpenteria\nAnta: 1 anta in alluminio da 85 x 190 cm.\nVentola di scarico: 1\nInstallazione sanitaria\n1 lavabo in ceramica da 35 cm con rubinetto acqua fredda e specchio.\n1 WC in stile inglese dotato di serbatoio interamente in ceramica\nArrivo e partenza dell'acqua in attesa sulla parete di fondo.\nELETTRICITÀ a 220 V\nIlluminazione: 1 plafoniera LED\nTavola: 1 tavola comprensiva di interdifferenziale e interruttore.\nModifica: 1\nUna scatola di giunzione esterna",
                "images" => [
                    "/assets/uploads/2025/11/5-scaled-2-300x300.jpg",
                    "/assets/uploads/2025/11/3-2-300x300.jpg",
                    "/assets/uploads/2025/11/2-scaled-2-300x300.jpg",
                    "/assets/uploads/2025/11/4-3-300x300.jpg"
                ],
                "description" => ""
            ],


            [
                "id" => "11362",
                "name" => "MONOBLOCCO 6×2,5 USO UFFICIO",
                "price" => "1,580.00",
                "old_price" => "1,800.00",
                "sku" => "3276611362",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-6x25-uso-ufficio/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 593 x 243 cm.\nDimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 262 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare\nrivestito con lamiera grecata, rivestito con legno IDRO V100 sp.18 mm, rivestito con PVC Standard.\nSerramenti in alluminio RAL 9010.\nVetro 4 mm trasparente.\nN.1 Porta mezzo vetro, completa di barre antintrusione,\ncon maniglia e serratura standard,\ncon dimensioni 100 x 210h esterna cm.\nN.1 Finestra scorrevole, completa di barre antintrusione,\ncon dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.1 Interruttore.\nN.1 Presa\nN.2 Plafoniere 45W-LED.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE.\nN.1 Scatola esterna per allaccio impianto elettrico.",
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
                "description" => ""
            ],
            [
                "id" => "11309",
                "name" => "MONOBLOCCO USO BAGNO",
                "price" => "9,800.00",
                "old_price" => "11,000.00",
                "sku" => "3276611309",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-bagno/",
                "categories" => ["container-modulari"],
                "short_description" => "A corredo della progettazione, per pratica edilizia, compreso di:\nProgettazione strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nStesura relazione di calcolo secondo normativa vigente, compresa predisposizione documentazione per denuncia comunale.\nNr.1 Modulo con Dimensioni al basamento 1023 x 293 cm.\nNr.1 Modulo con Dimensioni al tetto 1030 x 300 cm.\nNr.1 Modulo con Dimensioni al tetto 1030 x 50 cm.\nH interna 270 cm H esterna 342 cm.\nPannello Parete e Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare\nrivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm Poliuretano,\nrivestito con legno CEMENTO sp.16 mm,\nrivestito con Pavimento Vinilico Modulare colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 1050 x 370 cm.\nSerramenti in Alluminio RAL 9010.\nVetro Camera 4/9/4mm Stampato.\nN.1 Porta cieca tutto pannello a due ante battenti, con maniglia e serratura standard, con dimensioni 200 x 210h est cm.\nN.4 Porte cieche tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210h est cm.\nN.2 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 100 x 210h est cm.\nN.5 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h est cm.\nN.11 Finestre con apertura a vasistas, con dimensioni 50 x 50h est cm, complete di zanzariera fissa.\nN.1 Finestra con apertura a vasistas, con dimensioni 100 x 50h est cm, complete di zanzariera fissa.\nImpianto elettrico competo di relazione, incassato, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale. N.1 Plafoniera 45W-LED. N.11 Plafoniere 19W-LED. N.7 Interruttori.\nN.7 Prese.\nN.1 Scatola per allacciamento esterno.\nImpianto Idraulico interno, con tubo MEPLA 20mm, incassato, compreso di:\nN.1 Bagno disabile completi di (Wc + Lavabo in ceramica) e relativi maniglioni.\nN.1 Lavabo in ceramica 90 cm + Struttura + N.2 Miscelatori.\nN.1 Specchio.\nN.5 Wc in ceramica + Sedile + Cassetta esterna.\nN.2 Orinatoi in ceramica. N.5 Portarotolo + Scopino.\nN.4 Lavabo in ceramica 60 cm + Colonna + Miscelatore.\nN.4 Specchio.\nN.1 Boiler elettrico 60 litri, acqua calda.\nRivestimento perimetrale esterno con sottostruttura rivestita con mattonelle di HPL (Finitura finto legno)",
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
                "description" => ""
            ],
            [
                "id" => "11313",
                "name" => "MONOBLOCCO USO BOX AUTO",
                "price" => "6,100.00",
                "old_price" => "7,200.00",
                "sku" => "3276611313",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-box-auto/",
                "categories" => ["container-modulari"],
                "short_description" => "Nr.2 Pz con Dimensioni al basamento 593 x 293 cm.\nNr.2 Pz con Dimensioni al tetto 600 x 300 cm.\nH interna 240 cm H esterna 277 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nSenza basamento.\nCompleto di Nr.10 Squadrette per fissaggio a vs basamento esistente.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 620 x 620 cm.\nN.2 Basculanti zincate, con apertura motorizzata, complete di maniglia e serratura standard e contrappesi di sicurezza.\nN.2 Finestre in alluminio RAL 9010, con vetro 4 mm trasparente, apertura scorrevole, con dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.2 Interruttori.\nN.2 Prese.\nN.4 Plafoniere 45W-LED.\nN.1 Scatola esterna per allaccio impianto elettrico.",
                "images" => [
                    "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.27.44-300x300.jpeg",
                    "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.28.20-300x300.jpeg",
                    "/assets/uploads/2025/11/WhatsApp-Image-2022-08-23-at-18.28.30-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11311",
                "name" => "MONOBLOCCO USO PORTINERIA",
                "price" => "5,099.00",
                "old_price" => "6,200.00",
                "sku" => "3276611311",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-portineria/",
                "categories" => ["container-modulari"],
                "short_description" => "A corredo della progettazione, per pratica edilizia, compreso di:\nProgettazione strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nStesura relazione di calcolo secondo normativa vigente, compresa predisposizione documentazione per denuncia comunale.\nProgettazione di impianto idrotermosanitario, per monoblocco ad uso PORTINERIA.\nRedazione Relazione Energetica per edificio di nuova costruzione:\ncon verifiche numeriche dei parametri minimi di legge\ncon analisi delle stratigrafie di progetto e verifica dei ponti termici (assenza condensazioni interstiziali);\ncon verifica del rispetto degli obblighi di integrazione delle fonti rinnovabili\nFornitura di assistenza tecnica, per la compilazione di documentazione tecnica, di progetto impianto elettrico, a servizio di monoblocco ad uso PORTINERIA PG8608 R03.\nL'incarico comprenderà planimetrie, schema quadro elettrico, dimensionamenti e piccola relazione tecnica.\nEscluso relazione energetica e APE.\nNr.1 Modulo con dimensioni al basamento 590 x 343 cm.\nNr.1 Modulo con Dimensioni al tetto 670 x 250 cm.\nNr.1 Modulo con Dimensioni al tetto 670 x 70 cm.\nH interna 270 cm H esterna 344 cm. Tot Mq 25\nPannello Parete E Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con Pavimento Vinilico Modulare colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 7022, completo di pluviali di scarico a terra.\nDimensioni 690 x 340 cm.\nSerramenti in Alluminio RAL 7022.\nVetro Camera 4/9/4 Trasparente.\nN.1 Porta mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100x210h est cm.\nN.1 Finestre con apertura scorrevole, completa di zanzariera scorrevole, con dimensioni 200 x 100h est cm.\nN.1 Finestra fissa, con dimensioni 180 x 100h esterna cm.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 100 x 210h esterna cm.\nN.1 Finestrino bagno con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 100 x 50h esterna cm.\nEscluso impianto elettrico\nEscluso impianto fotovoltaico e linea vita (da installare in loco a vostro carico).\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Bagno disabili (Wc + Lavabo in ceramica) completo di maniglioni.\nN.1 Boiler elettrico 15 litri, acqua calda.\nRivestimento facciate perimetrali con pellicola adesiva – finitura colore CORTEN.",
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
                "description" => ""
            ],
            [
                "id" => "11312",
                "name" => "MONOBLOCCO USO PORTINERIA",
                "price" => "3,090.00",
                "old_price" => "4,000.00",
                "sku" => "3276611312",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-portineria-2/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 393 x 243 cm.\nDimensioni al tetto 520 x 275 cm.\nH interna 270 cm H esterna 332 cm.\nPannello Parete sp.80 mm – Poliuretano\n1 Lato lamiera esterna Micro Nervata BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nPannello Tetto sp.80+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.80 mm Poliuretano, rivestito con legno IDRO V100 sp.18mm, rivestito con PVC Antiscivolo.\nSecondo tetto, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.80 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 7016, completo di pluviali di scarico a terra.\nSerramenti in Alluminio Freddo RAL 7016.\nVetro 4/9/4 stampato.\nN.1 Porta di Ingresso a un'anta tutto vetro, con maniglione antipanico a 1 punto, con dimensioni 100x210h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, con dimensioni 200 x 100h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, con dimensioni 100 x 100h est cm.\nN.1 Finestre con apertura scorrevole, complete di zanzariera scorrevole, completa di serramento passacarte inferiore, con dimensioni 100 x 100h est cm.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h esterna cm.\nN.1 Finestrino bagno, con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 50 x 50h esterna cm.\nImpianto elettrico norma CEE 220V, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ. N.1 Differenziale Prese. N.1 Differenziale Luci.\nN.2 Plafoniere 19W – LED. N.2 Interruttori.\nN.5 Prese.\nN.1 Presa RJ45.\nN.1 Condizionatore Mono SPLIT Inverter BTU 9000-HISENSE.\nN.1 Interfono.\nN.1 Scatola per allacciamento esterno.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.1 Wc in ceramica + sedile + cassetta esterna.\nN.1 Portarotolo + Scopino.\nN.1 Lavabo in ceramica 60 cm + colonna + mix.\nN.1 Specchio + Mensola\nN.1 Boiler Elettrico 15 Litri Acqua Calda.\nRivestimento facciate perimetrali con pellicola adesiva – finitura colore CORTEN.",
                "images" => [
                    "/assets/uploads/2025/11/IMG_9467-300x300.jpg",
                    "/assets/uploads/2025/11/IMG_9465-300x300.jpg",
                    "/assets/uploads/2025/11/IMG_9469-300x300.jpg",
                    "/assets/uploads/2025/11/IMG_9472-300x300.jpg",
                    "/assets/uploads/2025/11/IMG_9473-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11306",
                "name" => "MONOBLOCCO USO UFFICIO",
                "price" => "6,900.00",
                "old_price" => "7,600.00",
                "sku" => "3276611306",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-ufficio/",
                "categories" => ["container-modulari"],
                "short_description" => "A corredo della progettazione, per pratica edilizia, compreso di:\nRedazione Relazione Strutturale di edificio metallico, (escluso calcolo o verifica strutture di fondazione).\nVerifica strutturale degli elementi metallici del prefabbricato, con predisposizione del fascicolo Ex Legge 1860-71 e NTC 2018 per deposito presso gli organi competenti e relazioni di calcolo che possano essere richieste, dagli organi competenti.\nPredisposizione dei moduli per la denuncia sismico-strutturale.\nRedazione Relazione Energetica, per edificio di nuova costruzione, con verifiche numeriche dei parametri minimi di legge, con analisi delle stratigrafie di progetto e verifica dei ponti termici (assenza condensazioni interstiziali), con verifica del rispetto degli obblighi, di integrazione delle fonti rinnovabili.\nRedazione Relazione Elettrotecnica, per edificio di nuova costruzione, comprensiva di progetto impianto elettrico.\nL'incarico comprenderà planimetrie, schema quadro elettrico, dimensionamenti e piccola relazione tecnica.\nEscluso relazione energetica e APE.\nLa nostra fornitura prevede anche la consegna digitale, di un FASCICOLO TECNICO comprendente:\nLa DoP (Declaration of Performance) che accompagna la marcatura CE del manufatto.\nAttestazione ISO3834-3:2005 (marcatura CE), a completa garanzia strutturale del manufatto, realizzato per vostro conto.\nRegolarità contributiva DURC.\nPiano di manutenzione ordinaria e straordinaria.\nScheda di garanzia per i componenti principali.\nDICO Elettrica e Idraulica a seconda degli allestimenti interni.\nNr.02 Moduli con Dimensioni al basamento 993 x 293 cm.\nNr.02 Moduli con Dimensioni al tetto 1000 x 300 cm.\nH interna 270 cm H esterna 661 cm.\nTot Mq 60.\nPannello Parete e Primo Tetto sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nVerniciatura esterna pannello parete RAL6005, compresa.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestito con Pannello Parete sp.100 mm – Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con: Pavimento Vinilico Modulare Colorazione LIGHT GREY.\nSecondo tetto, per maggiore coibentazione, massima ermeticità e durata nel tempo, con struttura in tubolare e lattonerie presso piegate, a una falda, rivestite con:\nPannello Tetto sp.30+35 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro Nervata BG RAL 9002.\nFascione di gronda perimetrale RAL 9002, completo di pluviali di scarico a terra.\nDimensioni 1020 x 320 cm.\nSerramenti in alluminio RAL 9010. Taglio Termico.\nVetro Camera 3+3/15/3+3 mm trasparente.\nN.1 Porta mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.4 Finestre a due ante scorrevoli, complete di zanzariera scorrevole, con dimensioni 200 x 100h esterna cm.\nVetro Camera 3+3/15/3+3 mm stampato.\nN.2 Porte mezzo vetro a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.2 Finestrini con apertura a vasistas, completo di zanzariera fissa esterna, con dimensioni 50 x 50h esterna cm.\nN.3 Finestrini con apertura a vasistas, completi di zanzariera fissa esterna, con dimensioni 100 x 50h esterna cm.\nN.1 Porta cieche tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210h esterna cm.\nN.2 Porte cieche tutto pannello a un'anta battente, con maniglia standard e serratura libero/occupato, con dimensioni 80 x 210h esterna cm.\nN.2 Porte a soffietto colore Grigio.\nImpianto elettrico competo di relazione, con tubo PVC Bianco a vista, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale Prese.\nN.1 Differenziale Luci.\nN.1 Differenziale CDZ.\nN.2 Plafoniere 45W-LED.\nN.3 Plafoniere NOVALUX 35W-LED.\nN.4 Plafoniere 19W-LED.\nN.5 Interruttori.\nN.13 Prese.\nN.2 Condizionatori Mono SPLIT Inverter BTU 9000-HISENSE.\nN.1 Condizionatore Mono SPLIT Inverter BTU 12000-HISENSE.\nN.1 Scatola per allacciamento esterno.\nN.1 Impianto Fotovoltaico a tetto, dimensionato per 3Kw.\nN.1 Linea vita a tetto.\nImpianto idraulico interno con tubo MEPLA a vista, compreso di:\nN.2 Wc in ceramica + Sedile + Cassetta Esterna.\nN.2 Portarotolo + Scopino.\nN.3 Lavabo in Ceramica 60 cm + Colonna + Miscelatore.\nN.3 Specchio.\nN.2 Piatti doccia in ceramica 80 x 80 cm.\nN.2 Aste doccia + Soffione + Miscelatore.\nN.2 Boiler Elettrici 60 Litri Acqua Calda.\nN.1 Scala di accesso (esterna) a una rampa, completa di ballatoio, zincata a caldo, con struttura in tubolare e gradini grigliati, completa di parapetto.",
                "images" => [
                    "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_4eb976df-1-300x300.jpg",
                    "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_4eb976df-300x300.jpg",
                    "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_806e37ee-300x300.jpg",
                    "/assets/uploads/2025/11/Immagine-WhatsApp-2024-03-08-ore-13.25.27_e05b6fcf-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11310",
                "name" => "MONOBLOCCO USO UFFICIO",
                "price" => "3,390.00",
                "old_price" => "4,000.00",
                "sku" => "3276611310",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-ufficio-2/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 593 x 243 cm. Dimensioni al tetto 600 x 250 cm.\nH interna 240 cm H esterna 272 cm.\nPannello parete sp.40 mm – Poliuretano.\n1 Lamiera esterna Micro Nervata BG RAL 9002.\n1 Lamiera interna Micro Nervata BG RAL 9002.\nPannello tetto sp.30+35 mm – Poliuretano.\n1 Lamiera esterna 5 greche BG RAL 9002.\n1 Lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare zincato, rivestita con lamiere grecate zincate, rivestito con legno Idro V100 sp.18 mm, rivestito con PVC Standard.\nSerramenti in alluminio RAL 9010.\nVetro antisfondamento trasparente.\nN.1 Porta di Ingresso tutto vetro a due ante battenti, con maniglia e serratura standard, con dimensioni 220 x 240h esterna cm.\nN.3 Finestroni fissi con dimensioni 170 x 240h esterna cm.\nImpianto Elettrico Norma CEE 200V, con tubo PVC Bianco a vista,compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale per CDZ.\nN.1 Interruttore.\nN.1 Presa.\nN.2 Plafoniere 45W-LED.\nN.1 Condizionatore Mono Split Inverter BTU 9000-HISENSE. N.1 Scatola per allacciamento esterno.",
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
                "description" => ""
            ],
            [
                "id" => "11307",
                "name" => "MONOBLOCCO USO UFFICIO 4×2",
                "price" => "899.00",
                "old_price" => "910.00",
                "sku" => "3276611307",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-ufficio-4x2/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 393 x 193 cm.\nDimensioni al tetto 400 x 200 cm.\nH interna 220 cm H esterna 242 cm.\nPannello Parete sp.40 mm – Poliuretano\n1 Lato lamiera esterna Micro nervata BG RAL 9002.\n1 Lato lamiera interna Micro nervata BG RAL 9002.\nPannello Tetto sp.30 mm – Poliuretano\n1 Lato lamiera esterna 5 greche RAL 9002.\n1 Lato lamiera interna Micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con legno cemento sp.18 mm, rivestito con PVC Antiscivolo.\nSerramenti in alluminio RAL 9010.\nN.1 Porta cieca tutto pannello a un'anta battente, con maniglia e serratura standard, con dimensioni 100 x 210h esterna cm.\nN.1 Finestra con paertura ad anta/ribalta, con vetrio camera 4/9/4 trasparente, completa di tenda veneziana colore Bianco, con dimensioni 100 x 100h esterna cm.\nImpianto elettrico standard norma CEE 220V, con tubo PVC Bianco a vista, compreso di: N.1\nQuadro elettrico.\nN.1 Differenziale Generale.\nN.1 Interruttore.\nN.1 Presa.\nN.1 Plafoniera 19W-LED.\nN.1 Scatola esterna per allaccio impianto elettrico.\nEscluso trasporto e posa in opera.\nEscluso opere murarie e allacciamenti esterni.\nEscluso tutto quanto non indicato a preventivo.\nCome da disegno tecnico PG1329 R00 in allegato.",
                "images" => [
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-6-300x300.jpeg",
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-5-300x300.jpeg",
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-4-300x300.jpeg",
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-3-300x300.jpeg",
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-2-300x300.jpeg",
                    "/assets/uploads/2025/11/pigreco-monoblocchi-personalizzati-1-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11308",
                "name" => "MONOBLOCCO USO UFFICIO VENDITE 12×2,5",
                "price" => "5,590.00",
                "old_price" => "7,600.00",
                "sku" => "3276611308",
                "discount_percentage" => null,
                "link" => "/product/monoblocco-uso-ufficio-vendite-12x25/",
                "categories" => ["container-modulari"],
                "short_description" => "Dimensioni al basamento 1193 x 243 cm.\nDimensioni al tetto 1200 x 250 cm.\nH interna 270 cm H esterna 316 cm.\nTot Mq 30\nPannello Parete sp.100 mm – Poliuretano\n1 Lato lamiera esterna LISCIA BG RAL 9002.\n1 Lato lamiera interna LISCIA BG RAL 9002.\nPannello Tetto sp.100+35 mm – Poliuretano\n1 Lato lamiera esterna micro nervata BG RAL 9002.\n1 Lato lamiera interna micro nervata BG RAL 9002.\nBasamento alta portanza con struttura in tubolare, rivestito con lamiera grecata, rivestita con Pannello Parete sp.100 mm – Poliuretano, rivestito con legno IDRO V100 sp.18 mm, rivestito con:\nPavimento Vinilico Modulare colorazione LIGHT GREY.\nSerramenti in Alluminio RAL 9010.\nVetro Camera 3+3/9/3+3 Antisfondamento trasparente.\nN.1 Porta di ingresso tutto vetro a due ante battenti, con maniglia e serratura standard, con dimensioni 200 x 260h esterna cm.\nN.3 Finestroni fissi tutto vetro, con dimensioni 200 x 260h sterna cm.\nN.1 Porta cieca tutto pannello, a un'anta battente, con maniglia e serratura standard, con dimensioni 80 x 210 h esterna cm.\nNr.1 Cassaforte da appoggio, completa di sportello a basculante, chiavi a doppia mappa, per ricezione chiavi di ritorno.\nImpianto elettrico nascosto, compreso di:\nN.1 Quadro Elettrico.\nN.1 Differenziale Generale.\nN.1 Differenziale CDZ.\nN.2 Interruttori.\nN.5 Prese.\nN.3 Prese RJ45.\nN.4 Plafoniere NOVALUX 35W-LED.\nN.1 Condizionatore mono split inverter BTU 18000-HISENSE.\nN.1 Scatola esterna per allacciamento.",
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
                "description" => ""
            ],
            [
                "id" => "11419",
                "name" => "Nuova Casa – Reale I",
                "price" => "8,890.00",
                "old_price" => "9,100.00",
                "sku" => "3276611419",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-reale-i/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11422",
                "name" => "Nuova Casa – Campo III",
                "price" => "11,620.00",
                "old_price" => "13,000.00",
                "sku" => "3276611422",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-campo-iii/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11420",
                "name" => "Nuova Casa – Reale II",
                "price" => "9,300.00",
                "old_price" => "10,500.00",
                "sku" => "3276611420",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-reale-ii/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11421",
                "name" => "Nuova Casa – Reale III",
                "price" => "10,050.00",
                "old_price" => "12,000.00",
                "sku" => "3276611421",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-reale-iii/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11423",
                "name" => "Nuova casa – Tempesta II",
                "price" => "10,435.00",
                "old_price" => "11,970.00",
                "sku" => "3276611423",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-tempesta-ii/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11366",
                "name" => "Nuova casa 10 x 4m – Premium",
                "price" => "10,090.00",
                "old_price" => "12,000.00",
                "sku" => "3276611366",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-10-x-4m-premium/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11368",
                "name" => "Nuova casa 10x4m – II",
                "price" => "9,299.00",
                "old_price" => "12,000.00",
                "sku" => "3276611368",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-10x4m-ii/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],





            [
                "id" => "11726",
                "name" => "Nuova casa 11,4 x 3,5 mt",
                "price" => "9,810.00",
                "old_price" => "11,000.00",
                "sku" => "3276611726",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-114-x-35-mt-11-970e-iva-inclusa/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11418",
                "name" => "Nuova casa Samos 2 – 10×3,5m",
                "price" => "8,100.00",
                "old_price" => "9,800.00",
                "sku" => "3276611418",
                "discount_percentage" => null,
                "link" => "/product/nuova-casa-samos-2-1035m/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11835",
                "name" => "Nuovo container da 20 piedi (Offriamo uno sconto per l'acquisto di più unità)",
                "price" => "905.00",
                "old_price" => "1,300.00",
                "sku" => "3276611835",
                "discount_percentage" => null,
                "link" => "/product/nuovo-container-da-20-piedi-offriamo-uno-sconto-per-lacquisto-di-piu-unita/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059572-300x300.jpg",
                    "/assets/uploads/2025/11/1000059566-300x300.jpg",
                    "/assets/uploads/2025/11/1000059565-300x300.jpg",
                    "/assets/uploads/2025/11/1000059568-300x300.jpg",
                    "/assets/uploads/2025/11/1000059567-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11829",
                "name" => "Nuovo container High Cube con tribune da 40 piedi e 74 posti.",
                "price" => "4,450.00",
                "old_price" => "6,500.00",
                "sku" => "3276611829",
                "discount_percentage" => null,
                "link" => "/product/nuovo-container-high-cube-con-tribune-da-40-piedi-e-74-posti/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "11837",
                "name" => "Nuovo container per spedizioni con apertura laterale da 20 piedi",
                "price" => "1,350.00",
                "old_price" => "2,000.00",
                "sku" => "3276611837",
                "discount_percentage" => null,
                "link" => "/product/nuovo-container-per-spedizioni-con-apertura-laterale-da-20-piedi/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "",
                "images" => [
                    "/assets/uploads/2025/11/1000059630-300x300.jpg",
                    "/assets/uploads/2025/11/1000059629-300x300.jpg",
                    "/assets/uploads/2025/11/1000059633-300x300.jpg",
                    "/assets/uploads/2025/11/1000059632-300x300.jpg",
                    "/assets/uploads/2025/11/1000059631-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11238",
                "name" => "NUOVO CONTENITORE MARITTIMO REFRIGERATO DA 20 PIEDI",
                "price" => "3,580.00",
                "old_price" => "4,100.00",
                "sku" => "3276611238",
                "discount_percentage" => null,
                "link" => "/product/nuovo-contenitore-marittimo-refrigerato-da-20-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Container di spedizione reefer da 20′ / nuovo frigorifero\nLunghezza: 6 metri, altezza esterna: 2.591 e interna: 2.261 (mt.)\nMacchine Carrier o Thermo King\nDimensioni esterne (LxPxH): 6058 x 2438 x 2591 mm.\nNuovo container/frigorifero refrigerato da 20 piedi, utilizzato per applicazioni relative al mantenimento dei prodotti a temperatura costante.\nCoibentato per mantenere al meglio la temperatura assegnata, le pareti interne sono in acciaio inox e il pavimento è in alluminio scanalato tipo T.\nLe marche di macchine che offriamo più comunemente utilizzate sono Carrier e Thermo King, anche se è possibile fornirne anche altre come Star Cool o Daikin.\nÈ conforme ai requisiti di trasporto CSC e TIR e agli standard ISO nella sua costruzione.\nApplicazioni più comuni: Trasporto marittimo e intermodale di merci deperibili, congelamento o conservazione frigorifera, di pesce, frutta, carne, conservazione dell'uva nell'industria vinicola, del cuoio, di prodotti farmaceutici, ecc.\nIl modo corretto di utilizzare questa apparecchiatura è preraffreddare l'unità e, una volta raggiunta questa temperatura, posizionare i prodotti nel contenitore.",
                "images" => [
                    "/assets/uploads/2025/11/4EA26151-BB43-4855-8772-46FF7F6D06EC-300x300.jpg",
                    "/assets/uploads/2025/11/5C935429-E138-4A10-99D9-315C678D0415-300x300.jpg",
                    "/assets/uploads/2025/11/A4655589-CC21-4582-8A1A-1FF3B52EDDE2-300x300.jpg",
                    "/assets/uploads/2025/11/77D71318-A04D-4E46-9CD1-6CFC97190403-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11235",
                "name" => "NUOVO CONTENITORE PER UFFICIO DA 20 PIEDI",
                "price" => "1,810.00",
                "old_price" => "2,600.00",
                "sku" => "3276611235",
                "discount_percentage" => null,
                "link" => "/product/nuovo-contenitore-per-ufficio-da-20-piedi/",
                "categories" => ["container-modulari"],
                "short_description" => "Nuovo container standard da 20 piedi, con impilatore di vetro da 4.500 mm sulla parete laterale. Impianto elettrico e aria condizionata.",
                "images" => [
                    "/assets/uploads/2025/11/IMG-20230928-WA0063-300x300.jpg",
                    "/assets/uploads/2025/11/IMG-20230928-WA0061-300x300.jpg",
                    "/assets/uploads/2025/11/IMG-20230928-WA0060-300x300.jpg",
                    "/assets/uploads/2025/11/IMG-20230928-WA0058-300x300.jpg",
                    "/assets/uploads/2025/11/IMG-20230928-WA0062-300x300.jpg",
                    "/assets/uploads/2025/11/IMG-20230928-WA0065-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11237",
                "name" => "NUOVO CONTENITORE REFRIGERATO DA 40 PIEDI",
                "price" => "5,600.00",
                "old_price" => null,
                "sku" => "3276611237",
                "discount_percentage" => null,
                "link" => "/product/nuovo-contenitore-refrigerato-da-40-piedi/",
                "categories" => ["container-refrigerati"],
                "short_description" => "Il nuovo container refrigerato da 40 piedi o anche chiamato container refrigerato refrigerato da 12 m, è ampiamente utilizzato per le attività di stoccaggio di prodotti freschi. Il container refrigerato da 40′ è alimentato da una presa da 380V. È dotato di macchine che operano in un intervallo di temperatura compreso tra +25°C e -25°C.\nTutti i nostri contenitori refrigerati Reefer sono dotati di certificato CSC Veritas e di un test PTI (refrigeration unit test) valido.\nLavoriamo con motori Carrier, Thermoking, Daikin e Starcool.\nDIMENSIONI INTERNE\n-Lunghezza: 11.583 mm\n-Larghezza: 2294 mm\n-Altezza: 2.569 mm\n-Altezza interna (fino al limite di carico): 2.469 mm\nDimensioni esterne\n– Lunghezza: 12.192 mm\n– Larghezza: 2438 mm\n– Altezza: 2.896 mm\nDimensioni della porta\n-Larghezza: 2292 mm\n-Altezza: 2.562 mm\nTemperatura: da -25 a 25°C\nRefrigerante\n-R134A\n-R404\n-R442 su richiesta\nStruttura: CORTEN e INOX\nTERRA\nGUIDA IN ALLUMINIO A T\nGestione tramite console Daikin, Thermoking o Carrier\nStoccaggio fino a 23 Europallet\nApertura a doppia anta su una delle facce esterne\nLe porte si aprono a 270°\nInformazioni aggiuntive\n– Carico massimo: 29.350 kg\n– Peso a vuoto: 4.650 kg\n– Peso massimo: 34.000 kg\n– Volume interno utile (fino alla linea massima di ventilazione): 65,60 m3",
                "images" => [
                    "/assets/uploads/2025/11/B0775DA6-6EB2-41C8-805E-BD4C464E6679-300x300.jpg",
                    "/assets/uploads/2025/11/8EF5D085-344A-4B3F-B95F-45C3CB7D4C67-300x300.jpg",
                    "/assets/uploads/2025/11/5D3078A0-A4A1-441C-9C61-3111AC8F1E76-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11674",
                "name" => "Piccola casa Deluxe 19 piedi x 20 piedi – Stahlworks 2025",
                "price" => "8,900.00",
                "old_price" => "9,500.00",
                "sku" => "3276611674",
                "discount_percentage" => null,
                "link" => "/product/piccola-casa-deluxe-19-piedi-x-20-piedi-stahlworks-2025/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10731",
                "name" => "Piscina Container LC 15’",
                "price" => "3,543.54",
                "old_price" => "5,062.20",
                "sku" => "3276610731",
                "discount_percentage" => null,
                "link" => "/product/piscina-container-lc-15/",
                "categories" => ["piscina"],
                "short_description" => "La Piscina Container LC 15’ offre un'esperienza esclusiva in spazi ridotti.Questo modulo compatto, realizzato in acciaio resistente, è perfetto per chi cerca una piscina privata moderna, funzionale e facilmente trasportabile.\nDesign stackable (fino a 3 unità) per spazi modulari\nOttime capacità di carico e isolamento, ideale per ambienti esterni\nPossibilità di personalizzazione per adattarsi ad ogni esigenza",
                "images" => [
                    "/assets/uploads/2025/11/6-54-300x300.jpeg",
                    "/assets/uploads/2025/11/7-41-300x300.jpeg",
                    "/assets/uploads/2025/11/8-29-300x300.jpeg",
                    "/assets/uploads/2025/11/9-22-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10705",
                "name" => "Piscina Contenitore 12 Metri",
                "price" => "5,625.62",
                "old_price" => "8,036.60",
                "sku" => "3276610705",
                "discount_percentage" => null,
                "link" => "/product/piscina-contenitore-12-metri/",
                "categories" => ["piscina"],
                "short_description" => "Piscina Contenitore 12 Metri – Design industriale e comfort senza lavori\nInstallazione senza permessi\nCapacità oltre 30.000 litri\nIlluminazione LED subacquea\nSistema di filtrazione completo\nLocale tecnico integrato o esterno\n100% personalizzabile",
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
                "description" => ""
            ],
            [
                "id" => "10794",
                "name" => "Piscina Contenitore 20’ – Design Pronto all'Uso",
                "price" => "4,954.95",
                "old_price" => "7,078.50",
                "sku" => "3276610794",
                "discount_percentage" => null,
                "link" => "/product/piscina-contenitore-20-design-pronto-alluso/",
                "categories" => ["piscina"],
                "short_description" => "Una piscina container di design, completamente attrezzata e pronta all'uso per trasformare il tuo spazio esterno in un'oasi privata. Nessuno scavo, nessuna attesa.\nStruttura container rinforzata con rivestimento effetto mosaico\nLED sommersi e scala in acciaio inox\nPorta bambini, piattaforma WPC, pronta in 1 giorno",
                "images" => [
                    "/assets/uploads/2025/11/2-74-300x300.jpeg",
                    "/assets/uploads/2025/11/1-74-300x300.jpeg",
                    "/assets/uploads/2025/11/4-70-300x300.jpeg",
                    "/assets/uploads/2025/11/5-66-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10792",
                "name" => "Piscina Contenitore 20′ – Pronta all'Uso, Stile Garantito",
                "price" => "3,923.92",
                "old_price" => "5,605.60",
                "sku" => "3276610792",
                "discount_percentage" => null,
                "link" => "/product/piscina-contenitore-20%e2%80%b2-pronta-alluso-stile-garantito/",
                "categories" => ["piscina"],
                "short_description" => "Una piscina container elegante e resistente per trasformare il tuo giardino in un angolo di benessere.Grazie alla struttura in acciaio rinforzato e agli accessori di lusso, è pronta all'uso in poche ore!\nLED multicolore, frigo integrato, zona tanning\nRivestimento epossidico e isolamento termico\nRiscaldamento e filtrazione inclusi",
                "images" => [
                    "/assets/uploads/2025/11/1-73-300x300.jpeg",
                    "/assets/uploads/2025/11/2-73-300x300.jpeg",
                    "/assets/uploads/2025/11/3-69-300x300.jpeg",
                    "/assets/uploads/2025/11/4-69-300x300.jpeg",
                    "/assets/uploads/2025/11/5-65-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "10704",
                "name" => "Piscina Contenitore Premium 6,2 x 2,5 m",
                "price" => "5,630.62",
                "old_price" => "8,043.75",
                "sku" => "3276610704",
                "discount_percentage" => null,
                "link" => "/product/piscina-contenitore-premium-62-x-25-m/",
                "categories" => ["piscina"],
                "short_description" => "Piscina Contenitore Premium 6,2 m – Design moderno e comfort 4 stagioni\nPronta all'uso con pompa di calore inclusa\nCopertura scorrevole in plexiglass\nIlluminazione LED per bagni notturni\nFondo e scale in WPC antiscivolo\nSistema di filtrazione ad alte prestazioni\nKit di pulizia incluso",
                "images" => [
                    "/assets/uploads/2025/11/1-8-300x300.jpg",
                    "/assets/uploads/2025/11/2-300x300.jpg",
                    "/assets/uploads/2025/11/3-300x300.jpg",
                    "/assets/uploads/2025/11/4-1-300x300.jpg",
                    "/assets/uploads/2025/11/5-1-300x300.jpg",
                    "/assets/uploads/2025/11/6-1-300x300.jpg",
                    "/assets/uploads/2025/11/7-1-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10791",
                "name" => "Piscina ElitePool Sport & Spa",
                "price" => "3,378.37",
                "old_price" => "4,826.25",
                "sku" => "3276610791",
                "discount_percentage" => null,
                "link" => "/product/piscina-elitepool-sport-spa/",
                "categories" => ["piscina"],
                "short_description" => "La ElitePool Sport & Spa è la piscina modulare perfetta per chi desidera combinare sport, relax e design in un'unica soluzione compatta e tecnologica.Dotata di sistema di nuoto controcorrente, finestra panoramica integrata e copertura automatica, garantisce un'esperienza di lusso direttamente nel tuo giardino.\nVasca in polipropilene e struttura in acciaio\nIlluminazione LED e pompa di calore\nCopertura scorrevole automatica con telecomando",
                "images" => [
                    "/assets/uploads/2025/11/1-6-1-300x270.jpg",
                    "/assets/uploads/2025/11/2-7-300x270.jpg",
                    "/assets/uploads/2025/11/3-6-300x270.jpg",
                    "/assets/uploads/2025/11/4-3-1-1-300x270.webp",
                    "/assets/uploads/2025/11/5-3-1-300x270.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "10793",
                "name" => "Piscina Sport & Spa in Polipropilene",
                "price" => "5,105.10",
                "old_price" => "7,293.00",
                "sku" => "3276610793",
                "discount_percentage" => null,
                "link" => "/product/piscina-sport-spa-in-polipropilene/",
                "categories" => ["piscina"],
                "short_description" => "Un'esperienza completa di benessere e sport in giardino con la piscina fuori terra Sport & Spa in polipropilene. Allenati, rilassati e goditi l'eleganza.\nSistema Jet-Swim regolabile per nuoto controcorrente\nPompa di calore, LED e filtrazione inclusi\nPronta all'uso in 24 ore, senza opere murarie",
                "images" => [
                    "/assets/uploads/2025/11/1-7-1-300x276.jpg",
                    "/assets/uploads/2025/11/2-8-300x278.jpg",
                    "/assets/uploads/2025/11/3-4-1-1-300x271.webp",
                    "/assets/uploads/2025/11/4-7-300x256.jpg",
                    "/assets/uploads/2025/11/5-4-1-300x262.webp",
                    "/assets/uploads/2025/11/6-4-300x278.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11367",
                "name" => "Re della Nuova Casa – 1",
                "price" => "9,699.00",
                "old_price" => "10,560.00",
                "sku" => "3276611367",
                "discount_percentage" => null,
                "link" => "/product/re-della-nuova-casa-1/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ],
            [
                "id" => "10948",
                "name" => "Reefer High Cube da 40 piedi",
                "price" => "6,970.00",
                "old_price" => null,
                "sku" => "3276610948",
                "discount_percentage" => null,
                "link" => "/product/reefer-high-cube-da-40-piedi/",
                "categories" => ["container-refrigerati", "contenitori-40-piedi"],
                "short_description" => "Il container frigorifero più grande della gamma – con intervallo di temperatura da -25 °C a +25 °C. Ideale per lo stoccaggio e il trasporto refrigerato. Testato PTI, con pavimento a T, rivestimento in acciaio inox e collegamento a 380V.   Disponibile per il noleggio o l'acquisto.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_p1020526_small_1000x9999-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11233",
                "name" => "SNACK – CONTENITORE GUINGUETTE",
                "price" => "4,100.00",
                "old_price" => "5,500.00",
                "sku" => "3276611233",
                "discount_percentage" => null,
                "link" => "/product/snack-contenitore-guinguette/",
                "categories" => ["container-modulari"],
                "short_description" => "Realizzazione di uno snack bar, food truck, taverna in un container marittimo.\nCapire :\n1 container primo viaggio da 20′ (6mx2,45×2,60m)\nAperture:\n1 Tenda a gas 2000 x 1200 mm\n1 Tenda a gas 3000 x 1200 mm\nContatori:\n1 Bancone pieghevole 2000x300mm\n1 Bancone pieghevole 3000x300mm\nINSTALLAZIONE ELETTRICA:\n1 tabella a 2 righe\n2 luci LED impermeabili\n10 prese di servizio 16A+T\n1 interruttore di alimentazione singolo\n1 pasto veloce\nIsolamento interno:\nPannello Sandwich Alimentare 40mm Bianco\nPavimento: resina gelcoat grigia con scarico a pavimento per il drenaggio\nVerniciatura: vernice RAL 7016 su tutto il contenitore.\nRivestimento in legno: realizzazione rivestimento in legno di abete Douglas\nImpianto idraulico: ingresso e uscita dell'acqua, installazione dell'approvvigionamento idrico.\nCappa: Fornitura e posa in opera di una cappa da 2 mt con aspirazione a soffitto.\nImmersione: Fornitura e installazione di un'immersione cumuliforme istantanea",
                "images" => [
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_765ba40e-8c94-4cb1-a7bd-e7dc5d561a0d-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_24e63ff7-6f33-4566-b554-8b8f484205ec-300x300.jpg",
                    "/assets/uploads/2025/11/rn-image_picker_lib_temp_ea0905d2-cc6f-4c74-b314-2aa99b2dc74e-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "10702",
                "name" => "Snack-BOX 20′ con Accessori Speciali",
                "price" => "1,726.72",
                "old_price" => "2,466.75",
                "sku" => "3276610702",
                "discount_percentage" => null,
                "link" => "/product/snack-box-20%e2%80%b2-con-accessori-speciali/",
                "categories" => ["caffetteria-bar-ristorante"],
                "short_description" => "Snack-BOX 20′ – Contenitore professionale per uso alimentare\nIsolamento termico e vernice alimentare\nSerranda elettrica + porta acciaio Corten\nPavimento antiscivolo con scarico\nImpianto elettrico certificato\nPerfetto per street food, fiere e chioschi mobili",
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
                "description" => ""
            ],
            [
                "id" => "10500",
                "name" => "Tiny House Modular L15",
                "price" => "4,924.92",
                "old_price" => "7,035.60",
                "sku" => "3276610500",
                "discount_percentage" => null,
                "link" => "/product/tiny-house-modular-l15/",
                "categories" => ["contenitori-casa"],
                "short_description" => "Tiny House Modular L15 su container marittimo 20’ High Cube nuova e abitabile.Perfetta come casa secondaria, ufficio privato o soluzione abitativa sostenibile.\nSuperficie utile: 11,2 m²\nIsolamento U ≤ 0,16 W/m²K\nCucina e bagno completi\nClimatizzazione e LED inclusi\nPronta all'uso, 100% arredata",
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
                "description" => ""
            ],
            [
                "id" => "11234",
                "name" => "TRIBUNA / TRIBUNA CONTAINER",
                "price" => "4,600.00",
                "old_price" => "5,500.00",
                "sku" => "3276611234",
                "discount_percentage" => null,
                "link" => "/product/tribuna-tribuna-container/",
                "categories" => ["container-modulari"],
                "short_description" => "Tribune e tribune per eventi sportivi, spettacoli, concerti e spettacoli di ogni tipo.\nLa tribuna/tribuna può misurare 6 m x 2,45 m oppure 12 m x 2,45 m.\nTribuna completamente coperta, trasportabile e impermeabile",
                "images" => [
                    "/assets/uploads/2025/11/2ef49d77ecab6ee3476b2ea2fd61c8b73a01c72b-300x300.jpg",
                    "/assets/uploads/2025/11/349845a4e3b1f28babfa7348b50902fb45e1f7cb-300x300.jpg",
                    "/assets/uploads/2025/11/a205d93f21cb6ca3edde318d2eac3d089e109c91-300x300.jpg"
                ],
                "description" => ""
            ],
            [
                "id" => "11158",
                "name" => "Ufficio Container di 18 m² con Servizi Igienici",
                "price" => "4,000.00",
                "old_price" => null,
                "sku" => "3276611158",
                "discount_percentage" => null,
                "link" => "/product/ufficio-container-di-18-m%c2%b2-con-servizi-igienici/",
                "categories" => ["container-modulari"],
                "short_description" => "Ufficio container di 18 m² con servizi igienici integrati, ideale per uno spazio di lavoro moderno e confortevole. Installazione veloce e garanzia di 2 anni.",
                "images" => [
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-4-300x300.png",
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-300x300.png",
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-0-300x300.png",
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-1-300x300.png",
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-2-300x300.png",
                    "/assets/uploads/2025/11/Ufficio-Container-di-18-m²-con-Servizi-Igienici-3-300x300.png"
                ],
                "description" => ""
            ],
            [
                "id" => "10697",
                "name" => "Ufficio da Giardino 20 Piedi su Misura",
                "price" => "2,632.63",
                "old_price" => "3,760.90",
                "sku" => "3276610697",
                "discount_percentage" => null,
                "link" => "/product/ufficio-da-giardino-20-piedi-su-misura/",
                "categories" => ["ufficio"],
                "short_description" => "Ufficio container 20 piedi da giardino – 100% personalizzato\nStruttura in container marittimo\nAmpia vetrata + porte pieghevoli\nIsolamento termico/acustico elevato\nDesign moderno e su misura\nConsegna e installazione rapide",
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
                "description" => ""
            ],
            [
                "id" => "10624",
                "name" => "Ufficio Modulare Portatile – 4 Moduli da 6×9,72 m",
                "price" => "6,916.91",
                "old_price" => "9,881.30",
                "sku" => "3276610624",
                "discount_percentage" => null,
                "link" => "/product/ufficio-modulare-portatile-4-moduli-da-6x972-m/",
                "categories" => ["ufficio"],
                "short_description" => "Ufficio portatile prefabbricato da 4 moduli, ampio e isolato.\nStruttura in acciaio grigio antracite\nPareti isolate in lana di roccia 50 mm\nTetto in poliuretano 70 mm\n12 finestre con persiane + 4 finestre verticali\nWC + lavabo + cantina attrezzata\nPavimento in PVC su pannello impermeabile\nPreinstallazione per lavastoviglie\nPronto per la movimentazione e l'arredo",
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
                "description" => ""
            ],
            [
                "id" => "10499",
                "name" => "Unità di Contenimento 40′ High Cube – Nuova",
                "price" => "2,792.79",
                "old_price" => "3,989.70",
                "sku" => "3276610499",
                "discount_percentage" => null,
                "link" => "/product/unita-di-contenimento-40-high-cube-nuova/",
                "categories" => ["contenitori-40-piedi"],
                "short_description" => "Unità di contenimento 40’ HC nuova, perfetta per stoccaggio o progetti modulari.Struttura in acciaio CORTEN, volume ottimizzato, massima resistenza.\nDimensioni interne: 12,03 × 2,35 × 2,69 m\nVolume utile: 76,4 m³\nPeso: 3.940 kg circa\nStruttura robusta e nuova\nIdeale per usi industriali o abitativi",
                "images" => [
                    "/assets/uploads/2025/11/1-15-300x300.jpeg",
                    "/assets/uploads/2025/11/2-15-300x300.jpeg",
                    "/assets/uploads/2025/11/3-14-300x300.jpeg",
                    "/assets/uploads/2025/11/4-14-300x300.jpeg",
                    "/assets/uploads/2025/11/5-13-300x300.jpeg",
                    "/assets/uploads/2025/11/6-11-300x300.jpeg",
                    "/assets/uploads/2025/11/7-12-300x300.jpeg"
                ],
                "description" => ""
            ],
            [
                "id" => "11053",
                "name" => "Vasche di raccolta per container da 8 piedi",
                "price" => "1,780.00",
                "old_price" => null,
                "sku" => "3276611053",
                "discount_percentage" => null,
                "link" => "/product/vasche-di-raccolta-per-container-da-8-piedi/",
                "categories" => ["container-standard-usati", "contenitori-10-piedi"],
                "short_description" => "Container speciale 2.2m x 2.4mContainer compatto in acciaio CORTEN con fondo in acciaio a tenuta di liquidi, cassetta di sicurezza con serratura e tasche per carrello elevatore. Ideale per sostanze pericolose o inquinanti. Certificato CSC, impilabile, disponibile in RAL 5013 o nel colore desiderato. Nuovo o usato – possibilità di acquisto e noleggio.",
                "images" => [
                    "/assets/uploads/2025/11/a0a2dea73060_08lb_03-1-1-300x300.webp"
                ],
                "description" => ""
            ],
            [
                "id" => "11172",
                "name" => "VENDITA CONTAINER 20 piedi HC | Nuovo 20 piedi HC | Nuovo",
                "price" => "907.00",
                "old_price" => "1,150.00",
                "sku" => "3276611172",
                "discount_percentage" => null,
                "link" => "/product/vendita-container-20-piedi-hc-nuovo-20-piedi-hc-nuovo/",
                "categories" => ["contenitori-20-piedi", "non-categorizzato"],
                "short_description" => "DIMENSIONI INTERNI\nLunghezza: 5,89 m\nLarghezza: 2,35 mt\nAltezza: 2,69 mt\nDIMENSIONI ESTERNO\nLunghezza: 6,05 mt\nLarghezza: 2,43 mt\nAltezza: 2,89 mt",
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
                "description" => ""
            ],
            [
                "id" => "11567",
                "name" => "XXL Tiny House / Chalet di lusso pieghevole – 40 piedi / 12 metri",
                "price" => "9,900.00",
                "old_price" => "12,500.00",
                "sku" => "3276611567",
                "discount_percentage" => null,
                "link" => "/product/xxl-tiny-house-chalet-di-lusso-pieghevole-40-piedi-12-metri/",
                "categories" => ["container-modulari"],
                "short_description" => "",
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
                "description" => ""
            ]
        ];
        $this->command->info('Starting to seed ' . count($articlesData) . ' articles...');

        $bar = $this->command->getOutput()->createProgressBar(count($articlesData));
        $bar->start();

        // Tableau pour suivre les slugs utilisés
        $usedSlugs = [];

        foreach ($articlesData as $item) {
            try {
                // Nettoyer et convertir les prix
                $price = $this->cleanPrice($item['price']);
                $oldPrice = isset($item['old_price']) ? $this->cleanPrice($item['old_price']) : null;

                // Créer un slug unique
                $baseSlug = Str::slug($item['name']);
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
                    // Créer l'article
                    $article = Article::create([
                        'name' => $item['name'],
                        'slug' => $slug,
                        'sku' => $item['sku'],
                        'price' => $price,
                        'old_price' => $oldPrice,
                        'discount_percentage' => $item['discount_percentage'] ?? null,
                        'short_description' => $item['short_description'] ?? '',
                        'description' => $item['description'] ?? '',
                        'link' => $item['link'] ?? null,
                        'stock' => rand(1, 20), // Stock aléatoire entre 1 et 20
                        'category_id' => $this->getCategoryId($item['categories'], $categories)
                    ]);

                    // Ajouter les images
                    if (!empty($item['images'])) {
                        $position = 0;
                        foreach ($item['images'] as $imageUrl) {
                            // Nettoyer l'URL (enlever les doublons potentiels)
                            if (is_string($imageUrl) && !empty($imageUrl)) {
                                // Éviter les doublons d'images
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

            } catch (Exception $e) {
                $this->command->error("Error processing article {$item['sku']}: " . $e->getMessage());
                // Afficher plus de détails pour le débogage
                $this->command->warn("Article name: " . $item['name']);
            }
        }

        $bar->finish();
        $this->command->info("\nArticles seeded successfully!");
    }

    /**
     * Nettoie les prix (supprime les virgules, espaces, etc.)
     */
    private function cleanPrice($price)
    {
        if (empty($price)) {
            return null;
        }

        // Si le prix contient une virgule comme séparateur de milliers (ex: "9,900.00")
        if (preg_match('/,\d{3}\./', $price)) {
            // Enlever les virgules (séparateurs de milliers)
            $price = str_replace(',', '', $price);
        } // Si c'est un prix avec virgule décimale (ex: "9,90")
        else if (preg_match('/,\d{2}$/', $price)) {
            // Remplacer la virgule par un point
            $price = str_replace(',', '.', $price);
        }

        // Supprimer tous les caractères sauf chiffres et point
        $price = preg_replace('/[^0-9.]/', '', $price);

        // S'assurer qu'il n'y a qu'un seul point décimal
        $parts = explode('.', $price);
        if (count($parts) > 2) {
            // Cas où il reste plusieurs points (ex: "9.900.00")
            $price = $parts[0] . '.' . implode('', array_slice($parts, 1));
        }

        return floatval($price);
    }

    /**
     * Récupère l'ID de la première catégorie valide
     */
    private function getCategoryId($categories, $categoriesCollection)
    {
        if (empty($categories)) {
            // Retourner une catégorie par défaut (non-categorizzato)
            $defaultCategory = $categoriesCollection->firstWhere('slug', 'non-categorizzato');
            return $defaultCategory ? $defaultCategory->id : 1;
        }

        // Prendre la première catégorie (un article n'a qu'une seule catégorie principale)
        $categorySlug = $categories[0];
        $category = $categoriesCollection->firstWhere('slug', $categorySlug);

        return $category ? $category->id : $this->getDefaultCategoryId($categoriesCollection);
    }

    /**
     * Récupère l'ID d'une catégorie par défaut
     */
    private function getDefaultCategoryId($categoriesCollection)
    {
        $defaultCategory = $categoriesCollection->first();
        return $defaultCategory ? $defaultCategory->id : 1;
    }
}