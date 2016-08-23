<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;
 

class PagesController extends Controller
{
    //

	public function service() {
  
$services = service::all();
 
		return view('service', ['services' => $services]);

	}

public function serviceDetails($url) {

//$service = service::find(10);
$service = service::where('url', $url)->get(); //pega todos os dados onde a url for igual ao parametro.
 

	 return view('serviceDetails', ['service' => $service]);

}



}
