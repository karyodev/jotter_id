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
Route::controller(AccountController::class)->group(function(){
    Route::get('/account', 'index');
    Route::post('/account', 'update');
    Route::get('/tags', 'tags');
    Route::get('/content', 'content');
    Route::post('/content', 'created_content');
    Route::get('/post', 'post');
    Route::get('/post/detailpost/{id}', 'findpost');
    Route::get('/detailpost', 'detailpost');
    Route::get('/changepost/{id}/{tipe}', 'changepost');
});

// BLOG DETAIL
// Route::get('/blog-detail', [BlogDetailController::class, 'index']);

// ABOUT
Route::get('/about', function () { return view('about'); });

// CONTACT
Route::get('/contact', function () { return view('contact'); });

// login

Route::controller(LoginController::class)->group(function () {
    Route::get('/login',  'index')->middleware('guest')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/register', 'register');
});


//Register
Route::get('/register', function () { return view('auth/register'); })->middleware('guest');

