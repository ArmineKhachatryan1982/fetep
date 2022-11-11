<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohort_text;

class CohortTextPagesController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:cohort-text-show', ['only' => ['index','edit','update','delete']]);
          $this->middleware('permission:cohort-group-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:cohort-group-delete', ['only' => ['delete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index  edit update  delete
    public function index()
    {
       $data=Cohort_text::all();
       return view('admin.admin_cohort_text_all',['data'=>$data]); 
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
        //
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
        // dd('aaaa');
        $data=Cohort_text::where('id',$id)->first();
       return view('admin.admin_cohort_text_edit',['data'=>$data]); 
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
        // dd('hellow');
         $update = Cohort_text::where('id',$request->id)->update([
            'cohort_text_en'=>$request['cohort_text_en'],
            'cohort_text_am'=>$request['cohort_text_am'],
            'cohort_date_en'=>$request['cohort_date_en'],
            'cohort_date_am'=>$request['cohort_date_am'],
            'cohort_group_en'=>$request['cohort_group_en'],
            'cohort_group_am'=>$request['cohort_group_am'],
            'cohort_date_second_en'=>$request['cohort_date_second_en'],
            'cohort_date_second_am'=>$request['cohort_date_second_am'],
            'cohort_group_second_en'=>$request['cohort_group_second_en'],
            'cohort_group_second_am'=>$request['cohort_group_second_am'],
        
         ]);
         return redirect()->back()->with('success','One record was  updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
         $delete = Cohort_text::where('id',$id)->delete();
         
        return redirect()->back();
    }
}
