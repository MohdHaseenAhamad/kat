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

Route::get('/',[LoginController::class,'index']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/send-otp',[LoginController::class,'sendOtp']);
Route::get('/otp/{id}',[LoginController::class,'otp']);
Route::post('/check-otp/{id}',[LoginController::class,'checkOtp']);
Route::get('/test',[LoginController::class,'test']);
Route::get('/superadmin',[SuperAdmin::class,'index'])->middleware('superadmin');


Route::get('/superadmin/department',[DepartmentController::class,'index'])->middleware('superadmin');
Route::get('/superadmin/department/add',[DepartmentController::class,'add'])->middleware('superadmin');
Route::post('/superadmin/department/save',[DepartmentController::class,'save'])->middleware('superadmin');
Route::get('/superadmin/department/edit/{id}',[DepartmentController::class,'edit'])->middleware('superadmin');
Route::post('/superadmin/department/update/{id}',[DepartmentController::class,'update'])->middleware('superadmin');
Route::get('/superadmin/department/delete/{id}',[DepartmentController::class,'delete'])->middleware('superadmin');

Route::get('/superadmin/employee',[EmployeeController::class,'index'])->middleware('superadmin');
Route::get('/superadmin/employee/add',[EmployeeController::class,'add'])->middleware('superadmin');
Route::post('/superadmin/employee/save',[EmployeeController::class,'save'])->middleware('superadmin');
Route::get('/superadmin/employee/edit/{id}',[EmployeeController::class,'edit'])->middleware('superadmin');
Route::post('/superadmin/employee/update/{id}',[EmployeeController::class,'update'])->middleware('superadmin');
Route::get('/superadmin/employee/delete/{id}',[EmployeeController::class,'delete'])->middleware('superadmin');

Route::get('/admin',[Admin::class,'index'])->middleware('admin');

//RF Feding Route
Route::get('/admin/rf-feding',[RfController::class,'index'])->middleware('admin');
Route::get('/admin/rf-feding/view',[RfController::class,'view'])->middleware('admin');
Route::post('/admin/rf-feding/save',[RfController::class,'save'])->middleware('admin');
Route::get('/admin/rf-feding/add',[RfController::class,'add'])->middleware('admin');
Route::get('/admin/rf-feding/edit/{id}',[RfController::class,'edit'])->middleware('admin');
Route::post('/admin/rf-feding/update/{id}',[RfController::class,'update'])->middleware('admin');
Route::get('/admin/rf-feding/delete/{id}',[RfController::class,'delete'])->middleware('admin');

//Batching Report Routing
Route::get('/admin/batching-report',[BatchingController::class,'index'])->middleware('admin');
Route::get('/admin/batching-report/view',[BatchingController::class,'view'])->middleware('admin');
Route::post('/admin/batching-report/save',[BatchingController::class,'save'])->middleware('admin');
Route::get('/admin/batching-report/add',[BatchingController::class,'add'])->middleware('admin');
Route::get('/admin/batching-report/edit/{id}',[BatchingController::class,'edit'])->middleware('admin');
Route::post('/admin/batching-report/update/{id}',[BatchingController::class,'update'])->middleware('admin');
Route::get('/admin/batching-report/delete/{id}',[BatchingController::class,'delete'])->middleware('admin');

//Flow report Route
Route::get('/admin/flow-report',[FlowController::class,'index'])->middleware('admin');
Route::get('/admin/flow-report/view',[FlowController::class,'view'])->middleware('admin');
Route::post('/admin/flow-report/save',[FlowController::class,'save'])->middleware('admin');
Route::get('/admin/flow-report/add',[FlowController::class,'add'])->middleware('admin');
Route::get('/admin/flow-report/edit/{id}',[FlowController::class,'edit'])->middleware('admin');
Route::post('/admin/flow-report/update/{id}',[FlowController::class,'update'])->middleware('admin');
Route::get('/admin/flow-report/delete/{id}',[FlowController::class,'delete'])->middleware('admin');

//Flow Raising Report Route
Route::get('/admin/raising-report',[RaisingController::class,'index'])->middleware('admin');
Route::get('/admin/raising-report/view',[RaisingController::class,'view'])->middleware('admin');
Route::post('/admin/raising-report/save',[RaisingController::class,'save'])->middleware('admin');
Route::get('/admin/raising-report/add',[RaisingController::class,'add'])->middleware('admin');
Route::get('/admin/raising-report/edit/{id}',[RaisingController::class,'edit'])->middleware('admin');
Route::post('/admin/raising-report/update/{id}',[RaisingController::class,'update'])->middleware('admin');
Route::get('/admin/raising-report/delete/{id}',[RaisingController::class,'delete'])->middleware('admin');

//Flow Cutting Report Route
Route::get('/admin/cutting-report',[CuttingControllter::class,'index'])->middleware('admin');
Route::get('/admin/cutting-report/view',[CuttingControllter::class,'view'])->middleware('admin');
Route::post('/admin/cutting-report/save',[CuttingControllter::class,'save'])->middleware('admin');
Route::get('/admin/cutting-report/add',[CuttingControllter::class,'add'])->middleware('admin');
Route::get('/admin/cutting-report/edit/{id}',[CuttingControllter::class,'edit'])->middleware('admin');
Route::post('/admin/cutting-report/update/{id}',[CuttingControllter::class,'update'])->middleware('admin');
Route::get('/admin/cutting-report/delete/{id}',[CuttingControllter::class,'delete'])->middleware('admin');

//Flow Autoclave Report Route
Route::get('/admin/autoclave-report',[AutoclaveController::class,'index'])->middleware('admin');
Route::get('/admin/autoclave-report/view',[AutoclaveController::class,'view'])->middleware('admin');
Route::post('/admin/autoclave-report/save',[AutoclaveController::class,'save'])->middleware('admin');
Route::get('/admin/autoclave-report/add',[AutoclaveController::class,'add'])->middleware('admin');
Route::get('/admin/autoclave-report/edit/{id}',[AutoclaveController::class,'edit'])->middleware('admin');
Route::post('/admin/autoclave-report/update/{id}',[AutoclaveController::class,'update'])->middleware('admin');
Route::get('/admin/autoclave-report/delete/{id}',[AutoclaveController::class,'delete'])->middleware('admin');

//Flow Labour Report Route
Route::get('/admin/labour-report',[LabourDeploymentController::class,'index'])->middleware('admin');
Route::get('/admin/labour-report/view',[LabourDeploymentController::class,'view'])->middleware('admin');
Route::post('/admin/labour-report/save',[LabourDeploymentController::class,'save'])->middleware('admin');
Route::get('/admin/labour-report/add',[LabourDeploymentController::class,'add'])->middleware('admin');
Route::get('/admin/labour-report/edit/{id}',[LabourDeploymentController::class,'edit'])->middleware('admin');
Route::post('/admin/labour-report/update/{id}',[LabourDeploymentController::class,'update'])->middleware('admin');
Route::get('/admin/labour-report/delete/{id}',[LabourDeploymentController::class,'delete'])->middleware('admin');

//Flow LogBook Report Route
Route::get('/admin/logbook-report',[LogbookController::class,'index'])->middleware('admin');
Route::get('/admin/logbook-report/view',[LogbookController::class,'view'])->middleware('admin');
Route::post('/admin/logbook-report/save',[LogbookController::class,'save'])->middleware('admin');
Route::get('/admin/logbook-report/add',[LogbookController::class,'add'])->middleware('admin');
Route::get('/admin/logbook-report/edit/{id}',[LogbookController::class,'edit'])->middleware('admin');
Route::post('/admin/logbook-report/update/{id}',[LogbookController::class,'update'])->middleware('admin');
Route::get('/admin/logbook-report/delete/{id}',[LogbookController::class,'delete'])->middleware('admin');

