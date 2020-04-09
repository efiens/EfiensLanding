<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Efiens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xl">
            <a class="navbar-brand header" href="/">
                @if (request()->is('/'))
                    Efiens
                @else
                    <img style="height: 4rem" src="./img/EFIENS-10-07.png" alt="Efiens" />
                @endif
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExample07XL">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('member')) ? 'active' : '' }}" href="/member">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('achievement')) ? 'active' : '' }}" href="/achievement">Achievement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">Blog <i class="fa fa-external-link"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if ($header)
    <div class="text-center center text-header" style="flex-direction: column;">
        @if (request()->is('/'))
            <img height="70%" src="./img/EFIENS-10-07.png" alt="Efiens" />
        @else
            <p class="header">@yield('header')</p>
        @endif
    </div>
    @endif
    <div class="container-xl container-cus" style="padding: 3rem 0;">
        @section('content')
        @show
    </div>
    <div>
        @section('content2')
        @show
    </div>
    <footer class="footer">
        <div class="container">
            <!-- <p>Sponsors</p>
            <div style="display: flex; justify-content: space-between;">
            @component('sponsor',["sponsors" => [
                (object) array(
                    "logo" => "https://static.zalopay.com.vn/stc/quydinh/ver181218/images/logozlp1.png",
                ),
                (object) array(
                    "logo" => "https://upload.wikimedia.org/wikipedia/vi/8/80/FPT_New_Logo.png",
                ),
                (object) array(
                    "logo" => "https://ctftime.org/media/cache/12/e0/12e0d1e31afaa1d777b1984328e1706b.png",
                ),
                (object) array(
                    "logo" => "https://webstockreview.net/images/google-logo-white-png-1.png",
                ),
            ]])
            @endcomponent
            </div> -->
            <div class="footer__content" style="display: flex; justify-content: space-between;">
                <div style="display: flex; align-items: center;">
                    <p style="margin: 0;">© 2020 Efiens | </p>
                    <div style="display: inline-flex; padding-bottom: 1px; padding-left: 5px">
                    <a class="social" href="mailto:efiens.team@gmail.com?Subject=[Hello Efiens]" target="_top">
                        <img class="footer__social__icon" src="/img/logo/gmail_gray@2x.png" alt="gmail" />
                    </a>
                    <a class="social" href="https://www.facebook.com/efiens.team" target="_blank">
                        <img class="footer__social__icon" src="/img/logo/facebook_gray@2x.png" alt="fb" />
                    </a>
                    <a class="social" href="https://twitter.com/efiens.team" target="_blank">
                        <img class="footer__social__icon" src="/img/logo/twitter_gray@2x.png" alt="twitter" />
                    </a>
                    <a class="social" href="https://discord.gg/ZzkVUKK" target="_blank">
                        <img class="footer__social__icon" src="/img/logo/discord_gray@2x.png" alt="discord" />
                    </a>
                    </div>
                </div>
                <div>
                    <a href="#">Back to top</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
</body>

</html>
