<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogDetailController;

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

// HOME
Route::get('/', [HomeController::class, 'index']);

// ACCOUNT
Route::get('/account', [AccountController::class, 'index']);

// BLOG DETAIL
Route::get('/blog-detail', [BlogDetailController::class, 'index']);

// ABOUT
Route::get('/about', function () { return view('about'); });

// CONTACT
Route::get('/contact', function () { return view('contact'); });

// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

//Register
Route::get('/register', function () { return view('register'); })->middleware('guest');
Route::post('/register',[LoginController::class, 'register']);

// ACCOUNT
Route::get('/post', [PostController::class, 'index']);