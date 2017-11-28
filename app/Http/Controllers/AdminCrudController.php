<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Http\Request;

class AdminCrudController extends Controller
{
  //list of admin
  public function getAllAdmins()
  {
    $admins = User::where('account_type', 'Admin')->orderBy('id','asc')->get();
    return view('back.admin.viewall',['admins' => $admins]);
  }
}
