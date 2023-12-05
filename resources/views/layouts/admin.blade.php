<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" h<!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        <head>
            <meta name="csrf-token" content="{{ csrf_token() }}">
        
            <title>{{ config('app.name', 'Ticket-Manager') }}</title>
        
            {{-- Modified --}}
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
            <meta content="" name="description">
            <meta content="" name="keywords">
        
            <!-- Favicons -->
            <link href="assets/img/favicon.png" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        
            <!-- Google Fonts -->
            <link href="https://fonts.gstatic.com" rel="preconnect">
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
                rel="stylesheet">
        
            <!-- Vendor CSS Files -->
            <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
            <!-- Template Main CSS File -->
            <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
            {{-- End Modified --}}
        
            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        
        <body class="font-sans antialiased">
        
            <body class="font-sans antialiased">
                {{-- <div class="min-h-screen bg-gray-100"> --}}
                @include('layouts.nav')
        
        
        
                <!-- ======= Header ======= -->
                <header id="header" class="header fixed-top d-flex align-items-center">
        
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        
                            <span class="d-none d-lg-block">Ticket Manager</span>
                        </a>
                        <i class="bi bi-list toggle-sidebar-btn"></i>
                    </div><!-- End Logo -->
        
        
        
                    <nav class="header-nav ms-auto">
                        <ul class="d-flex align-items-center">
        
        
        
                            <li class="nav-item dropdown pe-3">
        
                                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                    data-bs-toggle="dropdown">
                                    {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                                </a><!-- End Profile Iamge Icon -->
        
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                    <li class="dropdown-header">
                                        {{-- <h6>Kevin Anderson</h6> --}}
                                        <h2>Web Designer</h2>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
        
        
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
        
        
        
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
        
                                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="bi bi-box-arrow-right"></i>
                                                <span>Sign Out</span>
                                            </a>
                                        </form>
                                    </li>
        
                                </ul><!-- End Profile Dropdown Items -->
                            </li><!-- End Profile Nav -->
        
                        </ul>
                    </nav><!-- End Icons Navigation -->
        
                </header><!-- End Header -->
        
        
        
                <!-- Page Content -->
                <main id="main" class="main">
        
                    {{-- {{ $slot }} --}}
                    @yield('main-section')
                    {{-- </div> --}}
                </main>
        
        
                <!-- ======= Footer ======= -->
                <footer id="footer" class="footer fixed-bottom">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Ticket-Manager</span></strong>. All Rights Reserved
                    </div>
                </footer><!-- End Footer -->
        
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>
        
            </body>
            <!-- Vendor JS Files -->
            <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
            <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
            <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
            <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        
            <!-- Template Main JS File -->
            <script src="{{ asset('assets/js/main.js') }}"></script>
        
        
        </html>
        {{-- ref="https://fonts.bunny.net"> --}}
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
             @include('layouts.nav')
           
                        <!-- Page Content -->
                        {{-- <main>
                            {{ $slot }}
                        </main> --}}
                    </div>
                </body>
            </html>
               

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}
        </div>
    </body>
</html>
