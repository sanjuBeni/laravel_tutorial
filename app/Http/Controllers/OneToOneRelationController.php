<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class OneToOneRelationController extends Controller
{
    public function index()
    {
        $allData = [];
        $allData[] = Employee::find(1)->getDemo;
        $allData[] = Employee::find(1)->getCompany;
        return $allData;
    }
}
