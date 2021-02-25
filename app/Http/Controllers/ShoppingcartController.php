<?php

namespace App\Http\Controllers;

use App\Models\Shoppingcart;
use Illuminate\Http\Request;
use App\Models\Product;

class ShoppingcartController extends Controller
{
    /**
     * Display the shopping cart blade.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = session()->get('cart');

        return view('shop/shoppingcart', ['items' => $cartItems]);
    }



    /**
     * Add a product to the Shopping Cart Session
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404, "Het product dat je probeert toe te voegen bestaat niet.");
        }

        $orderedProduct = [
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->price,
            'picture' => $product->picture,
            'description' => $product->description,
            'designer' => $product->designer->user->full_name,
        ];
        // dd(session('cart'));
        if ($request->session()->has('cart')) {
            $request->session()->push('cart', $orderedProduct);
        } else {
            $request->session()->put('cart', [$orderedProduct]);
        }
        $items = $request->session()->get('cart');

        // flash message dat product is toegevoegd, of naar view shoppingblade met knoppen: 'Bestellen' en 'Verder winkelen'.
        // koop-knop moeten we uitschakelen want uniek product
        // winkelwagenlogo moet icoontje krijgen met productenteller
        // tsjek routing koopknop.
        // dd(session('cart'));
        return view('shop/shoppingcart', ['items' => $items]);
    }

    public function removeFromCart(Request $request, $id)
    {
        $cartItems = $request->session()->get('cart');
        // $itemToRemove = $cartItems->whereIn('id', $id)->get();
        // whereIn werkt niet, cartItems is een non-associative array,
        // moet daar overheen loopen met een foreach denk ik,
        // misschien wel nested met nog een foreach, of wat Toby deed foreach $items as $key=>value.
        dd($cartItems);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shoppingcart $shoppingcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoppingcart $shoppingcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoppingcart $shoppingcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoppingcart  $shoppingcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoppingcart $shoppingcart)
    {
        //
    }
}
