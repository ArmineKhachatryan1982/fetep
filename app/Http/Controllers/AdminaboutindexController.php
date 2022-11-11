<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutindex;

class AdminaboutindexController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:about-homepage-show', ['only' => ['index','update']]);
    }

     public function index()
    {
         $data = Aboutindex::where('id','1000')->first();

        return view('admin.about_index',['data'=>$data]);
    }
     public function update(Request $request)
    {
         if(!empty($request->hasfile('imgpath'))){
            $file = $request->file('imgpath');
            $imgpath=$file->getClientOriginalName();
            $file->move(public_path('img/about'),$imgpath);
            $updateimg = Aboutindex::where('id','1000')->update(['imgpath'=>$imgpath]);
        }
         $update =  Aboutindex::where('id','1000')->update([
            'text_am'=>$request['text_am'],
            'text_en'=>$request['text_en'],
        ]);
        
        return redirect()->route('admin_aboutindex_edit');
    }
}
