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

		<!-- style css -->
	 <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
				<link rel="stylesheet" href="assets\css\franks.css">
	</head>
	<body class="home-red-color2">
		
		

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
		
			<!--Full width header Start-->
				<!--Header Start-->
	
					<!-- Toolbar Area Start -->
					
				<nav-bar></nav-bar>
					<!-- Menu End -->

					<!-- Canvas Mobile Menu start -->
			
  


					<!-- Canvas Menu end -->                            
			
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
				//alert(wholesale);
				var productPricing = <?php echo json_encode($Products);?>;
				console.log(productPricing);

				

			</script>

			<script src="submit.js"></script>
				<div id="login" class="frank-popup w-50 w-sm-90">     
			
				<div class="card shadow-lg login-box w-100 p-10">
    
                    <div class="card-body">
                        <h2 class="text-center mb-7">Planet 9</h2>
                        <div id="loginForm">
                            <h4 class="mb-3 text-center">Login</h4>
                            <form id="login-form">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username or email address</label>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                             <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <button type="submit" class="btn w-100 mb-3">Log In</button>
                                <a href="#" class="text-decoration-none">Lost your password?</a>
                                <p class="mt-3 text-center">Don't have an account? <a onclick="switchView('loginForm','signupForm','block')" id="showSignupForm">Sign Up</a></p>
                            </form>
                            <div id="loginError" class="alert alert-danger" style="display: none;"></div>
                        </div>
                        <div id="signupForm" style="display: none;">
                            <h4 class="mb-3 text-center">Register</h4>
                            <form action="signup.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number (Optional)</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="passwords" name="password" placeholder="Enter your password" required>
                                </div>
                    		     <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>
                                <p class="text-center">Already have an account? <a onclick="switchView('signupForm','loginForm','block')" id="showLoginForm">Log In</a></p>
                            </form>
                            <div id="signupError" class="alert alert-danger" style="display: none;"></div>
                        </div>
                    </div>
                </div>
			</div>
<div id='viewProduct'></div>
</div>



			<!-- Gallery Start -->
					<h1 class="w-100 text-center my-7">All Products</h1>
			   	<div class="container">
			   		<div class="row">
			   		    <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
							   <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
							   <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
							   <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
							   <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
							   <div class="col-lg-4 col-md-6 mb-30">
							   <product-card product="500mgBrownie"	></product-card>
			   		        </div>
				
						
			   		</div>
			   	</div>
			</div>
			<!-- Gallery End -->
	
		<!-- Main content End -->
	 
		<!-- Footer Start -->
		<footer id="rs-footer" class="rs-footer footer-main-home">
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
                                    	9283, Houston<br>
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
                                        <a href="mailto:support@Planet9.com">support@planet9.com</a><br>
                                        <a href="mailto:infoname@Planet9.com">infoname@Planet9.com</a>
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
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
						<div class="col-lg-6">
                            <div class="copyright text-lg-start text-center">
                                <p>Planet 9 & Cosmic Cowboys Extractions <a href="#" target="blank"></a></p>
                            </div>
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
	
		<script src="assets/js/franks.js"></script>
		<script src="assets/js/test.js"></script>
		<!-- Font Awesome-->
		<script src="assets/js/productpage.js"></script>
		<script src="https://kit.fontawesome.com/12f76d88c1.js" crossorigin="anonymous"></script>
	</body>
</html>