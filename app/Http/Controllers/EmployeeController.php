<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Redirect;

class EmployeeController extends Controller
{
    private $api;

    public function __construct() {
        $this->api = 'http://dummy.restapiexample.com/api/v1/';
    }   

    public function index() {
        $lista_employees = $this->api . 'employees';
        $employees = json_decode(file_get_contents($lista_employees));
        return view('employees.index', ['employees' => $employees ]);
    }

    public function create() {
        $create = $this->api . 'create';
        return view($create);
    }

    public function save(Request $request) {
        $employee = new Employee();
        $employee = $employee::create($request->all());
        echo '<pre>';
        var_dump($employee);
        echo '</pre>';

        //return Redirect::to('employees');
    }
}
