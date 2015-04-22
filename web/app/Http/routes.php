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
Route::group(['namespace'=>'Backend','prefix' => 'admin','middleware' => 'auth'], function()
{
	Route::get('/', [
		'as' => 'dashboard', 
		'uses' => 'HomeController@index'
	]);
	Route::get('producttype', [
		'as' => 'producttype', 
		'uses' => 'ProductTypeController@index'
	]);
	Route::get('/products', [
		'as' => 'products', 
		'uses' => 'ProductsController@index'
	]);
	Route::get('/setting', [
		'as' => 'setting', 
		'uses' => 'SettingController@index'
	]);
	Route::get('/contacts', [
		'as' => 'contacts', 
		'uses' => 'ContactsController@index'
	]);
	Route::get('/images', [
		'as' => 'images', 
		'uses' => 'ImagesController@index'
	]);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


