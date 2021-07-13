<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Primary Meta Tags -->
  <title>Разработка web-приложения для ведения проектов</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta name="author" content="Themesberg">
  <meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
  <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
  <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://demo.themesberg.com/volt">
  <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="og:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
  <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://demo.themesberg.com/volt">
  <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="twitter:description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
  <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-bootstrap-5-dashboard/volt-bootstrap-5-dashboard-preview.jpg">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Fontawesome -->
  <link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="../../css/volt.css" rel="stylesheet">

  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
      <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container-fluid bg-soft">
    <div class="row">
      <div class="col-12">

        <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
          <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
              <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                  <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>

                <div class="d-block">
                  <h2 class="h6">Hi, Jane</h2>
                  <a href="../../pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>

              </div>
              <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation"></a>
              </div>
            </div>

            <ul class="nav flex-column">

              <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
              <li class="nav-item ">
                <a href="/all-project" class="nav-link">
                  <span class="sidebar-icon"><span class="fas fa-table"></span></span>
                  <span>Все мои проекты</span>
                </a>
              </li>
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
              <!--<li class="nav-item ">
                <a href="../../pages/settings.html" class="nav-link">
                  <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                  <span>Настройка проектов</span>
                </a>
              </li>
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>-->
              <li class="nav-item ">
                <a href="/сompleted-project" class="nav-link">
                  <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
                  <span>Выполненные</span>
                </a>
              </li>
              <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
              <li class="nav-item ">
                <a href="/unfulfilled-project" class="nav-link">
                  <span class="sidebar-icon"><span class="fas fa-box-open"></span></span>
                  <span> Невыполненные</span>
                </a>
              </li>

              <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>



            </ul>
          </div>
        </nav>

        <main class="content">

          <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
            <div class="container-fluid px-0">
              <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex">
                  <!-- Search form -->

                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                

                  <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{ Auth::user()->img }}">
                        <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                          <span class="mb-0 font-small font-weight-bold">{{ Auth::user()->name }}</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                      <a class="dropdown-item font-weight-bold" href="/home"><span class="far fa-user-circle"></span>Мой профиль</a>
                      <a class="dropdown-item font-weight-bold" href="/change-profile"><span class="fas fa-cog"></span>Настройки</a>
                      <div role="separator" class="dropdown-divider"></div>

                      <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt text-danger"></span>Выйти</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          @yield('content')
          <footer class="footer section py-5">
            <div class="row">
              <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <p class="mb-0 text-center text-xl-left">Copyright © 2020-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank"> | Den</a></p>
              </div>

              <div class="col-12 col-lg-6">

              </div>
            </div>
          </footer>

        </main>
      </div>
    </div>
  </div>

  <!-- Core -->
  <script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

  <!-- Jarallax -->
  <script src="../../vendor/jarallax/dist/jarallax.min.js"></script>

  <!-- Smooth scroll -->
  <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Count up -->
  <script src="../../vendor/countup.js/dist/countUp.umd.js"></script>

  <!-- Notyf -->
  <script src="../../vendor/notyf/notyf.min.js"></script>

  <!-- Charts -->
  <script src="../../vendor/chartist/dist/chartist.min.js"></script>
  <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Simplebar -->
  <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="../../assets/js/volt.js"></script>


</body>

</html>





<!--
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                    <ul class="navbar-nav mr-auto">

                    </ul>

              
                    <ul class="navbar-nav ml-auto">
                 
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
        </main>
    </div>
</body>
</html>
-->