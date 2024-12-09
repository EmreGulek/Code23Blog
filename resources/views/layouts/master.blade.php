<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="{{ asset('/navbar/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/navbar/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/navbar/style.css') }}">


    <script class="u-script" type="text/javascript" src="{{ asset('fotodegis.js') }}" defer=""></script>
    <link rel="stylesheet" href="{{ asset('gorunum2.css') }}">

    <script class="u-script" type="text/javascript" src="{{ asset('fotodegis.js') }}" defer=""></script>
    <link rel="stylesheet" href="{{ asset('gorunum.css') }}">

    <link rel="stylesheet" href="{{ asset('/FormCreate/formCreate.css') }}">


</head>
<body>
@include('layouts.navbar')

@yield('content')

@include('layouts.footer')



</body>

</html>
