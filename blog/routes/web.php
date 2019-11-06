<?php
//use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
//use GuzzleHttp\Client;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
#routes/web.php

Route::get('students', 'StudentController@index')->name('students');
Route::get('students/create','StudentController@create');
Route::post('students', 'StudentController@store')->name('addStudent');
Route::get('students/{id}', 'StudentController@edit')->name('editStudent');
Route::patch('students/{id}', 'StudentController@update')->name('updateStudent');
 Route::get('deleteStudent/{id}', 'StudentController@delete')->name('deleteStudent');