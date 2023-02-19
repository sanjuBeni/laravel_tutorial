<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDataController extends Controller
{
    public function formData(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'password' => ['required', 'min : 5'],
        ]);
        return $req->input();
    }
}
