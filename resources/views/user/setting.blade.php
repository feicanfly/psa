@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form method="POST" action="/setting">
        {!! csrf_field() !!}

        <div class="form-group">
            <lable for="name">昵称</lable>
            <input type="text" name="user[name]" id="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <lable for="password">修改密码</lable>
            <input type="password" name="user[password]" id="password" class="form-control" value="">
        </div>

        <div class="form-group">
            <lable for="gender">性别</lable>
            <div class="form-control">
                男<input type="radio" name="profile[gender]" id="gender" value=1 
                    <?php if ($profile['gender'] == 1): ?>
                        checked="checked"
                    <?php endif ?>
                >
                女<input type="radio" name="profile[gender]" id="gender" value=2 
                    <?php if ($profile['gender'] == 2): ?>
                        checked="checked"
                    <?php endif ?>
                >
            </div>
        </div>

        <div class="form-group">
            <lable for="age">年龄</lable>
            <input type="text" name="profile[age]" id="age" class="form-control" value="{{ $profile->age }}">
        </div>

        <div class="form-group">
            <lable for="address">车标</lable>
            <div class="">

                <input type="radio" name="profile[avatar]" id="citroen" value='/image/citroen-logo.png' 
                    <?php if ($profile['avatar'] == '/image/citroen-logo.png'): ?>
                        checked="checked"
                    <?php endif ?>
                >
                <label for="citroen"><img src="/image/citroen-logo.png"></label>
                
                <input type="radio" name="profile[avatar]" id="ds" value='/image/logo-ds-bl.png' 
                    <?php if ($profile['avatar'] == '/image/logo-ds-bl.png'): ?>
                        checked="checked"
                    <?php endif ?>
                >
                <label for="ds"><img src="/image/logo-ds-bl.png"></label>
                
                <input type="radio" name="profile[avatar]" id="peugeot" value='/image/peugeot-logo.png'
                    <?php if ($profile['avatar'] == '/image/peugeot-logo.png'): ?>
                        checked="checked"
                    <?php endif ?>
                >
                <label for="peugeot"><img src="/image/peugeot-logo.png"></label>
                
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">保存</button>
        </div>

        @include('errors')
    </form>
    <div>
<div>
@stop
