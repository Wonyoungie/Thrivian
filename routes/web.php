<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;

// sudah login
Route::middleware(['auth'])->group(function () {

    Route::get('/logged', function () {
        return redirect(route('profile'));
    })->name('after.login');

    Route::get('/profile', [MainController::class, 'setViewprofile'])->name('profile');

    Route::get('/settings', [MainController::class, 'setViewsettings'])->name('settings');
    
    Route::get('/home', [MainController::class, 'setViewhome'])->name('home');



    
    // login dan rolenya sebagai admin
    Route::middleware(['adminCheck'])->group(function (){

    });



    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




});

// belum login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'setViewLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'setViewRegister'])->name('register');

    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    
    Route::get('/auth/google',[AuthController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/auth/google/callback',[AuthController::class, 'handleGoogleCallback']);

    Route::get('/otp', function (Request $request) {
        $email = $request->query('email');
        return view('otp_form', compact('email'));
    })->name('otp.form');

    Route::post('/verify-otp',[AuthController::class, 'verifyotp'])->name('verify.otp');


});



// halaman apa saja yang bisa diakses user jika dia belum login
Route::get('/', function () {

    return redirect(route('login'));

});

// Route::get('/home', function () {

//     return 'hello';

// })->name('home');


