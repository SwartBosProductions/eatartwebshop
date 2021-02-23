@if(request()->routeIs('shop'))
    <a {{ $attributes->merge(['href' => '/home', 'class' => 'btn main-home-button my-auto', 'type' => 'button']) }}>
        Home
    </a>
@else
    <a {{ $attributes->merge(['href' => '/shop', 'class' => 'btn main-home-button my-auto', 'type' => 'button']) }}>
        Terug naar de Shop
    </a>
@endif

