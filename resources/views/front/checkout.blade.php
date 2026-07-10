@extends('layouts.app')

@section('title', __('Validation de la commande'))

@push('styles')
    <style>
        .pbs-page { max-width: 1200px; margin: 0 auto; padding: 40px 20px 70px; }
        .pbs-page-title { font-size: 30px; font-weight: 800; color: #2c3e50; margin-bottom: 30px; }
        .pbs-checkout-layout { display: grid; grid-template-columns: 1fr 400px; gap: 30px; align-items: start; }

        .pbs-card {
            background: #fff; border: 1px solid #eef0f3; border-radius: 14px;
            padding: 28px; margin-bottom: 24px;
        }
        .pbs-card h3 {
            margin: 0 0 22px; font-size: 18px; font-weight: 700; color: #2c3e50;
            padding-bottom: 12px; border-bottom: 2px solid #f0f2f5;
            display: flex; align-items: center; gap: 8px;
        }
        .pbs-field-row { display: flex; gap: 18px; flex-wrap: wrap; margin-bottom: 18px; }
        .pbs-field { flex: 1; min-width: 200px; }
        .pbs-field.full { flex: 0 0 100%; }
        .pbs-field label { display: block; margin-bottom: 7px; font-weight: 600; color: #475569; font-size: 14px; }
        .pbs-field label .req { color: #c6213b; }
        .pbs-field input, .pbs-field select, .pbs-field textarea {
            width: 100%; padding: 12px 14px; border: 1px solid #e2e8f0;
            border-radius: 9px; font-size: 14px; transition: all 0.2s; background: #fff;
            box-sizing: border-box;
        }
        .pbs-field input:focus, .pbs-field select:focus, .pbs-field textarea:focus {
            outline: none; border-color: #c6213b; box-shadow: 0 0 0 3px rgba(198,33,59,0.08);
        }
        .pbs-field textarea { min-height: 90px; resize: vertical; }
        .pbs-field .err { color: #c6213b; font-size: 12px; margin-top: 5px; display: none; }
        .pbs-field input.invalid, .pbs-field select.invalid { border-color: #c6213b; }

        .pbs-check-wrap {
            display: flex; align-items: center; gap: 12px; padding: 16px;
            background: #f8fafc; border: 1px solid #eef0f3; border-radius: 10px; cursor: pointer;
        }
        .pbs-check-wrap input { width: 20px; height: 20px; accent-color: #c6213b; cursor: pointer; }
        .pbs-check-wrap span { font-weight: 600; color: #2c3e50; }

        #pbs-shipping-fields { margin-top: 22px; display: none; }
        #pbs-shipping-fields.open { display: block; animation: pbsFade 0.3s ease; }
        @keyframes pbsFade { from { opacity: 0; transform: translateY(-8px); } to { opacity: 1; transform: translateY(0); } }

        .pbs-summary { background: #fff; border: 1px solid #eef0f3; border-radius: 14px; padding: 26px; position: sticky; top: 20px; }
        .pbs-summary h3 { margin: 0 0 18px; font-size: 18px; font-weight: 700; color: #2c3e50; }
        .pbs-sum-item { display: flex; gap: 12px; padding: 12px 0; border-bottom: 1px solid #f0f2f5; }
        .pbs-sum-item img { width: 54px; height: 54px; object-fit: cover; border-radius: 8px; border: 1px solid #eef0f3; }
        .pbs-sum-item .n { font-size: 13px; font-weight: 600; color: #2c3e50; line-height: 1.3; }
        .pbs-sum-item .q { font-size: 12px; color: #94a3b8; margin-top: 3px; }
        .pbs-sum-item .p { margin-left: auto; font-weight: 700; color: #c6213b; white-space: nowrap; font-size: 13px; }
        .pbs-summary-total {
            display: flex; justify-content: space-between; align-items: center;
            margin-top: 16px; padding-top: 16px; border-top: 2px solid #eef0f3;
            font-size: 18px; font-weight: 700; color: #2c3e50;
        }
        .pbs-summary-total strong { font-size: 24px; color: #c6213b; }
        .pbs-place-order { margin-top: 20px; }
        .pbs-place-order:disabled { opacity: 0.6; cursor: not-allowed; }
        .pbs-alert {
            display: none; padding: 14px 18px; border-radius: 10px; margin-bottom: 20px;
            background: #fef2f2; color: #991b1b; border: 1px solid #fee2e2; font-weight: 600;
        }
        .pbs-spinner {
            display: inline-block; width: 18px; height: 18px; border: 3px solid rgba(255,255,255,.4);
            border-top-color: #fff; border-radius: 50%; animation: pbsspin 0.8s linear infinite;
            vertical-align: middle; margin-right: 8px;
        }
        @keyframes pbsspin { to { transform: rotate(360deg); } }

        @media (max-width: 900px) {
            .pbs-checkout-layout { grid-template-columns: 1fr; }
            .pbs-summary { position: static; }
        }
    </style>
@endpush

@section('content')
    <div id="main" class="wrapper">
        <div class="breadcrumb-title-wrapper breadcrumb-v3">
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 class="heading-title page-title entry-title">{{ __('Finalizar compra') }}</h1>
                    <div class="ts-breadcrumbs breadcrumbs">
                        <div class="breadcrumbs-container">
                            <a href="{{ url('/') }}">{{ __('Início') }}</a>
                            <span class="brn_arrow">/</span>
                            <a href="{{ route('cart') }}">{{ __('Meu carrinho') }}</a>
                            <span class="brn_arrow">/</span>
                            <span>{{ __('Pedido') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pbs-page">
            <div id="pbs-checkout-empty" style="display:none;">
                <div style="text-align:center; padding:80px 20px; background:#fff; border:1px solid #eef0f3; border-radius:14px;">
                    <div style="font-size:64px; margin-bottom:16px; color:#c6213b;"><i class="fas fa-cart-shopping"></i></div>
                    <p style="color:#94a3b8; font-size:17px; margin-bottom:24px;">{{ __('Seu carrinho está vazio.') }}</p>
                    <a href="{{ route('shop') }}" class="pbs-btn pbs-btn-primary" style="display:inline-block; width:auto; padding:14px 40px;">{{ __('Descubra nossos produtos') }}</a>
                </div>
            </div>

            <form id="pbs-checkout-form" class="pbs-checkout-layout" style="display:none;" novalidate>
                @csrf
                <input type="hidden" name="items" id="pbs-items-field">

                <div>
                    <div class="pbs-alert" id="pbs-checkout-alert"></div>

                    <div class="pbs-card">
                        <h3><i class="fas fa-user"></i> {{ __('Vos coordonnées') }}</h3>
                        <div class="pbs-field-row">
                            <div class="pbs-field">
                                <label>{{ __('Nom complet') }} <span class="req">*</span></label>
                                <input type="text" name="customer_name" required>
                                <div class="err" data-err="customer_name"></div>
                            </div>
                            <div class="pbs-field">
                                <label>{{ __('Email') }} <span class="req">*</span></label>
                                <input type="email" name="email" required>
                                <div class="err" data-err="email"></div>
                            </div>
                        </div>
                        <div class="pbs-field-row">
                            <div class="pbs-field">
                                <label>{{ __('Téléphone') }} (WhatsApp) <span class="req">*</span></label>
                                <input type="tel" name="phone" placeholder="+33612345678" required>
                                <div class="err" data-err="phone"></div>
                            </div>
                        </div>
                    </div>

                    <div class="pbs-card">
                        <h3><i class="fas fa-location-dot"></i> {{ __('Adresse de facturation') }}</h3>
                        <div class="pbs-field-row">
                            <div class="pbs-field">
                                <label>{{ __('Pays') }} <span class="req">*</span></label>
                                <select name="country" required>
                                    <option value="">{{ __('Sélectionnez un pays') }}</option>
                                    @foreach ($countries as $c)
                                        <option value="{{ $c['name'] }}">{{ $c['name'] }}</option>
                                    @endforeach
                                </select>
                                <div class="err" data-err="country"></div>
                            </div>
                            <div class="pbs-field">
                                <label>{{ __('Région / Province') }}</label>
                                <input type="text" name="region">
                            </div>
                        </div>
                        <div class="pbs-field-row">
                            <div class="pbs-field">
                                <label>{{ __('Ville') }}</label>
                                <input type="text" name="city">
                            </div>
                            <div class="pbs-field">
                                <label>{{ __('Code postal') }}</label>
                                <input type="text" name="postal_code">
                            </div>
                        </div>
                        <div class="pbs-field-row">
                            <div class="pbs-field full">
                                <label>{{ __('Adresse') }} <span class="req">*</span></label>
                                <input type="text" name="address" placeholder="{{ __('Rue, numéro, complément...') }}" required>
                                <div class="err" data-err="address"></div>
                            </div>
                        </div>
                    </div>

                    <div class="pbs-card">
                        <label class="pbs-check-wrap">
                            <input type="checkbox" name="ship_to_different" id="pbs-ship-diff" value="1">
                            <span><i class="fas fa-truck"></i> {{ __('Livrer à une adresse différente') }}</span>
                        </label>

                        <div id="pbs-shipping-fields">
                            <h3 style="margin-top:24px;"><i class="fas fa-box"></i> {{ __('Adresse de livraison') }}</h3>
                            <div class="pbs-field-row">
                                <div class="pbs-field">
                                    <label>{{ __('Nom du destinataire') }} <span class="req">*</span></label>
                                    <input type="text" name="shipping_name">
                                    <div class="err" data-err="shipping_name"></div>
                                </div>
                                <div class="pbs-field">
                                    <label>{{ __('Pays') }} <span class="req">*</span></label>
                                    <select name="shipping_country">
                                        <option value="">{{ __('Sélectionnez un pays') }}</option>
                                        @foreach ($countries as $c)
                                            <option value="{{ $c['name'] }}">{{ $c['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <div class="err" data-err="shipping_country"></div>
                                </div>
                            </div>
                            <div class="pbs-field-row">
                                <div class="pbs-field">
                                    <label>{{ __('Région / Province') }}</label>
                                    <input type="text" name="shipping_region">
                                </div>
                                <div class="pbs-field">
                                    <label>{{ __('Ville') }}</label>
                                    <input type="text" name="shipping_city">
                                </div>
                                <div class="pbs-field">
                                    <label>{{ __('Code postal') }}</label>
                                    <input type="text" name="shipping_postal_code">
                                </div>
                            </div>
                            <div class="pbs-field-row">
                                <div class="pbs-field full">
                                    <label>{{ __('Adresse de livraison') }} <span class="req">*</span></label>
                                    <input type="text" name="shipping_address">
                                    <div class="err" data-err="shipping_address"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pbs-card">
                        <h3><i class="fas fa-pen"></i> {{ __('Notes de commande') }}</h3>
                        <div class="pbs-field">
                            <textarea name="notes" placeholder="{{ __('Informations complémentaires sur votre commande ou votre livraison (facultatif)') }}"></textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="pbs-summary">
                        <h3><i class="fas fa-receipt"></i> {{ __('Seu pedido') }}</h3>
                        <div id="pbs-checkout-items"></div>
                        <div class="pbs-summary-total">
                            <span>{{ __('Total') }}</span>
                            <strong id="pbs-checkout-total">0,00 €</strong>
                        </div>
                        <button type="submit" class="pbs-btn pbs-btn-primary pbs-place-order" id="pbs-place-order-btn">
                            {{ __('Confirmar pedido') }}
                        </button>
                        <a href="{{ route('cart') }}" class="pbs-btn pbs-btn-outline">{{ __('Voltar ao carrinho') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('pbs-checkout-form');
            var emptyBox = document.getElementById('pbs-checkout-empty');
            var storeUrl = '{{ route('checkout.store') }}';
            var csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            function renderSummary() {
                var items = window.Cart.items();
                if (!items.length) {
                    form.style.display = 'none';
                    emptyBox.style.display = 'block';
                    return;
                }
                form.style.display = 'grid';
                emptyBox.style.display = 'none';

                document.getElementById('pbs-checkout-items').innerHTML = items.map(function (it) {
                    var img = it.image || 'https://via.placeholder.com/54x54?text=No+Image';
                    return '<div class="pbs-sum-item">' +
                        '<img src="' + img + '" alt="" onerror="this.src=\'https://via.placeholder.com/54x54?text=No+Image\'">' +
                        '<div><div class="n">' + it.name + '</div><div class="q">{{ __('Qté') }}: ' + it.quantity + ' × ' + window.Cart.format(it.price) + '</div></div>' +
                        '<div class="p">' + window.Cart.format(it.price * it.quantity) + '</div>' +
                        '</div>';
                }).join('');
                document.getElementById('pbs-checkout-total').textContent = window.Cart.format(window.Cart.total());
            }

            // Adresse de livraison différente
            var shipDiff = document.getElementById('pbs-ship-diff');
            var shipFields = document.getElementById('pbs-shipping-fields');
            shipDiff.addEventListener('change', function () {
                shipFields.classList.toggle('open', this.checked);
            });

            function clearErrors() {
                form.querySelectorAll('.err').forEach(function (e) { e.style.display = 'none'; e.textContent = ''; });
                form.querySelectorAll('.invalid').forEach(function (e) { e.classList.remove('invalid'); });
                document.getElementById('pbs-checkout-alert').style.display = 'none';
            }

            function showErrors(errors) {
                Object.keys(errors).forEach(function (key) {
                    var box = form.querySelector('[data-err="' + key + '"]');
                    var input = form.querySelector('[name="' + key + '"]');
                    if (box) { box.textContent = errors[key][0]; box.style.display = 'block'; }
                    if (input) input.classList.add('invalid');
                });
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();
                clearErrors();

                var items = window.Cart.items();
                if (!items.length) { renderSummary(); return; }

                document.getElementById('pbs-items-field').value = JSON.stringify(
                    items.map(function (it) { return { id: it.id, quantity: it.quantity }; })
                );

                var btn = document.getElementById('pbs-place-order-btn');
                btn.disabled = true;
                var label = btn.textContent;
                btn.innerHTML = '<span class="pbs-spinner"></span>{{ __('Traitement...') }}';

                fetch(storeUrl, {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json' },
                    body: new FormData(form)
                })
                .then(function (res) { return res.json().then(function (data) { return { status: res.status, data: data }; }); })
                .then(function (r) {
                    if (r.status === 200 && r.data.success) {
                        window.Cart.clear();
                        window.location.href = r.data.redirect;
                        return;
                    }
                    btn.disabled = false;
                    btn.textContent = label;
                    if (r.status === 422 && r.data.errors) {
                        showErrors(r.data.errors);
                    }
                    var alert = document.getElementById('pbs-checkout-alert');
                    alert.textContent = r.data.message || '{{ __('Veuillez vérifier les champs du formulaire.') }}';
                    alert.style.display = 'block';
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                })
                .catch(function () {
                    btn.disabled = false;
                    btn.textContent = label;
                    var alert = document.getElementById('pbs-checkout-alert');
                    alert.textContent = '{{ __('Une erreur réseau est survenue. Veuillez réessayer.') }}';
                    alert.style.display = 'block';
                });
            });

            document.addEventListener('cart:updated', renderSummary);
            renderSummary();
        });
    </script>
@endpush
