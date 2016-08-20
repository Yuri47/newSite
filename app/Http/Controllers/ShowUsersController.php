<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ShowUsersController extends Controller
{
    //

public function index() {

$users = DB::select('select * from users');

return view('form.showUsers', [
	'users' => $users,
	'tst' => 'essa porra n quer funcionar'

	]);

 

}
}
