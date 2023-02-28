<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AddMemberController extends Controller
{
    function addMember(Request $req)
    {
        $data = new Employee();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect('add');
    }

    function deleteData($id = 7)
    {
        // Employee::find($id)->delete();
        $delete = Employee::where('id', $id)->delete();
        if ($delete)
            return 'Record has been deleted.';
    }

    function showData($id = 3)
    {
        return Employee::find($id);
    }

    function update(Request $req)
    {
        $data = Employee::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect("/");
    }
}

// MIGRATION COMMAND

// php artisan make:migration create_tblName_table
// php artisan migrate
// php artisan migrate:reset
// php artisan migrate:rollback --step 3
// php artisan migrate --path=/database/migrations/2020_09_21_141958_create_test5_table.php
// php artisan migrate:refresh