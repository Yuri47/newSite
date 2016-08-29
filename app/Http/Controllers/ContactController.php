<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Mail;
use DB;

class ContactController extends Controller
{
    //

public function pageContact() {

	return view('pages.contact');

}

public function sendMail() {

$user = User::find(1);
$email = 'testsontst0@gmail.com';
	   
   Mail::send('mail.mail', ['user' => $user], function ($message) use ($email) {
            

           $message->to($email)->subject('Your Reminder!');
        });

	return "contato";


}


}
