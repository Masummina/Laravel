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

// prefix route

Route::prefix('admin')->group(function(){
    Route::get('hello', function(){
        return "I am from Hello route";
    });
});


Route::get('world', function(){
    return "I am from world route";
});


// Get value by get Method
Route::get('create_user', 'UserController@create');

Route::get('user', 'UserController@store')->name('user_list');
Route::post('user', 'UserController@store2');

Route::put('user', 'UserController@putmet');
Route::patch('user', 'UserController@patchmet');
Route::delete('user', 'UserController@delmeth');

Route::any('/user-met', function(){
    return "This function form any";
});

