<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    public function index()
    {
        $results=DB::table('employee')
            ->leftJoin('department','department.id','=','employee.dep_id')
            ->select('employee.*','department.name as dep_name')
            ->get();
        return view('superadmin/employee/list')->with('results',$results);
    }
    public function add()
    {
        $department = DB::table('department')->where('status',1)->get();
        return view('superadmin/employee/form')->with('mode','Add')->with('department',$department);
    }
    public function save(Request $request)
    {
        $retData=$this->loadData($request,'add');
        $last_id = DB::table('employee')->insertGetId($retData);
        if($last_id > 0)
        {
//            return redirect('/superadmin/employee/edit/'.$last_id)->with('success','New Employee Register successfully!');
            return redirect('/superadmin/employee')->with('success','New Employee Register successfully!');
        }

    }
    public function loadData($request,$mode)
    {
        $data = [
            'dep_id'=>$request->input('emp_type'),
            'name'=>  $request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'status'=>1,
        ];
        if($mode=='add')
        {
            $data['created_at']=date( 'Y-m-d H:i:s');
        }
        else
            {
            $data['updated_at']=date( 'Y-m-d H:i:s');
        }
        return $data;
    }
    public function edit($id)
    {
        $department = DB::table('department')->where('status',1)->get();
        $result=DB::table('employee')->where('id',$id)->first();
        return view('superadmin/employee/form')->with('result',$result)->with('mode','edit')->with('department',$department);
    }
    public function update(Request $request,$id)
    {
        $retData=$this->loadData($request,'edit');
        $result = DB::table('employee')->where('id',$id)->update($retData);
        return redirect('superadmin/employee/edit/'.$id)->with('success','Update Employee Register successfully!')->with('result',$result);
    }
    public function delete($id)
    {
        $result = DB::table('employee')->where('id',$id)->delete();
        if($result > 0)
        {
            return redirect('superadmin/employee')->with('success','Delete employee successfully!');
        }

    }
}
