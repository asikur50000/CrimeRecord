<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\FrontendTemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CriminalController;
use App\Http\Controllers\FirController;
use App\Http\Controllers\ChargesheetController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/home', function () {
    return view('master');
});
Route::get('/CrimeRecord', function () {
    return view('CrimeRecord');
});

Route::get('/', function () {
    return view('frontend.home');
});



//Route for station processing


Route::get('station/form',[StationController::class,'showForm'])->name('station.form');
Route::post('station/store',[StationController::class,'storeForm'])->name('station.store');
Route::get('station/list',[StationController::class,'showList'])->name('station.list');


//Route for police processing


Route::get('police/form',[PoliceController::class,'showForm'])->name('police.form');
Route::post('police/store',[PoliceController::class,'storeForm'])->name('police.store');
Route::get('police/list',[PoliceController::class,'showList'])->name('police.list');

//Route for Category processing


Route::get('category/form',[CategoryController::class,'showForm'])->name('category.form');
Route::post('category/store',[CategoryController::class,'storeForm'])->name('category.store');
Route::get('category/list',[CategoryController::class,'showList'])->name('category.list');


//Route for Criminial processing


Route::get('criminal/form',[CriminalController::class,'showForm'])->name('criminal.form');
Route::post('criminal/store',[CriminalController::class,'storeForm'])->name('criminal.store');
Route::get('criminal/list',[CriminalController::class,'showList'])->name('criminal.list');


//route for FIR processing


Route::get('fir/form',[FirController::class,'showForm'])->name('fir.form');
Route::post('fir/store',[FirController::class,'storeForm'])->name('fir.store');
Route::get('fir/list',[FirController::class,'showList'])->name('fir.list');
Route::get('fir/details',[FirController::class,'showDetails'])->name('fir.details');
Route::get('chargesheet/list',[FirController::class,'showChargesheet'])->name('chargesheet.list');
Route::get('chargesheet/edit/{id}',[FirController::class,'editChargesheet'])->name('chargesheet.edit');
Route::post('chargesheet/edit/{id}',[FirController::class,'updateChargesheet'])->name('chargesheet.update');

Route::get('chargesheet/complete',[FirController::class,'showComplete'])->name('chargesheet.complete');

//route for Chargesheet processing

//Route::get('chargesheet/list',[ChargesheetController::class,'showList'])->name('chargesheet.list');



//delete route


Route::get('station/delete/{id}',[StationController::class,'deleteStation'])->name('delete.station');
Route::get('police/delete/{id}',[PoliceController::class,'deletePolice'])->name('delete.police');
Route::get('category/delete/{id}',[CategoryController::class,'deletecategory'])->name('delete.category');
Route::get('criminal/delete/{id}',[CriminalController::class,'deletecriminal'])->name('delete.criminal');
Route::get('fir/delete/{id}',[FirController::class,'deletefir'])->name('delete.fir');



//Edit and update route


Route::get('station/form/{id}',[StationController::class,'editStation'])->name('edit.station');
Route::post('station/form/{id}',[StationController::class,'updateStation'])->name('update.station');

Route::get('police/form/{id}',[PoliceController::class,'editPolice'])->name('edit.police');
Route::post('police/form/{id}',[PoliceController::class,'updatePolice'])->name('update.police');

Route::get('category/form/{id}',[CategoryController::class,'editCategory'])->name('edit.category');
Route::post('category/form/{id}',[CategoryController::class,'updateCategory'])->name('update.category');

Route::get('criminal/form/{id}',[CriminalController::class,'editCriminal'])->name('edit.criminal');
Route::post('criminal/form/{id}',[CriminalController::class,'updateCriminal'])->name('update.criminal');


Route::post('fir/form/{id}',[FirController::class,'updateFir'])->name('update.fir');

