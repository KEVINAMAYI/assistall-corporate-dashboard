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

    //manage branches
    Route::get('/branches',[BranchController::class,'index']);
    Route::post('add-branch',[BranchController::class,'addBranch']);
    Route::get('delete-branch/{branch}',[BranchController::class,'deleteBranch']);
    Route::get('get-branch-data/{branch}',[BranchController::class,'getBranchData']);



    //manage employees
    Route::get('/employees',[EmployeeController::class,'index'] );
    Route::post('add-employee',[EmployeeController::class,'addEmployee']);
    Route::get('delete-employee/{employee}',[EmployeeController::class,'deleteEmployee']);




    Route::get('/index', function(){ return view('corporate-dashboard.index'); });
    Route::get('/manage_account', function(){ return view('corporate-dashboard.manage_account'); });
    Route::get('/manage_account', function(){ return view('corporate-dashboard.manage_account'); });
    Route::get('/reports', function(){ return view('corporate-dashboard.reports'); });
    Route::get('/wallet-access-control', function(){ return view('corporate-dashboard.wallet_access_control'); });
});





















