@extends('layouts.back.master')

@section('title', 'Dashboard')

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">
                        <?php
                        $user_profile = App\UserProfile::where('user_id', $doctors->id)->get();
                        ?>
                            @foreach($user_profile as $profile)
                                <img src="{{asset('uploads/'.$profile->img_path)}}" alt="profile" class="img-lg">
                            @endforeach
                        <p class="m-b-xs"><strong>Full Name: </strong>{{$doctors->fname}} {{$doctors->lname}}</p>
                        <p><strong>User name:</strong> {{$doctors->uname}} </p>
                        <p><strong>Email:</strong> {{$doctors->email}} </p>
                        <p><strong>Gender:</strong> {{$doctors->gender}} </p>
                        <p><strong>DOB:</strong> {{$doctors->dob}} </p>
                        <p><strong>Account Type:</strong> {{$doctors->account_type}} </p>


                    </a>
                    @foreach($user_profile as $profile)
                    <div class="contact-box-footer">
                        <p><strong>Educational Qualification:</strong> {{$profile->educational_qualification}} </p>
                        <p><strong>Blood Pressure Systolic:</strong> {{$profile->blood_pressure_systolic}} </p>
                        <p><strong>Blood Pressure Diastolic:</strong> {{$profile->blood_pressure_diastolic}} </p>
                        <p><strong>Height:</strong> {{$profile->height}} </p>
                        <p><strong>Weight:</strong> {{$profile->weight}} </p>

                        <p><strong>Blood Group:</strong> {{$profile->blood_group}} </p>
                        <p><strong>Job Title :</strong> {{$profile->job_title}} </p>
                        <p><strong>Company Name:</strong> {{$profile->company_name}} </p>
                        <address class="m-t-md">
                            <strong>Address</strong><br>
                            Building : {{$profile->building}}, Street: {{$profile->street}}<br>
                            City : {{$profile->city}},<br> Country: {{$profile->country}}
                        </address>
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> {{$profile->phone_number}}</a>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
