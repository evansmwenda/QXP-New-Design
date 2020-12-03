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
            {{-- Subscribe Here --}}
            <div class="meeting-content" id="create">
             <h2>Meeting Subscription</h2>
                Account Name: <span style="color:green;" >{{\Auth::user()->name}}</span>
                <br>
                Package Subscribed:<span style="color:green;" >
                @if($subscription[0]->package_id ==1)
                Meeting Pro
                @else
                Free Version
                @endif
                </span>
                <br>
               <a href="/home/subscribe/{{$subscription[0]->package->id ?? '1'}}" id="pesapal" class="btn btn-primary" style="background: #11BECC;padding:5px; border:1px solid transparent; margin-top:15px; font-size:13px;border-radius:5px;text-transform:none">
                 @if($subscription[0]->package_id ==1)
                 Renew Subscription
                 @else
                 Subscribe
                 @endif
              </a>
             @if(isset($iframe_src))
             <script>
               document.getElementById("pesapal").style.display="none";
             </script>
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