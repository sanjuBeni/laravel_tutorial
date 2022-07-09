<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyDBController extends Controller
{
    public function dbWork()
    {
        // DB::insert('INSERT into blog(name,email,mobile) values("Sanjay", "sanjay@gamil.com", "1234567890")');
        // DB::insert('INSERT into blog(name,email,mobile) values(?,?,?)', ["Jack", "jack@gamil.com", "1234567890"]);
        DB::update('UPDATE blog set name = "Pratiksh Beniwal" where id = 3');

        // DB::update('UPDATE blog set name = ? where id = 3',['name',id]);

        DB::delete('DELETE from blog where id = 2');

        // DB::delete('DELETE from blog where id = ?', [3]);

        $users = DB::select('SELECT *from blog');

        echo "<pre>";
        print_r($users);
    }
}