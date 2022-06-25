<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($name = null)
    {
        // return view("about", ["name" => $name]);

        // with compact() method

        return view("about", compact("name"));
    }

    public function about()
    {
        $name = "Pratiksh Beniwal";
        $fruits = ["Apple", "Banana", "Orange"];

        return view("about", compact("name", "fruits"));
    }
}
