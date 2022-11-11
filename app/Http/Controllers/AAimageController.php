<?php

namespace App\Http\Controllers;
use App\Models\Alumni_association;
use App\Models\Alumni_association_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AAimageController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:alumni-img-form-show', ['only' => ['index','insert']]);
          $this->middleware('permission:alumni-img-table-show', ['only' => ['create']]);
          $this->middleware('permission:alumni-img-edit', ['only' => ['create','edit','update']]);
          $this->middleware('permission:alumni-img-delete', ['only' => ['delete']]);
    }
     public function index()
    {
         
        return view('admin.alumni_association_image');
    }
    
    public function create()
    {
         
        $alumni_association_img = Alumni_association_img::All();

        return view('admin.admin_Alumni_Association_image_table_show',['data'=> $alumni_association_img]);
    }

    public function edit($id)
    {

  
        $alumni_association_img = Alumni_association_img::where('id',$id)->first();
    
         return view('admin.admin_Alumni_Association_image_edit',['data'=>$alumni_association_img]);
    }

    public function update(Request $request)
    {

        if($request->hasfile('img_url')){
            $file = $request->file('img_url');
            $filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_alumini'),$filename);

            $update = Alumni_association_img::where('id',$request->id)->update([
                
                'img_url'=>$filename,
            ]);
            return redirect()->back()->with('success','One record has been updated successfully');
            
        }else{

            {
                return redirect()->back()->with('error_file','Please choose  a file');

              }
  
        
            
        }
        
      
        //  return view('admin.admin_Alumni_Association_image_edit',['data'=>$alumni_association_img]);
    }

     public function insert(Request $request)
    {
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename=$file->getClientOriginalName();
           
            $image = getimagesize($request->image);
             $width = $image[0];
             $height = $image[1];
        
            if( $width=="740"){
                $file->move(public_path('img/img_alumini'),$filename);
                $insert =  Alumni_association_img::create([
                    'alumni_associations_id'=>'1000',
                    'img_url'=>$filename,
                    ]);
                return redirect()->back()->with('success','The file uploaded successfully');
            }else{
                return redirect()->back()->with('message','The format dosent matched');
            }
        }else
            {
                return redirect()->back()->with('message','You should choose a file');
            }

         
        
        
    }
     public function delete($id)
    {
        // dd($id);

            $delete= Alumni_association_img::where('id', $id)->delete();
         return redirect()->back();
    }
}
