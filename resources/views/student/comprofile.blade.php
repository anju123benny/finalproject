<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Concise Profile Widget Responsive Widget Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content=" Concise Profile Widget Responsive, Signup form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="profiles/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="profiles/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="profiles///fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
</head>
<body>
<h1>MY PROFILE</h1>
@method('PATCH')
 @foreach($result as  $value)
<div class="profile">
	<div class="wrap">
		<div class="profile-main">
			<div class="profile-pic wthree">
            @if(!empty($value->photo))
                                 <img src="/upload/{{$value->photo}}"  class="img-responsive" />
                                 @endif 
                                 <h2>Name:{{$value->fname}} {{$value->lname}}</h2>
				@endforeach
			</div>
			<div class="main-grid3">
				<div class="w3_bar">
					<div class="bar">
						<p>Email Address</p>
					</div>
				<div class="skills">
					 <div class="skill1" style="width:100%" ><label>{{$value->email}}</label></div>							
				</div>
				</div>
				<div class="w3_bar">
					<div class="bar">
						<p>CSS</p>
					</div>
				<div class="skills">
					 <div class="skill2" style="width:90%"><span>90%</span></div>							
				</div>
				</div>
				<div class="w3_bar">
					<div class="bar">
						<p>JAVASCRIPT</p>
					</div>
				<div class="skills">
					 <div class="skill3" style="width:75%"><span>75%</span></div>							
				</div>
				</div>
			</div>
			<div class="profile-ser">
				<div class="profile-ser-grids">
					<img src="profiles/images/p1.png" alt="">
					<h4>1086</h4>
				</div>
				<div class="profile-ser-grids agileinfo">
					<img src="profiles/images/p2.png" alt="">
					<h4>1582</h4>
				</div>
				<div class="profile-ser-grids no-border">
					<img src="profiles/images/p3.png" alt="">
					<h4>1468</h4>
				</div>
				<div class="clear"> </div>
			</div>
			
			<div class="profile-follows">
				
<div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fa fa-facebook"></i></a></li> 
<li> <a href="#"><i class="fa fa-linkedin"></i></a></li> 
<li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
<li> <a href="#"><i class="fa fa-twitter"></i></a></li>
</ul>
</div>
				<div class="follow-btn">
					<a href="#">Follow</a>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>