<?php

namespace App\Http\Controllers;
use App\Models\Criminal;
use App\Models\Category;
use App\Models\Station;
use App\Models\Fir;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generateCriminalReport()
    {
        $report = Criminal::all();
       
        return view('report.criminalview',compact('report'));
    }
    public function generateCrimeReport()
    {
        $firs = Fir::count('id');
        $eveteasing = Fir::where('category_id', '=', '2')->count('id');
        $personal = Fir::where('category_id', '=', '1')->count('id');
        $murders = Fir::where('category_id', '=', '3')->count('id');

        return view('report.crimeview',[
                 'fir' => $firs, 
                 'eve' => $eveteasing,
                 'per' => $personal,
                 'murder' => $murders,
        ]);
    }
}
