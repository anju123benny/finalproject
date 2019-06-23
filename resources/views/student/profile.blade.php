<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@if(session()->has('email'))
<!DOCTYPE html>
<html>
<head>
<title>Profile </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Profile Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='profile///fonts.googleapis.com/css?family=Poppins:400,600,500,700' rel='stylesheet' type='text/css'>
<link href="profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="profile/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!-- Using Jquery -->
    <script>
    jQuery(document).ready(function($) {
        $('#sidebar-btn').click(function() {
            $('#sidebar').toggleClass('visible');
        });
    });
    </script>
<!--circlechart-->
<script src="profile/js/jquery.circlechart.js"></script>
<!--circlechart-->
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="student/img/favicon.png" type="image/png">
        <title>Improve</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="student/css/bootstrap.css">
        <link rel="stylesheet" href="student/vendors/linericon/style.css">
        <link rel="stylesheet" href="student/css/font-awesome.min.css">
        <link rel="stylesheet" href="student/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="student/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="student/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="student/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="student/vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="student/css/style.css">
        <link rel="stylesheet" href="student/css/responsive.css">
</head>
<body>
<header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
					
						
							
						</ul>
					</div>
					<div class="float-right">
						<a class="dn_btn" href="tel:+4400123654896">+91 9745521835</a>
						<a class="dn_btn" href="mailto:support@colorlib.com"> {{session()->get('email')}}</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><h2>Improve</h2></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/students">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="/student.profile">Profile</a></li> 
								<li class="nav-item"><a class="nav-link" href="/student.view">Course</a></li> 
								<li class="nav-item"><a class="nav-link" href="home.home">Logout</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
<div class="content">
	<h1>MY PROFILE </h1>
    @method('PATCH')
 @foreach($result as  $value)
		<div class="main">
		<div class="header">
		<div class="hd-img">
        @if(!empty($value->photo))
                                 <img src="/upload/{{$value->photo}}"  class="img-responsive" />
                                 @endif 
			</div>
			
			<h2>Name:{{$value->fname}} {{$value->lname}}</h2>
			
			
				

		</div>
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>General Info </h3>
							</div>
							<div class="jan-bottom">
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Email Address</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->email}}</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Gender</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->gender}}</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Date of Birth</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->dob}}</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Phone</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->phone}}</p>
									</div>
									
									<div class="clear"></div>
								
								</div>
							</div>
							
						</div>
					</li>
					
					<li>
						<div class="header-bottom_3">
							<div class="jan">
								<h3>General Info</h3>
							</div>
							<div class="jan-bottom">
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
                                    <p>Email Address</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->email}}</p>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Gender</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->gender}}</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Date of Birth</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->dob}}</p>
									</div>
									<div class="clear"></div>
								</div>
								<div class="jan-bottom-grid">
									
									<div class="jan-bottom-grid-left1">
										<p>Phone</p>
									</div>
									<div class="jan-bottom-grid-right">
										<p>{{$value->phone}}</p>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</li>
				</ul>
               
			</div>
			<center>  <button type="button" class="btn btn-success"><a href="{{route('adminedit',$value->id)}}">Edit</button></center>
			@endforeach
		</section>
						<!--FlexSlider-->
								<link rel="stylesheet" href="profile/css/flexslider.css" type="text/css" media="screen" />
								<script defer src="profile/js/jquery.flexslider.js"></script>
								<script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!--End-slider-script-->
	</div>

</div>

</body>
</html>
@endif