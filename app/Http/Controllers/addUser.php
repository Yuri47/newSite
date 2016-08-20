<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class addUser extends Controller
{
    //
public function index(Request $request) {


$name = $request -> input('name');
$email = $request -> input('email');




//inserir no banco de dados
	DB::table('users')->insert(
    ['name'=>$name,'email' => $email]
);
 return view('form.usersAdded', ['name' => $name]);
}
}
