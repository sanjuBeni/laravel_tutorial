<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class FetchDataController extends Controller
{
    public function fetchData()
    {
        // return DB::table('user')->get();
        return Employee::all();
    }
}
