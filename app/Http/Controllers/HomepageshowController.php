<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Home_page;
use App\Models\Home_page_text;
use App\Models\Home_page_about_text;
use Session;

class HomepageshowController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $title="Insert data to Home page table";
        return view('admin.homepageshow',compact('title'));
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
        $request->validate([
            'image_name_file'=>'required',
            'about_image_name'=>'required',
            'home_page_text_am'=>'required',
            'home_page_text_en'=>'required',
            'home_page_about_text_am'=>'required',
            'home_page_about_text_en'=>'required',
        ]);


        $home_page=New Home_page();
        if($request->hasfile('image_name_file')){
            $file=$request->file('image_name_file');
//           $extention=$file->getClientOriginalExtension();
//           $filename = time().'.'.$extention;
            $filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_home'),$filename);
        }
        $home_page->img_name=$filename;


        if($request->hasfile('about_image_name')){
            $file=$request->file('about_image_name');
//            $extention=$file->getClientOriginalExtension();
            $about_image_filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_home'),  $about_image_filename);
        }


        $home_page->about_img_name= $about_image_filename;
        $home_page->save();



        $home_page_text=New Home_page_text();
        $home_page_text->home_page_id=$home_page->id;
        $home_page_text->home_page_text_am=$request->home_page_text_am;
        $home_page_text->home_page_text_en=$request->home_page_text_en;
        $home_page_text->save();


        $home_page_about_text=New Home_page_about_text();
        $home_page_about_text->home_page_id=$home_page->id;
        $home_page_about_text->about_text_am=$request->home_page_about_text_am;
        $home_page_about_text->about_text_en=$request->home_page_about_text_en;
        $home_page_about_text->save();

        return redirect()->back()->with('success', 'New record created successfully!');
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
}
