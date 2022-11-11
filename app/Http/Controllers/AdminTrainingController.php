<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Treyning;

class AdminTrainingController extends Controller
{
      public function index()
    {
        $data = Treyning::all();
         
        return view('admin.admin_treyning',['data'=>$data]);
    }

      public function create()
    {
          
        return view('admin.admin_training_create');
    }

     public function add(Request $request)
    {

        if($request->hasfile('imagepath')){
            $file = $request->file('imagepath');
            $imagepath=$file->getClientOriginalName();
            $file->move(public_path('img/img_treyning'),$imagepath);
        }else
            {
              return  redirect()->back();
            }
         $insert = Treyning::create([
        'imagepath'=>$imagepath,
        'img_text_am'=>$request['img_text_am'],  
        'img_text_en'=>$request['img_text_en'],  
        'title_am'=>$request['title_am'],
        'title_en'=>$request['title_en'],
        'text_one_am'=>$request['text_one_am'],
        'text_one_en'=>$request['text_one_en'],
        'text_two_am'=>$request['text_two_am'],
        'text_two_en'=>$request['text_two_en'],
             ]); 
        
        
       
         
         return redirect()->route('admin_training_add');
     
    }
     public function edit($id)
    {
         
        $data = Treyning::where('id',$id)->first();
         
        return view('admin.admin_treyning_edit',['data'=>$data]);
    }
     public function update(Request $request)
    {   
          if(!empty($request->hasfile('imagepath'))){
            $file = $request->file('imagepath');
            $imagepath=$file->getClientOriginalName();
            $file->move(public_path('img/img_treyning'),$imagepath);
            $updateimg = Treyning::where('id',$request->id)->update(['imagepath'=>$imagepath]);
        }

          $insert = Treyning::where('id',$request->id)->update([
        'img_text_am'=>$request['img_text_am'],  
        'img_text_en'=>$request['img_text_en'],    
        'title_am'=>$request['title_am'],
        'title_en'=>$request['title_en'],
        'text_one_am'=>$request['text_one_am'],
        'text_one_en'=>$request['text_one_en'],
        'text_two_am'=>$request['text_two_am'],
        'text_two_en'=>$request['text_two_en'],
             ]); 
         
        return redirect()->back()->with('success','One record has been updated successfully');
    }
     public function delete($id)
    {

        $delete = Treyning::where('id',$id)->delete();
         
        return redirect()->route('admin_training_add');
    }
}
