<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
    <title>Employees</title>
</head>
<body>
    
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-12">
               <h1>List of Employees</h1>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('/') }}" id="btn" class="btn btn-secondary float-right">Home</a>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('list') }}" id="btn" class="btn btn-info float-right">My Employees</a>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('create') }}" id="btn" class="btn btn-success float-right">New Employee</a>            
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-sm table-responsive-md">
                
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Age</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->id }}</th>
                                    <td>{{ $employee->employee_name }}</td>
                                    <td>$ {{ $employee->employee_salary }}</td>
                                    <td>{{ $employee->employee_age }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>       
            </div>
        </div>
    </div>

</body>
</html>