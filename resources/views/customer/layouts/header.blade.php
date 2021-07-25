  
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!-- <header class="fixed-top page-header">
    <div class="container-fluid container-fluid-max">
         

      <nav id="navbar" class="navbar navbar-expand-lg navbar-dark mx-auto">
      <img src="{{ asset('assets/images/logonk.png')}}" alt="logo icon" style="width:15% " >


      <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link" href="#process" style=" color:#fff">Dịch vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#popular-destinations" style="  color:#fff  ">popular-destinations</a>
            </li>
           
          </ul> 
       
              <a href="" class="nav-link dropdown-toggle" href="#"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left:90%">
                  <a class="dropdown-item" href="{{url('/customer/logout')}}">Đăng xuất</a>
              </div>

      </nav>
    </div>
  </header> -->
  <link href="{{asset('assets/css/style_header.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/reset.css')}}" rel="stylesheet">
  <div class="panel-closing with-panel-right-reveal"></div>
  <div class="body-overlay active" ></div>
  <!-- <div class="panel-close panel-close--left active"><i class="fas fa-times"></i></div> -->
<div class="panel panel--left active">
                  <!-- Slider -->
                 <div class="panel__navigation swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
			<div class="swiper-slide swiper-slide-active" style="width: 295px;">
				<div class="user-details">
					<div class="user-details__thumb"><img src="../assets/images/photos/avatar.jpg" alt="" title=""></div>
					<div class="user-details__title"><span>Hello</span> Patrick Vue</div>
				</div>
				<nav class="main-nav">
					<ul>
						<li class="subnav opensubnav"><img src="../assets/images/icons/gray/home.svg" alt="" title=""><span>Home Pages</span><i><img src="../assets/images/icons/gray/arrow-right.svg" alt="" title=""></i></li>
						<li><a href="main.html"><img src="../assets/images/icons/gray/checked.svg" alt="" title=""><span>Features</span></a></li>
						<li><a href="blog.html"><img src="../assets/images/icons/gray/news.svg" alt="" title=""><span>News</span></a></li>	
						<li><a href="shop.html"><img src="../assets/images/icons/gray/cart.svg" alt="" title=""><span>Shop</span></a></li>
					</ul>
				</nav>
			</div>	
			
		    </div>
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>
  <div id="panel-right"><div class="panel panel--right active">
		<div class="user-profile">
			<div class="user-profile__thumb"><img src="../assets/images/photos/avatar.jpg" alt="" title=""></div>
			<div class="user-profile__name">Patrick Vue</div>
			<div class="buttons buttons--centered mb-20">
				<div class="info-box"><span>Followers</span> 25k</div>
				<div class="info-box"><span>Following</span> 9k</div>
				<div class="info-box"><span>Likes</span>1.5k</div>
			</div>
			<div class="buttons buttons--centered mt-3">
				<a href="{{url('/customer/logout')}}" class="button button--green button--ex-small ml-10">Đăng xuất</a>
			</div>
		</div>
		<nav class="main-nav">
			<ul>
				
			</ul>
		</nav>
</div>  
<!-- <div class="page page--intro" data-page="intro"> -->
	
<header class="header header--fixed" style="background-color:#1864ce;">	
		<div class="header__inner">	
			<div class="header__icon header__icon--menu open-panel" data-panel="left" data-arrow="right"><span></span><span></span><span></span><span></span><span></span><span></span></div>
			<div class="header__logo header__logo--text" ><a href="#"> <img src="{{ asset('assets/images/logonk.png')}}" alt="logo icon" style="width:20%; margin-left:42%" >
</a></div>	
			<div class="header__icon open-panel" data-panel="right" data-arrow="left"><i class="fas fa-user-circle" style="color:#fff"></i>
                </div>
	</header>
<!-- </div> -->
 
  <script src="{{asset('assets/js/header_customer.js')}}" ></script> 
  <script src="{{asset('assets/js/swipper.js')}}" ></script> 