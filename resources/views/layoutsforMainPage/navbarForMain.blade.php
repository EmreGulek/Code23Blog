<header id="header" class="menu-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Start Logo -->
                <div class="logo-nav">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/code23LogoBlack.png')}}" alt="Company logo" style="width:90px;">
                    </a>
                </div>
                <!--End Logo -->
                <div class="clear-toggle"></div>
                <div id="main-menu" class="collapse scroll navbar-right">
                    <ul class="nav main-menu-li">

                        <li class=" main-menu-li" > <a href="{{route("home")}}" >Home</a> </li>

                        <li class="main-menu-li"> <a href="{{route("category.index")}}">Kategoriler</a> </li>

                        <!-- Kullanıcı Giriş Yapmamışsa Gösterilecek -->
                        @guest
                            <li><a href="{{ route('login') }}">Giriş Yap</a></li>
                            <li><a href="{{ route('signup') }}">Kayıt Ol</a></li>
                        @endguest

                        @auth
                            <li class=" main-menu-li"><a href="{{ route('profile.show', [Auth::user()->id]) }}">Profilim</a></li>
                            <li class=" main-menu-li">
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style=" cursor: pointer;">Çıkış Yap</button>
                                </form>
                            </li>
                        @endauth



                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
