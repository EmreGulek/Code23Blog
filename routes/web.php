<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('giris');
});

Route::get('/kayıt', function () {
    return view('kaydol');
})->name('kayıt');
Route::post('/kayıt', [UserController::class, 'store'])->name('user.store');


Route::get('/index', [UserController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/', [UserController::class, 'checkData'])->name('user.checkData');

Route::get('/userPage', function () {
    return view('userPage');
});
Route::get('/emre', function () {
    return view('emre');
});

Route::get('/detay', function () {
    return view('detay');
});
