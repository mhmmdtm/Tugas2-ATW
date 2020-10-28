<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="{{ url ("/index") }}"><img src="snowboard/images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="snowboard/images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="{{ url ("/shop") }}">Produk</a></li>
						    	<li><a href="{{ url ("/cart") }}">Keranjang</a></li>							
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="snowboard/js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="snowboard/js/classie.js"></script>
						<script src="snowboard/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="snowboard/images/edit.png" alt=""/></a>
						  		<a href="#"><img src="snowboard/images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">Nama Pengguna</a></h4></li>
						  <div class="login_buttons">
							 <div class="login_button"><a href="{{ url ("/login") }}">Log out</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>