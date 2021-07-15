
<div id="reader" style="width:100%"></div>
<input id="results" type="text" >
@foreach ($config as $item)
    <input type="text" id="session" value="{!! $item->session !!}">    
@endforeach

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
<script src="{{ asset('assets2/js/html5-qrcode.min.js') }}"></script>
<script src="{{ asset('assets2/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery-latest.pack.js') }}"></script>

<script>
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete" || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }
    /** Ugly function to write the results to a table dynamically. */
    
    docReady(function() {
            let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", 
            { 
                fps: 10,
                qrbox: 250,
                // Important notice: this is experimental feature, use it at your
                // own risk. See documentation in
                // mebjas@/html5-qrcode/src/experimental-features.ts
                experimentalFeatures: {
                    useBarCodeDetectorIfSupported: true
                }
            });
            hljs.initHighlightingOnLoad();
            var lastMessage;
            var codeId = 0;
            function onScanSuccess(decodedText, decodedResult) {
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
                          title: 'Your work has been saved',
                          showConfirmButton: false,
                          timer: 1500
                        });
                        setTimeout(function() {
                        window.location.replace("{!! route('member.home') !!}");}
                        , 3000);
                        }
                  });
                }
              html5QrcodeScanner.stop();
            }
            
            html5QrcodeScanner.render(onScanSuccess);
    });
</script>
