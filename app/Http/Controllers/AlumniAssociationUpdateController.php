<?php

namespace App\Http\Controllers;

use App\Models\Alumni_association;
use App\Models\Alumni_association_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniAssociationUpdateController extends Controller
{
    function __construct()
    {
          $this->middleware('permission:alumni-text-show', ['only' => ['index']]);
          $this->middleware('permission:alumni-text-edit', ['only' => ['show','update']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $alumnis = DB::table('alumni_associations')->get();

        return view('admin.alumni_association',compact('alumnis'));
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
        $alumnis = DB::table('alumni_associations')->get();
        return view('admin.alumni_association_edit',compact('alumnis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
       $id = $request -> input('id');
       $title_en = $request -> input('title_en');
       $title_am = $request -> input('title_am');
       $text_one_en = $request -> input('text_one_en');
       $text_one_am = $request -> input('text_one_am');
       $text_two_en = $request -> input('text_two_en');
       $text_two_am = $request -> input('text_two_am');
       $updateAlumni=DB::table('alumni_associations')
                        ->where('id',$id)
                        ->update(['title_en'=>$title_en,'title_am'=>$title_am,'text_one_en'=>$text_one_en,'text_one_am'=>$text_one_am,'text_two_en'=>$text_two_en,'text_two_am'=>$text_two_am]);

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
