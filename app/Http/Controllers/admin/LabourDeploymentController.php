<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LabourDeploymentController extends Controller
{
    public function index() {
        $results=DB::table('labour')->get();
        return view('admin/labour-deployment/listing')->with('results',$results);
    }

    public function add() {
        return view('admin/labour-deployment/form');
    }

    public function save(Request $request) {
        $data=$this->loadData($request, 'add');
        $last_id=DB::table('labour')->insertGetId($data);
        if($last_id >0)
        {
            return redirect('/admin/labour-report/edit/'.$last_id)->with('success','Item created successfully!');
        }else
        {
            return redirect('/admin/labour-report/add/')->with('warning','same error....');
        }

    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request, 'edit');
        $retval=DB::table('labour')->where('id', $id)->update($result);
        if($retval >0)
        {
            return redirect('/admin/labour-report/edit/'.$id)->with('success','Item update successfully!');
        }

    }

    public function loadData($request, $mode)
    {

            $data = [
                'shift'=>$request->shift,
                'labour_id'=>$request->labour_id,
                'area_of_work'=>$request->area_of_work,
                'contractor_id'=>$request->contractor_id,
                'operater_id'=>$request->operater_id,
            ];
            if($mode=='add')
            {
                $data['created_at'] = date(DATE_FORMAT);
            }else{
                $data['updated_at'] = date(DATE_FORMAT);
            }
            return $data;
    }

    public function edit($id) {
        $results = DB::table('labour')->where('id', $id)->first();
        return view('admin/labour-deployment/form')->with('results', $results);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retval = DB::table('labour')->where('id', $id)->delete();
        if($retval)
        {
            return redirect('/admin/labour-reports')->with('success','Item delete successfully!');
        }
    }
}
