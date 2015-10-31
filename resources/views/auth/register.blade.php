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

        <div class="form-group">
            <lable for="address">车标</lable>
            <div class="">
                <label for="citroen"><img src="/image/citroen-logo.png"></label>
                <input type="radio" name="profile[avatar]" id="citroen" value='/image/citroen-logo.png'>

                <label for="ds"><img src="/image/logo-ds-bl.png"></label>
                <input type="radio" name="profile[avatar]" id="ds" value='/image/logo-ds-bl.png'>
                
                <label for="peugeot"><img src="/image/peugeot-logo.png"></label>
                <input type="radio" name="profile[avatar]" id="peugeot" value='/image/peugeot-logo.png'>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">注册</button>
        </div>

        @include('errors')
    </form>
    <div>
<div>
@stop
