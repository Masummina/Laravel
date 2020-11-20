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

Route::get('about', 'HomeController@index');
Route::get('contact', 'HomeController@contact');
Route::get('newtest', 'IndexController@newcontroller');

Route::get('test', function(){
	return "I am form Test route";
});

// Route::get('about', function(){
// 	return "This is about module";
// });
