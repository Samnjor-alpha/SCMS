<?php

use Illuminate\Support\Facades\DB;

function changeDateFormate($date, $date_format){

    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);

}



function productImagePath($image_name)

{

    return public_path('images/products/'.$image_name);

}
function getstudnames($id):string
{

    $studname = DB::table('students')
        ->where('id', '=', $id)
        ->select('name')->first();

    return  $studname->name;
}
