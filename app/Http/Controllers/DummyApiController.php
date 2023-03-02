<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class DummyApiController extends Controller
{
    function demo()
    {
        return ["name" => "Sanjay Beniwal", "email" => "sanjay@gmail.com"];
    }

    function fetchData()
    {
        return Employee::all();
    }
}
