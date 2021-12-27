<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;


class studentController extends Controller
{
    public function index(){

    $student = Student::all();

    return view('addstudent',compact('student'));
}

    public function create(){


        return view('addstudent');
    }

    public function storestudent()
    {

        $student = new student();

        $student->name = request('sname');
        $student->email = request('email');
        $student->guardian = request('gname');
        $student->tel_no = request('gno');
        $student->age = request('s_age');
        $student->class = request('class');
        $student->joined = Carbon::now(); # new \Datetime()

        $student->save();

        return redirect()->back()
            ->with('success', 'Student enrolled successfully!');

    }
    }
