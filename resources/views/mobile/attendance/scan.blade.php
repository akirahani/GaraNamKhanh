
<div id="reader" style="width:100%"></div>
<input id="results" type='hidden'>
@foreach ($config as $item)
<input type="hidden" id="session" value="{!! $item->session !!}" >    
@endforeach

<script src="{{ asset('assets2/js/html5-qrcode.min.js') }}"></script>
<script src="{{ asset('assets2/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery-latest.pack.js') }}"></script>

<script>

    const html5QrCode = new Html5Qrcode("reader");
    
    const qrCodeSuccessCallback = (decodedText, decodedResult) => {
        document.getElementById("results").value = decodedText;
        var send = $('#results').val();
        var session = $('#session').val();
        if(send == session){
          $.ajax({
            type: "POST",
            url: "{!! route('member.attendcane.store') !!}",
            data:{
                "_token": "{{ csrf_token() }}",
                "id":  {!! $member->id  !!},
              
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
                    window.location.replace("{!! route('member.home') !!}");}
                    , 1000);
                      html5QrCode.stop();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Mã Qrcode không đúng',
                    showConfirmButton: false,
                    timer: 1500
                });
            }  
          });
        }
      
    };
    const config = { fps: 10, qrbox: 500, aspectRatio: 1.58888 };
    html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);

</script>
