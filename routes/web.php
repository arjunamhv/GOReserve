<?php

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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SportHallController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ScanController;




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

Route::get('/', [LandingController::class,'index'])->name('landing');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
      return view('contact');
});

//sporthall
Route::get('/sporthall', [SportHallController::class,'index'])->name('sporthall')->middleware(['auth', 'verified']);
Route::get('/sporthall/{gor:slug}', [SportHallController::class,'show'])->middleware(['auth', 'verified']);
Route::get('/sporthall/{gor:slug}/check', [SportHallController::class, 'checkschedule'])->middleware(['auth', 'verified']);
Route::post('/sporthall/{gor:slug}/check', [SportHallController::class, 'check'])->name('check')->middleware(['auth', 'verified']);
Route::get('/sporthall/{gor:slug}/order', [SportHallController::class, 'order'])->middleware(['auth', 'verified']);
Route::post('/sporthall/{gor:slug}/search', [SportHallController::class, 'search'])->name('search')->middleware(['auth', 'verified']);
Route::post('/sporthall/{gor:slug}/order', [SportHallController::class, 'store'])->name('store')->middleware(['auth', 'verified']);;
Route::post('/sporthall/{gor:slug}/transaction', [SportHallController::class, 'transaction'])->name('transaction')->middleware(['auth', 'verified']);

Route::get('/myticket', [TicketController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/myticket/{payment:id}', [TicketController::class, 'show'])->middleware(['auth', 'verified']);
Route::get('/rating', [TicketController::class, 'rating'])->name('rating')->middleware(['auth', 'verified']);
Route::post('review-store', [TicketController::class, 'reviewstore'])->name('review.store')->middleware(['auth', 'verified']);


//myticket
Route::get('/myticket', [TicketController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/myticket/{payment:id}', [TicketController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/detailblog', [BlogController::class, 'detailblog'])->name('detailblog');
Route::get('/faq', [BlogController::class, 'faq'])->name('faq');
Route::get('/welcome', [BlogController::class, 'welcome'])->name('welcome');

Route::middleware(['auth', 'verified', 'is_admin'])->group(function () {
    Route::get('/admin-dashboard', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
});

//gor
Route::get('/registergor', [RegistergorController::class, 'Form'])->name('registergor')->middleware(['auth', 'verified']);
Route::resource('gor', GorController::class)->middleware(['auth', 'verified']);
Route::resource('field', FieldController::class)->middleware(['auth', 'verified']);
Route::post('/getcity', [RegistergorController::class, 'getcity'])->name('getCity')->middleware(['auth', 'verified']);
Route::post('/getdistrict', [RegistergorController::class, 'getdistrict'])->name('getDistrict')->middleware(['auth', 'verified']);
Route::post('/getsubdistrict', [RegistergorController::class, 'getsubdistrict'])->name('getSubDistrict')->middleware(['auth', 'verified']);
Route::get('mygor/{id}', [MyGORController::class, 'show'])->name('mygor.show')->middleware(['auth', 'verified']);
Route::resource('accounting', AccountingController::class)->middleware(['auth', 'verified']);



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

Route::get('/scan', function(){
    return view('admin.scancheck');
})->name('scan')->middleware('auth');
Route::post('/scancheck', [ScanController::class, 'scancheck'])->name('scancheck')->middleware('auth');

require __DIR__.'/auth.php';