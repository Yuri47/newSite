<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form.form');
});
Route::post('/addUser', 'addUser@index');
Route::get('/showusers', 'ShowUsersController@index');


Route::get('edit/{id}', 'EditUsers@index');
Route::post('/makeedit', 'EditUsers@makeEdit');
Route::post('deleteuser/{id}', 'EditUsers@deleteuser');
 
//Route::get('edit/{id}', function ($id) {
//    return 'User '.$id;
//});