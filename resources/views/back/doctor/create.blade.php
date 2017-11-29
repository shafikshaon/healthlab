@extends('layouts.back.master')
@section('title', 'All Doctors')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="row">
                            <p>Sign in today for more expirience.</p>
                            <form role="form">
                                <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                                <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control"></div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                    <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                </div>
                            </form>
                            <div class="col-sm-6"><h4>Not a member?</h4>
                                <p>You can create an account:</p>
                                <p class="text-center">
                                    <a href=""><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection