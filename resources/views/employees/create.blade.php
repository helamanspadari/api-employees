<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
    <title>Create Employee</title>
</head>
<body>
    
    <div class="container">

        <br><br>

        <div class="row">
            <div class="col-md-10 col-sm-12">
               <h1>Create an Employee</h1>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{ url('employees') }}" id="btn" class="btn btn-secondary float-right">List</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <fieldset class="fieldset">
                
                    {{ Form::open(['url'=> 'save']) }}

                    {{ Form::label('name', 'Name') }}
                    {{ Form::input('text', 'name', '', ['class' => 'form-control', 'autofocus', 'placeholder' => 'Name', 'required' ])}}
                    <br>
                    {{ Form::label('salary', 'Salary') }}
                    {{ Form::input('text', 'salary', '', ['class' => 'form-control', '', "placeholder" => "Salary", 'required' ])}}
                    <br>
                    {{ Form::label('age', 'Age') }}
                    {{ Form::input('number', 'age', '', ['class' => 'form-control', '', "placeholder" => "Age", 'required', 'min' => 0, 'max' => 70 ])}}
                    
                    <br>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary col-12']) }}

                    {{ Form::close() }}                

                </fieldset>
            </div>
        </div>

    </div>

</body>
</html>