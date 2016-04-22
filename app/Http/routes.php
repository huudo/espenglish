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


// Route::get("/{lang}",['as' => 'home', 'uses' => 'HomeController@index']);


// Route::get("/news",['uses' => 'HomeController@news']);
Route::get("/",['uses' => 'HomeController@index']);

Route::get("/eng",['uses' => 'HomeController@english']);

Route::get("/vn",['uses' => 'HomeController@vn']);


Route::get("/news",['uses' => 'HomeController@news']);

Route::get("/news/{id}",['uses' => 'HomeController@news_details']);


Route::get("/introduce",['uses' => 'HomeController@introduce']);

Route::get("/chuyen_nganh",['uses' => 'HomeController@chuyen_nganh']);

Route::post("/chuyen_nganh",['uses' => 'HomeController@addStudent']);

Route::get("/chuyen_nganh/{id}",['uses' => 'HomeController@chuyen_nganh_detail']);

Route::get("/giao_tiep",['uses' => 'HomeController@giao_tiep']);

Route::post("/giao_tiep",['uses' => 'HomeController@addStudent']);


Route::get("/contact",['uses' => 'HomeController@contact']);

Route::post("/contact",['uses' => 'HomeController@addStudent']);




//===========================ADMIN ROUTE====================================


Route::group(array('middleware'=>'auth','prefix'=>'admin'), function()
{
    Route::get("/",['uses' => 'AdminController@index']);

    Route::get("/news",['uses' => 'AdminController@news']);

    Route::get("/news/create_news",['uses' => 'AdminController@create_news']);
    
    Route::post("/news/create_news",['uses' => 'AdminController@post_create_news']);
 	
 	Route::post("/delete",['uses' => 'AdminController@delete']);

 	Route::get("/discuss",['uses' => 'AdminController@discuss']);

    Route::get("/discuss/create_discuss",['uses' => 'AdminController@create_discuss']);

    Route::post("/discuss/create_discuss",['uses' => 'AdminController@post_create_discuss']);
 	
 	Route::post("/delete_discuss",['uses' => 'AdminController@delete_discuss']);

    Route::get("/students",['uses' => 'AdminController@getStudent']);\

    Route::post("/accept_student",['uses' => 'AdminController@accept_student']);

    Route::get("/chuyen_nganh/{id}",['uses' => 'AdminController@chuyen_nganh']);

    Route::post("/chuyen_nganh/{id}",['uses' => 'AdminController@post_chuyen_nganh']);

});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');