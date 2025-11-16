<?php

namespace App\Livewire\Employees;

use App\Models\EmployeeModel;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeesLivewire extends Component
{
    use WithPagination;

    public $search = '';

    public $perPage = 10;

    public function render()
    {
        $employees = EmployeeModel::where('name', 'like', '%'.$this->search.'%')
            ->paginate($this->perPage);

        return view('livewire.employees.employees-livewire', [
            'employees' => $employees,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
