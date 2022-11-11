<?php

namespace App\Http\Controllers;
use App\Models\Cohort;
use App\Models\Cohort_info;
use App\Models\Cohort_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCohortsimgandtextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohort_info_tabe_show = DB::table('cohort_infos')->get();
        return view('admin.admin_cohort_infos_table_show',compact('cohort_info_tabe_show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $cohort=Cohort()->where('id',1000)->first();
        dd($cohort);

        return view('admin.admin_cohort_infos_img_text_form',compact('cohort'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cohorts_info_img_url_file'=>'required',
            'cohorts_info_en'=>'required',
            'cohorts_info_am'=>'required',
            'cohorts_title_data_text_en'=>'required',
            'cohorts_title_data_text_am'=>'required',
            'title_en'=>'required',
            'title_am'=>'required',
        ]);
        if($request->hasfile('cohorts_info_img_url_file')){
            $file = $request->file('cohorts_info_img_url_file');
            $filename=$file->getClientOriginalName();
            $file->move(public_path('img/img_cohort'),$filename);
        }
        $cohort_infos_upload=New Cohort_info();
        // $cohort_infos_upload->cohorts_id=$request->cohort_infos_cohorts_id;
        $cohort_infos_upload->img_url= $filename;
        $cohort_infos_upload->info_en = $request->cohorts_info_en;
        $cohort_infos_upload->info_am = $request->cohorts_info_am;
        $cohort_infos_upload->save();


        $cohort_title=New Cohort_title();
        // $cohort_title->cohort_infos_id=$cohort_infos_upload->id;
        $cohort_title->date_text_en = $request->cohorts_title_data_text_en;
        $cohort_title->date_text_am = $request->cohorts_title_data_text_am;
        $cohort_title->title_en = $request->title_en;
        $cohort_title->title_am = $request->title_am;
        $cohort_title->save();

        return redirect()->back()->with('success', 'New record created successfully!');
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
