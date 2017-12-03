<?php

namespace App\Http\Controllers;
Use App\User;
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
        return view('back.doctor.edit',['doctors' => $doctors]);

  }


    public function updateSingleDoctor(Request $request, $id){
        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'uname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'dob'=>'required'
        ]);
        $data = array(
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'uname' => $request->input('uname'),
            'email' => $request->input('email'),
            'Password' => $request->input('password'),
            'dob' => $request->input('dob')


        );
        User::where('id',$id)->update($data);
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
