<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function stuData(Request $req)
    {
        if ($req->isMethod('post')) {
            // print_r($req->all());
            echo "Name : " . $req->input('name');
            echo "<br>";
            echo "Email : " . $req->input('email');
            echo "<br>";
            echo "Mobile : " . $req->input('mobile');
        }
        return view('my-form');
    }
}
