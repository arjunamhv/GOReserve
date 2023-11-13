<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partials/about', function () {
    return view('partials.about');
});

Route::get('/partials/contact', function () {
    return view('partials.contact');
});

Route::get('/sporthall', function () {
    return view('partials.sporthall');
});

Route::get('/sporthall/detail', function () {
    return view('partials.detail.sporthall-detail');
});

Route::get('/order', function () {
    return view('partials.order.sporthall-order');
});

Route::get('/transaksi', function () {
    return view('partials.order.transaksi');
});

Route::get('/transaksi/add', function () {
    return view('partials.order.add');
});

Route::get('/transaksi/input', function () {
    return view('partials.order.transaksi2');
});

Route::get('/myticket', function () {
    return view('partials.myticket  ');
});

Route::get('/myticket/detail', function () {
    return view('partials.detail.myticket-detail');
});

Route::get('/register', function () {
    return view('auth.register');
}); 

Route::get('/login', function () {
    return view('auth.login');
});
