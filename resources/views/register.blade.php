<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SnowboardShop | Register</title>
<link href="snowboard/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="snowboard/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="snowboard/js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
						<form> 
								<div class="register-top-grid">
										<h3>Identitas</h3>
										<div>
											<span>Nama Depan<label>*</label></span>
											<input type="text"> 
										</div>
										<div>
											<span>Nama Belakang<label>*</label></span>
											<input type="text"> 
										</div>
										<div>
											<span>Email<label>*</label></span>
											<input type="text"> 
										</div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>Informasi Login</h3>
										<div>
											<span>Password<label>*</label></span>
											<input type="text">
										</div>
										<div>
											<span>Konfirmasi password<label>*</label></span>
											<input type="text">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="button"><a href="{{ url ("/login") }}">Daftar</a></div>
						</form>
					</div>
		   </div>
	  </div>
	  @include('footeruser')
</body>	
</html>