<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
Use Auth;
use App\User;
use App\UserProfile;
use Session;
use Input;
Use Validator;

class AccountController extends Controller
{
  public function getMyLogin()
    {
      if(Auth::check())
      {
        return redirect('/');
      }
      return view('front.login');
    }
    public function getMyRegister()
    {
      if(Auth::check())
      {
        return redirect('/');
      }
      return view('front.register');
    }
    public function insertUser(Request $request)
    {
      if(Auth::check())
      {
        return redirect('/');
      }
      $this->validate($request, [
          'fname' => 'required|string',
          'lname' => 'required|string',
          'uname' => 'required|string',
          'email' => 'required|email|string|unique:users',
          'password' => 'required|string|min:6',
          'gender' => 'required|string',
          'dob' => 'required|string',
          'account_type' => 'required|string',
          'agreement' => 'required|string',
      ],[
        'fname.required'    =>"First Name is required",
        'lname.required'    =>"Lasr Name is required",
        'uname.required'    =>"User Name is required",
        'email.required'    =>"Email is required",
        'email.email'    =>"You enter invalid email address",
        'email.unique'    =>"The email has all ready been taken",
        'password.required'    =>"Password is required",
        'password.min'    =>"Password length must be at least 6",
        'gender.required'    =>"Gender is required",
        'dob.required'    =>"Date of birth is required",
        'account_type.required'    =>"Account type is required",
        'agreement.required'    =>"Accept terms and conditions",
      ]);
      $user = new User();
      $user->fname = Input::get('fname');
      $user->lname = Input::get('lname');
      $user->uname = Input::get('uname');
      $user->email = Input::get('email');
      $user->password = \Hash::make(Input::get('password'));
      $user->gender = Input::get('gender');
      $user->dob = Input::get('dob');
      $user->account_type = Input::get('account_type');
      $user->save();

      $profile = new UserProfile();
      $profile->user_id = $user->id;
      $profile->save();

      Session::flash('success', 'Congratulation! You Sign Up successfully!');
      return back()->withInput();
    }
    public function postMyLogin(Request $request)
    {
      if(Auth::check())
      {
        return redirect('/');
      }
      $v = Validator::make($request->all(), [
        'email' => 'required|email|string',
        'password' => 'required|string',
      ]);

      if ($v->fails())
      {
          return redirect()->back()->withErrors($v->errors());
      }
      else
      {
        // create our user data for the authentication
  			$userdata = array(
  				'email' 	=> Input::get('email'),
  				'password' 	=> Input::get('password')
  			);

        if(Auth::attempt($userdata))
        {
          $account_type = Auth::User()->account_type;

          if($account_type == "Patient")
          {
            return "Patient";
          }
          if($account_type == "Doctor")
          {
            return "Doctor";
          }
          if($account_type == "Admin")
          {
            Session::flash('success', 'Login successfully!');
            return redirect('admin');
          }
        } else {
  				// validation not successful, send back to form
          Session::flash('error', 'Wrong email or password! Try again');
  				return back()->withInput();
  			}
      }
    }
    public function getLogout()
    {
      if(Auth::check())
      {
        Auth::logout();
        Session::flash('error', 'Please login first!');
        return redirect('login');
      }
      Session::flash('error', 'Please login first!');
      return redirect('login');
    }

    public function getAdminProfile()
    {
      if(Auth::check())
      {
        return view('profile.adminprofile');
      }
      Session::flash('error', 'Please login first!');
      return redirect('login');
    }
}
