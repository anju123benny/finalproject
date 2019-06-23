<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="students/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="students/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="students/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="students/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="students/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="students/style.css">
</head>
<body class="courses-page">
    <div class="page-header">
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                                <i class="fa fa-envelope"></i><a href="#">{{session()->get('email')}}</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p><i class="fa fa-phone"></i>+91 9745521835 </p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->

                       <!-- .header-bar-search -->

                          <!-- .header-bar-menu -->
                        <!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="/students" rel="home">Improve</a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="/students">Home</a></li>
                                    <li><a href="/student.profile">Profile</a></li>
                                    <li><a href="/student.course">Course</a></li>
                                    <li><a href="home.home">Logout</a></li>
                                    
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->

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
                            <h1 class="entry-title"></h1>

                            <div class="ratings flex justify-content-center align-items-center">
                                
                            </div><!-- .ratings -->
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="featured-image">
             

                </div>
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
          

            <div class="col-12 col-lg-8">
                <div class="single-course-wrap">
                    <div class="course-info flex flex-wrap align-items-center">
                        <div class="course-author flex flex-wrap align-items-center mt-3">
                          

                           
                               <!-- .author-wrap -->
                        </div><!-- .course-author -->

                       <!-- .course-cats -->

                       <!-- .course-students -->

                       <!-- .buy-course -->
                    </div><!-- .course-info -->

                   

                    <div class="single-course-accordion-cont mt-3">
                        <header class="entry-header flex flex-wrap justify-content-between align-items-center">
                            <h2>Curriculum For This Course</h2>

                           
                        </header><!-- .entry-header -->

                        <div class="entry-contents">
                            <div class="accordion-wrap type-accordion">
                                <table>
                               
                               @foreach($cours as $courses)
                               
                                <tr>
                              
                                <td><a href="/student.chapters?id={{$courses->id}}">{{$courses->chaptername}}</a> </td>
                                
                                </tr>
                                 @endforeach
                                 <tr>
                                
                                 </tr>
                                </table>
                            </div>
                         
                        </div><!-- .entry-contents -->
                    </div><!-- .single-course-accordion-cont  -->
                    
                  
                    </div><!-- .col-12 -->
                    
                </div><!-- .row -->
           
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='students/js/jquery.js'></script>
    <script type='text/javascript' src='students/js/swiper.min.js'></script>
    <script type='text/javascript' src='students/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='students/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='students/js/custom.js'></script>

</body>
</html>