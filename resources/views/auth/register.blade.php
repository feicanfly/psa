@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="form-group">
            <lable for="name">昵称</lable>
            <input type="text" name="user[name]" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <lable for="phone">电话</lable>
            <input type="text" name="user[phone]" id="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
            <lable for="password">密码</lable>
            <input type="password" name="user[password]" id="password" class="form-control" >
        </div>

        @include('auth.plate')

        <div class="form-group">
            <button type="submit" class="btn btn-default">注册</button>
        </div>

        @include('errors')
    </form>
    </div>
</div>
@stop
