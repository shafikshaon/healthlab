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
                <form class="form-horizontal" action="{{route('insertpatient')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10"><input type="text" name="fname" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10"><input type="text" name="lname" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">User Name</label>
                        <div class="col-lg-10"><input type="text" name="uname" placeholder="User Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10"><input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10"><input type="password" name="password" placeholder="Password" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10"><input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Building</label>
                        <div class="col-lg-10"><input type="text" name="building" placeholder="building" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Street</label>
                        <div class="col-lg-10"><input type="text" name="street" placeholder="street" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-10"><input type="text" name="country" placeholder="Country" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Area</label>
                        <div class="col-lg-9"><input type="text" name="area" placeholder="Area" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10"><input type="text" name="city" placeholder="City" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Post Code</label>
                        <div class="col-lg-10"><input type="text" name="post_code" placeholder="Post Code" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Educational Qualification</label>
                        <div class="col-lg-10"><input type="text" name="educational_qualification" placeholder="Educational Qalification" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Pressure Systolic</label>
                        <div class="col-lg-10"><input type="text" name="blood_pressure_systolic" placeholder="Blood Pressure Systolic" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Pressure Diastolic</label>
                        <div class="col-lg-10"><input type="text" name="blood_pressure_diastolic" placeholder="Blood Pressure Diastolic" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10"><input type="text" name="height" placeholder="Height" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10"><input type="text" name="weight" placeholder="Weight" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" id="data_1">
                        <label class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-md-10">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="dob" value="" id="dob">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Blood Group</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="blood_group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Company Name</label>
                        <div class="col-lg-10"><input type="text" name="company_name" placeholder="Company Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Job Title</label>
                        <div class="col-lg-10"><input type="text" name="job_title" placeholder="Job Title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Profile Picture</label>
                        <div class="col-lg-10 ">
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="{{asset('img/avatar.png')}}" class="picture-src" id="output_image"/>
                                    <input type="file" name='image' accept="image/*" onchange="preview_image(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
