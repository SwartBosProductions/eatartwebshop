@if(request()->routeIs('shop'))
    <a {{ $attributes->merge(['href' => '/shop', 'class' => 'btn main-home-button my-auto', 'type' => 'button', 'style' =>'visibility:hidden']) }}>
        {{ $slot }}
    </a>
@else
    <a {{ $attributes->merge(['href' => '/shop', 'class' => 'btn main-home-button my-auto', 'type' => 'button']) }}>
        {{ $slot }}
    </a>
@endif

