<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Baguio Errand</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">

</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Baguio Errand
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

    </div>

    <footer>
           <div class="brand">
               <div class="image">
                <a href="/"><img src="/img/otw.png" alt="image"></a>
                <h3>Baguio Errand</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Libero saepe quibusdam voluptate quia tempore quasi porro, 
                   nulla similique optio exercitationem.</p>
           </div>

           <div class="social">
                <div class="support">
                    <h3>Support</h3>
                    <ul>
                    <a href="#"><li>FAQs</li></a>
                    <a href="#"><li>Customer Support</li></a>
                    <a href="#"><li>How to</li></a>
                    </ul>
                </div>

               <div class="social-links">
                <h3>Get in touch</h3>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-yahoo" aria-hidden="true"></i></a>
                </div>             
           </div>


           <div class="extra">
               <div class="company">
                   <h3>Company</h3>
                   <ul>
                      <a href="#"><li>Careers</li></a>
                      <a href="#"><li>Locations</li></a>
                      <a href="#"><li>Privacy</li></a>
                      <a href="#"><li>Terms</li></a>
                   </ul>
               </div>
           </div>
        </footer>
</body>
</html>
