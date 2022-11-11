<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class AdminFooterController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:footer-show', ['only' => ['index','update']]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $data=Footer::where('id',1000)->first();
        return view('admin.admin_footer_update_form',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($local)

    {
        // app()->setLocale($locale);
        // $da=Footer::where('id',1000)->get();
        // dd($da);
       // return view('layouts.footer',['data'=>$data]);
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
    public function update(Request $request)
    {
    
        // dd($request);
        if($request->hasfile('logo_name')){
            $file = $request->file('logo_name');
            $logo_name=$file->getClientOriginalName();
            $file->move(public_path('img/img_header'),$logo_name);
            $update=Footer::where('id',$request->id)->update([
                'logo_name'=>$logo_name,
                'phone'=>$request['phone'],
                'email'=>$request['email'],
                'text_am'=>$request['text_am'],
                'text_en'=>$request['text_en'],
    
            ]);
            return redirect()->back()->with('success','One record has been updated successfully');
    


        }else
            {
                $update=Footer::where('id',$request->id)->update([
                    
                    'phone'=>$request['phone'],
                    'email'=>$request['email'],
                    'text_am'=>$request['text_am'],
                    'text_en'=>$request['text_en'],
        
                ]);
                return redirect()->back()->with('success','One record has been updated successfully');
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
        //
    }
}
