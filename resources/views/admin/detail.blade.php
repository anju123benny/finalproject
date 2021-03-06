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
        <link href="admin1/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="admin1/css/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="admin1/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="admin1/css/lib/themify-icons.css" rel="stylesheet">
        <link href="admin1/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="admin1/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="admin1/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="admin1/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="admin1/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="admin1/css/lib/helper.css" rel="stylesheet">
        <link href="admin1/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
<script src="js/jquery.min.js"> </script>
<!-- Adding oh-autoVal script file -->
<script src="js/oh-autoval-script.js"></script>
        <style>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: 20px; align: right;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: 20px; 
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
 width:50%;
 height:100%;
}
</style>
    </head>

    <body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                        <div class="logo"><a href="/index1"><!-- <img src="admin1/images/logo.png" alt="" /> --><span>Improve</span></a></div>
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
                           
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Admin
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br>
        <br>

        <h2><center><font color="#990066">Add Course Details</font></center></h2>   		

<div class="container">
 <form action="/detailss" method="post"  enctype="multipart/form-data">
 @csrf
 <label for="code">Course</label>
   <select class="form-control" name="course" id="course_id" required="">
         <option >-----Select Your course-----</option>
         @isset($data)
         {{$data}}
         @foreach($data as $datas)
           <option  value="{{$datas->id}}">{{$datas->cname}}</option>
           @endforeach
           @endisset
         </select>
         <label for="code">Course Levels</label>
   <select class="form-control" name="level"  required="">
         <option >-----Select Your level-----</option>
         
         
           
         </select> 
   <label for="code">Course Code</label>
   <input type="text" id="code" name="code" placeholder="Course Code..">

    <label for="description">Course Description</label>
   <textarea id="description" name="description" placeholder="Write something.." style="height:100px" class="av-name" av-message="only chracters" required="" autocomplete="off" ></textarea>
 
 <label for="image">Course Image</label>
 <input type="file"  accept="image/jpeg, image/png" onChange="readURL(this);" name="image"  class="av-image"   required /> 
 <br>
 
 
 

  
   <input type="submit" value="Submit">
 </form>
</div>
<!-- <script src="/js/jquery.min.js"> </script>  -->
<!--<script src="/js/dropdown.js"> </script>-->

<script>
   

   $(document).ready(function() {
   $('select[name="course"]').on('change', function() {
       var stateID = $(this).val();
       if(stateID) {
           $.ajax({
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               url: '/ajax/'+stateID,
               type: "GET",
               dataType: "json",
               success:function(data) {
                   $('select[name="level"]').empty();
                   $.each(data, function(key, value) {
                       $('select[name="level"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                   });
               }
           });
       }else{
           $('select[name="level "]').empty();
       }
   });
});
 </script>    


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

        <script src="admin1/js/lib/bootstrap.min.js"></script><script src="admin1/js/scripts.js"></script>
        <!-- bootstrap -->

        <script src="admin1/js/lib/calendar-2/moment.latest.min.js"></script>
        <script src="admin1/js/lib/calendar-2/pignose.calendar.min.js"></script>
        <script src="admin1/js/lib/calendar-2/pignose.init.js"></script>


        <script src="admin1/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="admin1/js/lib/weather/weather-init.js"></script>
        <script src="admin1/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="admin1/js/lib/circle-progress/circle-progress-init.js"></script>
        <script src="admin1/js/lib/chartist/chartist.min.js"></script>
        <script src="admin1/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
        <script src="admin1/js/lib/sparklinechart/sparkline.init.js"></script>
        <script src="admin1/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src="admin1/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <!-- scripit init-->
    <script src="admin1/js/dashboard2.js"></script>
    </body>

</html>
