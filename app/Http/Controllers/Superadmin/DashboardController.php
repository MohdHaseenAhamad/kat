<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller {
    public function index() {
        $table_array = array(['table'=>'rf_feding','url'=>'admin/rf-feding'],['table'=>'cutting','url'=>'admin/cutting-report'],['table'=>'batching','url'=>'admin/batching-report'],['table'=>'autoclave','url'=>'admin/autoclave-report'],['table'=>'flow','url'=>'admin/flow-report'],['table'=>'logbook','url'=>'admin/logbook-report'],['table'=>'raising','url'=>'admin/raising-report'],['table'=>'labour','url'=>'admin/labour-report']);
        $tab = DB::table('department')->get();
        $counter[] =array();
        foreach ($table_array as $value)
        {
            $counter[$value['table']] = DB::table($value['table'])->count();
        }
        return view('superadmin/index')->with('counter', $counter)->with('table_array',$table_array);
    }

    public function modules($module) {
        $tab = DB::table('department')->get();
        $department_info = DB::table('department')
            ->where('slug', $module)
            ->get();
        return view('superadmin/modules/list')->with('tab', $tab)->with('department_info', $department_info[0]);
    }

    public function add($module_slug) {
        $tab = DB::table('department')->get();
        $department_info = DB::table('department')
            ->where('slug', $module_slug)
            ->get();
        return view('superadmin/modules/form')->with('tab', $tab)->with('department_info', $department_info[0]);
    }

    public function save(Request $request) {
        $module_id =$request->input('module_id');
        $department_info = DB::table('department')
            ->where('id', $module_id)
            ->get();
        $data = [
            'dep_id' => $module_id,
            'name' => $request->input('name'),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $id = DB::table('employee')->insertGetId($data);
        if($id > 0)
        {
            return redirect('/superadmin/'.$department_info[0]->slug.'/edit/'.$id.'/'.$module_id)->with('success',$request->input('name').' Name Register successfully!');

        }
        else
        {
            return redirect('/superadmin/'.$department_info[0]['slug'].'/add')->with('danger','error....');
        }
    }
    public function edit($slug,$id,$mod_id)
    {

        $tab = DB::table('department')->get();
        $department_info = DB::table('department')
            ->where('id', intval($mod_id))
            ->get();
//        dd($department_info[0]);
        $result = DB::table('employee')
            ->where('id',$id)
            ->get();
//        dd($result[0]);
        return view('superadmin/modules/form')->with('tab', $tab)->with('department_info', $department_info[0])->with('result',$result[0]);
    }
    public function update(Request $request,$id)
    {
//        $module_id =$request->input('module_id');
//        $department_info = DB::table('department')
//            ->where('id', $module_id)
//            ->get();
//        $data = [
//            'dep_id' => $module_id,
//            'name' => $request->input('name'),
//            'status' => 1,
//            'created_at' => date('Y-m-d H:i:s'),
//        ];
//        $update_val = DB::table('employee')->update($data);
//        if($update_val)
//        {
//            return redirect('/superadmin/'.$department_info[0]->slug.'/edit/'.$id.'/'.$module_id)->with('success',$request->input('name').' Name Update Register successfully!');
//
//        }
//        else
//        {
//            return redirect('/superadmin/'.$department_info[0]['slug'].'/add')->with('danger','error....');
//        }
    }
}
