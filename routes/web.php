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
