@if (Auth::user())
<a href="/shop/shoppingcart" type="button" class="btn">
    <img src="{{url('/icons/geeltje-tape-winkelwagen.png')}}"
    class="winkelwagen" alt="winkelwagen icon">
    @if (is_countable(Session::get('cart', array())) && count(Session::get('cart', array())) > 0)
    <span class="badge badge-pill badge-winkelwagen">
        {{count(Session::get('cart', array()))}}
    </span>
    @endif
</a>
@endif
