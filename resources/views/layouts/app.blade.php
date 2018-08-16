<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nerdyblog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
          <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
              <img src="{{ asset('images\logotype_transparent_bg.png') }}" alt="logo" width="200">
            </a>
          </div>
          <div class="navbar-menu">
            <nav class="navbar-start">

              <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
              <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
              <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>


            </nav>
            <nav class="navbar-end" style="overflow:visible;">
              @if (Auth::guest())
              <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
              <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
              @else
                <button class="navbar-item is-tab dropdown is-aligned-right" type="button" name="button">
                Dropdown<span class="icon"><i class="fa fa-caret-down"></i></span>
                <ul class="navbar-dropdown">
                  <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-user-circle-o"></i></span> Profile</a></li>
                  <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-bell"></i></span> Notifications</a></li>
                  <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-cog"></i></span> Settings</a></li>
                  <li class="seperator"></li>
                  <li><a href="#"><span class="icon"><i class="m-r-5 fa fa-fw fa-window-close"></i></span> Logout</a></li>
                </ul>
              </button>
              @endif
            </nav>
          </div>
                    </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- SCRIPTS -->
    <!-- <script src="{{ asset('js/app.js') }}"> -->

    </script>
</body>
</html>
