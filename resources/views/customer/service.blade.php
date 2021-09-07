
<link rel="stylesheet" href="{{asset('assets_customer3/css/docs.theme.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_customer3/css/owl.carousel.min.css')}}">
<script src="{{asset('assets_customer3/js/jquery.min.js')}}"></script> 
<script src="{{asset('assets_customer3/js/owl.carousel.js')}}"></script>
<style>
  .bg-17 {
    background-image: url('{{asset("assets/images/backlogin-5.jpg")}}');   
}
.inner_card {
    -webkit-transform: translate3d(0,0,0);
    background-size: cover;
    border: 0!important;
    max-height: 150000px;
    margin-bottom: 30px;
    background-position: center center!important;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
}
.shadow-l {
    box-shadow: 0 5px 15px 0 rgba(0,0,0,.09)!important;
}
.rounded-m {
    border-radius: 15px!important;
}
.mx-3 {
    margin-right: 1rem!important;
    margin-left: 1rem!important;
}
</style>
<section id="popular-destinations" class="popular-destinations py-5"  >
    <div class="home-demo " style="border-radius: 3rem">
      <div class="row at" style="background-image: url('{{asset('assets/images/back-cusom-search.png')}}') ">

          <h3>Seen</h3>
              <div class=" owl-carousel ">
           
                  <div class="splide__slide" id="double-slider-home-1-slide03" aria-hidden="true" tabindex="-1" >
                    <div data-card-height="250" class="inner_card mx-3 rounded-m shadow-l bg-17" style="height: 250px; width:250px">
                      <div class="card-bottom text-center" >
                        <h2 class="color-white font-900 mb-0"  style="color:black"><b>Lệnh sửa</b></h2>
                          <p class="text-center mb-3">
                            <i class="fa fa-star color-yellow-dark"></i>
                          </p>
                          <a href="#" class="btn btn-s btn-full text-uppercase font-900 bg-red-dark rounded-s me-2 ms-2 mb-2"></a>
                      </div>
                    <div class="card-overlay bg-gradient"></div>
                  </div>
           
              </div>
              <!-- <div class="item  col-lg-6">
                    <div class="splide__slide" id="double-slider-home-1-slide03" aria-hidden="true" tabindex="-1" >
                      <div data-card-height="250" class="inner_card mx-3 rounded-m shadow-l bg-17" style="height: 250px; width:250px">
                        <div class="card-bottom text-center">
                          <h2 class="font-900 mb-0" style="color:orange">Lệnh sửa</h2>
                            <p class="text-center mb-3">
                              <i class="fa fa-star color-yellow-dark"></i>
                            </p>
                            <a href="#" class="btn btn-s btn-full text-uppercase font-900 bg-red-dark rounded-s me-2 ms-2 mb-2"></a>
                        </div>
                      <div class="card-overlay bg-gradient"></div>
                    </div>
              </div> -->
   
        </div>
      </div>
</section>
<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    margin: 10,
    loop: true,
    responsive: [
    {
      breakpoint: 980,
      settings: {
    
        slidesToScroll: 1
      }
    }
  ]
  })
</script>



  