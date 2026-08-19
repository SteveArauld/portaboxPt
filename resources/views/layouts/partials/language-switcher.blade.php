@php
    $pbsLocales = config('locales.available');
    $pbsCurrent = app()->getLocale();
    $pbsActive  = $pbsLocales[$pbsCurrent] ?? reset($pbsLocales);
@endphp

@once
    <style>
        .pbs-lang { position: relative; display: inline-block; }
        .pbs-lang-toggle {
            display: flex; align-items: center; gap: 7px;
            padding: 6px 10px; border: 1px solid #e2e8f0; border-radius: 7px;
            background: #fff; cursor: pointer; font-size: 13px; font-weight: 600;
            color: #2c3e50; line-height: 1;
        }
        .pbs-lang-toggle:hover { border-color: #c6213b; }
        .pbs-lang-toggle img { width: 20px; height: 14px; object-fit: cover; border-radius: 2px; display: block; }
        .pbs-lang-toggle .pbs-lang-caret { font-size: 10px; opacity: .6; }
        .pbs-lang-menu {
            position: absolute; top: calc(100% + 6px); inset-inline-end: 0; z-index: 999;
            min-width: 168px; margin: 0; padding: 6px; list-style: none;
            background: #fff; border: 1px solid #eef0f3; border-radius: 9px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, .12);
            display: none;
        }
        .pbs-lang.is-open .pbs-lang-menu { display: block; }
        .pbs-lang-menu a {
            display: flex; align-items: center; gap: 9px;
            padding: 8px 10px; border-radius: 6px;
            font-size: 13.5px; color: #2c3e50; text-decoration: none; white-space: nowrap;
        }
        .pbs-lang-menu a:hover { background: #f8fafc; color: #c6213b; }
        .pbs-lang-menu a[aria-current="true"] { font-weight: 700; background: #f1f5f9; }
        .pbs-lang-menu img { width: 20px; height: 14px; object-fit: cover; border-radius: 2px; display: block; }
    </style>
@endonce

<div class="pbs-lang" data-pbs-lang>
    <button type="button" class="pbs-lang-toggle" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('assets/images/flags/' . $pbsActive['flag']) }}" alt="" width="20" height="14">
        <span>{{ $pbsActive['name'] }}</span>
        <span class="pbs-lang-caret" aria-hidden="true">▼</span>
    </button>

    <ul class="pbs-lang-menu" role="list">
        @foreach ($pbsLocales as $code => $meta)
            <li>
                <a href="{{ route('lang.switch', $code) }}"
                   hreflang="{{ $meta['hreflang'] }}"
                   @if ($code === $pbsCurrent) aria-current="true" @endif>
                    <img src="{{ asset('assets/images/flags/' . $meta['flag']) }}" alt="" width="20" height="14">
                    <span>{{ $meta['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>

@once
    @push('scripts')
        <script>
            document.addEventListener('click', function (e) {
                var toggle = e.target.closest('[data-pbs-lang] .pbs-lang-toggle');

                document.querySelectorAll('[data-pbs-lang]').forEach(function (box) {
                    var isThisOne = toggle && box.contains(toggle);
                    var open = isThisOne && !box.classList.contains('is-open');
                    box.classList.toggle('is-open', open);
                    box.querySelector('.pbs-lang-toggle').setAttribute('aria-expanded', open ? 'true' : 'false');
                });
            });

            document.addEventListener('keydown', function (e) {
                if (e.key !== 'Escape') return;
                document.querySelectorAll('[data-pbs-lang].is-open').forEach(function (box) {
                    box.classList.remove('is-open');
                    box.querySelector('.pbs-lang-toggle').setAttribute('aria-expanded', 'false');
                });
            });
        </script>
    @endpush
@endonce
