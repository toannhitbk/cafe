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

//Css,html....
Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/', 'HomeController@index');
    Route::get('/index.html', 'HomeController@index');
    Route::get('/menu.html', 'MenuController@index');
    Route::get('/gallery.html', 'GalleryController@index');
    Route::get('/contact.html', 'ContactController@index');
});

//Admin
Route::group(['prefix' => 'admin','namespace'=>'Backend'], function(){
	Route::get('index', ['as' => 'dashboard', 'uses' => 'HomeController@index']);
	Route::match(array('get', 'post'),'login', [ 'as' => 'login', 'uses' => 'LoginController@login']);
});

Route::controllers([
	'admin' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

