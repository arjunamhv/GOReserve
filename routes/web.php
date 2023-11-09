<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('partials.about');
});

Route::get('/contact', function () {
    return view('partials.contact');
});



Route::get('/login', [AuthController::class, 'index'])->name('login.form');
Route::get('/user/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
Route::post('/user/register', [AuthController::class, 'register'])->name('user.register');


Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/detailblog', [BlogController::class, 'detailblog'])->name('detailblog');
Route::get('/welcome', [BlogController::class, 'welcome'])->name('welcome');

