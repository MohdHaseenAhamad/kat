<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AutoclaveController extends Controller
{
    public function index() {
        $results=DB::table('autoclave')
            ->leftJoin('employee','employee.id','=','autoclave.operater_id')
            ->select('autoclave.*','employee.name as employee_name')
                ->paginate(SHOW_RECORD);
        return view('admin/autoclave-report/listing')->with('results',$results);
    }

    public function add() {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        return view('admin/autoclave-report/form')->with('operator',$operator);
    }

    public function save(Request $request) {
        $data=$this->loadData($request, 'add');
        $last_id=DB::table('autoclave')->insertGetId($data);
        if($last_id > 0)
        {

//            return redirect('/admin/autoclave-report/edit/'.$last_id)->with('success','Item created successfully!');
            return redirect('/admin/autoclave-report')->with('success','Item created successfully!');
        }
        else
        {
            return redirect('/admin/autoclave-report/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id) {
        $data=$this->loadData($request, 'edit');
        $last_id=DB::table('autoclave')->where('id', $id)->update($data);
        if($last_id >0)
        {
            return redirect('/admin/autoclave-report/edit/'.$id)->with('success','Item update successfully!');
        }

    }

    public function loadData($request, $mode)
    {

            $data = [
                'autoclave_number'=>$request->autoclave_number,
                'operater_id'=>$request->operater_id,
                'shift'=>$request->shift,
                'casting_number'=>$request->casting_number,
                'material_receipt'=>$request->material_receipt,
                'door_closing'=>$request->door_closing,
                'vacuum_time'=>$request->vacuum_time,
                'rising_time'=>$request->rising_time,
                'pressure'=>$request->pressure,
                'temp'=>$request->temp,
                'release_time'=>$request->release_time,
                'door_opening'=>$request->door_opening,
                'stream_transfer'=>$request->stream_transfer,
                'transfer_to'=>$request->transfer_to,
                'time_stream_transfer'=>$request->time_stream_transfer,
                'other'=>$request->other,
            ];
           if($mode=='add')
           {
               $data['created_at']=date( DATE_FORMAT);
           }
           else
           {
               $data['updated_at']=date( DATE_FORMAT);
           }
           return $data;
    }

    public function edit($id)
    {
        $operator = DB::table('employee')->where('dep_id',OPERATOR_ID)->get();
        $results = DB::table('autoclave')->where('id', $id)->first();
        return view('admin/autoclave-report/form')->with('results', $results)->with('operator',$operator);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $obj = new Autoclavereport();
        if($obj->where('id', $id)->delete())
        {
            return redirect('/admin/autoclave-report')->with('success','Item delete successfully!');
        }
    }
}
