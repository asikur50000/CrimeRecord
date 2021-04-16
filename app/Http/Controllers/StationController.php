<?php

namespace App\Http\Controllers;
use App\Models\Station;

use Illuminate\Http\Request;

class StationController extends Controller
{
    public function showForm()
    {
        return view('station.form');
    }
    public function storeForm(Request $request)
    {
        $request->validate([
            'code'=> 'required',
            'name'=> 'required'

        ]);

        //dd($request->all());
        $stations = new Station();
        $stations->name = $request->name;
        $stations->code = $request->code;
        $stations->save();
        return redirect()->back()->with('message','Added Successfully');
    }
    public function showList()
    {
         
         $stations = Station::paginate(5);
         return view('station.list',compact('stations'));
    }
    

    //Delete method
    public function deleteStation($id)
    {
         Station::find($id)->delete();
         return redirect()->back();
    }

    //edit & update
    public function editStation($id)
    {
        $station = Station::find($id);
        return view('station.update',compact('station'));
    }
    public function updateStation(Request $request,$id)
    {
        $request->validate([
            'code'=> 'required',
            'name'=> 'required'

        ]);

        //dd($request->all());
        $stations = Station::find($id);
        $stations->name = $request->name;
        $stations->code = $request->code;
        $stations->save();
        return redirect(route('station.list'))->with('message','Updated Successfully');   
    }
}

