@extends('layouts.front.master2')

@section('title', 'Find Doctor')

@section('content')

<div class="text-center finddoctor animated fadeInDown">
    <div class="col-md-6 col-md-offset-3">
        <div class="ibox">
            <div class="">
                <h2>Find Doctor</h2>
                <p>You can search doctor by your location, disease</p>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    </div>
                @endif
                <form id="form" action="{{route('finddoctorsearch')}}" class="wizard-big" method="get">
                    <h1>Location</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>Want to find where?</h2>
                            </div>
                            <?php
                                $doctors = App\User::where('account_type', 'Doctor')->orderBy('id','asc')->get();
                            ?>
                            <div class="col-md-6 col-md-offset-3">
                              <select data-placeholder="Choose location..." class="chosen-select" style="width:350px;" tabindex="2" name="location">
                                  <option value="">Type location</option>
                                  <?php
                                  $doctors_city = App\UserProfile::distinct()->select('city')->where('city', '!=', '')->groupBy('city')->get();
                                  ?>
                                  @foreach($doctors_city as $city)
                                      <option value="{{$city->city}}">{{$city->city}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                    </fieldset>
                    <h1>Gender</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>I am</h2>
                                <div class="form-group">
                                    <label>Gender *</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Specialist</h1>

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>Want to find specialist in?</h2>
                            </div>
                            <?php
                                $doctors = App\User::where('account_type', 'Doctor')->orderBy('id','asc')->get();
                            ?>
                            <div class="col-md-6 col-md-offset-3">
                              <select data-placeholder="Choose specialist in..." class="chosen-select" style="width:350px;" tabindex="2" name="job_title">
                                  <option value="">Specialist in</option>
                                  <?php
                                       $doctors_job_title = App\UserProfile::distinct()->select('job_title')->where('job_title', '!=', '')->groupBy('job_title')->get();
                                  ?>
                                      @foreach($doctors_job_title as $job_title)
                                          <option value="{{$job_title->job_title}}">{{$job_title->job_title}}</option>
                                      @endforeach
                              </select>
                            </div>
                        </div>
                    </fieldset>
                  </form>
            </div>
        </div>

    </div>
</div>

@endsection
