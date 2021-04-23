<?php

namespace App\Http\Controllers;
use App\Models\Fir;
use App\Models\Station;
use App\Models\Category;

use Illuminate\Http\Request;

class FirController extends Controller
{
    public function showForm()
    {   
        
        $categorys = Category :: all();
        $stations = Station :: all();
        return view('fir.form',compact('categorys','stations'));
    }
    public function storeForm(Request $request)
    {
           //dd($request->all());
           $firs = new fir();
           $firs->station_id = $request->policestation;
           $firs->category_id = $request->crimetype;
           $firs->nameofaccused = $request->nameofaccused;
           $firs->name = $request->name;
           $firs->mobilenumber = $request->mobilenumber;
           $firs->address = $request->address;
           //$firs->relationwithaccusedperson = $request->relationwithaccusedperson;
           $firs->email = $request->email;
           //$firs->status = $request->status;
           $firs->purposeofapplyingfir = $request->purposeofapplyingfir;
           $firs->save();
           return redirect()->back()->with('message','Added Successfully');
    }
    public function showList()
    {
         
         $firs = fir::paginate(5);
         return view('fir.list',compact('firs'));
    }
    public function showDetails()
    {
        $firs = fir::paginate(5);
         return view('fir.details',compact('firs'));
    }

    //Delete method
    public function deleteFir($id)
    {
         Fir::find($id)->delete();
         return redirect()->back();
    }

    public function updateFir(Request $request,$id)
    {
        $firs = Fir::find($id);
        $firs->status = $request->status;
        $firs->remark = $request->remark;
        $firs->save();
        return redirect()->back();
    }
    public function showChargesheet()
    {
        $firs = fir::paginate(5);
         return view('chargesheet.form',compact('firs'));
    }


}

