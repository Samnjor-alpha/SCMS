<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});
Route::get('/assignclass', function () {
    return view('assignclass');
});


Route::get('/viewstudent', [App\Http\Controllers\studentviewcontoller::class, 'index'])->name('viewstudent');
Route::get('Assign/{id}', [App\Http\Controllers\assignclasscontroller::class, 'show'])->name('assignclass');

Route::post('/insert', [App\Http\Controllers\studentController::class, 'storestudent'])->name('addstudent');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
