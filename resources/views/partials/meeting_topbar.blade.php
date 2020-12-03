{{-- <div class="info-1">Welcome to QXP-Meeting
  <div class="vertical-line"></div>
</div> --}}

<div class="row">
  <div class="col-md-7">
    Logged In As: <span class="username-meeting-info">{{\Auth::user()->name}}</span><br> 
  </div>
  <div class="col-md-5">
    @if($active ?? '')
    Meeting Subscription :
      <span style="color:green;" >Active</span><br>
    Package Subscribed : <span style="color:green;" >
    @if($subscription[0]->package_id ==1)
    Meeting Pro
    @else
    Free Version
    @endif
    </span>
    @else
      
    @endif  
  </div>
</div>



