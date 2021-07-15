<html>
    <body>
        <div id="reader" style="width:100%"></div>
        <input id="results" type="text" >
    </body>
    <script src="assets2/js/html5-qrcode.min.js"></script>
    <script>
        
        const html5QrCode = new Html5Qrcode("reader");
    
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            
        document.getElementById("results").value = decodedText;
        };
        const config = { fps: 10, qrbox: 500, aspectRatio: 1.58888 };
        html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback);  
    </script>

</html>