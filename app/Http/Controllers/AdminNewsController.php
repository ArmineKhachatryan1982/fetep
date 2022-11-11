<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_and_event;


class AdminNewsController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:news-show', ['only' => ['index','insert_page','insert','edit','update','delete']]);
          $this->middleware('permission:news-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:news-delete', ['only' => ['delete']]);
        
    }

 
     public function index()
    {

    $data = News_and_event::all();

          return view('admin.admin_news_index',['data'=>$data]);
    }


    public function insert_page()
    {


        return view('admin.admin_news_create');
    }
     public function insert(Request $request)


    {       
            
             if($request->hasfile('index_img_name')){
            $file = $request->file('index_img_name');
            $index_img_name=$file->getClientOriginalName();
            $image = getimagesize($request->index_img_name);
            $width = $image[0];
            $height = $image[1];
                if($width =="620" && $height =='560'){
                $file->move(public_path('img/img_news1'),$index_img_name);
                }else{
                    return redirect()->back()->with('message','Please choose a right size of file');
                }
        }
        
            if($request->hasfile('page_img_name')){
            $file = $request->file('page_img_name');
            $page_img_name=$file->getClientOriginalName();
            $image = getimagesize($request->page_img_name);
            $width = $image[0];
            $height = $image[1];
                if($width =="1919" && $height =='374'){
                $file->move(public_path('img/img_news1'),$page_img_name);
                }else{
                    return redirect()->back()->with('message','Please choose a right size of file');
                }


            
        }

            


         $insert = News_and_event::create([
        'date_en'=>$request['date_en'],
        'date_am'=>$request['date_am'],
        'title_text_am'=>$request['title_text_am'],
        'title_text_en'=>$request['title_text_en'],
        'index_text_am'=>$request['index_text_am'],
        'index_text_en'=>$request['index_text_en'],
        'text_am'=>$request['text_am'],
        'text_en'=>$request['text_en'],
        'title_text_am'=>$request['title_text_am'],
        'title_text_en'=>$request['title_text_en'],
        'page_img_name'=>$page_img_name,
        'index_img_name'=>$index_img_name,
             ]);


       return redirect()->route('admin_news_and_events');
    }

    public function edit($id)
    {
         

        $data = News_and_event::where('id',$id)->first();


       return view('admin.admin_news_edit',['data'=>$data]);
    }
   

     public function update(Request $request)
    {

   if(!empty($request->hasfile('index_img_name'))){
            $file = $request->file('index_img_name');
            $index_img_name=$file->getClientOriginalName();
            $image = getimagesize($request->index_img_name);
            $width = $image[0];
            $height = $image[1];
                if($width =="620" && $height =='560'){
                $file->move(public_path('img/img_news1'),$index_img_name);
                $updateimg = News_and_event::where('id',$request->id)->update(['index_img_name'=>$index_img_name]);
                }else{
                    return redirect()->back()->with('message','Please choose a right size of file');
                }
            
        }


   if(!empty($request->hasfile('page_img_name'))){
            $file = $request->file('page_img_name');
            $page_img_name=$file->getClientOriginalName();
            $image = getimagesize($request->page_img_name);
            $width = $image[0];
            $height = $image[1];
                if($width =="1919" && $height =='374'){
                     $file->move(public_path('img/img_news1'),$page_img_name);
                     $updateimg = News_and_event::where('id',$request->id)->update(['page_img_name'=>$page_img_name]);
                }else{
                    return redirect()->back()->with('message','Please choose a right size of file');
                }

            

           
        }

            


         $update= News_and_event::where('id',$request->id)->update([
        'date_en'=>$request['date_en'],
        'date_am'=>$request['date_am'],
        'title_text_am'=>$request['title_text_am'],
        'title_text_en'=>$request['title_text_en'],
        'index_text_am'=>$request['index_text_am'],
        'index_text_en'=>$request['index_text_en'],
        'text_am'=>$request['text_am'],
        'text_en'=>$request['text_en'],
        'title_text_am'=>$request['title_text_am'],
        'title_text_en'=>$request['title_text_en'],
             ]);


       return redirect()->back()->with('success','One record has been updated successfully');

       
    }

    public function delete($id)
    {
                    
        $data = News_and_event::where('id',$id)->delete();

       return redirect()->route('admin_news_and_events');
    }
    
}
