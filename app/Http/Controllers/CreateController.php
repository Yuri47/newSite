<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;
use Auth;
use Illuminate\Routing\Route;
use Redirect;
use Validator;


class CreateController extends Controller
{
    //

    public function createService() {

if (Auth::guest()) {
return view('auth.login');
} else {
return view('auth.createservice');
}
 
    	return view('auth.createservice');

    } //fim da função createService









public function newService(Request $request) {




//service::create($request->all());

//pega os valores da requisição
$nameService = $request -> input('nameService');
$description = $request -> input('description');
$longDescription = $request -> input('longDescription');
$imageValid = $request->file('image');

//local para salvar as imagens
$destinationPath = 'image/images/';
 


//valida as requisições
$validator = Validator::make(
[
'nameService' => $nameService,
'description' => $description,
'imageValid'  => $imageValid
],
[
'nameService' => 'required|unique:services|min:5', //esse unique é para que o nome do serviço seja unico
'description' => 'required|max:255|min:5', 
'imageValid'  => 'required'
]
);


if ($validator->fails()) //verifica a validação da requisição, se tiver erros ele envia para a pagina
//anterior com os erros.
{

return redirect()
->action('CreateController@createservice')->withErrors($validator);

 
}

//se a validação estiver OK os códigos abaixo serão executados




$image; //inicia a variavel image

 
$url =   tirarAcentos($nameService); //retira os acentos e substitui os espaços por _ 




         if ($request->hasFile('image')) { //verifica se tem imagem
         	$st = str_random(40).".".$request->file('image')->getClientOriginalExtension(); //produz um nome randomico para a imagem
          
 			$request->file('image')->move($destinationPath, $st); //move o arquivo para a pasta especificada com o nome randomico
 			$image = $st; //atribui o nome randomico da imagem à variavel image
 		 
         } 
             
           $service = ['nameService' => $nameService, //cria o array com os dados para o banco de dados
 		  'description' => $description,
 		  'longDescription' => $longDescription,
 		  'imageService' => $image,
 		  'url' => $url,
 		  'publish' => '1'

 		  ];


//mensagem de serviço adicionado
 $temp = '<div class="alert alert-success">
<strong>Sucesso!</strong>
O produto <strong>'.$nameService.'</strong>  foi adicionado.
</div>';


service::create($service); //insere no banco de dados 

    	//return view('initial');
        //return Route::('services');
//return Redirect::to('/createservices') with->('nameService' => $nameService);

return Redirect::to('createservices')->with('temp', $temp); //redireciona para a pagina de criar serviço com a mensagem
    }
}
