<?php

namespace App\Http\Controllers;
use App\Models\Criminal;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function showForm()
    {
        return view('criminal.form');
    }
    public function storeForm(Request $request)
    {
           //dd($request->all());
           $criminals = new Criminal();
           $criminals->policestation = $request->policestation;
           $criminals->criminalname = $request->criminalname;
           $criminals->criminaldateofbirth = $request->criminaldateofbirth;
           $criminals->crimetype = $request->crimetype;
           $criminals->crimedate = $request->crimedate;
           $criminals->mobilenumber = $request->mobilenumber;
           $criminals->crimetime = $request->crimetime;
           $criminals->zipcode = $request->zipcode;
           $criminals->crimecity = $request->crimecity;
           $criminals->save();
           return redirect()->back()->with('message','Added Successfully');
    }
    public function showList()
    {
         
         $criminals = Criminal::paginate(5);
         return view('criminal.list',compact('criminals'));
    }

    //Delete method
    public function deleteCriminal($id)
    {
         Criminal::find($id)->delete();
         return redirect()->back();
    }
    //edit & update
public function editCriminal($id)
{
    $criminal = Criminal::find($id);
    return view('criminal.update',compact('criminal'));
}
public function updateCriminal(Request $request,$id)
{
//dd($request->all());
$criminals = Criminal::find($id);
$criminals->policestation = $request->policestation;
$criminals->criminalname = $request->criminalname;
$criminals->criminaldateofbirth = $request->criminaldateofbirth;
$criminals->crimetype = $request->crimetype;
$criminals->crimedate = $request->crimedate;
$criminals->mobilenumber = $request->mobilenumber;
$criminals->crimetime = $request->crimetime;
$criminals->zipcode = $request->zipcode;
$criminals->crimecity = $request->crimecity;
$criminals->save();
return redirect(route('criminal.list'))->with('message','Updated Successfully');
}
}

