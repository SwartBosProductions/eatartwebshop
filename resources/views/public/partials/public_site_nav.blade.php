<div class="container-fluid m-0 p-0">
    <nav class="row navbar navbar-dark justify-content-center mx-0">
        <div class="col-3">

        </div>
        <div class="col-6">
            <div class="row btn-group d-flex btn-group-sitenav">
                <a href="/museum" type="button" class="btn btn-secondary my-auto btn-group-sitenav">
                    Museum
                </a>
                <a href="/current" type="button" class="btn btn-secondary btn-lg my-auto">
                    {{-- make nice effect for button when in active as Shop is closed --}}
                    Shop
                </a>
                <a href="/upcomming" type="button" class="btn btn-secondary my-auto">
                    Verwacht
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="row justify-content-end mr-4">
                @if (Auth::user())
                    {{-- iets met session id? --}}
                    <a href="/shop/shoppingcart" type="button" class="btn">
                        <img src="{{url('/icons/geeltje-tape-winkelwagen.png')}}"
                        class="winkelwagen" alt="winkelwagen icon">
                        <span class="badge badge-pill badge-winkelwagen">
                            ##
                        </span>
                    </a>
                @endif
            </div>
        </div>
    </nav>
</div>
