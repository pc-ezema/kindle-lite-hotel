<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{config('app.name')}}" />
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template" />
    <meta name="author" content="ThemeOri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>{{config('app.name')}} - {{$title}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stack for page-specific styles -->
    @stack('styles')
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <!-- <link rel="stylesheet" href="{{url('assets/css/all.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('assets/sass/style.css')}}">
</head>

<body>
    <!-- Preloader start -->
    <div class="theme-loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <!-- Header Area Start -->
    @includeIf('layouts.header')
    <!-- Header Area End -->
    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->
    <!-- Footer Area Start -->
    @includeIf('layouts.footer')
    <!-- Footer Area End -->
    <!-- Scroll Btn Start -->
    <div class="scroll-up">
        <svg  width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    stroke="#e1c272" stroke-width="2" fill="none" />
        </svg>
    </div>
    <!-- Scroll Btn End -->
    <!-- Main JS -->
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- Counter Up JS -->
    <script src="{{url('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select JS -->
    <script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Swiper Bundle JS -->
    <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{url('assets/js/jquery.waypoints.min.js')}}"></script>
    <!-- Mean Menu JS -->
    <script src="{{url('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- Isotope JS -->
    <script src="{{url('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{url('assets/js/custom.js')}}"></script>
    <!-- Page-specific scripts -->
    @stack('scripts')
</body>

</html>