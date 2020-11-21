<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // All user Show
        public function usersall(){
	        $users = User::all();
	        return $users;
        }
        
    // Parameter Pass and fixed data show

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    // User delete function

    public function deleted($id){
        $userdel = User::findOrFail($id);
        $userdel->delete();
        return 'User deleted Successfully';
    }


    // User Edit function

    public function edit($id){
        $useredit = User::findOrFail($id);
        $useredit->name = "Rony";
        $useredit->save();
        return 'User Edit Successfully';
    }

	public function creates(){
		$data = [
			'name'     => "Aktaruzzaman Hasan",
			'email'    => 'aktar@gmail.com',
			'password' => '123456789'

		];
		User::create($data);

			$data = [
			'name'     => "Raqufffibul Hasan",
			'email'    => 'raquyfibul@gmail.com',
			'password' => '123456789'

		];
		User::create($data);

		return 'user Created Successfully';
    }
    



}
