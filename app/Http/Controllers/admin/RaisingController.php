<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class RaisingController extends Controller
{
    public function index() {
        $results=DB::table('raising')
            ->leftJoin('employee','employee.id','=','raising.operater_id')
            ->select('raising.*','employee.name as employee_name')
            ->get();
        return view('admin/raising-report/listing')->with('results',$results);
    }

    public function add() {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        return view('admin/raising-report/form')->with('operator',$operator);
    }

    public function save(Request $request)
    {
        $data=$this->loadData($request, 'add');
        $last_id=DB::table('raising')->insertGetId($data);
        if($last_id > 0)
        {

//            return redirect('/admin/raising-report/edit/'.$last_id)->with('success','Item created successfully!');
            return redirect('/admin/raising-report')->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/raising-report/add/')->with('warning','same error....');
        }
    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request,'edit');
        $retval=DB::table('raising')->where('id', $id)->update($result);
        if($retval)
        {
            return redirect('/admin/raising-report/edit/'.$id)->with('success','Item update successfully!');
        }

    }

    public function loadData($request, $mode)
    {

            $data = [
                'operater_id'=>$request->operater_id,
                'shift'=>$request->shift,
                'batch_number'=>$request->batch_number,
                'mould_no'=>$request->mould_no,
                'discharge_time'=>$request->discharge_time,
                'hardness'=>$request->hardness,
                'cutting_time'=>$request->cutting_time,
                'remark'=>$request->remark,
            ];
            if($mode=='add')
            {
                $data['created_at']=date(DATE_FORMAT);
            }else
            {
                $data['updated_at']=date(DATE_FORMAT);
            }
            return $data;

    }

    public function edit($id) {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        $results = DB::table('raising')->where('id', $id)->first();
        return view('admin/raising-report/form')->with('results', $results)->with('operator',$operator);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retval=DB::table('raising')->where('id', $id)->delete();
        if($retval)
        {
            return redirect('/admin/raising-report')->with('success','Item delete successfully!');
        }else
        {
            return redirect('/admin/raising-report')->with('warning','error......');
        }
    }
}
