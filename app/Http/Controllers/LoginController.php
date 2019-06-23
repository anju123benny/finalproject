<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use DB;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }

    public function Userlogin(Request $req)
    {
        $this->validate($req,[     
            'email' => 'required',
            'password' => 'required',                
         ]);


        $username=$req->input('email');
        $password=$req->input('password');
        

     
        $checkLogin=DB::table('logins')->where(['email'=>$username])->get();
            $user=DB::table('registers')->where(['email'=>$username])->get();
        foreach ($checkLogin as $object)
        {
            if(Hash::check($password, $object->password))
            {
                if($object->type == 0 && $object->status == 0)
                {
                    $req->session()->put('email',$username);
                    return view('admin.index');
                 }
                 elseif($object->type == 1 && $object->status == 0)
                 {
                    $req->session()->put('email',$username);
                    return view('tutor.tutor');
                 }
                 elseif($object->type ==2 && $object->status == 0)
                 {
                    $req->session()->put('email',$username);
                return view('student.student');
                }
              
            else{
                return redirect('home.home');  
            } 

        }
    }      

}
public function logout() {
session()->flush();
session_unset();
//Auth::logout();
return redirect('/index');
}
}


