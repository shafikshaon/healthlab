@extends('layouts.back.master')

@section('title', 'Profile')

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Edit profile</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2">Edit address</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3">Change password</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-4">Other info edit</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-5">Company info</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-6">Profile picture</a></li>
                </ul>
                <div class="tab-content">

                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="ibox-content wizard-card">
                                <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
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
                                    <div class="form-group" id="data_1">
                                        <label class="col-lg-2 control-label">Date of Birth</label>
                                        <div class="col-md-10">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="dob" value="" id="dob">
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

                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                          <div class="ibox-content wizard-card">
                             <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Building</label>
                                    <div class="col-lg-10"><textarea type="text" name="building" placeholder="Building" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Street</label>
                                    <div class="col-lg-10"><textarea type="text" name="street" placeholder="Street" class="form-control"></textarea>
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
                                    <label class="col-lg-2 control-label">Country</label>
                                    <div class="col-lg-10"><input type="text" name="country" placeholder="Country" class="form-control">
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

                    <div id="tab-3" class="tab-pane">
                        <div class="panel-body">
                            <div class="ibox-content wizard-card">
                                <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Current Password</label>
                                        <div class="col-lg-9"><input type="text" name="c_password" placeholder="Current Password" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">New Password</label>
                                        <div class="col-lg-9"><input type="text" name="new_password" placeholder="New Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Confirm New Password</label>
                                        <div class="col-lg-9"><input type="text" name="confirm_password" placeholder="Confirm New Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="tab-4" class="tab-pane">
                        <div class="ibox-content wizard-card">
                            <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Phone Number</label>
                                    <div class="col-lg-10"><input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
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
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="tab-5" class="tab-pane">
                        <div class="panel-body">
                            <div class="ibox-content wizard-card">
                                <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Job Title</label>
                                        <div class="col-lg-9"><input type="text" name="job_title" placeholder="Job Title" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Company Name</label>
                                        <div class="col-lg-9"><input type="text" name="company_name" placeholder="Company Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                      </div>

                    <div id="tab-6" class="tab-pane">
                            <div class="panel-body">
                              <div class="ibox-content wizard-card">
                                  <form class="form-horizontal" action="{{route('insertdoctor')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
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

                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
