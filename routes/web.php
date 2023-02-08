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
Route::prefix('/superadmin')->group(function () {
    Route::get('/department',[DepartmentController::class,'index'])->middleware('superadmin');
    Route::get('/department/add',[DepartmentController::class,'add'])->middleware('superadmin');
    Route::post('/department/save',[DepartmentController::class,'save'])->middleware('superadmin');
    Route::get('/department/edit/{id}',[DepartmentController::class,'edit'])->middleware('superadmin');
    Route::post('/department/update/{id}',[DepartmentController::class,'update'])->middleware('superadmin');
    Route::get('/department/delete/{id}',[DepartmentController::class,'delete'])->middleware('superadmin');

    Route::get('/employee',[EmployeeController::class,'index'])->middleware('superadmin');
    Route::get('/employee/add',[EmployeeController::class,'add'])->middleware('superadmin');
    Route::post('/employee/save',[EmployeeController::class,'save'])->middleware('superadmin');
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->middleware('superadmin');
    Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->middleware('superadmin');
    Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->middleware('superadmin');
});
Route::get('/superadmin',[SuperAdmin::class,'index'])->middleware('superadmin');




Route::get('/admin',[Admin::class,'index'])->middleware('admin');

//RF Feding Route
Route::prefix('/admin')->group(function (){
    Route::get('/rf-feding',[RfController::class,'index'])->middleware('admin');
    Route::get('/rf-feding/view',[RfController::class,'view'])->middleware('admin');
    Route::post('/rf-feding/save',[RfController::class,'save'])->middleware('admin');
    Route::get('/rf-feding/add',[RfController::class,'add'])->middleware('admin');
    Route::get('/rf-feding/edit/{id}',[RfController::class,'edit'])->middleware('admin');
    Route::post('/rf-feding/update/{id}',[RfController::class,'update'])->middleware('admin');
    Route::get('/rf-feding/delete/{id}',[RfController::class,'delete'])->middleware('admin');

//Batching Report Routing
    Route::get('/batching-report',[BatchingController::class,'index'])->middleware('admin');
    Route::get('/batching-report/view',[BatchingController::class,'view'])->middleware('admin');
    Route::post('/batching-report/save',[BatchingController::class,'save'])->middleware('admin');
    Route::get('/batching-report/add',[BatchingController::class,'add'])->middleware('admin');
    Route::get('/batching-report/edit/{id}',[BatchingController::class,'edit'])->middleware('admin');
    Route::post('/batching-report/update/{id}',[BatchingController::class,'update'])->middleware('admin');
    Route::get('/batching-report/delete/{id}',[BatchingController::class,'delete'])->middleware('admin');

//Flow report Route
    Route::get('/flow-report',[FlowController::class,'index'])->middleware('admin');
    Route::get('/flow-report/view',[FlowController::class,'view'])->middleware('admin');
    Route::post('/flow-report/save',[FlowController::class,'save'])->middleware('admin');
    Route::get('/flow-report/add',[FlowController::class,'add'])->middleware('admin');
    Route::get('/flow-report/edit/{id}',[FlowController::class,'edit'])->middleware('admin');
    Route::post('/flow-report/update/{id}',[FlowController::class,'update'])->middleware('admin');
    Route::get('/flow-report/delete/{id}',[FlowController::class,'delete'])->middleware('admin');

//Flow Raising Report Route
    Route::get('/raising-report',[RaisingController::class,'index'])->middleware('admin');
    Route::get('/raising-report/view',[RaisingController::class,'view'])->middleware('admin');
    Route::post('/raising-report/save',[RaisingController::class,'save'])->middleware('admin');
    Route::get('/raising-report/add',[RaisingController::class,'add'])->middleware('admin');
    Route::get('/raising-report/edit/{id}',[RaisingController::class,'edit'])->middleware('admin');
    Route::post('/raising-report/update/{id}',[RaisingController::class,'update'])->middleware('admin');
    Route::get('/raising-report/delete/{id}',[RaisingController::class,'delete'])->middleware('admin');

//Flow Cutting Report Route
    Route::get('/cutting-report',[CuttingControllter::class,'index'])->middleware('admin');
    Route::get('/cutting-report/view',[CuttingControllter::class,'view'])->middleware('admin');
    Route::post('/cutting-report/save',[CuttingControllter::class,'save'])->middleware('admin');
    Route::get('/cutting-report/add',[CuttingControllter::class,'add'])->middleware('admin');
    Route::get('/cutting-report/edit/{id}',[CuttingControllter::class,'edit'])->middleware('admin');
    Route::post('/cutting-report/update/{id}',[CuttingControllter::class,'update'])->middleware('admin');
    Route::get('/cutting-report/delete/{id}',[CuttingControllter::class,'delete'])->middleware('admin');

//Flow Autoclave Report Route
    Route::get('/autoclave-report',[AutoclaveController::class,'index'])->middleware('admin');
    Route::get('/autoclave-report/view',[AutoclaveController::class,'view'])->middleware('admin');
    Route::post('/autoclave-report/save',[AutoclaveController::class,'save'])->middleware('admin');
    Route::get('/autoclave-report/add',[AutoclaveController::class,'add'])->middleware('admin');
    Route::get('/autoclave-report/edit/{id}',[AutoclaveController::class,'edit'])->middleware('admin');
    Route::post('/autoclave-report/update/{id}',[AutoclaveController::class,'update'])->middleware('admin');
    Route::get('/autoclave-report/delete/{id}',[AutoclaveController::class,'delete'])->middleware('admin');

//Flow Labour Report Route
    Route::get('/labour-report',[LabourDeploymentController::class,'index'])->middleware('admin');
    Route::get('/labour-report/view',[LabourDeploymentController::class,'view'])->middleware('admin');
    Route::post('/labour-report/save',[LabourDeploymentController::class,'save'])->middleware('admin');
    Route::get('/labour-report/add',[LabourDeploymentController::class,'add'])->middleware('admin');
    Route::get('/labour-report/edit/{id}',[LabourDeploymentController::class,'edit'])->middleware('admin');
    Route::post('/labour-report/update/{id}',[LabourDeploymentController::class,'update'])->middleware('admin');
    Route::get('/labour-report/delete/{id}',[LabourDeploymentController::class,'delete'])->middleware('admin');
    Route::get('/labour-report/employeeName/{id}',[LabourDeploymentController::class,'employeeName'])->middleware('admin');

//Flow LogBook Report Route
    Route::get('/logbook-report',[LogbookController::class,'index'])->middleware('admin');
    Route::get('/logbook-report/view',[LogbookController::class,'view'])->middleware('admin');
    Route::post('/logbook-report/save',[LogbookController::class,'save'])->middleware('admin');
    Route::get('/logbook-report/add',[LogbookController::class,'add'])->middleware('admin');
    Route::get('/logbook-report/edit/{id}',[LogbookController::class,'edit'])->middleware('admin');
    Route::post('/logbook-report/update/{id}',[LogbookController::class,'update'])->middleware('admin');
    Route::get('/logbook-report/delete/{id}',[LogbookController::class,'delete'])->middleware('admin');
});


