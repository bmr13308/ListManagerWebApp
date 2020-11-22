<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'App') }} : {{ ucfirst($title) }}</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="header__container">
            <div class="header__section flex-left">
                <span class="">
                    <img class="header__img-pills" src="images/pills.svg" alt="" />
                </span>
                <span>
                    <h1 class="header__title">SPEAKER <br />PORTAL</h1>
                </span>
            </div>
            <div class="header__section  flex-right">

                <div class="header__menu">

                    <div class="row flex-right gradient-border-bottom">
                        <select class="header__menu_lang-picker header__menu__element" name="language-picker-select"
                            id="language-picker-select">
                            <option lang="en" value="english" selected>English</option>
                        </select>
                        <a class="header__menu__element header__menu__contact">contact</a>
                        <a class="header__menu__element">sitemap</a>
                    </div>
                    <div class="row flex-right">

                        <a class="header__menu__element header__menu__btn" href="/list">
                            <img class="header__img-folder" src="images/folder.svg" alt="">
                            My Collection </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="header__menu__element header__menu__btn">
                                <img class="header__img-close" src="images/close.svg" alt="">
                                Logout </button>
                        </form>
                    </div>
                </div>
                <img class="header__img-logo" src="images/logo.svg" alt="">
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="nav__section">
            <span class="nav_group">
                <a class="nav__a" href="/login">
                    <svg id="nav__home-button" class="header__img-home" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 12 13">
                        <defs></defs>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <polyline class="cls-1"
                                    points="11.01 13.9 11.01 5.89 12 5.89 12 4.99 6.02 0 0 4.99 0 5.91 0.96 5.91 1 13.86 5.02 13.86 4.99 8.89 6.99 8.89 6.99 13.86" />
                            </g>
                        </g>
                    </svg>

                </a>
                <a class="nav__a" href="/list">MPAF</a>
                <a class="nav__a">VENOUS</a>
                <a class="nav__a">ACS</a>
                <a class="nav__a">Kivaroxaban studies</a>
                <a class="nav__a nav__a--last">Background information</a>
            </span>

        </div>

    </nav>

    <main class="main">


        @yield('content')


    </main>

    <footer class="footer">


        <p class="footer__p ">
            <a>Conditions of use </a>
            |
            <a>Privacy statement</a>
            |
            <a>Imprint</a>
        </p>


        <p class="footer__p footer__p--color-black">This site is intended to provide information to an international
            audience outside the USA and UK.</p>

    </footer>

    <script>
        if (window.location.pathname !== '/' && window.location.pathname !== '/login') {
            $('#nav__home-button').addClass('header__img-home--color-purple');
        }

        $(".nav__a").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("active-page-link");
            }
        });

    </script>
</body>

</html>
