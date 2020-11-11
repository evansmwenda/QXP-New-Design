@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="row meeting-user">
        <div class="col-sm-4"><h1>Welcome to QXP-Meeting</h1>
        </div>
        <div class="col-sm-6">Logged in as: {{\Auth::user()->name}}</div>
        
      </div>
      <hr>
      <div class="row">
        <div class="meeting-menu">
          <ul>
            <li onclick="meetingPlans()">Meeting Plans</li>
            <li onclick="createMeeting()">Create Meeting</li>
            <li onclick="subscription()">Renew Subsription</li>
          </ul>
        </div>
        <div class="meeting-body">
          {{-- Meeting Plan --}}
          <div class="row" id="plans">
            <div class="meeting-basic">
                <div class="meeting-sm-header">
                  <h3>Basic</h3>
                  <p>Personal Meeting</p>
                </div>
                <div class="meeting-sm-body">
                  <h2>FREE</h2>
                  <ul>
                    <li><span class="fa fa-check"></span> Host up to 100 participants</li>
                    <li> <span class="fa fa-check"></span> Unlimited 1 to 1 meetings</li>
                    <li> <span class="fa fa-check"></span> 40 minutes limit on group meeting</li>
                    <li><span class="fa fa-check"></span>  Unlimited number of meetings</li>
                    <li> <span class="fa fa-check"></span> Instant or scheduled meetings</li>
                    <li> <span class="fa fa-check"></span> Private and group chat with Raise hands feature</li>
                    <li> <span class="fa fa-check"></span> Screen share & Whiteboard</li>
                    <li> <span class="fa fa-check"></span> Personal room or meeting ID*** Create your own online meeting room.</li>
                  </ul>
                  <button onclick="createMeeting()">Get Started</button>
                </div>
            </div>
            <div class="meeting-basic">
              <div class="meeting-sm-header">
                <h3>Pro</h3>
                <p>Small Teams
                </p>
              </div>
              <div class="meeting-sm-body">
                <h2>Ksh 1,300 / Month</h2>
                <ul>
                  <li><span class="fa fa-check"></span>Host up to 100 participants</li>
                  <li> <span class="fa fa-check"></span>Unlimited 1 to 1 meetings</li>
                  <li> <span class="fa fa-check"></span>40 minutes limit on group meeting</li>
                  <li> <span class="fa fa-check"></span>Unlimited number of meetings</li>
                  <li> <span class="fa fa-check"></span>Instant or scheduled meetings</li>
                  <li> <span class="fa fa-check"></span>Private and group chat with Raise hands feature</li>
                  <li> <span class="fa fa-check"></span>Screen share & Whiteboard</li>
                  <li> <span class="fa fa-check"></span>Personal room or meeting ID*** Create your own online meeting room.</li>
                </ul>
                <button onclick="subscription()">Subscribe</button>
              </div>
          </div>
          </div>
           {{-- create meeting --}}
           <div class="meeting-content" id="create">
              <h2>Creeate or Join Meeting</h2>
              <div class="row">
                {{-- <button><i class="fa fa-group"></i> Join Meeting</button>  --}}
                <button style="background: #0099FE" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-clock-o"></i> Create Meeting</button> 
              </div>
              <hr>
              <p> Please enter ID to join meeting or create a new meeting</p> 
              <form method="post" action="/joinmeeting">{{ csrf_field() }}
                  <input type="text" class="form-control col-md-8" name="meetingID" required placeholder="Enter Meeting Id">
                  <button type="submit" style="background:#FD6C03" >Join Meeting</button> 
              </form>
           </div>
           {{-- Subscribe Here --}}
           <div class="meeting-subscription" id="subscribe">
            <h2>Renew Subscription</h2>
            @if(isset($iframe_src))
            <div class="col-xs-12 col-sm-12">
                <iframe src="{{ $iframe_src }}" width="100%" height="700px" scrolling="no" frameBorder="0">
                  <p>Browser unable to load iFrame</p>
                </iframe>
            </div>
          @endif
  
          </div>
         {{-- Error Display  --}}
         @if(Session::has("flash_message_error"))
         <div class="errors">
            {!! session('flash_message_error') !!}
         </div>
         @endif
         @if(Session::has("flash_message_success")) 
         <div class="errors">
          {!! session('flash_message_success') !!}
         </div>
         @endif

        </div>
      </div>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create Meeting</h5>
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
                </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create </button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function createMeeting(){
      document.getElementById('subscribe').style.display="none";
      document.getElementById('create').style.display="block";
      document.getElementById('plans').style.display="none";
    }
    function subscription(){
      document.getElementById('create').style.display="none";
      document.getElementById('subscribe').style.display="block";
      document.getElementById('plans').style.display="none";
    }
    // meeting plans
    function meetingPlans(){
      document.getElementById('create').style.display="none";
      document.getElementById('plans').style.display="block";
      document.getElementById('subscribe').style.display="none";
    }
  </script>
@endsection