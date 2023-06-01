<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Models\Country;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Library\Zoom_Api;
use App\Traits\ZoomMeetingTrait;

class AdminEventController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

     public function index(){
      
        $id = Auth::user()->id;
        $events = Event::where('organization_id', $id)->orderBy('title')->get();
        return view('backend.event.list')->with('events', $events);

     }

     public function AddEvent(){
        $country = Country::get();
        return view('backend.event.add')->with('country', $country);
     }

     public function store(Request $request)
     {
    //    dd($request);
         $request->validate([
             'title' => 'required',
             'description' => 'required',
             'event_category' => 'required',
             'date' => 'required',
             'start_time' => 'required',
             'end_time' => 'required',
             'total_seats' => 'required',
             'fee' => 'required',
             'country' => 'required',
             'city' => 'required',
             'post_code' => 'required',
             'address' => 'required'
         ]);

         $data = $request->all();

        if($data['event_category']=="1" || $data['event_category']=="2")
        {
             ////////////////////////////////////////////////////////////
            $udata=array();
            $udata['topic']=$data['title'];
            $udata['start_date']=$data['date'];
            $udata['start_time']=$data['date'].' '.$data['start_time'];
            $udata['duration']=30;
            $udata['agenda']=$data['title'];
            $udata['host_video']="1";
            $udata['participant_video']="1";

            $response=$this->createe($udata);

            $data['meeting_id']=$response['data']['join_url'];
            /////////////////////////////////////////////////////////////
        }
        else
        {
            $data['meeting_id']=NULL;
        }
        $data['is_free']=0;
        $check = $this->create($data);
        
         return redirect('/list-events');
     }
 
     public function create(array $data)
    {
       
        $id = Auth::user()->id;
        return Event::create([
            'organization_id' => $id,
            'title' => $data['title'],
            'event_category' => $data['event_category'],
            'description' => $data['description'],
            'meeting_id' => $data['meeting_id'],
            'date' => $data['date'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'is_free' => $data['is_free'],
            'total_seats' => $data['total_seats'],
            'fee' => $data['fee'],
            'country' => $data['country'],
            'city' => $data['city'],
            'post_code' => $data['post_code'],
            'address' => $data['address'],
        ]);
    } 


    public function edit($id)
    {
        $event = Event::find($id);
   
        $country = Country::get();
        return view('backend.event.edit',compact('event', 'country'));
    }

    public function update(Request $request, Event $event)
    {
        // echo '<pre>';
        // print_r($request->all());
        // die;
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'event_category' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'total_seats' => 'required',
            'fee' => 'required',
            'country' => 'required',
            'city' => 'required',
            'post_code' => 'required',
            'address' => 'required'
        ]);
        
        $input = $request->all();
  
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $postImage);
        //     $input['image'] = "$postImage";
        // }else{
        //     unset($input['image']);
        // }
        $event = Event::find($request->id);
        $event->update($input);
  
        return redirect()->route('event.index')->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
    
        $event = Event::find($id);

        $event->delete();
  
        return redirect('/list-events');
    }
}
