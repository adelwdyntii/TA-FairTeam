<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:user')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home', 'HomeController@index')->name('home');
//route data kelas
Route::get('/student-classes', [StudentClassController::class,'index']);
//route data spp
Route::get('/student-spps', [StudentSppController::class,'index']);
//route data siswa
Route::get('/student', [StudentController::class,'index']);