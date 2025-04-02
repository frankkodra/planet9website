<html lang="en">
<?php
																session_start();
																?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>
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
                                  </ul>
                                <?php else: ?>
                                  <a href="login.html">Login</a>
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
                      <ul class="sub-menu cart-dropdown dropdownWindow" id ="cart" style="width:430px">
                          
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
      $_SESSION["cart"]=array(); echo"null";}
      ?>;

    </script>
    
    <script src="submit.js"></script>

    <div class="  pos-absolute w-100 mt-5 h-sm-2000px h-1200px" >
    
     
        <div class="pos-absolute d-flex flex-column frank-card p-2 h-45 shadow mb-4 w-30 pos-l-5 h-sm-30 w-sm-90 px-5 px-sm-10 px-md-2">
          <h4 class="text-center mb-4">Account Settings</h4>
          <div class="">
            <label>Username:</label>
           
              <input type="text" class="form-control" value="Username">
           
          
          </div>
          <div class="">
            <label>Email Address:</label>
           
              <input type="email" class="form-control" value="email@example.com">
          
          </div>
          <div class="form-group">
            <label>Phone Number:</label>
        
              <input type="tel" class="form-control" value="832-888-3212">
              
          
          </div>
          <div class="form-group">
            <label>Password:</label>
           
              <input type="password" class="form-control" value="*******">
           
           
          </div>
          <div class="form-group">
            <label>Retype Password:</label>
           
              <input type="password" class="form-control" value="*******">
           
           
          </div>
          <div class="w-100 h-15 d-flex justify-content-center align-items-center my-6 " >
            <button class="btn w-60" data-target="#" onclick="popup('confirmPassword')">Save Changes</button>
          </div>
        </div>
      
      
      
        <div class="pos-absolute frank-card shadow mb-4 w-55 pos-l-40 h-45 h-sm-30 pos-sm-t-35 pos-sm-l-5 w-sm-90 ">
          <h4 class="text-center  h-5">Saved Payment Options</h4>
  
          <ul class="list-group h-80 w-100">
            <li class=" mx-sm-1 d-flex justify-content-cente frank-card r h-15 ">
              <div class="w-60 d-flex justify-content-center flex-column flex-lg-row flex-sm-column flex-md-row align-items-center">
                <div class="mr-1 mr-md-3 w-50 w-sm-100 h-sm-50  text-center align-content-center fw-bold">**** **** **** 1234</div>
              
                <div class="w-sm-100 w-50 h-sm-50 text-center fw-bold">frank kodra</div>
              </div>
              <div class="w-40 d-flex justify-content-center align-items-center">
                <button class="btn mr-4 w-30 w-md-50 w-sm-50 " data-toggle="modal" data-target="#editPaymentModal">Edit</button>
                <button class="btn w-30 w-md-50 w-sm-50 mr-3 ">Delete</button>
             </div>
            </li>
         
          </ul>    
          <!-- Add more saved payment options as needed -->
         
          
          <div class="d-flex justify-content-center align-items-center  h-10"> 
             <button class="h-90 mb-3 h-sm-70 btn btn-primary btn-block" onclick="popup('addPaymentOption')">Add Payment Option</button>
         </div>
        </div>
        
           
       
      
  
      
      
        <div class="frank-card p-1 shadow mb-4 pos-absolute pos-t-50 w-60 w-sm-90 pos-sm-l-5 pos-l-20 pos-sm-t-70 h-45 h-sm-25">
         <div class= "h-10"><h4 class="text-center  ">Saved Addresses</h4></div> 
          <ul id="addresses"class="list-group h-80">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div class="w-60 d-flex  flex-column flex-lg-row flex-sm-column flex-md-row text-center align-items-center">
             <div class="w-50 text-center" > 123 Main St, City, Country</div>
             <div class="w-50 text-center"> frank kodra</div>
            </div>
              <div class="d-flex flex-row  justify-content-around w-40">
                <button class="btn btn-sm btn-primary w-40" data-toggle="modal" data-target="#editAddressModal">Edit</button>
                <button class="btn btn-sm btn-danger w-40">Delete</button>
              </div>
            </li>
            <!-- Add more saved addresses as needed -->
          </ul><div class="h-5 w-100  d-flex justify-content-center">
          <button class="btn btn-primary btn-block mb-3 " onclick="popup('addAddress')">Add Address</button>
        </div>
      </div>
      
   
  </div>
  
  <div id= "addAddress" style="height:350px;" class=" w-35 w-sm-90 w-md-60 py-2  frank-card frank-popup justify-content-center  flex-column" >

  <div class="d-flex justify-content-center h-10 mx-1 flex-row text-center">
  <label class="w-25">Country</label>
<select id="countries" onchange="" class="w-30">
<script></script>
  <option value="United States">United States</option>

</select>
  </div> 

  <div class="d-flex justify-content-center h-10 mx-1 my-1 flex-row text-center">
  <label class="w-25">State</label>
<select id="states" autocomplete="address-level1" onchange="" class="w-30">

<option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>

</select>
  </div> 
  
  <div class="d-flex justify-content-center my-1 h-10 mx-1">
      <label class=" w-25 text-center ">Street Address </label>
    <input type="text" name="" id="streetAddress" class="w-sm-50">
  </div> 
  <div class="d-flex justify-content-center my-1 h-10 mx-1 ">
      <label class="text-center w-25">City </label>
    <input type="text" name="" class=" w-sm-50" id="city">
  </div> 
  
  <div class="d-flex justify-content-center my-1  h-10 mx-1 align-items-center">
      <label class="text-center w-25">Zip Code </label>
    <input type="text" name="" class=" w-sm-50" id="zip">
  </div> 
  <div class="d-flex justify-content-center my-1  h-10 mx-1 align-items-center">
      <label class="text-center w-25">Name </label>
    <input type="text" name="" class=" w-sm-50" id="addyName">
  </div> 
  <div class="w-100 my-3 h-15 d-flex justify-content-center ">
    <button class="w-40 w-sm-40 h-100 btn" onclick="addAddress()">Add Address</button>
  </div>  
  
  </div>
  <!-- Edit Payment Modal -->
  <div id="addPaymentOption" style="height: " class="w-35 w-sm-90 w-md-60 frank-card frank-popup justify-content-center  flex-column">
  <div class="d-flex justify-content-center my-1 h-10 mx-1 align-items-center">
      <label class="text-center w-25">Card Number </label>
    <input type="text" name="" class=" w-sm-50" id="CardNumber">
  </div> 
  
  <div class="d-flex justify-content-center  h-10 mx-1 align-items-center">
      <label class="text-center w-25">Card holder Name</label>
    <input type="text" name="" class=" w-sm-50" id="CardName">
  </div> 

  <div class="d-flex justify-content-center flex-row w-100 my-3   mr-sm-3">
      <label class="mx-3">CCV </label>
    <input type="text" class="w-20 " name="" id="CCV">
    <label class="mx-3">Expiration Date</label>
    <input type="text" name="" id="expDate" class="W-25">
  </div> 
  <div class="d-flex w-100 justify-content-center">
    <button class="btn w-30" onclick="addPaymentMethod()">Add Card</button>

  </div>
  </div>
        <div id="confirmPassword" class="w-30 h-30 w-sm-60 frank-card frank-popup justify-content-center align-items-center bg-white flex-column">
            <label style="text" class="w-60 text-center my-4">Enter Your Current Account password</label>
            <input type="password" id="passwordInput" class="w-40 w-sm-60">
            <button class="w-60 btn text-center my-4">Verify Identity</button>
        </div>

  </div>

  <script src="assets\js\franks.js"></script>
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

<!-- Font Awesome-->
<script src="https://kit.fontawesome.com/12f76d88c1.js" crossorigin="anonymous"></script>

</body>
</html>