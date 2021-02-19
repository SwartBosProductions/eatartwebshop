<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of products which are currently for sale.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCurrent()
    {
        $products = new Product;

        return view('public/current', ['products' => $products->getSeriesByPeriod([2])]);
    }

    public function indexShop()
    {
        $products = new Product;
        $sale = new Sale;

        return view('shop/shop', ['products' => $products->inCurrentSale(), 'sales' => $sale->currentSale()]);
    }

    public function indexMuseum()
    {
        $products = new Product;

        return view('public/museum', ['products' => $products->getSeriesByPeriod([1])]);
    }

    public function indexUpcoming()
    {
        $products = new Product;

        return view('public/upcoming', ['products' => $products->getSeriesByPeriod([3])]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
