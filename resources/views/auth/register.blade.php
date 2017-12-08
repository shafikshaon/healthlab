@extends('layouts.front.masterhelper')

@section('title', 'Register')

@section('content')
<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">HL</h1>
        </div>
        <h3>Register to Health Lab</h3>
        <p>Create account to explore something new</p>

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

        <form class="m-t" role="form" action="{{ route('register') }}" method="post">
          {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name" name="fname">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="User Name" name="uname">
            </div>
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
            <div class="form-group text-left">
              <div class="radio i-checks">
                <span class="gender-label">Gender</span>
                <label>
                  <input type="radio" value="Male" name="gender"> <i></i> Male
                </label>
                <label>
                  <input type="radio" value="Female" name="gender"> <i></i> Female
                </label>
                <label>
                  <input type="radio" value="Others" name="gender"> <i></i> Others
                </label>
              </div>
            </div>
            <div class="form-group text-left" id="data_1">
                <label class="font-noraml">Date of Birth</label>
                <div class="input-group date">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" id="dob" value="2000-12-31" name="dob">
                </div>
            </div>
            <div class="form-group text-left">
              <div class="radio i-checks">
                <span class="gender-label">I am</span>
                <label>
                  <input type="radio" value="Patient" name="account_type"> <i></i> Patient
                </label>
                <label>
                  <input type="radio" value="Doctor" name="account_type"> <i></i> Doctor
                </label>
              </div>
            </div>
            <!-- <div class="form-group">
                <div class="checkbox i-checks text-left"><label> <input type="checkbox" name="agreement"><i></i> Agree the terms and policy </label></div>
            </div> -->


            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

            <p class="text-muted text-center"><small>Already have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="{{route('login')}}">Login</a>
        </form>
        <p class="m-t"> <small>All rights reserved by Health Lab &copy; 2017</small> </p>
    </div>
</div>
@endsection
