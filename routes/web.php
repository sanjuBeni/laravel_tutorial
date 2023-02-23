<?php

use App\Http\Controllers\FormDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\HttpMethodController;
use App\Http\Controllers\HttpReqController;
use App\Http\Controllers\UserAuthController;

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

// Route::get('/user', [UsersController::class, 'viewLoad']);

// Route::get('/role', function () {
//     return view('pages/role');
// });

// Route::post("/form-data", [FormDataController::class, 'formData']);
// Route::view('/noaccess', 'pages/noaccess');

// Route::view('/home', 'pages/home')->middleware('ageChecker');
// Route::view('/stu-data', 'pages/form')->middleware('ageChecker');

// Route::group(['middleware' => ['ageChecker']], function () {
// });

// Route::get("/fetch", [FetchDataController::class, 'fetchData']);
// Route::get("/httpdata", [HttpReqController::class, 'index']);

// Route::get('/login_user', [HttpMethodController::class, 'index']);
// Route::post('/login_user', [HttpMethodController::class, 'index']);
// Route::put('/login_user', [HttpMethodController::class, 'index']);
// Route::patch('/login_user', [HttpMethodController::class, 'index']);
// Route::view('/user_login', 'user_data');

Route::post('/user-login', [UserAuthController::class, 'index']);
Route::get('/profile', function () {
    if (session()->has('userName')) {
        return view('profile');
    }
    return redirect('/login');
});
Route::get('/login', function () {
    if (session()->has('userName')) {
        return redirect('/profile');
    }
    return view('login');
});
Route::get('/logout', function () {
    if (session()->has('userName')) {
        session()->pull('userName');
        session()->pull('password');
        return redirect('/login');
    }
    return redirect('/profile');
});
