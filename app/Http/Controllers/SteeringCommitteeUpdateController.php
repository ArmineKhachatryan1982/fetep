<?php

namespace App\Http\Controllers;
use App\Models\Steering_committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SteeringCommitteeUpdateController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:steering-text-show', ['only' => ['index','show','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index  show update 
    public function index()
    {
        $steering = DB::table('steering_committees')->get();

        return view('admin.admin_steering_committee',compact('steering'));
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
        $steerings = DB::table('steering_committees')->get();
        return view('admin.admin_steering_committee_edit',compact('steerings'));
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
        $id=$request->input('id');
        $title_en=$request->input('title_en');
        $title_am=$request->input('title_am');
        $paragraph_one_en=$request->input('paragraph_one_en');
        $paragraph_one_am=$request->input('paragraph_one_am');
        $paragraph_two_en=$request->input('paragraph_two_en');
        $paragraph_two_am=$request->input('paragraph_two_am');
        $updateSteering=DB::table('steering_committees')
                            ->where('id',$id)
            ->update(['title_en'=>$title_en,'title_am'=>$title_am,'paragraph_one_en'=>$paragraph_one_en,'paragraph_one_am'=>$paragraph_one_am,'paragraph_two_en'=>$paragraph_two_en,'paragraph_two_am'=>$paragraph_two_am]);
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
