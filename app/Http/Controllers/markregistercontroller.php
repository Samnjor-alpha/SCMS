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
        echo "Student marked present.<br/>";
        echo '<a href = "/viewstudent">Click Here</a> to go back.';


    }
    public function markabsent(Request $request,$id,$class){
        $present = new markregister();
        $present->attendance="present";
        $present->user_id=$id;
        $present->class=$class;
        $present->date = Carbon::now(); # new \Datetime()
        $present->save();
        echo "Student marked absent.<br/>";
        echo '<a href = "/viewstudent">Click Here</a> to go back.';


    }
}
