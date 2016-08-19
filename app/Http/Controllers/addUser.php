<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class addUser extends Controller
{
    //
public function index(Request $request) {
	DB::table('users')->insert(
    ['name'=>'John Bitch','email' => 'john@example.com' ]
);

	var_dump($request -> all());
		//return view('form.usersAdded');
}






}
