<?php

namespace App\Http\Controllers;

use App\Models\markregister;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class markregistercontroller extends Controller
{
    public function index(){
        $studs = DB::select('select * from students');

        return view('markregister',['students'=>$studs]);
    }
    public function markpresent(Request $request,$id,$class){
        $present = new markregister();
        $present->attendance="present";
        $present->user_id=$id;
        $present->class=$class;
        $present->date = Carbon::now(); # new \Datetime()
        $present->save();
        return redirect()->back()
            ->with('success', 'student marked present!');


    }
    public function markabsent(Request $request,$id,$class){
        $present = new markregister();
        $present->attendance="absent";
        $present->user_id=$id;
        $present->class=$class;
        $present->date = Carbon::now(); # new \Datetime()
        $present->save();
        return redirect()->back()
            ->with('warning', 'Student marked absent!');


    }
}
