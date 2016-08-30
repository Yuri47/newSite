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
    return view('initial');
});
Route::get('/form', function () {
    return view('form.form');
});
Route::post('/addUser', 'addUser@index');
Route::get('/showusers', 'ShowUsersController@index');


Route::post('edit/{id}', 'EditUsers@index');
Route::post('/makeedit', 'EditUsers@makeEdit');
Route::post('deleteuser/{id}', 'EditUsers@deleteuser');
 
//Route::get('edit/{id}', function ($id) {
//    return 'User '.$id;
//});
Route::auth();

Route::get('/admin', 'HomeController@index');

Route::get('/services', 'PagesController@service');
Route::get('/services/{url}', 'PagesController@serviceDetails');
Route::get('/createservices', 'CreateController@createservice');
Route::get('/viewservices', 'PagesController@viewServices');
Route::post('/newservice', 'CreateController@newService');
Route::post('/disableservice', 'ServiceController@disable');
Route::post('/enableservice', 'ServiceController@enable');
Route::post('/deleteservice', 'ServiceController@delete');
Route::post('/pageedit', 'ServiceController@pageEdit');
Route::post('/editservice', 'ServiceController@edit');

Route::get('/contact', 'ContactController@pageContact');
Route::post('/sendmail', 'ContactController@sendMail');

