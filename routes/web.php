<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\NewsLetterController;
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
    Route::post('/login', 'login')->name('login')->middleware('throttle:5,1'); //Máximo 5 intentos por minuto
    Route::get('/register', 'showRegisterForm')->name('register_view');
    Route::post('/register', 'register')->name('register')->middleware('throttle:5,1');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/forgot-password', 'showFPForm')->name('forgot_password_view')->middleware('guest');
    Route::post('/forgot-password', 'forgotPassword')->name('forgot_password')->middleware('guest');
    Route::get('/reset-password/{token}', 'showRPForm')->name('reset_password_view')->middleware('guest');
    Route::post('/reset-password', 'resetPassword')->name('reset_password')->middleware('guest');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(NoticiaController::class)->group(function(){
    Route::get('/newsc', 'index')->name('noticias.index');
    Route::get('/newsc/{noticia}', 'show')->name('noticias.show');
});


Route::controller(NewsLetterController::class)->group(function(){
    Route::post('/send-now/{campaign}', 'envioMasivo')->name('campaigns.send-now');
    Route::post('/schedule/{campaign}', 'programarCampania')->name('campaigns.schedule');
    Route::post('/newsletter/subscribe', 'subscribe')->name('newsletter.subscribe');
    Route::get('/newsletter/confirm/{token}', 'confirm')->name('newsletter.confirm')->middleware('signed');
    Route::get('/newsletter/unsubscribe/{token}', 'unsubscribe')->name('newsletter.unsubscribe')->middleware('signed');
    Route::post('/newsletter/resend', 'reenviarCorreo')->name('newsletter.resend');
    Route::get('/newsletter/success', function(){
        if(!session('nombre')) return redirect()->route('home');

        return view('newsletter.subscribed', [
            'nombre'    => session('nombre'),
            'email'     => session('email'),
            'previo'    => session('previo')
        ]);
    })->name('newsletter.success');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin-panel', fn() => view('admin.panel'));
    });

    Route::middleware(['role:redactor'])->group(function () {
        Route::get('/editor', fn() => view('redactor.editor'));
    });
});

