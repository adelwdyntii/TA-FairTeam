<?php

use App\Http\Controllers\StudentClassController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', 'HomeController@index')->name('home');
//route data kelas
Route::get('/student-classes', [StudentClassController::class,'index']);
//route data spp
Route::get('/student-spps', [StudentSppController::class,'index']);
//route data siswa
Route::get('/student', [StudentController::class,'index']);