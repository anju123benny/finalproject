<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@if(session()->has('email'))
<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<link href="profile1/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="profile1/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="profile1/css/style.css" rel='stylesheet' type='text/css' />
 <!-- Custom Theme files -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="keywords" content="Preface Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- webfonts -->
	<link href='profile1///fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='profile1///fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!-- webfonts -->
 <!---- start-smoth-scrolling---->
<script type="text/javascript" src="profile1/js/move-top.js"></script>
<script type="text/javascript" src="profile1/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
 <!---- start-smoth-scrolling---->
</head>
	<body>
		<!-- container -->
			<!-- header -->
			<div id="home" class="header">
				<div class="container">
				<!-- top-hedader -->
				<div class="top-header">
					<!-- /logo -->
					<!--top-nav---->
					<div class="top-nav">
					<div class="navigation">
					<div class="logo">
						<h1><a href="/tutorhome"><span>P</span>ROFILE</a></h1>
					</div>
					<div class="navigation-right">
					<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="/tutorhome">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/tutor.profile">Profile</a></li>
							
						<li class="nav-item"><a class="nav-link" href="/filess">Upload</a></li>
						<li class="nav-item"><a class="nav-link" href="/tutor.view">Courses</a></li>	
							
							
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
						</nav>
					
						
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /top-hedader -->
				</div>
			<div class="banner-info">
            @method('PATCH')
 @foreach($result as  $value)
				<div class="col-md-7 header-right">
					<h1>Hi !</h1>
					
					<ul class="address">
					
					<li>
							<ul class="address-text">
								<li><b>NAME</b></li>
								<li>{{$value->fname}} {{$value->lname}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>{{$value->dob}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li>{{$value->phone}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>GENDER </b></li>
								<li>{{$value->gender}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="mailto:example@mail.com"> {{$value->email}}</a></li>
							</ul>
						</li>
						
						
					</ul>
				</div>
				<div class="col-md-5 header-left">
                @if(!empty($value->photo))
					<img src="/upload/{{$value->photo}}"  alt="">
                    @endif
				</div>

				<div class="clearfix"> </div>
				
              	
		      </div>
			</div>
		</div>
        @endforeach	
       
     
	</div>
			<!-- about -->
			
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
<!-- //for bootstrap working -->
	<script src="profile1/js/bootstrap.js"></script>
	

	</body>
</html>
@endif
