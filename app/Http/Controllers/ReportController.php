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
       // $report = Criminal::all();
        $report=[];
        $fromDate=null;
        $toDate=null;

        $title='Criminal Report Generate';


        if(isset($_GET['from_date']) && isset($_GET['to_date']) )
        {
            $fromDate=date('Y-m-d',strtotime($_GET['from_date']));
            $toDate=date('Y-m-d',strtotime($_GET['to_date']));

//            $allBooking=Booking::whereDate('booking_from',$fromDate)->get();
            $report=Criminal::orderby('created_at','desc')->whereBetween('created_at',[$fromDate,$toDate])->get();
//            dd($allBooking);
        }

       
        return view('report.criminalview',compact('report','fromDate','toDate','title'));
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
