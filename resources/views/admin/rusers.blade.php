<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Improve</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="admin1/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="admin1/css/lib/themify-icons.css" rel="stylesheet">
    <link href="admin1/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="admin1/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="admin1/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="admin1/css/lib/helper.css" rel="stylesheet">
    <link href="admin1/css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="admin1/images/logo.png" alt="" /> --><span>Improve</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a>
                           
                        </li>

                        <li class="label">Apps</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Add <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="/savecourse">Course</a></li>
                                <li><a href="/savelevels">Levels</a></li>
                                <li><a href="/detailss">Course Detail</a></li>
                              
                            </ul>
                        </li>
                        <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Quiz </a></li>
                       
                       
                        <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i>Views <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="/admin.rusers">Student</a></li>

                                <li><a href="/admin.rtutors">Tutors</a></li>
                                <li><a href="/admin.viewcourse">All Courses</a></li>
                                
                            </ul>
                       
                      
                        
                        <li><a href="/home.home"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                            
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                        <h4>Student List </h4>
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th>First Name</th>
                 <th>Last Name</th>
                <th>Email-Id</th>
                 <th>Contact Number</th>
                 <th>Gender</th>
                 <th>Date of Birth</th>
                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($student as $data)
            <tr>
                <td><font align="rignt">{{$data->fname}}</font></td>
                <td>{{$data->lname}}</td>
                <td>{{$data->email}}</td>
               <td>{{$data->phone}}</td>
               <td>{{$data->gender}}</td>
               <td>{{$data->dob}}</td>
               
               
            </tr>
           
            @endforeach
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>







    
    <!-- jquery vendor -->
    <script src="admin1/js/lib/jquery.min.js"></script>
    <script src="admin1/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="admin1/js/lib/menubar/sidebar.js"></script>
    <script src="admin1/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="admin1/js/lib/bootstrap.min.js"></script><script src="admin1/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="admin1/js/lib/data-table/datatables.min.js"></script>
    <script src="admin1/js/lib/data-table/buttons.dataTables.min.js"></script>
    <script src="admin1/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin1/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="admin1/js/lib/data-table/jszip.min.js"></script>
    <script src="admin1/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin1/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin1/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin1/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin1/js/lib/data-table/datatables-init.js"></script>










</body>

</html>