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
            <li onclick="createMeeting()">QXP-Meetings</li>
            <li onclick="createMeeting()">Create Meeting</li>
            <li onclick="location.href='/home/subscribe'">Renew Subsription</li>
          </ul>
        </div>
        <div class="meeting-body">
           {{-- create meeting --}}
           <div class="meeting-content" id="create">
              <h2>Create or Join Meeting</h2>
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
              <p>
                Package: Student - QXP Academy <span style="color:green">(Active)</span>
              </p>
              <p class="card-text">Expiry Date : <span style="color:green;">09-12-2020 10:00AM</span></p>
              <a href="/home/subscribe/1" class="btn btn-primary">Renew Subscription</a>
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
    }
    function subscription(){
      document.getElementById('create').style.display="none";
      document.getElementById('subscribe').style.display="block";
    }
  </script>
@endsection