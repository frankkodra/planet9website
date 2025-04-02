<!DOCTYPE html>
<html lang="en"> 
<?php include("includes/products.php");
																session_start();
															
																?>
	<head>	
		<!-- meta tag -->
		<meta charset="utf-8">
		<title> Products Page
		</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/planet 9 logo temporary.png">
		<!-- Bootstrap v4.4.1 css -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
		<!-- flaticon css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<!-- slick css -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main Menu css -->
		<link rel="stylesheet" href="assets/css/rsmenu-main.css">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
				<link rel="stylesheet" href="assets\css\franks.css">
	</head>
	<body class="home-red-color2">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/planet 9 logo temporary.png" alt="Planet 9 - Logo "></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
	
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header ">
					<!-- Toolbar Area Start -->
					<div class="toolbar-area topbar-style1 topber-modify2 hidden-md">
						<div class="container">
							<div class="row rs-vertical-middle">
							   <div class="col-lg-7">
									<div class="toolbar-contact">
										<ul class="rs-contact-info">                   
											<li>
					                            <i class="fi fi-rr-envelope-plus"></i>                  
					                            <a href="mailto:info@planet9@info.com">info@Planet9.com</a>               
					                        </li>
	                                        <li>
                                              	<i class="fi fi-rr-phone-call"></i>                                      
                                                <a href="tel:(+1)7854-333-222"> (+1) 7854-333-222</a>                   
                                            </li>
                                            <li>
                                              	<i class="fi-rr-map-marker-home"></i>                                      
												  9876 Street, Houston, TX       
                                            </li>
										</ul>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="toolbar-sl-share">
										<ul class="clearfix">
											<li class="opening"> <em><i class="fi fi-rr-time-add"></i></em> </li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Toolbar Area End -->
					
					<!-- Menu Start -->
					<div class="menu-area menu-sticky">
						<div class="container">
							<div class="row-table">
								<div class="col-cell header-logo">                                  
								    <div class="logo-area">
								        <img src="/assets/images/planet 9 logo temporary.png">
								    </div>
								</div>
								<div class="col-cell">
									<div class="rs-menu-area">
										<div class="main-menu">
											<nav class="rs-menu hidden-md">
												<ul class="nav-menu">
													<li class="menu-item-has-children current-menu-item">
														<a href="index.php">Home</a>
													</li>
													<li>
														<a href="about.php">About</a>
													</li>
													<li class="menu-item-has-children">
														<a href="products.php">Products</a>
														<ul class="sub-menu">
															<li><a href="lyftoffbrownies.php">Lyft Off 500mg Brownies</a></li>
															<li><a href="elgallomix.php">El Gallo Mix Candy</a></li>
															<li class="last-item menu-item-has-children">
															    <a href="cannagar.php">Virginia-rolled Cannagar</a>
															</li>
														</ul>
													</li>
													<li>
														<a href="contact.html">Contact</a>
													</li>
																<li class="menu-item-has-children " id="login" >
																	<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
																		<a><i class="fas fa-user"></i> Account</a>
																		<ul class="sub-menu" >
																			<li>      <a  onclick="logout()">Logout</a></li>
																			<li><a href="AccountSettings.php">Account Settings</a></li>
																		</ul>
																	<?php else: ?>
																		<a onclick="popup('login')">Login</a>
																		<ul class="sub-menu">
																		<li><a href="login.html?show=signup">Sign Up</a>
</li>
																		</ul>
																	<?php endif; ?>
																</li>
															<li class="shoppingCart menu-item-has-children">
												<a class="nav-link" href="#">
													<i class="fa-solid fa-cart-shopping"></i>
													<span class="cart-count" id="cart-count">
														<?php
														if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
															$totalItems = array_sum(array_column($_SESSION['cart'], 'quantity'));
															echo $totalItems;
														} else {
															echo '0';
														}
														?>
													</span>
												</a>
												<ul class="sub-menu cart-dropdown dropdownWindow" id ="cart" style="width:550px">
														
												</ul>
											</li>		
												</ul> <!-- //.nav-menu -->
											</nav>
										</div> <!-- //.main-menu -->
									</div>
								</div>
								<div class="col-cell">
									<div class="expand-btn-inner">
										<ul>
											
									<style>
										.sub-menu.cart-dropdown {
    width: auto; /* Adjust the width dynamically */
    /* Other styles... */
}
									</style>


											<li class="search-parent">
											    <a class="hidden-xs rs-search" href="#">
											        <i class="fi fi-rr-search"></i>
											    </a>
											    <div class="sticky_form">
											        <form role="search" class="bs-search search-form" method="get">
											            <div class="search-wrap">
											                 <label class="screen-reader-text active">
											                     Search for:     </label>
											                 <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
											                 <button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
											             </div>
											         </form>
											     </div>
											</li>
                                            <li class="btn-quote"><a class="quote-button" href="products.php">Find a product and Lyft off!</a></li>
											<li class="humburger">
											    <a id="nav-expander" class="nav-expander bar" href="#">
											        <div class="bar">
											            <span class="dot1"></span>
											            <span class="dot2"></span>
											            <span class="dot3"></span>
											            <span class="dot4"></span>
											            <span class="dot5"></span>
											            <span class="dot6"></span>
											            <span class="dot7"></span>
											            <span class="dot8"></span>
											            <span class="dot9"></span>
											        </div>
											    </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Menu End -->

					<!-- Canvas Mobile Menu start -->
					<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
    <div class="close-btn">
        <a id="nav-close2" class="nav-close">
            <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>
    <ul class="nav-menu" id=login-m>
        <li class="menu-item-has-children current-menu-item">
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="about.php">About</a>
        </li>
        <li class="menu-item-has-children" id="">
            <a href="products.php">Products</a>
            <ul class="sub-menu">
                <li><a href="lyftoffbrownies.php">Lyft Off 500mg Brownies</a></li>
                <li><a href="elgallomix.php">El Gallo Mix Candy</a></li>
                <li><a href="cannagar.php">Virginia-rolled Cannagar</a></li>
            </ul>
        </li>
        <li>
            <a href="contact.php">Contact</a>
        </li>  <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
        <li id="login-m-d" class="menu-item-has-children login">
          
                <a><i class="fas fa-user"></i> Account</a>
                <ul class="sub-menu">
                    <li><a onclick="logout()">Logout</a></li>
					<li><a href="AccountSettings.php">Account Settings</a></li>
                </ul> </li>
            <?php else: ?>
				<li >
                	<a href="login.html">Login</a>
				</li>
                <li>
                    <a href="signup.html">Sign Up</a>
			</li>
            <?php endif; ?>
       
    </ul>
    <div class="canvas-contact">
        <div class="address-area">
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-map-marker-home"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Contact</h4>
                    <em>31 New Street, NY, USA</em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-envelope-plus"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Email</h4>
                    <em><a href="mailto:info@Planet9@info.com">Info@Planet9.com</a></em>
                </div>
            </div>
            <div class="address-list">
                <div class="info-icon">
                    <i class="fi fi-rr-phone-call"></i>
                </div>
                <div class="info-content">
                    <h4 class="title">Free Call</h4>
                    <em>+019988772</em>
                </div>
            </div>
        </div>
    </div>
</nav>

					<!-- Canvas Menu end -->                            
				</header>
				<!--Header End-->
			</div>
			<script>
	
				var shoppingCart =<?php if (isset($_SESSION["cart"]) )
				  echo json_encode($_SESSION["cart"]);
				else{
				echo"{};";}
			
				?>;	
				console.log( shoppingCart);
				var wholesale = <?php if(isset($_SESSION['wholesale'])&&$_SESSION['wholesale']){
						echo "true";
				}else{
					echo "true";
				}?>;
				alert(wholesale);
				var productPricing = <?php echo json_encode($Products);?>;
				console.log(productPricing);

				

			</script>
			
			<script src="submit.js"></script>
	

			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img2">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			               	Lyft Off Detla-8 Brownies
			            </h1>
			            <span class="sub-text">Majestic Dutch Sweet Dark Chocolate Brownies. <br> 
							Each containing a perfect mix between creamy fudge and dark chocolate</span>
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->
		
			<!-- Services Start -->
			<div class="rs-careers pt-120 pb-120 md-pt-80 md-pb-60">
				<div class="container">
					<div class="row y-middle">
						<div class="col-lg-6 md-mb-50">
							<div class="single-img">
								<img src="assets/images/services/services-single/craiyon_233615_Chocolate_brownies_in_space.png" alt="Img" onclick="openLightbox('assets/images/services/services-single/craiyon_233615_Chocolate_brownies_in_space.png')" id="lightboxImage">
								<div class="arrow left"w="navigateLightbox(-1)">←</div>
								<div class="arrow right" onclick="navigateLightbox(1)">→</div>
							</div>
							<div class="operation-tab-box center">
								<div class="border">
									<img src="assets/images/services/services-single/1.jpg" class="imageSmall" alt="Img" onclick="openLightbox('assets/images/services/services-single/1.jpg')">
								</div>
								<img src="assets/images/services/services-single/2.jpg" class="imageSmall" alt="Img" onclick="openLightbox('assets/images/services/services-single/2.jpg')">
								<img src="assets/images/services/services-single/3.jpg" class="imageSmall" alt="Img" onclick="openLightbox('assets/images/services/services-single/3.jpg')">
								<img src="assets/images/services/services-single/4.jpg" class="imageSmall" alt="Img" onclick="openLightbox('assets/images/services/services-single/4.jpg')">
							</div>
						</div>
						<div class="col-lg-6">
		                	<div class="sec-title mt-30 pl-30 md-pl-15">
								<h2 class="title title4 ser-style5 pb-30">Lyft Off Delta-8 Brownies</h2>
								<p class="margin-0 pb-25">
									Elevate your taste experience with our Lyft Off Delta-8 brownie. Each package contains one 2 inch Majestic Dutch Sweet Dark Chocolate Brownies. A perfect mix between creamy fudge and dark chocolate evenly dosed at 100 mg per Mini. For those looking for easy dosing or to share with friends.
								</p>
								<ul class="prodInfo">
									<li>500mg per brownie</li>
									<li>Enjoy Within: 6-7 months</li>
								</ul>
								<div class="priceSection">
									<span id="price">$18</span><span class="discount"> 10%</span>
								  </div>
								<div class="oldPrice">
									$20
								</div>
							<product-counter class="h-50 d-block w-100" product="500mgBrownie" increment="5" min="10"></product-counter>
								</div>
							</div>						
			        	</div>					
			        </div>
				</div>
			</div>
			<!-- Services End -->

			<!-- Process Section Start -->
			<div class="rs-process process-style3 bg23 pt-150 pb-115 md-pt-115 md-pb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
		                	<div class="sec-title mb-70 md-mb-15">
		                		<h2 class="title title4 ser-style1">
		                			Our creation process -  how we<br> 
		                			produce high quality product
		                		</h2>
		                	</div>
						</div>
						<div class="col-lg-4 text-right md-left md-mb-40">
							<div class="btn-part mt-20">
								<a class="readon more touch" href="contact.html">Any more questions?</a>
							</div>
						</div>
					</div>
				</div>
				<div class="container custom3">
					<div class="process-bg">
						<div class="row">
							<div class="col-xl-3 col-md-6 md-40">
								<div class="process-item process-gap">
									<div class="number-image">
										<img src="assets/images/process/style3/icons/p1.png" alt="Images">
									</div>
									<div class="number-text">
										<div class="number-area">
											<span class="number-prefix">01</span>
										</div>
	                                    <h3 class="number-title">Baking</h3>
	                                    <p class="number-txt">Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.</p>
	                                </div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 md-40">
								<div class="process-item process-gap">
									<div class="number-image">
										<img src="assets/images/process/style3/icons/p2.png" alt="Images">
									</div>
									<div class="number-text">
										<div class="number-area">
											<span class="number-prefix">02</span>
										</div>
	                                    <h3 class="number-title">Infusing</h3>
	                                    <p class="number-txt">Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.</p>
	                                </div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 sm-mb-40">
								<div class="process-item">
									<div class="number-image">
										<img src="assets/images/process/style3/icons/p3.png" alt="Images">
									</div>
									<div class="number-text">
										<div class="number-area">
											<span class="number-prefix">03</span>
										</div>
	                                    <h3 class="number-title">Labbing</h3>
	                                    <p class="number-txt">Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.</p>
	                                </div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="process-item">
									<div class="number-image">
										<img src="assets/images/process/style3/icons/p4.png" alt="Images">
									</div>
									<div class="number-text">
										<div class="number-area">
											<span class="number-prefix">04</span>
										</div>
	                                    <h3 class="number-title">Packaging</h3>
	                                    <p class="number-txt">Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.</p>
	                                </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Partner Start -->
			<div class="rs-partner partner-main-home partner-modify8">		
			    <div class="container">               
			        <div class="partner-content-widget">
			        	<div class="rs-carousel owl-carousel" 
			        	    data-loop="true" 
			        	    data-items="5" 
			        	    data-margin="30" 
			        	    data-autoplay="true" 
			        	    data-hoverpause="true" 
			        	    data-autoplay-timeout="5000" 
			        	    data-smart-speed="800" 
			        	    data-dots="false" 
			        	    data-nav="false" 
			        	    data-nav-speed="false" 

			        	    data-md-device="5" 
			        	    data-md-device-nav="false" 
			        	    data-md-device-dots="false" 
			        	    data-center-mode="false"

			        	    data-ipad-device2="4" 
			        	    data-ipad-device-nav2="false" 
			        	    data-ipad-device-dots2="false"

			        	    data-ipad-device="4" 
			        	    data-ipad-device-nav="false" 
			        	    data-ipad-device-dots="false" 

			        	    data-mobile-device="2" 
			        	    data-mobile-device-nav="false" 
			        	    data-mobile-device-dots="false">  
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/1.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/1.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/2.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/2.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/3.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/3.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/1.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/1.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/2.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/2.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/3.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/3.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	    <div class="logo-img">
			        	        <a href="#">
			        	            <img class="hovers-logos rs-grid-img" src="assets/images/partner/style2/1.png" title="" alt="">
			        	            <img class="mains-logos rs-grid-img " src="assets/images/partner/style2/1.png" title="" alt="">
			        	        </a>
			        	    </div>
			        	</div>
			        </div>
			    </div>
			</div>
			<!-- Partner End -->

		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		<footer id="rs-footer" class="rs-footer footer-main-home">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
							<div class="footer-logo mb-51 md-mb-30">
								<a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
							</div>
							<div class="textwidget">
								<p class="pb-20">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
								<p class="pb-25"><strong>Opening Hours</strong> : Monday – Sat: 9am to 6pm</p>
							</div>
							<ul class="footer-social md-mb-30">  
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>                     
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>                                         
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>                     
                          	</ul>
						</div>
						<div class="col-lg-3 md-mb-10">
							<h3 class="footer-title">Contact Info</h3>
							<ul class="address-widget">
                                <li>
                                    <i class="fi fi-rr-map-marker-home"></i>
                                    <div class="desc">
                                    	Ta-134/A,Link<br>
                                    	Rd, Texas
									</div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-phone-call"></i>
                                    <div class="desc">
                                       <a href="tel:(+880)15569569365">(+880)155 69569 365</a><br>
                                       <a href="tel:(+880)15569569366">(+880)155 69569 366</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-envelope-plus"></i>
                                    <div class="desc">
                                        <a href="mailto:info@Planet9.com">info@Planet9.com</a><br>
                                        <a href="mailto:info@Planet9.com">info@Planet9.com</a>
                                    </div>
                                </li>
                            </ul>
						</div>
						<div class="col-lg-3 md-mb-10">
							<h3 class="footer-title">Our Services</h3>
							<ul class="site-map">
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                            </ul>
						</div>
						<div class="col-lg-3">
							<h3 class="footer-title">Newsletter</h3>
							<p class="widget-desc">Tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
							<p>
                                <input type="email" name="email" placeholder="Your Email Address" required="">
                                <input type="submit" value="Subscribe Now">
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                            <ul class="copy-right-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
		<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="search-block clearfix">
		                <form>
		                    <div class="form-group">
		                        <input class="form-control" placeholder="Search Here..." type="text">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Search Modal End -->
		<script src="assets/js/franks.js"></script>
		<!-- modernizr js -->	
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- jquery latest version -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		<!-- Bootstrap v4.4.1 js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- op nav js -->
		<script src="assets/js/jquery.nav.js"></script>
		<!-- owl.carousel js -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- isotope.pkgd.min js -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- wow js -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Skill bar js -->
		<script src="assets/js/skill.bars.jquery.js"></script>
		<!-- imagesloaded js -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- waypoints.min js -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- magnific popup js -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- counterup.min js -->
		<script src="assets/js/jquery.counterup.min.js"></script> 
		<!-- contact form js -->
		<script src="assets/js/contact.form.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>
		<!-- product page js-->
		<script src="assets/js/productpage.js"></script>			

		<!-- Font Awesome-->
		<script src="https://kit.fontawesome.com/12f76d88c1.js" crossorigin="anonymous"></script>
	</body>
</html>