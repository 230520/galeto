<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title', 'Website Galeri Foto')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('template/assets/icongaleto.png') }}">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('template/css/styles.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #9DBC98;" id="mainNav">
            <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z"/>
              </svg>
                GALETO
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Galeri Foto
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        @guest
                        <li class="nav-item"><a class="nav-link scrollto {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link scrollto {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                        @else
                        <div class="d-flex">
                            <li><a class="nav-link text-dark" href="@yield('link')">@yield('link_text')</a></li>
                            <li><a class="nav-link text-dark" href="@yield('link1')">@yield('link1_text')</a></li>
                            <li class="nav-item dropdown align-self-center">
                                <a class="nav-link text-dark dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> {{ Auth::user()->username }}</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <button type="submit" type="dropdown-item nav-link scrollto text-dark" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                                        </button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- section-->
        <section class="page-section btn-light" id="portfolio">
            <div class="container">
               @yield('content')
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('template/css/styles.css') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
