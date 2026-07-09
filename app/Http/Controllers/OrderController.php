<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Order;
use App\Support\Countries;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Page panier (le contenu est rendu côté client depuis localStorage).
     */
    public function cart()
    {
        return view('front.cart');
    }

    /**
     * Page de validation de commande.
     */
    public function checkout()
    {
        $countries = Countries::all();

        return view('front.checkout', compact('countries'));
    }

    /**
     * Enregistre la commande, envoie les emails et renvoie l'URL de confirmation.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name'        => 'required|string|max:255',
            'email'                => 'required|email|max:255',
            'phone'                => 'required|string|max:50',
            'country'              => 'required|string|max:100',
            'region'               => 'nullable|string|max:100',
            'city'                 => 'nullable|string|max:100',
            'postal_code'          => 'nullable|string|max:30',
            'address'              => 'required|string|max:500',
            'notes'                => 'nullable|string|max:2000',
            'ship_to_different'    => 'nullable|boolean',
            'shipping_name'        => 'nullable|string|max:255',
            'shipping_country'     => 'nullable|string|max:100',
            'shipping_region'      => 'nullable|string|max:100',
            'shipping_city'        => 'nullable|string|max:100',
            'shipping_postal_code' => 'nullable|string|max:30',
            'shipping_address'     => 'nullable|string|max:500',
            'items'                => 'required|string',
        ]);

        $shipDifferent = $request->boolean('ship_to_different');

        if ($shipDifferent) {
            $request->validate([
                'shipping_name'    => 'required|string|max:255',
                'shipping_country' => 'required|string|max:100',
                'shipping_address' => 'required|string|max:500',
            ]);
        }

        // Décoder le panier envoyé par le client
        $rawItems = json_decode($request->input('items'), true);

        if (!is_array($rawItems) || count($rawItems) === 0) {
            return response()->json([
                'success' => false,
                'message' => __('Votre panier est vide.'),
            ], 422);
        }

        // Reconstruire les lignes depuis la base (prix/nom faisant autorité)
        $ids = collect($rawItems)->pluck('id')->filter()->unique()->values();
        $articles = Article::with('category')->whereIn('id', $ids)->get()->keyBy('id');

        $lines = [];
        $subtotal = 0;

        foreach ($rawItems as $item) {
            $id = $item['id'] ?? null;
            $qty = max(1, (int) ($item['quantity'] ?? 1));

            if (!$id || !$articles->has($id)) {
                continue;
            }

            $article = $articles->get($id);
            $price = (float) $article->price;
            $lineTotal = $price * $qty;
            $subtotal += $lineTotal;

            $lines[] = [
                'article_id' => $article->id,
                'name'       => $article->name,
                'sku'        => $article->sku,
                'slug'       => $article->slug,
                'price'      => $price,
                'quantity'   => $qty,
                'line_total' => $lineTotal,
            ];
        }

        if (count($lines) === 0) {
            return response()->json([
                'success' => false,
                'message' => __('Les produits du panier ne sont plus disponibles.'),
            ], 422);
        }

        $total = $subtotal;

        try {
            $order = DB::transaction(function () use ($validated, $shipDifferent, $request, $lines, $subtotal, $total) {
                $order = Order::create([
                    'order_number'         => $this->generateOrderNumber(),
                    'status'               => 'pending',
                    'customer_name'        => $validated['customer_name'],
                    'email'                => $validated['email'],
                    'phone'                => $validated['phone'],
                    'country'              => $validated['country'],
                    'region'               => $validated['region'] ?? null,
                    'city'                 => $validated['city'] ?? null,
                    'postal_code'          => $validated['postal_code'] ?? null,
                    'address'              => $validated['address'],
                    'notes'                => $validated['notes'] ?? null,
                    'ship_to_different'    => $shipDifferent,
                    'shipping_name'        => $shipDifferent ? $request->input('shipping_name') : null,
                    'shipping_country'     => $shipDifferent ? $request->input('shipping_country') : null,
                    'shipping_region'      => $shipDifferent ? $request->input('shipping_region') : null,
                    'shipping_city'        => $shipDifferent ? $request->input('shipping_city') : null,
                    'shipping_postal_code' => $shipDifferent ? $request->input('shipping_postal_code') : null,
                    'shipping_address'     => $shipDifferent ? $request->input('shipping_address') : null,
                    'subtotal'             => $subtotal,
                    'total'                => $total,
                    'locale'               => app()->getLocale(),
                ]);

                $order->items()->createMany($lines);

                return $order;
            });

            $order->load('items');

            $this->sendOrderEmails($order);

            return response()->json([
                'success'  => true,
                'message'  => __('Votre commande a bien été enregistrée.'),
                'redirect' => route('order.confirmation', $order->order_number),
            ]);
        } catch (Exception $e) {
            Log::error('Erreur création commande: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => __("Une erreur est survenue lors de l'enregistrement de votre commande. Veuillez réessayer."),
            ], 500);
        }
    }

    /**
     * Page de confirmation de commande.
     */
    public function confirmation(string $orderNumber)
    {
        $order = Order::with('items')->where('order_number', $orderNumber)->firstOrFail();

        return view('front.confirmation', compact('order'));
    }

    private function generateOrderNumber(): string
    {
        do {
            $number = 'CMD-' . date('Ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));
        } while (Order::where('order_number', $number)->exists());

        return $number;
    }

    private function sendOrderEmails(Order $order): void
    {
        $adminAddress = config('mail.admin_address', config('mail.from.address'));

        try {
            // Email à l'administrateur
            Mail::send('emails.order-admin', ['order' => $order], function ($message) use ($order, $adminAddress) {
                $message->to($adminAddress)
                    ->subject(__('Nouvelle commande') . ' #' . $order->order_number)
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($order->email, $order->customer_name);
            });

            // Email de confirmation au client
            Mail::send('emails.order-confirmation', ['order' => $order], function ($message) use ($order) {
                $message->to($order->email, $order->customer_name)
                    ->subject(__('Confirmation de votre commande') . ' #' . $order->order_number)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });
        } catch (Exception $e) {
            // On n'interrompt pas la commande si l'email échoue, mais on le journalise.
            Log::error('Erreur envoi email commande ' . $order->order_number . ': ' . $e->getMessage());
        }
    }
}
