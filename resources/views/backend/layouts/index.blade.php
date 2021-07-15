<!doctype html>

@include('backend.layouts.head')
<body class="bg-theme bg-theme2">
    @include('backend.layouts.sidebar')
    @include('backend.layouts.header')
    <main class="py-4">
        
        @yield('content')
    </main>
    @include('backend.layouts.footer')
</body>
</html>
