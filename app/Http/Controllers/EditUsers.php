<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\User;

class EditUsers extends Controller
{
    //


public function index(Request $request, $id) {

	//$user = DB::table('users')->where('id', $id)->first();
	$user = User::find($id); //faz uma busca na tabela user pelo ID usando o Model (App\User)
 
	//return view('form.userEdit', [
	//	'name' => $user->name,
	//	'id' => $user->id,
	//	'email' => $user->email
//
	//	]);
	return view('form.userEdit', ['user' => $user]);
 
}

public function makeEdit(Request $request) {

$id = $request -> input('id');
$name = $request -> input('name');
$email = $request -> input('email');



//DB::table('users')
//            ->where('id', $id)
//            ->update(['name' => $name, 'email' => $email]);

$user = User::find($id);
$user->name = $name;
$user->email = $email;
$user->save();

return view('sucess', ['msg' => 'Usuário editado com sucesso!']);

}

public function deleteuser(Request $request, $id) {
 
//DB::table('users')->where('id', $id)->delete();


$user = User::find($id);
$user->delete();
return view('sucess', ['msg' => 'Usuário excluido com sucesso!']);
}



}
