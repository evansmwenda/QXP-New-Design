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
      Meeting Subscription :
      <span style="color:red;" >Active</span><br>
    Package Subscribed : <span style="color:green;" >
    Free Version
    @endif  
    <span data-toggle="modal" data-target="#menu" class="fa fa-bars fa-2x pull-right" style="margin-right: 20px;margin-top:-50px"></span>
  </div>
  
</div>

{{-- join modal --}}
<div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="joinmeeting" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <ul class="sidebar-meeting-list" style="list-style: none">

          <!-- Create Meeting -->
              <div class="list-icons">
                <div class="icon-only">
                  <i class="fa fa-home" aria-hidden="true"></i>
                 <!-- <img src="http://127.0.0.1:8000/images/icons/meetingIcon.svg" alt=""> -->
                  {{-- <img src="{{asset('images/meeting-icon/video-conference-65.png')}}" alt=""> --}}
                </div>
                <div class="list-only" style="color:#0099FE;font-weight:bold;">
                  <li onclick="location.href='/home'">Home</li>
                </div>
                <hr>
              </div>
      
              <!-- Schedule -->
              <div class="list-icons">
                <div class="icon-only">
                  <i class="fa fa-calendar" aria-hidden="true"></i>
                  {{-- <img src="{{asset('images/meeting-icon/icons8-schedule-96.png')}}" alt=""> --}}
                </div>
                <div class="list-only">
                  <li onclick="location.href='/schedule-meeting'">Schedule</li>
                </div>
                <hr>
              </div>
              
              <!-- Meeting Plans -->
              {{-- <div class="list-icons">
                <div class="icon-only">
                  <img src="{{asset('images/meeting-icon/meeting-room.png')}}" alt="">
                </div>
                <div class="list-only">
                  <li onclick="location.href='/home/plans'">Meeting Plans</li>
                </div>
                <hr>
              </div>  --}}
      
              <!-- Billing -->
              <div class="list-icons">
                <div class="icon-only">
                  <i class="fa fa-money" aria-hidden="true"></i>
                  {{-- <i class="fa fa-calculator" aria-hidden="true"></i> --}}
                  {{-- <img src="{{asset('images/meeting-icon/billing-icon.png')}}" alt=""> --}}
                </div>
                <div class="list-only">
                  <li onclick="location.href='/home/subscribe'">Billing</li>
                </div>
                <hr>
              </div> 
      
      
              <!-- Recordings -->
               <div class="list-icons">
                <div class="icon-only">
                  <i class="fa fa-video-camera" aria-hidden="true"></i>
                  {{-- <img src="http://127.0.0.1:8000/images/meeting-icon/records-logo.png" alt=""> --}}
                </div>
                <div class="list-only">
                  <!-- this support button is using the recordings link -->
                  <li onclick="location.href='/home/recordings'">Recordings</li>
                </div>
                <hr>
              </div> 
      
              <!-- Support -->
              <div class="list-icons">
                <div class="icon-only">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  {{-- <img src="{{asset('images/meeting-icon/support-logo.png')}}" alt=""> --}}
                </div>
                <div class="list-only">
                  <!-- this support button is using the recordings link -->
                  <li onclick="location.href='/support'">Support</li>
                </div>
              </div>
      
            <!-- End of Lists and Icons -->
      </ul>
    </div>
  </div>

</div>


