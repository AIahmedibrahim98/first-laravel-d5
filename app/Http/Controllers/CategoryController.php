<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function manageTable()
    {
        // dd(DB::select("select EMPLOYEE_ID ,LAST_NAME from employees"));
        // dd(DB::insert("INSERT INTO `employees`(`EMPLOYEE_ID`, `LAST_NAME`, `EMAIL`, `HIRE_DATE`, `JOB_ID`)
        //  VALUES ('888','sara','sara@mail.com',now(),'IT_PROG')"));

        // DB::update("update employees set LAST_NAME = 'koko' where EMPLOYEE_ID = 999");
        // DB::delete("delete from employees where EMPLOYEE_ID = 999");
        // $emps = DB::select("select EMPLOYEE_ID ,LAST_NAME from employees order by EMPLOYEE_ID desc");
        $emps = DB::table('employees')->get();
        dd($emps);
        foreach ($emps as $emp) {
            echo "<h3>$emp->EMPLOYEE_ID : $emp->LAST_NAME</h3>";
        }
    }
}
