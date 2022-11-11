<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partners;
use App\Models\Footer;

class OurPartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app()->setLocale($locale);

        $Partners=Partners::paginate(6);
        
        
        $Footer = Footer::where('id','1000')->first();
        $ourpartners="activenavlink";
        return view('pages.our_partners',compact('Partners','Footer','ourpartners'));

       

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
    public function show($locale,$id)
    {
        app()->setLocale($locale);

        $data = Partners::where('id',$id)->first();
       
        $employees = Partners::whereNotNull('id')->skip(0)->take(2)->get();

         $Footer = Footer::where('id','1000')->first();
        
        return view('pages.partner',['Partners'=>$employees,'data'=>$data,'Footer'=>$Footer]);
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
