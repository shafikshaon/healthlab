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
    public function getSingleDoctor($id){
      return $id;
//        $doctors = User::find($id);
//        return view('update_student_info',['$doctors'=>$doctors]);

    }
}
