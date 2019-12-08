<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){

		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		if($user != null){
			$request->session()->put('uname', $request->input('username'));

			$request->session()->put('user', $user);

			if($user->usertype == 'admin')
			{
				return redirect()->route('home.admin');
			}
			else if($user->usertype == 'employee')
			{
				return redirect()->route('home.employer');
			}
		}else{

			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}
}


