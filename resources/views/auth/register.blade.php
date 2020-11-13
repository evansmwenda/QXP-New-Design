@extends('layouts.home')

@section('main')
    <div class="meeting-login-design">
        <div class="login-pref login-meeting-overlay">
        
                
                <div class="col-md-6">
                    <div class="register-spacer">
                        <img src="http://0.gravatar.com/avatar/fcf3541949a1700be9f391b9430484b6?s=300&d=mm&r=g" alt="">
                      <h1>Lets Get you Started</h1>
                      <p>For meeting and working online with teleconferencing, video conference, remote working, work from home and work from anywhere</p>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="register-custom-login">
                       
                           <h1>Sign Up for Free</h1>
                      
                          {{-- login form --}}
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                           
                            <div class="form-group row">
                                <label for="email" class="col-form-label text-md-right">{{ __('Name') }}</label>
                                    
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>S
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>
                                <div class="form-group row">
                                <label for="Number" class="col-form-label text-md-right">{{ __('Mobile Number') }}</label>
    
                                
                                    <input id="number" type="number" class="form-control" name="phone" required >
                               
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
    
                              
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>


                          </form>
                
                </div>
        </div>
           
    </div>

@endsection