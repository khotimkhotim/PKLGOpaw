@extends('admin.layouts.login_layout')

@section('content')
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-horizontal login-form" role="form" novalidate="novalidate" method="POST" action="{{ route('admin.login') }}">
        {{ csrf_field() }}
        <h3 class="form-title font-green">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter Email and password. </span>
        </div>
        @if ($errors->has('email'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{ $errors->first('email') }}</span>
        </div>
        @endif
        @if ($errors->has('password'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span>{{ $errors->first('password') }}</span>
        </div>
        @endif                
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">E-Mail</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" value="{{old('email')}}" />                   
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="password" name="password" />  
        </div>

        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>
            <label class="rememberme check">
            <a class="forget-password" href="{{ route('admin.password.request') }}">Lupa Password?</a>
        </div>                                
    </form>
    <!-- END LOGIN FORM -->
</div>
@endsection