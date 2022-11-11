<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts_us;

class AdmincontactController extends Controller
{
    public function index()
    {
        $data = Contacts_us::where('id','1')->first();
         
        return view('admin.admin_contact',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $data = Contacts_us::where('id','1')->update(['map_url'=>$request['maps']]);
         
          return redirect()->back()->with('success', 'New record created successfully!');
    }
}
// 'map_url','title_page_en','title_page_am'