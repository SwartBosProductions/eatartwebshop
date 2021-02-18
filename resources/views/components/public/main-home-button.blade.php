@if(request()->routeIs('home'))
    <a {{ $attributes->merge(['href' => '/home', 'class' => 'btn main-home-button my-auto', 'type' => 'button', 'style' =>'visibility:hidden']) }}>
        {{ $slot }}
    </a>
@else
    <a {{ $attributes->merge(['href' => '/home', 'class' => 'btn main-home-button my-auto', 'type' => 'button']) }}>
        {{ $slot }}
    </a>
@endif

