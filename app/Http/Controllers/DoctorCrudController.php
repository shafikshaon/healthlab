<?php

namespace App\Http\Controllers;
Use App\User;
Use App\UserProfile;
use Illuminate\Http\Request;

class DoctorCrudController extends Controller
{
  //list of doctor
  public function getAllDoctors()
  {
    $doctors = User::where('account_type', 'Doctor')->orderBy('id','asc')->get();
    return view('back.doctor.viewall',['doctors' => $doctors]);
  }

  public function getAddDoctor()
  {
    return view('back.doctor.create');
  }

  public function postInsertDoctor()
  {
    
  }
  public function getSingleDoctor($id){
        $doctors = User::find($id);
      $doctors_profile = UserProfile::find($id);
        return view('back.doctor.edit',['doctors' => $doctors, 'doctors_profile' => $doctors_profile]);

  }

    public function updateSingleDoctor(Request $request, $id){
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'uname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'dob'=>'required',
            'phone_number'=>'required'
        ]);
        $data = array(
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'uname' => $request->input('uname'),
            'email' => $request->input('email'),
            'Password' => $request->input('password'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender')


        );
        $profiledata = array(
            'phone_number' => $request->input('phone_number'),
            'building' => $request->input('building'),
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'post_code' => $request->input('post_code'),
            'country' => $request->input('country'),
            'company_name' => $request->input('company_name'),
            'job_title' => $request->input('job_title'),


        );
        User::where('id',$id)->update($data);
        UserProfile::where('id',$id)->update($profiledata);
        return redirect()->route('viewalldoctor')->with('info','Doctor Information updated successfully');

    }


    public function deleteSingleDoctor($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('viewalldoctor')->with('info', 'Doctor Information Deleted successfully');
    }

    public function readSingleDoctor($id){
        $doctors = User::find($id);
        return view('back.doctor.read',['doctors' => $doctors]);
    }





}
