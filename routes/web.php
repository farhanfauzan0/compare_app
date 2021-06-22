<?php

use App\Http\Controllers\Allcontroller;
use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

Route::get('/login', [Authcontroller::class, 'index'])->name('index.login');
Route::post('/login/post', [Authcontroller::class, 'post_login'])->name('post.login');
Route::get('/register', [Authcontroller::class, 'index_register'])->name('index.register');
Route::post('/register/post', [Authcontroller::class, 'post_register'])->name('post.register');

Route::middleware(['auth:web'])->group(function () {
    Route::get('/logout', function () {
        Auth::guard('web')->logout();
        return redirect()->route('index');
    })->name('logout');
});

Route::get('/', [Allcontroller::class, 'index'])->name('index');
Route::get('/sugest', [Allcontroller::class, 'sugest'])->name('sugest');
Route::get('/first/load', [Allcontroller::class, 'req_first'])->name('first.load');

Route::get('/search/v1/', [Allcontroller::class, 'search'])->name('search');
