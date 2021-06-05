<?php

namespace App\Http\Controllers;
use App\Models\Fir;
use App\Models\User;
use App\Models\Station;
use App\Models\Category;
use App\Models\Criminal;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('master');
    }

    public function showDashboard()
    {
        $stations = Station::count('id');
        $users = User::where('role', '=', 'Police')->count('id');
        $criminals = Criminal::count('id');
        $firs = Fir::count('id');
        $chargesheets = Fir::where('status', '=', 'Approved')->count('id');
        

        return view('dashboard.view',[
        'station' => $stations,
        'police' => $users,
        'criminal' => $criminals,
        'fir' => $firs,
        'chargesheet' => $chargesheets,
         ] );
    }
}
