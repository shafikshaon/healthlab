<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
  public function getMyDiagnosis()
  {
    return view('front.diagnosis');
  }
  public function postDiagnosisSymptom(Request $request)
  {
      $question->disease_id = $request->input('organ_id');
      $question->disease_id = $request->input('disease_id');
      $question->disease_id = $request->input('disease_id');
      $question->disease_id = $request->input('disease_id');
      $question->disease_id = $request->input('disease_id');
      $question->disease_id = $request->input('disease_id');
      $question->disease_id = $request->input('disease_id');
  }
}
