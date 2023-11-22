<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistergorController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\MyGORController;
use App\Http\Controllers\GorController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
})->name('landing');

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/contact', function () {
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
})->middleware(['auth', 'verified']);

Route::get('/transaksi', function () {
    return view('partials.order.transaksi');
})->middleware(['auth', 'verified']);

Route::get('/transaksi/add', function () {
    return view('partials.order.add');
})->middleware(['auth', 'verified']);

Route::get('/transaksi/input', function () {
    return view('partials.order.transaksi2');
})->middleware(['auth', 'verified']);

Route::get('/myticket', function () {
    return view('partials.myticket  ');
})->middleware(['auth', 'verified']);

Route::get('/myticket/detail', function () {
    return view('partials.detail.myticket-detail');
})->middleware(['auth', 'verified']);

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/detailblog', [BlogController::class, 'detailblog'])->name('detailblog');
Route::get('/faq', [BlogController::class, 'faq'])->name('faq');
Route::get('/welcome', [BlogController::class, 'welcome'])->name('welcome');

Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
});

Route::get('/registergor', [RegistergorController::class, 'Form'])->name('registergor');
Route::resource('gor', GorController::class);
Route::resource('field', FieldController::class);
Route::post('/getcity', [RegistergorController::class, 'getcity'])->name('getCity');
Route::post('/getdistrict', [RegistergorController::class, 'getdistrict'])->name('getDistrict');
Route::post('/getsubdistrict', [RegistergorController::class, 'getsubdistrict'])->name('getSubDistrict');
Route::get('mygor/{id}', [MyGORController::class, 'show'])->name('mygor.show');

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::controller(GoogleController::class)->group(function() {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';