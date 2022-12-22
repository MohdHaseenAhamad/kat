<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutoclaveController extends Controller
{
    public function index() {
//        $results=Autoclavereport::join('gur_user','gur_user.usr_id','=','autoclave_report.ar_usr_id')->get();
        return view('admin/autoclave-report/listing');
    }

    public function add() {
        return view('admin/autoclave-report/form');
    }

    public function save(Request $request) {
        $obj = new Autoclavereport();
        $this->loadData($request, $obj, 'add');
        if($obj->save())
        {
            $last_id=$obj->id;
            return redirect('/admin/autoclave-report/edit/'.$last_id)->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/autoclave-report/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id) {
        $result=$this->loadData($request, '', 'edit');
        Autoclavereport::where('ar_id', $id)->update($result);
        return redirect('/admin/autoclave-report/edit/'.$id)->with('success','Item update successfully!');
    }

    public function loadData($request, $obj, $mode)
    {
        if($mode=='add')
        {
            $obj->ar_autoclave_number = $request->ar_autoclave_number;
            $obj->ar_opt_name = $request->ar_opt_name;
            $obj->ar_shift = $request->ar_shift;
            $obj->ar_casting_number = $request->ar_casting_number;
            $obj->ar_material_receipt = $request->ar_material_receipt;
            $obj->ar_door_closing = $request->ar_door_closing;
            $obj->ar_vacuum_time = $request->ar_vacuum_time;
            $obj->ar_rising_time = $request->ar_rising_time;
            $obj->ar_pressure = $request->ar_pressure;
            $obj->ar_temp = $request->ar_temp;
            $obj->ar_door_opening = $request->ar_door_opening;
            $obj->ar_stream_transfer = $request->ar_stream_transfer;
            $obj->ar_transfer_to = $request->ar_transfer_to;
            $obj->ar_time_stream_transfer = $request->ar_time_stream_transfer;
            $obj->created_at = date('Y-m-d H:i:s');
        }
        else
        {
            $data = [
                'ar_autoclave_number'=>$request->ar_autoclave_number,
                'ar_opt_name'=>$request->ar_opt_name,
                'ar_shift'=>$request->ar_shift,
                'ar_casting_number'=>$request->ar_casting_number,
                'ar_material_receipt'=>$request->ar_material_receipt,
                'ar_door_closing'=>$request->ar_door_closing,
                'ar_vacuum_time'=>$request->ar_vacuum_time,
                'ar_rising_time'=>$request->ar_rising_time,
                'ar_pressure'=>$request->ar_pressure,
                'ar_temp'=>$request->ar_temp,
                'ar_door_opening'=>$request->ar_door_opening,
                'ar_stream_transfer'=>$request->ar_stream_transfer,
                'ar_transfer_to'=>$request->ar_transfer_to,
                'ar_time_stream_transfer'=>$request->ar_time_stream_transfer,
            ];
            return $data;
        }
    }

    public function edit($id)
    {
        $obj = new Autoclavereport();
        $results = $obj->where('ar_id', $id)->first();
        return view('admin/autoclave-report/form')->with('results', $results);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $obj = new Autoclavereport();
        if($obj->where('ar_id', $id)->delete())
        {
            return redirect('/admin/autoclave-report')->with('success','Item delete successfully!');
        }
    }
}
