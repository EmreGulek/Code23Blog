<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        return view('index');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:20|min:3|string', // Ad alanı, 3-20 karakter arası olmalı ve string olmalı.
            'email' => 'required|email|unique:users,email', // E-posta zorunlu, geçerli formatta olmalı ve benzersiz olmalı.
            'password' => 'required|min:8|max:12|string', // Şifre zorunlu, 8-12 karakter arası olmalı ve string olmalı.
            'gender' => 'required|in:male,female', // Cinsiyet zorunlu ve sadece 'male' veya 'female' olmalı.
        ],
            [
                'name.required' => 'Ad alanı zorunludur.',
                'name.min' => 'Adınız en az :min karakter olabilir.',
                'name.max' => 'Adınız en fazla :max karakter olabilir.',

                'email.required' => 'E-posta alanı zorunludur.',
                'email.email' => 'Lütfen geçerli bir e-posta adresi girin.', // 'email' kuralı ile geçerli e-posta formatı kontrol ediliyor.
                'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',

                'password.required' => 'Lütfen şifre giriniz.',
                'password.min' => 'Şifreniz en az :min karakter olabilir.',
                'password.max' => 'Şifreniz en fazla :max karakter olabilir.',

                'gender.required' => 'Cinsiyet alanı zorunludur.',
                'gender.in' => 'Lütfen geçerli bir cinsiyet seçin (male veya female).'
            ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->gender = $validatedData['gender'];
        $user->save();

        return redirect()->route('index')->with('success', 'Kullanıcı başarıyla kaydedildi!');

    }

    public function checkData(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');

        $user = User::where('email', $email)->where('name', $name)->first();

        if ($user && \Hash::check($password, $user->password)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Email, Name veya şifre yanlış.');
        }
    }
}
