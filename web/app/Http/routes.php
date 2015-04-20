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
Route::group(['namespace'=>'Frontend'], function()
{
	Route::get('/', [
		'as' => 'home', 
		'uses' => 'HomeController@index'
	]);
    Route::get('/menu', [
    	'as' => 'menu', 
    	'uses' => 'MenuController@index'
    ]);
    Route::get('/gallery', [
    	'as' => 'gallery', 
    	'uses' => 'GalleryController@index'
    ]);
    Route::get('/contact', [
    	'as' => 'contact', 
    	'uses' => 'ContactController@index'
    ]);
});

//Admin
Route::group(['namespace'=>'Backend'], function()
{
	Route::get('admin', [
		'as' => 'dashboard', 
		'uses' => 'HomeController@index'
	]);
	Route::get('/products', [
		'as' => 'products', 
		'uses' => 'HomeController@index'
	]);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


