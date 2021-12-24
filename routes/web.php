<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/managecalender', function () {
    return view('managecalender');
});


Route::get('/markregister', [App\Http\Controllers\markregistercontroller::class, 'index'])->name('markregister');
Route::get('/viewstudent', [App\Http\Controllers\studentviewcontoller::class, 'index'])->name('viewstudent');
Route::get('Assign/{id}', [App\Http\Controllers\assignclasscontroller::class, 'show'])->name('assignclass');
Route::post('reassign/{id}', [App\Http\Controllers\assignclasscontroller::class, 'edit'])->name('assignclass');
Route::post('/insert', [App\Http\Controllers\studentController::class, 'storestudent'])->name('addstudent');
Route::get('markpresent/{id}/class/{class}', [App\Http\Controllers\markregistercontroller::class, 'markpresent'])->name('markregister');
Route::get('markabsent/{id}/class/{class}', [App\Http\Controllers\markregistercontroller::class, 'markabsent'])->name('markregister');
Route::get('calendar-event', [App\Http\Controllers\CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [App\Http\Controllers\CalenderController::class, 'calendarEvents']);
Route::get('/viewregister', [App\Http\Controllers\viewregistercontroller::class, 'index'])->name('viewregister');
Route::get('/studentname/{$id}', [App\Http\Controllers\viewregistercontroller::class, 'studentname'])->name('viewregister');
Route::get('/sendbulksms', [App\Http\Controllers\SendbulksmsController::class, 'index'])->name('sendbulksms');
Route::post('/sendsms', [App\Http\Controllers\SendbulksmsController::class, 'sendsms'])->name('sendbulksms');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect('login');
})->middleware('auth');


