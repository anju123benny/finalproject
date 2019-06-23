
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="tutor/img/favicon.png" type="image/png">
	<title>Course</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="tutor/css/bootstrap.css">
	<link rel="stylesheet" href="tutorvendors/linericon/style.css">
	<link rel="stylesheet" href="tutor/css/font-awesome.min.css">
	<link rel="stylesheet" href="tutor/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="tutor/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="tutor/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="tutor/vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="tutor/css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">+91 9745521835</span>
							</span>
						</a>
						<a href="anjuallumpurath@gmail.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">{{session()->get('email')}}</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href="home.home" class="text-uppercase">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/tutorhome"><p>Improve</p>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="/tutorhome">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/tutor.profile">Profile</a></li>
							<li class="nav-item"><a class="nav-link" href="/reglogin">Register</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Uploads</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/filess">Notes</a></li>
									<li class="nav-item"><a class="nav-link" href="/videoss">video</a></li>
									
								</ul>
							</li>	
					
						
						<li class="nav-item"><a class="nav-link" href="/tutor.view">Courses</a></li>	
						
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								We Rank the Best <br>
								Courses on the Web
							</h2>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="tutor/js/jquery-3.2.1.min.js"></script>
	<script src="tutor/js/popper.js"></script>
	<script src="tutor/js/bootstrap.min.js"></script>
	<script src="tutor/js/stellar.js"></script>
	<script src="tutor/js/countdown.js"></script>
	<script src="tutor/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="tutor/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="tutor/js/owl-carousel-thumb.min.js"></script>
	<script src="tutor/js/jquery.ajaxchimp.min.js"></script>
	<script src="tutor/vendors/counter-up/jquery.counterup.js"></script>
	<script src="tutor/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="tutor/js/gmaps.min.js"></script>
	<script src="tutor/js/theme.js"></script>
</body>

</html>