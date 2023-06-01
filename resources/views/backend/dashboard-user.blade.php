@extends('backend.layouts.main')

@section('main-container')
   

 
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{Auth::user()->name}}</h3>
                </div>
              </div>
            </div>
          </div>
        
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Latest Events</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Event Title</th>
                            <th>Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Action</th>
                          </tr>  
                        </thead>
                        <tbody>
                          @foreach($events as $event)
                          <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{$event->start_time}}</td>
                            <td>{{$event->end_time}}</td>
                            <td class="font-weight-medium">@if($event->event_category=='1' || $event->event_category=='2')<a href="<?php echo $event->meeting_id; ?>" target="_blank" class="badge badge-success">Join Meeting</a>@else <a href="event-details" target="_blank" class="badge badge-primary">Meeting Detail</a>@endif</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            </div>
          </div>
        </div>


            

   @endsection