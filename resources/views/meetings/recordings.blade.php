@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="meeting-menu">
            @include('partials.meeting_sidebar')
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="meeting-body">
            {{-- create meeting --}}
            <div class="meeting-content" id="create">
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
               <h2>Previous Meeting Recordings</h2>
               <div class="row">
                 {{-- <button><i class="fa fa-group"></i> Join Meeting</button>  --}}
                 <button style="background: #0099FE" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fa fa-clock-o"></i> Create Meeting</button> 
               </div>
               <hr>
               <p> Please enter ID to join meeting or create a new meeting</p> 

            </div>
         </div>
        </div>
        
        
      </div>
    </div>

</div>

@endsection