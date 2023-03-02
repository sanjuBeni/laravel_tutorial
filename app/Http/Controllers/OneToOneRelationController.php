<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class OneToOneRelationController extends Controller
{
    public function index()
    {
        // $allData = [];
        // $allData[] = Employee::find(1)->getDemo;
        // $allData[] = Employee::find(1)->getCompany;
        $manyData[] = Employee::find(1);
        $manyData[] = Employee::find(1)->getDoc;
        return $manyData;

        // When fetch data another database use connection method 
        // return DB::connection('mysql2')->table("tblname")->get();
        // And when fetch data with model then inside model use ---- publie $connection = "mysql2"; ---
    }
}
