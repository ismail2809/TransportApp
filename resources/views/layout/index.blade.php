<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{asset('assets/images/logo/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png') }}">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

    <!-- page css -->

    <!-- core css -->
    <link href="{{asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app header-success-gradient">
        <div class="layout">


           @include('layout.partials.header')
           @include('layout.partials.nav')

            <!-- Page Container START -->
            <div class="page-container">

            @yield('content')
            @include('layout.partials.footer')

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="{{asset('assets/js/vendor.js') }}"></script>

    <script src="{{asset('assets/js/app.min.js') }}"></script>

    <!-- page js -->
    
</body> 
</html>