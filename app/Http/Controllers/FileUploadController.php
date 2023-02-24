<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function index(Request $req)
    {

        // custom file name

        // $req->file('file')->storeAs('folderName', 'newFilename');

        return $req->file('file')->store('docu');
    }
}
