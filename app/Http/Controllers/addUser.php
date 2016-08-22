<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class addUser extends Controller
{
    //
public function index(Request $request) {


$name = $request -> input('name');
$email = $request -> input('email');
$destinationPath = 'image/';
 
         $request->file('image')->move($destinationPath, 'novoArquivo.jpg');
             
          //  return redirect('/form')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
         


//inserir no banco de dados
	DB::table('users')->insert(
    ['name'=>$name,'email' => $email]
);
 return view('form.usersAdded', ['name' => $name]);
}
}
