<!DOCTYPE html>
<html lang="en"> 
<?php
																session_start();
																?>
	<head>	
		<!-- meta tag -->
		<meta charset="utf-8">
		<title> Planet 9 - Cosmic Cowboys
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
				<header id="rs-header" class="rs-header header-modify1 header-transparent">
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
																<li class="menu-item-has-children" id="login" >
																	<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
																		<a><i class="fas fa-user"></i> Account</a>
																		<ul class="sub-menu" >
																			<li><a  onclick="logout()">Logout</a></li>
																		</ul>
																	<?php else: ?>
																		<a href="login.html">Login</a>
																		<ul class="sub-menu">
																		<li><a href="login.html?show=signup">Sign Up</a></li>
																		</ul>
																	<?php endif; ?>
																</li>
																
												</ul> <!-- //.nav-menu -->
											</nav>
										</div> <!-- //.main-menu -->
									</div>
								</div>
								<div class="col-cell">
									<div class="expand-btn-inner">
										<ul>
											<li class="shoppingCart">
												<a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
											</li>
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
    <ul class="nav-menu" id="login-m">
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
        <li id="login-m-d" class="menu-item-has-children">
          
                <a><i class="fas fa-user"></i> Account</a>
                <ul class="sub-menu">
                    <li><a onclick="logout()">Logout</a></li>
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
			<!--Full width header End-->

			<!-- Slider Start -->
			<div class="rs-slider slider-style5">
				<div class="slider slider-slide-1">
					<div class="slider-item">
						<div class="container custom13">
							<div class="slider-inner">
								<div class="content-part">
								    <span class="sl-subtitle">
								    	Planet 9 Cosmic Cowboys
									</span>
								    <h1 class="sl-title">
								    	Elevate yourself with our Premium<br>
								    	Delta-8 THC and CBD Products!      		           		    								
								    </h1>
								    <p class="sl-desc">
								    	Here are our most recent creations	
								    </p>
								   	<div class="slider-bottom">
								   	    <a class="readon red2-more" href="products.html">View our top shelf products</a>
								   	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-item slide-bg2">
						<div class="container custom13">
							<div class="slider-inner">
	    	        			<div class="content-part">
	    	        			    <span class="sl-subtitle">
	    	        			    	Newcomers 
	    	        				</span>
	    	        			    <h1 class="sl-title">
	    	        			    	New to Delta-8 or THC products?<br>
	    	        			    	We can answer your questions       		           		    								
	    	        			    </h1>
	    	        			    <p class="sl-desc">
	    	        			    	Discover Delta-8 THC – a more balanced, approachable cannabis experience with relaxation <br> 
	    	        			    	minus the intense effects, perfect for newcomers or those seeking a gentler option. 		
	    	        			    </p>
	    	        			   	<div class="slider-bottom">
	    	        			   	    <a class="readon red2-more" href="about.html">Learn More</a>
	    	        			   	</div>
	    	        			</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider End -->

			<!-- Services Section Start -->
			<div class="rs-services services-style5 bg13 pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			    	<div class="row">
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/1.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title">Information</h4>
			    					<p class="services-txt">Explore cannabis strains with high THC content, renowned for inducing psychoactive effects. These strains are ideal for individuals seeking a relaxed state and euphoric sensations.</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/2.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title">Information</h4>
			    					<p class="services-txt">  Discover a diverse range of CBD products at our dispensary. Cannabidiol (CBD) offers potential health benefits without the psychoactive properties associated with THC, making it a suitable choice for wellness seekers.</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 mb-20">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/3.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title">Information </h4>
			    					<p class="services-txt">  Join a knowledgeable budtender at the cannabis expo for an Edibles 101 session. Gain insights into discreet and enjoyable THC consumption through various infused treats.

									</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 md-mb-20">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/4.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title">Information</h4>
			    					<p class="services-txt">  Experiment with incorporating CBD into your culinary creations for a wellness-focused experience. Explore the potential health benefits associated with integrating CBD into your daily cooking routine.</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6 sm-mb-20">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/1.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title">Information </h4>
			    					<p class="services-txt"> Enhance social experiences with the consumption of THC among friends. Enjoy the communal and euphoric effects of cannabis in a relaxed and friendly setting.</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="col-lg-4 col-md-6">
			    			<div class="services-item">
			    				<div class="services-icon">
			    					<img src="assets/images/services/style5/2.png" alt="Services">
			    				</div>
			    				<div class="services-text">
			    					<h4 class="title"> Information</h4>
			    					<p class="services-txt">Unwind with the calming effects of CBD-infused tea. Create a serene atmosphere for relaxation and connection with friends while exploring the potential wellness benefits of cannabidiol.</p>
			    					<div class="services-btn">
	    								<a class="learn-text" href="about.html">Learn More</a>
	    							</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			</div>
			<!-- Services Section End -->

			<!-- About Start -->
			<div class="rs-about about-style2 black-bg pt-120 pb-130 md-pt-80 md-pb-80">
				<div class="container">
					<div class="row y-middle">
						<div class="col-lg-6 md-mb-50">
							<div class="about-image">
								<img src="assets/images/cosmiclogo.png" alt="About">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="sec-title">
								<span class="sub-text sub-text4">
									About Us
								</span>
								<h2 class="title title3 pb-27">
									5+ years of experience in 
									the industry of <span>Cannabis</span>
								</h2>
								<p class="desc desc4 pb-40">
									We have witnessed countless individuals find the perfect cannabis products for their needs, and we are committed to helping you navigate the process and discover the ideal match for your preferences and well-being.
								</p>
								<div class="features-content red-feature">
									<ul class="rs-features-list">
		                                <li>
		                                    <i class="fa fa-check"></i>
		                                    <span class="feature-text">Lab Tested</span>
		                                </li>
		                                <li>
		                                    <i class="fa fa-check"></i>
		                                    <span class="feature-text">Pesticide and Residue-Free</span>
		                                </li>
		                                <li>
		                                    <i class="fa fa-check"></i>
		                                    <span class="feature-text">Locally sourced and cultivated</span>
		                                </li>
		                            </ul>
								</div>
								<div class="btn-part mt-50">
									<a class="readon red2-more view" href="products.html">Explore our range of CBD and THC products</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About End -->

			<!-- Counter Start -->
			<div class="rs-counter counter-style2 black-bg2 pt-110 pb-120 md-pt-70 md-pb-80">
				<div class="container">
					<div class="row y-middle">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
								<div class="rs-counter-list"> 
								    <div class="counter-icon">
								    	<img src="assets/images/counter/icons/count1.png" alt="Images">
								    </div>
								    <div class="counter-text">
								    	<div class="counter-number">
								    		<span class="rs-count">30</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Distributers</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
								<div class="rs-counter-list"> 
								    <div class="counter-icon">
								    	<img src="assets/images/counter/icons/count2.png" alt="Images">
								    </div>
								    <div class="counter-text">
								    	<div class="counter-number">
								    		<span class="rs-count">300</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Community Engagement</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
								<div class="rs-counter-list"> 
								    <div class="counter-icon">
								    	<img src="assets/images/counter/icons/count3.png" alt="Images">
								    </div>
								    <div class="counter-text">
								    	<div class="counter-number">
								    		<span class="rs-count">8</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Awards & Certifications</span>	
								    </div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="rs-counter-list"> 
								    <div class="counter-icon">
								    	<img src="assets/images/counter/icons/count4.png" alt="Images">
								    </div>
								    <div class="counter-text">
								    	<div class="counter-number">
								    		<span class="rs-count">350</span>
								    		<span class="prefix">+</span>	
								    	</div>
								    	<span class="title">Satisfied consumers</span>	
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter End -->

			<!-- Project Section Start -->
			<div class="rs-project project-style3 pt-120 pb-100 md-pt-80 md-pb-60">
			    <video class="rs-html5-video" autoplay="" muted="" playsinline="" loop="" src="assets/images/brownie.mp4"></video>
			    <div class="background-video-wrap">
			    	<div class="background-overlay"></div>
			    </div>
			    <div class="container">
					<div class="sec-title text-center mb-40 md-mb-20">
						<span class="sub-text sub-text4">
							Latest products
						</span>
						<h2 class="title title3 pb-27">
							Most recent<br> 
							 <span>products</span>
						</h2>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-20">
							<div class="project-item">
								<div class="project-img">
									<a href="lyftoffbrownies.html"><img src="assets/images/project/indrusti/indrusti-1.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="lyftoffbrownies.html">Delta-8 Lyft Off Brownies</a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-20">
							<div class="project-item">
								<div class="project-img">
									<a href="elgallomix.html"><img src="assets/images/services/services-single/PeachRings.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="elgallomix.html">El Gallo Mix</a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-20">
							<div class="project-item">
								<div class="project-img">
									<a href="cannagar.html"><img src="assets/images/project/indrusti/indrusti-3.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="cannagar.html">Virginia-rolled Cannagar</a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 md-mb-20">
							<div class="project-item">
								<div class="project-img">
									<a href="#"><img src="assets/images/project/indrusti/indrusti-4.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="#">product name</a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 sm-mb-20">
							<div class="project-item">
								<div class="project-img">
									<a href="#"><img src="assets/images/project/indrusti/indrusti-5.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="#">product name</a></h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="project-item">
								<div class="project-img">
									<a href="#"><img src="assets/images/project/indrusti/indrusti-6.jpg" alt="Images"></a>
								</div>
								<div class="portfolio-content">
									<h4 class="title"><a href="#">product name</a></h4>
								</div>
							</div>
						</div>
					</div>
			    </div>
			</div>
			<!-- Project Section End -->

			<!-- Team Section Start -->
			<div class="rs-team team-style3 team-modify1 black-bg pt-120 pb-120 md-pt-80 md-pb-80">
    			<div class="container">
					<div class="sec-title text-center mb-40 md-mb-25">
						<span class="sub-text sub-text4">
							Team Members
						</span>
						<h2 class="title title3 pb-27">
							Meet the expert <span>manufacturers.</span>
						</h2>
					</div>
    				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm1.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Amelia Hawthorne</a>
                                        </h3>
                                        <span class="team-title">Cannabis Manufacturer</span>
                                    </div>
                                   	<div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                   		<i class="fi fi-rr-share share-i"></i>
                                   	</div>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm2.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Ethan Montgomery</a>
                                        </h3>
                                        <span class="team-title">Delta-8 THC Producer</span>
                                    </div>
                                    <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                    	<i class="fi fi-rr-share share-i"></i>
                                    </div>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm3.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Scarlett Bennett</a>
                                        </h3>
                                        <span class="team-title">Cannabis Processor</span>
                                    </div>
                                    <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                    	<i class="fi fi-rr-share share-i"></i>
                                    </div>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm4.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Oliver Knight</a>
                                        </h3>
                                        <span class="team-title">THC Product Manufacturer</span>
                                    </div>
                                    <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                    	<i class="fi fi-rr-share share-i"></i>
                                    </div>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm5.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Nicole Sinclair</a>
                                        </h3>
                                        <span class="team-title">Volunteer Coordinator</span>
                                    </div>
                                    <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                    	<i class="fi fi-rr-share share-i"></i>
                                    </div>
                                </div>
    						</div>
    					</div>
    					<div class="team-item-wrap">
    						<div class="team-inner-wrap">
    							<div class="image-wrap">
    								<a href="team-single.html"><img src="assets/images/team/tm6.jpg" alt="Team"></a>
    							</div>
    							<div class="team-content">
                                    <div class="team-info">
                                        <h3 class="team-name">
                                            <a href="team-single.html">Vivienne Ramsey</a>
                                        </h3>
                                        <span class="team-title">Cannabis Infusion Specialist</span>
                                    </div>
                                    <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
                                    	<i class="fi fi-rr-share share-i"></i>
                                    </div>
                                </div>
    						</div>
    					</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="assets/images/team/tm1.jpg" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Lucas Donovan</a>
	                                    </h3>
	                                    <span class="team-title">Delta-8 THC Processor</span>
	                                </div>
	                                <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
	                                	<i class="fi fi-rr-share share-i"></i>
	                                </div>
	                            </div>
							</div>
						</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="assets/images/team/tm2.jpg" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Serena Blake</a>
	                                    </h3>
	                                    <span class="team-title">Cannabis Extractor</span>
	                                </div>
	                                <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
	                                	<i class="fi fi-rr-share share-i"></i>
	                                </div>
	                            </div>
							</div>
						</div>
						<div class="team-item-wrap">
							<div class="team-inner-wrap">
								<div class="image-wrap">
									<a href="team-single.html"><img src="assets/images/team/tm3.jpg" alt="Team"></a>
								</div>
								<div class="team-content">
	                                <div class="team-info">
	                                    <h3 class="team-name">
	                                        <a href="team-single.html">Aurora Wolfe</a>
	                                    </h3>
	                                    <span class="team-title">Delta-8 THC Producer</span>
	                                </div>
	                                <div class="plus-team">
                                   		<div class="social-icons">
	                                      	<a href="#"><i class="fa fa-facebook"></i></a>                               
	                                      	<a href="#"><i class="fa fa-instagram"></i></a>                               
	                                      	<a href="#"><i class="fa fa-twitter"></i></a>                               
	                                      	<a href="#"><i class="fa fa-linkedin"></i></a>                               
	                                    </div>
	                                	<i class="fi fi-rr-share share-i"></i>
	                                </div>
	                            </div>
							</div>
						</div>
    				</div>
    			</div>
			</div>
			<!-- Team Section End -->

			<!-- Testimonial Section Start -->
			<div class="rs-testimonial testimonial-style4 bg14 pt-120 pb-120 md-pt-80 md-pb-80 sm-pb-60">
			    <div class="container">
			        <div class="sec-title text-center mb-55 md-mb-40">
			        	<span class="sub-text sub-text4">
			        		Testimonials
			        	</span>
			        	<h2 class="title title3 titleColorer">
			        		Consumer<span> reviews.</span>
			        	</h2>
			        </div>
			       	<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
			            <div class="testi-item">
			                <div class="item-content">           
			                    <div class="desc"><img class="quote" src="assets/images/testimonial/style1/quote3.png" alt="">Exceptional variety and quality! The Delta-8 THC and CBD products at this store exceeded my expectations, providing a perfect balance of relaxation and wellness benefits.</div>
			                </div>
			                <div class="testi-content">
			                    <div class="image-wrap">
			                        <img src="assets/images/testimonial/style1/testi1.jpg" alt="">
			                    </div>
			                    <div class="testi-information">
			                       	<div class="testi-name">Ethan Roberts</div>
			                    </div>
			                </div>
			            </div>
			            <div class="testi-item">
			                <div class="item-content">           
			                    <div class="desc"><img class="quote" src="assets/images/testimonial/style1/quote3.png" alt="">Top-notch customer service! The knowledgeable staff helped me navigate their extensive selection of Delta-8 THC and CBD offerings, ensuring I found the perfect products for my needs.</div>
			                </div>
			                <div class="testi-content">
			                    <div class="image-wrap">
			                        <img src="assets/images/testimonial/style1/testi2.jpg" alt="">
			                    </div>
			                    <div class="testi-information">
			                        <div class="testi-name">Emma Thompson</div>
			                    </div>
			                </div>
			            </div>
			            <div class="testi-item">
			                <div class="item-content">           
			                    <div class="desc"><img class="quote" src="assets/images/testimonial/style1/quote3.png" alt="">Consistent quality! I've been a loyal customer of this Delta-8 THC and CBD store, and their commitment to product potency and purity keeps me coming back for reliable relief.</div>
			                </div>
			                <div class="testi-content">
			                    <div class="image-wrap">
			                        <img src="assets/images/testimonial/style1/testi3.jpg" alt="">
			                    </div>
			                    <div class="testi-information">
			                       	<div class="testi-name">Liam Anderson</div>
			                    </div>
			                </div>
			            </div>
			            <div class="testi-item">
			                <div class="item-content">           
			                    <div class="desc"><img class="quote" src="assets/images/testimonial/style1/quote3.png" alt="">Impressive range of options! Whether you're new to Delta-8 THC and CBD or a seasoned user, this store offers a diverse array of products to cater to various preferences and needs.</div>
			                </div>
			                <div class="testi-content">
			                    <div class="image-wrap">
			                        <img src="assets/images/testimonial/style1/testi4.jpg" alt="">
			                    </div>
			                    <div class="testi-information">
			                        <div class="testi-name">Ava Mitchell</div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Testimonial Section End -->

			<!-- Blog Section Start -->
			<div id="rs-blog" class="rs-blog blog-main-home blog-modify4 black-bg pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">  
			       	<div class="sec-title text-center mb-55 md-mb-40">
			       		<span class="sub-text sub-text4">
			       			News
			       		</span>
			       		<h2 class="title title3">
			       			Latest updates and<span> news.</span>
			       		</h2>
			       	</div>
			        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/1.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
	                           		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
	                           		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/2.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
			                		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/3.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
			                		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/4.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
			                		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/5.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
			                		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			            <div class="blog-item">
			                <div class="image-wrap">
			                    <a href="blog-single.html"><img src="assets/images/blog/style1/6.jpg" alt=""></a>
			                </div>
			                <div class="blog-content">
			                	<ul class="blog-meta">
			                		<li class="admin"><i class="fa fa-user-o"></i>Store</li>
			                		<li class="category"><i class="fa fa-book"></i>Delta-8</li>
	                           	</ul>
			                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the extractions</a></h3>
			                    <div class="blog-button blog-btn4"><a href="blog-single.html">View More</a></div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Blog Section End -->
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		<footer id="rs-footer" class="rs-footer footer-main-home footer-style2">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
							<div class="footer-logo mb-51 md-mb-30">
								<a href="index.html"><img src="assets/images/planet 9 logo temporary.png" alt=""></a>
							</div>
							<div class="textwidget">
								<p class="pb-20">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
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
                                    	9876 Street,<br>
                                    	Houston, TX 77953
									</div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-phone-call"></i>
                                    <div class="desc">
                                       <a href="tel:(+880)15569569365">(+1) 8824-353-232</a><br>
                                       <a href="tel:(+880)15569569366">(+1) 7854-333-272</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fi fi-rr-envelope-plus"></i>
                                    <div class="desc">
                                        <a href="mailto:info@Planet9.com"> info@Planet9.com</a><br>
                                        <a href="mailto:info@Planet9.com"> info@Planet9.com</a>
                                    </div>
                                </li>
                            </ul>
						</div>
						<div class="col-lg-3 md-mb-10 colLg3display">
							<h3 class="footer-title">Additional Info</h3>
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
							<p class="widget-desc">Tetur adipiscing eliet sed do eiusmod tempor in cididunt ut labore.</p>
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
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright text-lg-start text-center">
                                <p>Planet 9 <a href="#" target="blank"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp" class="red-color2">
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

		<!-- modernizr js -->
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
		<!-- jquery latest version -->
		<script src="assets/js/jquery.min.js"></script>
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
		<!-- Slick js -->
		<script src="assets/js/slick.min.js"></script>
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
		<script src="submit.js"></script>
		<!-- Font Awesome-->
		<script src="https://kit.fontawesome.com/12f76d88c1.js" crossorigin="anonymous"></script>
	</body>
</html>