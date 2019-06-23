
$(document).ready(function(){
    var cat_id=document.getElementById('cat_id').value;
    getQuestions(cat_id,0);
  });
var ques;
function getQuestions(catid,Qno)
{
    var data = { '_token':$('meta[name="csrf-token"]').attr('content'),'catid':catid }
    $.ajax({
        method: "post",
        url: "/quiz",
        data: data,
        success: function(result)
        {
            ques=result;
            QuestionArray(result,Qno); 
        }
    });
}
var ans= [];
var uans= [];
var score=0;
var Q;
var no;
var time;
function QuestionArray(result,Qno)
{
     Q = JSON.parse(result);
            var question=Q[Qno].question;
            var opt1=Q[Qno].opt1;
            var opt2=Q[Qno].opt2;
            var opt3=Q[Qno].opt3;
            var opt4=Q[Qno].opt4;
            var answer=Q[Qno].answer;
            ans.splice(Qno, 0, answer);
            var n=parseInt(Qno)+1;
            $("#qno").html(n);
            $("#Qid").html(Q[Qno].id);
            $("#question").html(question);
            $("#A").html(opt1);
            document.getElementById("rad1").value = opt1;
            $("#B").html(opt2);
            document.getElementById("rad2").value = opt2;
            $("#C").html(opt3);
            document.getElementById("rad3").value = opt3;
            $("#D").html(opt4);
            document.getElementById("rad4").value = opt4;
}

function submitQuestion()
{
    var checkedValue = $("input[name='quiz']:checked").val();
    //alert(checkedValue);
    document.getElementById('rad1').checked = false;   
    document.getElementById('rad2').checked = false;
    document.getElementById('rad3').checked = false;
    document.getElementById('rad4').checked = false;     
    if(checkedValue)
            {
                var Qid=$( "#Qid" ).text();
                no=$( "#qno" ).text();
                time=$( "#clockdiv" ).text();
                if(time=="0:0")
                {

                }
                //alert(no);
                var n=parseInt(no);
                uans.splice(n-1, 0, checkedValue);
                if(ans[n-1]==uans[n-1])
                {
                    score=score+1;
                }
                if(no==10)
                {
                    $('#demo_quiz,#timer').css("display","none");
                    $('#Quiz_score').append("<tr><th style='text-align: center;' COLSPAN=2 BGCOLOR='#99CCFF'>Quiz Result</th></tr><tr><th>Score</th><td>"+score+"</td></tr><tr><th>Time Remaining</th><td>"+time+"</td></tr>")
                    $('#Quiz_result').append("<tr><th BGCOLOR='#ffb380'  style='text-align: center;'>Questions and Correct Answers</th></tr>");
                    for(var i=0;i<ans.length;i++)
                    {
                        if(ans[i]==uans[i])
                        {
                            var style="<i style='color:#00ff00;' class='lnr lnr-checkmark-circle'></i>";  
                        }
                        else
                        {
                            var style="<i style='color:red;' class='lnr lnr-cross-circle'></i>";
                        }
                         $('#Quiz_result').append("<tr><td><i style='color:#0000ff;' class='lnr lnr-question-circle'></i> Q "+(i+1) +" . "+ Q[i].question+"</td></tr><tr><td><i style='color:#00ff00;' class='lnr lnr-checkmark-circle'></i> Correct Answer :  "+ ans[i]+"</td></tr><tr><td>"+style +" Your Answer :  "+ uans[i]+"</td></tr>");
                    }
                }
               
                
                QuestionArray(ques,no);
            }
            else    
            {
                $("#myModal").modal();
            }
}
function backQuestion()
{
    var no=$( "#qno" ).text();
    no=parseInt(no)-2;
    backQ(ques,no);
}
function backQ(result,Qno)
{
    var Q = JSON.parse(result);
            var question=Q[Qno].question;
            var opt1=Q[Qno].opt1;   
            var opt2=Q[Qno].opt2;
            var opt3=Q[Qno].opt3;
            var opt4=Q[Qno].opt4;
            var answer=Q[Qno].answer;
            var n=parseInt(Qno)+1;
            $("#qno").html(n);
            $("#Qid").html(Q[Qno].id);
            $("#question").html(question);
            $("#A").html(opt1);
            document.getElementById("rad1").value = opt1;
            
            $("#B").html(opt2);
            document.getElementById("rad2").value = opt2;
            $("#C").html(opt3);
            document.getElementById("rad3").value = opt3;
            $("#D").html(opt4);
            document.getElementById("rad4").value = opt4;   
}
function Timersubmit()
{
    time=$( "#clockdiv" ).text();
    $('#demo_quiz,#timer').css("display","none");
    $('#Quiz_score').append("<tr><th style='text-align: center;' COLSPAN=2 BGCOLOR='#99CCFF'>Quiz Result</th></tr><tr><th>Score</th><td>"+score+"</td></tr><tr><th>Time Remaining</th><td>"+time+"</td></tr>")
    $('#Quiz_result').append("<tr><th BGCOLOR='#ffb380'  style='text-align: center;'>Questions and Correct Answers</th></tr>");
    for(var i=0;i<ans.length;i++)
    {
        if(ans[i]==uans[i])
        {
            var style="<i style='color:#00ff00;' class='lnr lnr-checkmark-circle'></i>";  
        }
        else
        {
            var style="<i style='color:red;' class='lnr lnr-cross-circle'></i>";
        }
         $('#Quiz_result').append("<tr><td><i style='color:#0000ff;' class='lnr lnr-question-circle'></i> Q "+(i+1) +" . "+ Q[i].question+"</td></tr><tr><td><i style='color:#00ff00;' class='lnr lnr-checkmark-circle'></i> Correct Answer :  "+ ans[i]+"</td></tr><tr><td>"+style +" Your Answer :  "+ uans[i]+"</td></tr>");
    }
}