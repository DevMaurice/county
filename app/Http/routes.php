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

Route::get('/admin',function(){
    return view('app');
});

Route::get('/', function(){
    return view('welcome');
});


// Logging in and out
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Admin section
$router->group(['namespace' => 'Admin','middleware' => 'auth'], function () {
  
  /**
   * File Upload Section
   */
  get('admin/upload', 'UploadController@index');
  post('admin/upload/file', 'UploadController@uploadFile');
  delete('admin/upload/file', 'UploadController@deleteFile');
  post('admin/upload/folder', 'UploadController@createFolder');
  delete('admin/upload/folder', 'UploadController@deleteFolder');


});
