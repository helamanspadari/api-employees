<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Redirect;

use GuzzleHttp\Client;

use App\Http\Controllers\Controller;

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

        $client = new Client([
            'base_uri' => 'http://dummy.restapiexample.com/api/v1/',
            'headers' => ['Content-Type' => 'application/json', "Accept" => "application/json"]
        ]);

        $response = $client->post('create',
            [ 'body' => json_encode($data)]
        );

        $body = json_decode($response->getBody());

        $this->insert($body->id);

        return Redirect::to('employees');
    }

    public function show($id) {

        var_dump($id);
        exit;

        $employee_api = $this->api . 'employee' . $id;
        $employee = json_decode(file_get_contents($employee_api));
        return view('employees.show', compact('employee'));

        /*$client = new Client([
            'base_uri' => 'http://dummy.restapiexample.com/api/v1/',
        ]);

        $response = $client->get('employee', "employee/{ $id }");

        $employee = json_decode($response->getBody());

        dd($employee);

        //return view('employees.show', ['employee' => $employee]);*/

    }
}
