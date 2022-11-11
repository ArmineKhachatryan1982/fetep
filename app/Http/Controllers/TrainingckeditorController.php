<?php

namespace App\Http\Controllers;
use App\Models\Title;
use App\Models\Titleimage;
use App\Models\Footer;
use App\Models\Ckeditor;

use Illuminate\Http\Request;

class TrainingckeditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app()->setLocale($locale);
        $ckeditor=Ckeditor::paginate(3);
        $titleimage = Titleimage::where('id',1000)->first();
        $Title = Title::where('id','1001')->first();
        // $ckeditor_paginate=Ckeditor::paginate(3);
        $training="activenavlink";


        $Footer = Footer::where('id','1000')->first();
        return view('pages.ckeditor_form',compact('titleimage','Title','training','Footer','ckeditor',));
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
