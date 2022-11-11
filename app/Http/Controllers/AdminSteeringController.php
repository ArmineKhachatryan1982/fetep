<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Steering_img;
use App\Models\Steering_committee;
use Illuminate\Support\Facades\DB;

class AdminSteeringController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:steering-img-show', ['only' => ['index','store']]);
          $this->middleware('permission:steering-img-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:steering-img-delete', ['only' => ['delete']]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $steering=Steering_img::all();
        return view('admin.admin_steering_img_table_show',['data'=>$steering]);
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
        
        $data=Steering_img::where('id',$id)->first();
        return view('admin.admin_steering_img_form',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->old_image_name);
        if($request->hasfile('img_name')){
            $file = $request->file('img_name');
            $img_name=$file->getClientOriginalName();
            $image = getimagesize($request->img_name);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="740" && $height =='540'){
                if(public_path('img/img_steering/'.$request->old_image_name)){
                    unlink(public_path('img/img_steering/'.$request->old_image_name));
                }
               
                $file->move(public_path('img/img_steering'),$img_name);
                $update=Steering_img::where('id',$request->id)->update([
                    'img_name'=>$img_name,
                
                ]);
                return redirect()->back()->with('success','One record has been updated successfully');
            }  


        }else{
            return redirect()->back()->with('error_file','Please choose a file');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=Steering_img::where('id', $id)->delete();
        return redirect()->back()->with('success','One record was deleted successfully');
    }
}
