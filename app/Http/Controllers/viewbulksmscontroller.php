<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewbulksmscontroller extends Controller
{
    public function index(){
        $studs = DB::select('select * from sms');
        return view('viewbulk',['students'=>$studs]);
    }
    public function clear(Request $request,$id) {
        $studs = DB::table('sms')->where('id', $id)->delete();
        return redirect()->back()
            ->with('success', 'Student enrolled successfully!');
    }
}
