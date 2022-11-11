<?php

namespace App\Http\Controllers;
use App\Models\Ckeditor;

use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:training-create', ['only' => ['index','upload_form','table_show','edit','update','destroy']]);
        $this->middleware('permission:training-edit',['only'=>['table_show','edit','update']]);
        $this->middleware('permission:training-delete',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index upload upload_form table_show  edit update
    public function index()
    {
        
        return view('admin.admin_ckeditor');
        // return view('admin.ckeditor');
    }




    public function upload(Request $request){
        //  dd($request);

        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('img/img_treyning'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
             $url = asset('img/img_treyning/'.$fileName); 
            //  $url = asset('images/title2-2_1628773415.png'); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
           
        }
    }
    public function upload_form(Request $request){
        //  dd($request);
        $insert=Ckeditor::create([
            'ckeditor_en'=>$request->upload,
            'ckeditor_am'=>$request->upload_am,
        ]);
        return redirect()->back()->with('success','You have successfully inserted data');
    }
    public function table_show(){
        $ckeditor=Ckeditor::orderBy('id','desc')->get();
    
        return view('admin.admin_training_ckeditor_show',compact('ckeditor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
       
    //     $ckeditor=Ckeditor::all();
    //     return view('admin.page_ckeditor',['data'=>$ckeditor]);
    // }
    // public function create_pages(){
    //     return view('pages.ckeditor_form');
    // }

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
        $training_ckeditor=Ckeditor::where('id',$id)->first();
        return  view('admin.admin_update_training',['data'=>$training_ckeditor]);
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
    //    dd($request->id);
        $update=Ckeditor::where('id',$request->id)->update([
            'ckeditor_en'=>$request->upload,
            'ckeditor_am'=>$request->ckeditor_am,
        ]);
        // dd( $update);
        if($update){
            return redirect()->back()->with('success','The record has been updated successfully');
        }else{
            return redirect()->back()->with('message','chi tarmanum');
        }
    
    }
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Ckeditor::where('id',$id)->delete();
        if($delete){
            return redirect()->back()->with('success','One record has been deleted');
        }else{
            return redirect()->back()->with('message',"The record has'nt been deleted");
        }
        
    }
}
