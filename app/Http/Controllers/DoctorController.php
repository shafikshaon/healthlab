<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Symptom;
use App\User;
use App\UserProfile;
use App\Disease;
use Input;
Use Session;
Use Carbon\Carbon;
class DoctorController extends Controller
{
    public function getDoctorSearch()
    {
        return view('front.finddoctor');
    }
    public function getDoctorSearchResult(Request $request)
    {
        $this->validate($request, [
            'location' => 'required|string',
            'gender' => 'required|string',
            'job_title' => 'required|string',
        ],[
          'location.required'    =>"Location is required",
          'gender.required'    =>"Gender is required",
          'job_title.required'    =>"Specialist in is required",
        ]);

        $location = $request->input('location');
        $gender = $request->input('gender');
        $job_title = $request->input('job_title');

        $search = \DB::table('user_profiles')
                   ->where('city', $location)
                   ->where('job_title', $job_title)->get();

        return view('front.doctorsearch', ['search'=> $search, 'gender' => $gender]);
    }
}
