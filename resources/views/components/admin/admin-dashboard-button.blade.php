@if(request()->routeIs('admin-dashboard'))
    <a {{ $attributes->merge(['href' => '/admin/dashboard', 'class' => 'btn my-auto btn-group-admin-options', 'type' => 'button', 'style' =>'visibility:hidden']) }}>
        {{ $slot }}
    </a>
@else
    <a {{ $attributes->merge(['href' => '/admin/dashboard', 'class' => 'btn my-auto btn-group-admin-options', 'type' => 'button']) }}>
        {{ $slot }}
    </a>
@endif

