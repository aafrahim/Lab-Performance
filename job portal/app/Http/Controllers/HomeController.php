<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function admin(Request $request){

    	if($request->session()->has('uname')){
    		return view('home.admin');
    	}else{
    		return redirect('/login');
    	}
    }

    function employer(Request $request){

        if($request->session()->has('uname')){
            return view('home.employer');
        }else{
            return redirect('/login');
        }
    }
}



