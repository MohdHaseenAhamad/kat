<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller {
    public function index() {
        $tab = DB::table('department')->get();
        return view('superadmin/index')->with('tab', $tab);
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
