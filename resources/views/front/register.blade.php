@extends('layouts.front.masterhelper')

@section('title', 'Register')

@section('content')
<div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">HL</h1>
            </div>
            <h3>Register to Health Lab</h3>
            <p>Create account to explore something new</p>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
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
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
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
                <div class="form-group">
                    <div class="checkbox i-checks text-left"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>


                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{route('login')}}">Login</a>
            </form>
            <p class="m-t"> <small>All rights reserved by Health Lab &copy; 2017</small> </p>
        </div>
    </div>
@endsection
