<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Efiens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

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
                        <a class="nav-link {{ (request()->is('member')) ? 'active' : '' }}" href="/member">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('achievement')) ? 'active' : '' }}" href="/achievement">Achievement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('sponsor')) ? 'active' : '' }}" href="/sponsor">Sponsor</a>
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
    <footer class="footer">
        <div class="container" style="display: flex; justify-content: space-between;">
            <p style="margin: 0;">© 2020 Efiens.</p>
            <a href="#">Back to top</a>
        </div>
    </footer>
    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
</body>

</html>
