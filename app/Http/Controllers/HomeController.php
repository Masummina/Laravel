<?php 
/**
 * // HomeController
 */
namespace App\Http\Controllers;

class HomeController extends Controller
{
	function index(){
		return "I am from Controller";
	}
	function contact(){
		$name = 'Md Masum Mina';
		$namef = [
			'age' => 44, 
			'nameis' => 'fffff'
		];
		return view('custom.test', ['name'=>$name], $namef);
	}
}


 ?>