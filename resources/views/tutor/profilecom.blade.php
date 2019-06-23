
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
<title>Preface a Personal Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
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
						<h1><a href="/comprofile"><span>P</span>ROFILE</a></h1>
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
      <form action="/tutor.profile" method="post"  enctype="multipart/form-data">
@csrf
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Intrest</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        <select class="form-control" name="intrest" required="">
					<option >-----Select Your Intrest-----</option>
						<option  value="german">German</option>
						<option value="IELTS">IELTS</option>
					</select>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Exprience</a>
        </h4>
      </div>
		
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        <label class="text">Organization</label>
        <input type="text" name="organization"  placeholder="organization" required="" />
        &nbsp &nbsp &nbsp <label class="text">Job Type</label>
        <input type="text" name="jobtype"  placeholder="jobtype" required="" />
        <select class="form-control" name="experience" required="">
					<option >-----Total Years Of Experience-----</option>
						<option  value="zero">0</option>
						<option value="one">1</option>
					</select>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Qualification</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"> 
        <label class="text">Specialization</label>
        <input type="text" name="specialization"  placeholder="Specialization" required="" />
        <label class="text">Institute</label>
        <input type="text" name="institute"  placeholder="Institute" required="" />
        <br>
        <br>
        <label class="text">Mark</label>
        <input type="text" name="mark"  placeholder="mark" required="" />
        <label class="text">Passout Year</label>
        <input type="text" name="year"  placeholder="year" required="" />
        </div>
      </div>
    </div>
  </div> 
  <input type="submit" value="profile">
</div> 
				<div class="col-md-7 header-right">
				
					

				<div class="clearfix"> </div>
				
              	
		      </div>
			</div>
		</div>
       
       <center> <button type="button" class="btn btn-success">Edit</button>
        <button type="button" class="btn btn-success"><a href="/tutor.profile">Back</button></center>
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
