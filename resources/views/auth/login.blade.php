<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 8/9/2021
 * Time: 2:06 PM
 */
?>
@extends('template.auth.login-template')
@section('title')
    <title>{{env('APP_NAME')}} | Log in</title>
@endsection
@section('content')
    <form name="login-form" id="login-form" action="{{route('post-login')}}" method="post">
        @csrf
    <h3 class="login-box-msg">Sign In</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group has-feedback">
                <label for="Email">Email:</label>
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <label for="Email">Password:</label>
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
    </div>
    </form>
@endsection
@section('content-bottom')
    <div class="col-md-8">
        <a class="btn btn-primary" href="{{route("password.request")}}">I forgot my password</a><br>
{{--        <a href="{{route('register')}}" class="text-center">Register a new membership</a>--}}

    </div>
@endsection