<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    function index(Request $request){

        if($request->session()->has('uname')){
            
            $emps = \App\User::where('usertype', 'employee')
                               ->get();
            return view('employer.index')->with('emps', $emps);

        }else{
            return redirect()->route('login.index');
        }
    }

    function add(){
    	return view('employer.add');
    }

    function store(Request $request){
    
        $user = new User();
        $user->name =$request->name;
        $user->username = $request->username;
        $user->password =$request->password;
        $user->contact =$request->contact;
        $user->company =$request->company;
        $user->usertype ='employee';

        if($user->save()){
            return redirect()->route('employer.index');
        }else{
            return redirect()->route('employer.add');
        }
    }

    function edit($id){
    	$user = User::find($id);
    	return view('employer.edit')->with('user', $user);
    }


    function update(Request $request, $id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->contact = $request->contact;
        $user->company = $request->company;
        $user->save();
    	return redirect()->route('employer.index');
    }

    function delete($id){

        $user = User::find($id);
        if($user->delete())
        {
        	return redirect()->route('employer.index');
        }
    }
}
