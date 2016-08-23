<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;

class CreateController extends Controller
{
    //

    public function createService() {

    	return view('createservice');

    }

    public function newService(Request $request) {

//service::create($request->all());

$nameService = $request -> input('nameService');
$description = $request -> input('description');
$longDescription = $request -> input('longDescription');
$destinationPath = 'image/';
 

$image;
 $url = "service_teste_url";



         if ($request->hasFile('image')) { //verifica se tem imagem
         	$st = str_random(40).".jpg";
         	$ext = pathinfo($request->file('image'), PATHINFO_EXTENSION);
 			$request->file('image')->move($destinationPath, $st);
 			$image = $st;
 		//	$user->image = $st;
         } 
             
           $service = ['nameService' => $nameService, 
 		  'description' => $description,
 		  'longDescription' => $longDescription,
 		  'imageService' => $image,
 		  'url' => $url,
 		  'publish' => '1'

 		  ];


service::create($service);
    	return view('initial');

    }
}
