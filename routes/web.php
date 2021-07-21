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
    return view('index');
});
Route::post('create','studentController@insert');
Route::get('students-list', 'studentController@studentsList');
Route::get('edit-student/{id}','studentController@find_by_id');
Route::get('delete/{id}','studentController@delete');
Route::post('update','studentController@update');

