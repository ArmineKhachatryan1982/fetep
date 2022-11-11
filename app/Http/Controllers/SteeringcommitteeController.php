<?php

namespace App\Http\Controllers;
use App\Models\Steering_committee;
use App\Models\Steering_img;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Facades\DB;

class SteeringcommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app()->setLocale($locale);
        
        $data = Steering_committee::where('id','1000')->first();

        $steerings_img   = Steering_img::where('steering_committees_id','1000')->get();

       $Footer = Footer::where('id','1000')->first();
       $navlink="activenavlink";
      

        return view('pages.steering_committee',['data'=>$data,'steerings_img'=>$steerings_img,'Footer'=>$Footer,'steering'=>$navlink]);

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
