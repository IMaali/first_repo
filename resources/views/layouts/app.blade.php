
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style media="screen">
.navbar-brand {
text-decoration: none;
background-color:rgb(34, 176, 223);
  color: white;
  border: 5px solid rgb(34, 176, 223);
  border-radius: 12px;

}
.nav-link{
  text-decoration: none;
  background-color:rgb(34, 176, 223);
    color: white;
    border: 5px solid rgb(34, 176, 223);
    border-radius: 12px;
    position: absolute;
    right: 0;
}
.nav-link2{
  text-decoration: none;
  background-color:rgb(34, 176, 223);
    color: white;
    border: 5px solid rgb(34, 176, 223);
    border-radius: 12px;
    position: absolute;
    right: 0;
}
.dropdown-item{
  text-decoration: none;
  background-color:rgb(34, 176, 223);
    color: white;
    border: 5px solid rgb(34, 176, 223);
    border-radius: 12px;
}
</style>

</head>
<body>
  <br><br><br>
    <div id="app">
        <nav class="navbar ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))

                                    <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>

                            @endif

                            @if (Route::has('register'))
<br><br>
                                    <a class="nav-link2" href="{{ route('register') }}">{{ __('تسجيل جديد') }}</a>

<br><br>
                            @endif
                        @else
<br><br>
                                <a id="navbarDropdown" class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a><br><br>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
