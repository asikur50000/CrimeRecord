<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
        // admin login
        public function login()
        {
            return view('admin.login');
        }
    
        public function process(Request $request)
        {
           $login = $request->only('email','password');
           if (Auth::attempt($login)) {
               $request->session()->regenerate();
               return redirect()->route('dashboard')->with('message','Login Success!!');
           }
           else
           {
               return redirect()->back()->withErrors('Invalid Credentials');
           }
        }

          //logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logout Success!');
    }
}
