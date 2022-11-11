<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Steering_img;
use App\Models\Steering_committee;

class SteeringCommitteeImageUploadController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:steering-img-upload-show', ['only' => ['index','store']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index  store
    public function index()
    {

        $tableuploadform =DB::table('steering_committees')->where('id','1000')->value('id');

        return view('admin.admin_steering_committe_img_form',compact('tableuploadform'));
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
        // dd($request);
        $request->validate([
            'steering_img_name'=>'required',
        ]);

        $request->input('steering_committees_id');
        $steering_committees_id = $request->input('steering_committees_id');


        // $steering_img = New Steering_img();
         if($request->hasfile('steering_img_name')){
        
            $file=$request->file('steering_img_name');
            $filename=$file->getClientOriginalName();

            $image = getimagesize($request->steering_img_name);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="740" && $height =='540'){
                $file->move(public_path('img/img_steering'),$filename);
                // unlink(public_path('img/img_steering'));


                $insert=Steering_img::create([
                    'steering_committees_id'=>'1000',
                    'img_name'=>$filename,
                ]);
                return redirect()->back()->with('success','Image successfully uploaded');
            }else{
                return redirect()->back()->with('message','The format doesnt matched');
            }
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
