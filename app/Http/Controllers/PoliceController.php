<?php

namespace App\Http\Controllers;
use App\Models\Police;
use App\Models\Station;
use App\Models\User;

use Illuminate\Http\Request;

class PoliceController extends Controller
{
    public function showForm()
    { 
        $stations = Station::all();
        return view('police.form',compact('stations'));
    }
    public function storeForm(Request $request)
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
            'station'=> 'required',
            'role'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'nid'=> 'required|min:10',
            'age'=> 'required',
            'gender'=> 'required',
            'password'=> 'required',
            'image'=> 'required',
          

        ]);
           //dd($request->all());
           $users = new User();
           $users->name = $request->name;
           $users->station = $request->station;
           $users->role = $request->role;
           $users->email = $request->email;
           $users->nid = $request->nid;
           $users->age = $request->age;
           $users->address = $request->address;
           $users->gender = $request->gender;
           $users->password = bcrypt($request->password);
           $users->image =  ($request->image);
           $users->save();
           return redirect()->back()->with('message','Police Registration Done Successfully');
    }
    public function showList()
    {
         
         $users = User::paginate(5);
         return view('police.list',compact('users'));
    }

    //delete 
    public function deletePolice($id)
    {
        police::find($id)->delete();
        return redirect()->back();
    }

//edit & update
public function editPolice($id)
{
    $police = Police::find($id);
    return view('police.update',compact('police'));
}
public function updatePolice(Request $request,$id)
{


//dd($request->all());
$polices = Police::find($id);
$polices->policename = $request->policename;
$polices->email = $request->email;
$polices->mobile = $request->mobile;
$polices->address = $request->address;

//  $polices->password = $request->password;
$polices->save();
return redirect(route('police.list'))->with('message','Updated Successfully'); 
}
}

