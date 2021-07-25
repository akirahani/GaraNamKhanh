<!doctype html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('assets/css/font-awesome-customer.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/style_login_customer.css')}}" rel='stylesheet' type='text/css' media="all" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel='stylesheet' />
</head>
<body style="	background:url('{{asset('assets/images/login1.jpg')}}') ">
<h1 class="w3ls"></h1>
<div class="content-w3ls">
	<div class="content-agile1" style=" background: url('{{ asset('assets/images/content.jpg')}}') no-repeat;">
		<h2 class="agileits1">Login</h2>
		<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="content-agile2 ">
        <form action="{{ url('/customer/login') }}" method="POST" style="margin-top:5%;" >
             @csrf
			<div class="form-control w3layouts"> 
				<!-- <input type="text" id="firstname" name="firstname" placeholder="First Name" title="Please enter your First Name" required=""> -->
                <input type="text" id="email" class="form-control input-shadow" name="email" placeholder="Enter Email">
			</div>
			<div class="form-control w3layouts">	
				<input type="password" id="firstname" name="password" placeholder="Password" title="Please enter your Password" required="">
			</div>
			<input type="submit" class="Login " value="Login">
		</form>
		<div class="register-to-link">	
					<p class="text-warning">	
						<i class="fas fa-question-circle" ></i>  Do not have an account?
						<a href="{{url('/customer/register')}}"> Sign Up here</a> 
					</p>
		</div>
	</div>
	<div class="clear"></div>
</div>

</body>
</html>