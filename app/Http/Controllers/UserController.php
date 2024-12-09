<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        return view('home');
    }


        public function show($user_id)
    {
       $user = User::with('posts')->find($user_id);

       if(!$user){
           return redirect()->route('home')->with('error', 'User not found');
       }
       else{
           return view('profile', compact('user'));
       }
    }




    public function store(Request $request)
    {
        // Form verilerini doğrula
        $validatedData = $request->validate([
            'name' => 'required|max:20|min:3|string', // Ad alanı, 3-20 karakter arası olmalı ve string olmalı.
            'email' => 'required|email|unique:users,email', // E-posta zorunlu, geçerli formatta olmalı ve benzersiz olmalı.
            'password' => 'required|min:8|max:12|string', // Şifre zorunlu, 8-12 karakter arası olmalı ve string olmalı.
            'gender' => 'required|in:male,female', // Cinsiyet zorunlu ve sadece 'male' veya 'female' olmalı.
        ], [
            // Hata mesajları
            'name.required' => 'Ad alanı zorunludur.',
            'name.min' => 'Adınız en az :min karakter olabilir.',
            'name.max' => 'Adınız en fazla :max karakter olabilir.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Lütfen geçerli bir e-posta adresi girin.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.required' => 'Lütfen şifre giriniz.',
            'password.min' => 'Şifreniz en az :min karakter olabilir.',
            'password.max' => 'Şifreniz en fazla :max karakter olabilir.',
            'gender.required' => 'Cinsiyet alanı zorunludur.',
            'gender.in' => 'Lütfen geçerli bir cinsiyet seçin (male veya female).',
        ]);

        // Yeni kullanıcı oluştur ve kaydet
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); // Şifreyi hashle
        $user->gender = $validatedData['gender'];
        $user->save();

        // Kullanıcıyı otomatik olarak giriş yaptır
        Auth::login($user);

        // Profil sayfasına yönlendir
        return redirect()->route('profile.show', [$user->id])->with('success', 'Kullanıcı başarıyla kaydedildi ve giriş yapıldı!');
    }

    public function checkData(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Kullanıcı giriş yaptı
            return redirect()->route('profile.show', [Auth::user()->id]);
        } else {
            return back()->with('error', 'Email veya şifre yanlış.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Başarıyla çıkış yapıldı.');
    }


    public function userDetail($userId)
    {
        $user = User::where('id', $userId)->first();
        return view('userDetail', compact('user'));
    }

    public function userDetailUpdate(Request $request)
    {
        // Verinin doğrulanması
        $validatedData = $request->validate([
            'first_name' => 'required|max:50|min:3|string',
            'last_name' => 'required|max:50|min:3|string',
            'email' => 'required|email|unique:users,email,' . $request->user_id,
            'password' => 'nullable|min:8|max:12|string',
            'user_about' => 'nullable|string|max:500', // Kendinizin açıklama kısmı
        ], [
            'first_name.required' => 'Ad alanı zorunludur.',
            'first_name.min' => 'Adınız en az :min karakter olabilir.',
            'first_name.max' => 'Adınız en fazla :max karakter olabilir.',
            'last_name.required' => 'Soyadınız zorunludur.',
            'last_name.min' => 'Soyadınız en az :min karakter olabilir.',
            'last_name.max' => 'Soyadınız en fazla :max karakter olabilir.',
            'email.required' => 'E-posta alanı zorunludur.',
            'email.email' => 'Lütfen geçerli bir e-posta adresi girin.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.min' => 'Şifreniz en az :min karakter olabilir.',
            'password.max' => 'Şifreniz en fazla :max karakter olabilir.',
            'user_about.max' => 'Açıklamanız en fazla :max karakter olabilir.',
        ]);

        // Kullanıcıyı bulma
        $user = User::findOrFail($request->user_id);

        // Verileri güncelleme
        $user->name = $validatedData['first_name'];
        $user->user_surname = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->user_about = $validatedData['user_about'];


        // Şifreyi yalnızca girilmişse güncelle
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // Başarıyla güncellendikten sonra yönlendirme yap
        return redirect()->route('profile.show', [$user->id])->with('success', 'Kullanıcı bilgileri başarıyla güncellendi!');
    }



}
