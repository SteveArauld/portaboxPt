@extends('layouts.app')

@section('title', __('Meu carrinho'))

@push('styles')
    <style>
        .pbs-page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px 70px;
        }
        .pbs-page-title {
            font-size: 30px;
            font-weight: 800;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        .pbs-cart-layout {
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 30px;
            align-items: start;
        }
        .pbs-cart-table {
            background: #fff;
            border: 1px solid #eef0f3;
            border-radius: 14px;
            overflow: hidden;
        }
        .pbs-cart-row {
            display: grid;
            grid-template-columns: 90px 1fr 130px 140px 40px;
            gap: 16px;
            align-items: center;
            padding: 18px 20px;
            border-bottom: 1px solid #f0f2f5;
        }
        .pbs-cart-row:last-child { border-bottom: none; }
        .pbs-cart-row img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #eef0f3;
        }
        .pbs-cart-prod-name {
            font-size: 15px;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
        }
        .pbs-cart-prod-name:hover { color: #c6213b; }
        .pbs-cart-sku { font-size: 12px; color: #94a3b8; margin-top: 4px; }
        .pbs-cart-unit { font-weight: 600; color: #475569; }
        .pbs-cart-line-total { font-weight: 700; color: #c6213b; font-size: 16px; text-align: right; }
        .pbs-cart-remove {
            background: none; border: none; color: #cbd5e1; font-size: 18px;
            cursor: pointer; transition: color 0.2s;
        }
        .pbs-cart-remove:hover { color: #c6213b; }

        .pbs-summary {
            background: #fff;
            border: 1px solid #eef0f3;
            border-radius: 14px;
            padding: 26px;
            position: sticky;
            top: 20px;
        }
        .pbs-summary h3 { margin: 0 0 18px; font-size: 18px; font-weight: 700; color: #2c3e50; }
        .pbs-summary-row {
            display: flex; justify-content: space-between;
            padding: 10px 0; color: #475569; font-size: 15px;
        }
        .pbs-summary-total {
            display: flex; justify-content: space-between; align-items: center;
            margin-top: 12px; padding-top: 16px; border-top: 2px solid #eef0f3;
            font-size: 18px; font-weight: 700; color: #2c3e50;
        }
        .pbs-summary-total strong { font-size: 24px; color: #c6213b; }
        .pbs-summary .pbs-btn { margin-top: 18px; }

        .pbs-empty-cart {
            text-align: center; padding: 80px 20px; background: #fff;
            border: 1px solid #eef0f3; border-radius: 14px;
        }
        .pbs-empty-cart .ico { font-size: 64px; margin-bottom: 16px; }
        .pbs-empty-cart p { color: #94a3b8; font-size: 17px; margin-bottom: 24px; }
        .pbs-empty-cart .pbs-btn { display: inline-block; width: auto; padding: 14px 40px; }

        @media (max-width: 900px) {
            .pbs-cart-layout { grid-template-columns: 1fr; }
            .pbs-summary { position: static; }
            .pbs-cart-row {
                grid-template-columns: 70px 1fr 36px;
                grid-template-areas:
                    "img info remove"
                    "img qty total";
                row-gap: 10px;
            }
            .pbs-cart-row img { grid-area: img; }
            .pbs-cart-row .pbs-cart-cell-info { grid-area: info; }
            .pbs-cart-row .pbs-cart-cell-qty { grid-area: qty; }
            .pbs-cart-row .pbs-cart-line-total { grid-area: total; text-align: left; }
            .pbs-cart-row .pbs-cart-remove { grid-area: remove; justify-self: end; }
            .pbs-cart-unit { display: none; }
        }
    </style>
@endpush

@section('content')
    <div id="main" class="wrapper">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title">{{ __('Meu carrinho') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ url('/') }}">{{ __('Início') }}</a>
                            <span class="brn_arrow">/</span>
                            <span>{{ __('Meu carrinho') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pbs-page">
            <div id="pbs-cart-content"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var shopUrl = '{{ route('shop') }}';
            var checkoutUrl = '{{ route('checkout') }}';

            function render() {
                var container = document.getElementById('pbs-cart-content');
                var items = window.Cart.items();

                if (!items.length) {
                    container.innerHTML =
                        '<div class="pbs-empty-cart">' +
                        '<div class="ico"><i class="fas fa-cart-shopping"></i></div>' +
                        '<p>{{ __('Seu carrinho está vazio.') }}</p>' +
                        '<a href="' + shopUrl + '" class="pbs-btn pbs-btn-primary">{{ __('Descubra nossos produtos') }}</a>' +
                        '</div>';
                    return;
                }

                var rows = items.map(function (it) {
                    var img = it.image || 'https://via.placeholder.com/80x80?text=No+Image';
                    return '<div class="pbs-cart-row" data-id="' + it.id + '">' +
                        '<img src="' + img + '" alt="" onerror="this.src=\'https://via.placeholder.com/80x80?text=No+Image\'">' +
                        '<div class="pbs-cart-cell-info">' +
                        '<a class="pbs-cart-prod-name" href="' + (it.url || '#') + '">' + it.name + '</a>' +
                        (it.sku ? '<div class="pbs-cart-sku">{{ __('cart.ref') }} ' + it.sku + '</div>' : '') +
                        '<div class="pbs-cart-unit">' + window.Cart.format(it.price) + '</div>' +
                        '</div>' +
                        '<div class="pbs-cart-cell-qty"><div class="pbs-qty">' +
                        '<button type="button" class="pbs-qty-btn" data-act="dec" data-id="' + it.id + '"><i class="fas fa-minus"></i></button>' +
                        '<span class="pbs-qty-val">' + it.quantity + '</span>' +
                        '<button type="button" class="pbs-qty-btn" data-act="inc" data-id="' + it.id + '"><i class="fas fa-plus"></i></button>' +
                        '</div></div>' +
                        '<div class="pbs-cart-line-total">' + window.Cart.format(it.price * it.quantity) + '</div>' +
                        '<button type="button" class="pbs-cart-remove" data-act="remove" data-id="' + it.id + '"><i class="fas fa-times"></i></button>' +
                        '</div>';
                }).join('');

                container.innerHTML =
                    '<div class="pbs-cart-layout">' +
                    '<div class="pbs-cart-table">' + rows + '</div>' +
                    '<div class="pbs-summary">' +
                    '<h3>{{ __('cart.summary') }}</h3>' +
                    '<div class="pbs-summary-row"><span>{{ __('cart.items') }}</span><span>' + window.Cart.count() + '</span></div>' +
                    '<div class="pbs-summary-total"><span>{{ __('Total') }}</span><strong>' + window.Cart.format(window.Cart.total()) + '</strong></div>' +
                    '<a href="' + checkoutUrl + '" class="pbs-btn pbs-btn-primary">{{ __('cart.checkout') }}</a>' +
                    '<a href="' + shopUrl + '" class="pbs-btn pbs-btn-outline">{{ __('cart.continue_shopping') }}</a>' +
                    '</div>' +
                    '</div>';
            }

            document.getElementById('pbs-cart-content').addEventListener('click', function (e) {
                var btn = e.target.closest('[data-act]');
                if (!btn) return;
                var id = btn.getAttribute('data-id');
                var act = btn.getAttribute('data-act');
                var current = window.Cart.items().find(function (it) { return String(it.id) === String(id); });
                if (act === 'inc' && current) window.Cart.setQty(id, current.quantity + 1);
                if (act === 'dec' && current) window.Cart.setQty(id, current.quantity - 1);
                if (act === 'remove') window.Cart.remove(id);
            });

            document.addEventListener('cart:updated', render);
            render();
        });
    </script>
@endpush
