<div class="scan-div">
<div id="reader" style="width:100%"></div>
</div>
<input id="results" type='hidden'>

<input type="hidden" id="session" value="{!! \App\Config::first() !!}" >    


<script src="{{ asset('assets2/mobile/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets2/mobile/js/materialize.js') }}"></script>
<script src="{{ asset('assets2/mobile/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets2/mobile/js/init.js') }}"></script>
<script src="{{ asset('assets2/mobile/js/settings.js') }}"></script>

<script src="{{ asset('assets2/mobile/js/scripts.js') }}"></script>
<script src="{{ asset('assets2/js/html5-qrcode.min.js') }}"></script>
<script src="{{ asset('assets2/js/sweetalert2.all.min.js') }}"></script>

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
@if(\Auth::guard('member')->user())
<script>
    const config = { fps: 10, qrbox: 250, aspectRatio: 1.58888 };
    $('body').delegate('#scan_qrcode','click',function(){
        const html5QrCode = new Html5Qrcode("reader");
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            document.getElementById("results").value = decodedText;
            html5QrCode.stop();
            var code = $('#results').val();
            var session = $('#session').val();
            
            $.ajax({
                type: "POST",
                url: "{!! route('member.attendcane.store') !!}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "id":  {!! \Auth::guard('member')->user()->id  !!},
                    "code": code
                },
                success: function(){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Điểm danh thành công',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function() {
                        window.location.replace("{!! route('home') !!}");}
                        , 1000);
                },
                error: function() { 
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Mã Qrcode không đúng',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }     
                
            });
        
        };
        html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);
    })

</script>
@endif