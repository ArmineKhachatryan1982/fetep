<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_and_event;
use App\Models\Footer;

class NewsAndMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app()->setLocale($locale);


        $employees=News_and_event::Orderby('id','desc')->paginate(9);

        $Footer = Footer::where('id','1000')->first();
        $news="activenavlink";
        return view('pages.news',compact('employees','Footer','news'));
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

        $data=News_and_event::where('id',$id)->first();
       
        
        $employees = News_and_event::where('status','0')->skip(0)->take(3)->get();

        $Footer = Footer::where('id','1000')->first();
        
        return view('pages.news_&_media',['employees'=>$employees,'data'=>$data,'Footer'=>$Footer]);
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
