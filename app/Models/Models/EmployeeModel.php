<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasUuids;

    protected $table = 'm_employees';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'department',
        'hire_date',
        'salary',
        'status',
    ];

    protected $casts = [
        'hire_date' => 'date',
        'salary' => 'decimal:2',
    ];
}
