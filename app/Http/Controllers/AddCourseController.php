<?php

namespace App\Http\Controllers;

use App\AddCourse;
use App\Chapter;
use App\Level;
use App\Upload;
use Illuminate\Http\Request;
use DB;
class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     $cours=AddCourse::all();
        $courses=AddCourse::all();
       
 return view('student.course',compact('cours'));

    }
    public function index1()
    {
       
       $cour=AddCourse::all();
        $courses=AddCourse::all();
       
 return view('tutor.view',compact('cour'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $images=$request->file('image');
        $img=time().'_'.$images->getClientOriginalName();
        $imgs=$images->move(public_path().'/upload/',$img);
    
    $c_name =$request->get('cname');
  
    $course= new AddCourse([
       
        'cname'=>$c_name,
        
        'image'=>$img,
    ]);
    $course->save();
    return redirect('/savecourse');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddCourse  $addCourse
     * @return \Illuminate\Http\Response
     */
    public function show(AddCourse $addCourse)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddCourse  $addCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(AddCourse $addCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddCourse  $addCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddCourse $addCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddCourse  $addCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddCourse $addCourse)
    {
        //
    }
   
  
    

    public function level(Request $request)
    { 
       
      
$id=$request->id;
//return $id;
$levels = DB::select('select add_courses.cname,add_courses.image,levels.name from add_courses,levels where add_courses.id=levels.course_id and add_courses.id= '.$id.'  ');
//return $cour;

return view('student.sub',['levels'=>$levels],);
    } 


    public function entroll(Request $request)
    { 
       
$id=$_GET['id'];

$cours = DB::select("select levels.name,chapters.id,chapters.chaptername from levels,chapters where levels.id=chapters.l_id and levels.id= $id");

return view('student.entroll',['cours'=>$cours]);
    }
}
