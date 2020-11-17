<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SnowboardShop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{url('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{url('assets/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href="{{url('assets/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="{{url('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('assets/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="{{url('assets/js/metisMenu.min.js')}}"></script>
<script src="{{url('assets/js/custom.js')}}"></script>
<link href="{{url('assets/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body>
<div class="main-content">
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Snowboardshop</h2>
				<div class="widget-shadow">
					<div class="login-body">
						@include('template.utils.notif')
						<form action="{{url('loginadmin')}}" method="post">
							@csrf
							<input type="email" class="user"  placeholder="Email" name="email">
							<input type="password" class="lock" placeholder="Password" name="password">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">lupa password?	</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							<div class="registration">
								Belum Punya Akun ?
								<a class="" href="#">
									Buat Akun
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		@include('template.section.footer')
        <!--//footer-->
	</div>
		
	<!--scrolling js-->
	<script src="{{url('assets/js/jquery.nicescroll.js')}}"></script>
	<script src="{{url('assets/js/scripts.js')}}"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="{{url('assets/js/bootstrap.js')}}"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>