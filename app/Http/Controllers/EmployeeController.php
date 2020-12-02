<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    //
   
    public function employeeList(Request $request){
        
        
        return view("/employee/list");
    }
}
