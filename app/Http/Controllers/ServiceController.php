<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\service;
use Redirect;

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
}
