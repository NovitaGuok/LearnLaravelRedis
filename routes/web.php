<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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
    return view('welcome');
});

Route::get('/doctors/{doctor}','ControllerDoctor@index');
Route::get('/doctors/form', 'ControllerDoctor@form');
Route::post('/doctors/form/process', 'ControllerDoctor@process');

Route::get('/patients/{patient}','ControllerPatient@index');
Route::get('/patients/form', 'ControllerPatient@form');
Route::post('/patients/form/process', 'ControllerPatient@process');