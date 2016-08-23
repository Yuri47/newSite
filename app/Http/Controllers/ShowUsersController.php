<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;
class ShowUsersController extends Controller
{
    //

public function index() {

//$users = DB::select('select * from users');
//$users = DB::table('users')->get(); 
 
$users = User::all(); //pega todos os usuarios da banco de dados usando o Model User (App\User)

return view('form.showUsers', [
	'users' => $users,
	'tst' => 'essa porra n quer funcionar'

	]);

 

}
}
