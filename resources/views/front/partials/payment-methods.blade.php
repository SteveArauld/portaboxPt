@php
    // Moyens de paiement du marché correspondant à la langue affichée :
    // Multibanco et MB WAY au Portugal, virement nommé selon l'usage local
    // ailleurs. La liste vit dans config/locales.php.
    // Logos officiels SIBS en version blanche : ils exigent un fond sombre.
    $pbsPayments = config('locales.payment_methods.' . app()->getLocale())
        ?? config('locales.payment_methods.' . config('locales.default'), []);

    $showTitle = $showTitle ?? true;
    $align     = $align ?? 'left';
@endphp

@once
    <style>
        .pbs-payments { margin-top: 18px; }
        .pbs-payments-title {
            font-size: 13px; font-weight: 700; text-transform: uppercase;
            letter-spacing: .04em; color: inherit; opacity: .85; margin: 0 0 10px;
        }
        .pbs-payments-list {
            list-style: none; margin: 0; padding: 0;
            display: flex; flex-wrap: wrap; gap: 8px;
        }
        .pbs-payments-list li {
            display: flex; align-items: center; justify-content: center;
            width: 62px; height: 34px; padding: 0 7px;
            background: #1a1a1a; border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, .14);
        }
        .pbs-payments-list img {
            max-width: 100%; max-height: 17px;
            width: auto; height: auto; display: block;
        }
        .pbs-payments.is-center { text-align: center; }
        .pbs-payments.is-center .pbs-payments-list { justify-content: center; }
    </style>
@endonce

<div class="pbs-payments {{ $align === 'center' ? 'is-center' : '' }}">
    @if ($showTitle)
        <p class="pbs-payments-title">{{ __('payments.title') }}</p>
    @endif
    <ul class="pbs-payments-list" role="list">
        @foreach ($pbsPayments as $pbsMethod)
            <li>
                <img src="{{ asset('assets/images/payments/' . $pbsMethod['icon'] . '.svg') }}"
                     loading="lazy" alt="{{ $pbsMethod['label'] }}" title="{{ $pbsMethod['label'] }}">
            </li>
        @endforeach
    </ul>
</div>
