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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



/*
******************************
// routes 1e setup for tests !
******************************
*/

// admin basic views setup
Route::get('/admin/dashboard', function () {
    return view('app/admin/dashboard');
});

Route::get('/admin/announcements', function () {
    return view('app/admin/announcements');
});

Route::get('/admin/products', function () {
    return view('app/admin/products');
});

Route::get('/admin/users', function () {
    return view('app/admin/users');
});


// public basic views setup
Route::get('/news', function () {
    return view('public/news');
});

Route::get('/about', function () {
    return view('public/about');
});

Route::get('/contact', function () {
    return view('public/contact');
});

Route::get('/home', function () {
    return view('public/home');
});

Route::get('/current', function () {
    return view('public/current');
});

Route::get('/museum', function () {
    return view('public/museum');
});

Route::get('/upcomming', function () {
    return view('public/upcomming');
});


// shop basic views setup
Route::get('/shop', function () {
    return view('app/shop/shop');
});

Route::get('/shop/product_detail', function () {
    return view('app/shop/product_detail');
});

Route::get('/shop/shoppingcart', function () {
    return view('app/shop/shoppingcart');
});

Route::get('/shop/order', function () {
    return view('app/shop/order');
});


// user basic views setup
Route::get('/user/profile', function () {
    return view('app/user/profile');
});
