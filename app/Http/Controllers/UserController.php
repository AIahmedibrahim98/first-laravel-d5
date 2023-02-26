<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        echo "Show Users";
    }
    public function delete()
    {
        echo "Delete User";
    }
}
