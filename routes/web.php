<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;


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



Auth::routes();
Route::get('/', function () { return view('auth.login'); });

Route::group(['middleware' => ['auth']], function () {

    // corporate routes
    Route::get('/branches', function(){ return view('corporate-dashboard.branches'); });
    Route::post('add-branch',[BranchController::class,'addBranch']);


    //manage employee
    Route::get('/employees', function(){ return view('corporate-dashboard.employees'); });
    Route::post('add-employee',[EmployeeController::class,'addEmployee']);



    Route::get('/index', function(){ return view('corporate-dashboard.index'); });
    Route::get('/manage_account', function(){ return view('corporate-dashboard.manage_account'); });
    Route::get('/manage_account', function(){ return view('corporate-dashboard.manage_account'); });
    Route::get('/reports', function(){ return view('corporate-dashboard.reports'); });
    Route::get('/wallet-access-control', function(){ return view('corporate-dashboard.wallet_access_control'); });
});





















