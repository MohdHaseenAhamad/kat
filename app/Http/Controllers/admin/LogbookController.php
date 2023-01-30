<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LogbookController extends Controller
{
    public function index() {
        $results = DB::table('logbook')
            ->leftJoin('employee','employee.id','=','logbook.staff_deployed_id')
            ->select('logbook.*','employee.name as employee_name')
            ->get();
        return view('admin/logbook-report/listing')->with('results',$results);
    }

    public function add() {
        $employee = DB::table('employee')->get();
        return view('admin/logbook-report/form')->with('employee',$employee);
    }

    public function save(Request $request) {
        $data=$this->loadData($request, 'add');
        $last_id=DB::table('logbook')->insertGetId($data);
        if($last_id > 0)
        {
//            return redirect('/admin/logbook-report/edit/'.$last_id)->with('success','Item created successfully!');
            return redirect('/admin/logbook-report')->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/logbook-report/add/')->with('warning','same error....');
        }
    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request,'edit');
        $retVal=DB::table('logbook')->where('id', $id)->update($result);
        if($retVal)
        {
            return redirect('/admin/logbook-report/edit/'.$id)->with('success','Item update successfully!');
        }

    }

    public function loadData($request, $mode)
    {

            $data = [
                'work_description'=>$request->work_description,
                'status'=>$request->status,
                'staff_deployed_id'=>$request->staff_deployed_id,
                'remark'=>$request->remark,
            ];
            if($mode=='add')
            {
                $data['created_at'] = date(DATE_FORMAT);
            }else
            {
                $data['updated_at'] = date(DATE_FORMAT);
            }
            return $data;

    }

    public function edit($id) {
        $results = DB::table('logbook')->where('id', $id)->first();
        $employee = DB::table('employee')->get();
        return view('admin/logbook-report/form')->with('results', $results)->with('employee',$employee);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retVal=DB::table('logbook')->where('id', $id)->delete();
        if($retVal)
        {
            return redirect('/admin/logbook-report')->with('success','Item delete successfully!');
        }
    }
}
