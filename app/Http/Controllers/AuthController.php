<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){

        return view('register');
    }
    public function welcome(Request $request){
       
        $fnama = $request->input('fname');
     	$lname = $request->input('lname');
        $name = $fnama." ".$lname;
        return view('welcome',['data' => $name]);
    }
    
}