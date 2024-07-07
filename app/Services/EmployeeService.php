<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeService
{
    protected $employeeModel;

    public function __construct(Employee $employeeModel)
    {
        $this->employeeModel = $employeeModel;
    }

    public function getEmployeeList()
    {
        $list = [];

        $employees = $this->employeeModel->getAllBooks();
        foreach ($employees as $employee) {
            $wk["employee_cd"] = $employee->employee_cd;
            $wk["employee_name"] = $employee->employee_name;
            $wk["kana"] = $employee->kana;
            $wk["email"] = $employee->email;
            $wk["department_cd"] = $employee->department_cd;
            $wk["post"] = $employee->post;
            $wk["authority"] = $employee->authority;
            $wk["employment_status"] = $employee->employment_status;
            $wk["incumbency_status"] = $employee->incumbency_status;
            $wk["login_at"] = $employee->login_at;
            $wk["locked_at"] = $employee->locked_at;
            $list[] = $wk;
        }

        return $employees;
    }
}
