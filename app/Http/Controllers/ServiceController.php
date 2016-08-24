<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;
use Redirect;
use Auth;
use Validator;

class ServiceController extends Controller
{
    //
    public function enable(Request $request) {

    	$id = $request->id;
		$service = service::find($id);
		$service->publish = 1;
		$service->save();

    	return Redirect::to('viewservices');

    }

     public function disable(Request $request) {

    	$id = $request->id;
		$service = service::find($id);
		$service->publish = 0;
		$service->save();

    	return Redirect::to('viewservices');

    }

     public function delete(Request $request) {

    	$id = $request->id;
		$service = service::find($id);
		$service->delete();

    	return Redirect::to('viewservices');

    }

    public function pageEdit(Request $request) {

        if (Auth::guest()) {
            return view('auth.login');
        } else {
        $id = $request->id;
        $services = service::find($id);
        return view('auth.pageedit', ['services' => $services]);

}

    }

    public function edit(Request $request) {

        //pega os valores da requisição
$nameService = $request -> input('nameService');
$description = $request -> input('description');
$longDescription = $request -> input('longDescription');
$imageValid = $request->file('image');
$id = $request->input('id');
//local para salvar as imagens
$destinationPath = 'image/images/';
$services = service::find($id);

//valida as requisições
$validator = Validator::make(
[
'nameService' => $nameService,
'description' => $description,
'longDescription' => $longDescription
],
[
'nameService' => 'required|unique:services|min:5', //esse unique é para que o nome do serviço seja unico
'description' => 'required|max:255|min:5',
'longDescription' => 'required'
]
);


if ($validator->fails()) //verifica a validação da requisição, se tiver erros ele envia para a pagina
//anterior com os erros.
{

//return redirect()
//->action('ServiceController@pageEdit')->withErrors($validator)->with($services);
    return view('auth.pageedit', ['services' => $services])->withErrors($validator);
    
}

return "ok";
    }


}
