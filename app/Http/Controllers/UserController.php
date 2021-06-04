<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Station;

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
               return redirect()->route('dashboard.view')->with('message','Login Success!!');
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

    public function registration()
        {
            return view('admin.registration');
        }

        public function storeRegistration(Request $request)
    {      

        $file_name='';
        if($request->has('image')) 
        {
            $avatar = $request->file('image');

         
            $file_name = date('Ymdhms').'.' . $avatar->getClientOriginalExtension();
           
            $avatar->storeAs('user', $file_name);
        }

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'nid'=> 'required|min:10',
            'age'=> 'required',
            'gender'=> 'required',
            'address'=> 'required',
            'password'=> 'required',
            'image'=> 'required',

        ]);
           //dd($request->all());
           $users = new User();
           $users->name = $request->name;
           $users->role = $request->role;
           $users->email = $request->email;
           $users->image = $file_name;
           $users->username = $request->username;
           $users->nid = $request->nid;
           $users->age = $request->age;
           $users->address = $request->address;
           $users->gender = $request->gender;
           $users->password = bcrypt($request->password);
           $users->save();
           return redirect()->back()->with('message','Registration Successfully');
    }

    public function profile()
        {
            return view('partial.profile');
        }
        public function viewPolice($id)
        {  
           
        
            return view('police.view',
            [
                  'user'=>User::findorFail($id)
                     
            ]);
        }
         
        public function editProfile($id)
        {
             $user = User::find($id);
    
    
            return view('partial.update',compact('user'));
        }
        
        public function updateProfile(Request $request,$id)
        {
             //dd($request->all());
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'nid'=>'required',
            'email'=>'required|email',
            
            'age'=>'required',  
            'gender'=>'required',
        ]);
        $file_name='';
        if($request->has('image')) 
        {
            $avatar = $request->file('image');
            $file_name = date('Ymdhms').'.' . $avatar->getClientOriginalExtension();
            
            $avatar->storeAs('user', $file_name);
        }
        $users =  User::find($id);
        $users->name =$request->name;
        $users->username =$request->username;
        $users->nid =$request->nid;
        $users->age =$request->age;
        $users->address =$request->address;
        $users->gender =$request->gender;
        $users->email =$request->email;
        $users->image=$file_name;
        $users->save();

    return redirect(route('partial.profile',$users->id))->with('message','Profile Updated Successfully.');
    }
        


}
