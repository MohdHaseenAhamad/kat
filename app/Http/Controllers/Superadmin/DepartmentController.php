<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    public $title = "Department";
    public $slug = "department";
    public function index()
    {
        $results = DB::table('department')->get();

        return view('superadmin/department/list')->with('results',$results);
    }
    public function add()
    {
        return view('superadmin/department/form')->with('mode','add');
    }
    public function save(Request $request)
    {
        $retData=$this->loadData($request,'add');
        $last_id=DB::table('department')->insertGetId($retData);
        if($last_id >0)
        {
            return redirect('/superadmin/department/edit/'.$last_id)->with('success','New Department Register successfully!');
        }
    }
    public function edit($id)
    {
        $result=DB::table('department')->where('id',$id)->first();
        return view('superadmin/department/form')->with('result',$result)->with('mode','edit');
    }
    public function update(Request $request,$id)
    {
        $retData=$this->loadData($request,'edit');
        $result = DB::table('department')->where('id',$id)->update($retData);
        return redirect('superadmin/department/edit/'.$id)->with('success','Update Department Register successfully!')->with('result',$result);
    }
    public function delete($id)
    {
        $result = DB::table('department')->where('id',$id)->delete();
        if($result > 0)
        {
            return redirect('superadmin/department')->with('success','Delete Department Name successfully!');
        }

    }
    public function loadData($request,$mode)
    {
        $data = [
            'name'=>$request->input('name'),
            'status'=>1,

        ];
       if($mode=='add')
       {
           $data['created_at']=date( 'Y-m-d H:i:s');
       }
       else{
           $data['updated_at']=date( 'Y-m-d H:i:s');
       }
       return $data;
    }
}
