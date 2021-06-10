<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@section('title')Crowdme :: @show</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>

        .admin nav {

            margin: 0 auto 30px;
        }
        .admin ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .admin .topmenu > li {
            display: inline-block;
            margin-right: 20px;
            position: relative;
        }
        .admin .topmenu > li:last-child {
            margin-right: 0;
        }
        .admin a {
            display: block;
            padding: 10px 45px;
            text-decoration: none;
            outline: none;
            font-family: 'Lora', serif;
            transition: .5s linear;
        }
        .admin .fa {
            font-family: "FontAwesome";
            color: inherit;
            padding-left: 10px;
        }
        .admin .submenu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 10;
            -webkit-transition: 0.5s ease-in-out;
            -moz-transition: 0.5s ease-in-out;
            -o-transition: 0.5s ease-in-out;
            transition: 0.5s ease-in-out;
        }
        .admin .oneadmin ul {
            background: #ECDAD6;
        }
        .admin .oneadmin ul a {
            color: #000000;
        }
        .admin .oneadmin .submenu {
            display: none;
            background: #f3c7b2;
        }
        .admin .oneadmin ul li:hover .submenu {
            display: block;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 header_logo">
                <div class="logo">
                    <a href="/"><img src="/img/logo/logo.png" alt="Логотип" class="logo_img"></a>
                </div>
            </div>

            <div class="col-md-8 col-lg-7 col-xl-8 header_nav">
                <nav class="nav_haeder">
                    <ul class="nav">
                        <li><a href="/news">Новости</a> </li>
                        <li><a href="/app">Приложения</a></li>
                        <li><a href="/contact">Контакты</a></li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <li class="menu_ht_item"><a href="/profile" class="menu_link">Профиль</a></li>
                            @if(\Illuminate\Support\Facades\Auth::user()->is_admin == 1)
                                <li class="menu_ht_item"><a href="/admin" class="menu_link">Админка</a></li>
                            @endif
                            <li class="menu_ht_item"><a href="/logout" class="menu_link">Выход</a></li>

                        @else
                            <li class="menu_ht_item"><a href="/login" class="menu_link">Вход</a></li>
                            <li class="menu_ht_item"><a href="/register" class="menu_link">Регистрация</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="col-md-1 header_btn_div">
                <button class="btn_header">
                    <i class="fab fa-angellist"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="header_two">
    <div class="container">
        <ul class="menu_header_two">
            <li class="menu_ht_item"><a href="/" class="menu_link">Главная</a></li>
            <li class="menu_ht_item"><a href="/news" class="menu_link">Новости</a></li>
            <li class="menu_ht_item"><a href="/app" class="menu_link">Приложения</a></li>
            <li class="menu_ht_item"><a href="/contact" class="menu_link">Контакты</a></li>
            @if( Auth::check())
                <li class="menu_ht_item"><a href="/profile" class="menu_link">Профиль</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->is_admin == 1)
                    <li class="menu_ht_item"><a href="/admin" class="menu_link">Админка</a></li>
                @endif
                <li class="menu_ht_item"><a href="/logout" class="menu_link">Выход</a></li>
            @else
                <li class="menu_ht_item"><a href="/login" class="menu_link">Вход</a></li>
                <li class="menu_ht_item"><a href="/register" class="menu_link">Регистрация</a></li>
            @endif
        </ul>
    </div>
</div>

<div class="gamburger">
    <div class="gamburger_wrapper">
        <div class="gamburger_menu">
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
        </div>
    </div>
</div>
<main class="crowded_contacts">
    @yield('content')

</main>

<footer>
    <div class="title">Copyright © 2001 - 2014  Cssauthor.com</div>
</footer>

<script src="js/script.js"></script>
</body>
</html>