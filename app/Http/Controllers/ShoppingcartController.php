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
        dd($cartItems);
        return view('shop/shoppingcart', ['items' => $cartItems]);
    }



    /**
     * Add a product to the Shopping Cart Session
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(int $id)
    {
        $cart = session()->has('cart') ? session()->get('cart') : [];

        $product = Product::find($id);

        if (!$product) {
            abort(404, "Het product dat je probeert toe te voegen bestaat niet.");
        }

        $cart[] = [
            'name' => $product->product_name,
            'price' => $product->price,
            'picture' => $product->picture
        ];
        // kijk naar andere methoden, zoals push (bij array opdrukken)
        session()->put(['cart' => $cart]);
        // flash message dat product is toegevoegd
        // koop-knop moeten we uitschakelen want uniek product
        // winkelwagenlogo moet icoontje krijgen met productenteller
        // tsjek routing koopknop.
        return back();
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
