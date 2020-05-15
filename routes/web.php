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

Route::get('/doctor/{doctor}','ControllerDoctor@index');
Route::get('/form', 'ControllerDoctor@form');
Route::post('/form/process', 'ControllerDoctor@process');

Route::get('patient/{patient}','ControllerPatient@index');
Route::get('/form', 'ControllerPatient@form');
Route::post('/form/process', 'ControllerPatient@process');