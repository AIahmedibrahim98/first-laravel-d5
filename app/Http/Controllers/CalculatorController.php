<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum(Request $request)
    {
        $result = $request->x + $request->y + $request->z;
        echo "<h1>$request->name</h1>";
        echo $request->x . '+' . $request->y . '+' . $request->z . ' = ' . $result;

    }
    public function show()
    {
        return view('calculator');
    }
}
