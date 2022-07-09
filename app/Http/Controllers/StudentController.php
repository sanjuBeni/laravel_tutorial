<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddStudentData;

class StudentController extends Controller
{



    public function stuData(Request $req)
    {
        if ($req->isMethod('post')) {
            // print_r($req->all());

            $req->validate([
                'name' => 'required|alpha',
                // 'email' => 'required|unique:tableName,email',
                'email' => 'required',
                'mobile' => 'required|numeric',
            ], [
                // custome message
                'name.alpha' => 'Only alphabet is required.',
                'mobile.numeric' => 'Only number allowed.'
            ]);

            echo "Name : " . $req->input('name');
            echo "<br>";
            echo "Email : " . $req->input('email');
            echo "<br>";
            echo "Mobile : " . $req->input('mobile');
        }
        return view('my-form');
    }
}