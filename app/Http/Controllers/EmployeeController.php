<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    function getData() {
        return Employee::all();
    }

    function show() {
        $data = DB::table('employees')
        ->join('company', 'employees.id', "=", 'company.employee_id')
        // ->select('company.*')
        ->where('company.name', "My Tec")
        ->get();
        return $data;
    }

    // For test OneToOne relationship
    function checkOneToOne(){
        return Employee::find(2)->getCompany;
    }
}
