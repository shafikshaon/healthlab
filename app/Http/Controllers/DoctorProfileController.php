<?php

namespace App\Http\Controllers;
Use User;
Use UserProfile;
use Illuminate\Http\Request;

class DoctorProfileController extends Controller
{
    public function getDoctorProfile()
    {
        return view('front.doctor.profile');
    }
    public function CheckBloodPressure()
    {
        
        dd($pressure_status);
        return $pressure_status;
    }
}
