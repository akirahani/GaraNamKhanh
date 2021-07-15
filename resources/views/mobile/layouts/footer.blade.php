

<script src="{{ asset('assets2/mobile/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets2/mobile/js/materialize.js') }}"></script>
<script src="{{ asset('assets2/mobile/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets2/mobile/js/init.js') }}"></script>
<script src="{{ asset('assets2/mobile/js/settings.js') }}"></script>

<script src="{{ asset('assets2/mobile/js/scripts.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(".carousel-fullscreen.carousel-slider").carousel({
            fullWidth: true,
            indicators: true
        });
        setTimeout(autoplay, 3500);
        function autoplay() {
            $(".carousel").carousel("next");
            setTimeout(autoplay, 3500);
        }
        $(".slider3").slider({
            indicators: false,
            height: 200,
        });

    });
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
        $('.preloader-background').delay(10).fadeOut('slow');
    });
</script>
