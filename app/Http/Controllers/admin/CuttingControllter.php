<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CuttingControllter extends Controller {
    public function index() {
        $results = DB::table('cutting')->get();
        return view('admin/cutting-report/listing')->with('results', $results);
    }

    public function add() {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        return view('admin/cutting-report/form')->with('operator',$operator);
    }

    public function save(Request $request) {
        $data = $this->loadData($request, 'add');
        $last_id = DB::table('cutting')->insertGetId($data);
        if ($last_id > 0) {
            return redirect('/admin/cutting-report/edit/' . $last_id)->with('success', 'Item created successfully!');
        } else {
            return redirect('/admin/cutting-report/add/')->with('warning', 'same error....');
        }


    }

    public function update(Request $request, $id) {
        $data = $this->loadData($request, 'edit');
        $retval = DB::table('cutting')->where('id', $id)->update($data);
        if ($retval > 0) {
            return redirect('/admin/cutting-report/edit/' . $id)->with('success', 'Item update successfully!');
        }

    }

    public function loadData($request, $mode) {

        $data = [
            'operater_id' => $request->operater_id,
            'batch_number' => $request->batch_number,
            'shift' => $request->shift,
            'side_plate_no' => $request->side_plate_no,
            'timing' => $request->timing,
            'size' => $request->size,
            'cracks' => $request->cracks,
            'chipping' => $request->chipping,
            'heavy_line' => $request->heavy_line,
            'corner_damage' => $request->corner_damage,
            'top_layer' => $request->top_layer,
            'tilting_damage' => $request->tilting_damage,
            'less_raising' => $request->less_raising,
            'scrap_layer' => $request->scrap_layer,
            'uncutt_blocks' => $request->uncutt_blocks,
            'total_reject_block' => $request->total_reject_block,
            'other' => $request->other,
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
        $results = DB::table('cutting')->where('id', $id)->first();
        return view('admin/cutting-report/form')->with('results', $results)->with('operator',$operator);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retval = DB::table('cutting')->where('id', $id)->delete();
        if ($retval > 0) {
            return redirect('/admin/cutting-report')->with('success', 'Item delete successfully!');
        }
    }
}
