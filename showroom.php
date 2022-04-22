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
	<!-- <div id="preloader">
		<div class="spinner" id="status">
	      <div class="double-bounce1"></div>
	      <div class="double-bounce2"></div>
	    </div>
	</div> -->
	
	<!-- MAIN START-->
	<main class="main">
		<div class="inner-banner-part" id="banner-part">
			<div class="inner-banner-content">
				<h1 class="head-one">SHOWROOM SERVICE</h1>
				<div class="custom-bread">
                    <ul class="breadcrumb inline">
                        <li><a href="index.php">Home</a></li>
                        <li>Showroom Service</li>
                    </ul>
                </div>
			</div>
		</div>
		<div class="blog-part paddingtb">

			<?php
			    if(!isset($_SESSION)) 
				{ 
					session_start(); 
				} 
			if(isset($_SESSION['username']) && isset($_SESSION['password'])){
			?>
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


			<?php	

			}else{
				?>
				<center><h1 class="head-one">Sorry Show Room Service Just Work In Our Office</h1></center>
				<?php
			}
			?>
			

		</div>
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
			var check=true;
				// add to db
	if(check==true){
		objforshowroom = {
            "typeid": '2',
            "subtypeid": subtypeid,
        };
	var json = JSON.stringify(objforshowroom);

var options = {
	url: "api_add.php",
	dataType: "json",
	type: "POST",
	data: json,

	success: function(data, status, xhr) {
		// console.log(data['message'])
		// console.log(status)
		swal.fire({
			  title: "Thank you!",
			  text: "Your Number is :"+data['message'],
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
	
	//nd add to db

		});
	</script>

</body>
</html>