<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;
use Auth;

class PagesController extends Controller
{
    //

	public function service() {
  
$services = service::where('publish', 1)->get();
 
		return view('pages.service', ['services' => $services]);

	}
//pagecontroller
public function serviceDetails($url) {

//$service = service::find(10);
$service = service::where('url', $url)->get(); //pega todos os dados onde a url for igual ao parametro.
 

	 return view('pages.serviceDetails', ['service' => $service]);

}

public function viewServices() {


if (Auth::guest()) {
return view('auth.login');
} else {

 $services = service::all();
 
		return view('auth.viewservices', ['services' => $services]);

}
	}

}




