
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <div class="break_line-all"> </div>
  <style>
    .box {
      font-family: Arial, Helvetica, sans-serif;
      height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: linear-gradient(to bottom right, #2193b0, #6dd5ed);
      border: 3px solid #FFF;
      border-radius: 8px;
      color: #FFF;
      font-size: 26px;
    }
    body {
      padding: 0;
      box-sizing: border-box;
      font-family: Nunito;
    }
    .container {
      max-width: 700px;
      margin: 0 auto;
    }
    .carousel {
      max-width: 600px;
      margin: 0 auto;
    }

    img {
      max-width: 100%;
      display: block;
      padding: .5em;
    }
    .example-box {
      margin-bottom: 50px;
      /* box-shadow: 0 2px 5px rgba(0,0,0,.4); */
      padding: 1em;
      border-radius: 12px;
      border: 1px solid #DFDFDF;
    }

  </style>
    <section id="popular-destinations" class="popular-destinations py-5" style="background-image: url('{{asset('assets/images/back-cusom-search.png')}}') " style="border-radius: 3rem">
      <div class="container">
        <div class="example-box"> 
          <div class="carousel-multiple-items">
            <div>
              <div class="box">1</div>
            </div>
            <div>
              <div class="box">2</div>
            </div>
            <div>
              <div class="box">3</div>

            </div>
          </div>
          </div>
      </div> 
    </section>

 
 
 <script href="{{asset('assets/js/slider.min.js')}}"></script>
  <script>
    new ElderCarousel('.carousel-single-item', { items: 1, infinite: false })

    new ElderCarousel('.carousel-multiple-items', { items: 3 })

  </script>

			

