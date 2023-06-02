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


//route tampil data kelas
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('student-classes', 'StudentClassController')->middleware(['auth']);