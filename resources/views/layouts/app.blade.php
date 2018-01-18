<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Advanced CMS') }}</title>

    <!-- Styles -->
      {!! Html::style('css/app.css') !!}


</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">

          <nav class="navbar has-shadow">
            <div class="container">
              <div class="nav-left">
                <a class="nav-item" href="{{route('home')}}">
                  <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Blog</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">Contact</a>
                <a href="#" class="nav-item is-tab is-hidden-mobile">About</a>
              </div>

              <div class="nav-right">
              @if (Auth::guest())
                <a href="" class="nav-item is-tab">Join the Community</a>
                <a href="#" class="nav-item is-tab">Login</a>
              @else
                <div class="dropdown is-active">
                  <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                      <span>Dropdown button</span>
                      <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                      </span>
                    </button>
                  </div>
                  <div class="dropdown-menu" id="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                      <a href="#" class="dropdown-item">
                        Dropdown item
                      </a>
                      <a class="dropdown-item">
                        Other dropdown item
                      </a>
                      <a href="#" class="dropdown-item is-active">
                        Active dropdown item
                      </a>
                      <a href="#" class="dropdown-item">
                        Other dropdown item
                      </a>
                      <hr class="dropdown-divider">
                      <a href="#" class="dropdown-item">
                        With a divider
                      </a>
                    </div>
                  </div>
                </div>
              @endif
              </div>
            </div>
          </nav>

        </nav>
        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
