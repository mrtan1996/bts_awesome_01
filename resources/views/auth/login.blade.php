@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>BTS</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('message.signinmessage')}}</p>
        <form action="../../index2.html" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.signin')}}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ trans('message.signinfb')}}</a>
        </div>
        <!-- /.social-auth-links -->
        <a href="#">{{ trans('message.forgotpw')}}</a><br>
        <a href="register.html" class="text-center">{{ trans('message.register')}}</a>
    </div>
    <!-- /.login-box-body -->
</div>
@endsection