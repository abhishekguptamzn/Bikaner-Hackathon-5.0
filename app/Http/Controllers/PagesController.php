<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
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
}
