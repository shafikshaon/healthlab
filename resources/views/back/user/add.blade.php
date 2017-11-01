@extends('layout.master')

@section('title', 'Add User')

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

      @if($errors->any())
          <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach()
          </div>
      @endif
        <div class="row">
          <div class="col-md-8">
            <form class="form-horizontal" action="{{route('insert')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-lg-3 control-label">First Name</label>
                    <div class="col-lg-9"><input type="text" name="fname" placeholder="First Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last Name</label>
                    <div class="col-lg-9"><input type="text" name="lname" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">User Name</label>
                    <div class="col-lg-9"><input type="text" name="uname" placeholder="User Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-9"><input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-9"><input type="password" name="password" placeholder="Password" class="form-control"></div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Phone Number</label>
                    <div class="col-lg-9"><input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Country</label>
                    <div class="col-lg-9"><input type="text" name="country" placeholder="Country" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">City</label>
                    <div class="col-lg-9"><input type="text" name="city" placeholder="City" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Post Code</label>
                    <div class="col-lg-9"><input type="text" name="post_code" placeholder="Post Code" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Address</label>
                    <div class="col-lg-9"><textarea type="text" name="address" placeholder="Address" class="form-control"></textarea>
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
@endsection
