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
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-12 col-xl-12">
						<div class="row">
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a href="blog-detail.php" class="zoom"><img src="images/blog-img1.jpg" alt="blog-img1"></a>
								<div class="blog-detail">
									<p class="bloger-date">Balance</p>
									<h3 class="head-three"><a href="blog-detail.php">Deposit/withdraw Balance</a></h3>
									<a class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a href="blog-detail.php" class="zoom"><img src="images/blog-img2.jpg" alt="blog-img2"></a>
								<div class="blog-detail">
									<p class="bloger-date">Internet Service</p>
									<h3 class="head-three"><a href="blog-detail.php">Request Internet Services</a></h3>
									<a class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a href="blog-detail.php" class="zoom"><img src="images/blog-img3.jpg" alt="blog-img3"></a>
								<div class="blog-detail">
									<p class="bloger-date">Service Issue</p>
									<h3 class="head-three"><a href="blog-detail.php">Service Issues</a></h3>
									<a class="readmore-btn pop">Choose</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-3 img-box blog-content">
								<a href="blog-detail.php" class="zoom"><img src="images/blog-img4.jpg" alt="blog-img4"></a>
								<div class="blog-detail">
									<p class="bloger-date">MyTV+</p>
									<h3 class="head-three"><a href="blog-detail.php">Issues with MyTV+</a></h3>
									<a class="readmore-btn pop">Choose</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>>
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
		$(".pop").click(function(){
			swal.fire({
			  title: "Thank you!",
			  text: "Your Number is ...",
			  icon: "success",
			})
		});
	</script>

</body>
</html>