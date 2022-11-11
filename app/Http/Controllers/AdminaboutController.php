<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_us;
class AdminaboutController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:about-page-show', ['only' => ['index','update']]);  
    }
    
     public function index()
    {
        $data = About_us::where('id','1000')->first();

        return view('admin.admin_about_edit',['data'=>$data]);
    }
     public function update(Request $request)
    {

     $update = About_us::where('id','1000')->update([
        'paragraph_one_en'=>$request['paragraph_one_en'],
        'paragraph_one_am'=>$request['paragraph_one_am'],
        'paragraph_two_en'=>$request['paragraph_two_en'],
        'paragraph_two_am'=>$request['paragraph_two_am'],
        'paragraph_tree_en'=>$request['paragraph_tree_en'],
        'paragraph_tree_am'=>$request['paragraph_tree_am'],
    ]);
      if(!empty($request->hasfile('img_one'))){
            $file = $request->file('img_one');
            $img_one=$file->getClientOriginalName();
            $file->move(public_path('img/about'),$img_one);
            $updateimg = About_us::where('id',$request->id)->update(['img_one'=>$img_one]);
        }
       
         $data = About_us::where('id','1000')->first();
       return view('admin.admin_about_edit',['data'=>$data]);
    }
}
