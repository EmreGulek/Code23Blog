<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo"><img src="{{asset('/images/code23.png')}}" style="width: 100px;"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home')}}" style="margin-left: 90px; margin-right: 30px;">AnaSayfa</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">Kategoriler</a>
            </li>


            <li><a href="{{route('login')}}"><img src="{{asset("/images/login.png")}}" alt="" style="width: 30px; margin-top: 8px; margin-left: 450px;"></a></li>
            <li><a href="{{route('signup')}}"><img src="{{asset("/images/signup.png")}}" alt="" style="width: 30px; margin-top: 8px;"></a></li>
        </ul>

    </div>
</nav>
<hr>
