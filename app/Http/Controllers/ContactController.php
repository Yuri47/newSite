<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Mail;
use DB;
use Redirect;

class ContactController extends Controller
{
    //

public function pageContact() {

	return view('pages.contact');

}

public function sendMail() {

 $temp = '<div class="alert alert-success">
<strong>Sucesso!</strong>
Mensagem enviada!
</div>';


	return Redirect::to('/contact#email')->with('temp', $temp);

 
}


}
