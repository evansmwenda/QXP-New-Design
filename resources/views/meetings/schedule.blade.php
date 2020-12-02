@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
    <div class="row meeting-bg">

        <div class="meeting-form">
            <!-- <div class="small-device-bg">
            <img src="http://127.0.0.1:8000/images/meetings/smaller-ui-devices.png" alt=""></div>-->
            <div class="row meeting-user">
                @include('partials.meeting_topbar')
            </div>
            <hr>
                <div class="meeting-dash-container">
                    <div class="meeting-dash-col-1">
                        <div class="meeting-dashboard-sidebar">
                            <div class="qxp-logo-meeting-dashboard">
                                <img src="{{asset('images/logo/logo.svg')}}" alt="qxp-logo">
                            </div>
                            <div class="meeting-menu">
                                @include('partials.meeting_sidebar') 
                            </div>
                        </div>
                    </div>
                    <div class="meeting-dash-col-2">
                        <div class="meeting-body">
                            {{-- create meeting --}}
                            <div class="meeting-content" id="create">

                                <!-- Creating Schedule Column -->
                                <div class="schedule-container">
                                    <!-- Heading title-->
                                    <div class="schedule-header title">
                                        Your Scheduled meetings 
                                        @if(Session::has("flash_message_error")) 
                                        <div class="alert alert-error alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{!! session( 'flash_message_error') !!}</strong>
                                        </div> 
                                        @endif 
                              
                                        @if(Session::has("flash_message_success")) 
                                        <div class="alert progress-bar-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <strong>{!! session('flash_message_success') !!}</strong>
                                        </div> 
                                        @endif
                                    </div>
                                    {{-- <div class="schedule-header">
                                        Clarice Peru Kibii
                                    </div> --}}

                                    <!--Schedule Column-->
                                    <div class="schedule-body">
                                        <div class="container">
                                            <div class="row title">
                                                <div class="col-md-4">Meeting Title</div>
                                                <div class="col-md-2">Meeting ID</div>
                                                <div class="col-md-4">time</div>
                                                <div class="col-md-2">Action</div>
                                            </div>
                                            <hr>
                                            <!-- Content -->
                                            @if(count($my_schedules)>1)
                                              @foreach ($my_schedules as $scheduled)
                                              <div class="row colored">
                                                <div class="col-md-4">{{$scheduled->title}}</div>
                                                <div class="col-md-2">{{$scheduled->meetingID}}</div>
                                                <div class="col-md-3">{{substr($scheduled->classTime,0,16)}}</div>
                                                <div class="col-md-2">
                                                    <div class="just-btn">
                                                      <form method="post" action="/live-schedule-start">{{ csrf_field() }}
                                                        <input type="hidden" value="{{$scheduled->id}}" name="meetingID">
                                                          <button type="submit" class="btn-schedule">Start</button>
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                              @endforeach
                                              @else
                                              <tr>
                      
                                                <td colspan="5" style="text-align: center">You dont have any scheduled events</td>
                                              </tr>
                                            @endif
                                            <form method="post" action="/live-schedule">{{ csrf_field() }}
                                                <div class="col-md-6">
                                                    <label>Meeting Title</label>
                                                    <input type="text" required class="form-control" name="title" placeholder="Meeting Title">
                                                    <label>Start Date</label>
                                                    <input type="datetime-local" required class="form-control" name="startdate">
                                                    <label>End Date</label>
                                                    <input type="datetime-local" required class="form-control" name="enddate">
                                                    <button type="submit">Save</button>
                                                </div>
                                             </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </div>


@endsection