<?php

namespace App\Http\Controllers;

use App\Students;
use App\Examinfos;
use App\Question;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/student.create');
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
        $student= new Students;
        $sIdForValidate=$request->input('student_id');
        $examCodeForValidate=$request->input('exam_code');
        $initialScore=0;
        $checker=Students::where('student_id','=',$sIdForValidate)->where('uniqueid','=',$examCodeForValidate)->count();
        if ($checker>0) {
            return "YOU ALREADY DONE THIS EXAM";
        }else{
            $student = Students::create([
            'student_id' => $request->input('student_id'),
            'uniqueid' => $request->input('exam_code'),
            'score' =>$initialScore
            ]);
            $id=$request->input('exam_code');
            $studentRealId=$request->input('student_id');
            $student_id=Students::where('student_id',$studentRealId)->value('id');
            $findcourse= Examinfos::where('uniqueid',$id)->value('id');
            $findtime= Examinfos::where('uniqueid',$id)->value('time');
            $course= Examinfos::where('uniqueid',$id)->value('Course');
            $questions=Question::where('quiz_id',$findcourse)->get();
            return view('/student.answer')->with('questions', $questions)->with('student_id',$student_id)->with('course',$course)->with('time',$findtime);
        }
        
        //return $this->show($request->input('exam_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}
