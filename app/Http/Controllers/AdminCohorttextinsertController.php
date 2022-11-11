<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohort_text;

class AdminCohorttextinsertController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:cohort-text-show', ['only' => ['index','store']]);
      
        
    }
//index store 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_cohort_text_insertform');
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

       
        $insert_cohort_text=Cohort_text::create([
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
