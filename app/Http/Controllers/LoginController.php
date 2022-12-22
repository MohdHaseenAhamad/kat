<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use DB;
use Session;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function sendOtp(Request $request)
    {
        $phone_number=$request->input('usr_phone');
        if(!empty($phone_number))
        {
            $retval=DB::table('user')->where('phone',$phone_number)->get();
            if(count($retval) > 0)
            {
                $otp=$this->getOTP();
                $ret=DB::table('user')->where('id',$retval[0]->id)->update(['otp'=>$otp,'updated_at'=>date('Y-m-d H:i:s')]);

                return redirect('/otp/'.encrypt($retval[0]->id))->with('success',"Your OTP Send Successfully Your OTP is :-".$otp)->with('id',$retval[0]->id);
            }
            else
            {
                return redirect('/')->with('warning',"Your phone number not register please contact:- 7309589697");
            }
        }else
        {
            return redirect('/');
        }


    }
    public function otp($id)
    {
//        $retval=DB::table('user')->where('id',decrypt($id))->get();
        if(!empty($id))
        {
            return view('otp')->with('id',$id);
        }
        else
        {
            return redirect('/');
        }

    }
    public function checkOtp(Request $request,$id)
    {
        $retval=DB::table('user')->where('id',decrypt($id))->where('otp',$request->input('usr_otp'))->get();
        if(count($retval)>0)
        {
            if($retval[0]->user_type==1)
            {
                Session::put('superadmin',$retval[0]);
                return redirect('/superadmin');
            }
            else
            {
                Session::put('admin',$retval[0]);
                return redirect('/admin');
            }

        }
    }
    public function test()
    {
        dd(Session::get('superadmin'));
    }
    public function getOTP()
    {
//        return (App::environment()=='prduction') ? mt_rand(100000, 999999) : '111111';
        return mt_rand(100000, 999999);
    }
    public function logout() {
        Session::flush();
        return redirect('/')->with('success','successfully Logout');
    }

}
