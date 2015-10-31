@extends('layout')

@section('content')

      <div class="row">
      		<div class="col-md-8 col-md-offset-2">
                        <p class="tab-1 row">所有好友</p>
                        @include('friends.friendList')
      		</div>
      </div>


@stop