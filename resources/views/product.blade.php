<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SnowboardShop</title>
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
	@include('headeruser')
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/K2LK.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Dijual!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">K2 Lil Kat</a></h3>
						<span class="actual">Rp1.999.999</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/K2.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">K2 Mini Turbo</a></h3>
						<span class="actual">Rp2.300.000</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/Nidecker.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Dijual!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Nidecker Micron</a></h3>
						<span class="actual">Rp1.250.000</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/SP.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Salomon Pulse</a></h3>
						<span class="actual">Rp2.499.999</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
			<div class="row">
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/SC.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Salomon Craft</a></h3>
						<span class="actual">Rp3.499.999</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/salomonsuper.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Dijual!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Salomon Super 8</a></h3>
						<span class="actual">Rp3.799.999</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/3.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Nitro Dropout</a></h3>
						<span class="actual">Rp5.499.999</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="#">
					<img src="snowboard/images/6.jpg" class="img-responsive" alt=""/>
					<span class="new-box">
						<span class="new-label">Baru</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">Dijual!</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#">Salomon X3</a></h3>
						<span class="actual">Rp1.200.000</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Tambahkan ke keranjang</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
		 </div>
	   </div>
	  </div>
	  @include('footeruser')
</body>	
</html>