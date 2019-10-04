<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id',
        'employee_name',
        'employee_salary',
        'employee_age',
        'profile_image',
    ];
}
