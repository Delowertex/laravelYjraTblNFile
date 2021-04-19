<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\DataTables\EmployeeDataTable;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(EmployeeDataTable $datatable){
        return $datatable->render('employee');
    }
}
