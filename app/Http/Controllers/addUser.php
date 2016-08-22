<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\User;
class addUser extends Controller
{
    //
public function index(Request $request) {


$name = $request -> input('name');
$email = $request -> input('email');
$destinationPath = 'image/';
 
//$user = $request->all();
$image;
 



         if ($request->hasFile('image')) { //verifica se tem imagem
         	$st = str_random(40).".jpg";
         	$ext = pathinfo($request->file('image'), PATHINFO_EXTENSION);
 			$request->file('image')->move($destinationPath, $st);
 			$image = $st;
 		//	$user->image = $st;
         } 
             
           $user = ['name' => $name, 
 		  'email' => $email,
 		  'image' => $image

 		  ]; 
         


//inserir no banco de dados
//	DB::table('users')->insert(
//    ['name'=>$name,'email' => $email]
//);
//o código abaixo faz o mesmo que o código acima. Ele pega todos os valores da requisição com o (request -> all),
// cria um novo User (do Model User) com os valores da requisição e depois salva (user -> save);         
//$param = $request -> all(); 
//$user = new User($param);
//$user -> save();
//agora a porra ficou séria! O código abaixo faz o mesmo que os cógidos acima. Fudeo.
User::create($user);


 //return view('form.usersAdded', ['name' => $name]);
 return view('sucess', ['msg' => 'Usuário cadastrado com sucesso!']);
}
}
