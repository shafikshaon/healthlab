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

  public function postInsertDoctor(Request $request)
  {
      $this->validate($request,[
          'fname'=>'required',
          'lname'=>'required',
          'uname'=>'required',
          'email'=>'required',
          'password'=>'required',
          'phone_number'=>'required',
          'building'=>'required',
          'street'=>'required',
          'country'=>'required',
          'city'=>'required',
          'post_code'=>'required',
          'dob'=>'required',
          'img_path'=>'required'

      ]);
      $doctors = new User;
      $doctors_profile = new UserProfile;

      $doctors->fname = $request->input('fname');
      $doctors->lname = $request->input('lname');
      $doctors->uname = $request->input('uname');
      $doctors->email = $request->input('email');
      $doctors->gender = $request->input('gender');
      $doctors->dob = $request->input('dob');
      $doctors->account_type = "Doctor";
      $doctors->password = $request->input('password');
      $doctors->save();

      $doctors_profile->user_id = $doctors->id;
      $doctors_profile->phone_number = $request->input('phone_number');
      $doctors_profile->building = $request->input('building');
      $doctors_profile->img_path = $request->input('img_path');
      $doctors_profile->street = $request->input('street');
      $doctors_profile->country = $request->input('country');
      $doctors_profile->city = $request->input('city');
      $doctors_profile->post_code = $request->input('post_code');
      $doctors_profile->job_title = $request->input('job_title');
      $doctors_profile->company_name = $request->input('company_name');

      $doctors_profile->save();

      return redirect()->route('viewalldoctor');
    
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
            'phone_number'=>'required',
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
