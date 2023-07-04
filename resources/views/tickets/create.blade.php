@extends('dashboardlayout.customlayout')
@section('title', 'Open Ticket')
@section('content')

<section class="create-ticket">
  <div class="login-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
          <div class="login-wrapper">
            <div class="login-form-wrapper create-ticket-form-wrapper">
              <div class="login-header-col verfication-header">Create Ticket Request</div>
              
              <div class="login-form-col">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST">
                    {!! csrf_field() !!}
                    <div class="login-form-row">
                        <div class="form-col">
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name" class="form-input">
                            @if ($errors->has('name'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-col">
                            <input id="email" type="email" placeholder="Email" class="form-input" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="login-form-row">
                        <div class="form-col">
                            <input id="subject" type="text" class="form-input" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                            @if ($errors->has('subject'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-col">
                            <input id="zip_code" type="text" placeholder="Area code with map" class="form-input" name="zip_code" value="{{ old('zip_code') }}">
                            @if ($errors->has('zip_code'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('zip_code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="login-form-row">
                        <div class="form-col">
                            <select id="category" class="form-input" name="category">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-col">
                            <select id="priority" type="" class="form-input" name="priority">
                                <option value="">Select Priority</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                            @if ($errors->has('priority'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('priority') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="login-form-row">
                        <div class="form-col-full">
                            <textarea placeholder="Message" name="message"></textarea>
                            @if ($errors->has('message'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>     
                               
                    <!-- <div class="login-form-row create-ticket-attachment">
                    <div class="form-col-full">
                        <input class="custom-file-input" type="file">
                    </div>                
                    </div> -->
                    <div class="login-form-row verification-submit-button">
                        <button type="submit" name="login" class="submit-button">Create Ticket</button>
                    </div>    
                </form>                          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>


@endsection