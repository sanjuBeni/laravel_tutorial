<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MyDBController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("abt/{name?}", [AboutController::class, "index"])->where(["name" => "[a-zA-Z]+"]);

Route::get("/about", [AboutController::class, "about"]);

// Route::get("about-us/{name?}", function ($name = null) {
//     return view("about", ["name" => $name]);
// })->where(["name" => "[a-zA-Z]+"]);

// Route::get('/first', [FirstController::class, 'index']);

// // Route::get("/service/{id?}/{name?}", [ServicesController::class, "index"])
// //     ->where("id", "[0-9]+")
// //     ->where("name", "[a-zA-Z]+");



// Route::get("/service/{id?}/{name?}", [ServicesController::class, "index"])
//     ->where(["id" => "[0-9]+", "name" => "[a-zA-Z]+"]);

// Route::get("/form-data", function () {
//     return redirect("/list-data");
// });

// Route::get("list-data", function () {
//     echo "<h2>This is list data from the database!</h2>";
// });

// // Route::get("service/{id}", function ($id) {
// //     echo "<h2>ID : </h2>" . $id;
// // })->where("id", "[0-9]+");

// // Route::get("service/{id}", function ($id) {
// //     echo "<h2>Name : </h2>" . $id;
// // })->where("id", "[a-zA-Z]+");

// Student Fill data

Route::match(['get', 'post'], 'add-student', [StudentController::class, 'stuData']);

// Route::match(['get', 'post'], 'add-student', [StudentController::class, 'addStudent']);

Route::get('/dbdata', [MyDBController::class, 'dbWork']);