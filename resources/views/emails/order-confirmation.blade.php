<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Confirmation de votre commande') }} #{{ $order->order_number }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #2d3748; max-width: 640px; margin: 0 auto; padding: 20px; background-color: #f4f6f9; }
        .email-container { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: #fff; padding: 32px 20px; text-align: center; }
        .header img { max-width: 170px; height: auto; margin-bottom: 12px; }
        .header h2 { margin: 8px 0 5px; font-size: 26px; font-weight: 700; }
        .order-badge { display: inline-block; background: rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 50px; font-size: 14px; margin-top: 8px; border: 1px solid rgba(255,255,255,0.3); }
        .content { padding: 38px 32px; }
        .greeting { font-size: 18px; margin-bottom: 16px; color: #1e3c72; font-weight: 600; }
        .summary-title { font-size: 16px; color: #1e3c72; font-weight: 700; margin: 26px 0 14px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0; }
        table.items { width: 100%; border-collapse: collapse; }
        table.items th { text-align: left; font-size: 12px; text-transform: uppercase; color: #64748b; padding: 8px; border-bottom: 2px solid #e2e8f0; }
        table.items td { padding: 12px 8px; border-bottom: 1px solid #edf2f7; font-size: 14px; }
        table.items td.r, table.items th.r { text-align: right; }
        .total-row td { font-size: 18px; font-weight: 800; color: #1e3c72; border-top: 2px solid #1e3c72; }
        .info-box { background: #ebf8ff; padding: 18px; border-radius: 8px; margin: 22px 0; border: 1px solid #bee3f8; }
        .info-title { color: #2c5282; font-weight: 700; margin-bottom: 8px; font-size: 15px; }
        .next-steps { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 22px; margin: 22px 0; }
        .button-container { text-align: center; margin: 30px 0 10px; }
        .shop-btn { display: inline-block; padding: 14px 32px; background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: #fff; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 15px; }
        .footer { padding: 26px 32px; background: #f8fafc; border-top: 1px solid #e9ecef; font-size: 13px; color: #718096; text-align: center; }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <img src="{{ asset('/assets/uploads/2024/07/PORTABOX-SOLUTION-2560x822-1.png') }}" alt="{{ config('app.name') }}">
        <h2>✅ {{ __('Commande confirmée') }}</h2>
        <div class="order-badge">{{ __('Commande') }} : <strong>#{{ $order->order_number }}</strong></div>
    </div>

    <div class="content">
        <div class="greeting">{{ __('Bonjour') }} {{ $order->customer_name }},</div>
        <p style="font-size: 15px; color: #4a5568;">
            {{ __('Nous avons bien reçu votre commande et nous vous en remercions. Voici le récapitulatif :') }}
        </p>

        <div class="summary-title">🛍️ {{ __('Récapitulatif de la commande') }}</div>
        <table class="items">
            <thead>
                <tr>
                    <th>{{ __('Produit') }}</th>
                    <th class="r">{{ __('Prix') }}</th>
                    <th class="r">{{ __('Qté') }}</th>
                    <th class="r">{{ __('Total') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    <tr>
                        <td>{{ $item->name }}@if ($item->sku)<br><small style="color:#94a3b8;">{{ __('Réf.') }} {{ $item->sku }}</small>@endif</td>
                        <td class="r">{{ number_format($item->price, 2) }} €</td>
                        <td class="r">{{ $item->quantity }}</td>
                        <td class="r">{{ number_format($item->line_total, 2) }} €</td>
                    </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="3" class="r">{{ __('Total') }}</td>
                    <td class="r">{{ number_format($order->total, 2) }} €</td>
                </tr>
            </tbody>
        </table>

        <div class="info-box">
            <div class="info-title">📍 {{ __('Adresse de livraison') }}</div>
            <p style="margin: 0; color: #2d3748;">
                @if ($order->ship_to_different)
                    {{ $order->shipping_name }}<br>
                    {{ $order->shipping_address }}<br>
                    @if ($order->shipping_postal_code || $order->shipping_city){{ $order->shipping_postal_code }} {{ $order->shipping_city }}<br>@endif
                    @if ($order->shipping_region){{ $order->shipping_region }}, @endif{{ $order->shipping_country }}
                @else
                    {{ $order->customer_name }}<br>
                    {{ $order->address }}<br>
                    @if ($order->postal_code || $order->city){{ $order->postal_code }} {{ $order->city }}<br>@endif
                    @if ($order->region){{ $order->region }}, @endif{{ $order->country }}
                @endif
            </p>
        </div>

        <div class="next-steps">
            <div class="info-title">📬 {{ __('Prochaines étapes') }}</div>
            <ul style="margin: 0; padding-left: 20px; color: #2d3748;">
                <li>{{ __('Notre équipe examine votre commande.') }}</li>
                <li>{{ __('Un conseiller vous contactera pour finaliser le paiement et la livraison.') }}</li>
                <li>{{ __('Vous recevrez les informations de suivi dès l\'expédition.') }}</li>
            </ul>
        </div>

        <p style="font-size: 17px; color: #1e3c72; text-align: center; margin: 26px 0;">{{ __('Merci de votre confiance !') }}</p>

        <div class="button-container">
            <a href="{{ route('shop') }}" class="shop-btn">🛍️ {{ __('Continuer mes achats') }}</a>
        </div>
    </div>

    <div class="footer">
        <strong style="color:#1e3c72;">{{ config('app.name') }}</strong><br>
        📧 {{ config('mail.from.address') }}<br>
        © {{ date('Y') }} {{ config('app.name') }}. {{ __('Tous droits réservés.') }}
    </div>
</div>
</body>
</html>
