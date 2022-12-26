<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $table_array = array(['table'=>'rf_feding','url'=>'admin/rf-feding'],['table'=>'cutting','url'=>'admin/cutting-report'],['table'=>'batching','url'=>'admin/batching-report'],['table'=>'autoclave','url'=>'admin/autoclave-report'],['table'=>'flow','url'=>'admin/flow-report'],['table'=>'logbook','url'=>'admin/logbook-report'],['table'=>'raising','url'=>'admin/raising-report'],['table'=>'labour','url'=>'admin/labour-report']);
        $counter[] =array();
        foreach ($table_array as $value)
        {
            $counter[$value['table']] = DB::table($value['table'])->count();
        }
        return view('admin/index')->with('counter', $counter)->with('table_array',$table_array);
    }
}
