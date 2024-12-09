<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="https://assets.website-files.com/5e4b1a13ea2f46a20ae99097/css/lamar-template.webflow.9f962df2a.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic%7CLato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic%7CDomine:regular,700" media="all">
    <link data-wf-domain="lamar-template.webflow.io" data-wf-page="5e4b1a13ea2f463341e99099" data-wf-site="5e4b1a13ea2f46a20ae99097" data-wf-status="1" class="w-mod-js wf-opensans-n3-active wf-opensans-i3-active wf-opensans-n4-active wf-opensans-i4-active wf-opensans-n6-active wf-opensans-i6-active wf-opensans-n7-active wf-opensans-i7-active wf-opensans-n8-active wf-opensans-i8-active wf-lato-n1-active wf-lato-i1-active wf-lato-n3-active wf-lato-i3-active wf-lato-n4-active wf-lato-i4-active wf-lato-n7-active wf-lato-i7-active wf-lato-n9-active wf-lato-i9-active wf-domine-n4-active wf-domine-n7-active wf-active">

    <link rel="stylesheet" href="{{ asset('/navbarForMain/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/navbarForMain/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/home.css') }}">

    <link rel="stylesheet" href="{{ asset('/homepage/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/homepage/bootstrap.min.css') }}">





    <link href="https://assets.website-files.com/5e4b1a54e48aed761d1ff229/css/denali-template.webflow.170e98de3.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
            }
        });
    </script>
    <script type="text/javascript">
        !function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js",
            ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://cdn.prod.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.prod.website-files.com/img/webclip.png" rel="apple-touch-icon">




</head>
<body>
@include('layoutsforMainPage.navbarForMain')

@yield('mainContent')

@include('layoutsforMainPage.footerForMain')



<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e4b1a54e48aed761d1ff229" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://assets.website-files.com/5e4b1a54e48aed761d1ff229/js/webflow.bf6a5095c.js" type="module"></script>
</body>

</html>
