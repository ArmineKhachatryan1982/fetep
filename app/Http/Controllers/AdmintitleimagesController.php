<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titleimage;

class AdmintitleimagesController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:homepage-trainingpage-backgroundimages-show', ['only' => ['index','create','store','delete']]);
          $this->middleware('permission:homepage-trainingpage-backgroundimages-edit', ['only' => ['edit','update']]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//  index,create,store,edit, update,delete

    public function index()

    {

        return view('admin.admin_title_image');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleimage=Titleimage::all();
        return view('admin.admin_title_image_show', ['data'=>$titleimage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   
    {
        //  dd($request);
     
        if(!empty($request->hasfile('homepage_title_img')) ){
            $file = $request->file('homepage_title_img');
            $homepage_title_img=$file->getClientOriginalName();

            $image = getimagesize($request->homepage_title_img);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="1920" && $height =='400'){


            $file->move(public_path('img/img_home'),$homepage_title_img);
            }else{
                return redirect()->back()->with('message','Choose a right size');
            }
        }


        if(!empty($request->hasfile('homepage_title_img_768')) ){
            $file = $request->file('homepage_title_img_768');
            $homepage_title_img_768=$file->getClientOriginalName();

            $image = getimagesize($request->homepage_title_img_768);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="768" && $height =='400'){


            $file->move(public_path('img/img_home'),$homepage_title_img_768);
            }else{
                return redirect()->back()->with('message','Choose a right size');
            }
        }
        if(!empty($request->hasfile('homepage_title_img_425')) ){
            $file = $request->file('homepage_title_img_425');
            $homepage_title_img_425=$file->getClientOriginalName();

            $image = getimagesize($request->homepage_title_img_425);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="425" && $height =='400'){


            $file->move(public_path('img/img_home'),$homepage_title_img_425);
            }else{
                return redirect()->back()->with('message','Choose a right size');
            }
        }



        if(!empty($request->hasfile('trainingpage_title_img'))){

            $file = $request->file('trainingpage_title_img');
            $trainingpage_title_img=$file->getClientOriginalName();
            $image = getimagesize($request->trainingpage_title_img);
            $width = $image[0];
            $height = $image[1];
            if($width =="1920" && $height =='514'){
            $file->move(public_path('img/img_home'), $trainingpage_title_img);
            }else{
                return redirect()->back()->with('message','Choose a right size');
            }
        }
        if(!empty($request->hasfile('trainingpage_title_img_768'))){

            $file = $request->file('trainingpage_title_img_768');
            $trainingpage_title_img_768=$file->getClientOriginalName();

            $image = getimagesize($request->trainingpage_title_img_768);
            $width = $image[0];
            $height = $image[1];
            if($width =="768" && $height =='514'){
            $file->move(public_path('img/img_home'), $trainingpage_title_img_768);
            }else{
                return redirect()->back()->with('message','Choose a  size 768px x 514px');
            }
           
           
        }
        if(!empty($request->hasfile('trainingpage_title_img_425'))){

            $file = $request->file('trainingpage_title_img_425');
            $trainingpage_title_img_425=$file->getClientOriginalName();
            $image = getimagesize($request->trainingpage_title_img_425);
            $width = $image[0];
            $height = $image[1];
            if($width =="425" && $height =='514'){
                $file->move(public_path('img/img_treyning'), $trainingpage_title_img_425); 
            }else{
                return redirect()->back()->with('message','Choose a right size');
            }
        }
        $insert=Titleimage::create([
            'homepage_title_img'=>$homepage_title_img,
            'homepage_title_img_768'=>$homepage_title_img_768,
            'homepage_title_img_425'=>$homepage_title_img_425,
            'trainingpage_title_img'=>$trainingpage_title_img,
            'trainingpage_title_img_768'=>$trainingpage_title_img_768,
            'trainingpage_title_img_425'=>$trainingpage_title_img_425,
        ]); 
        return redirect()->back()->with('success','You have successfully uploaded images');
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
 
        $titleimage=Titleimage::where('id',$id)->first();
        return view('admin.admin_title_image_edit',['data'=>$titleimage]);
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
    //    dd($request);
        if($request->hasfile('homepage_title_img')){
            $file = $request->file('homepage_title_img');
            $homepage_title_img=$file->getClientOriginalName();
            $image = getimagesize($request->homepage_title_img);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="1920" && $height =='400'){
                $file->move(public_path('img/img_home'),$homepage_title_img); 

                $update=Titleimage::where('id',$request->id)->update([
                    'homepage_title_img'=>$homepage_title_img,  
                ]);
            }else{
                return redirect()->back()->with('message','Homepage title image width doesnt match 1920px and height dosent match 400px');
            }
        }

        if($request->hasfile('homepage_title_img_768')){
            $file = $request->file('homepage_title_img_768');
            $homepage_title_img_768=$file->getClientOriginalName();
            $image = getimagesize($request->homepage_title_img_768);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="768" && $height =='400'){
                $file->move(public_path('img/img_home'),$homepage_title_img_768); 
                $update=Titleimage::where('id',$request->id)->update([
                    'homepage_title_img_768'=>$homepage_title_img_768,  
                ]);
            }else{
                return redirect()->back()->with('message','Homepage title image width doesnt match 768px and height dosent match 400px');
            }
        }

        if($request->hasfile('homepage_title_img_425')){
            $file = $request->file('homepage_title_img_425');
            $homepage_title_img_425=$file->getClientOriginalName();
            $image = getimagesize($request->homepage_title_img_425);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="425" && $height =='400'){
                $file->move(public_path('img/img_home'),$homepage_title_img_425); 
                    $update=Titleimage::where('id',$request->id)->update([
                        'homepage_title_img_425'=>$homepage_title_img_425,  
                    ]);
            }else{
                return redirect()->back()->with('message','Homepage title image width doesnt match 425px and height dosent match 400px');
            }
        }
        
        if($request->hasfile('trainingpage_title_img')){
            $file = $request->file('trainingpage_title_img');
            $trainingpage_title_img=$file->getClientOriginalName();
            $image = getimagesize($request->trainingpage_title_img);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="1920" && $height =='514'){
                $file->move(public_path('img/img_treyning'), $trainingpage_title_img);
                $update=Titleimage::where('id',$request->id)->update([
                    'trainingpage_title_img'=> $trainingpage_title_img,  
                ]);
            }else{
                return redirect()->back()->with('message','Training title image width doesnt match 1920px and height dosent match 514px');
            }
           
        } 
        if($request->hasfile('trainingpage_title_img_768')){
            $file = $request->file('trainingpage_title_img_768');
            $trainingpage_title_img_768=$file->getClientOriginalName();
            $image = getimagesize($request->trainingpage_title_img_768);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="768" && $height =='514'){
                $file->move(public_path('img/img_treyning'), $trainingpage_title_img_768);
                $update=Titleimage::where('id',$request->id)->update([
                    'trainingpage_title_img_768'=> $trainingpage_title_img_768,  
                ]);
            }else{
                return redirect()->back()->with('message','Training title image width doesnt match 768px and height dosent match 514px');
            }
           
        } 
        if($request->hasfile('trainingpage_title_img_425')){
            $file = $request->file('trainingpage_title_img_425');
            $trainingpage_title_img_425=$file->getClientOriginalName();
            $image = getimagesize($request->trainingpage_title_img_425);
            $width = $image[0];
            $height = $image[1];
            // dd($width,$height);
            if($width =="425" && $height =='514'){
                $file->move(public_path('img/img_treyning'), $trainingpage_title_img_425);
                $update=Titleimage::where('id',$request->id)->update([
                    'trainingpage_title_img_425'=> $trainingpage_title_img_425,  
                ]);
            }else{
                return redirect()->back()->with('message','Training title image width doesnt match 425px and height dosent match 514px');
            }
           
        } 
        return redirect()->back()->with('success','One record has been updated successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=Titleimage::where('id',$id)->delete();
        return redirect()->back()->with('success','One record has been deleted successfully'); 
    }
}
