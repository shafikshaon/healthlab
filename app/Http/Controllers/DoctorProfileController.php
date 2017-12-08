<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorProfileController extends Controller
{
    public function getDoctorProfile()
    {
        return view('front.doctor.profile');
    }
}
