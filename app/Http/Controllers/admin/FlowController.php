<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FlowController extends Controller
{
    public function index() {
        $results=DB::table('flow')
            ->leftJoin('employee','employee.id','=','flow.operater_id')
            ->select('flow.*','employee.name as employee_name')
            ->get();
        return view('admin/flow-report/listing')->with('results',$results);
    }

    public function add()
    {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        $helper = DB::table('employee')->where('dep_id',HELPER_ID)->get();
        return view('admin/flow-report/form')->with('operator',$operator)->with('helper',$helper);
    }

    public function save(Request $request)
    {
        $data=$this->loadData($request,'add');
        $last_id=DB::table('flow')->insertGetId($data);
        if($last_id >0)
        {
//            return redirect('/admin/flow-report/edit/'.$last_id)->with('success','Item created successfully!');
            return redirect('/admin/flow-report')->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/flow-report/add/')->with('warning','same error....');
        }
    }

    public function update(Request $request, $id)
    {
        $result=$this->loadData($request,'edit');
        $retval=DB::table('flow')->where('id', $id)->update($result);
        if($retval>0)
        {
            return redirect('/admin/flow-report/edit/'.$id)->with('success','Item update successfully!');
        }

    }

    public function loadData($request, $mode)
    {
         $data = [
                'operater_id'=>$request->operater_id,
                'shift'=>$request->shift,
                'helper_id'=>$request->helper_id,
                'casting_number'=>$request->casting_number,
                'mould_no'=>$request->mould_no,
                'side_plate_no'=>$request->side_plate_no,
                'discharge_time'=>$request->discharge_time,
                'flow'=>$request->flow,
                'empty_height'=>$request->empty_height,
                'temprator'=>$request->temprator,
                'remark'=>$request->remark,
            ];
         if($mode=='add'){
             $data['created_at']=date(DATE_FORMAT);
         }
         else{
             $data['updated_at']=date(DATE_FORMAT);
         }
            return $data;

    }

    public function edit($id) {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        $helper = DB::table('employee')->where('dep_id',HELPER_ID)->get();
        $results = DB::table('flow')->where('id', $id)->first();
        return view('admin/flow-report/form')->with('results', $results)->with('operator',$operator)->with('helper',$helper);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }
    public function delete($id) {
        $retval=DB::table('flow')->where('id', $id)->delete();
        if($retval)
        {
            return redirect('/admin/flow-report')->with('success','Item delete successfully!');
        }
    }
}
