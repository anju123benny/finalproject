<?php

namespace App\Http\Controllers;
use App\Register;
use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Register::select('fname','lname','phone','gender','dob','email','photo')->where('type',2)->get();
       
        return view ('student.profile',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $phone = $request->get('phone');
        $type = $request->get('type');
        $gender = $request->get('gender');
        $dob = $request->get('dob');
       $email = $request->get('email');
       $photo = $request->get('photo');
        $password = $request->get('password');
        $cpassword = $request->get('cpassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function profile()
    {
        $email=session()->get('email');
        $data=Register::where('email',$email)->get();
    }
}
