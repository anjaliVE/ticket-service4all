@extends('dashboardlayout.customlayout')
@section('title', 'Home')
@section('content')


<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"> UserInfo</i>
                </div>

                <div class="panel-body">
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>
                                            {{ $users->id }}
                                        </td>
                                        <td>
                                            
                                                {{ $users->name }} 
                                        </td>
                                        
                                        <td>
                                            {{  $users->email }}
                                        </td>
                                         <td>
                                            <a href="{{route('edit-userinfo')}}"><i class="fa-fa-eye"></i>Edit</a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
@endsection
