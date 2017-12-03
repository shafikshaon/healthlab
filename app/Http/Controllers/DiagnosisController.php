<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
  public function getMyDiagnosis()
  {
    return view('front.diagnosis');
  }
}
