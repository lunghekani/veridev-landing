<?php
$servername = "164.160.91.44";
$username = "username";
$password = "6!89UkUnapN";
$dbname = "vxworkfl_veridev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clients (name, last name, email, cell, role)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.envytheme.com/crake/default/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jan 2022 02:30:51 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/icofont.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/nice-select.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>Crake - A Creative Multi-Concept Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="preloader-area">
<div class="lds-hourglass"></div>
</div>


<header id="header">
<div class="crake-mobile-nav">
<div class="logo">
<img src="assets/img/logo.png" alt="">
</div>
</div>
<div class="crake-nav">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav nav ms-auto">
<li class="nav-item"><a href="#" class="nav-link">Home</a>
<ul class="dropdown_menu">
<li><a href="index.html">SaaS Landing</a></li>
<li><a href="index-2.html">App Landing</a></li>
<li><a href="index-3.html">Digital Marketing</a></li>
<li><a href="index-4.html">Product Landing</a></li>
<li><a href="index-5.html">Software Landing</a></li>
<li><a href="index-6.html">Book Landing</a></li>
<li><a href="index-7.html">Startup Agency</a></li>
<li><a href="index-8.html">Payment Processing</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link active">Pages</a>
<ul class="dropdown_menu">
<li class="nav-item"><a href="#" class="nav-link">About</a>
<ul class="dropdown_menu">
<li><a href="about-1.html">About Us 1</a></li>
<li><a href="about-2.html">About Us 2</a></li>
</ul>
</li>
<li><a href="features.html">Features</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li class="nav-item"><a href="#" class="nav-link">Team</a>
<ul class="dropdown_menu">
<li><a href="team-1.html">Team 1</a></li>
<li><a href="team-2.html">Team 2</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Pricing</a>
<ul class="dropdown_menu">
<li><a href="pricing-1.html">Pricing 1</a></li>
<li><a href="pricing-2.html">Pricing 2</a></li>
<li><a href="pricing-3.html">Pricing 3</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Portfolio</a>
<ul class="dropdown_menu">
<li><a href="project-1.html">Portfolio 2 Columns</a></li>
<li><a href="project-2.html">Portfolio 3 Columns</a></li>
<li><a href="project-3.html">Portfolio 4 Columns Wide</a></li>
<li><a href="single-project.html">Portfolio Details</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Shop</a>
<ul class="dropdown_menu">
<li><a href="shop-1.html">Shop 1</a></li>
<li><a href="shop-2.html">Shop 2</a></li>
<li><a href="shop-details.html">Shop Details</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Blog</a>
<ul class="dropdown_menu">
<li><a href="blog-1.html">Blog 1</a></li>
<li><a href="blog-2.html">Blog 2</a></li>
<li><a href="single-blog.html">Blog Details</a></li>
</ul>
</li>
<li><a href="login.html">Login</a></li>
<li><a href="signup.html" class="active">Sign Up</a></li>
<li><a href="coming-soon.html">Coming Soon</a></li>
<li><a href="error.html">404 Error</a></li>
<li><a href="faq.html">FAQ</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Portfolio</a>
<ul class="dropdown_menu">
<li><a href="project-1.html">Portfolio 2 Columns</a></li>
<li><a href="project-2.html">Portfolio 3 Columns</a></li>
<li><a href="project-3.html">Portfolio 4 Columns Wide</a></li>
<li><a href="single-project.html">Portfolio Details</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Blog</a>
<ul class="dropdown_menu">
<li><a href="blog-1.html">Blog 1</a></li>
<li><a href="blog-2.html">Blog 2</a></li>
<li><a href="single-blog.html">Blog Details</a></li>
</ul>
</li>
<li class="nav-item"><a href="#" class="nav-link">Shop</a>
<ul class="dropdown_menu">
<li><a href="shop-1.html">Shop 1</a></li>
<li><a href="shop-2.html">Shop 2</a></li>
<li><a href="shop-details.html">Shop Details</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="checkout.html">Checkout</a></li>
</ul>
</li>
<li class="nav-item"><a href="contact-us.html" class="nav-link">Contact</a></li>
</ul>
</div>
<div class="mr-auto others-option">
<ul class="navbar-nav">
<li class="nav-item cart-wrapper">
<a href="#">
<i class="icofont-shopping-cart cart-icon"></i>
<span>0</span>
</a>
</li>
<li class="header-search-box">
<a href="#header-search" title="Search">
<i class="icofont-search-2"></i>
</a>
</li>
<li data-bs-toggle="modal" data-bs-target="#myModal2">
<div class="side-menu">
<span class="bar-1"></span>
<span class="bar-2"></span>
<span class="bar-3"></span>
</div>
</li>
</ul>
</div>
</nav>
</div>
</div>
</header>


<div class="sidebar-modal">
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>
<h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="assets/img/logo.png" alt="logo"></a></h2>
</div>
<div class="modal-body">
<div class="sidebar-modal-widget">
<h3 class="title">Additional Links</h3>
<ul>
<li><a href="#">Login</a></li>
<li><a href="#">Register</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Logout</a></li>
</ul>
</div>
<div class="sidebar-modal-widget">
<h3 class="title">Contact Info</h3>
<ul class="contact-info">
<li>
<i class="icofont-google-map"></i>
Address
<span>1660 Travis Street Miramar, FL 33025, California</span>
</li>
<li>
<i class="icofont-email"></i>
Email
<span><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b6a6f6662654b68796a606e25686466">[email&#160;protected]</a></span>
</li>
<li>
<i class="icofont-phone"></i>
Phone
<span>+123 456 7890</span>
</li>
</ul>
</div>
<div class="sidebar-modal-widget">
<h3 class="title">Connect With Us</h3>
<ul class="social-list">
<li><a href="#"><i class="icofont-facebook"></i></a></li>
<li><a href="#"><i class="icofont-twitter"></i></a></li>
<li><a href="#"><i class="icofont-instagram"></i></a></li>
<li><a href="#"><i class="icofont-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<div id="header-search" class="header-search">
<button type="button" class="close">??</button>
<form class="header-search-form">
<input type="search" value="" placeholder="Type here........" />
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>


<section class="page-title-banner">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2>Signup</h2>
</div>
</div>
</div>
<div class="shape1"><img src="assets/img/shape1.png" alt="img"></div>
<div class="shape2"><img src="assets/img/shape2.png" alt="img"></div>
<div class="shape3"><img src="assets/img/shape3.png" alt="img"></div>
<div class="shape6"><img src="assets/img/shape6.png" alt="img"></div>
<div class="shape8 rotateme"><img src="assets/img/shape8.svg" alt="shape"></div>
<div class="shape9"><img src="assets/img/shape9.svg" alt="shape"></div>
</section>


<section class="signup-area ptb-100">
<div class="container">
<div class="row h-100 justify-content-center align-items-center">
<div class="col-lg-6 col-md-12">
<div class="signup-image">
<img src="assets/img/marketing.png" alt="image">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="signup-form">
<h3>Sign up for our mailing list</h3>
<form action="" method="post">
<div class="row">
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="First Name" name="fname">
</div>
</div>
<div class="col-lg-12">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Last Name" name="lname">
    </div>
    </div>
<div class="col-lg-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Email" name="emailaddr">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<select class="form-group" name="role" id="">
    <option value="" selected hidden>Select Role</option>
    <option value="Developer">Developer</option>
    <option value="Project Owner">Project Owner</option>
</select>
</div>
</div>
<div class="col-lg-12">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Password">
    </div>
    </div>
<div class="col-lg-12">
 <div class="form-check">
<input type="checkbox" class="form-check-input" id="checkme">
<label class="form-check-label" for="checkme">Keep me Login</label>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn btn-primary">Signup Now!</button>
<br>
<span>Already a registered user? <a href="login.html">Login!</a></span>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-area ptb-100 pb-0 bg-image">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget">
<a href="#" class="logo"><img src="assets/img/logo2.png" alt="logo2"></a>
<p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>
<ul class="social-list">
<li><a href="#"><i class="icofont-facebook"></i></a></li>
<li><a href="#"><i class="icofont-twitter"></i></a></li>
<li><a href="#"><i class="icofont-instagram"></i></a></li>
<li><a href="#"><i class="icofont-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget pl-5">
<h3>Company</h3>
<ul class="list">
<li><a href="#">About</a></li>
<li><a href="#">Carrers</a></li>
<li><a href="#">Awards</a></li>
<li><a href="#">User Program</a></li>
<li><a href="#">Locations</a></li>
<li><a href="#">Login</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget">
<h3>Products</h3>
<ul class="list">
<li><a href="#">Integrations</a></li>
<li><a href="#">API</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Documentation</a></li>
<li><a href="#">Sign Up</a></li>
<li><a href="#">Release Notes</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-footer-widget">
<h3>Support</h3>
<ul class="list">
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Press</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<div class="container">
<div class="row h-100 justify-content-center align-items-center">
<div class="col-lg-6 col-md-6">
<p>Copyright @ 2021 Crake. All rights reserved</p>
</div>
<div class="col-lg-6 col-md-6">
<ul>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<div class="back-to-top">Top</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/canvas.min.js"></script>

<script src="assets/js/jquery.meanmenu.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/tilt.jquery.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/crake/default/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jan 2022 02:30:51 GMT -->
</html>