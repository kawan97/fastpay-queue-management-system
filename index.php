<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FastPay</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="title" content=""/>
	<link type="image/x-icon" href="images/fav-icon.png" rel="icon">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bizord.css">

	
</head>
<body>
	<!-- Start preloader -->
	<div id="preloader">
		<div class="spinner" id="status">
	      <div class="double-bounce1"></div>
	      <div class="double-bounce2"></div>
	    </div>
	</div>
	<!-- End preloader -->

	<!-- HEADER START -->
	<a id="button"></a>
	<header class="navbar-info">
		<nav class="navbar navbar-expand-lg navbar-light navbar-me header">
  			<div class="container">
  				<a class="navbar-brand logo" href="index.php"><img src="images/brand-img2.png" alt="logo"></a>
      			<button class="navbar-toggler navbar-icon" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span><span class="navbar-toggler-icon"></span></button>
	      		<div class="collapse navbar-collapse float-right pt-0 mt-0" id="navbarNav">
		            <ul class="nav navbar-nav ml-lg-auto mr-lg-0">
		            	<li class="page-scroll nav-item active">
		                    <a class="nav-link active fadeinleftbig hidden delay1" data-scroll href="#banner-part">HOME</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link fadeinleftbig hidden delay2" data-scroll href="#about-part">ABOUT</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link fadeinleftbig hidden delay3" data-scroll href="#price-part">SERVICES</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link fadeinleftbig hidden delay5" data-scroll href="#contact-part">CONTACT</a>
		                </li>
						<?php
							if(!isset($_SESSION)) 
							{ 
								session_start(); 
							} 
							if(isset($_SESSION['username']) && isset($_SESSION['password'])){
								?>
										                <li class="nav-item">
		                	<a href="logout.php" class="quote-btn animall " id="quote-btn">Logout</a>
		                </li>
						<?php

							}else{
								?>
										                <li class="nav-item">
		                	<a href="login.php" class="quote-btn animall " id="quote-btn">Login</a>
		                </li>
						<?php

							}

						?>

		            </ul>
		        </div>
  			</div>
 		</nav>
	</header>
	<div class="quote-part mfp-hide" id="quote-popup">		
		<div class="container">
			<div class="section-title">
				<span class="section-span">Contact Us</span>
				<h2 class="text-center head-two">Share your thoughts with us.</h2>
			</div>
			<div class="row">
				<div class="col-lg-7">
					<form id="form1" class="quote-form">
				  		<div class="row">
				    		<div class="col-md">
				      			<input type="text" class="form-control" name="name" id='inputname' placeholder="Name" required>
				    		</div>
				    		<div class="col-md">
				      			<input type="email" class="form-control" name="email" id='inputemail' placeholder="Email" required>
				    		</div>
				  		</div>
				  		<div class="row">
				    		<div class="col-md">
				      			<input type="text" class="form-control" name="subject" id='inputsubject' placeholder="Subject" required>
				    		</div>
				  		</div>
				  		<div class="form-group">
						    <textarea class="form-control" placeholder="Message" name="message" id='inputmessage' rows="4" required></textarea>
						</div>
						<button type="submit" class="quote-contact-btn">SEND</button>
					</form>
				</div>
				<div class="col-lg-5">
					<div class="contact-detail-grp position-r">
						<div class="contact-middle">
							<div class="contact-detail">
								<h3 class="head-three">Give us a call</h3>
								<a href="tel:+9647710257172">+964 771 025 7172</a>
							</div>
							<div class="contact-detail">
								<h3 class="head-three">Send us an email</h3>
								<a href="mailto:dyakoh.tahir@gmail.com">dyakoh.tahir@gmail.com</a>
							</div>
							<div class="contact-detail social-ac">
								<h3 class="head-three">Follow us on</h3>
							<a href="https://www.facebook.com/fastpaycash/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/fastpaycash?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/fastpaycash/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a> 	
							<a href="https://www.youtube.com/c/FastPayCash/featured" target="_blank"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END HEADER-->
	<!-- MAIN START-->
	<div class="pricing-plan-part bg-color-md position-r pb-150 over-hidden" id="price-part">
			<div class="price-bg">
				<svg class="d-none-md price-plan-bg position-a inline" version="1.1" id="Layer_29" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 1053.94 1117.15" style="enable-background:new 0 0 1053.94 1117.15;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#F7F7FB;}</style><path class="st0" d="M532.59,330.22C476.18,251.01,139.35,8.79,0,0.24v1116.28c207.9,13.88,956.06-209.34,1042.38-260.28 C1139.37,799.01,595.58,418.65,532.59,330.22z"/>
				</svg>
			</div>
			<div class="bg-shape">
				<svg class="price-shape1 position-a inline shape-rotate" version="1.1" id="Layer_30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style type="text/css">.p2{fill:transparent;stroke:#eaedfe;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" class="p2" width="31" height="31"/>
				</svg>
				<svg class="price-shape2 position-a inline" version="1.1" id="Layer_31" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.p3{fill:none;stroke:#e9f4f7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
				<path class="p3" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
				</svg>
				<svg class="price-shape3 position-a inline shape-fade" version="1.1" id="Layer_32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46.95 41.35" style="enable-background:new 0 0 46.95 41.35;" xml:space="preserve"><style type="text/css">.w5{fill:none;stroke:#edf4f2;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><polygon class="w5" points="33.95,20.66 23.45,2.5 12.98,20.67 2.5,38.85 23.47,38.83 44.45,38.82 "/>
				</svg>
				<svg class="price-shape4 position-a inline shape-fade" version="1.1" id="Layer_33" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46.95 41.35" style="enable-background:new 0 0 46.95 41.35;" xml:space="preserve"><style type="text/css">.w5{fill:none;stroke:#edf4f2;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><polygon class="w5" points="33.95,20.66 23.45,2.5 12.98,20.67 2.5,38.85 23.47,38.83 44.45,38.82 "/>
				</svg>
				<svg class="price-shape5 position-a inline shape-rotate" version="1.1" id="Layer_34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.68 20.91" style="enable-background:new 0 0 36.68 20.91;" xml:space="preserve"><style type="text/css">.w6{fill:none;stroke:#f7e9f3;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><path class="w6" d="M2.5,18.41C2.5,9.62,9.59,2.5,18.34,2.5c8.75,0,15.84,7.12,15.84,15.91"/>
				</svg>
				<svg class="price-shape6 position-a inline shape-rotate" version="1.1" id="Layer_35" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 20.25 20.25" style="enable-background:new 0 0 20.25 20.25;" xml:space="preserve"><style type="text/css">.w3{fill:#EBF0FD;stroke:#e6ebfd;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g>
				<line class="w3" x1="17.75" y1="17.28" x2="2.5" y2="2.97"/><line class="w3" x1="2.97" y1="17.75" x2="17.28" y2="2.5"/></g>
				</svg>
				<svg class="price-shape7 position-a inline shape-rotate" version="1.1" id="Layer_36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46.95 41.35" style="enable-background:new 0 0 46.95 41.35;" xml:space="preserve"><style type="text/css">.w5{fill:none;stroke:#edf4f2;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><polygon class="w5" points="33.95,20.66 23.45,2.5 12.98,20.67 2.5,38.85 23.47,38.83 44.45,38.82 "/>
				</svg>
				<svg class="price-shape8 position-a inline shape-fade" version="1.1" id="Layer_37" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
				</svg>
				<svg class="price-shape9 position-a inline shape-rotate" version="1.1" id="Layer_38" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style type="text/css">.p2{fill:transparent;stroke:#eaedfe;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" class="p2" width="31" height="31"/>
				</svg>
				<svg class="price-shape10 position-a inline shape-fade" version="1.1" id="Layer_39" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
				</svg>
				<svg class="price-shape11 position-a inline shape-zoom" version="1.1" id="Layer_40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.p3{fill:none;stroke:#effbf7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
				<path class="p3" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
				</svg>
				<svg class="price-shape12 position-a inline shape-fade" version="1.1" id="Layer_41" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
				</svg>
				<svg class="price-shape13 position-a inline shape-rotate" version="1.1" id="Layer_42" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style type="text/css">.p2{fill:transparent;stroke:#eaedfe;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" class="p2" width="31" height="31"/>
				</svg>
				<svg class="price-shape14 position-a inline shape-rotate" version="1.1" id="Layer_43" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 20.25 20.25" style="enable-background:new 0 0 20.25 20.25;" xml:space="preserve"><style type="text/css">.w3{fill:#EBF0FD;stroke:#e6ebfd;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g>
				<line class="w3" x1="17.75" y1="17.28" x2="2.5" y2="2.97"/><line class="w3" x1="2.97" y1="17.75" x2="17.28" y2="2.5"/></g>
				</svg>
				<svg class="price-shape15 position-a inline shape-zoom" version="1.1" id="Layer_44" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.p3{fill:none;stroke:#effbf7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
				<path class="p3" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
				</svg>
			</div>
			<div class="section-title fadeIn hidden pt-100 pt-0-md">
				<span class="section-span">OUR SERVICES</span>
				<h2 class="head-two">Choose a Service</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 mx-auto">
						<div class="pricing-boxes">
							<div class="row">
								<div class="col-xs-12 col-lg-4 p-lg-0 fadeInRight hidden">
									<div class="plan-detail animall">
										<h3 class="heading-three">Delivery Service</h3>
										<ul class="plan-list">
											<li>Balance</li>
											<li>Internet Service</li>
											<li>Service Issue</li>
											<li>MyTV+</li>
										</ul>
										<a href="delivery.php" class="purchase-btn">CHOOSE</a>
									</div>
								</div>
								<div class="col-xs-12 col-lg-4 p-lg-0">
									<div class="plan-detail zi-2 active animall">
										<h3 class="heading-three">Showroom Service</h3>
										<ul class="plan-list">
											<li>Balance</li>
											<li>Internet Service</li>
											<li>Service Issue</li>
											<li>MyTV+</li>
										</ul>
										<a href="showroom.php" class="purchase-btn">CHOOSE</a>
									</div>
								</div>
								<div class="col-xs-12 col-lg-4 p-lg-0 fadeInLeft hidden">
									<div class="plan-detail animall">
										<h3 class="heading-three">Online Booking</h3>
										<ul class="plan-list">
											<li>Balance</li>
											<li>Internet Service</li>
											<li>Service Issue</li>
											<li>MyTV+</li>
										</ul>
										<a href="onlineBooking.php" class="purchase-btn">CHOOSE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<main class="main">
		<div class="banner-part over-hidden" id="banner-part">
			<div class="banner-bg-left position-a inline">
				<svg class="icon-one" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 612 374.47" style="enable-background:new 0 0 612 374.47;" xml:space="preserve"><style type="text/css">.bl{fill-rule:evenodd;clip-rule:evenodd;fill:#f4faff;}</style><path class="bl" d="M0,0v374.47c15.64-24.01,71.03-107.52,307.77-116.59C557.25,248.32,607.47,23.29,612,0H0z"/>
				</svg>
			</div>
			<div class="banner-bg-right position-a inline">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 -41.246 548 537.821" enable-background="new 0 -41.246 548 537.821" xml:space="preserve">
				<path fill="#F4FAFF" d="M548,87.172L547.997-41c0,0-35.497-3-61.733,11.957C460.508-14.36,443.807,0.445,443.807,0.445
					c-5.521,3.332-23.672,30.155-28.238,44.176c-8.505,26.12-0.608,112.381-63.176,125.136c-62.57,12.756-111.775,11.542-133.036,50.42
					c-21.26,38.877-29.159,78.971-29.765,91.121c-0.608,12.149-73.502,9.719-113.598,41.307C36.629,383.621,10.148,399.414,0,496.575
					h548V87.172z"/>
				</svg>
			</div>
			<div class="section-icons">
				<div class="shape">
					<svg class="banner-shape-one position-a inline shape-zoom" id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62">
						<defs><style>.cls-2{fill:none;stroke:#e7e8fc;stroke-miterlimit:10;stroke-width:10px;fill-rule:evenodd;}</style></defs><path class="cls-2" d="M332,620a26,26,0,1,1-26,26A26,26,0,0,1,332,620Z" transform="translate(-301 -615)"/>
					</svg>
				</div>
				<div class="shape">
					<svg class="banner-shape-two position-a inline shape-rotate" id="Layer_4" data-name="Layer 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.83 33.83"><defs><style>.cls-3{fill:#fff;stroke:#d3e1fd;stroke-miterlimit:10;stroke-width:4px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-3" d="M895,191v27H868Z" transform="translate(-863.17 -186.17)"/>
					</svg>
				</div>
				<div class="shape">
					<svg class="banner-shape-three position-a inline shape-rotate" id="Layer_5" data-name="Layer 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.3 56.3"><defs><style>.cls-4{fill:none;stroke:#ffd3d8;stroke-miterlimit:10;stroke-width:5px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-4" d="M766.87,597.9l22.23-27,27,22.23-22.23,27Z" transform="translate(-763.35 -567.35)"/>
					</svg>
				</div>
				<div class="shape">
					<svg class="banner-shape-four position-a inline rotate3d" id="Layer_6" data-name="Layer 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15"><defs><style>.cls-5{fill:#ffd3d8;fill-rule:evenodd;}</style></defs><title></title><path class="cls-5" d="M561.5,474a7.5,7.5,0,1,1-7.5,7.5A7.5,7.5,0,0,1,561.5,474Z" transform="translate(-554 -474)"/>
					</svg>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6 center-content order-2 order-lg-1">
						<div class="banner-content fadeInLeft hidden">
							<p class="banner-heading mb-0">The <span>Application</span></p>
							<h1 class="head-one">In a brand new look!</h1>
							<p class="banner-p">FastPay application is back with a new look and extra features to ensure maximum convenience and security for your usage.</p>
							<a href="https://apps.apple.com/in/app/fastpay-wallet/id1255784969" class="started-btn download"> <img src="images/appstore.png"></a>
							<a href="https://play.google.com/store/apps/details?id=com.sslwireless.fastpay" class="started-btn download"> <img src="images/googleplay.png"></a>
						</div>
					</div>
					<div class="col-xs-12 col-lg-6 img-box order-1 order-lg-2 fadeInRight hidden">
						<div class="banner-image text-center">
							<img src="images/banner-img.png" alt="banner-img" class="position-r">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="brand-part">
			<div class="container">
				<div class="row">
					<div class="w-100">
						<div class="brand-slider fadeInDown hidden" id="brand-slider">
							<div class="item">
								<img src="images/brand-img1.png" alt="brand-img">
							</div>
							<div class="item">
								<img src="images/brand-img2.png" alt="brand-img">
							</div>
							<div class="item">
								<img src="images/brand-img3.png" alt="brand-img">
							</div>
							<div class="item">
								<img src="images/brand-img4.png" alt="brand-img">
							</div>
							<div class="item">
								<img src="images/brand-img5.png" alt="brand-img">
							</div>
							<div class="item">
								<img src="images/brand-img6.png" alt="brand-img">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-services-part py-120 pt-0-md pb-60-md over-hidden" id="our-services-part">
			<div class="our-services-part-inner bg-color-md">
				<div class="service-shape">
					<div class="shape">
						<svg class="service-shape-one position-a inline shape-fade" id="Layer_7" data-name="Layer 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.83 33.83"><defs><style>.cls-6{fill:transparent;stroke:#e9f0fe;stroke-miterlimit:10;stroke-width:4px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-6" d="M895,191v27H868Z" transform="translate(-863.17 -186.17)"/></svg>
					</div>
					<div class="shape">
						<svg class="service-shape-two position-a inline shape-rotate" id="Layer_8" data-name="Layer 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.3 56.3"><defs><style>.cls-7{fill:none;stroke:#ffe9eb;stroke-miterlimit:10;stroke-width:5px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-7" d="M766.87,597.9l22.23-27,27,22.23-22.23,27Z" transform="translate(-763.35 -567.35)"/>
						</svg>
					</div>
					<div class="shape">
						<svg class="service-shape-three position-a inline rotate3d" id="Layer_9" data-name="Layer 9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15"><defs><style>.cls-8{fill:#ffd3d8;fill-rule:evenodd;}</style></defs><title></title><path class="cls-8" d="M561.5,474a7.5,7.5,0,1,1-7.5,7.5A7.5,7.5,0,0,1,561.5,474Z" transform="translate(-554 -474)"/></svg>
					</div>
					<div class="shape">
						<svg class="service-shape-four position-a inline shape-rotate" id="Layer_10" data-name="Layer 10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.3 56.3"><defs><style>.cls-7{fill:none;stroke:#ffe9eb;stroke-miterlimit:10;stroke-width:5px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-7" d="M766.87,597.9l22.23-27,27,22.23-22.23,27Z" transform="translate(-763.35 -567.35)"/>
						</svg>
					</div>
					<div class="shape">
						<svg class="service-shape-six position-a inline shape-zoom" id="Layer_11" data-name="Layer 11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62"><defs><style>.cls-2{fill:none;stroke:#e7e8fc;stroke-miterlimit:10;stroke-width:10px;fill-rule:evenodd;}</style></defs><title></title><path class="cls-2" d="M332,620a26,26,0,1,1-26,26A26,26,0,0,1,332,620Z" transform="translate(-301 -615)"/>
						</svg>
					</div>
					<div class="shape">
						<svg class="service-shape-seven position-a inline shape-zoom" id="Layer_12" data-name="Layer 12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15"><defs><style>.cls-8{fill:#ffd3d8;fill-rule:evenodd;}</style></defs><title></title><path class="cls-8" d="M561.5,474a7.5,7.5,0,1,1-7.5,7.5A7.5,7.5,0,0,1,561.5,474Z" transform="translate(-554 -474)"/></svg>
					</div>
				</div>
				<div class="container">
					<div class="section-title fadeIn hidden">
						<span class="section-span">OUR CORE VALUE</span>
						<h2 class="head-two">Why should you choose FastPay?</h2>
					</div>
					<div class="service-detail-grp">
						<div class="row">
							<div class="col-lg-3 col-sm-6 animall fadeInUp hidden delay1">
								<div class="services-detail">
									<img src="images/service-img1.png" alt="sevice-img">
									<h3 class="head-three">Easy To Use</h3>
									<p>We are introducing the new FastPay App, with an elegant look, and exciting features, to make your payments simpler and easier.</p>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 animall fadeInUp hidden delay3">
								<div class="services-detail">
									<img src="images/service-img2.png" alt="sevice-img">
									<h3 class="head-three">Faster Payments</h3>
									<p>Providing a fast and convenient payment method for your returning customers. Make it easy for them to pay with one click.</p>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 animall fadeInUp hidden delay5">
								<div class="services-detail">
									<img src="images/service-img3.png" alt="sevice-img">
									<h3 class="head-three">Lower Fees</h3>
									<p>Our fraud prevention tool comes free with every FastPay account, and offers a robust toolkit designed to protect your sales and customers.</p>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 animall fadeInUp hidden delay7">
								<div class="services-detail">
									<img src="images/service-img4.png" alt="sevice-img">
									<h3 class="head-three">100% Secure</h3>
									<p>Giving your customers peace of mind while transacting with you is our top priority – from securing your payment data to ensuring our infrastructure processes millions of payments.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row pt-100" id="about-part">
					<div class="col-xs-12 col-lg-5 position-r">
						<div class="aboutus-img-mainpart">
							<div class="aboutus-img">
								<img src="images/about-img.png" alt="aboutus-image" class="about-bg d-none d-lg-block d-xl-block">
								<img src="images/about-img-md.png" alt="aboutus-image" class="about-bg d-block d-lg-none d-xl-none">
							</div>
							<div class="about-pink-shape fadeInDown hidden">
								<svg class="service-shape-five inline" version="1.1" id="Layer_13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 					viewBox="0 0 416.56 489.99" style="enable-background:new 0 0 416.56 489.99;" xml:space="preserve"><style type="text/css">.ab2{fill-rule:evenodd;clip-rule:evenodd;fill:#FAD5E2;}</style><path class="ab2" d="M265.26,14.85c99.22,56.79,190.61,285.01,133.82,384.23c-56.79,99.22-195.65,115.01-294.87,58.22
								C4.99,400.5-29.41,274.03,27.38,174.81S166.04-41.94,265.26,14.85z"/>
								</svg>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-lg-7 pt-85">
						<div class="section-title pb-3 text-left">
							<span class="section-span">ABOUT US</span>
							<h2 class="head-two">Payment Solutions for anyone</h2>
						</div>
						<div class="aboutus-detail">
							<p>FastPay is the safer, easier way to pay and get paid online. Discover the best FastPay offering and choose from the different services we provide for online payment.</p>
							<ul>
								<li>With our upto date technology, we allow our customers to have transactions in a matter of seconds</li>
								<li>We are Iraq’s quickest, most convenient, and safest mobile wallet for a cashless, hassle-free experience</li>
							</ul>
						</div>			
					</div>
				</div>
			</div>
			
		</div>
		<div class="what-we-part pt-100 pb-60-md position-r over-hidden">
			<div class="whatwe-shape">
				<div class="shape">
					<svg class="inner-shape1 position-a inline shape-rotate" version="1.1" id="Layer_14" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style
					 type="text/css">.w1{fill:#FFFFFF;stroke:#F0F4FE;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" 
						class="w1" width="31" height="31"/>
					</svg>
					<svg class="inner-shape2 position-a inline shape-zoom" version="1.1" id="Layer_15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.w2{fill:none;stroke:#EFFBF7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
					<path class="w2" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
					</svg>
					<svg class="inner-shape3 position-a inline shape-rotate" version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 20.25 20.25" style="enable-background:new 0 0 20.25 20.25;" xml:space="preserve"><style type="text/css">.w3{fill:#EBF0FD;stroke:#EBF0FD;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g>
					<line class="w3" x1="17.75" y1="17.28" x2="2.5" y2="2.97"/><line class="w3" x1="2.97" y1="17.75" x2="17.28" y2="2.5"/></g>
					</svg>
					<svg class="inner-shape4 position-a inline shape-zoom" version="1.1" id="Layer_17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
					</svg>
					<svg class="inner-shape5 position-a inline shape-rotate" version="1.1" id="Layer_18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46.95 41.35" style="enable-background:new 0 0 46.95 41.35;" xml:space="preserve"><style type="text/css">.w5{fill:none;stroke:#F3FBF2;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><polygon class="w5" points="33.95,20.66 23.45,2.5 12.98,20.67 2.5,38.85 23.47,38.83 44.45,38.82 "/>
					</svg>
					<svg class="inner-shape6 position-a inline shape-rotate" version="1.1" id="Layer_19" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.68 20.91" style="enable-background:new 0 0 36.68 20.91;" xml:space="preserve"><style type="text/css">.w6{fill:none;stroke:#FEF0F3;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><path class="w6" d="M2.5,18.41C2.5,9.62,9.59,2.5,18.34,2.5c8.75,0,15.84,7.12,15.84,15.91"/>
					</svg>
					<svg class="inner-shape7 position-a inline shape-rotate" version="1.1" id="Layer_20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.68 20.91" style="enable-background:new 0 0 36.68 20.91;" xml:space="preserve"><style type="text/css">.w6{fill:none;stroke:#FEF0F3;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><path class="w6" d="M2.5,18.41C2.5,9.62,9.59,2.5,18.34,2.5c8.75,0,15.84,7.12,15.84,15.91"/>
					</svg>
					<svg class="inner-shape8 position-a inline shape-fade" version="1.1" id="Layer_21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
					</svg>
					<svg class="inner-shape9 position-a inline animated-1" version="1.1" id="Layer_22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.w2{fill:none;stroke:#EFFBF7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
					<path class="w2" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
					</svg>
					<svg class="inner-shape10 position-a inline shape-zoom" version="1.1" id="Layer_23" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.14 17.25" style="enable-background:new 0 0 63.14 17.25;" xml:space="preserve"> <style type="text/css">.w4{fill:none;stroke:#FEF2F4;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g><path class="w4" d="M17.04,14.75C10.13,14.75,11.32,2.5,2.5,2.5"/><path class="w4" d="M46.11,14.75c-6.91,0-5.72-12.25-14.54-12.25"/><path class="w4" d="M17.04,14.75c6.91,0,5.72-12.25,14.54-12.25"/><path class="w4" d="M60.64,2.5"/><path class="w4" d="M46.11,14.75c6.91,0,5.72-12.25,14.54-12.25"/></g>
					</svg>
					<svg class="inner-shape11 position-a inline shape-rotate" version="1.1" id="Layer_24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style
					 type="text/css">.w1{fill:#FFFFFF;stroke:#F0F4FE;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" 
						class="w1" width="31" height="31"/>
					</svg>
					<svg class="inner-shape12 position-a inline shape-rotate" version="1.1" id="Layer_25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.65 36.65" style="enable-background:new 0 0 36.65 36.65;" xml:space="preserve"><style
					 type="text/css">.w1{fill:#FFFFFF;stroke:#F0F4FE;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><rect x="2.5" y="2.5" 
						class="w1" width="31" height="31"/>
					</svg>
					<svg class="inner-shape13 position-a inline shape-rotate" version="1.1" id="Layer_26" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 20.25 20.25" style="enable-background:new 0 0 20.25 20.25;" xml:space="preserve"><style type="text/css">.w3{fill:#EBF0FD;stroke:#EBF0FD;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><g>
					<line class="w3" x1="17.75" y1="17.28" x2="2.5" y2="2.97"/><line class="w3" x1="2.97" y1="17.75" x2="17.28" y2="2.5"/></g>
					</svg>
					<svg class="inner-shape14 position-a inline shape-zoom" version="1.1" id="Layer_27" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 36.83 36.83" style="enable-background:new 0 0 36.83 36.83;" xml:space="preserve"><style type="text/css">.w2{fill:none;stroke:#EFFBF7;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style>
					<path class="w2" d="M34.33,18.41c0,8.79-7.12,15.91-15.91,15.91S2.5,27.2,2.5,18.41C2.5,9.62,9.63,2.5,18.41,2.5S34.33,9.62,34.33,18.41z"/>
					</svg>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-6">
						<div class="section-title pb-3 text-left pt-100">
							<span class="section-span">How Does It Work?</span>
							<h2 class="head-two">FastPay provides businesses with the highest levels of digital payments.</h2>
							<p class="what-p">Just like FastPay provides a Digital Wallet for personal use, we also bring the cashless experience to businesses. Becoming financially degitized has never been easier. Businessess can reap the benefits of having being a FastPay Business Partner and add the highest levels of security and peace of mind to their businesses.</p>
						</div>
						<div class="site-performance w-100">
							<ul class="row separate-progress">
								<li>
									<svg class="radial-progress" data-percentage="100" viewBox="0 0 80 80">
			                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 45.7416px;fill:transparent;stroke:#fb4567;"></circle><text class="percentage" x="50%" y="50%"  transform="matrix(0, 1, -1, 0, 80, 0)">100%</text>
			                        <text class="prdata orange" x="50%" y="65%"  transform="matrix(0, 1, -1, 0, 80, 0)">Secure</text>
			                        </svg>
	                        	</li>
	                        	<li>
									<svg class="radial-progress green" data-percentage="100" viewBox="0 0 80 80">
			                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 45.7416px;fill:transparent;stroke:#fb6a2f;"></circle><text class="percentage green" x="50%" y="50%"  transform="matrix(0, 1, -1, 0, 80, 0)">100%</text>
			                        <text class="prdata orange" x="50%" y="65%"  transform="matrix(0, 1, -1, 0, 80, 0)">Reliable</text>
			                        </svg>
	                        	</li>
	                        	<li>
									<svg class="radial-progress orange" data-percentage="100" viewBox="0 0 80 80">
			                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			                        <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 45.7416px;fill:transparent;stroke:#67de80;"></circle><text class="percentage orange" x="50%" y="50%"  transform="matrix(0, 1, -1, 0, 80, 0)">100%</text>
			                        <text class="prdata orange" x="50%" y="65%"  transform="matrix(0, 1, -1, 0, 80, 0)">Trusted</text>
			                        </svg>
	                        	</li>
	                        </ul>
                        </div>
					</div>
					<div class="col-xs-12 col-lg-6 position-r mob-bg">
						<div class="whatwe-bg-img">
							<img src="images/what-we-img.png" alt="whatwe-img" class="">
						</div>
						<div class="whatwe-pink-shape">
							<svg class="service-shape-five" version="1.1" id="Layer_28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 					viewBox="0 0 416.56 489.99" style="enable-background:new 0 0 416.56 489.99;" xml:space="preserve"><style type="text/css">.ab2{fill-rule:evenodd;clip-rule:evenodd;fill:#FAD5E2;}</style><path class="ab2" d="M265.26,14.85c99.22,56.79,190.61,285.01,133.82,384.23c-56.79,99.22-195.65,115.01-294.87,58.22
							C4.99,400.5-29.41,274.03,27.38,174.81S166.04-41.94,265.26,14.85z"/>
							</svg>
						</div>
						<img src="images/what-wedo-bg.svg" width="600" height="500" class="fadeInUp hidden dot-bg" alt="what-we-img">
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="contactus-part bg-color-md pt-100" id="contact-part">
			<div class="section-title">
				<span class="section-span">CONTACT US</span>
				<h2 class="head-two">Get in touch with us.</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="img-box">
							<img src="images/contact-img.png" class="contanim" alt="contact-img">
						</div>		
					</div>
					<div class="col-12 col-md-6">
						<div class="form-detail">
                           	<form id="form2" class="contactform">
                                <div class="row">
								    <div class="col-xs-12 col-md">
								      	<input type="text" class="form-control" name="name" id='inputname' placeholder="Name" required>
								    </div>
								    <div class="col-xs-12 col-md">
								      	<input type="email" class="form-control" name="email" id='inputemail' placeholder="Email" required>
								    </div>
								</div>
								<div class="form-group">
                                    <input type="text" class="form-control" name="subject" id='inputsubject' placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                   	<textarea class="form-control" rows="4" name="message" id='inputmessage' placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="send">SEND</button>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer-part">
			<div class="container pb-100 pb-60-md">
				<div class="row">
					<div class="col-12 col-md-4">
						<a href="index.php"><img src="images/brand-img2.png" alt="logo"></a>
						<p class="footer-p">FastPay is the safer, easier way to pay and get paid online. Discover the best FastPay offering and choose from the different services we provide for online payment.</p>
						<div class="social-media">	
							<a href="https://www.facebook.com/fastpaycash/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/fastpaycash?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/fastpaycash/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a> 	
							<a href="https://www.youtube.com/c/FastPayCash/featured" target="_blank"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
					<div class="col-12 col-md-2">
						<h3 class="head-three">Usefull Link</h3>
						<div class="head-line"></div>
						<ul class="footer-menu">
							<li><a data-scroll href="#about-part">About Us</a></li>
							<li><a data-scroll href="#price-part">Services</a></li>
							<li><a data-scroll href="#contact-part">Contact</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-3">
						<h3 class="head-three">Services</h3>
						<div class="head-line"></div>
						<ul class="footer-menu">
							<li><a data-scroll href="#price-part">Delivery Service</a></li>
							<li><a data-scroll href="#price-part">Showroom Service</a></li>
							<li><a data-scroll href="#price-part">Online Booking</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-3">
						<h3 class="head-three">Contact with us</h3>
						<div class="head-line"></div>
						<p class="footer-p"><b>FastPay</b> <br>Karookh Building <br>Salim Street, Sulaimani.</p>
						<ul class="footer-menu">
							<li>Phone :<a href="tel:+9647710257172"> +964 771 025 7172</a></li>
							<li>E-Mail :<a href="mailto:dyakoh.tahir@gmail.com"> dyakoh.tahir@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="w-100">
								<p class="mb-0">&copy; All Rights Reserved by <a href="index.php" target="#" title="FastPay">FastPay</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>
	<!-- END MAIN-->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/viewportchecker.js"></script>
	<script src="js/custom.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
		jQuery(document).ready(function(){
        	jQuery('.fadeIn,.bounceInLeft,.lightSpeedIn,.bounceInUp,.bounceInDown,.bounceInRight,.rotateInUpLeft,.zoomIn,.rubberBand,.rollIn,.rollOut,.zoomInDown,.fadeInDownBig,.fadeInUpBig,.fadeInLeftBig,.fadeInRightBig,.fadeInLeft,.fadeInRight,.fadeInDown,.flipInX,.rotateInDownRight,.rotateInDownLeft,.float_left_right_two,.fadeInUp,.flash,.fadeinleftbig,.slideInUp').addClass("hidden").
 
        	viewportChecker({
          	classToAdd: 'visible animated',
          	offset: 50
       		});
      	});            
	</script>
	<script>

	//form 
	const form1 = document.getElementById('form1');
	const form2 = document.getElementById('form2');

	form1.addEventListener('submit', formSubmit);
	form2.addEventListener('submit', formSubmit);
	function formSubmit(event) {
  		event.preventDefault();
		var name=event.target.name.value;
		var email=event.target.email.value;
		var subject=event.target.subject.value;
		var message=event.target.message.value;
		//add to db
        //obj for booking
        objforcontact = {
            "name": name,
            "email": email,
            "message":message,
			"subject":subject,
        };

        //encoding the obj
        var json = JSON.stringify(objforcontact);

        var options = {
            url: "api_add_contact.php",
            dataType: "json",
            type: "POST",
            data: json,

            success: function(data, status, xhr) {
                // console.log(data)
                // console.log(status)
				event.target.message.value="";
				event.target.subject.value="";
				event.target.email.value="";
				event.target.name.value="";
				swal({
			  title: "Thank you!",
			  text: 'your message is sended successfully',
			  icon: "success",
			})
            },
            error: function(xhr, status, error) {
                // console.log(error)
				swal.fire({
			  title: "you have an error!",
			  text: "sorry you have an error please call support ...",
			  icon: "error",
			})
            }
        };
        $.ajax(options);

		//end add to db

	}

	//end form 

	$('.nav-link').on('click',function(e) {
        $('a.nav-link').removeClass('active');
        $(this).addClass('active');
        if ( $(window).width() < 991 ){
        	$(".navbar-toggler").click();
        }
    });
	</script>
</body>
</html>