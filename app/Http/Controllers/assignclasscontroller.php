<?php

namespace App\Http\Controllers;

use App\Models\assignclass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class assignclasscontroller extends Controller
{
    public function index(){
        $stud = DB::select('select * from students');
        return view('assignclass',['student'=>$stud]);
    }
    public function show($id) {
        $stud = DB::select('select * from students where id = ?',[$id]);
        return view('/assignclass',['student'=>$stud]);
    }
    public function edit(Request $request,$id) {

        $class = $request->input('class');
        DB::update('update students set class = ? where id = ?',[$class,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/viewstudent">Click Here</a> to go back.';
    }
}
