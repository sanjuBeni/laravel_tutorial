<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function index(Request $req)
    {
        $req->session()->put('userName', $req->input('name'));
        $req->session()->put('password', $req->input('password'));
        return redirect('/profile');
    }

    function profile(Request $req)
    {
        $data[] = $req->session()->get('userName');
        $data[] = $req->session()->get('password');
        return view('profile');
    }
}
