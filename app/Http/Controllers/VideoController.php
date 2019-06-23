<?php

namespace App\Http\Controllers;

use App\Video;

use DB;
use App\AddCourse;
use App\Level;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('add_courses')->get();
        return view('tutor.video',compact('data') );
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
    public function ajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        // return $cat = Addproduct::where("cat_id",$id)->get()->toJson();
        $cat = DB::select("select * from levels where course_id = '$id'");
        return $cat;
    }

    public function itemajax($id)
    {
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
        $it = Video::where("id",$id)->get()->toJson();
        return $it;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $files=$request->file('video');
        $img=time().'_'.$files->getClientOriginalName();
        $imgs=$files->move(public_path().'/uploads/',$img);
    
        $c_id=$request->get('course');
        $l_id=$request->get('level');
    $description =$request->get('description');
    $videos= new Video([
        'c_id'=>$c_id,
            'l_id'=>$l_id,
        'video'=>$img,
        'description'=>$description,
       
    ]);
   
        $videos->save();
        return redirect('/videoss');
       
    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
