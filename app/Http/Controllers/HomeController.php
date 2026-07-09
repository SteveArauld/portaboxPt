<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str; 


class HomeController extends Controller
{
public function index()
{
    // Récupérer la langue cible depuis le fichier .env
    $targetLocale = config('app.locale', 'pt');

    // Générer les slugs en portugais
    $slugs = [
        'containerRefrigerati' => Str::slug('Contêineres Refrigerados'),
        'container_modulari' => Str::slug('Contêineres Modulares'),
        'contenitori_20_piedi' => Str::slug('Contêineres 20 Pés'),
        'contenitori_40_piedi' => Str::slug('Contêineres 40 Pés'),
        'contenitori_casa' => Str::slug('Contêineres Casa'),
        'piscina' => Str::slug('Piscina'),
        'contenitori_10_piedi' => Str::slug('Contêineres 10 Pés'),
        'caffetteria_bar_ristorante' => Str::slug('Cafeteria Bar Restaurante'),
    ];

    $containerRefrigerati = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['containerRefrigerati']);
        })->paginate(20);

    $container_modulari = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['container_modulari']);
        })->paginate(20);

    $contenitori_20_piedi = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['contenitori_20_piedi']);
        })->paginate(20);

    $contenitori_40_piedi = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['contenitori_40_piedi']);
        })->paginate(20);

    $contenitori_casa = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['contenitori_casa']);
        })->paginate(20);

    $piscina = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['piscina']);
        })->paginate(5);

    $contenitori_10_piedi = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['contenitori_10_piedi']);
        })->paginate(20);

    $caffetteria_bar_ristorante = Article::with(['category', 'images'])
        ->whereHas('category', function ($query) use ($slugs) {
            $query->where('slug', $slugs['caffetteria_bar_ristorante']);
        })->paginate(5);

    return view('front.home', compact(
        'containerRefrigerati',
        'container_modulari',
        'contenitori_20_piedi',
        'contenitori_40_piedi',
        'contenitori_casa',
        'piscina',
        'contenitori_10_piedi',
        'caffetteria_bar_ristorante',
    ));
}

    public function showProduct($slug)
    {
        $article = Article::with(['category', 'images' => function ($query) {
            $query->orderBy('position');
        }])
        ->where('slug', $slug)
        ->firstOrFail();

        $imagesCount = $article->images->count();

        $relatedArticles = Article::with(['images' => function ($query) {
            $query->where('is_primary', true)->orWhere('position', 0);
        }])
        ->where('category_id', $article->category_id)
        ->where('id', '!=', $article->id)
        ->limit(8)
        ->get();

        // Liste complète des pays
        $countries = [
            ['code' => 'AF', 'name' => 'Afghanistan'],
            ['code' => 'ZA', 'name' => 'Afrique du Sud'],
            ['code' => 'AL', 'name' => 'Albanie'],
            ['code' => 'DZ', 'name' => 'Algérie'],
            ['code' => 'DE', 'name' => 'Allemagne'],
            ['code' => 'AD', 'name' => 'Andorre'],
            ['code' => 'AO', 'name' => 'Angola'],
            ['code' => 'AI', 'name' => 'Anguilla'],
            ['code' => 'AQ', 'name' => 'Antarctique'],
            ['code' => 'AG', 'name' => 'Antigua-et-Barbuda'],
            ['code' => 'SA', 'name' => 'Arabie saoudite'],
            ['code' => 'AR', 'name' => 'Argentine'],
            ['code' => 'AM', 'name' => 'Arménie'],
            ['code' => 'AW', 'name' => 'Aruba'],
            ['code' => 'AU', 'name' => 'Australie'],
            ['code' => 'AT', 'name' => 'Autriche'],
            ['code' => 'AZ', 'name' => 'Azerbaïdjan'],
            ['code' => 'BS', 'name' => 'Bahamas'],
            ['code' => 'BH', 'name' => 'Bahreïn'],
            ['code' => 'BD', 'name' => 'Bangladesh'],
            ['code' => 'BB', 'name' => 'Barbade'],
            ['code' => 'BE', 'name' => 'Belgique'],
            ['code' => 'BZ', 'name' => 'Belize'],
            ['code' => 'BJ', 'name' => 'Bénin'],
            ['code' => 'BM', 'name' => 'Bermudes'],
            ['code' => 'BT', 'name' => 'Bhoutan'],
            ['code' => 'BY', 'name' => 'Biélorussie'],
            ['code' => 'MM', 'name' => 'Birmanie'],
            ['code' => 'BO', 'name' => 'Bolivie'],
            ['code' => 'BA', 'name' => 'Bosnie-Herzégovine'],
            ['code' => 'BW', 'name' => 'Botswana'],
            ['code' => 'BR', 'name' => 'Brésil'],
            ['code' => 'BN', 'name' => 'Brunéi Darussalam'],
            ['code' => 'BG', 'name' => 'Bulgarie'],
            ['code' => 'BF', 'name' => 'Burkina Faso'],
            ['code' => 'BI', 'name' => 'Burundi'],
            ['code' => 'KH', 'name' => 'Cambodge'],
            ['code' => 'CM', 'name' => 'Cameroun'],
            ['code' => 'CA', 'name' => 'Canada'],
            ['code' => 'CV', 'name' => 'Cap-Vert'],
            ['code' => 'CL', 'name' => 'Chili'],
            ['code' => 'CN', 'name' => 'Chine'],
            ['code' => 'CY', 'name' => 'Chypre'],
            ['code' => 'CO', 'name' => 'Colombie'],
            ['code' => 'KM', 'name' => 'Comores'],
            ['code' => 'CG', 'name' => 'Congo-Brazzaville'],
            ['code' => 'CD', 'name' => 'Congo-Kinshasa'],
            ['code' => 'KP', 'name' => 'Corée du Nord'],
            ['code' => 'KR', 'name' => 'Corée du Sud'],
            ['code' => 'CR', 'name' => 'Costa Rica'],
            ['code' => 'CI', 'name' => 'Côte d’Ivoire'],
            ['code' => 'HR', 'name' => 'Croatie'],
            ['code' => 'CU', 'name' => 'Cuba'],
            ['code' => 'CW', 'name' => 'Curaçao'],
            ['code' => 'DK', 'name' => 'Danemark'],
            ['code' => 'DJ', 'name' => 'Djibouti'],
            ['code' => 'DM', 'name' => 'Dominique'],
            ['code' => 'EG', 'name' => 'Égypte'],
            ['code' => 'AE', 'name' => 'Émirats arabes unis'],
            ['code' => 'EC', 'name' => 'Équateur'],
            ['code' => 'ER', 'name' => 'Érythrée'],
            ['code' => 'ES', 'name' => 'Espagne'],
            ['code' => 'EE', 'name' => 'Estonie'],
            ['code' => 'SZ', 'name' => 'Eswatini'],
            ['code' => 'US', 'name' => 'États-Unis'],
            ['code' => 'ET', 'name' => 'Éthiopie'],
            ['code' => 'FJ', 'name' => 'Fidji'],
            ['code' => 'FI', 'name' => 'Finlande'],
            ['code' => 'FR', 'name' => 'France'],
            ['code' => 'GA', 'name' => 'Gabon'],
            ['code' => 'GM', 'name' => 'Gambie'],
            ['code' => 'GE', 'name' => 'Géorgie'],
            ['code' => 'GS', 'name' => 'Géorgie du Sud'],
            ['code' => 'GH', 'name' => 'Ghana'],
            ['code' => 'GI', 'name' => 'Gibraltar'],
            ['code' => 'GR', 'name' => 'Grèce'],
            ['code' => 'GD', 'name' => 'Grenade'],
            ['code' => 'GL', 'name' => 'Groenland'],
            ['code' => 'GP', 'name' => 'Guadeloupe'],
            ['code' => 'GU', 'name' => 'Guam'],
            ['code' => 'GT', 'name' => 'Guatemala'],
            ['code' => 'GG', 'name' => 'Guernesey'],
            ['code' => 'GN', 'name' => 'Guinée'],
            ['code' => 'GQ', 'name' => 'Guinée équatoriale'],
            ['code' => 'GW', 'name' => 'Guinée-Bissau'],
            ['code' => 'GY', 'name' => 'Guyana'],
            ['code' => 'GF', 'name' => 'Guyane française'],
            ['code' => 'HT', 'name' => 'Haïti'],
            ['code' => 'HN', 'name' => 'Honduras'],
            ['code' => 'HU', 'name' => 'Hongrie'],
            ['code' => 'BV', 'name' => 'Île Bouvet'],
            ['code' => 'CX', 'name' => 'Île Christmas'],
            ['code' => 'IM', 'name' => 'Île de Man'],
            ['code' => 'NF', 'name' => 'Île Norfolk'],
            ['code' => 'AX', 'name' => 'Îles Åland'],
            ['code' => 'KY', 'name' => 'Îles Caïmans'],
            ['code' => 'CC', 'name' => 'Îles Cocos'],
            ['code' => 'CK', 'name' => 'Îles Cook'],
            ['code' => 'FO', 'name' => 'Îles Féroé'],
            ['code' => 'FK', 'name' => 'Îles Malouines'],
            ['code' => 'MP', 'name' => 'Îles Mariannes du Nord'],
            ['code' => 'MH', 'name' => 'Îles Marshall'],
            ['code' => 'UM', 'name' => 'Îles mineures éloignées'],
            ['code' => 'PN', 'name' => 'Îles Pitcairn'],
            ['code' => 'SB', 'name' => 'Îles Salomon'],
            ['code' => 'TC', 'name' => 'Îles Turques-et-Caïques'],
            ['code' => 'VG', 'name' => 'Îles Vierges britanniques'],
            ['code' => 'VI', 'name' => 'Îles Vierges des États-Unis'],
            ['code' => 'IN', 'name' => 'Inde'],
            ['code' => 'ID', 'name' => 'Indonésie'],
            ['code' => 'IR', 'name' => 'Iran'],
            ['code' => 'IQ', 'name' => 'Irak'],
            ['code' => 'IE', 'name' => 'Irlande'],
            ['code' => 'IS', 'name' => 'Islande'],
            ['code' => 'IL', 'name' => 'Israël'],
            ['code' => 'IT', 'name' => 'Italie'],
            ['code' => 'JM', 'name' => 'Jamaïque'],
            ['code' => 'JP', 'name' => 'Japon'],
            ['code' => 'JE', 'name' => 'Jersey'],
            ['code' => 'JO', 'name' => 'Jordanie'],
            ['code' => 'KZ', 'name' => 'Kazakhstan'],
            ['code' => 'KE', 'name' => 'Kenya'],
            ['code' => 'KG', 'name' => 'Kirghizistan'],
            ['code' => 'KI', 'name' => 'Kiribati'],
            ['code' => 'KW', 'name' => 'Koweït'],
            ['code' => 'RE', 'name' => 'La Réunion'],
            ['code' => 'LA', 'name' => 'Laos'],
            ['code' => 'LS', 'name' => 'Lesotho'],
            ['code' => 'LV', 'name' => 'Lettonie'],
            ['code' => 'LB', 'name' => 'Liban'],
            ['code' => 'LR', 'name' => 'Libéria'],
            ['code' => 'LY', 'name' => 'Libye'],
            ['code' => 'LI', 'name' => 'Liechtenstein'],
            ['code' => 'LT', 'name' => 'Lituanie'],
            ['code' => 'LU', 'name' => 'Luxembourg'],
            ['code' => 'MK', 'name' => 'Macédoine du Nord'],
            ['code' => 'MG', 'name' => 'Madagascar'],
            ['code' => 'MY', 'name' => 'Malaisie'],
            ['code' => 'MW', 'name' => 'Malawi'],
            ['code' => 'MV', 'name' => 'Maldives'],
            ['code' => 'ML', 'name' => 'Mali'],
            ['code' => 'MT', 'name' => 'Malte'],
            ['code' => 'MA', 'name' => 'Maroc'],
            ['code' => 'MQ', 'name' => 'Martinique'],
            ['code' => 'MU', 'name' => 'Maurice'],
            ['code' => 'MR', 'name' => 'Mauritanie'],
            ['code' => 'YT', 'name' => 'Mayotte'],
            ['code' => 'MX', 'name' => 'Mexique'],
            ['code' => 'FM', 'name' => 'Micronésie'],
            ['code' => 'MD', 'name' => 'Moldavie'],
            ['code' => 'MC', 'name' => 'Monaco'],
            ['code' => 'MN', 'name' => 'Mongolie'],
            ['code' => 'ME', 'name' => 'Monténégro'],
            ['code' => 'MS', 'name' => 'Montserrat'],
            ['code' => 'MZ', 'name' => 'Mozambique'],
            ['code' => 'NA', 'name' => 'Namibie'],
            ['code' => 'NR', 'name' => 'Nauru'],
            ['code' => 'NP', 'name' => 'Népal'],
            ['code' => 'NI', 'name' => 'Nicaragua'],
            ['code' => 'NE', 'name' => 'Niger'],
            ['code' => 'NG', 'name' => 'Nigéria'],
            ['code' => 'NU', 'name' => 'Niue'],
            ['code' => 'NO', 'name' => 'Norvège'],
            ['code' => 'NC', 'name' => 'Nouvelle-Calédonie'],
            ['code' => 'NZ', 'name' => 'Nouvelle-Zélande'],
            ['code' => 'OM', 'name' => 'Oman'],
            ['code' => 'UG', 'name' => 'Ouganda'],
            ['code' => 'UZ', 'name' => 'Ouzbékistan'],
            ['code' => 'PK', 'name' => 'Pakistan'],
            ['code' => 'PW', 'name' => 'Palaos'],
            ['code' => 'PA', 'name' => 'Panama'],
            ['code' => 'PG', 'name' => 'Papouasie-Nouvelle-Guinée'],
            ['code' => 'PY', 'name' => 'Paraguay'],
            ['code' => 'NL', 'name' => 'Pays-Bas'],
            ['code' => 'BQ', 'name' => 'Pays-Bas caribéens'],
            ['code' => 'PE', 'name' => 'Pérou'],
            ['code' => 'PH', 'name' => 'Philippines'],
            ['code' => 'PL', 'name' => 'Pologne'],
            ['code' => 'PF', 'name' => 'Polynésie française'],
            ['code' => 'PR', 'name' => 'Porto Rico'],
            ['code' => 'PT', 'name' => 'Portugal'],
            ['code' => 'QA', 'name' => 'Qatar'],
            ['code' => 'HK', 'name' => 'R.A.S. chinoise de Hong Kong'],
            ['code' => 'MO', 'name' => 'R.A.S. chinoise de Macao'],
            ['code' => 'CF', 'name' => 'République centrafricaine'],
            ['code' => 'DO', 'name' => 'République dominicaine'],
            ['code' => 'RO', 'name' => 'Roumanie'],
            ['code' => 'GB', 'name' => 'Royaume-Uni'],
            ['code' => 'RU', 'name' => 'Russie'],
            ['code' => 'RW', 'name' => 'Rwanda'],
            ['code' => 'EH', 'name' => 'Sahara occidental'],
            ['code' => 'BL', 'name' => 'Saint-Barthélemy'],
            ['code' => 'KN', 'name' => 'Saint-Christophe-et-Niévès'],
            ['code' => 'SM', 'name' => 'Saint-Marin'],
            ['code' => 'MF', 'name' => 'Saint-Martin'],
            ['code' => 'SX', 'name' => 'Saint-Martin (partie néerlandaise)'],
            ['code' => 'PM', 'name' => 'Saint-Pierre-et-Miquelon'],
            ['code' => 'VA', 'name' => 'Saint-Siège'],
            ['code' => 'VC', 'name' => 'Saint-Vincent-et-les-Grenadines'],
            ['code' => 'SH', 'name' => 'Sainte-Hélène'],
            ['code' => 'LC', 'name' => 'Sainte-Lucie'],
            ['code' => 'SV', 'name' => 'Salvador'],
            ['code' => 'WS', 'name' => 'Samoa'],
            ['code' => 'AS', 'name' => 'Samoa américaines'],
            ['code' => 'ST', 'name' => 'Sao Tomé-et-Principe'],
            ['code' => 'SN', 'name' => 'Sénégal'],
            ['code' => 'RS', 'name' => 'Serbie'],
            ['code' => 'SC', 'name' => 'Seychelles'],
            ['code' => 'SL', 'name' => 'Sierra Leone'],
            ['code' => 'SG', 'name' => 'Singapour'],
            ['code' => 'SK', 'name' => 'Slovaquie'],
            ['code' => 'SI', 'name' => 'Slovénie'],
            ['code' => 'SO', 'name' => 'Somalie'],
            ['code' => 'SD', 'name' => 'Soudan'],
            ['code' => 'SS', 'name' => 'Soudan du Sud'],
            ['code' => 'LK', 'name' => 'Sri Lanka'],
            ['code' => 'SE', 'name' => 'Suède'],
            ['code' => 'CH', 'name' => 'Suisse'],
            ['code' => 'SR', 'name' => 'Suriname'],
            ['code' => 'SJ', 'name' => 'Svalbard et Jan Mayen'],
            ['code' => 'SY', 'name' => 'Syrie'],
            ['code' => 'TJ', 'name' => 'Tadjikistan'],
            ['code' => 'TW', 'name' => 'Taïwan'],
            ['code' => 'TZ', 'name' => 'Tanzanie'],
            ['code' => 'TD', 'name' => 'Tchad'],
            ['code' => 'CZ', 'name' => 'Tchéquie'],
            ['code' => 'TF', 'name' => 'Terres australes françaises'],
            ['code' => 'IO', 'name' => 'Territoire britannique de l\'océan Indien'],
            ['code' => 'PS', 'name' => 'Territoires palestiniens'],
            ['code' => 'TH', 'name' => 'Thaïlande'],
            ['code' => 'TL', 'name' => 'Timor oriental'],
            ['code' => 'TG', 'name' => 'Togo'],
            ['code' => 'TK', 'name' => 'Tokelau'],
            ['code' => 'TO', 'name' => 'Tonga'],
            ['code' => 'TT', 'name' => 'Trinité-et-Tobago'],
            ['code' => 'TN', 'name' => 'Tunisie'],
            ['code' => 'TM', 'name' => 'Turkménistan'],
            ['code' => 'TR', 'name' => 'Turquie'],
            ['code' => 'TV', 'name' => 'Tuvalu'],
            ['code' => 'UA', 'name' => 'Ukraine'],
            ['code' => 'UY', 'name' => 'Uruguay'],
            ['code' => 'VU', 'name' => 'Vanuatu'],
            ['code' => 'VE', 'name' => 'Venezuela'],
            ['code' => 'VN', 'name' => 'Vietnam'],
            ['code' => 'WF', 'name' => 'Wallis-et-Futuna'],
            ['code' => 'YE', 'name' => 'Yémen'],
            ['code' => 'ZM', 'name' => 'Zambie'],
            ['code' => 'ZW', 'name' => 'Zimbabwe']
        ];

        // Trier les pays par nom
        usort($countries, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        return view('front.product.show', compact('article', 'relatedArticles', 'imagesCount', 'countries'));
    }

    public function sendInquiry(Request $request, $id)
    {


        $article = Article::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'country' => 'required|string|max:10',
            'region' => 'required|string|max:100',
            'message' => 'required|string',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $quantity = $request->quantity ?? 1;

        if ($article->stock > 0 && $quantity > $article->stock) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'quantity' => [__('product.inquiry.quantity_exceeds_stock', ['stock' => $article->stock])]
                ]
            ], 422);
        }

        try {
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'region' => $request->region,
                'product_name' => $article->name,
                'product_sku' => $article->sku,
                'quantity' => $quantity,
                'inquiry_message' => $request->message,
                'product_url' => route('product.show', $article->slug),
                'order_number' => 'INQ-' . date('Ymd') . '-' . rand(1000, 9999)
            ];

            // Email pour l'admin
            Mail::send('emails.product-inquiry', $details, function ($message) use ($details) {
                $message->to(config('mail.admin_address', 'contato@portocontentores.com'))
                    ->subject(__('email.inquiry_admin_subject', ['product' => $details['product_name']]))
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($details['email'], $details['name']);
            });

            // Email de confirmation pour le client
            Mail::send('emails.inquiry-confirmation', $details, function ($message) use ($details) {
                $message->to($details['email'], $details['name'])
                    ->subject(__('email.inquiry_confirmation_subject', ['product' => $details['product_name']]))
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return response()->json([
                'success' => true,
                'message' => __('product.inquiry.success')
            ]);

        } catch (Exception $e) {
            Log::error('Erreur demande: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => __('product.inquiry.error')
            ], 500);
        }
    }

    public function showShop(Request $request, $category = null)
    {
        $selectedCategories = null;
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');
        $selectedPriceRanges = $request->get('price_ranges', []);

        if (empty($category)) {
            $category = $request->get('category');
            $selectedCategories = $request->get('categories', []);
        }

        $onsale = $request->get('onsale');
        $perPage = $request->get('per_page', 28);
        $search = $request->get('search_brand');
        $search2 = $request->get('search_Prin');
        $sort = $request->get('sort', 'default');

        $categories = Category::orderBy('name')->get();

        $query = Article::with(['category', 'images']);

        if ($minPrice !== null && $minPrice !== '') {
            $query->where('price', '>=', floatval($minPrice));
        }
        if ($maxPrice !== null && $maxPrice !== '') {
            $query->where('price', '<=', floatval($maxPrice));
        }

        if (!empty($selectedPriceRanges) && !is_array($selectedPriceRanges)) {
            $selectedPriceRanges = [$selectedPriceRanges];
        }

        if (!empty($selectedPriceRanges) && is_array($selectedPriceRanges)) {
            $query->where(function ($q) use ($selectedPriceRanges) {
                foreach ($selectedPriceRanges as $range) {
                    $rangeParts = explode('-', $range);

                    if (count($rangeParts) == 2) {
                        if ($rangeParts[1] == '+') {
                            $min = floatval($rangeParts[0]);
                            $q->orWhere('price', '>=', $min);
                        } else {
                            $min = floatval($rangeParts[0]);
                            $max = floatval($rangeParts[1]);
                            $q->orWhereBetween('price', [$min, $max]);
                        }
                    }
                }
            });
        }

        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        if (!empty($selectedCategories)) {
            $query->whereHas('category', function ($q) use ($selectedCategories) {
                $q->whereIn('slug', $selectedCategories);
            });
        }

        if ($onsale === 'yes') {
            $query->whereNotNull('old_price')
                ->where('old_price', '>', 0)
                ->whereColumn('old_price', '>', 'price');
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('sku', 'LIKE', "%{$search}%")
                    ->orWhere('short_description', 'LIKE', "%{$search}%");
            });
        }

        if ($search2) {
            $query->where(function ($q) use ($search2) {
                $q->where('name', 'LIKE', "%{$search2}%")
                    ->orWhere('sku', 'LIKE', "%{$search2}%")
                    ->orWhere('short_description', 'LIKE', "%{$search2}%");
            });
        }

        switch ($sort) {
            case 'price-asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            case 'name-asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name-desc':
                $query->orderBy('name', 'desc');
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->orderBy('name');
                break;
        }

        $articles = $query->paginate($perPage)->withQueryString();

        $onsaleCount = Article::whereNotNull('old_price')
            ->where('old_price', '>', 0)
            ->whereColumn('old_price', '>', 'price')
            ->count();

        $totalProducts = Article::count();

        return view('front.pages.shop', compact(
            'articles',
            'categories',
            'totalProducts',
            'onsaleCount',
            'minPrice',
            'maxPrice',
            'selectedPriceRanges',
            'category',
            'onsale',
            'perPage',
            'search',
            'search2',
            'selectedCategories',
            'sort'
        ));
    }

    public function about()
    {
        return view('front.pages.about');
    }

    /**
     * API pour le filtre de prix AJAX
     */
    public function filterByPrice(Request $request)
    {
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');

        $query = Article::query();

        if ($minPrice !== null && $minPrice !== '') {
            $query->where('price', '>=', floatval($minPrice));
        }
        if ($maxPrice !== null && $maxPrice !== '') {
            $query->where('price', '<=', floatval($maxPrice));
        }

        $count = $query->count();

        return response()->json(['count' => $count]);
    }

    public function faq()
    {
        return view('front.pages.faq');
    }

    public function contato()
    {
        return view('front.pages.contact');
    }

    public function legalNotice()
    {
        return view('front.legal.legal-notice');
    }

    public function privacyPolicy()
    {
        return view('front.legal.privacy-policy');
    }

    public function termsConditions()
    {
        return view('front.legal.terms-conditions');
    }

    public function deliveryPolicy()
    {
        return view('front.legal.delivery-policy');
    }

    public function refundPolicy()
    {
        return view('front.legal.refund-policy');
    }

    public function paymentPolicy()
    {
        return view('front.legal.payment-policy');
    }

    public function switchLangue(Request $request, $locale)
    {
        $allowedLocales = ['fr', 'en', 'it', 'pt', 'es'];

        if (!in_array($locale, $allowedLocales)) {
            abort(400);
        }

        // Stocker dans la session
        Session::put('locale', $locale);

        // Définir la locale pour cette requête
        App::setLocale($locale);

        // Créer un cookie (5 ans)
        $cookie = Cookie::make('locale', $locale, 60 * 24 * 365 * 5);

        // Rediriger
        return redirect()->back()->withCookie($cookie);
    }
}
