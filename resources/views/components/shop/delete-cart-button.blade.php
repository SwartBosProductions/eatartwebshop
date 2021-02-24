{{-- if shopping cart =0 disable --}}
    <a {{ $attributes->merge(['href' => '{{ route('removeFromCart', ['id' => $item['id']]) }}', 'class' => 'btn shop-form-button  my-auto', 'type' => 'button']) }}>
        Verwijderen
    </a>
