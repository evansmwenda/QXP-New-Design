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


    <div>
     <h2>Previous Meeting Recordings</h2>
    </div>

    <div class="schedule-body recordings">
      <div class="container">

        <div class="row title">
          <div class="col-md-6">Recording Name</div>
          <div class="col-md-4">Recording Length</div>
          <div class="col-md-2">Downloads</div>
        </div>
        <br>

        @if(count($recordings) > 0)

        @foreach($recordings as $key=>$recording)
        <div class="row colored">
          <div class="col-md-6">{{$recording->name ?? ''}}</div>
          <div class="col-md-4">{{$recording->length}} min(s)</div>
          <div class="col-md-2"><a href="{{$recording->url}}"><button class="download-icon"><i class="fa fa-musica" aria-hidden="true"></i></button></a></div>
        </div>
        <br>

        @endforeach
        @else
        <div class="row text-center">
          <h4 class="text-muted" style="margin-top: 50px">You have no recorded meetings</h4>
        </div>
          
        @endif

       

      </div>
    </div>



  </div>
</div>
</div>
{{-- end meeting info --}}
            
                  
   
           </div>
 
         </div>
        </div>
        
      </div>
    </div>

</div>
<!-- Modal -->
@endsection
