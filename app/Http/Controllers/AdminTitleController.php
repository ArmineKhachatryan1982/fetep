<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
class AdminTitleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:homepagetitle-show', ['only' => ['index','update']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
   
    public function index()
    {
        $data = Title::where('id','1001')->first();
         
        return view('admin.admin_title',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $data = Title::where('id','1001')->update([
        'home_title_en'=>$request['home_title_en'],
        'home_title_am'=>$request['home_title_am'],
        'training_title_en'=>$request['training_title_en'],
        'training_title_am'=>$request['training_title_am'],

        ]);
         
          return redirect()->back()->with('success', 'New record created successfully!');
    }
}
