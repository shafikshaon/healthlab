<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Http\Request;

class PatientCrudController extends Controller
{
  //list of patient
  public function getAllPatients()
  {
    $patients = User::where('account_type', 'Patient')->orderBy('id','asc')->get();
    return view('back.patient.viewall',['patients' => $patients]);
  }
}
