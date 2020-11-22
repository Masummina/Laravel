<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   
    public function create(){
        return "This is post method";
    }

    public function store(){
        return view('custom/test');
    }
    public function store2(){
        echo "This method form POST";
    }
    public function putmet(){
        return "This method form PUT";
    }

    public function delmeth(){
        return "This method form Delete method";
    }






}
