<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\MyGORController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SportHallController;
use App\Http\Controllers\RegistergorController;
use App\Http\Controllers\DashboardAdminController;


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
Route::get('/sporthall/{gor:slug}', [SportHallController::class,'show']);
Route::get('/sporthall/{gor:slug}/order', [SportHallController::class, 'order']);
Route::post('/sporthall/{gor:slug}/order', [SportHallController::class, 'store'])->name('store');
Route::post('/sporthall/{gor:slug}/transaction', [SportHallController::class, 'transaction'])->name('transaction');

Route::get('/myticket', [TicketController::class, 'index']);
Route::get('/myticket/{payment:id}', [TicketController::class, 'show']);

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

Route::get('/registergor', [RegistergorController::class, 'Form'])->name('registergor');
Route::resource('gor', GorController::class);
Route::resource('field', FieldController::class);
Route::post('/getcity', [RegistergorController::class, 'getcity'])->name('getCity');
Route::post('/getdistrict', [RegistergorController::class, 'getdistrict'])->name('getDistrict');
Route::post('/getsubdistrict', [RegistergorController::class, 'getsubdistrict'])->name('getSubDistrict');
Route::get('/admin-dashboard', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
Route::get('mygor/{id}', [MyGORController::class, 'show'])->name('mygor.show');
?>
