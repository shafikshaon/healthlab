<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Symptom;
use Input;
Use Session;
Use Carbon\Carbon;
class SymptomsCrudController extends Controller
{
    public function getAddSymptom()
    {
      return view('back.symptom.addsymptom');
    }

    public function postAddSymptom(Request $request)
    {
      $this->validate($request, [
          'symptom' => 'required|string',
      ],[
        'symptom.required'    =>"Symptom is required",
      ]);
      $symptom = new Symptom();
      $symptom->symptom = Input::get('symptom');
      $symptom->disease_id = Input::get('disease_id');
      $symptom->created_at = Carbon::now('Asia/Dhaka');
      $symptom->updated_at = Carbon::now('Asia/Dhaka');
      $symptom->save();

      Session::flash('success', 'Symptom added successfully!');
      return back()->withInput();
    }

    public function getAllSymptom()
    {
      $symptoms = Symptom::orderBy('id','asc')->get();
      return view('back.symptom.viewall',['symptoms' => $symptoms]);
    }

    public function getEditSymptom($id)
    {
      $symptoms = Symptom::find($id);
      return view('back.symptom.editsymptom',['symptoms' => $symptoms]);
    }

    public function postUpdateSymptom(Request $request, $id){
      $this->validate($request, [
          'symptom' => 'required|string',
      ],[
        'symptom.required'    =>"Symptom is required",
      ]);
      $symptom = Symptom::findOrFail($id);
      $symptom->symptom = Input::get('symptom');
      $symptom->disease_id = Input::get('disease_id');
      $symptom->updated_at = Carbon::now('Asia/Dhaka');
      $symptom->save();
      Session::flash('success', 'Symptom updated successfully!');
      // return redirect()->route('adminList', ['id' => $id);
      return back()->withInput();
    }

    public function getDeleteSymptom($id){
        $symptoms = Symptom::find($id);
        $symptoms->delete();
        Session::flash('success', 'Symptom deleted successfully!');
        return redirect()->route('viewallsymptom');
    }
}
