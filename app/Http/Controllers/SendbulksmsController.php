<?php

namespace App\Http\Controllers;


use App\Models\sendbulksms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendbulksmsController extends Controller
{
    public function index(){
        $studs = DB::select('select * from students');
        return view('sendbulksms',['students'=>$studs]);
    }
    public function sendsms(Request $request){
//        $sms = new sendbulksms();
//        $telno = $request->input('hobby');
//
//        $input['hobby'] = implode(',', $hobby);
//        $sms->message = request('sms');
//        $sms->tel_no = request('tels[]');
//        $sms->sent = Carbon::now(); # new \Datetime()
//
//        $sms->save();
//
//      echo "sms send succesfully<br/>";
//        echo '<a href = "/sendbulksms">Click Here</a> to go back.';
        $input = $request->all();

        $telno = $input['tels'];

        $input['tels'] = implode(',', $telno);
        $sms=$input['sms'];
        $sent=Carbon::now();

        $studs = DB::insert('insert into sms set message = ?,tel_no=?,sent=?',[$sms,$input['tels'],$sent]);


        echo "SMS sent successfully<br/>";
        echo '<a href = "/sendbulksms">Click Here</a> to go back.';

    }
}
