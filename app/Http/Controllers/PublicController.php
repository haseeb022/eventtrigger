<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index(){
        $events  = Event::get();
        return view('frontend.index', compact('events'));
    }

    public function events(){
        $events  = Event::get();
        return view('frontend.events', compact('events'));
    }

    public function detailEvent($id){

        $event = Event::find($id);
        
        return view('frontend.event-details', compact('event'));
    }

    public function booking(Request $request, $id){

        $request->validate([
            'numebr_of_seats' => 'required'
        ]);

        if(!Auth::check()==true){
            session(['event_id' => $id]);
            return redirect('/login');
        }

        echo $id;
        echo 'asfasd';
        

    }
}
