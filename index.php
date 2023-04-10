<?php

include "config/database.php";

if(isset($_POST['submit'])){

	$tid = $_POST['tid'];




	if($tid == ""){

	echo "<script>alert('Please enter a tracking Number')</script>";

	}else{


		$sql= "SELECT * FROM track WHERE pid = '$tid'";
		$result = mysqli_query($link,$sql);
		if(mysqli_num_rows($result) > 0){
		  $row = mysqli_fetch_assoc($result);

		  $pid = $row['pid'];
		  if(isset($row['pid'])){

			  $pid = $row['pid'];



	if($tid == $pid){



	header("Location:result.php?track=$tid");

	}

	else{

		echo "<script>alert('No record for the track number')</script>";
	}

}

}

}
}

?>



<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/prevoz/default/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 20:49:34 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<link rel="stylesheet" href="assets/css/mystyle.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Theme Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Boxicons CSS -->
		<link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
		<link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
		<!-- Odometer CSS-->
		<link rel="stylesheet" href="assets/css/odometer.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-60f5aa52-c53a-4e0e-a1ae-b6d9878e7529"></div>

        <!-- TITLE -->
        <title>Odessa Logistics</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- End Preloader Area -->

		<div id="google_translate_element" style="margin-left:1%">

</div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	  <?php include('templates/header.php'); ?>

					<!-- Menu For Desktop Device -->
					<div class="main-nav">
						<nav class="navbar navbar-expand-md navbar-light">
							<div class="container">
								<a class="navbar-brand" href="index.php">
									<img src="assets/img/logo/logo-two.png" alt="Logo">
								</a>
								<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item">
											<a href="index.php" class="nav-link dropdown-toggle active">
												Home
											</a><!--
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="index.php" class="nav-link">Home One</a>
												</li>
												<li class="nav-item">
													<a href="index-2.html" class="nav-link active">Home Two</a>
												</li>
												<li class="nav-item">
													<a href="index-3.html" class="nav-link">Home Three</a>
												</li>
												<li class="nav-item">
													<a href="index-4.html" class="nav-link">Home Four</a>
												</li>
												<li class="nav-item">
													<a href="index-5.html" class="nav-link">Home Five</a>
												</li>
											</ul>-->
										</li>
										<li class="nav-item">
											<a href="about.php" class="nav-link dropdown-toggle">
												About Us
											</a>

										</li><!--
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												Company
												<i class='bx bx-chevron-down'></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="company-history.html" class="nav-link">Company History</a>
												</li>
												<li class="nav-item">
													<a href="company-clients.html" class="nav-link">Company Clients</a>
												</li>
												<li class="nav-item">
													<a href="careers.html" class="nav-link">Careers</a>
												</li>
											</ul>
										</li>-->
										<li class="nav-item">
											<a href="services.php" class="nav-link dropdown-toggle">
												Services
											</a><!--
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="services.html" class="nav-link">Services</a>
												</li>
												<li class="nav-item">
													<a href="road-transport.html" class="nav-link">Road Transport</a>
												</li>
												<li class="nav-item">
													<a href="air-transport.html" class="nav-link">Air  Transport</a>
												</li>
												<li class="nav-item">
													<a href="service-details.php" class="nav-link">Service Details</a>
												</li>
											</ul>-->
										</li><!--
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle">
												News
												<i class='bx bx-chevron-down'></i>
											</a>
											<ul class="dropdown-menu">
												<li class="nav-item">
													<a href="news-grid.html" class="nav-link">News Grid</a>
												</li>
												<li class="nav-item">
													<a href="news-full-width.html" class="nav-link">News Full width</a>
												</li>
												<li class="nav-item">
													<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
												</li>
												<li class="nav-item">
													<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
												</li>
												<li class="nav-item">
													<a href="news-details.html" class="nav-link">News Details</a>
												</li>
											</ul>
										</li>-->
										<li class="nav-item">
											<a href="track.php" class="nav-link dropdown-toggle">
												Track Parcel

											</a>
										</li>
										<li class="nav-item">
											<a href="contact.php" class="nav-link">Contact</a>
										</li>
									</ul>
									<!-- Start Other Option -->
									<div class="others-option">
										<div class="search-wrap">
											<a href="#">
												<i class='bx bx-search'></i>
											</a>
										</div>
										<button type="button" class="sidebar-menu" data-toggle="modal" data-target="#myModal2">
											<i class="flaticon-menu"></i>
										</button>
									</div>
									<!-- End Other Option -->
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- End Prevoz Navbar Area -->
		</header>
		<!-- End Header Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="bx bx-x"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.php">
									<img src="assets/img/logo/logo.png" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">About Us</h3>
								<p>Odessa Logistics group offers a host of logistic management services and supply chain solutions.
								We provide innovative solutions with the best people, processes, and technology. </p>
							</div>

							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="bx bx-location-plus"></i>
										Address
										<span> United States</span>
									</li>
									<li>
										<i class="bx bx-envelope"></i>
										Email
										<span>Odessa Logistics</span>
									</li>
									<li>
										<i class="bx bxs-phone-call"></i>
										Phone
										<span>+31621664187</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-linkedin'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-youtube'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Search Box Modal -->
		<div class="search-wrap">
			<div class="search">
				<button type="button" class="close">×</button>

				<form>
					<input type="search" value="" class="form-control" placeholder="Type Here..." />
					<button type="submit" class="default-btn">
						Search
					</button>
				</form>


			</div>
		</div>
        <!-- End Search Box Modal -->














		<!-- Start Prevoz Slider Area -->
		<section class="prevoz-slider-area prevoz-slider-area-two section-cont">
			<div class="prevoz-slider owl-carousel owltheme">
				<div class="prevoz-slider-item slider-item-bg-4">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="prevoz-slider-text overflow-hidden one">
									<span>Welcome</span>
							<h1 style="color:#C70F15;"> Odessa Logistics</h1>




									<div class="tracking-body">



										<form class="tracking-wrap" action="index.php" method="POST">
											<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
											<button class="default-btn active" type="submit" value="submit" name="submit">Track Now</button>
										</form>


									</div>



								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="prevoz-slider-item slider-item-bg-5">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="prevoz-slider-text overflow-hidden two">
									<!-- <span>Logistic Services</span> -->
									<h1>We Are Reliable and Efficient</h1>

									<div class="tracking-body">


										<form class="tracking-wrap" action="index.php" method="POST">
											<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
											<button class="default-btn active" type="submit" value="submit" name="submit">Track Now</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="prevoz-slider-item slider-item-bg-6">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="prevoz-slider-text overflow-hidden three">
									<span>Logistic Services</span>
									<h4>Faster is fatal slower is can be safe.</h1>
									<div class="tracking-body">



										<form class="tracking-wrap" action="index.php" method="POST">
											<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
											<button class="default-btn active" type="submit" value="submit" name="submit">Track Now</button>
										</form>



									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</section>
		<!-- End Prevoz Slider Area -->


		<!-- mobile -->


		<div class=" ncontainer">


			<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <!-- <li data-target="#demo" data-slide-to="2"></li> -->
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slider/banner-1.jpg"  class="img-class">
      <div class="carousel-caption">
        <h1> Odessa Logistics</h1>

				<form class="tracking-wrap" action="index.php" method="POST">
					<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
					<button class="default-btn active" type="submit" value="submit" name="submit">Track Now</button>
				</form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider/5.jpg" class="img-class">
      <div class="carousel-caption">
        <h1>We Are Reliable and Efficient</h1>

				<form class="tracking-wrap" action="index.php" method="POST">
					<input type="text" class="input-tracking" placeholder="Type your tracking number" name="tid">
					<button class="default-btn active" type="submit" value="submit" name="submit">Track Now</button>
				</form>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="assets/img/slider/banner-.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


		</div>



		<!-- Start What We Offer Area -->
		<section class="what-offer-area-two mt-minus-70 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-server"></i>
							<h3>Warehousing</h3>
							<p>We have top class warehousing facilities. Our warehouses are spacious, well guarded,.. </p>
							<a class="circle-read-more" href="service-details.php">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-air-freight"></i>
							<h3>Air Freight</h3>
							<p>Odessa Logistics group is an airfreight forwarding specialists offering a comprehensive ...</p>
							<a class="circle-read-more" href="service-details.php">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-plastic-bottle"></i>
							<h3>Ocean Freight</h3>
							<p>Odessa Logistics group flexible and scalable sea freight solutions cover your ...</p>
							<a class="circle-read-more" href="service-details.php">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-offer">
							<i class="icon flaticon-street"></i>
							<h3>Road  Freight</h3>
							<p>Odessa Logistics groupTransport offers an efficient integrated transport system with multiple types ..</p>
							<a class="circle-read-more" href="service-details.php">
								<i class="flaticon-right-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End What We Offer Area -->

		<!-- Start About Area -->
		<section class="about-area about-area-two pb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-content">
							<span>Know About Us </span>
							<h2>Reliable and express logistics and transport solutions That does not waste your time!</h2>
							<p>Odessa Logistics Group offers a host of logistic management services and supply chain solutions.
							We provide innovative solutions with the best people, processes, and technology. With over
							60 years of providing world class service to their customers on the asset side, a need to
							provide a one stop shop for a” true customer service logistic solution” was introduced. By
							adding this dimension to an already dynamic and customer centric asset based provider, we
							feel we bring a total solution.
</p>
							<a class="default-btn" href="about.html">
								About Us
							</a>
						</div>
					</div>
					<div class="col-lg-6 pr-0">
						<div class="about-img">
							<div class="about-list">
								<h3>Our Prime priorities:</h3>
								<ul>
									<li>
										<i class="flaticon-checked"></i>
										Customer and employee solutions are time-consuming.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										We accomplish our goals more efficiently.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										Transparent Communication Collaboration properly do.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										It provides a road map to increased productivity.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										Providing independent advice for you.
									</li>
									<li>
										<i class="flaticon-checked"></i>
										24/7 support system available
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->


		<!-- Start Testimonials Area -->
		<section class="testimonials-area fun-blue-bg ptb-100">
			<div class="container">
				<div class="section-title">
					<span>Testimonial</span>
					<h2>What makes us different?</h2>
				</div>
				<div class="row">
					<div class="testimonials-top-wrap owl-carousel owl-theme">
						<div class="testimonials-wrap">
							<img src="assets/img/testimonials/1.jpg" alt="Image">
							<div class="testimonials-content">
								<p> Odessa Logistics Group is the fastest and reliable shipping company.</p>
								<h3>Juhon Dew</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="testimonials-wrap">
							<img src="assets/img/testimonials/2.jpg" alt="Image">
							<div class="testimonials-content">
								<p>My package came right on time... Thanks to Odessa Logistics Group!</p>
								<h3>Moris Noman</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
								</ul>
							</div>
						</div>
						<div class="testimonials-wrap">
							<img src="assets/img/testimonials/3.jpg" alt="Image">
							<div class="testimonials-content">
								<p>There are many variations of shipping agency...  Odessa Logistics Group is the best i have ever worked with</p>
								<h3>Gabriela</h3>
								<ul>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
									<li>
										<i class='bx bxs-star-half'></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

		<!-- Start Blog Area --
		<section class="blog-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>News & Blog</span>
					<h2>Get every single update here.</h2>
					<p>Check Our Our Recent Updates</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="assets/img/blog/1.png" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="#"><img src="assets/img/blog/4.jpg" alt="Image"></a>
										<a href="#">By: Jon Smith</a>
									</li>
									<li>jan 30, 2020</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Exporters Achieve Cost Savings Throughout the sale
									</a>
								</h3>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
							<span>Delivery</span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="assets/img/blog/2.png" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="#"><img src="assets/img/blog/5.jpg" alt="Image"></a>
										<a href="#">By: Amith klev</a>
									</li>
									<li>Feb 5, 2020</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Deliveright Logistics Expands Service to West
									</a>
								</h3>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
							<span>Engineering</span>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-blog">
							<a href="news-details.html">
								<img src="assets/img/blog/3.png" alt="Image">
							</a>
							<div class="blog-content">
								<ul>
									<li>
										<a href="#"><img src="assets/img/blog/6.jpg" alt="Image"></a>
										<a href="#">By: joney jai</a>
									</li>
									<li>Feb 10, 2020</li>
								</ul>
								<h3>
									<a href="news-details.html">
										Software May Be Best Bet to Conquer Final Mile
									</a>
								</h3>
								<a class="read-more" href="news-details.html">
									Read More
									<i class='bx bx-right-arrow-alt'></i>
								</a>
							</div>
							<span>Transport</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!- End Blog Area -->


	<!-- footer -->
		<?php include('templates/footer.php'); ?>

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up bx-fade-up'></i>
			<i class='bx bx-chevrons-up bx-fade-up'></i>
		</div>
		<!-- End Go Top Area -->


        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Owl Magnific JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS -->
        <script src="assets/js/jquery.appear.js"></script>
		<!-- Odometer JS -->
		<script src="assets/js/odometer.min.js"></script>
		<!-- Parallax JS -->
        <script src="assets/js/parallax.min.js"></script>
		<!-- Form Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Map JS FILE -->
        <script src="assets/js/map.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/prevoz/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 20:49:20 GMT -->
</html>
