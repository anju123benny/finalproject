<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\AddCourse;
use DB;
use App\Level;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('add_courses')->get();
        return view('admin.chapter', compact('data'));
    }
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
        $it = Chapter::where("id",$id)->get()->toJson();
        return $it;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unm=session()->get('email');
        $d=DB::select("select id from logins where email='$unm'");
        
        foreach($d as $v)
        {
             $tr=$v->id;
        }
        $c_id=$request->get('course');
        $l_id=$request->get('level');
        $c_name =$request->get('chaptername');

        $chapter= new Chapter([
            'c_id'=>$c_id,
            'l_id'=>$l_id,
            'id'=>$tr,
            'chaptername'=>$c_name
        ]);
        $chapter->save();
        return redirect('/savechapter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
    
}
