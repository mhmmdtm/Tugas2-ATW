<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SnowboardShop | Home</title>
<link href="snowboard/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="snowboard/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="snowboard/js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="snowboard/css/fwslider.css" media="all">
<script src="snowboard/js/jquery-ui.min.js"></script>
<script src="snowboard/js/fwslider.js"></script>
<!--end slider -->
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
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="snowboard/images/slider1.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Meluncur Tak Terbatas<br>Dan Melampauinya</h1>
                        <!-- /Text title -->
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="snowboard/images/slider2.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Meluncur Tak Terbatas<br>Dan Melampauinya</h1>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>snowboards</h2>
			<p>which one is your favorite</p>
			<div class="close_but"><i class="close1"> </i></div>
				<ul id="flexiselDemo3">
				<li><img src="snowboard/images/board1.jpg" /></li>
				<li><img src="snowboard/images/board2.jpg" /></li>
				<li><img src="snowboard/images/board3.jpg" /></li>
				<li><img src="snowboard/images/board4.jpg" /></li>
				<li><img src="snowboard/images/board5.jpg" /></li>
			</ul>
		<h3>SnowBoard Extreme Series</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="snowboard/js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
			  <div class="col-md-7">
				<h3>The Mountains<br>Snowboarding</h3>
				<p class="m_1">Seluncur papan salju adalah sebuah kegiatan rekreasional dan olahraga Olimpiade Musim Dingin dan Paralimpiade dimana seseorang menuruni tempat miring yang diselimuti salju sampil berdiri di atas papan salju. Pengembangan seluncur papan salju terinspirasi oleh seluncur papan, seluncur kereta salju, selancar dan ski.</p>
			  </div>
			</div>
		</div>
	</div>
		@include('footeruser')
</body>	
</html>