<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Organ;
use Input;
Use Session;
Use Carbon\Carbon;
class OrgansCrudController extends Controller
{
    public function getAddOrgan()
    {
      return view('back.organ.addorgan');
    }

    public function postAddOrgan(Request $request)
    {
      $this->validate($request, [
          'organ_name' => 'required|string',
      ],[
        'organ_name.required'    =>"Organ Name is required",
      ]);
      $organ = new Organ();
      $organ->organ_name = Input::get('organ_name');
      $organ->created_at = Carbon::now('Asia/Dhaka');
      $organ->updated_at = Carbon::now('Asia/Dhaka');
      $organ->save();

      Session::flash('success', 'Organ added successfully!');
      return back()->withInput();
    }

    public function getAllOrgan()
    {
      $organs = Organ::orderBy('id','asc')->get();
      return view('back.organ.viewall',['organs' => $organs]);
    }

    public function getEditOrgan($id)
    {
      $organs = Organ::find($id);
      return view('back.organ.editorgan',['organs' => $organs]);
    }

    public function postUpdateOrgan(Request $request, $id){
      $this->validate($request, [
          'organ_name' => 'required|string',
      ],[
        'organ_name.required'    =>"First Name is required",
      ]);
      $organ = Organ::findOrFail($id);
      $organ->organ_name = Input::get('organ_name');
      $organ->updated_at = Carbon::now('Asia/Dhaka');
      $organ->save();
      Session::flash('success', 'Organ updated successfully!');
      // return redirect()->route('adminList', ['id' => $id);
      return back()->withInput();
    }

    public function getDeleteOrgan($id){
        $organs = Organ::find($id);
        $organs->delete();
        Session::flash('success', 'Admin deleted successfully!');
        return redirect()->route('viewallorgan');
    }
}
