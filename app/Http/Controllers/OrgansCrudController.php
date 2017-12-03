<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Organ;
use Input;
Use Session;
Use Carbon\Carbon;
class organsCrudController extends Controller
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
      $organ->fname = Input::get('organ_name');
      $organ->save();

      Session::flash('success', 'organ added successfully!');
      return back()->withInput();
    }

    public function getAllOrgan()
    {
      $organs = Organ::orderBy('id','asc')->get();
      return view('back.organ.viewall',['organs' => $organs]);
    }
}
