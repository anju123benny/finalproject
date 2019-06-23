<?php

namespace App\Http\Controllers;

use App\Level;

use Illuminate\Http\Request;
use App\AddCourse;
use DB;
class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('add_courses')->get();
        return view('admin.levels',['data'=>$data]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images=$request->file('image');
        $img=time().'_'.$images->getClientOriginalName();
        $imgs=$images->move(public_path().'/upload/',$img);

        $levels=$request->get('course');
        $l_name =$request->get('name');

        $level= new Level([
            'course_id'=>$levels,
            'name'=>$l_name,
            'image'=>$img,
        ]);
        $level->save();
        return redirect('/savelevels');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }
    public function view(Request $request)
    { 
       
       //$cours=AddCourse::all();
       // $courses=AddCourse::all();
       
//return view('student.singlepage',compact('cours'));
$id=$request->id;
//return $id;
$cours = DB::select('select add_courses.cname,add_courses.id,levels.id,levels.name,levels.image from add_courses,levels where add_courses.id=levels.course_id and add_courses.id= '.$id.'  ');

return view('student.category',['cours'=>$cours],);
    }
   
    public function sublevel(Request $request)
    { 
        $id=$request->id;
        //return $id;
      // $course=Level::all();
       // $courses=Level::all();
       $course = DB::select('select levels.name,levels.id,details.description from levels,details where levels.id=details.l_id and levels.id= '.$id.' ');    
       //return $course; 
return view('student.single-courses',compact('course'));

//$course = DB::select('select levels.name,levels.id,details.description,details.outline from levels,details where levels.id=details.l_id  ');
 return $course;
//return view('student.single-courses',['course'=>$course],);
    }
    public function view1(Request $request)
    { 
       
       //$cours=AddCourse::all();
       // $courses=AddCourse::all();
       
//return view('student.singlepage',compact('cours'));
$id=$request->id;
//return $id;
$cour = DB::select('select add_courses.cname,add_courses.id,levels.id,levels.name,levels.image from add_courses,levels where add_courses.id=levels.course_id and add_courses.id= '.$id.'  ');

return view('tutor.category',['cour'=>$cour],);
    }
}
