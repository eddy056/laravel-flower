<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PagesController@home');

Route::get('home','PagesController@home');

Route::get('flower', 'FlowerController@showFlower');

Route::get('flower/{id}','FlowerController@flower');

Route::get('login','PagesController@login');

Route::get('register','PagesController@register');

Route::get('contact','PagesController@contact');

Route::get('about','PagesController@about');

Route::get('gallery','PagesController@gallery');
