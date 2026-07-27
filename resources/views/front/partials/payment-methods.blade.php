@php
    $pbsPayments = [
        'american-express'  => 'American Express',
        'apple-pay'         => 'Apple Pay',
        'bancontact'        => 'Bancontact',
        'cartes-bancaires'  => 'Cartes Bancaires',
        'eps'               => 'EPS',
        'klarna'            => 'Klarna',
        'mastercard'        => 'Mastercard',
        'mobilepay'         => 'MobilePay',
        'paypal'            => 'PayPal',
        'visa'              => 'Visa',
    ];
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
                display: flex; flex-wrap: wrap; gap: 6px;
            }
            .pbs-payments-list li { line-height: 0; }
            .pbs-payments-list img {
                width: 38px; height: 24px; display: block;
                border-radius: 3px; filter: saturate(.2); transition: filter .2s ease;
            }
            .pbs-payments-list li:hover img { filter: saturate(1); }
            .pbs-payments.is-center { text-align: center; }
            .pbs-payments.is-center .pbs-payments-list { justify-content: center; }
        </style>
@endonce

<div class="pbs-payments {{ $align === 'center' ? 'is-center' : '' }}">
    @if ($showTitle)
        <p class="pbs-payments-title">{{ __('payments.title') }}</p>
    @endif
    <ul class="pbs-payments-list" role="list">
        @foreach ($pbsPayments as $slug => $label)
            <li>
                <img src="{{ asset('assets/images/payments/' . $slug . '.svg') }}"
                     width="38" height="24" loading="lazy" alt="{{ $label }}" title="{{ $label }}">
            </li>
        @endforeach
    </ul>
</div>
