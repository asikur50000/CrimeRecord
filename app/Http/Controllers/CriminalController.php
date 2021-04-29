<?php

namespace App\Http\Controllers;
use App\Models\Criminal;
use App\Models\Category;
use App\Models\Station;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function showForm()
    {   $categorys = Category :: all();
        $stations = Station :: all();
        return view('criminal.form',compact('categorys','stations'));
    }
    public function storeForm(Request $request)
    {



        $file_name='';
        if($request->has('image')) 
        {
            $avatar = $request->file('image');

         
            $file_name = date('Ymdhms').'.' . $avatar->getClientOriginalExtension();
           
            $avatar->storeAs('criminal', $file_name);
        }
           //dd($request->all());
           $criminals = new Criminal();
           $criminals->station_id = $request->policestation;
           $criminals->criminalname = $request->criminalname;
           $criminals->criminaldateofbirth = $request->criminaldateofbirth;
           $criminals->category_id = $request->crimetype;
           $criminals->crimedate = $request->crimedate;
           $criminals->mobilenumber = $request->mobilenumber;
           $criminals->crimetime = $request->crimetime;
           $criminals->zipcode = $request->zipcode;
           $criminals->crimecity = $request->crimecity;
           $criminals->criminalage = $request->criminalage;
           $criminals->criminalheight = $request->criminalheight;
           $criminals->image = $file_name;
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
//$criminals->policestation = $request->policestation;
$criminals->criminalname = $request->criminalname;
$criminals->criminaldateofbirth = $request->criminaldateofbirth;
//$criminals->crimetype = $request->crimetype;
$criminals->crimedate = $request->crimedate;
$criminals->mobilenumber = $request->mobilenumber;
$criminals->crimetime = $request->crimetime;
$criminals->zipcode = $request->zipcode;
$criminals->crimecity = $request->crimecity;
$criminals->criminalage = $request->criminalage;
$criminals->criminalheight = $request->criminalheight;
$criminals->save();
return redirect(route('criminal.list'))->with('message','Updated Successfully');
}
public function viewCriminal($id)
{  
   

    return view('criminal.view',
    [
          'criminal'=>Criminal::findorFail($id)
             
    ]);
}
}

