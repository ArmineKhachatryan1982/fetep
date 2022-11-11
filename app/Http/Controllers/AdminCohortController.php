<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohort;
use App\Models\Cohort_info;
use Illuminate\Support\Facades\DB;

class AdminCohortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updatecohortfirsttext=DB::table('cohorts')->where('id',1000)->get();
        return view('admin.admin_cohort_first_text_update',compact('updatecohortfirsttext'));

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
        $updatecohortfirsttext=DB::table('cohorts')->where('id',$id)->get();

        return view('admin.admin_cohort_first_text_update_form',compact('updatecohortfirsttext'));
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
    public function update(Request $request)
    {
        $id=$request->id;
//        dd($id);

        $cohort_id = $request->id;
        $cohort_text_en = $request->cohorts_text_en;
        $cohort_text_am = $request->cohorts_text_am;
        $updatecohort_first_text=Cohort::where('id',$cohort_id)->update(['text_en'=>$cohort_text_en,'text_am'=>$cohort_text_am]);
        return redirect()->back()->with('success','Updated one record');
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
