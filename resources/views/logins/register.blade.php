<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>    
<title> Membership Form </title>
<!-- meta_tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Library Membership form A Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta_tag_Keywords-->
<!--css_files-->
	<link rel="stylesheet" href="reg/css/jquery-ui.css"/>
	<link href="reg/css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-->
	<link rel="reg/stylesheet" href="reg/css/font-awesome.css"><!--font_wesome_icons-->
	<link href="reg///fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet"><!--online_fonts-->
	<link href="reg///fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet"><!--online_fonts-->
<!--//css_files-->
<!-- Adding oh-autoVal css style -->
<!--//css_files-->
<link rel="stylesheet" type="text/css" href="jsval/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="js/oh-autoval-script.js"></script>
<script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
</head>
<body>
<div class="w3l-head">
<h1>Registration form</h1>
</div>
<div class="w3ls-form">
<form action="/logins_register" method="post"  enctype="multipart/form-data">
@csrf
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">First name</label>
				<div class="w3l-div">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="fname" class="av-name" placeholder="first name" av-message="For name validation (space and . is allowed)" required="" autocomplete="off"/>
				</div>
			</div> 
			<div class="w3l-grid2">
			<label class="text">Last name</label>
			<div class="w3l-div">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="lname" class="av-name" placeholder="last name" av-message="For name validation (space and . is allowed)" required="" autocomplete="off"/>
			</div>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">phone</label>
				<div class="w3l-div">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="phone" class="av-phone" placeholder="phone" av-message="Phone number 7-13 digits long" required="" autocomplete="off"/>
			</div>
			</div>	
			<div class="w3l-grid2">
			<label class="text">Type</label>
			<div class="w3l-div">
			<i class="fa fa-users" aria-hidden="true"></i>
					<select class="form-control" name="type" required="">
					<option >-----Select Your Type-----</option>
						<option  value="tutor">Tutor</option>
						<option value="student">Student</option>
					
					</select>
			</div>
			</div>
			<div class="clear"></div>

			<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Gender</label>
				<div class="w3l-div">
				<i class="fa fa-user" aria-hidden="true"></i>
				<select class="form-control" name="gender" required="">
					<option >-----Select Your Gender-----</option>
						<option  value="male">Male</option>
						<option value="female">Female</option>
					</select>
			</div>
			</div>
			<div class="w3l-grid2">
				<label class="text">date of birth</label>
				<div class="w3l-div">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<input type="text" class="date" id="datepicker" pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/\d{4}" name="dob" placeholder="dob" value="MM/DD/YYYY" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="" autocomplete="off"/>
				</div>	
			</div>	
			<div class="clear"></div>
		</div>
			<div class="clear"></div>
		</div>
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Your Email</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" class="av-email" placeholder="e-mail" required="" av-message="Email format validation .+@gmail.com" autocomplete="off"/>
				</div>
			</div>
			
			<div class="w3l-grid2">
				<label class="text">Upload Your Image</label>
				<div class="w3l-div">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="file" name="photo"  placeholder="photo"  accept="image/.jpeg, image/.png"  class="av-image" required=""/>
				</div>
			</div>
			<div class="clear"></div>
			</div>
			<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Password</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="password" name="password" id="password1" class="av-password" placeholder="password" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required="" autocomplete="off"/>
				</div>
			</div>
			<div class="w3l-grid2">
				<label class="text">cpassword</label>
				<div class="w3l-div">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="password" name="cpassword" id="password2" class="av-password" placeholder="cpassword" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars." required=""/>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="clear"></div>
		<div class="w3ls-submit">
			<input type="submit" value="add a member">
		</div>
</form>
</div>


<!-- Default-JavaScript --> <script type="text/javascript" src="reg/js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="reg/js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>