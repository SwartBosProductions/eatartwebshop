<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
******************************
// routes for tests !
******************************
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// BOSMA TEST ROUTES FOR PRUTSING AROUND
//
Route::get('/testshop', 'App\Http\Controllers\ProductController@indexShop');
/*
******************************
// routes for webapp !
******************************
*/

// GROUP ADMIN
// admin basic views setup
Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('/admin/dashboard');
    })->name('admin-dashboard');

    Route::get('/announcements', function () {
        return view('/admin/announcements');
    })->name('admin-announcments');

    Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('admin-products');
    Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show');

    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('admin-users');
});

// GROUP PUBLIC
// public basic views setup
Route::get('/', function () {
    return view('public/enter');
    // reservation route for nice to have feature?
})->name('enter');

Route::get('/home', function () {
    return view('public/home');
})->name('home');

Route::get('/news', function () {
    return view('public/news');
})->name('news');

Route::get('/about', function () {
    return view('public/about');
})->name('about');

Route::get('/contact', function () {
    return view('public/contact');
})->name('contact');

Route::get('/conditions', function () {
    return view('public/conditions');
})->name('conditions');

Route::get('/current', 'App\Http\Controllers\ProductController@indexCurrent')->name('current');

Route::get('/museum', 'App\Http\Controllers\ProductController@indexMuseum')->name('museum');

Route::get('/upcoming', 'App\Http\Controllers\ProductController@indexUpcoming')->name('upcoming');

Route::get('/{serie_name}/products', 'App\Http\Controllers\ProductController@showPublic')->name('public-detail');

Route::get('/forestblack', function () {
    return view('forestblack/forestblack');
})->name('forestblackInfo');


// GROUP SHOP
// shop basic views setup
Route::middleware('auth')->prefix('shop')->group(function () {
    Route::get('', 'App\Http\Controllers\ProductController@indexShop')->name('shop');

    Route::get('/{serie_name}/products', 'App\Http\Controllers\ProductController@showShop')->name('shop-product');

    Route::get('/shoppingcart', 'App\Http\Controllers\ShoppingcartController@index')->name('shop-cart');
    Route::get('shoppingcart/{id}', 'App\Http\Controllers\ShoppingcartController@addToCart')->name('addToCart');
    Route::get('shoppingcart/{id}/remove', 'App\Http\Controllers\ShoppingcartController@removeFromCart')->name('removeFromCart');

    Route::get('/order', 'App\Http\Controllers\OrderController@index')->name('shop-order');

    Route::get('/payment', 'App\Http\Controllers\PaymentController@index')->name('payment');
});

// GROUP USERPROFILE
// user basic views setup
Route::get('/user/profile', 'App\Http\Controllers\UserController@show')->name('user-profile');
Route::get('/user/profile/edit', 'App\Http\Controllers\UserController@edit')->name('user-profile-edit');
