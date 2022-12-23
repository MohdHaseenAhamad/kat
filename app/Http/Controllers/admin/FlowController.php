<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FlowController extends Controller
{
    public function index() {
        $results=DB::table('flow')->get();
        return view('admin/flow-report/listing')->with('results',$results);
    }

    public function add() {
        return view('admin/flow-report/form');
    }

    public function save(Request $request) {
        $data=$this->loadData($request,'add');
        $last_id=DB::table('flow')->insertGetId($data);
        if($last_id >0)
        {
            return redirect('/admin/flow-report/edit/'.$last_id)->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/flow-report/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request, '', 'edit');
        $retval=DB::table('flow')->where('rf_id', $id)->update($result);
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
                'entry_height'=>$request->entry_height,
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

        $results = DB::table('flow')->where('id', $id)->first();
        return view('admin/flow-report/form')->with('results', $results);
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
