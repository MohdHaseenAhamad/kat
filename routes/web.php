<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\DashboardController as SuperAdmin;
use App\Http\Controllers\superadmin\DepartmentController;
use App\Http\Controllers\superadmin\EmployeeController;
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


Route::get('/superadmin',[SuperAdmin::class,'index']);
//Route::get('/superadmin/{module}',[SuperAdmin::class,'modules']);
//Route::get('/superadmin/{module}/add',[SuperAdmin::class,'add']);
//Route::post('/superadmin/{module}/save',[SuperAdmin::class,'save']);
//Route::get('/superadmin/{module}/edit/{id}/{module_id}',[SuperAdmin::class,'edit']);

Route::get('/superadmin/department',[DepartmentController::class,'index']);
Route::get('/superadmin/department/add',[DepartmentController::class,'add']);
Route::post('/superadmin/department/save',[DepartmentController::class,'save']);
Route::get('/superadmin/department/edit/{id}',[DepartmentController::class,'edit']);
Route::post('/superadmin/department/update/{id}',[DepartmentController::class,'update']);
Route::get('/superadmin/department/delete/{id}',[DepartmentController::class,'delete']);

Route::get('/superadmin/employee',[EmployeeController::class,'index']);
Route::get('/superadmin/employee/add',[EmployeeController::class,'add']);
Route::post('/superadmin/employee/save',[EmployeeController::class,'save']);
Route::get('/superadmin/employee/edit/{id}',[EmployeeController::class,'edit']);
Route::post('/superadmin/employee/update/{id}',[EmployeeController::class,'update']);
Route::get('/superadmin/employee/delete/{id}',[EmployeeController::class,'delete']);
