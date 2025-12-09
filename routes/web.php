<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'showLoginForm')->name('login_view');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'showRegisterForm')->name('register_view');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/forgot-password', 'showFPForm')->name('forgot_password_view');
    Route::post('/forgot-password', 'forgotPassword')->name('forgot_password')->middleware('check.role:suscriptor');
    Route::get('/reset-password/{token}', 'showRPForm')->name('reset_password_view')->middleware('auth');
    Route::post('/reset-password', 'resetPassword')->name('reset_password')->middleware('check.role:suscriptor')->middleware('auth');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(NoticiaController::class)->group(function(){
    Route::get('/noticias', 'index')->name('noticias.index');
    Route::get('/noticias/{noticia}', 'show')->name('noticias.show');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });

//     Route::middleware(['role:admin'])->group(function () {
//         Route::get('/admin-panel', fn() => view('admin.panel'));
//     });

//     Route::middleware(['role:redactor'])->group(function () {
//         Route::get('/editor', fn() => view('redactor.editor'));
//     });
// });

