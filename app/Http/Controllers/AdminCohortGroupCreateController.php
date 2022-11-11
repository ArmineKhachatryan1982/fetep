<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminCohortGroupController;
use App\Models\Cohort_group;
class AdminCohortGroupCreateController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:cohort-group-show', ['only' => ['index','create','store','edit','update','delete']]);
          $this->middleware('permission:cohort-group-edit', ['only' => ['create','edit','update']]);
          $this->middleware('permission:cohort-group-delete', ['only' => ['delete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //index create store edit  update delete
    public function index()
    {
        return view('admin.admincohort_group_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Cohort_group::all();
        return view('admin.admin_cohort_group',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
         if($request->hasfile('cohort_img_name')){
            $file = $request->file('cohort_img_name');
            $cohort_img_name=$file->getClientOriginalName();
            $file->move(public_path('img/img_cohort'),$cohort_img_name);
        }else
            {
              return  redirect()->back();
            }
        $insert_cohort_group=Cohort_group::create([
            'cohort_group_en'=>$request['cohort_group_en'],
            'cohort_img_name'=>$cohort_img_name,
            'cohort_pic_title_en'=>$request['cohort_pic_title_en'],
            'cohort_pic_title_am'=>$request['cohort_pic_title_am'],
            'cohort_img_text_en'=>$request['cohort_img_text_en'],
            'cohort_img_text_am'=>$request['cohort_img_text_am'],
        ]);
        return redirect()->back()->with('success','One record inserted');
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
        $data=Cohort_group::where('id',$id)->first();
        return view('admin.admin_cohort_group_edit',['data'=>$data]);
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
        if($request->hasfile('cohort_img_name')){
            $file = $request->file('cohort_img_name');
            $cohort_img_name=$file->getClientOriginalName();
            $file->move(public_path('img/img_cohort'),$cohort_img_name);

            $update=Cohort_group::where('id',$request->id)->update([
                'cohort_group_en'=>$request['cohort_group_en'],
               'cohort_img_name'=>$cohort_img_name,
               'cohort_pic_title_en'=>$request['cohort_pic_title_en'],
               'cohort_pic_title_am'=>$request['cohort_pic_title_am'],
               'cohort_img_text_en'=>$request['cohort_img_text_en'],
               'cohort_img_text_am'=>$request['cohort_img_text_am'],
   
           ]);

        }else
           { 
            
            $update=Cohort_group::where('id',$request->id)->update([
                'cohort_group_en'=>$request['cohort_group_en'],
                // 'cohort_img_name'=>$cohort_img_name,
                'cohort_pic_title_en'=>$request['cohort_pic_title_en'],
                'cohort_pic_title_am'=>$request['cohort_pic_title_am'],
                'cohort_img_text_en'=>$request['cohort_img_text_en'],
                'cohort_img_text_am'=>$request['cohort_img_text_am'],

            ]);
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
        $delete=Cohort_group::where('id',$id)->delete();
        return redirect()->back()->with('success','One record has been deleted successfully');
    }
}
