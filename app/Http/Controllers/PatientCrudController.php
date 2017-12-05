<?php

namespace App\Http\Controllers;
Use App\User;
Use App\UserProfile;
use Auth;
use Illuminate\Http\Request;

class PatientCrudController extends Controller
{
  //list of patient
  public function getAllPatients()
  {
    $patients = User::where('account_type', 'Patient')->orderBy('id','asc')->get();
    return view('back.patient.viewall',['patients' => $patients]);
  }
    public function getSinglePatient($id){
        $patients = User::find($id);
        $profile = UserProfile::where('user_id', $id)->get()->first();

        return view('back.patient.edit',['patients' => $patients, 'profile' => $profile]);

    }
    public function updateSinglePatient(Request $request, $id){
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
            'blood_group'=> $request->input('blood_group')


        );
        User::where('id',$id)->update($data);
        UserProfile::where('id',$id)->update($profiledata);
        return redirect()->route('viewallpatient')->with('info','Patient Information updated successfully');

    }

    public function deleteSinglePatient($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('viewallpatient')->with('info', 'Patient Information Deleted successfully');
    }
    public function readSinglePatient($id){
        $patients = User::find($id);
        return view('back.patient.read',['patients' => $patients]);
    }


    public function getAddPatient()
    {
        return view('back.patient.create');
    }

    public function postInsertPatient(Request $request)
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
//            'user_type'=>'required'

        ]);
        $patients = new User;
        $patients_profile = new UserProfile;

        $patients->fname = $request->input('fname');
        $patients->lname = $request->input('lname');
        $patients->uname = $request->input('uname');
        $patients->email = $request->input('email');
        $patients->gender = $request->input('gender');
        $patients->dob = $request->input('dob');
        $patients->account_type = "Patient";
        $patients->password = $request->input('password');
        $patients->save();

        $patients_profile->user_id = $patients->id;
        $patients_profile->phone_number = $request->input('phone_number');
        $patients_profile->building = $request->input('building');
        $patients_profile->street = $request->input('street');
        $patients_profile->country = $request->input('country');
        $patients_profile->city = $request->input('city');
        $patients_profile->post_code = $request->input('post_code');
        $patients_profile->job_title = $request->input('job_title');
        $patients_profile->company_name = $request->input('company_name');
        $patients_profile->blood_group = $request->input('blood_group');

        $file_name = time().$_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];

        if(empty($errors)==true){
            move_uploaded_file($file_tmp,base_path()."/public/uploads/".$file_name);
        }
        $patients_profile->img_path = $file_name;

        $patients_profile->save();

        return redirect()->route('viewallpatient');

    }

}


