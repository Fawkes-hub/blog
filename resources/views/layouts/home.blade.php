<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">--}}

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('resources\views\home\style\css\animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('resources\views\home\style\css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('resources\views\home\style\css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('resources\views\home\style\css/flexslider.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('resources\views\home\style\css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('resources\views\home\style\js\modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources\views\home\style\js\respond.min.js')}}"></script>
    <![endif]-->

</head>
    <body>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="index.html">资讯中心</a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="{{url('/')}}">首页</a></li>
                    <li><a href="{{url('home/list')}}">文章列表</a></li>
                    {{--<li><a href="portfolio.html">图片模式</a></li>--}}
                    {{--<li><a href="about.html">关于我们</a></li>--}}
                    {{--<li><a href="contact.html">联系我们</a></li>--}}
                </ul>
            </nav>

            <div class="fh5co-footer">
                <p>Copyright &copy; 2017.Company name All rights reserved.</p>
                <ul>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>

        </aside>
@section('main')


    @show

<!-- jQuery -->
<script src="{{asset('resources\views\home\style\js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('resources\views\home\style\js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('resources\views\home\style\js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('resources\views\home\style\js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('resources\views\home\style\js/jquery.flexslider-min.js')}}"></script>


<!-- MAIN JS -->
<script src="{{asset('resources\views\home\style\js/main.js')}}"></script>

</body>
</html>