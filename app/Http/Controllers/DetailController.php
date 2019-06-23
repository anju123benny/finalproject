<?php

namespace App\Http\Controllers;

use App\Detail;
use DB;
use App\AddCourse;
use App\Level;
use Illuminate\Http\Request;

class DetailController extends Controller
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
        return view('admin.detail',compact('data') );   
    }
   // public function subcat($id)
    //{
       // $sub=Detail::where("id",$id)->get()->toJson();
        //return $sub;
   // }

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
        
        // return $request->all();
        $images=$request->file('image');
        $img=time().'_'.$images->getClientOriginalName();
        $imgs=$images->move(public_path().'/upload/',$img);

//$imgPath="";
//if($request->hasFile('image')&&$request->file('image')->isValid())
//{
   // $image=$request->file('image');
    //$imgPath=$image->store('images/upload');
//}
        $c_id=$request->get('course');
        $l_id=$request->get('level');
        $code = $request->get('code');
        $description = $request->get('description');
        $outline = $request->get('outline');
        $cost = $request->get('cost');
        $data1= new Detail([
            'c_id'=>$c_id,
            'l_id'=>$l_id,
            'code'=>$code,
            'description'=>$description,
            'outline'=>$outline,
            'image'=>$img,
            'cost'=>$cost,
        ]);
        $data1->save();
        return view('/admin.detail');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //$detail=Detail::all();
        //$details=Detail::all();
       // $detail=DB::table('details')
        //->join('add_courses','add_courses.id','=','details.c_id')
        //->join('levels','levels.id','=','details.l_id')
        //->select('add_courses.*','levels.*','details.*')->get();
       // $id=$request->id;
        //return $id;
        $detail = DB::select('select add_courses.cname,add_courses.image,details.code,details.description,details.cost from add_courses,details where add_courses.id=details.c_id   ');
        //return $cour;
        
       
            
return view('admin.viewcourse',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }
    public function view()
    {
        $course=AddCourse::all();
        $courses=AddCourse::all();
       
return view('student.view',compact('course'));
    }
    public function cview(Request $request)
    { 
       
       //$cours=AddCourse::all();
       // $courses=AddCourse::all();
       
//return view('student.singlepage',compact('cours'));
$id=$request->id;
//return $id;
$com = DB::select('select add_courses.cname,add_courses.image,details.description,details.outline,details.cost from add_courses,details where add_courses.id=details.c_id and add_courses.id= '.$id.'  ');
//return $cour;

return view('tutor.single',['com'=>$com],);
    }
  
}

