@extends('layouts.back.master')
@section('title', 'Add Doctor')

@section('content')
<div class="wrapper wrapper-content">
  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    {{ Session::get('success') }}
  </div>
  @endif
  <div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Add Admin</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach()
        </div>
    @endif
    <div class="ibox-content wizard-card">
        <form class="form-horizontal" action="{{route('updatedoctor',$doctors->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
                <label class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10"><input type="text" name="fname" value="<?php  echo $doctors->fname; ?>" placeholder="First Name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10"><input type="text" name="lname" value="<?php  echo $doctors->lname; ?>" placeholder="Last Name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">User Name</label>
                <div class="col-lg-10"><input type="text" name="uname" value="<?php  echo $doctors->uname; ?>" placeholder="Last Name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10"><input type="email" value="<?php  echo $doctors->email; ?>" name="email" placeholder="Email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10"><input type="password" value="<?php  echo $doctors->password; ?>" name="password" placeholder="Password" class="form-control"></div>
            </div>
            <div class="form-group" id="data_1">
                <label class="col-lg-2 control-label">Date of Birth</label>
                <div class="col-md-10">
                  <div class="input-group date">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="dob" value="<?php  echo $doctors->dob; ?>" id="dob">
                  </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Phone Number</label>
                <div class="col-lg-10"><input type="text" name="phone_number" value="<?php  echo $doctors->phone_number; ?>" placeholder="Phone Number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-sm btn-primary" type="submit">update</button>
                    {{--<a href="{{url('/')}}" class="btn btn-primary">Back</a>--}}
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
