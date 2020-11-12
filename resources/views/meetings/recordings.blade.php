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
                <table class="table">
                    @if(count($recordings) > 0)
                        <thead>
                            <tr>
                            <th>Title</th>
                            <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recordings as $key=>$recording)
                        <tr>
                            <td>{{$recording->name ?? ''}}</td>
                            <td>{{$recording->length}} min(s) </td>
                        </tr>
                            {{-- <a href="{{$recording->url}}" target="_blank">{{$recording->name ?? ''}}</a>
                            <p>{{$recording->length}} min(s) </p> --}}
                        @endforeach
                        </tbody>
                   @else
                        <p class="text-center">
                            You have no recorded meetings
                        </p>
                   @endif

                    
                    
                      
                    
                  </table>





                   
                 {{-- <button><i class="fa fa-group"></i> Join Meeting</button>  --}}
                {{-- <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Primary Panel title</h5>
                        <p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the
                        panel's content.</p>
                    </div>
                </div> --}}
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