@extends('dashboardlayout.customlayout')
@section('title', 'Home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Ticket</div> -->

                <div class="panel-body">

                    

                    @if(Auth::user()->is_admin)

                        <h3>
                            See all <a href="{{ url('admin/tickets') }}">tickets</a>
                        </h3>
                    @else

                        <h3>
                            See all your <a href="{{ url('my_tickets') }}">tickets</a> or <a href="{{ url('new-ticket') }}">Create new ticket</a>
                        </h3>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection