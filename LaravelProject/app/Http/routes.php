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
  /*  return view('welcome');*/
  /*$users = DB::select('SELECT * FROM tbl_users');*/
  $users = DB:: table('tbl_users')->find(1);

/*  dd($users);
  print_r($array);*/
  return Response::json($users);
});
Route::get('home', function () {
    return view('template')->nest('content','home');
});
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('portfolio', 'PagesController@portfolio');
Route::get('list', 'PagesController@getUsers');

Route::controller('contacts', 'ContactController');

