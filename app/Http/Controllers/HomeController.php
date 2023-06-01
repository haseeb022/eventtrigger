<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Models\Country;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

     public function index()
     {
        $events = Event::orderBy('id','desc')->take(5)->get();

        return view('frontend.index',compact('events'));
     }

     public function event_details($id)
     {
        $event = Event::find($id);
        return view('frontend.event-details',compact('event'));
     }

     public function events_list()
     {
         $events = Event::get();
         return view('frontend.events_list',compact('events'));
     }


}
