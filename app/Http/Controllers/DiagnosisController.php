<?php

namespace App\Http\Controllers;
Use DB;
use Illuminate\Http\Request;
use Input;
class DiagnosisController extends Controller
{
  public function getMyDiagnosis()
  {
    return view('front.organdiagnosis');
  }
    public function postDiagnosisOrgan(Request $request)
    {
        $organ_id = $request->input('organ_id');
        return view('front.diagnosis', ['organ_id' => $organ_id]);
    }
  public function postDiagnosisSymptom(Request $request)
  {

      $ques1 = $request->input('ques1');
      $ques2 = $request->input('ques2');
      $ques3 = $request->input('ques3');
      $ques4 = $request->input('ques4');
      $ques5 = $request->input('ques5');
      $ques6 = $request->input('ques6');
      $ques7 = $request->input('ques7');

      // dd($organ_id,$ques1, $ques2, $ques3 );
      // $result = \DB::raw("SELECT * FROM symptoms WHERE MATCH(symptom) AGAINST('$ques1 $ques2 $ques3' IN NATURAL LANGUAGE MODE)");


      $result = \DB::select(DB::raw("SELECT id, disease_id, MATCH(symptom) AGAINST('$ques1 $ques2 $ques3 $ques4 $ques5 $ques6 $ques7' IN BOOLEAN MODE) AS Score FROM symptoms WHERE MATCH(symptom) AGAINST ('$ques1 $ques2 $ques3 $ques4 $ques5 $ques6 $ques7' IN BOOLEAN MODE)"));

      return view('front.diagnosisresult', ['result' => $result]);

  }
}
