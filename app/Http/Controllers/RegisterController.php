<?php

namespace App\Http\Controllers;
use App\Login;
use App\Register;
use Illuminate\Http\Request;
use DB;
use Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Register::select('fname','lname','phone','gender','dob','email','photo')->where('type',2)->get();
       
        return view ('admin.rusers',compact('student'));
       
    }
    public function view()
    {
       // $tutor=Register::select('fname','lname','phone','gender','dob','email','photo')->where('type',1)->get();
       $tutor=DB::table('registers')
       ->join('logins','registers.email','=','logins.email')
       ->select('registers.*','logins.*')
       ->where('logins.status','=',0)
       ->get();
        return view ('admin.rtutors',compact('tutor'));
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
        $images=$request->file('photo');
        $img=time().'_'.$images->getClientOriginalName();
        $imgs=$images->move(public_path().'/upload/',$img);

        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $phone = $request->get('phone');
        $type = $request->get('type');
        $gender = $request->get('gender');
        $dob = $request->get('dob');
       $email = $request->get('email');
       //$photo = $request->get('photo');
        $password = Hash::make($request->get('password'));
        $cpassword = $request->get('cpassword');
        //return $fname;
        //$reg_id=$request->input('reg_id');
       
    //   $data=array('fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'email'=>$email,'type'=>$type1);
    //   DB::table('registers')->insert($data);
    //   return "success";
        //$u_type=$request->get('u_type');
        $check=DB::table('logins')->where(['email'=>$email])->get();
        if(count($check)>0)
        {
            return redirect()->back()->with('alert', 'already existed  email');
        }
        else
        {
        if($type=='tutor')
        {
           
            $type1=1;
      $data=array('fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'gender'=>$gender,'dob'=>$dob,'email'=>$email,'photo'=>$img,'type'=>$type1);
    DB::table('registers')->insert($data);
    
        }
       else
        {
            
            $type1=2;
            $data=array('fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'gender'=>$gender,'dob'=>$dob,'email'=>$email,'photo'=>$img,'type'=>$type1);
    DB::table('registers')->insert($data);
        }
       
        
        //$unm=$request->input('email');
        //$check=DB::table('logins')->where(['login_email'=>$unm])->get();
        //if(count($check)==0)
        //{
            //$users=new Registers(['fname'=>$request->get('fname')]);
            //$users->save();
            //$insertedId = $users->reg_id;
            //$utype = $request->input('usertype');
            //$unm=$request->input('email');
            //$password=$request->input('password');
            //$usertype=$request->input('utype));
            //$cpwd=$request->input('cpassword'); 
            //$insertedId=registers::max('regid');
            //dd($insertedId);
            if($type=='tutor')
            {
                $type1=1;
                
                $data2=array('email'=>$email,'password'=>$password,'type'=>$type1);
                DB::table('logins')->insert($data2);
            }
           else 
            {
                $type1=2;
               
                $data2=array('email'=>$email,'password'=>$password,'type'=>$type1);
                DB::table('logins')->insert($data2);
            }
           
           
       
    }
        return redirect('/home.home');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
  
    public function viewprofile()
    {
       if(session()->has('email'))
       {
         $x=session()->get('email');
       }
        //return $x;
         $result=Register::where('email','=',$x)->get();
       return view('student.profile',compact('result'));
    
    }
    public function viewprofiles()
    {
       if(session()->has('email'))
       {
         $x=session()->get('email');
       }
        //return $x;
         $result=Register::where('email','=',$x)->get();
       return view('student.comprofile',compact('result'));
    
    }
    public function tutorprofile()
    {
       if(session()->has('email'))
       {
         $x=session()->get('email');
       }
        //return $x;
         $result=Register::where('email','=',$x)->get();
       return view('tutor.profile',compact('result'));
    
    }
    Public function blockuser($id)
    {
        $stat=Login::find($id);
        $stat->status=1;
        $stat->save();
        return redirect('/admin.rtutors');
    }
    Public function adminedit($id)
    {
        $value=Register::find($id);

        return view('/student.profileedit',compact('value'));
    } 
    Public function adminupdate(Request $request,$id)
    {
        $up=Register::find($id);
        $up-> $fname = $request->get('fname');
        $up-> $lname = $request->get('lname');
        $up-> $phone = $request->get('phone');
        
        $up-> $gender = $request->get('gender');
        $up-> $dob = $request->get('dob');
        $up->$email = $request->get('email');
        return view('/student.profile');
    } 
}
