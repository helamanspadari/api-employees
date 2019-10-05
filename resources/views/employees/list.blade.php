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
            <div class="col-md-10 col-sm-12">
               <h1>My Employees - Log</h1>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('employees') }}" style="width:100%; margin-bottom: 1%;" class="btn btn-secondary float-right">Back to List</a>
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
                                <th scope="col">Date/Time</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->employee_id }}</th>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>
                                        <a href="employee/{{ $employee->employee_id }}">Show</a>
                                    </td>
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