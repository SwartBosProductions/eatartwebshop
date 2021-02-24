{{-- if shopping cart =0 disable --}}
    <a {{ $attributes->merge(['href' => '/shop/order', 'class' => 'btn main-home-button my-auto', 'type' => 'button']) }}>
        Bestellen
    </a>
