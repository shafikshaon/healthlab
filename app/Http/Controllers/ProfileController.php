<?php

namespace App\Http\Controllers;
use App\User;
use App\UserProfile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getSingleAdmin($id)
    {
      $admin = User::find($id);
      $admin_profile = UserProfile::find($id);
      return view('back.admin.single_profile',['admin' => $admin, 'admin_profile' => $admin_profile]);

	}
}
