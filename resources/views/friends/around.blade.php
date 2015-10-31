@extends('layout')

@section('content')
      <div class="row">
      		<div class="col-md-3 user-list">
                        <p class="tab-1 row">附近的车</p>
                        @include('friends.friendList')
      		</div>
      		@include('friends.maps')
      </div>
@stop