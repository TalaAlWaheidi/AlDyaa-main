{{-- @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]) --}}
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
    <link rel="stylesheet" href="{{asset('melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('melody/css/style.css')}}">
</head>

<body>
    <div id="app">
        <div class="container-scroller">
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index-2.html"><img
                            src="{{asset('melody/images/logo.svg')}}" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index-2.html"><img
                            src="{{asset('melody/images/logo-mini.svg')}}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="fas fa-bars"></span>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item nav-search d-none d-md-flex">
                            <div class="nav-link">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item d-none d-lg-flex">
                            <a class="nav-link" href="#">
                                <span class="btn btn-primary">+ Create new</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown d-none d-lg-flex">
                            <div class="nav-link">
                                <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown"
                                    data-toggle="dropdown">English</span>
                                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                                    <a class="dropdown-item font-weight-medium" href="#">
                                        French
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item font-weight-medium" href="#">
                                        Espanol
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item font-weight-medium" href="#">
                                        Latin
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item font-weight-medium" href="#">
                                        Arabic
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="fas fa-bell mx-0"></i>
                                <span class="count">16</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <a class="dropdown-item">
                                    <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                                    </p>
                                    <span class="badge badge-pill badge-warning float-right">View all</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="fas fa-exclamation-circle mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-medium">Application Error</h6>
                                        <p class="font-weight-light small-text">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="fas fa-wrench mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-medium">Settings</h6>
                                        <p class="font-weight-light small-text">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="far fa-envelope mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-medium">New user registration</h6>
                                        <p class="font-weight-light small-text">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-envelope mx-0"></i>
                                <span class="count">25</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <div class="dropdown-item">
                                    <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                                    </p>
                                    <span class="badge badge-info badge-pill float-right">View all</span>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('melody/images/faces/face4.jpg')}}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                                            <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            The meeting is cancelled
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('melody/images/faces/face2.jpg')}}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                                            <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            New product launch
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{asset('melody/images/faces/face3.jpg')}}" alt="image"
                                            class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                                            <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            Upcoming board meeting
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="{{asset('melody/images/faces/face5.jpg')}}" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="fas fa-cog text-primary"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off text-primary"></i>

                                    {{ __('Logout') }}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"
                                        style="display: none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="fas fa-bars"></span>
                    </button>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
            <div class="container-fluid page-body-wrapper">
                @include('layouts.sidebar')
                <main class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')

                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="{{asset('melody/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('melody/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('melody/js/off-canvas.js')}}"></script>
    <script src="{{asset('melody/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('melody/js/misc.js')}}"></script>
    <script src="{{asset('melody/js/settings.js')}}"></script>
    <script src="{{asset('melody/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('melody/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->

    @include('sweetalert::alert')
    @yield('js')
</body>

</html>
