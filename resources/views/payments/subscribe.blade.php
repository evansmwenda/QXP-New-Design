@extends('layouts.home')

@section('main')
<div class="row meeting-top-row">
</div>
<div class="row meeting-bg">

    <div class="meeting-form">
      <div class="row meeting-user">
        @include('partials.meeting_topbar')
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="meeting-menu">
            @include('partials.meeting_sidebar')
          </div>
        </div>
        <div class="col-sm-12 col-md-8">
          <div class="meeting-body">
            {{-- Subscribe Here --}}
            <div>
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
 
         </div>
        </div>
        
      </div>
    </div>

</div>
<!-- Modal -->
@endsection