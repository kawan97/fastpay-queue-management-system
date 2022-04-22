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

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://smtpjs.com/v3/smtp.js"></script>
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
	<header class="navbar-info position-none">
		<nav class="navbar navbar-expand-lg navbar-light navbar-me header inner">
  			<div class="container">
  				<a class="navbar-brand" href="index.php"><img src="images/brand-img2.png" alt="logo"></a>
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
	<main class="main">
		<div class="inner-banner-part" id="banner-part">
			<div class="inner-banner-content">
				<h1 class="head-one">ONLINE BOOKING</h1>
				<div class="custom-bread">
                    <ul class="breadcrumb inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Online Booking</li>
                    </ul>
                </div>
			</div>
		</div>
				<div class="blog-part paddingtb">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-12 col-xl-12">
						<div class="row">
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a data-number="1" class="zoom pop"><img src="images/blog-img1.jpg" alt="blog-img1"></a>
								<div class="blog-detail">
									<p class="bloger-date">Balance</p>
									<h3 class="head-three"><a >Deposit/withdraw Balance</a></h3>
									<a data-number="1" class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a data-number="2" class="zoom pop"><img src="images/blog-img2.jpg" alt="blog-img2"></a>
								<div class="blog-detail">
									<p class="bloger-date">Internet Service</p>
									<h3 class="head-three"><a >Request Internet Services</a></h3>
									<a data-number="2" class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a data-number="3" class="zoom pop"><img src="images/blog-img3.jpg" alt="blog-img3"></a>
								<div class="blog-detail">
									<p class="bloger-date">Service Issue</p>
									<h3 class="head-three"><a >Service Issues</a></h3>
									<a data-number="3" class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a data-number="4" class="zoom pop"><img src="images/blog-img4.jpg" alt="blog-img4"></a>
								<div class="blog-detail">
									<p class="bloger-date">MyTV+</p>
									<h3 class="head-three"><a >Issues with MyTV+</a></h3>
									<a data-number="4" class="readmore-btn pop">Choose</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contactus-part bg-color-md pt-100" id="contact-part">
			<div class="section-title">
				<span class="section-span">CONTACT US</span>
				<h2 class="head-two">Lets create something awesome together</h2>
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
							<li><a href="index.php">About Us</a></li>
							<li><a href="index.php">Services</a></li>
							<li><a href="index.php">Contact</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-3">
						<h3 class="head-three">Services</h3>
						<div class="head-line"></div>
						<ul class="footer-menu">
							<li><a href="index.php">Delivery Service</a></li>
							<li><a href="index.php">Showroom Service</a></li>
							<li><a href="index.php">Online Booking</a></li>
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
        	jQuery('.bounceInLeft,.lightSpeedIn,.bounceInUp,.bounceInDown,.bounceInRight,.rotateInUpLeft,.zoomIn,.rubberBand,.rollIn,.rollOut,.zoomInDown,.fadeInDownBig,.fadeInUpBig,.fadeInLeftBig,.fadeInRightBig,.fadeInLeft,.fadeInRight,.flipInX,.rotateInDownRight,.rotateInDownLeft,.float_left_right_two,.fadeInUp,.flash,.fadeinleftbig').addClass("hidden").viewportChecker({
          	classToAdd: 'visible animated',
          	offset: 50
       		});
      	});            
	</script>

	<script>
	$('.nav-link').on('click',function(e) {
        $('a.nav-link').removeClass('active');
        $(this).addClass('active');
    });
	</script>
<script>
		$(".pop").click(function(e){
			var subtypeid=e.target.getAttribute("data-number");
			var name='';
			var time='';
	Swal.fire({
  title: 'Please provide the following:',
  html: `<input type="text" id="name" class="swal2-input" placeholder="Name">
  <input type="time" id="time" name="appt" min="08:00" max="23:00" class="swal2-input" required>`,
  confirmButtonText: 'Confirm',
  focusConfirm: false,
  preConfirm: () => {
	var check=true;

     name = Swal.getPopup().querySelector('#name').value
     time = Swal.getPopup().querySelector('#time').value
	var mytime=time[0]+time[1]
	var mytime=parseInt(mytime)
	console.log(mytime)
	if(mytime<8){

		Swal.showValidationMessage(`Service is not available at that time.`)
			var check=false;
	}
	if( mytime>22){

Swal.showValidationMessage(`Service is not available at that time.`)
	var check=false;
}
    if (!name || !time) {
    		Swal.showValidationMessage(`Please provide the details.`)
			var check=false;
    }
	 
				// add to db
                if(check==true){
        objforbooking = {
            "typeid": '3',
            "subtypeid": subtypeid,
            "time":time,
            "name":name
        };
	var json = JSON.stringify(objforbooking);

var options = {
	url: "api_add.php",
	dataType: "json",
	type: "POST",
	data: json,

	success: function(data, status, xhr) {
		// console.log(data['message'])
		// console.log(status)
		Swal.fire({
			  title: "Thank you "+data['name'],
			html:
			'<p> Your number is ' + data['number']+" <br> Please be at  fastpay showroom at "+data['time']+'</p> <b style="color:red; font-size:24px;"> <br> Please take a screenshot of this screen</b> ',
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

	}
	
	//end add to db
    
  }
})
		});



		
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
				swal.fire({
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
	</script>
</body>
</html>