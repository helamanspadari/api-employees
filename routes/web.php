<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees', 'EmployeeController@index');
Route::get('create', 'EmployeeController@create');
Route::post('save', 'EmployeeController@save');


?>