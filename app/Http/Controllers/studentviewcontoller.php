<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentviewcontoller extends Controller
{
    public function index(){
        $studs = DB::select('select * from students');
        return view('viewstudent',['students'=>$studs]);
    }
}
