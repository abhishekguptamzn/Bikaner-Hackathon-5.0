<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.main');
    }
    public function contactform(Request $request)
    {
        $fullname = $request->input('fullname');
        $contactno = $request->input('contactno');
        $email = $request->input('email');
        $messagedata = $request->input('message');
       $data = array(
        'fullname'=> $fullname,
        "contactno" => $contactno,
        "email" => $email,
        "messagedata" => $messagedata,
    );

     /*  print_r(is_string($message));
   exit();*/
      Mail::send(['text'=>'contactmail'], $data, function($message) use($data) {
         $message->to('bharatkhojo@gmail.com', 'Admin')->subject
            ('Query');
         $message->from($data['email'],$data['fullname']);
      });
     return redirect()->back();
    }
}
