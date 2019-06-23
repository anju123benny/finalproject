@if(session()->has('email'))
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

                                <!-- .hamburger-menu -->

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
                            <h1>Courses Online</h1>
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
                        <li><a href="/students"><i class="fa fa-home"></i> Home</a></li>
                        <li>Courses</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->
       
        <div class="row" >
            <div class="col-12 col-lg-8">
                <div class="featured-courses courses-wrap" >
                    <div class="row mx-m-25" >
                    @foreach($cours as $courses) 
                        <div class="col-12 col-md-6 px-25" >
                            <div class="course-content"  >
                                <figure class="course-thumbnail" >
                                @if(!empty($courses->image))
                                 <img src="/upload/{{$courses->image}}">
                                 @endif
                                </figure>

                                <!-- .course-thumbnail -->

                                <div class="course-content-wrap">
                                    <header class="entry-header">
                                    <h2 class="entry-title"><a href="/student.category?id={{$courses->id}}">{{$courses->cname}}</a></h2>

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
                       
                           
                    </div><!-- .row -->
                </div><!-- .featured-courses -->

                <div class="pagination flex flex-wrap justify-content-between align-items-center">
                    <div class="col-12 col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0">
                        <ul class="flex flex-wrap align-items-center order-2 order-lg-1 p-0 m-0">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-12 flex justify-content-start justify-content-lg-end col-lg-8 order-1 order-lg-2">
                        <div class="pagination-results flex flex-wrap align-items-center">
                            <p class="m-0">Showing 1–3 of 12 results</p>

                            <form>
                                <select>
                                    <option>Show: 06</option>
                                    <option>Show: 12</option>
                                    <option>Show: 18</option>
                                    <option>Show: 24</option>
                                </select>
                            </form>
                        </div><!-- .pagination-results -->
                    </div>
                </div><!-- .pagination -->
            </div><!-- .col -->

            <!-- .search-widget -->
<!-- .cat-links -->

                   
   
   <br>
   <br>
   <br>

       
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
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
@endif