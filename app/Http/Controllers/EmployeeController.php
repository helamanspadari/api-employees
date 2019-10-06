<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Redirect;

use GuzzleHttp\Client;

use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    private $client;

    public function __construct() {
        $this->client = new Client([
            'base_uri' => 'http://dummy.restapiexample.com/api/v1/',
            'headers' => ['Content-Type' => 'application/json', "Accept" => "application/json"]
        ]);
    }   

    public function all() {
        $lista_employees = $this->client->request('GET', 'employees');
        $employees = json_decode($lista_employees->getBody()->getContents());
        return view('employees.index', ['employees' => $employees ]);
    }

    public function create() {
        return view('employees.create');
    }

    public function insert($id) {
        $e = new Employee();
        $e = $e::create(["employee_id" => $id]);
    }

    public function getAllFromBase() {
        $employees = new Employee();
        $employees = $employees::get();
        return view('employees.list', ['employees' => $employees]);
    }

    public function insertApi(Request $request) {
        
        $data = array(
            'name' => $request->input('name'),
            'salary' => $request->input('salary'),
            'age' => $request->input('age')
        );

        $employee = $this->client->post('create',
            [ 'body' => json_encode($data)]
        );

        $employee_db = json_decode($employee->getBody());

        $this->insert($employee_db->id);
        
        return Redirect::to('employees');
    }

    public function show($id) {
        $employee = $this->client->request('GET', "employee/{$id}");
        $employee = json_decode($employee->getBody());
        return view('employees.show', ['employee' => $employee]);
    }
}
