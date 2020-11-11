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
            <li onclick="location.href='/home'">Create Meeting</li>
            <li onclick="location.href='/home/plans'">Meeting Plans</li>
            <li onclick="location.href='/home/subscribe'">Subscribe</li>
          </ul>
        </div>
        <div class="meeting-body">
          {{-- Meeting Plan --}}
          <div class="row" id="plans">
            <div class="meeting-basic">
                <div class="meeting-sm-header">
                  <h3>Basic</h3>
                  <p>Personal Meeting</p>
                </div>
                <div class="meeting-sm-body">
                  <h2>FREE</h2>
                  <ul>
                    <li><span class="fa fa-check"></span> Host up to 100 participants</li>
                    <li> <span class="fa fa-check"></span> Unlimited 1 to 1 meetings</li>
                    <li> <span class="fa fa-check"></span> 40 minutes limit on group meeting</li>
                    <li><span class="fa fa-check"></span>  Unlimited number of meetings</li>
                    <li> <span class="fa fa-check"></span> Instant or scheduled meetings</li>
                    <li> <span class="fa fa-check"></span> Private and group chat with Raise hands feature</li>
                    <li> <span class="fa fa-check"></span> Screen share & Whiteboard</li>
                    <li> <span class="fa fa-check"></span> Personal room or meeting ID*** Create your own online meeting room.</li>
                  </ul>
                  <button  onclick="location.href='/home/subscribe/7'">Get Started</button>
                </div>
            </div>
            <div class="meeting-basic">
              <div class="meeting-sm-header">
                <h3>Pro</h3>
                <p>Small Teams
                </p>
              </div>
              <div class="meeting-sm-body">
                <h2>Ksh 1,300 / Month</h2>
                <ul>
                  <li><span class="fa fa-check"></span>Host up to 100 participants</li>
                  <li> <span class="fa fa-check"></span>Unlimited 1 to 1 meetings</li>
                  <li> <span class="fa fa-check"></span>40 minutes limit on group meeting</li>
                  <li> <span class="fa fa-check"></span>Unlimited number of meetings</li>
                  <li> <span class="fa fa-check"></span>Instant or scheduled meetings</li>
                  <li> <span class="fa fa-check"></span>Private and group chat with Raise hands feature</li>
                  <li> <span class="fa fa-check"></span>Screen share & Whiteboard</li>
                  <li> <span class="fa fa-check"></span>Personal room or meeting ID*** Create your own online meeting room.</li>
                </ul>
                <button onclick="location.href='/home/subscribe/8'">Subscribe</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

</div>

@endsection