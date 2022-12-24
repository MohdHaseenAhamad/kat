<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BatchingController extends Controller
{
    public function index() {
        $results=DB::table('batching')->get();
        return view('admin/batching-report/listing')->with('results',$results);
    }

    public function add() {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        return view('admin/batching-report/form')->with('operator',$operator);
    }

    public function save(Request $request) {
        $data=$this->loadData($request,'add');
        $last_id=DB::table('batching')->insertGetId($data);
        if($last_id > 0)
        {
            return redirect('/admin/batching-report/edit/'.$last_id)->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/batching-report/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request,'edit');
        $retval=DB::table('batching')->where('id', $id)->update($result);
        if($retval)
        {
            return redirect('/admin/batching-report/edit/'.$id)->with('success','Item update successfully!');
        }
    }

    public function loadData($request, $mode)
    {
       $data = [
                'operater_id'=>$request->operater_id,
                'shift'=>$request->shift,
                'slide_plate'=>$request->slide_plate,
                'flow_and_height'=>$request->flow_and_height,
                'f_slurry'=>$request->f_slurry,
                'r_slurry'=>$request->r_slurry,
                'cement'=>$request->cement,
                'lime'=>$request->lime,
                'gypsum'=>$request->gypsum,
                'aluminium_powder'=>$request->aluminium_powder,
                'extra_water'=>$request->extra_water,
                'husk'=>$request->husk,
                's_oil'=>$request->s_oil,
                'discharge_temp'=>$request->discharge_temp,
                'discharge_time'=>$request->discharge_time,
                'mixing_time'=>$request->mixing_time,
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
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        $results = DB::table('batching')->where('id', $id)->first();
        return view('admin/batching-report/form')->with('results', $results)->with('operator',$operator);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retval = DB::table('batching')->where('id', $id)->delete();
        if($retval)
        {
            return redirect('/admin/batching-report')->with('success','Item delete successfully!');
        }
    }
}
