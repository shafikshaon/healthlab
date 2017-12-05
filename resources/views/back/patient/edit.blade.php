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
                <form class="form-horizontal" action="{{route('updatepatient',$patients->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10"><input type="text" name="fname" value="<?php  echo $patients->fname; ?>" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10"><input type="text" name="lname" value="<?php  echo $patients->lname; ?>" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">User Name</label>
                        <div class="col-lg-10"><input type="text" name="uname" value="<?php  echo $patients->uname; ?>" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"><input type="email" value="<?php  echo $patients->email; ?>" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10"><input type="password" value="<?php  echo $patients->password; ?>" name="password" placeholder="Password" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10"><input type="text" name="phone_number" value="<?php  echo $patients_profile->phone_number; ?>" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="gender">
                                <option value="Male" {{($patients->gender == 'Male') ? "selected" : ""}}>Male</option>
                                <option value="Female" {{($patients->gender == 'Female') ? "selected" : ""}}> Female</option>
                                <option value="Others" {{($patients->gender == 'Others') ? "selected" : ""}}>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Group</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="blood_group">
                                <option value="A+" {{($patients_profile->blood_group == 'A+') ? "selected" : ""}}>A+</option>
                                <option value="A-" {{($patients_profile->blood_group == 'A-') ? "selected" : ""}}>A-</option>
                                <option value="B+" {{($patients_profile->blood_group == 'B+') ? "selected" : ""}}>B+</option>
                                <option value="B-" {{($patients_profile->blood_group == 'B-') ? "selected" : ""}}>B-</option>
                                <option value="AB+" {{($patients_profile->blood_group == 'AB+') ? "selected" : ""}}>AB+</option>
                                <option value="AB-" {{($patients_profile->blood_group == 'AB-') ? "selected" : ""}}>AB-</option>
                                <option value="O+" {{($patients_profile->blood_group == 'O+') ? "selected" : ""}}>O+</option>
                                <option value="O-" {{($patients_profile->blood_group == 'O-') ? "selected" : ""}}>O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-md-10">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="dob" value="<?php  echo $patients->dob; ?>" id="dob">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Building</label>
                        <div class="col-lg-10"><input type="text" name="building" value="<?php  echo $patients_profile->building; ?>" placeholder="building" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Street</label>
                        <div class="col-lg-10"><input type="text" name="street" value="<?php  echo $patients_profile->street; ?>" placeholder="street" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10"><input type="text" name="city" value="<?php  echo $patients_profile->city; ?>" placeholder="City" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Post Code</label>
                        <div class="col-lg-10"><input type="text" name="post_code" value="<?php  echo $patients_profile->post_code; ?>" placeholder="Post Code" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10"><input type="text" name="country" value="<?php  echo $patients_profile->country; ?>" placeholder="Country" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Company Name</label>
                        <div class="col-lg-10"><input type="text" name="company_name" value="<?php  echo $patients_profile->company_name; ?>" placeholder="Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Job Title</label>
                        <div class="col-lg-10"><input type="text" name="job_title" value="<?php  echo $patients_profile->job_title; ?>" placeholder="Job Title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-primary" type="submit">update</button>
                            <a href="{{url('/')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
