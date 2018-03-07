<?php

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
    return view('login');
});
Route::get('/PendingLeaves', function () {
    return view('HR/PendingLeaves');
});
Route::get('/RandF', function () {
    return view('HR/RandF');
});
Route::get('/Employees', function () {
    return view('HR/Employees');
});
Route::get('/blank', function () {
    return view('HR/blank');
});
Route::get('/indexHR', function () {
    return view('indexHR');
});
Route::get('/EmpProf', function () {
    return view('HR/EmpProf');
});

Route::get('/indexEmp', function () {
    return view('indexEmp');
});
Route::get('/PdsOfEmp', function () {
    return view('Employee/PdsOfEmp');
});
Route::get('/empservrec', function () {
    return view('Employee/empservrec');
});
Route::get('/empleavesum', function () {
    return view('Employee/empleavesum');
});
Route::get('/empleaveform', function () {
    return view('Employee/empleaveform');
});