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
                                <option value="A+" {{($profile->blood_group == 'A+') ? "selected" : ""}}>A+</option>
                                <option value="A-" {{($profile->blood_group == 'A-') ? "selected" : ""}}>A-</option>
                                <option value="B+" {{($profile->blood_group == 'B+') ? "selected" : ""}}>B+</option>
                                <option value="B-" {{($profile->blood_group == 'B-') ? "selected" : ""}}>B-</option>
                                <option value="AB+" {{($profile->blood_group == 'AB+') ? "selected" : ""}}>AB+</option>
                                <option value="AB-" {{($profile->blood_group == 'AB-') ? "selected" : ""}}>AB-</option>
                                <option value="O+" {{($profile->blood_group == 'O+') ? "selected" : ""}}>O+</option>
                                <option value="O-" {{($profile->blood_group == 'O-') ? "selected" : ""}}>O-</option>
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
                        <label class="col-lg-2 control-label">Educational Qualification</label>
                        <div class="col-lg-10"><input type="text" name="educational_qualification" value="<?php  echo $profile->educational_qualification; ?>" placeholder="Educational Qualification" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Pressure Systolic</label>
                        <div class="col-lg-10"><input type="text" name="blood_pressure_systolic" value="<?php  echo $profile->blood_pressure_systolic; ?>" placeholder="Blood Pressure Systolic" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Pressure Diastolic</label>
                        <div class="col-lg-10"><input type="text" name="blood_pressure_diastolic" value="<?php  echo $profile->blood_pressure_diastolic; ?>" placeholder="Blood Pressure Diastolic" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10"><input type="text" name="height" value="<?php  echo $profile->height; ?>" placeholder="Height" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10"><input type="text" name="weight" value="<?php  echo $profile->weight; ?>" placeholder="weight" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Building</label>
                        <div class="col-lg-10"><input type="text" name="building" value="<?php  echo $profile->building; ?>" placeholder="building" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Street</label>
                        <div class="col-lg-10"><input type="text" name="street" value="<?php  echo $profile->street; ?>" placeholder="street" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10"><input type="text" name="phone_number" value="<?php  echo $profile->phone_number; ?>" placeholder="street" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Area</label>
                        <div class="col-lg-9"><input type="text" name="area" placeholder="Area" class="form-control" value="<?php  echo $profile->area; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10"><input type="text" name="city" value="<?php  echo $profile->city; ?>" placeholder="City" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Post Code</label>
                        <div class="col-lg-10"><input type="text" name="post_code" value="<?php  echo $profile->post_code; ?>" placeholder="Post Code" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10"><input type="text" name="country" value="<?php  echo $profile->country; ?>" placeholder="Country" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Company Name</label>
                        <div class="col-lg-10"><input type="text" name="company_name" value="<?php  echo $profile->company_name; ?>" placeholder="Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Job Title</label>
                        <div class="col-lg-10"><input type="text" name="job_title" value="<?php  echo $profile->job_title; ?>" placeholder="Job Title" class="form-control">
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
