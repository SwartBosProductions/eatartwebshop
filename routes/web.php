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
    return view('/admin/dashboard');
});

Route::get('/admin/announcements', function () {
    return view('/admin/announcements');
});

Route::get('/admin/products', function () {
    return view('/admin/products');
});

Route::get('/admin/users', function () {
    return view('/admin/users');
});


// public basic views setup
Route::get('/', function () {
    return view('public/enter');
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

Route::get('/current', function () {
    return view('public/current');
})->name('current');

Route::get('/museum', function () {
    return view('public/museum');
})->name('museum');

Route::get('/upcomming', function () {
    return view('public/upcomming');
})->name('upcomming');

Route::get('/forestblack', function () {
    return view('forestblack/forestblack');
})->name('forestblackInfo');


// shop basic views setup
Route::get('/shop', function () {
    return view('/shop/shop');
});

Route::get('/shop/product_detail', function () {
    return view('/shop/product_detail');
});

Route::get('/shop/shoppingcart', function () {
    return view('/shop/shoppingcart');
});

Route::get('/shop/order', function () {
    return view('/shop/order');
});


// user basic views setup
Route::get('/user/profile', function () {
    return view('/user/profile');
});
