<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use Mail;
class PagesController extends Controller
{
    public function index()
    {
    	$places = Place::where('status','=',1)->orderBy('views', 'desc')->limit(8)->get();
    	$data = [
    		"places" => $places,
    	];
    	return view('frontend.main',$data);
    }
    public function newplace()
    {
    	session()->pull('message','');
    	return view('frontend.newplace');
    }
    public function about()
    {

    	return view('frontend.about');
    }
    public function contact()
    {

    	return view('frontend.contact');
    }
    public function listallplaces()
    {
    	$places = Place::where('status','=',1)->orderBy('created_at', 'desc')->paginate(15);
    	$data = [
    		"places" => $places,
    	];
    	return view('frontend.listallplaces',$data);
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
