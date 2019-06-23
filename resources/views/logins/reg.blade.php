<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>

<head>
	<title>Student Registration Form Flat Responsive widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Registration Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="register///fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="register/css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="register/css/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
</head>

<body>
<div class="content-agileits">
		<h1 class="title">Registration Form</h1>
		<div class="left">
			<form action="/treg" method="post" data-toggle="validator">
            @csrf
			
				<div class="form-group">
					<label for="specilization" class="control-label">Specialization:</label>
					<input type="text" class="form-control" id="specialization" name="specialization" placeholder="specialization" data-error="Enter Your speacialization" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="mark" class="control-label">Mark:</label>
					<input type="text" class="form-control" id="mark" placeholder="Mark" name="mark" data-error="Enter Your mark" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="institute" class="control-label">Institute:</label>
					<input type="text" class="form-control" id="institute" placeholder="Institute" name="institute" data-error="Enter Your institute" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="experience" class="control-label">Experience:</label>
					<input type="text" class="form-control" id="experience" name="experience" placeholder="Experience" data-error="Enter Your experience" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="mark1" class="control-label">NET/SET mark:</label>
					<input type="text" class="form-control" id="mark1" name="mark1" placeholder="mark" data-error="Enter Your mark" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="course" class="control-label">Your instresting course/subject</label>
					<input type="text" class="form-control" id="course" name="intrest" placeholder="course" data-error="Enter Your intrest" required>
					<div class="help-block with-errors"></div>
				</div>
			
				<div class="form-group">
					<button type="submit" class="btn btn-lg">submit</button>
				</div>
			</form>
		</div>
		<div class="right"></div>
		<div class="clear"></div>
	</div>
	<p class="copyright-w3ls">© 2017 Student Registration Form. All Rights Reserved | Design by
		<a href="register/https://w3layouts.com/" target="_blank">W3layouts</a>
	</p>
	<!-- js -->
	<script src="register/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<script src="register/js/bootstrap.min.js"></script>
	<script src="register/js/validator.min.js"></script>
	<!-- /js files -->
</body>

</html>