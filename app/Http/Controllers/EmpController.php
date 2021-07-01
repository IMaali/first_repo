<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpController extends Controller
{
  public function getAll()
  {
    //$employees = Employee::all();
    //return view('employee',compact('employees'));
    return view('employee');
  }

  public function DPDF()
  {
    $pdf = PDF::loadView('employee');
    return $pdf->download('employees.pdf');
  }
}
