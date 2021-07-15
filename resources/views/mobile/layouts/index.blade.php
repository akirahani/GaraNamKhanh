<!DOCTYPE html>
<html class="">

    @include('mobile.layouts.head')
    
    <body class="  html" data-header="light" data-footer="dark" data-header_align="center" data-menu_type="left"
    data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show"
    data-footer_menu_style="light">
    <div class="preloader-background">
      <div class="preloader-wrapper">
        <div id="preloader"></div>
      </div>
    </div>

    @include('mobile.layouts.nav')

    @yield('content')
    @include('mobile.layouts.menu-footer')
    @include('mobile.layouts.footer')
</body>

</html>