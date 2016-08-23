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




}
