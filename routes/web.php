<?php
use App\levels;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});
Route::get('/index',function()
{
    return view('admin.index');
});
Route::get('/tutorhome',function()
{
    return view('tutor.tutor');
});
Route::get('/students',function()
{
    return view('student.student');
});
Route::get('/student.profile',function()
{
    return view('student.profile');
});
Route::get('/home.contact',function()
{
    return view('home.contact');
});
Route::get('/student.single-courses',function()
{
    return view('student.single-courses');
});

Route::get('/student.sub',function()
{
    return view('student.sub');
});
Route::get('/checkouts',function()
{
    return view('student.checkout');
});
Route::get('/tutor.profile',function()
{
    return view('tutor.profile');
});
Route::get('/student.course',function()
{
    return view('student.course');
});
Route::get('/student.chapters',function()
{
    return view('student.chapters');
});
Route::any('/student.chapters','ChaptercontentController@subchapter'); 
Route::get('/admin.chapter',function()
{
    return view('admin.chapter');
});
Route::any('/admin.chapter','ChaptercontentController@sub'); 
Route::get('/events',function()
{
    return view('admin.upcomingevents');
});
Route::any('/upcoming','UpcomingController@store');

Route::get('/reglogin',function()
{
    return view('logins.reg');
});
Route::any('/admin.regtutors','ProfilecomController@show'); 
Route::any('/treg','ProfilecomController@store'); 
//Route::get('/register','PathController@register'); //redirect to register page
//Route::get('/log_in','PathController@log_in'); 
Route::any('/logins_register','RegisterController@store'); 
Route::any('/logins_login','LoginController@UserLogin'); 
Route::any('home.home','PageController@home');
Route::any('/nregister','PageController@register');  
Route::any('/nlogin','PageController@login'); 
//Route::any('/rregister','PageController@rregister');

//Route::any('/rregister','LoginController@index'); 
Route::any('/admin.rusers','RegisterController@Index'); 
Route::any('/admin.rtutors','RegisterController@view'); 
Route::any('/admin.addcourse','AddCourseController@store');
//Route::any('/admin.levels','LevelController@store');
Route::any('/student.profile','RegisterController@viewprofile');
Route::any('/tutor.profile','RegisterController@tutorprofile');
//Route::any('/admin.rtutors','RegisterController@delete');

    //Route::resource('/filess','UploadController');
//Route::any('student.profile','ProfileController@index');
Route::get('/student.join',function(){
    return view('student.join');
    });
Route::resource('/savecourse','AddCourseController');

  Route::get('/savecourse',function(){
  return view('admin.addcourse');
  });
 
  Route::get('/student.entroll',function(){
    return view('student.entroll');
    });
  Route::get('/tutor.profilecom',function(){
    return view('tutor.profilecom');
    });
    Route::get('/admin.feedback',function(){
        return view('/admin.feedback');
        });
        Route::any('/admin.feedback','FeedbackController@index1');
    Route::get('/student.payment',function(){
        return view('/student.payment');
        });
        Route::any('/feedbacks','FeedbackController@store');
    Route::get('/quiz',function(){
        return view('admin.quiz');
        });
    Route::get('/tutor.view',function(){
        return view('tutor.view');
        });
        Route::get('/tutor.single',function(){
            return view('tutor.single');
            });
            // Route::get('/quiz',function(){
            //     return view('student.samplequiz');
            //     });
                
    Route::resource('/profilecom','ProfilecomController');
   // Route::any('/tutor.profilecom','ProfilecomController@store');
   Route::resource('/savelevels','LevelController');
   Route::any('/student.comprofile','RegisterController@viewprofiles');
  // Route::resource('/savechapter','ChapterController');
   //Route::get('/savelevels',function(){
     //return view('admin.levels'); 
   //});
//   Route::any('/savelevels','LevelController@index');
  
//   });
//Route::resource('/admin.viewcourse','DetailController');
//Route::get('/admin.viewcourse',function(){
    //return view('admin.viewcourse');
    //});
    
Route::any('/admin.viewcourse','DetailController@show');
//Route::any('/admin.detail','DetailController@store');

//Route::resource('/detailss','DetailController');
//Route::get('/ajax/{id}',function($id){
//return level::where("id",$id)->get();
//});
//Route::resource('/detailss','DetailController');
Route::any('/quizzes','QuizController@index');
Route::any('/ajax/{id}','QuizController@ajax');
Route::any('/quiz','QuizController@store');
Route::any('/adminedit{id}','RegisterController@adminedit')->name('adminedit');
Route::any('/adminupdate{id}','RegisterController@adminupdate')->name('adminupdate');
Route::any('/block{id}','RegisterController@blockuser')->name('block');
Route::any('/detailss','DetailController@index');
Route::post('/detailss','DetailController@store');
Route::any('/ajax/{id}','DetailController@ajax');
Route::get('/student.course','AddCourseController@index');
Route::get('/student.category','LevelController@view');
Route::get('/tutor.view','AddCourseController@index1');
Route::get('/student.single-courses','LevelController@sublevel');
Route::get('/chapter','ChaptercontentController@store');
Route::get('/chapter','ChaptercontentController@store');
Route::get('/student.entroll','AddCourseController@entroll');
Route::get('/student.sub','AddCourseController@level');
Route::get('/tutor.single','DetailController@cview');
Route::get('/tutor.category','LevelController@view1');
//Route::get('/student.singlepage','AddCourseController@show');
//Route::any('/tutor.upload','UploadController@store');
//Route::any('/newupload','UploadController@newupload');
//Route::any('/quiz','QuizController@index');
//Route::post('/quiz','QuizController@store');
//Route::resource('profile','RegisterController');
//Route::get('/savelevels','LevelController@savelevels');
//Route::get('/addcoursee','AddCourseController@addcourse');
//Route::get('/savecoursee','AddCourseController@savecourse');
Route::any('/savechapter','ChapterController@index');
Route::post('/savechapter','ChapterController@store');
Route::any('/ajax/{id}','ChapterController@ajax');
Route::resource('examinfo','ExaminfosController');
Route::resource('question' , 'QuestionController');

Route::resource('create','StudentsController');
Route::resource('answer','AnswerController');
Route::resource('result' , 'ResultController');
Route::any('/filess','UploadController@index');
Route::post('/filess','UploadController@store');
Route::any('/ajax/{id}','UploadController@ajax');


    Route::any('/videos','VideoController@store');
    Route::any('/videoss','VideoController@index');
    Route::any('/ajax/{id}','VideoController@ajax');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
