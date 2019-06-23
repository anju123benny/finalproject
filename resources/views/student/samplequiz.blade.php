
<html>
<title>
<script src="{{asset('js/quiz.js')}}"></script>

<script>
// 10 minutes from now
var time_in_minutes = 10;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);

function time_remaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
var timeinterval;
function run_clock(id,endtime){
  function update_clock(){
        var t = time_remaining(endtime);
        $('#clockdiv').html(t.minutes+' : '+t.seconds);
    if(t.total<=0){ 
       clearInterval(timeinterval); 
       Timersubmit();
      }
  }
  update_clock(); // run function once at first to avoid delay
  timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
</script>
<style>
body {
  margin:0;
}
.quiz {
  padding:0 30px 20px 30px;
  max-width:960px;
  margin:0 auto;
  
  ul {
    list-style:none;
    padding:0;
    margin:0;
  }
}
.quiz-question {
  font-weight:bold;
  display:block;
  padding:30px 0 10px 0;
  margin:0;
}
.quiz-answer {
  margin:0;
  padding:10px;
  background:#f7f7f7;
  margin-bottom:5px;
  cursor: pointer;
  
  &:hover {
    background:#eee;
  }
  
  &:before {
    content:"";
    display:inline-block;
    width:15px;
    height:15px;
    border:1px solid #ccc;
    background:#fff;
    vertical-align:middle;
    margin-right:10px;
  }
  
  &.active {
    &:before {
      background-color:#333;
      border-color:#333;
    }
  }
  &.correct {
    &:before {
      background-color:green;
      border-color:green;
    }
  }
  &.incorrect {
    &:before {
      background-color:red;
      border-color:red;
    }
  }
  &.active.correct {
    &:before {
      outline: 2px solid green;
      outline-offset: 2px;
    }
  }
}
</style>
</title>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
       
        <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Sample Quiz</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            
                                            <li class="active"><div id=""></div>Sample Quiz</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dashboard-list"> 
                                
                                    <h3 class="heading">Sample Quiz</h3>
                                    <div id="timer"  style="float: right;padding-right:10px;padding-top:10px;">
                                    <div style="padding:10px;background-color:#d6d8da;font-size: 30px;">
                                    <div id="clockdiv"></div>
                                    </div>
                                    </div>
                                    <div class="dashboard-message contact-2">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                     
                                                <div class="quiz">
                                               
                                                <input type="hidden" value="{{$id}}" id="id">
                                              
                                          
                                              <style>
                                                #block_container
                                                {
                                                    text-align:center;
                                                }
                                                #qno, #question,#rad1,#A,#rad2,#B,#rad3,#C,#rad4,#D,#back,#next
                                                {
                                                    display:inline;
                                                }
                                                #qStyle
                                                {
                                                font-size: 150%;
                                                }
                                                #myModal 
                                                {
                                                  width: 550px;
                                                  height: 320px;
                                                  position: absolute;
                                                  left: 20%;
                                                  top: 20%; 
                                                 
                                                  }
                                                </style>
                                                <div id="demo_quiz"> 
                                                <input type="hidden" id="qid">
                                            <table class="table table-hover">
                                                <tr><td><div id="qStyle">Q<div id="qno"></div> . <div id="question"></div> </div></td></tr>
                                                  
                                                
                                                <tr><td><input type="radio" id="rad1" name="quiz"> <label for="rad1"> A. </label><label for="rad1" id="A"></label></td></tr>
                                                <tr><td><input type="radio" id="rad2" name="quiz"> <label for="rad2"> B. </label><label for="rad2" id="B"></label></td></tr>
                                                <tr><td><input type="radio" id="rad3" name="quiz"> <label for="rad3"> C. </label><label for="rad3" id="C"></label></td></tr>
                                                <tr><td><input type="radio" id="rad4" name="quiz"> <label for="rad4"> D. </label><label for="rad4" id="D"></label></td></tr>
                                                
                                            </table>
                                                
                                            <div class="quiz-result"></div>
                                              <div class="col-lg-12">
                                                <!-- <div id="back" class="send-btn">
                                                        <button type="button" onclick=backQuestion() class="btn btn-md button-theme"><i class="lnr lnr-arrow-left"></i> Back</button>
                                                </div> -->
                                                <div id="next" class="send-btn">
                                                        <button type="button" onclick=submitQuestion() class="btn btn-md button-theme">Next<i class="lnr lnr-arrow-right"></i></button>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                            
                                              <!-- Modal -->
                                                <div class="modal fade" id="myModal" role="dialog">
                                                  <div class="modal-dialog">
                                                  
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                      
                                                      <div class="modal-body" style="padding:40px 50px;">
                                                      <div id="qStyle" style="color:red;">* Please Select Answer</div>
                                                        
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                      
                                                      </div>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                        </form>
                                    </div>
                                    <div>
                                            <table class="table table-hover" id="Quiz_score">

                                            </table>
                                                </div>
                                            <div>
                                              <table class="table table-hover" id="Quiz_result">
                                                </table>
                                            </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


        </div>
    </div>
</div>
</body>
</html>