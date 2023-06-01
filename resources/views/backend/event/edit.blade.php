@extends('backend.layouts.main')

@section('main-container')

<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Event Details</h4>
                  <form  class="form-sample"action="{{ route('event.update') }}" method="POST">
                    <input type="hidden" name="id" value="{{$event->id}}" />
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Event Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" value="{{$event->title}}" />
                            @if ($errors->has('title'))
                              <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Event Category</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="event_category" value="{{$event->event_category}}">
                              <option value="0">Offline</option>
                              <option value="1" >Online</option>
                              <option value="2" >Both</option>
                            </select>
                            @if ($errors->has('event_category'))
                              <span class="text-danger">{{ $errors->first('event_category') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Event Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" value="{{$event->date}}"/>
                            @if ($errors->has('date'))
                              <span class="text-danger">{{ $errors->first('date') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Start Time</label>
                          <div class="col-sm-9">
                            <input type="time" class="form-control" name="start_time" placeholder="00:00:00" value="{{$event->start_time}}"/>
                            @if ($errors->has('start_time'))
                              <span class="text-danger">{{ $errors->first('start_time') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">End Time</label>
                          <div class="col-sm-9">
                            <input type="time" class="form-control" name="end_time" placeholder="00:00:00" value="{{$event->end_time}}"/>
                            @if ($errors->has('end_time'))
                              <span class="text-danger">{{ $errors->first('end_time') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Total Seats</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="total_seats" value="{{$event->total_seats}}" />
                            @if ($errors->has('total_seets'))
                              <span class="text-danger">{{ $errors->first('total_seets') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Event Fee</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="fee" value="{{$event->fee}}"/>
                            @if ($errors->has('fee'))
                              <span class="text-danger">{{ $errors->first('fee') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="country" value="{{$event->country}}">
                            @foreach($country as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                            </select>
                            @if ($errors->has('country'))
                              <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="city" value="{{$event->city}}" />
                            @if ($errors->has('city'))
                              <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >Postcode</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="post_code" value="{{$event->post_code}}"/>
                            @if ($errors->has('post_code'))
                              <span class="text-danger">{{ $errors->first('post_code') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="address">{{$event->address}}</textarea>
                            @if ($errors->has('address'))
                              <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Event Detail</label>
                          <div class="col-sm-12">
                            <textarea type="text" class="form-control" name="description">{{$event->description}}</textarea>
                            @if ($errors->has('description'))
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row" style="float:right">
                        </br>
                        <a href="/list-events" class="btn btn-light mr-2">Back to Events</a>
                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                       
                    </div>
                  </form>
                </div>
              </div>
            </div>

@endsection