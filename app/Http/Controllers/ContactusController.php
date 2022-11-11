<?php

namespace App\Http\Controllers;
use App\Models\Contacts_us;
use App\Models\Massage;
use App\Models\Footer;
use App\Mail\ContactMail;
use App;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
         app()->setLocale($locale);
        $data=Contacts_us::where('id','1')->first();
        $Footer = Footer::where('id','1000')->first();
        $contact="activenavlink";
        return view('pages.contactus',['data'=>$data,'Footer'=>$Footer,'contact'=>$contact]);
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

        // dd($request->language);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        
        $message=Massage::Create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $body = "<p><b>Name:</b>{$request->input('name')}</p>";
        $body.="<p><b>E-mail:</b>{$request->input('email')}</p>";
        $body .="<p><b>Message:</b>{$request->input('message')}</p>";

        Mail::to('armine.khachatryan1982@gmail.com')->send(new ContactMail($body));
        // $request->session()->flash('success','message send')
        // dd($message);
        if($request->language=='en'){
            return Redirect()->back()->with('success','We will connect with you as soon as possible ');
        }
        else{
            return Redirect()->back()->with('success','Մենք  Ձեր հետ կապ կհաստատենք հնարավորինս շուտ');
        }
        
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
