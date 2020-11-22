<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Get value by get Method
Route::get('create_user', 'UserController@create');
Route::get('usertest', 'UserController@store');
Route::post('useradd', 'UserController@store2');
Route::put('putmethod', 'UserController@putmet');
Route::patch('patmet', 'UserController@patchmet');
Route::delete('delmethode', 'UserController@delmeth');

