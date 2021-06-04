@extends('master')
@section('page')
@if(Auth::check() && Auth::user()->role  == "admin" || Auth::user()->role  == "Police")
<div class="container-fluid">
    
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Police Station</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link"  href=""> {{  $station }} </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Registered Police</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="">{{  $police }} </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Criminal</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="">{{ $criminal }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Total FIR</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="">{{ $fir }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Number of Chargesheet</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link"  href="">{{ $fir }}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
      
    </div>
    
</div>
@endif
@stop