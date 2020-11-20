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
		$nameg = ['name'=>$name]; // 

		// data is public variable which call in Controller
		$this->data['fnaem'] = 'Tazim Uddin Mina';
		$this->data['mname'] = 'Rina Begum';
		$this->data['age'] = 34;


		// array pass By controller
		$this->data['classone'] = ['Bangla', 'English', 43, 'Math'];

		return view('custom.test', $nameg, $this->data);
	}
}


 ?>