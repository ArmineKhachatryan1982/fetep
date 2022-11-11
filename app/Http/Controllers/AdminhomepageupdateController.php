<?php

namespace App\Http\Controllers;
use App\Models\Home_page;
use App\Models\Home_page_about_text;
use App\models\Home_page_text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminhomepageupdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $result=DB::table('home_pages')
            ->join('home_page_texts','home_pages.id','=','home_page_texts.home_page_id')
            ->join('home_page_about_texts','home_pages.id','=','home_page_about_texts.home_page_id')
            ->select('home_pages.*','home_page_texts.*','home_page_about_texts.*')
            ->get();


        return view('admin.tableupdatedelete',compact('result'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//      $result = Home_page_text::find($id);
        $result=DB::table('home_pages')
            ->join('home_page_texts','home_pages.id','=','home_page_texts.home_page_id')
            ->join('home_page_about_texts','home_pages.id','=','home_page_about_texts.home_page_id')
            ->select('home_pages.id AS h_id','home_pages.img_name','home_pages.about_img_name','home_page_texts.*','home_page_about_texts.*')
            ->get();




//dd($result);

        return view('admin.edithomepage',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd(__METHOD__);
//        $result=DB::table('home_pages')
//            ->join('home_page_texts','home_pages.id','=','home_page_texts.home_page_id')
//            ->join('home_page_about_texts','home_pages.id','=','home_page_about_texts.home_page_id')
//            ->select('home_pages.*','home_page_texts.*','home_page_about_texts.*')
//            ->get();




//dd($result);
//        return redirect()->back()->with('success','Updated one record');


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


        if($request->hasfile('image_name_file')){
            $file=$request->file('image_name_file');
//            $extention=$file->getClientOriginalExtension();
//            $filename = time().'.'.$extention;
            $filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_home'),$filename);
        }

        if($request->hasfile('about_image_name')){
            $file=$request->file('about_image_name');
//            $extention=$file->getClientOriginalExtension();
            $about_image_filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_home'), $about_image_filename);
        }



        $h_id=$request->input('id');

        $updatehomepag=Home_page::where('id',$h_id)->update(['img_name'=>$filename,'about_img_name'=>$about_image_filename]);


        $home_page_text_am=$request->input('home_page_text_am');
        $home_page_text_en=$request->input('home_page_text_en');
        $updatehomepagetext=Home_page_text::where('home_page_id',$h_id)->update(['home_page_text_am'=>$home_page_text_am,'home_page_text_en'=>$home_page_text_en]);

        $home_page_about_text_am=$request->input('home_page_about_text_am');
        $home_page_about_text_en=$request->input('home_page_about_text_en');
        $updatehomepagetext=Home_page_about_text::where('home_page_id',$h_id)->update(['about_text_am'=>$home_page_about_text_am,'about_text_en'=> $home_page_about_text_en]);





        return redirect()->back()->with('success','Updated one record');

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
