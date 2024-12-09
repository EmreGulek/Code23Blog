@extends('layouts.master')

@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-section">
                        <h2>Hoşgeldin {{$user->name}}, Hadi Bilgilerini Güncelleyelim.</h2>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('userDetail', $user->id) }}" method="POST">
                            @csrf
                            <div>
                                <label class="label-text" for="first_name">Adınız</label>
                                <input type="text" id="first_name" name="first_name" @if($user->name) value="{{$user->name}}" @endif placeholder="Adınızı giriniz." required>
                            </div>

                            <div>
                                <label class="label-text" for="last_name">Soyadınız</label>
                                <input type="text" id="last_name" name="last_name" @if($user->user_surname) value="{{$user->user_surname}}" @endif  placeholder="Soyadınızı giriniz." required>
                            </div>

                            <div>
                                <label class="label-text" for="email">Email Adresiniz</label>
                                <input type="email" id="email" name="email" value="{{ ( $user->email) }}" placeholder="Email adresinizi giriniz." required>
                            </div>

                            <div>
                                <label class="label-text" for="password">Şifre</label>
                                <input type="password" id="password" name="password" placeholder="Yeni şifrenizi giriniz.">
                            </div>

                            <div>
                                <label class="label-text" for="user_about">Kendinizi Açıkladığınız Bir Yazı Oluşturabilirsiniz.</label>
                                <textarea id="user_about" name="user_about" rows="4" cols="50" placeholder="Hakkınızda bir şeyler yazın...">@if($user->user_about) {{$user->user_about}} @endif</textarea>
                            </div>
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <div class="button-container">
                                <button type="submit">Bilgileri Güncelle</button>
                                <button type="button" onclick="window.location.href='{{ route('profile.show',$user->id) }}'">İptal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
