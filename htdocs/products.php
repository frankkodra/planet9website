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
		<link rel="stylesheet" href="assets\css\franks.css">
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
	
				

					<div class="d-flex d-sm-none flex-row bg-black px-9 pt-1">
					<i class="fi fi-rr-envelope-plus main-color mr-1"></i>                  
					<a href="mailto:info@planet9@info.com" class=" pr-1 clear-link" style="border-right:1px dotted white;">info@Planet9.com</a>  
					
					<i class="fi fi-rr-phone-call main-color mr-1 pl-1"></i>  
		            <a href="tel:(+1)7854-333-222" class=" pr-1 clear-link" style="border-right:1px dotted white;"> (+1) 7854-333-222</a> 

					<i class="fi-rr-map-marker-home main-color pl-1 mr-1"></i>                                      
					9876 Street, Houston, TX     

					<a href="#" class="ml-20 mr-2"><i class="fa fa-facebook main-color "></i></a>
					<a href="#" class="mr-2"><i class="fa fa-twitter main-color"></i></a>
					<a href="#" class="mr-2"><i class="fa fa-instagram main-color"></i></a>
					</div>

					<div style="background-color: black; font-size:25px;color:white;" class="d-flex d-sm-none flex-row justify-content-center p-3 sticky-section ">
						<a href="index.php" class="mr-3 clear-link main-color-hover">Home</a>
						<a href="about.php" class="mr-3 clear-link main-color-hover">about</a>
						<a href="" class="mr-3 clear-link main-color">products</a>
						<a href="contact.php" class="mr-3 clear-link main-color-hover">contact</a>
						<a onclick="popup('login')" class="mr-7 main-color-hover clear-link ">login</a>
						<div id="shoppingCart"  class="d-flex flex-row">
							<span id="cart-count"></span>
							<i id="cartDrop"class="fa-solid fa-cart-shopping"></i>
							<div class="frank-dropdown-toggle main-color frank-card" buttonId="cartDrop" id="cart" style="margin-top: 50%; width:30rem;text-align:center">
								<cart-pagee></cart-pagee>
							</div>
						</div>
						</div>

			
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
<div  class="d-flex justify-content-center">
	<cart-pagee class="w-50"></cart-pagee>
	<div id='viewProduct' class=""></div>
</div>
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
				<div class="w-100 mt-20 d-flex justify-content-center flex-row align-items-center" style="height: 300px;background-color:black;">
					<div class="w-20 mr-10 d-flex justify-content-center flex-column align-items-center">
						<h4 class="text-align-center">Socials</h4>
						<ul class="">  
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>                     
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>                                         
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>                     
                          	</ul>
						</div>
					<div >
						<h4 class="text-align-center">Contact</h4>
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
                                   
                                       <a href="tel:(+880)15569569365">(+1) 8824-353-232</a><br>
                                       <a href="tel:(+880)15569569366">(+1) 7854-333-272</a>
                                
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
						<div>
							<h4 class="text-align-center">Pages</h4>
				<ul class="copy-right-menu ml-15">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
						</div>
							<div>
								<h4 class="text-align-center">Information</h4>
							<ul class="site-map ml-15">
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Information</a></li>
                            </ul>
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