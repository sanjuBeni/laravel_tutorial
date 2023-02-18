<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function viewLoad()
    {
        return view('pages/user', ['users' => ['Alex', 'Peter', 'Sam']]);
    }
}
