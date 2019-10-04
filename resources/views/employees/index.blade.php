<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Employees</title>
</head>
<body>
    
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-8 col-sm-12">
               <h1>List of Employees</h1>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('/') }}" style="width:100%; margin-bottom: 1%;" class="btn btn-secondary float-right">Home</a>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('create') }}" style="width:100%; margin-bottom: 1%;" class="btn btn-success float-right">New Employee</a>            
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">            
                <table class="table table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Age</th>
                            <th>Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->employee_name }}</td>
                                <td>$ {{ $employee->employee_salary }}</td>
                                <td>{{ $employee->employee_age }}</td>
                                <td>{{ $employee->profile_image }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>