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
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <td>Recording Name</td>
              <td>Recording Length</td>
              <td>Downloads</td>
        
            </tr>
          </thead>
          <tbody>
            @if(count($recordings)>0)
              @foreach ($recordings as $recording)
              <tr>
                <td>{{$recording->name ?? ''}}</td>
                <td>{{$recording->length}} min(s)</td>
                <td><a href="{{$recording->url}}"><button class="download-icon"><i class="fa fa-musica" aria-hidden="true"></i></button></a>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="3" style="text-align: center">You have no recorded Meeting</td>
              </tr>
            @endif
          </tbody>
        </table>
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
