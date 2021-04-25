<?php

namespace App\Http\Controllers;
use App\Models\Police;
use App\Models\Station;

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
           //dd($request->all());
           $polices = new Police();
           $polices->station_id = $request->policestation;
           $polices->policename = $request->policename;
           $polices->email = $request->email;
           $polices->mobile = $request->mobile;
           $polices->address = $request->address;
         //  $polices->password = $request->password;
           $polices->save();
           return redirect()->back()->with('message','Added Successfully');
    }
    public function showList()
    {
         
         $polices = Police::paginate(5);
         return view('police.list',compact('polices'));
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
$polices->policestation = $request->policestation;
$polices->policename = $request->policename;
$polices->email = $request->email;
$polices->mobile = $request->mobile;
$polices->address = $request->address;

//  $polices->password = $request->password;
$polices->save();
return redirect(route('police.list'))->with('message','Updated Successfully'); 
}
}

