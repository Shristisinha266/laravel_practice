<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Student;
use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     // $all = new Student;

//     return view('welcome');
// });

Route::get("/", [StudentController::class, "home"]);