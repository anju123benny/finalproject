<?php

namespace App\Http\Controllers;
use DB;
use App\Profilecom;
use App\Login;
use Illuminate\Http\Request;

class ProfilecomController extends Controller
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
        $d=DB::select("select id from logins where email='$unm'");
        
        foreach($d as $v)
        {
             $tr=$v->id;
        }
        
        $specialization = $request->input('specialization');
        $mark = $request->input('mark');
        $institute= $request->input('institute');
         $experience = $request->input('experience');
         $mark1 = $request->input('mark1');
         $intrest = $request->input('intrest');
         $status=0;
         $checker=Login::where('id','=',$tr)->where('id','=','id')->count();
         if ($checker>0) {
             return "YOU ALREADY DONE THIS";
            }else{
                $specialization = $request->input('specialization');
                $mark = $request->input('mark');
                $institute= $request->input('institute');
                 $experience = $request->input('experience');
                 $mark1 = $request->input('mark1');
                 $intrest = $request->input('intrest');
         $profile= new Profilecom([
            'id'=>$tr,
            'specialization'=>$specialization,
            'mark'=>$mark,
            'institute'=>$institute,
            'experience'=>$experience,
            'mark1'=>$mark1,
            'intrest'=>$intrest,
            'status'=>$status,
            
        ]);
        $profile->save();
       
        return redirect('/treg'); 
  
         }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Profilecom  $profilecom
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Profilecom $profilecom)
    {
           
        $id=$request->id;
        //return $id;
        $pro = DB::select('SELECT * FROM `profilecoms` WHERE id='.$id.'  ');
       // return $pro;
return view('admin.regtutors',compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profilecom  $profilecom
     * @return \Illuminate\Http\Response
     */
    public function edit(Profilecom $profilecom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profilecom  $profilecom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profilecom $profilecom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profilecom  $profilecom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profilecom $profilecom)
    {
        //
    }
}
