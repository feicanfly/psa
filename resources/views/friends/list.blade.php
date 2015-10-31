@extends('layout')
@section('content')
    <div class="row">
    		<div class="col-md-3">
            <p class="tab-1 row">在线好友</p>
            @include('friends.friendList')
    		</div>
    		@include('friends.maps')
    </div>
@stop