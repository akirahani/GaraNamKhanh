<div class="qrcode-container" style="text-align: center; display: block; margin: 100px auto">
    <div class="qrcode" id="qrcode">{{  QrCode::size(500)->generate(\App\Config::first()->session) }}</div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    
    setTimeout(function(){
        $.ajax({
            type: "POST",
            url: "{!! route('qrcode.update') !!}",
            data:{
                "_token": "{{ csrf_token() }}",
                "input":  '{!! md5(Str::random(8)) !!}', 
            },
          });
        location.reload();
    },90000);

</script>


