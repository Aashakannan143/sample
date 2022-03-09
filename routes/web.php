<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
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

// Route::get('/area', 'Test@areashow');

// Route::get('/viewForm', 'Postcontroller@viewform');
// Route::post('/submit', 'Postcontroller@submit_data');
// Route::get('/student_form','Postcontroller@student_form');
// Route::get('/delete/{id}','Postcontroller@delete_data');
// Route::get('/edit/{id}','Postcontroller@edit');
// Route::post('/update','Postcontroller@update');
Route::get('/cityview','StudentController@city_view');
Route::get('/city','StudentController@city');
route::post('/submit_city','StudentController@submit_city');
Route::get('/delete_city/{id}','StudentController@delete_city');
Route::get('/edit_city/{id}','StudentController@edit_city');
Route::post('/update','StudentController@update_city');
Route::get('/area','StudentController@area');
Route::post('/submit_area','StudentController@submit_area');
Route::get('/areaview','StudentController@area_view');
Route::get('/delete_area/{id}','StudentController@delete_area');
Route::get('/edit_area/{id}','StudentController@edit_area');
Route::post('/update_area','StudentController@update_area');
Route::get('/pincodeview','StudentController@pincodeview');
Route::get('/pincode','StudentController@pincode');
Route::post('/submit_pincode','StudentController@submit_pincode');
Route::get('/delete_pincode/{id}','StudentController@delete_pincode');
Route::get('/edit_pincode/{id}','StudentController@edit_pincode');
Route::post('/update_pincode','StudentController@update_pincode');

Route::get('/student','StudentdataController@student');
Route::get('/studentview','StudentdataController@studentview');
Route::post('/submit_student','StudentdataController@submit_student');
Route::get('/edit_student/{id}','StudentdataController@edit_student');
Route::get('/delete_student/{id}','StudentdataController@delete_student');
Route::post('/update_student','StudentdataController@update_student');