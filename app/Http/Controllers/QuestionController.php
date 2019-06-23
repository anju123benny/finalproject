<?php

namespace App\Http\Controllers;
use App\Question;
use App\Examinfos;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/tutor.question');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tutor.question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question= new Question;
        $question = Question::create([
                'quiz_id' => $request->input('quizid'),
                'question' => $request->input('question'),
                'choice1' => $request->input('option1'),
                'choice2' => $request->input('option2'),
                'choice3' => $request->input('option3'),
                'choice4' => $request->input('option4'),
                'answer' => $request->input('answer')
            ]);
        $id = $request->input('quizid');
        
        $qustionCount=Question::where('quiz_id','=', $id)->count();
        $selectLenth=Examinfos::where('id','=',$id)->value('question_lenth');
        //return $selectLenth;
        if ($qustionCount < $selectLenth ) {
            $examinfo = Examinfos::find($id);
            return view('/tutor.question', ['examinfos' => $examinfo]);
        }else{
            $uniqueId=Examinfos::where('id','=',$id)->value('uniqueid');
            return view('/tutor.index',['uniqueid' =>$uniqueId]);
        }
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
}
