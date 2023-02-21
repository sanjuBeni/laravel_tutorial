<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpReqController extends Controller
{
    public function index(Request $req)
    {
        $data = Http::get("https://reqres.in/api/users");

        return view('httpdata', ['data' => $data['data']]);
        // return $req->header(); // Get the header information
        // return $data->header('Content-Type', 'text/plain');
    }
}
