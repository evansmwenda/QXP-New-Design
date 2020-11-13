@extends('layouts.home')

@section('main')
<div class="container" style="margin: 20px auto;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    
                    Before proceeding, please check your email for a verification link.
                   If you did not receive the email, submit the form below to request for another
                    <form class="d-inline" method="POST" action="/register/activate">@csrf
                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                           
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary" style="z-index: 0;">
                                {{ __('click here to request another') }}
                            </button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection