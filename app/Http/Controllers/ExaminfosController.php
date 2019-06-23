<?php

namespace App\Http\Controllers;

use App\Examinfos;
use Illuminate\Http\Request;

class ExaminfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/tutor.examinfo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tutor.examinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examinfo= new Examinfos;
        $examinfo = Examinfos::create([
                
                'Course' => $request->input('Course'),
                'question_lenth' => $request->input('question_lenth'),
                'uniqueid' => $request->input('uniqueid'),
                'time' => $request->input('time')
            ]);
        return view('/tutor.question', ['examinfos' => $examinfo]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examinfos  $examinfos
     * @return \Illuminate\Http\Response
     */
    public function show(Examinfos $examinfos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examinfos  $examinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Examinfos $examinfos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examinfos  $examinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examinfos $examinfos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examinfos  $examinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examinfos $examinfos)
    {
        //
    }
}
