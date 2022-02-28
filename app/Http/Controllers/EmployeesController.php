<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    //
    public function getAll()
    {
        $employees = DB::table('employees')->get(); //Query builder
        return view('employees.list', compact('employees'));
    }

    public function getById($id)
    {
        $employee = DB::table('employees')->where('employeeNumber', $id)->first();
//        dd($employee);
        return view('employees.detail', compact('employee'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
//        dd($data);
        DB::table('employees')->insert($data);
        return redirect()->route('employees.list');
    }
}

