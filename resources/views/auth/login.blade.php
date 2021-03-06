
@extends('layouts.front.masterhelper')

@section('title', 'Login')

@section('content')
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">HL</h1>
        </div>
        <h3>Welcome to Health Lab</h3>
        <p>Login in. To explore something interesting</p>

        @if(Session::has('success'))
          <div class="alert alert-success alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ Session::get('success') }}
          </div>
        @endif

        @if(Session::has('error'))
          <div class="alert alert-danger alert-dismissible " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ Session::get('error') }}
          </div>
        @endif


        <form class="m-t" role="form" action="{{route('login')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="checkbox i-checks text-left">
                    <label>
                        <input type="checkbox" name="remember_token" {{ old('remember_token') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a class="btn btn-link block full-width m-b" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{route('register')}}">Create an account</a>
        </form>
        <p class="m-t"> <small>All rights reserved by Health Lab &copy; 2017</small> </p>
    </div>
</div>
@endsection
