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


        // $emps = DB::table('employees')->count();
        // $emps = DB::table('employees')->max('SALARY');
        // $emps = DB::table('employees')->select('LAST_NAME as name')->get();
        /* $emps = DB::table('employees')
            ->where('SALARY', '>', '10000')
            ->where('LAST_NAME', 'king')->get(); */

        /* $emps = DB::table('employees')
            ->where('LAST_NAME', 'like' , 'k%')->get(); */

        /*  $auth_users = DB::table('users')->where('password', '123')->where(function ($q) {
            $q->where('email', 'ahmed@mail.com')->orWhere('mobile', '01000');
        }); */
        /* select id, name,email,mobile,role from users
             where password = 123 and (email='ahmed@mail.com' or mobile='01000')   */

        /* $emps = DB::table('employees')
            ->where([['SALARY', '>', 10000], ['LAST_NAME', '=', 'king']])->get(); */

        // $emps = DB::table('employees')->where('EMPLOYEE_ID', '777')->get();

        // $emp = DB::table('employees')->first();
        // DB::unprepared(""); // to write native query

        // dd(DB::insert("INSERT INTO `employees`(`EMPLOYEE_ID`, `LAST_NAME`, `EMAIL`, `HIRE_DATE`, `JOB_ID`)
        //  VALUES ('888','sara','sara@mail.com',now(),'IT_PROG')"));
        /*   dd(DB::table('employees')->insert([
            'EMPLOYEE_ID' => 777,
            'LAST_NAME' => 'power of query',
            'EMAIL' => 'xxx@test.com',
            'HIRE_DATE' => date('Y-m-d'),
            'JOB_ID' => 'IT_PROG'
        ])); */

        /* dd(DB::table('employees')->where('EMPLOYEE_ID',777)->update([
            'LAST_NAME' => 'power of laravel',
            'EMAIL' => 'xxx@test.com',
            'HIRE_DATE' => '2020-01-01',
        ])); */

        // dd(DB::table('employees')->where('EMPLOYEE_ID',777)->delete());

        // dd($emps);
        // $emps = DB::table('employees')->pluck('LAST_NAME', 'EMPLOYEE_ID')->toArray();
        // $emps_ids  = DB::table('employees')->where('SALARY', '>', 10000)->pluck('EMPLOYEE_ID')->toArray();
        $emps  = DB::table('employees')->get();
        dd($emps);
        foreach ($emps as $emp) {
            // echo "<h3>$emp->EMPLOYEE_ID : $emp->LAST_NAME : $emp->SALARY</h3>";
            dump($emp);
        }
    }
}
