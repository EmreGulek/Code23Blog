<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <script class="u-script" type="text/javascript" src="{{ asset('fotodegis.js') }}" defer=""></script>
    <link rel="stylesheet" href="{{ asset('gorunum2.css') }}">

</head>
<body>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-section">
                    <h2>Lütfen Bilgilerinizi Giriniz</h2>
                    <form action="{{ route('user.checkData') }}" method="POST">
                        @csrf
                        <div>
                            <label class="label-text" for="name">Adınız</label>
                            <input type="text" id="name" name="name" placeholder="Adınızı giriniz." required>
                        </div>
                        <div>
                            <label class="label-text" for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Bir email adresi giriniz." required>
                        </div>
                        <div>
                            <label class="label-text" for="password">Şifre</label>
                            <input type="password" id="password" name="password" placeholder="Şifrenizi giriniz." required>
                        </div>

                        <div class="button-container">
                            <button type="submit" id="submit">Giriş</button>

                            <button type="button" onclick="window.location.href='{{ route('kayıt') }}'">Yeni Kayıt</button>
                        </div>
                    </form>

                    <!-- Hata mesajı -->
                    @if(session('error'))
                        <div style="color: red;">
                            {{ session('error') }}
                        </div>
                    @endif

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
