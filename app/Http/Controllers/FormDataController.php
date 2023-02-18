<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDataController extends Controller
{
    public function formData(Request $req)
    {
        return $req->input();
    }
}
