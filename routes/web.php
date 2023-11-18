<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SportHallController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// sporthall
Route::get('/sporthall', [SportHallController::class,'index']);
Route::get('/sporthall/{gor:name}', [SportHallController::class,'show']);
Route::get('/sporthall/{gor:name}/order', [SportHallController::class, 'order']);
Route::post('/sporthall/{gor:name}/order', [SportHallController::class, 'store'])->name('store');
Route::post('/sporthall/{gor:name}/transaction', [SportHallController::class, 'transaction'])->name('transaction');


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
    return view('myticket');
});

Route::get('/myticket/detail', function () {
    return view('partials.detail.myticket-detail');
});


Route::get('/login', [AuthController::class, 'index'])->name('login.form');
Route::get('/user/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/user/register', [AuthController::class, 'register'])->name('user.register');

// Google Login
Route::get('/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
// Forgot Password
Route::get('/forgot-password', [AuthController::class, 'showForgetPasswordForm'])->name('forgot.password.get');
Route::post('/forgot-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forgot.password.post');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/detailblog', [BlogController::class, 'detailblog'])->name('detailblog');
Route::get('/faq', [BlogController::class, 'faq'])->name('faq');
Route::get('/welcome', [BlogController::class, 'welcome'])->name('welcome');

Route::middleware(['user-role'])->group(function () {
    // Isi route
});
?>
