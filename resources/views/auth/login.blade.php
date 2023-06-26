
@extends('layouts.app')

@section('content')
<section class="login">
  <div class="login-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
          <div class="login-wrapper">
            <div class="login-form-wrapper">
              <div class="login-header-col">Login to your account</div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-form-col">
                  <div class="login-form-row">

                    <span class="login-input-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <input class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="login-form-row">
                    <span class="login-input-icon"><i class="fa fa-lock" aria-hidden="true"></i></i></span>
                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
                  </div>
                  <div class="login-form-row remember-col">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember"> {{ __('Remember Me') }}</label> 
                    @if (Route::has('password.request')) 
                    <a href="{{ route('password.request') }}" class="login-form-text">{{ __('Forgot Your Password?') }}</a>
                    @endif
                  </div>
                  <div class="login-form-row">
                    <button type="submit" name="login" class="submit-button">{{ __('Login') }}</button>
                  </div>
                  <div class="login-form-row login-form-text">Don't have an account yet? Please <a href="{{route('register')}}" class="login-form-text">sign up</a></div>                
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>


@endsection