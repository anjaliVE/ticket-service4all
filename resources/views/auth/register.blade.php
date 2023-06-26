
@extends('layouts.app')

@section('content')
<section class="login">
  <div class="login-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
          <div class="login-wrapper">
            <div class="login-form-wrapper">
              <div class="login-header-col">{{ __('Register') }}</div>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login-form-col">
                  <div class="login-form-row">
                    <span class="login-input-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                     <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
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
                   <div class="login-form-row">
                      <span class="login-input-icon"><i class="fa fa-lock" aria-hidden="true"></i></i></span>
                          <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                  </div>
                  
                  <div class="login-form-row">
                    <button type="submit"  class="submit-button">{{ __('Register') }}</button>
                  </div>
                               
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