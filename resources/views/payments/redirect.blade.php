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
            <li onclick="location.href='/home/subscribe'">Renew Subsription</li>
          </ul>
        </div>
        <div class="meeting-body">
           {{-- Subscribe Here --}}
           <div>
            <h2>Payment Status</h2>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <b>PAYMENT STATUS</b>
                <blockquote>
                    <b>Merchant reference: </b> <?php echo $reference; ?><br />
                    <b>Pesapal Tracking ID: </b> <?php echo $tracking_id; ?><br />
                    <b>Status: </b> <?php echo $status; ?><br />
                </blockquote>
                <p style="font-size: 16px">Your payment is being processed. We will notify you once it is completed.</p>
                    <hr style="color: #C0C0C0">
                    <div>
                      <button class="btn btn-primary whited"
                      onclick="window.parent.location = window.parent.location.href">Check Status</button>
                    <a style="text-decoration:none;" href="/home" class="btn btn-primary whited" role="button" aria-pressed="true">Goto Homepage</a>
                    </div><br/><br/><br/>
            </div>
  
          </div>

        </div>
      </div>
    </div>

</div>
<!-- Modal -->
@endsection