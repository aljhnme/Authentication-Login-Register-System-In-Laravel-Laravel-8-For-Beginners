<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class usersController extends Controller
{
    function insert(Request $request)
    {
         $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|confirmed|min:6'
          ]);
         
         $data=$request->all();
         $check= $this->create($data);

         return redirect('/login')->with('success','successfully registered');
    }
    function create(array $data)
    {
       return User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => Hash::make($data['password'])
       ]);
    }
    function chack_login(Request $request)
    {
      $request->validate([
        'email' => 'required',
        'password' => 'required'
       ]);
      
       $data=$request->only('email','password');

       if(Auth::attempt($data))
       {
         return redirect('/login_success');
       }
         return back()->with('error','Wrong Login Details');
    }
    function logout()
    {
      Auth::logout();
      Session::flush();
      return redirect('/');
    }
}
