<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employees = EmployeeModel::all();

        return view('features.employees.index-page', [
            'employees' => $employees,
        ]);
    }

    public function show(EmployeeModel $employee): View
    {
        return view('features.employees.show-page', [
            'employee' => $employee,
        ]);
    }
}
