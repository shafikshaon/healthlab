<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Disease;
use Input;
Use Session;
Use Carbon\Carbon;
class DiseaseCrudController extends Controller
{
    public function getAddDisease()
    {
      return view('back.disease.adddisease');
    }

    public function postAddDisease(Request $request)
    {
      $this->validate($request, [
          'disease_name' => 'required|string',
      ],[
        'disease_name.required'    =>"Disease Name is required",
      ]);
      $disease = new Disease();
      $disease->disease_name = Input::get('disease_name');
      $disease->created_at = Carbon::now('Asia/Dhaka');
      $disease->updated_at = Carbon::now('Asia/Dhaka');
      $disease->save();

      Session::flash('success', 'disease added successfully!');
      return back()->withInput();
    }

    public function getAllDisease()
    {
      $diseases = Disease::orderBy('id','asc')->get();
      return view('back.disease.viewall',['diseases' => $diseases]);
    }

    public function getEditDisease($id)
    {
      $diseases = Disease::find($id);
      return view('back.disease.editdisease',['diseases' => $diseases]);
    }

    public function postUpdateDisease(Request $request, $id){
      $this->validate($request, [
          'disease_name' => 'required|string',
      ],[
        'disease_name.required'    =>"First Name is required",
      ]);
      $disease = Disease::findOrFail($id);
      $disease->disease_name = Input::get('disease_name');
      $disease->updated_at = Carbon::now('Asia/Dhaka');
      $disease->save();
      Session::flash('success', 'disease updated successfully!');
      // return redirect()->route('adminList', ['id' => $id);
      return back()->withInput();
    }

    public function getDeleteDisease($id){
        $diseases = Disease::find($id);
        $diseases->delete();
        Session::flash('success', 'Disease deleted successfully!');
        return redirect()->route('viewalldisease');
    }
}
