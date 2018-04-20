
@extends('layouts.app')

@section('title', 'SOWEDA/WELCOME')


@section('footer')
    @parent
@endsection

@section('content')

    <div class="col-md-5 offset-1" style="margin-top: 12px;" >
        <div class="card" >
            <div class="card-header">
                PERSONELS
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item active" id="titre">Subscribe to Notifications</li>

                    @foreach($users as $user)

                        <li class="list-group-item">
                        <!--<span class="pull-left">{{json_encode($user)}}</span>-->
                            <span class="pull-left">{{$user['name']}}</span>
                            <span class="pull-left">&nbsp;&nbsp;&nbsp;{{$user['email']}}</span>
                            <span class="pull-left">&nbsp;&nbsp;&nbsp;{{$user['phone']}}</span>
                            <span class="pull-left">&nbsp;&nbsp;&nbsp;{{$user['token']}}</span>
                            <span class="pull-left" id="{{$user['phone']}}">&nbsp;&nbsp;&nbsp;<a href="#" class="details" id="{{$user['name']}}">Details</a></span>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
