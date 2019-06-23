<?php

namespace App\Http\Controllers;

use App\Upcoming;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upcom=Upcoming::all();
        $upcome=Upcoming::all();
        
       
 return view('student.course',compact('upcom'));
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
    
    $c_name =$request->get('cname');
    $description =$request->get('description');
    $course= new Upcoming([
       
        'cname'=>$c_name,
        
        'image'=>$img,
        'description'=>$description,
    ]);
    $course->save();
    return redirect('/upcoming');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function show(Upcoming $upcoming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function edit(Upcoming $upcoming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upcoming $upcoming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upcoming  $upcoming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upcoming $upcoming)
    {
        //
    }
}
