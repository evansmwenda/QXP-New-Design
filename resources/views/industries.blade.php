@extends('layouts.home')

@section('main')
	<!-- #code here -->
	<div class="qxp-industries-bg" style="display: flex;justify-content: center;align-items: center;width:100%;">
		<div class="container">
			<div class="row text-center">
				<!-- <div class="col-sm-12 col-md-12"><h2 style="color: #079DFF">Industries</h2 style="color: #079DFF"></div> -->
				<div class="col-sm-12 col-md-12">
					<div class="spacer" >
						<h2 style="color: #079DFF">Industries</h2>
						<p style="color: #060646;padding-top: 5px;font-size: 1.1em">QXP has made it easy for businesses across industries to collaborate easily and faster than before. Team can collaborate seamlessly through any browser, computer, phone or tablet and remain productive and connected anywhere. All in one platform.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 30px;">
		<div class="row">
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards" style="">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Education</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Healthcare</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Financial Services</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Manufacturing</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Legal</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Government & Non-profit organizations</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Sports and Entertainment</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Sales</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Startup</h5>
				  </div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="card text-center my-cards">
				  <div class="card-body">
				  	<img src="{{asset('images/icons/007-laptop.svg')}}" width="50" height="60">
				    <h5 class="card-title" style="margin-top: 20px">Information technology</h5>
				  </div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container">
		<div class="row text-center" style="height: 200px;">
			<div class="col-md-5 col-sm-10" style="margin:auto;">
				<h2 style="font-weight: 600;color:#079DFF">Interested? Lets' get in touch</h2>
				<button class="btn btn-my-warning" style="margin-top: 20px;">GET STARTED TODAY</button>
			</div>	
		</div>
	</div>

@endsection