@if(session()->has('email'))
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
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
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
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
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="/student.profile">Profile</a></li> 
								<li class="nav-item"><a class="nav-link" href="/student.view">Course</a></li> 
								<li class="nav-item"><a class="nav-link" href="home.home">Logout</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Course Details</h2>
						<div class="page_link">
							<a href="/student.student">Home</a>
							<a href="/student.view">Course</a>
							<a href="#">Course Details</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Course Details Area =================-->
		@foreach($levels as $courses)
        <center><h1>{{$courses->cname}}</h1></center>
		<section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-8">
        				<div class="c_details_img">
						@if(!empty($courses->image))
                                 <img src="/upload/{{$courses->image}}" style="height:300px;width:300px;">
                                 @endif
								
								
        				</div>
						
					
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="objctive_text">
									
								</div>
							</div>
							
								
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							
								<div class="objctive_text">
								
									
										

									
								</div>
								
							</div>
							@endforeach
							
						</div>
        			</div>
        			
        				<div class="c_details_list">
        					<ul class="list">
							<li><a >Course <span> {{$courses->name}}</span></a></li>
        						
        					</ul>
        					<a class="main_btn" href="/checkouts">Enroll the Course</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Course Details Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Top Products</h6>
                            <ul class="list">
                            	<li><a href="#">Managed Website</a></li>
                            	<li><a href="#">Manage Reputation</a></li>
                            	<li><a href="#">Power Tools</a></li>
                            	<li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Quick Links</h6>
                            <ul class="list">
                            	<li><a href="#">Jobs</a></li>
                            	<li><a href="#">Brand Assets</a></li>
                            	<li><a href="#">Investor Relations</a></li>
                            	<li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Features</h6>
                            <ul class="list">
                            	<li><a href="#">Jobs</a></li>
                            	<li><a href="#">Brand Assets</a></li>
                            	<li><a href="#">Investor Relations</a></li>
                            	<li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                           <h6 class="footer_title">Resources</h6>
                            <ul class="list">
                            	<li><a href="#">Guides</a></li>
                            	<li><a href="#">Research</a></li>
                            	<li><a href="#">Experts</a></li>
                            	<li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3 class="footer_title">Newsletter</h3>
        					</div>
        					<p>Stay updated with our latest trends</p>
        					<div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                	<div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Enter email address" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
                    </div>
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="student/js/jquery-3.3.1.min.js"></script>
        <script src="student/js/popper.js"></script>
        <script src="student/js/bootstrap.min.js"></script>
        <script src="student/js/stellar.js"></script>
        <script src="student/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="student/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="student/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="student/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="student/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="student/js/jquery.ajaxchimp.min.js"></script>
        <script src="student/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="student/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="student/vendors/counter-up/jquery.counterup.js"></script>
        <script src="student/js/mail-script.js"></script>
        <script src="student/js/theme.js"></script>
    </body>
</html>
@endif