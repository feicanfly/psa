@extends('layout')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<form method="POST" action="/auth/login">
	    {!! csrf_field() !!}

	    <div class="form-group">
	        <lable for="phone">电话</lable>
	        <input type="phone" name="phone" id="phone" class="form-control" value="{{ old('email') }}" required>
	    </div>

	    <div class="form-group">
	        <lable for="password">密码</lable>
	        <input type="password" name="password" id="password" class="form-control" required>
	    </div>

	    <div class="form-group">
	        <input type="checkbox" name="remember"> 下次自动登陆
	    </div>

	    <div class="form-group">
	        <button type="submit" class="btn btn-default">登陆</button>
	       <a href="/auth/register" class="btn btn-default">注册</a>
	    </div>

	    @include('errors')
	</form>
	<div>
<div>
@stop