<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class EditUsers extends Controller
{
    //


public function index(Request $request, $id) {

	$user = DB::table('users')->where('id', $id)->first();
	 
 
	return view('form.userEdit', [
		'name' => $user->name,
		'id' => $user->id,
		'email' => $user->email

		]);
 
}

public function makeEdit(Request $request) {

$id = $request -> input('id');
$name = $request -> input('name');
$email = $request -> input('email');



DB::table('users')
            ->where('id', $id)
            ->update(['name' => $name, 'email' => $email]);

return view('sucess', ['msg' => 'Usuário editado com sucesso!']);

}

public function deleteuser(Request $request, $id) {
 
DB::table('users')->where('id', $id)->delete();
return view('sucess', ['msg' => 'Usuário excluido com sucesso!']);

}



}
