@php
    /** @var \App\Models\Article $item */
    $cbImg = $item->images->where('is_primary', true)->first() ?? $item->images->first();
    $cbImgUrl = $cbImg ? $cbImg->image_path : 'https://via.placeholder.com/300x300?text=No+Image';
@endphp
<div class="pbs-cart-action">
    <button type="button"
            class="pbs-add-to-cart"
            data-add-to-cart
            data-id="{{ $item->id }}"
            data-name="{{ $item->name }}"
            data-price="{{ $item->price }}"
            data-slug="{{ $item->slug }}"
            data-sku="{{ $item->sku }}"
            data-image="{{ $cbImgUrl }}"
            data-url="{{ route('product.show', $item->slug) }}">
        <i class="fas fa-cart-plus"></i>
        <span class="pbs-add-label">{{ __('Ajouter au panier') }}</span>
    </button>
</div>
