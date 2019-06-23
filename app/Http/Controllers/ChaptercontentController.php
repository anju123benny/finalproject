<?php

namespace App\Http\Controllers;

use App\Chaptercontent;
use App\Chapter;
use App\AddCourse;
use DB;
use App\Level;
use Illuminate\Http\Request;

class ChaptercontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $unm=session()->get('email');
        $d=DB::select("select id from chapters where email='$unm'");
        
        foreach($d as $v)
        {
             $tr=$v->id;
        }
      
        $contents=$request->get('contents');
       

        $chapter= new Chaptercontent([
            'id'=>$tr,
            
            'contents'=>$contents,
            
        ]);
        $chapter->save();
        return redirect('/student.chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chaptercontent  $chaptercontent
     * @return \Illuminate\Http\Response
     */
    public function show(Chaptercontent $chaptercontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chaptercontent  $chaptercontent
     * @return \Illuminate\Http\Response
     */
    public function edit(Chaptercontent $chaptercontent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chaptercontent  $chaptercontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chaptercontent $chaptercontent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chaptercontent  $chaptercontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chaptercontent $chaptercontent)
    {
        //
    }
    public function subchapter(Request $request)
    { 
       
      
$id=$request->id;
//return $id;
$cour=DB::select('SELECT contents FROM `chaptercontents` WHERE cid= '.$id.' ');
//return $cour;

return view('student.chapters',['cour'=>$cour],);
    } 
    public function sub(Request $request)
    { 
       
      
$id=$request->id;
//return $id;
$cour=DB::select('SELECT contents FROM `chaptercontents` WHERE cid= '.$id.' ');
//return $cour;

return view('tutor.chapter',['cour'=>$cour],);
    } 
}

