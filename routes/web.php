<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Giriş Sayfası
Route::get('/login', function () {
    return view('login');
})->name("login");

// Kullanıcı Girişi
Route::post('/login', [UserController::class, 'checkData'])->name('user.checkData');

// Kayıt Sayfası
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Kullanıcı Kaydı
Route::post('/signup', [UserController::class, 'store'])->name('user.store');

// Logout (Çıkış)
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home')->with('success', 'Başarıyla çıkış yapıldı.');
})->name('logout');

// Ana Sayfa
Route::get('/', [PostController::class, 'homePost'])->name('home');

// Profil Gösterimi
Route::get('/profile/{user_id}', [UserController::class, 'show'])->name('profile.show');

// Kategoriler
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

// Gönderi Detayları
Route::get('/details/{post}', [PostController::class, 'showDetails'])->name('post.details');

// Gönderi Oluşturma
Route::get('/postCreate', [PostController::class, 'index'])->name('postCreate');
Route::post('/postCreate', [PostController::class, 'store'])->name('post.store');

// Gönderi Güncelleme
Route::get('/postUpdate/{post_id}', [PostController::class, 'update'])->name('updatePost');
Route::post('/postUpdate', [PostController::class, 'postUpdate'])->name('post.update');

// Gönderi Silme
Route::get('/postDelete/{post_id}', [PostController::class, 'postDelete'])->name('post.delete');

Route::get('/userDetail/{user_id}', [UserController::class, 'userDetail'])->name('user.detail');
Route::post('/userDetail/{user_id}', [UserController::class, 'userDetailUpdate'])->name('userDetail');
