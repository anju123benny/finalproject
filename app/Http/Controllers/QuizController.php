<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use DB;
class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('add_courses')->get();
       // return view('admin.addproduct',['category' => $category ],['item' => $item ]);
        return view('admin.quiz',compact('data') );  
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
        $it = Detail::where("id",$id)->get()->toJson();
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
        $c_id=$request->get('course');
        $l_id=$request->get('level');
        $question=$request->get('question');
        $rad1=$request->get('rad1');
        $rad2 = $request->get('rad2');
        $rad3 = $request->get('rad3');
        $rad4 = $request->get('rad4');
        $answer = $request->get('answer');
        $quizs= new Quiz([
            'c_id'=>$c_id,
            'l_id'=>$l_id,
            'question'=>$question,
            'rad1'=>$rad1,
            'rad2'=>$rad2,
            'rad3'=>$rad3,
            'rad4'=>$rad4,
            'answer'=>$answer,
            
        ]);
        $quizs->save();
        return view('/quiz'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function startquiz(Request $request,$id)
    {
        $id=$request->id;
        return view('student.samplequiz')->with('id',$id);
    }
    public function selectQuestions(Request $request)
    {
        $catid=$request->catid;
        $questions=AddQuestion::inRandomOrder()->where('c_id',$catid)->take(10)->get();
        echo $questions;

    }
   
}
