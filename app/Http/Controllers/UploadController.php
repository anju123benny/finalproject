<?php

namespace App\Http\Controllers;
use App\Upload;
use DB;
use App\AddCourse;

use App\Level;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('add_courses')->get();
        return view('tutor.upload',compact('data') );
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
        $it = Upload::where("id",$id)->get()->toJson();
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
        $unm=session()->get('email');
        $d=DB::select("select id from registers where email='$unm'");
        
        foreach($d as $v)
        {
             $tr=$v->id;
        }
       
        $files=$request->file('upload');
        $img=time().'_'.$files->getClientOriginalName();
        $imgs=$files->move(public_path().'/file/',$img);
    
        $c_id=$request->get('course');
        $l_id=$request->get('level');
    $description =$request->get('description');
    $uploads= new Upload([
       
        'c_id'=>$c_id,
        'l_id'=>$l_id,
        'id'=>$tr,
        'upload'=>$img,
        'description'=>$description,
       
    ]);
        $uploads->save();
        return redirect('/filess');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
  
}
