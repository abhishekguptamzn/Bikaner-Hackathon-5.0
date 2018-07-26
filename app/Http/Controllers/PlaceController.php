<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Session;
use Mail;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::orderBy('created_at', 'desc')->get();
        $data = [
            "places" => $places,
        ];
        return view('admin.places.allplace',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.places.addplace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
  $photoName = time().'.'.$request->placeimage->getClientOriginalExtension();

  $request->placeimage->move(public_path('place_images'), $photoName);

        $place  = new Place;
        $status = 0;
        $bywhom = 1;
        $howknow = $request->input("howknow");
        if (!$howknow) {
           $howknow = 0;
           $status = 1;
            $bywhom = 2;
        }
       $result =  $place::create([
            "placename" => $request->input("placename"),
            "category" => $request->input("category"),
            "location" => $request->input("location"),
            "city" => $request->input("city"),
            "state" => $request->input("state"),
            "placeimagemain" => $photoName,
            "information" => $request->input("information"),
            "importance" => $request->input("importance"),
            "howknow" => $howknow,
            "fullname" => $request->input("fullname"),
            "contactno" => $request->input("contactno"),
            "email" => $request->input("email"),
            "status" => $status,
            "bywhom" => $bywhom ,
            "views" => 0 ,
        ]);
       if ($result) {
        if ($howknow) {
        
        $email = $request->input("email");
        $name = $request->input("fullname");
   $data = array('name',$name );
      Mail::send(['text'=>'mail'], $data, function($message) use($email,$name) {
         $message->to($email,$name)->subject
            ('Auto Response');
         $message->from('bharatkhojo@gmail.com','Team BharatKhojo');
      });
      //echo "Basic Email Sent. Check your inbox.";
    }
        }
        Session::flash('message', 'This is a message!'); 
        Session::flash('classname', 'success');
         return  redirect()->back();
       }
       

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function editplace(Place $place)
    {
          $data = [
            "place" => $place,
        ];
        return view('admin.places.editplace',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        
       // dd($request->all());
        dd($place);
        if ($request->placeimage) {
           $photoName = time().'.'.$request->placeimage->getClientOriginalExtension();

             $request->placeimage->move(public_path('place_images'), $photoName);
             $result =  $place::update([
            "placename" => $request->input("placename"),
            "category" => $request->input("category"),
            "location" => $request->input("location"),
            "city" => $request->input("city"),
            "state" => $request->input("state"),
            "placeimagemain" => $photoName,
            "information" => $request->input("information"),
            "status" =>  $request->input("information"),
        ]);
        }
        else{
             $result =  $place::update([
            "placename" => $request->input("placename"),
            "category" => $request->input("category"),
            "location" => $request->input("location"),
            "city" => $request->input("city"),
            "state" => $request->input("state"),
            "information" => $request->input("information"),
            "status" =>  $request->input("information"),
        ]);
        }
  

               $result =  $place::update([
            "placename" => $request->input("placename"),
            "category" => $request->input("category"),
            "location" => $request->input("location"),
            "city" => $request->input("city"),
            "state" => $request->input("state"),
            "placeimagemain" => $photoName,
            "information" => $request->input("information"),
            "status" =>  $request->input("information"),
        ]);
       if ($result) {
Session::flash('message', 'This is a message!'); 
Session::flash('classname', 'success');
         return  redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function delete(Place $place)
    {
        $place->delete();
         return  redirect()->back();
    }
    public function seeplace(Place $place)
    {
       // dd($place); 
        $place->views++;
        $place->save();
        $data = [
            "place" => $place,
        ];
        return view('frontend.seeplace',$data);
    }
    public function changestatus(Request $request,Place $place)
    {
        $place->status = $request->input('newstatus');
        $place->save();
    }
}
