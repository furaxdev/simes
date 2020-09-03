<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <base href="./" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta name="description" content="Simes admin panel" />
    <meta name="author" content="Ravi Lamichhane" />
    <meta name="keyword" content="Society of innovative Mechanical Engineering Students SIMES" />
    <title>SIMES Dashboard</title>

    <link rel="apple-touch-icon" href="{{asset('img/11.png')}}">
    <link rel="icon" href="{{asset('img/11.png')}}">

    <!-- Main styles for this application-->
    <link rel="stylesheet" href={{asset('css/coreui.css')}} />

    <style>
        body {
            padding-bottom: 100px;
        }

        .level {
            display: flex;
            align-items: center;
        }

        .level-item {
            margin-right: 1em;
        }

        .flex {
            flex: 1;
        }

        .mr-1 {
            margin-right: 1em;
        }

        .ml-a {
            margin-left: auto;
        }

        [v-cloak] {
            display: none;
        }

        .ais-highlight>em {
            background: yellow;
            font-style: normal;
        }
    </style>
    <script src="https://kit.fontawesome.com/019078b0f5.js" crossorigin="anonymous"></script>
    @yield('css')
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.11.1/trix.css">
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>

<body>
    <div id="app">
    @include('inc.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href=""><img
                    class="c-header-brand" src={{asset('img/11.png')}} width="97" height="46"
                    alt="CoreUI Logo" /></a>
            <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <span class="c-header-toggler-icon"></span>
            </button>



            <ul class="c-header-nav d-md-down-none">

              <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="">Home</a>
            </li>
              <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="blog">Blog</a>
            </li>
              <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="publishes">Publishes</a>
            </li>
            @guest

                @else
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="threads">Forum</a>
                </li>
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="alumni">Alumni</a>
                </li>
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <a class="c-header-nav-link" href="studymaterials">Study Materials</a>
                </li>
            @endguest

            {{-- <li class="dropdown c-header-nav-item d-md-down-none mx-2">
                <a href="#" class="dropdown-toggle c-header-nav-link" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Channels <span class="caret"></span></a>

                <ul class="dropdown-menu">
                    @foreach ($channels as $channel)
                    <li class="dropdown-item c-header-nav-link"><a class="dropdown-item" href="/threads/{{ $channel->slug }}">{{ $channel->name }}</a></li>
                    @endforeach
                </ul>
            </li> --}}

            </ul>




            <ul class="c-header-nav d-md-down-none ml-auto mr-4">
                 <user-notifications></user-notifications>
                @guest
                <li class="nav-item">
                    <a class="c-header-nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="c-header-nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a style="color:rgba(0, 0, 21, 0.5); padding-top:2px;" id="navbarDropdown"
                        class="c-header-nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>

            <div class="c-subheader px-3">
                <!-- Breadcrumb-->
                <ol class="breadcrumb border-0 m-0">
                    <li class="breadcrumb-item">Simes</li>
                    <li class="breadcrumb-item"><a href="#"></a>Dashboard</li>

                    <!-- Breadcrumb Menu-->
                </ol>
            </div>
        </header>

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    @yield('dashboardcontent')

                    <flash message="{{ session('flash') }}"></flash>
                </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"
        integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9&#43;4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb" crossorigin="anonymous">
    </script>

    <script src={{asset('js/coreui.js')}}></script>
    <script src="{{ asset('vue/app.js') }}"></script>

    @yield('jsbottom')
    </div>
</body>


</html>
