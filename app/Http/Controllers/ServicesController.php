<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index($id = null, $name = null)
    {
        if ($id) {
            echo "<h3>ID : <span>$id<span> <span>$name</span<</h3>";
        }
        return view("services/service");
    }
}
