<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\DashboardController as SuperAdmin;
use App\Http\Controllers\admin\DashboardController as Admin;
use App\Http\Controllers\superadmin\DepartmentController;
use App\Http\Controllers\superadmin\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\RfController;
use App\Http\Controllers\admin\BatchingController;
use App\Http\Controllers\admin\FlowController;
use App\Http\Controllers\admin\RaisingController;
use App\Http\Controllers\admin\CuttingControllter;
use App\Http\Controllers\admin\AutoclaveController;
use App\Http\Controllers\admin\LogbookController;
use App\Http\Controllers\admin\LabourDeploymentController;

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
Route::get('/updateapp', function()
{
    exec('composer dump-autoload'); // if you're not planning to access it through a route.

    echo 'dump-autoload complete';
});
Route::get('/',[LoginController::class,'index']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/send-otp',[LoginController::class,'sendOtp']);
Route::get('/otp/{id}',[LoginController::class,'otp']);
Route::post('/check-otp/{id}',[LoginController::class,'checkOtp']);
Route::get('/test',[LoginController::class,'test']);
Route::group(['prefix'=>'/superadmin','middleware'=>'superadmin'],function () {
    Route::get('/department',[DepartmentController::class,'index']);
    Route::get('/department/add',[DepartmentController::class,'add']);
    Route::post('/department/save',[DepartmentController::class,'save']);
    Route::get('/department/edit/{id}',[DepartmentController::class,'edit']);
    Route::post('/department/update/{id}',[DepartmentController::class,'update']);
    Route::get('/department/delete/{id}',[DepartmentController::class,'delete']);

    Route::get('/employee',[EmployeeController::class,'index']);
    Route::get('/employee/add',[EmployeeController::class,'add']);
    Route::post('/employee/save',[EmployeeController::class,'save']);
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit']);
    Route::post('/employee/update/{id}',[EmployeeController::class,'update']);
    Route::get('/employee/delete/{id}',[EmployeeController::class,'delete']);
});
Route::get('/superadmin',[SuperAdmin::class,'index'])->middleware('superadmin');




Route::get('/admin',[Admin::class,'index'])->middleware('admin');

//RF Feding Route
Route::group(['prefix'=>'/admin','middleware'=>'admin'],function (){
    Route::get('/rf-feding',[RfController::class,'index']);
    Route::get('/rf-feding/view',[RfController::class,'view']);
    Route::post('/rf-feding/save',[RfController::class,'save']);
    Route::get('/rf-feding/add',[RfController::class,'add']);
    Route::get('/rf-feding/edit/{id}',[RfController::class,'edit']);
    Route::post('/rf-feding/update/{id}',[RfController::class,'update']);
    Route::get('/rf-feding/delete/{id}',[RfController::class,'delete']);

//Batching Report Routing
    Route::get('/batching-report',[BatchingController::class,'index']);
    Route::get('/batching-report/view',[BatchingController::class,'view']);
    Route::post('/batching-report/save',[BatchingController::class,'save']);
    Route::get('/batching-report/add',[BatchingController::class,'add']);
    Route::get('/batching-report/edit/{id}',[BatchingController::class,'edit']);
    Route::post('/batching-report/update/{id}',[BatchingController::class,'update']);
    Route::get('/batching-report/delete/{id}',[BatchingController::class,'delete']);

//Flow report Route
    Route::get('/flow-report',[FlowController::class,'index']);
    Route::get('/flow-report/view',[FlowController::class,'view']);
    Route::post('/flow-report/save',[FlowController::class,'save']);
    Route::get('/flow-report/add',[FlowController::class,'add']);
    Route::get('/flow-report/edit/{id}',[FlowController::class,'edit']);
    Route::post('/flow-report/update/{id}',[FlowController::class,'update']);
    Route::get('/flow-report/delete/{id}',[FlowController::class,'delete']);

//Flow Raising Report Route
    Route::get('/raising-report',[RaisingController::class,'index']);
    Route::get('/raising-report/view',[RaisingController::class,'view']);
    Route::post('/raising-report/save',[RaisingController::class,'save']);
    Route::get('/raising-report/add',[RaisingController::class,'add']);
    Route::get('/raising-report/edit/{id}',[RaisingController::class,'edit']);
    Route::post('/raising-report/update/{id}',[RaisingController::class,'update']);
    Route::get('/raising-report/delete/{id}',[RaisingController::class,'delete']);

//Flow Cutting Report Route
    Route::get('/cutting-report',[CuttingControllter::class,'index']);
    Route::get('/cutting-report/view',[CuttingControllter::class,'view']);
    Route::post('/cutting-report/save',[CuttingControllter::class,'save']);
    Route::get('/cutting-report/add',[CuttingControllter::class,'add']);
    Route::get('/cutting-report/edit/{id}',[CuttingControllter::class,'edit']);
    Route::post('/cutting-report/update/{id}',[CuttingControllter::class,'update']);
    Route::get('/cutting-report/delete/{id}',[CuttingControllter::class,'delete']);

//Flow Autoclave Report Route
    Route::get('/autoclave-report',[AutoclaveController::class,'index']);
    Route::get('/autoclave-report/view',[AutoclaveController::class,'view']);
    Route::post('/autoclave-report/save',[AutoclaveController::class,'save']);
    Route::get('/autoclave-report/add',[AutoclaveController::class,'add']);
    Route::get('/autoclave-report/edit/{id}',[AutoclaveController::class,'edit']);
    Route::post('/autoclave-report/update/{id}',[AutoclaveController::class,'update']);
    Route::get('/autoclave-report/delete/{id}',[AutoclaveController::class,'delete']);

//Flow Labour Report Route
    Route::get('/labour-report',[LabourDeploymentController::class,'index']);
    Route::get('/labour-report/view',[LabourDeploymentController::class,'view']);
    Route::post('/labour-report/save',[LabourDeploymentController::class,'save']);
    Route::get('/labour-report/add',[LabourDeploymentController::class,'add']);
    Route::get('/labour-report/edit/{id}',[LabourDeploymentController::class,'edit']);
    Route::post('/labour-report/update/{id}',[LabourDeploymentController::class,'update']);
    Route::get('/labour-report/delete/{id}',[LabourDeploymentController::class,'delete']);
    Route::get('/labour-report/employeeName/{id}',[LabourDeploymentController::class,'employeeName']);

//Flow LogBook Report Route
    Route::get('/logbook-report',[LogbookController::class,'index']);
    Route::get('/logbook-report/view',[LogbookController::class,'view']);
    Route::post('/logbook-report/save',[LogbookController::class,'save']);
    Route::get('/logbook-report/add',[LogbookController::class,'add']);
    Route::get('/logbook-report/edit/{id}',[LogbookController::class,'edit']);
    Route::post('/logbook-report/update/{id}',[LogbookController::class,'update']);
    Route::get('/logbook-report/delete/{id}',[LogbookController::class,'delete']);
});


