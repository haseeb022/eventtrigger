@extends('backend.layouts.main')

@section('main-container')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Events List</h4>
                  <p class="card-description float-right">
                  @if(Auth::user()->user_type==1)
                    <a href="/add-event" class="btn btn-primary mr-2">Add Event</a>
                    @endif
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Start-End Time
                          </th>
                          <!-- <th>
                            Country
                          </th> -->
                          <th>
                            Address
                          </th>
                          <th>
                            Fee
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($events as $event)
                        <tr>
                          <td>
                            {{$loop->index+1}}
                          </td>
                          <td>
                            {{$event->title}}
                          </td>
                          <td>
                            @if($event->event_category ==0)
                              <b>Offline</b>
                            @else
                            <b>Online</b>
                            @endif
                           
                          </td>
                          <td>
                            {{$event->date}}
                          </td>
                          <td>
                            {{$event->start_time}} <br> {{$event->end_time}}
                          </td>
                          <!-- <td>
                            {{$event->country}}
                          </td> -->
                          <td>
                            {{$event->address}}
                          </td>

                          <td>
                            {{$event->fee}}
                          </td>
                          @if(Auth::user()->user_type==1)
                          <td>
                            <form action="{{ route('event.destroy',$event->id) }}" method="POST">
                              <a class="btn btn-primary mr-2"  href="{{ route('event.edit', $event->id) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger mr-2">Delete</button>
                            </form>
                          </td>
                          @endif
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection