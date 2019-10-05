<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('employees', 'EmployeeController@index');
Route::get('create', 'EmployeeController@create');
Route::post('insert', 'EmployeeController@insert');
Route::post('save', 'EmployeeController@insertApi');
Route::get('list', 'EmployeeController@getAllFromBase');
Route::get('employee/{ id }', 'EmployeeController@show');


?>