@extends('layouts.app')

@section('title', __('Commande confirmée'))

@push('styles')
    <style>
        .pbs-conf-wrap { max-width: 820px; margin: 0 auto; padding: 50px 20px 80px; }
        .pbs-conf-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #fff; border-radius: 18px; padding: 48px 30px; text-align: center;
            box-shadow: 0 18px 50px rgba(30,60,114,0.25); margin-bottom: 30px;
        }
        .pbs-conf-check {
            width: 88px; height: 88px; margin: 0 auto 20px; border-radius: 50%;
            background: rgba(255,255,255,0.18); display: flex; align-items: center; justify-content: center;
            font-size: 46px; border: 3px solid rgba(255,255,255,0.4);
        }
        .pbs-conf-hero h1 { margin: 0 0 10px; font-size: 30px; font-weight: 800; color: #fff; }
        .pbs-conf-hero p { margin: 0; font-size: 17px; opacity: 0.92; }
        .pbs-conf-badge {
            display: inline-block; margin-top: 18px; background: rgba(255,255,255,0.2);
            padding: 10px 24px; border-radius: 50px; font-weight: 700; letter-spacing: 0.5px;
            border: 1px solid rgba(255,255,255,0.3);
        }
        .pbs-conf-card { background: #fff; border: 1px solid #eef0f3; border-radius: 14px; padding: 28px; margin-bottom: 24px; }
        .pbs-conf-card h3 {
            margin: 0 0 18px; font-size: 18px; font-weight: 700; color: #2c3e50;
            padding-bottom: 12px; border-bottom: 2px solid #f0f2f5;
        }
        .pbs-conf-item { display: flex; gap: 14px; padding: 14px 0; border-bottom: 1px solid #f0f2f5; align-items: center; }
        .pbs-conf-item:last-child { border-bottom: none; }
        .pbs-conf-item .n { font-weight: 600; color: #2c3e50; }
        .pbs-conf-item .meta { font-size: 13px; color: #94a3b8; margin-top: 3px; }
        .pbs-conf-item .lt { margin-left: auto; font-weight: 700; color: #c6213b; white-space: nowrap; }
        .pbs-conf-total { display: flex; justify-content: space-between; margin-top: 18px; padding-top: 16px; border-top: 2px solid #eef0f3; font-size: 20px; font-weight: 800; color: #2c3e50; }
        .pbs-conf-total strong { color: #c6213b; }
        .pbs-info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .pbs-info-block { background: #f8fafc; border: 1px solid #eef0f3; border-radius: 10px; padding: 18px; }
        .pbs-info-block .lbl { font-size: 12px; text-transform: uppercase; color: #94a3b8; letter-spacing: 0.5px; margin-bottom: 8px; }
        .pbs-info-block .val { color: #2c3e50; line-height: 1.6; }
        .pbs-conf-actions { text-align: center; margin-top: 10px; }
        .pbs-conf-actions .pbs-btn { display: inline-block; width: auto; padding: 14px 40px; }
        @media (max-width: 700px) { .pbs-info-grid { grid-template-columns: 1fr; } }
    </style>
@endpush

@section('content')
    <div id="main" class="wrapper">
        <div class="pbs-conf-wrap">
            <div class="pbs-conf-hero">
                <div class="pbs-conf-check"><i class="fas fa-check"></i></div>
                <h1>{{ __('Merci pour votre commande !') }}</h1>
                <p>{{ __('Votre commande a bien été enregistrée. Un email de confirmation vous a été envoyé.') }}</p>
                <div class="pbs-conf-badge">{{ __('Commande') }} #{{ $order->order_number }}</div>
            </div>

            <div class="pbs-conf-card">
                <h3><i class="fas fa-receipt"></i> {{ __('Détails de la commande') }}</h3>
                @foreach ($order->items as $item)
                    <div class="pbs-conf-item">
                        <div>
                            <div class="n">{{ $item->name }}</div>
                            <div class="meta">
                                @if ($item->sku){{ __('Réf.') }} {{ $item->sku }} · @endif
                                {{ __('Qté') }}: {{ $item->quantity }} × {{ number_format($item->price, 2) }} €
                            </div>
                        </div>
                        <div class="lt">{{ number_format($item->line_total, 2) }} €</div>
                    </div>
                @endforeach
                <div class="pbs-conf-total">
                    <span>{{ __('Total') }}</span>
                    <strong>{{ number_format($order->total, 2) }} €</strong>
                </div>
            </div>

            <div class="pbs-conf-card">
                <h3><i class="fas fa-clipboard-list"></i> {{ __('Vos informations') }}</h3>
                <div class="pbs-info-grid">
                    <div class="pbs-info-block">
                        <div class="lbl">{{ __('Coordonnées') }}</div>
                        <div class="val">
                            {{ $order->customer_name }}<br>
                            {{ $order->email }}<br>
                            {{ $order->phone }}
                        </div>
                    </div>
                    <div class="pbs-info-block">
                        <div class="lbl">{{ __('Adresse de facturation') }}</div>
                        <div class="val">
                            {{ $order->address }}<br>
                            @if ($order->postal_code || $order->city){{ $order->postal_code }} {{ $order->city }}<br>@endif
                            @if ($order->region){{ $order->region }}, @endif{{ $order->country }}
                        </div>
                    </div>
                    @if ($order->ship_to_different)
                        <div class="pbs-info-block" style="grid-column: 1 / -1;">
                            <div class="lbl"><i class="fas fa-truck"></i> {{ __('Adresse de livraison') }}</div>
                            <div class="val">
                                {{ $order->shipping_name }}<br>
                                {{ $order->shipping_address }}<br>
                                @if ($order->shipping_postal_code || $order->shipping_city){{ $order->shipping_postal_code }} {{ $order->shipping_city }}<br>@endif
                                @if ($order->shipping_region){{ $order->shipping_region }}, @endif{{ $order->shipping_country }}
                            </div>
                        </div>
                    @endif
                    @if ($order->notes)
                        <div class="pbs-info-block" style="grid-column: 1 / -1;">
                            <div class="lbl"><i class="fas fa-pen"></i> {{ __('Notes') }}</div>
                            <div class="val">{{ $order->notes }}</div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="pbs-conf-actions">
                <a href="{{ route('shop') }}" class="pbs-btn pbs-btn-primary">{{ __('Continuer mes achats') }}</a>
            </div>
        </div>
    </div>
@endsection
