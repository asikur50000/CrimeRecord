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
        $request->validate([
            'mobilenumber'=> 'required|min:10',
            'nameofaccused'=> 'required|max:20',
            'name'=> 'required|max:20',
            'mobilenumber'=> 'required|min:10',
            'address'=> 'required|max:50',
            'purposeofapplyingfir'=> 'required|min:10|max:100',
          

        ]);
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
    public function showDetails($id)
    {
        $fir = fir::findorFail($id);
         return view('fir.details',compact('fir'));
    }

    //Delete method
    public function deleteFir($id)
    {
         Fir::find($id)->delete();
         return redirect()->back();
    }

    public function updateFir(Request $request,$id)
    {

        $request->validate([
            'fir_no'=> 'required|min:5',
            'remark'=> 'required|max:50',
            
          

        ]);
        $firs = Fir::find($id);
        $firs->status = $request->status;
        $firs->remark = $request->remark;
        $firs->fir_no = $request->fir_no;
        $firs->save();
        return redirect()->back();
    }
    public function showChargesheet()
    {
        $firs = fir::paginate(5);
         return view('chargesheet.form',compact('firs'));
    }
    
    public function editChargesheet($id)
{  
   // $firs = Fir::all();
    //$fir = Fir::find($id);
    //return view('chargesheet.update',compact('fir','firs'));

    return view('chargesheet.update',
    [
          'fir'=>Fir::findorFail($id)
             
    ]);
}
public function updateChargesheet(Request $request,$id)
{  


    $request->validate([
        'sectionoflaw'=> 'required|max:10',
        'officer'=> 'required|max:20',
        'investigationdetails'=> 'required|min:10|max:255',
       
      

    ]);
    
    $fir = Fir::find($id);
    $fir->sectionoflaw = $request->sectionoflaw;
    $fir->officer = $request->officer;
    $fir->investigationdetails = $request->investigationdetails;
    $fir->chargesheet_status = $request->chargesheet_status;
   
    $fir->save();
    return redirect(route('chargesheet.list'))->with('message','Updated Successfully!!!');

    //return view('chargesheet.update',compact('fir','firs'));
}
public function showComplete()
    {
        $firs = fir::paginate(5);
         return view('chargesheet.complete',compact('firs'));
    }


}

