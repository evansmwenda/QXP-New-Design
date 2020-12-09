@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
    <div class="row meeting-bg">

        <div class="meeting-form">

                <div class="meeting-dash-container">
                    <div class="meeting-dash-col-1">
                        <div class="meeting-dashboard-sidebar">
                            <div class="qxp-logo-meeting-dashboard">
                                <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
                            </div>
                            <hr>
                            <div class="meeting-menu">
                                @include('partials.meeting_sidebar') 
                            </div>
                        </div>
                    </div>
                    <div class="meeting-dash-col-2">
                        <div class="meeting-info" > @include('partials.meeting_topbar')</div>
                        <div class="meeting-body">
                            {{-- create meeting --}}
                            <div class="meeting-content" id="create">

                                <!-- Creating Schedule Column -->
                                <div class="schedule-container">
                                    <!-- Heading title-->
                                    <div class="schedule-header title">
                                        Your Scheduled meetings 
                                        <button class="create-schedule pull-right" style="background: #FD6C03;margin-top:-7px;margin-right:20px;" data-toggle="modal" data-target="#exampleModalCenter">Schedule</button>
                                        @if(Session::has("flash_message_error")) 
                                        <div class="alert alert-error alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <p style="color:red">{!! session( 'flash_message_error') !!}</p>
                                        </div> 

                                        @endif 
                              
                                        @if(Session::has("flash_message_success")) 
                                        <div class="alert progress-bar-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <p style="color: green">{!! session('flash_message_success') !!}</p>
                                        </div> 
                                        @endif
                                    </div>


                                    <!--Schedule Column-->
                                    <div class="schedule-body">
                                        <div class="container">
                                          <table class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <td>Title</td>
                                                <td class="meetid">Meeting ID</td>
                                                <td>Time</td>
                                                <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if(count($my_schedules)>0)
                                                @foreach ($my_schedules as $scheduled)
                                                <tr>
                                                  <td>{{$scheduled->title}}</td>
                                                  <td class="meetid">{{$scheduled->meetingID}}</td>
                                                  <td>{{substr($scheduled->classTime,0,30)}}</td>
                                                  <td>
                                                    <div class="col-md-1 just-btn">
                                                      <form method="post" action="/live-schedule-start">{{ csrf_field() }}
                                                        <input type="hidden" value="{{$scheduled->id}}" name="meetingID">
                                                          <button type="submit" class="btn-schedule">Start</button>
                                                        </form>

                                                </div>
                                                  </td>
                                                </tr>
                                                @endforeach
                                              @endif
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

    </div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          {{-- <div class="icon-only">
            <img src="http://127.0.0.1:8000/images/meeting-icon/meeting-room.png" alt="">
          </div> --}}
          <div class="qxp-logo-meeting-dashboard modal-design">
          <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" alt="qxp-logo">
          </div>
          <h5 class="modal-title" style="margin-left: 50px" id="exampleModalLongTitle">Schedule Meeting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <hr>
        <div class="row schedule-class">
            <form method="post" action="/live-schedule">{{ csrf_field() }}
                
                    <label>Meeting Title</label>
                    <input type="text" required class="form-control" name="title" placeholder="Meeting Title">

                    <div class="row">
                        <div class="col-md-6">
                          <label>Start Date</label>
                          <input type="datetime-local" required class="form-control" name="startdate">
                        </div>
                        <div class="col-md-6">
                          <label>Start Date</label>
                          <input type="datetime-local"required class="form-control" name="enddate">
                        </div> 
                        <div class="col-md-12">
                          <label>Attendees</label>
                          <input type="email" id="myEmail" placeholder="Separate emails with a comma" class="form-control" name="email">
                        </div>
                    </div>

                   
                    <label for="">Description</label>
                    <textarea name="description" required class="form-control" cols="100" id=""rows="5"></textarea>
                    
                    <button type="submit">Save</button>
              
             </form>
        </div>

      </div>
    </div>

  </div>
<br><br><br>
<!-- check the dates and time if is within 24 hours -->
<script type="text/javascript">
 document.getElementById("myEmail").multiple = true;
</script>
@endsection