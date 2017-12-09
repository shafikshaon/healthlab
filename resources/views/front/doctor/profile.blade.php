@extends('layouts.profile.master')

@section('title', 'Dashboard')

@section('content')

<div class="col-lg-offset-2 col-lg-8 profile">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
                <div class="col-lg-12">
                    <?php
                        $user_profie = DB::table('user_profiles')->where('user_id', Auth::user()->id)->first();
                        // $systolic = $user_profie->blood_pressure_systolic;
                        // $diastolic = $user_profie->blood_pressure_diastolic;

                        if($user_profie->blood_pressure_systolic < 120 && $user_profie->blood_pressure_diastolic < 80)
                        {
                            $pressure_status =  "Normal";
                        }
                        else if ( ($user_profie->blood_pressure_systolic >= 120 || $user_profie->blood_pressure_systolic <= 139) && ($user_profie->blood_pressure_systolic >= 80 || $user_profie->blood_pressure_systolic <= 89))
                        {
                            $pressure_status =  "Prehypertension";
                        }
                        else if ($user_profie->blood_pressure_systolic > 140 && $user_profie->blood_pressure_diastolic > 90)
                        {
                            $pressure_status =  "High Pressure";
                        }
                        else {
                            $pressure_status =  "Low Pressure";
                        }
                    ?>
                    You have <span style="color: red; font-weight: bold; font-size: 24px;"><?php echo $pressure_status; ?></span>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bar Chart Example</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pie </h5>

                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
