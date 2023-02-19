<?php

use App\Http\Controllers\FormDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('pages/user');
// });

Route::get('/user', [UsersController::class, 'viewLoad']);

Route::get('/role', function () {
    return view('pages/role');
});

Route::post("/form-data", [FormDataController::class, 'formData']);
Route::view('/noaccess', 'pages/noaccess');

Route::view('/home', 'pages/home')->middleware('ageChecker');
Route::view('/stu-data', 'pages/form')->middleware('ageChecker');

// Route::group(['middleware' => ['ageChecker']], function () {
// });