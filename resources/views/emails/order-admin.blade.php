<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Nouvelle commande') }} #{{ $order->order_number }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #2d3748; max-width: 640px; margin: 0 auto; padding: 20px; background-color: #f4f6f9; }
        .email-container { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #2c3e50 0%, #c6213b 100%); color: #fff; padding: 30px 20px; text-align: center; }
        .header img { max-width: 170px; height: auto; margin-bottom: 12px; }
        .badge { display: inline-block; background: rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 50px; font-size: 13px; margin-bottom: 8px; border: 1px solid rgba(255,255,255,0.3); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }
        .header h2 { margin: 8px 0 0; font-size: 24px; font-weight: 700; }
        .content { padding: 35px 30px; }
        .alert { background: #fef2f2; border: 1px solid #fee2e2; border-radius: 8px; padding: 14px 18px; margin-bottom: 28px; color: #991b1b; font-weight: 600; }
        .section-title { font-size: 16px; color: #2c3e50; font-weight: 700; margin: 28px 0 16px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0; }
        table.items { width: 100%; border-collapse: collapse; }
        table.items th { text-align: left; font-size: 12px; text-transform: uppercase; color: #64748b; padding: 8px; border-bottom: 2px solid #e2e8f0; }
        table.items td { padding: 12px 8px; border-bottom: 1px solid #edf2f7; font-size: 14px; }
        table.items td.r, table.items th.r { text-align: right; }
        .total-row td { font-size: 18px; font-weight: 800; color: #c6213b; border-top: 2px solid #2c3e50; }
        .info-grid { width: 100%; }
        .info-grid td { vertical-align: top; padding: 6px 10px 6px 0; }
        .info-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px; margin-bottom: 18px; }
        .lbl { font-size: 12px; text-transform: uppercase; color: #64748b; letter-spacing: 0.5px; display: block; margin-bottom: 4px; }
        .val { font-size: 15px; color: #2c3e50; font-weight: 600; }
        .footer { padding: 24px 30px; background: #f8fafc; border-top: 1px solid #e9ecef; font-size: 13px; color: #718096; text-align: center; }
    </style>
</head>
<body>
<div class="email-container">
    <div class="header">
        <img src="{{ asset('/assets/uploads/2024/07/PORTABOX-SOLUTION-2560x822-1.png') }}" alt="{{ config('app.name') }}">
        <div class="badge">🔔 {{ __('Notification administrateur') }}</div>
        <h2>📦 {{ __('Nouvelle commande') }} #{{ $order->order_number }}</h2>
    </div>

    <div class="content">
        <div class="alert">⚠️ {{ __('Une nouvelle commande vient d\'être passée sur le site.') }}</div>

        <div class="section-title">👤 {{ __('Informations client') }}</div>
        <div class="info-card">
            <table class="info-grid">
                <tr>
                    <td><span class="lbl">{{ __('Nom complet') }}</span><span class="val">{{ $order->customer_name }}</span></td>
                    <td><span class="lbl">{{ __('Email') }}</span><span class="val">{{ $order->email }}</span></td>
                </tr>
                <tr>
                    <td><span class="lbl">{{ __('Téléphone') }}</span><span class="val">{{ $order->phone }}</span></td>
                    <td><span class="lbl">{{ __('Date') }}</span><span class="val">{{ $order->created_at->format('d/m/Y H:i') }}</span></td>
                </tr>
            </table>
        </div>

        <div class="section-title">📍 {{ __('Adresse de facturation') }}</div>
        <div class="info-card">
            <span class="val">
                {{ $order->address }}<br>
                @if ($order->postal_code || $order->city){{ $order->postal_code }} {{ $order->city }}<br>@endif
                @if ($order->region){{ $order->region }}, @endif{{ $order->country }}
            </span>
        </div>

        @if ($order->ship_to_different)
            <div class="section-title">🚚 {{ __('Adresse de livraison') }}</div>
            <div class="info-card">
                <span class="val">
                    {{ $order->shipping_name }}<br>
                    {{ $order->shipping_address }}<br>
                    @if ($order->shipping_postal_code || $order->shipping_city){{ $order->shipping_postal_code }} {{ $order->shipping_city }}<br>@endif
                    @if ($order->shipping_region){{ $order->shipping_region }}, @endif{{ $order->shipping_country }}
                </span>
            </div>
        @endif

        <div class="section-title">🛍️ {{ __('Produits commandés') }}</div>
        <table class="items">
            <thead>
                <tr>
                    <th>{{ __('Produit') }}</th>
                    <th>{{ __('Réf.') }}</th>
                    <th class="r">{{ __('Prix') }}</th>
                    <th class="r">{{ __('Qté') }}</th>
                    <th class="r">{{ __('Total') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->sku ?: '—' }}</td>
                        <td class="r">{{ number_format($item->price, 2) }} €</td>
                        <td class="r">{{ $item->quantity }}</td>
                        <td class="r">{{ number_format($item->line_total, 2) }} €</td>
                    </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="4" class="r">{{ __('Total') }}</td>
                    <td class="r">{{ number_format($order->total, 2) }} €</td>
                </tr>
            </tbody>
        </table>

        @if ($order->notes)
            <div class="section-title">📝 {{ __('Notes du client') }}</div>
            <div class="info-card"><span class="val" style="font-weight: 400; font-style: italic;">"{{ $order->notes }}"</span></div>
        @endif
    </div>

    <div class="footer">
        <strong style="color:#2c3e50;">{{ config('app.name') }}</strong><br>
        ⚡ {{ __('Notification automatique — Action requise') }}
    </div>
</div>
</body>
</html>
