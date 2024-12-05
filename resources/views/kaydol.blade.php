<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaydol</title>
    <script class="u-script" type="text/javascript" src="{{ asset('fotodegis.js') }}" defer=""></script>
    <link rel="stylesheet" href="{{ asset('gorunum.css') }}">

</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-section">
                    <h2>Lütfen Bilgilerinizi Giriniz</h2>
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div>
                            <label class="label-text" for="name">Adınız</label>
                            <input type="text" id="name" name="name" placeholder="Adınızı giriniz." required  value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div>
                            <label class="label-text" for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Bir email adresi giriniz." required value="{{ old('email') }}">
                            @if($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div>
                            <label class="label-text" for="password">Şifre</label>
                            <input type="password" id="password" name="password" placeholder="Şifrenizi giriniz." required name="password">
                            @if($errors->has('password'))
                                <div class="error">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <label for="gender" class="label-text">Cinsiyetiniz</label>
                        <div class="gender-options">
                            <div>
                                <input type="radio" id="male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                <label for="male">Erkek</label>
                            </div>
                            <div>
                                <input type="radio" id="female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                <label for="female">Kadın</label>
                            </div>
                        </div>
                            <button type="submit">Kaydol</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-section">
                    <img id="gender-image" src="/images/twoCoder.jpg" alt="Giriş Görseli" width="400">
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
