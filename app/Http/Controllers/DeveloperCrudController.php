<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
class DeveloperCrudController extends Controller
{
  //list of developer
  public function getAllDevelopers()
  {
    $developers = User::where('account_type', 'Developer')->orderBy('id','asc')->get();
    return view('back.developer.viewall',['developers' => $developers]);
  }
}
