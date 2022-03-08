@extends('template.auth.login-template')
@section('title')
    <title>{{env('APP_NAME')}} | Registration Page</title>
@endsection
@section('content')
    <form name="register-form" action="{{route('post-register')}}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input type="text" name="first_name" class="form-control" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="last_name" class="form-control" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="mobile_no" class="form-control" placeholder="Mobile">
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            @if ($errors->has('mobile_no'))
                <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">

            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
@endsection
@section('content-bottom')
    <div class="col-md-8">
        <a class="btn btn-primary" href="{{route('login')}}" class="text-center">I already have a membership</a>

    </div>
@endsection

