<?php

namespace App\Http\Controllers\Auth;

use App\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    private $rules = [
  		"username" => "required",
  		"password" => "required"
  	];

      public function index() {
      	return view('admin.auth.login');
      }

      public function signin(Request $request) {
      	$validation = Validator::make(Input::all(), $this->rules);

      	if ($validation->fails()) {
      		return view('admin.auth.login')->withErrors($validation);
      	} else {

              if ($request->input("username") != 'admin' && $request->input("password") != '123') {
                  $data['failLogin'] = "Invalid credentials. Please Try Again!";
                  return view('admin.auth.login', $data);
              } else {
                  session(['idAdminAktif' => 1]);
                  return redirect('/add_data');
              }
      	}
      }

      public function logout() {
          session()->forget('idAdminAktif');

          return redirect('/admin');
      }
}
