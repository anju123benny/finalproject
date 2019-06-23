<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="tutor/img/favicon.png" type="image/png">
    <title>Courses</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tutor/css/bootstrap.css">
    <link rel="stylesheet" href="tutor/vendors/linericon/style.css">
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
                        <a href="mailto:support@colorlib.com">
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
							
						<li class="nav-item"><a class="nav-link" href="/filess">Upload</a></li>
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Courses</h2>
                           
                            <div class="page_link">
                                <a href="/tutorhome">Home</a>
                                <a href="#">Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                           
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                       
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->
       
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="featured-courses courses-wrap">
                    <div class="row mx-m-25">
                    @foreach($cour as $courses) 
                        <div class="col-12 col-md-6 px-25">
                            <div class="course-content">
                                <figure class="course-thumbnail">
                                @if(!empty($courses->image))
                                 <img src="/upload/{{$courses->image}}" style="height:300px;width:300px;">
                                 @endif
                                </figure>

                                <!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                    <h2 class="entry-title"><a href="/tutor.category?id={{$courses->id}}">{{$courses->cname}}</a></h2>

                                        <div class="entry-meta flex flex-wrap align-items-center">
                                            

                                            
                                        </div><!-- .course-date -->
                                    </header><!-- .entry-header -->

                                    <footer class="entry-footer flex flex-wrap justify-content-between align-items-center">
                                        <div class="course-cost">
                                           Free 
                                        </div><!-- .course-cost -->

                                        <div class="course-ratings flex justify-content-end align-items-center">
                                          

                                            
                                        </div><!-- .course-ratings -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .course-content-wrap -->
                            </div><!-- .course-content -->
                        </div><!-- .col -->
                         @endforeach
                       
                <!-- single course -->
                <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->

     
       
       
                                <!-- .course-thumbnail -->

                            
                       
                        
               
                <!-- single course -->
                
                
               
                <!-- single course -->
               
     
    <!--================ End Popular Courses Area =================-->

    <!--================ Start footer Area  =================-->
   
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="tutor/js/jquery-3.2.1.min.js"></script>
    <script src="tutor/js/popper.js"></script>
    <script src="tutor/js/bootstrap.min.js"></script>
    <script src="tutor/js/stellar.js"></script>
    <script src="tutor/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="tutor/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="tutor/js/owl-carousel-thumb.min.js"></script>
    <script src="tutor/js/jquery.ajaxchimp.min.js"></script>
    <script src="tutor/vendors/counter-up/jquery.counterup.js"></script>
    <script src="tutor/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="tutor/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="tutor/js/gmaps.min.js"></script>
    <script src="tutor/js/theme.js"></script>
</body>

</html>