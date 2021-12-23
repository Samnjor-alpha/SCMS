<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewregistercontroller extends Controller
{
    public function index(){
        $studs = DB::select('select * from attendances');
        return view('viewregister',['students'=>$studs]);
    }
    public function studentname(Request $id){
        $studsn = DB::select('select name from students where where id = ?',[$id]);



return view('viewregister',mysqli_fetch_assoc($studsn)['name']);
    }
}
