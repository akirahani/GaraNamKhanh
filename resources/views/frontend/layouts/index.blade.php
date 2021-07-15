<!doctype html>
<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>
<body class="theme-green">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="https://wrraptheme.com/templates/lucid/hr/html/assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
            <p>Please wait...</p>        
        </div>
    </div>
    <div id="wrapper">
        @include('frontend.layouts.navbar')
        @include('frontend.layouts.sidebar')
        @yield('content')
    </div>
        @include('frontend.layouts.footer')
        @yield('script')
</body>
</html>