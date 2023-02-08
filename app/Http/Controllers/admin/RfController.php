<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RfController extends Controller
{
    public function index() {
        $results=DB::table('rf_feding')
            ->leftJoin('employee','employee.id','=','rf_feding.store_incharge_id')
            ->select('rf_feding.*','employee.name as employee_name')
            ->paginate(SHOW_RECORD);
        return view('admin/rf-feding/listing')->with('results',$results);
    }

    public function add() {
        $store_incharge = DB::table('employee')->where('dep_id',STORE_INCHARGE_ID)->get();
        return view('admin/rf-feding/form')->with('store_incharge',$store_incharge);
    }

    public function save(Request $request)
    {
        $data=$this->loadData($request, 'add');
        $last_id = DB::table('rf_feding')->insertGetId($data);
        if($last_id > 0)
        {
//            return redirect('/admin/rf-feding/edit/'.$last_id)->with('success','Item created successfully!');
            return redirect('/admin/rf-feding')->with('success','Item created successfully!');
        }else
        {
            return redirect('/admin/rf-feding/add/')->with('warning','same error....');
        }


    }

    public function update(Request $request, $id)
    {
        $result=$this->loadData($request,'edit');
        $retval=DB::table('rf_feding')->where('id', $id)->update($result);
        if($retval)
        {
            return redirect('/admin/rf-feding/edit/'.$id)->with('success','Item update successfully!');
        }
    }

    public function loadData($request, $mode)
    {

            $data = [
                'store_incharge_id'=>$request->store_incharge_id,
                'shift'=>$request->shift,
                'fly_ash_bulker'=>$request->fly_ash_bulker,
                'fly_ash_dumper'=>$request->fly_ash_dumper,
                'cement_bulker'=>$request->cement_bulker,
                'cement_bag'=>$request->cement_bag,
                'gypsum'=>$request->gypsum,
                'lime_bulker'=>$request->lime_bulker,
                'lime_bag'=>$request->lime_bag,
                'aluminium'=>$request->aluminium,
                'husk'=>$request->husk,
                'soluble'=>$request->soluble,
                'moud_oil'=>$request->moud_oil,
            ];
            if($mode=='add')
            {
                $data['created_at']=date(DATE_FORMAT);
            }
            else
            {
                $data['updated_at']=date(DATE_FORMAT);
            }
            return $data;

    }

    public function edit($id) {
        $store_incharge = DB::table('employee')->where('dep_id',STORE_INCHARGE_ID)->get();
        $results = DB::table('rf_feding')->where('id', $id)->first();
        return view('admin/rf-feding/form')->with('results', $results)->with('store_incharge',$store_incharge);
    }

    public function view() {
        echo "<h1>This is Rf Feding View</h1>";
    }

    public function delete($id) {
        $retval = DB::table('rf_feding')->where('id', $id)->delete();
        if($retval)
        {
            return redirect('/admin/rf-feding')->with('success','Item delete successfully!');
        }
    }
}
