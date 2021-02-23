@if (Auth::user())
<a href="/shop/shoppingcart" type="button" class="btn">
    <img src="{{url('/icons/geeltje-tape-winkelwagen.png')}}"
    class="winkelwagen" alt="winkelwagen icon">
    <span class="badge badge-pill badge-winkelwagen">
        ##
    </span>
</a>
@endif
