<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionCrudController extends Controller
{

    public function getAddQuestion()
    {
        return 'hi';
    }

//    public function postInsertDoctor(Request $request)
//    {
//        $this->validate($request,[
//            'fname'=>'required',
//            'lname'=>'required',
//            'uname'=>'required',
//            'email'=>'required',
//            'password'=>'required',
//            'phone_number'=>'required',
//            'building'=>'required',
//            'street'=>'required',
//            'country'=>'required',
//            'city'=>'required',
//            'post_code'=>'required',
//            'dob'=>'required',
//            'educational_qualification'=>'required',
//            'blood_pressure_systolic'=>'required',
//            'blood_pressure_diastolic'=>'required',
//            'height'=>'required',
//            'weight'=>'required'
////          'user_type'=>'required'
//
//        ]);
//        $doctors = new User;
//        $doctors_profile = new UserProfile;
//
//        $doctors->fname = $request->input('fname');
//        $doctors->lname = $request->input('lname');
//        $doctors->uname = $request->input('uname');
//        $doctors->email = $request->input('email');
//        $doctors->gender = $request->input('gender');
//        $doctors->dob = $request->input('dob');
//        $doctors->account_type = "Doctor";
//        $doctors->password = \Hash::make($request->input('password'));
//        $doctors->save();
//
//        $doctors_profile->user_id = $doctors->id;
//        $doctors_profile->phone_number = $request->input('phone_number');
//        $doctors_profile->building = $request->input('building');
//        $doctors_profile->street = $request->input('street');
//        $doctors_profile->country = $request->input('country');
//        $doctors_profile->city = $request->input('city');
//        $doctors_profile->post_code = $request->input('post_code');
//        $doctors_profile->job_title = $request->input('job_title');
//        $doctors_profile->company_name = $request->input('company_name');
//        $doctors_profile->blood_group = $request->input('blood_group');
//        $doctors_profile->educational_qualification = $request->input('educational_qualification');
//        $doctors_profile->blood_pressure_systolic = $request->input('blood_pressure_systolic');
//        $doctors_profile->blood_pressure_diastolic = $request->input('blood_pressure_diastolic');
//        $doctors_profile->height = $request->input('height');
//        $doctors_profile->weight = $request->input('weight');
//        $doctors_profile->area = $request->input('area');
//
//
//
//        $file_name = time().$_FILES['image']['name'];
//        $file_tmp =$_FILES['image']['tmp_name'];
//
//        if(empty($errors)==true){
//            move_uploaded_file($file_tmp,base_path()."/public/uploads/".$file_name);
//        }
//        $doctors_profile->img_path = $file_name;
//
//        $doctors_profile->save();
//
//        return redirect()->route('viewalldoctor');
//
//    }


}
