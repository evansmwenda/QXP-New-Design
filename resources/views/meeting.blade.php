@extends('layouts.home')

@section('main')

<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
     <!-- <div class="small-device-bg">
      <img src="http://127.0.0.1:8000/images/meetings/smaller-ui-devices.png" alt=""></div>-->
      {{-- <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div> --}}
   
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

                <div class="create-join-container">
                  <h2>{{\Auth::user()->name}}'s Meeting Room</h2>
          
                 <p>Connecting <span class="dot-colored">.</span> People <span class="dot-colored">.</span> Together</p>
                 <div class="meeting-desc-italic">
                    <i>For meeting and working online with teleconferencing, video conference, remote working, work from home and work from anywhere</i>
                    <hr>
                  </div> 
                 <br>
                 <div class="meeting-desc-button-1">
                    <button data-toggle="modal" data-target="#exampleModalCenter"> Start a Meeting</button>
                  </div>
                  <div class="meeting-desc-button-2">
                    <button data-toggle="modal" data-target="#joinmeeting">Join</button>
                  </div> 
                  <div class="meeting-desc-button-3"> 
                    <a href="/schedule-meeting"><button>Schedule</button> </a>
                  </div>
                </div>
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
                  <hr>
                  <h3 style="color: #060646; font-weight:500; margin-top:20px; font-size:15px">Upcoming Metings</h3>
                  @if(count($my_schedules)>0)
                  @foreach ($my_schedules as $scheduled)
                  <div class="row colored">
                    <div class="col-md-4">{{$scheduled->title}}</div>
                    <div class="col-md-1">{{$scheduled->meetingID}}</div>
                    <div class="col-md-3">{{$scheduled->today}}</div>
                    <div class="col-md-1">{{$scheduled->time}}</div>
                    <?php
                    $time=substr(date("Y-m-d H:i:A"),10,16);
                    if($scheduled->time > $time){
                      ?>

                      <?php
                    }else{
                      ?>
                      <div class="col-md-2 just-btn">



                    </div>
                    <?php
                                        
                  }
                    ?>

                </div>
                <br>
                  @endforeach
                  {{-- {{$my_schedules->links()}} --}}
                  @else
                  <tr >
                    <td >You currently don`t have any scheduled meetings for today</td>
                  </tr>
                  
                @endif
                </div>

              <!-- Recordings List 
              <div class="recordings-list-container">
                <div class="recordings-header">
                  <div class="rec-title">Title</div>
                  <div class="vertical-line"></div>
                  <div class="recording-title">Recording</div>
                </div>
               this is where the recording system is added
                <div class="recordings-placeholder">
                  <img src="http://127.0.0.1:8000/images/meetings/recording-placeholder.png" alt="">
                </div>
              </div>
              End of recording list-->

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
        <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
        </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/schedule" method="post">
      @csrf 
          <div class="modal-body create-meeting">
              <div class="form-group">
                  <label for="">Topic</label>
                  <input type="text" name="topic" required class="form-control" placeholder="Enter Meeting Title">
                  <input type="hidden" name="classTime" value="2020-05-12T08:00">
                  <button type="submit" style="background-color: #11BECC; width:100px" class="create-meeting-button">Create </button>

              </div>
          
          </div>

       
      </form>
    </div>
  </div>

</div>
{{-- join modal --}}
<div class="modal fade" id="joinmeeting" tabindex="-1" role="dialog" aria-labelledby="joinmeeting" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <div class="icon-only">
          <img src="http://127.0.0.1:8000/images/meeting-icon/meeting-room.png" alt="">
        </div> --}}
        <div class="qxp-logo-meeting-dashboard modal-design">
        <img src="{{asset('images/logo/bgAsset-4-2.svg')}}" width="100" alt="qxp-logo">
        </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

          <div class="modal-body create-meeting">
            
              <p> Enter meeting ID to join meeting</p> 
              <form method="post" action="/joinmeeting">{{ csrf_field() }}
                  <input type="text" class="form-control " name="meetingID" required placeholder="Enter Meeting Id">
               
                  <button type="submit" style="background:#71CA52">Join Meeting</button> 
              </form>
        
          </div>
    </div>
  </div>

</div>
@endsection