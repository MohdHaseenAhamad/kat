<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LogbookController extends Controller
{
    public function index() {
        $results = DB::table('logbook')->get();
        return view('admin/logbook-report/listing')->with('results',$results);
    }

    public function add() {
        return view('admin/logbook-report/form');
    }

    public function save(Request $request) {

        $data=$this->loadData($request, 'add');
             $last_id=DB::table('logbook')->insertGetId($data);
        if($last_id > 0)
        {
            return redirect('/admin/logbook-report/edit/'.$last_id)->with('success','Item created successfully!');
        }else
        {
            return redirect('/admin/logbook-report/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request, '', 'edit');
        LogBook::where('lbr_id', $id)->update($result);
        return redirect('/admin/logbook-report/edit/'.$id)->with('success','Item update successfully!');
    }

    public function loadData($request, $obj, $mode)
    {
        if($mode=='add')
        {
            $obj->lbr_work_desc = $request->lbr_work_desc;
            $obj->lbr_status = $request->lbr_status;
            $obj->lbr_staff_deployed = $request->lbr_staff_deployed;
            $obj->lbr_remark = $request->lbr_remark;
            $obj->created_at = date('Y-m-d H:i:s');
        }
        else
        {
            $data = [
                'lbr_work_desc'=>$request->lbr_work_desc,
                'lbr_status'=>$request->lbr_status,
                'lbr_staff_deployed'=>$request->lbr_staff_deployed,
                'lbr_remark'=>$request->lbr_remark,
            ];
            return $data;
        }
    }

    public function edit($id) {
        $obj = new LogBook();
        $results = $obj->where('lbr_id', $id)->first();
        return view('admin/logbook-report/form')->with('results', $results);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $obj = new LogBook();
        if($obj->where('lbr_id', $id)->delete())
        {
            return redirect('/admin/logbook-report')->with('success','Item delete successfully!');
        }
    }
}
