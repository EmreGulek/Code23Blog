<html>
<head>

    <meta charset="utf-8">
    <link href="https://assets.website-files.com/5e4b1a13ea2f46a20ae99097/css/lamar-template.webflow.9f962df2a.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic%7CLato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic%7CDomine:regular,700" media="all">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Domine:regular,700"]
            }
        });
    </script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="https://cdn.prod.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.prod.website-files.com/img/webclip.png" rel="apple-touch-icon">
</head>

<body >
<div class="content-wrapper" style="min-height: 100vh; ">
    <div class="w-container">
        <div class="blog-body-wrapper">
            <div class="post-title-section">
                <h1>{{$post->title}}</h1>


                <div class="post-info-wrapper">
                    <div class="post-info">{{$post->created_at}}</div>
                </div>
            </div>
            <div class="body-copy">
            <p>{{$post->content}}</p>
            </div>
        </div>
        <a href="{{ route('home') }}">
            <button style="border-radius: 100px; margin-top: 30px; height: 50px; color:black;">Ana Sayfa</button>
        </a>
    </div>

</div>
</body>
</html>
