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

Route::get('/doctors/index','ControllerDoctor@index');
Route::get('/doctors/form', 'ControllerDoctor@create');
Route::post('/doctors/store', 'ControllerDoctor@store');
Route::post('/doctors/edit/{id}', 'ControllerDoctor@edit');
Route::post('/doctors/update/{id}','ControllerDoctor@update');

Route::get('/patients/{patient}','ControllerPatient@index');
Route::get('/patients/form', 'ControllerPatient@form');
Route::post('/patients/form/store', 'ControllerPatient@store');