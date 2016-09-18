<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

	 public function handleLogin(Request $request)
    {
      $this->validate($request, User::$login_validation_rules);
      $data = $request->only('email', 'password');
      if(\Auth::attempt($data))
      {
        return redirect()->intended('wallet_main');
      }

      return back()->withInput()->withErrors(['email' => 'Username or password is invalid']);
    }

    public function logout()
    {
    	\Auth::logout(); //logout function provided by laravel
      return view('wallet_main');
    	// return redirect()->route('login');

    }
}