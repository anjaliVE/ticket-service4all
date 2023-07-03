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

                        <div class="login-form-row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="form-col-full">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="login-form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Email</label>

                            <div class="form-col-full">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="login-form-row{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Subject</label>

                            <div class="form-col-full">
                                <input id="subject" type="subject" class="form-control" name="subject" value="{{ old('subject') }}">

                                @if ($errors->has('subject'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="login-form-row{{ $errors->has('zip_code') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Zip Code</label>

                            <div class="form-col-full">
                                <input id="zip_code" type="zip_code" class="form-control" name="zip_code" value="{{ old('zip_code') }}">

                                @if ($errors->has('zip_code'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('zip_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       


                        <div class="login-form-row{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="form-col-full">
                                <select id="category" type="category" class="form-control" name="category">
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
                        </div>

                        <div class="login-form-row{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="form-col-full">
                                <select id="priority" type="" class="form-control" name="priority">
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

                        <div class="login-form-row{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="form-col-full">
                                <textarea rows="10" id="message" class="form-control" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>

                        
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