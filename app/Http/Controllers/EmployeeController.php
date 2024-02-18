<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewAll(){
        return view('list-karyawan', [
            "title" => "List Karyawan",
            "active" => "list-karyawan",
            "employees" => Employee::all()
        ]);
    }

    public function view(Employee $employee){
        return view('detail-karyawan', [
            "title" => "Detail Karyawan",
            "active" => "",
            "employee" => $employee
        ]);
    }
}
