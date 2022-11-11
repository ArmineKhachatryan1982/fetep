<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;

class PartnoreController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:partner-show', ['only' => ['index','add','edit','update','create','delete']]);
          $this->middleware('permission:partner-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:partner-delete', ['only' => ['delete']]);
          $this->middleware('permission:partner-user-show', ['only' => ['create']]);  
    }
    public function index()
    {
        $data = Partners::all();
         
        return view('admin.admin_partnore',['data'=>$data]);
    }
     public function add(Request $request)
    {
        // dd($request);


            if($request->hasfile('img_partner')){
            $file = $request->file('img_partner');
            $img_partner=$file->getClientOriginalName();
            $file->move(public_path('img/img_partners'),$img_partner);
        }else
            {
              return  redirect()->back();
            }


        //     if($request->hasfile('compni_logo')){
        //     $file = $request->file('compni_logo');
        //     $compni_logo=$file->getClientOriginalName();
        //     $file->move(public_path('img/img_partners'),$compni_logo);
        // }else
        //     {
        //       return  redirect()->back();
        //     }
         $insert = Partners::create([
        'name_am'=>$request['name_am'],
        'name_en'=>$request['name_en'],
        'min_text_en'=>$request['min_text_en'],
        'min_text_am'=>$request['min_text_am'],
        // 'des_am'=>$request['des_am'],
        // 'des_en'=>$request['des_en'],
        // 'text_one_am'=>$request['text_one_am'],
        // 'text_one_en'=>$request['text_one_en'],
        // 'text_two_am'=>$request['text_two_am'],
        // 'text_two_en'=>$request['text_two_en'],
        // 'text_tree_am'=>$request['text_tree_am'],
        // 'text_three_en'=>$request['text_three_en'],
        // 'name_en'=>$request['name_en'],
        'img_partner'=>$img_partner,
        // 'compni_logo'=>$compni_logo,
             ]); 
        
       
       
         
         return redirect()->route('admin_partnore_add');
     
    }
     public function edit($id)
    {
         $data = Partners::where('id',$id)->first();

        return view('admin.admin_partnore_edith', ['data'=>$data]);
    }
     public function update(Request $request)
    {   
         if(!empty($request->hasfile('img_partner'))){
            $file = $request->file('img_partner');
            $img_partner=$file->getClientOriginalName();
            $file->move(public_path('img/img_partners'),$img_partner);
            $updateimg = Partners::where('id',$request->id)->update(['img_partner'=>$img_partner]);
        }
         if(!empty($request->hasfile('compni_logo'))){
            $file = $request->file('compni_logo');
            $compni_logo=$file->getClientOriginalName();
            unlink(public_path('img/img_partners/'.$request->old_compni_logo));
            $file->move(public_path('img/img_partners'),$compni_logo);
            $updateimg = Partners::where('id',$request->id)->update(['compni_logo'=>$compni_logo]);
        }
           
         $update = Partners::where('id',$request->id)->update([
        'name_am'=>$request['name_am'],
        'name_en'=>$request['name_en'],
        'min_text_en'=>$request['min_text_en'],
        'min_text_am'=>$request['min_text_am'],
        'des_am'=>$request['des_am'],
        'des_en'=>$request['des_en'],
        'text_one_am'=>$request['text_one_am'],
        'text_one_en'=>$request['text_one_en'],
        'text_two_am'=>$request['text_two_am'],
        'text_two_en'=>$request['text_two_en'],
        'text_tree_am'=>$request['text_tree_am'],
        'text_three_en'=>$request['text_three_en'],
        'name_en'=>$request['name_en'],
             ]); 
        
         
             return redirect()->back()->with('success','One record has been updated successfully');
    }

     public function create()
    {

       return view('admin.admin_partnore_create_page');
    }
     public function delete($id)
    {

        $delete = Partners::where('id',$id)->delete();
         
        return redirect()->back()->with('success','One record has been deleted successfully');
    }
}
