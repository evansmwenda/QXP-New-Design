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
      <div class="row">
        <div class="meeting-menu">
          <ul>
            <li onclick="location.href='/home'">Create Meeting</li>
            <li onclick="location.href='/home/plans'">Meeting Plans</li>
            <li onclick="location.href='/home/subscribe'">Subscribe</li>
          </ul>
        </div>
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
<!-- Modal -->
@endsection