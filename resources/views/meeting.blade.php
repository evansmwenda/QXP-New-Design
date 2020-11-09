@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
       
        <div class="meeting-user">
          <h2>Welcome To QXP-Meeting</h2>
          <hr>
          <h3>User: {{\Auth::user()->name}}</h3>
          <hr>
          
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
      </div>
       <div class="meeting-content">
           <div class="row">
              <button><i class="fa fa-group"></i> Join Meeting</button> 
              <button data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-clock-o"></i> Create Meeting</button> 
          </div>
           <hr>
           <br>
            <p> Please enter ID to join meeting or create a new meeting</p> 
            <form method="post" action="/joinmeeting">{{ csrf_field() }}
                <input type="text" class="form-control" name="meetingID" required placeholder="Enter Meeting Id">
                <button type="submit">Join Meeting</button> 
            </form>

       </div>
       @if(Session::has("flash_message_error"))
       <div class="Join-link">
       {!! session('flash_message_error') !!}
     </div>
     @endif
   
     @if(Session::has("flash_message_success")) 
     <div class="Join-link">
      {!! session('flash_message_success') !!}
     </div>
     @endif
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
@endsection