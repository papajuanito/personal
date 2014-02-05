<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',  array('as' => 'index', 'uses' => 'AppController@showIndex'));

Route::get('work',  array('as' => 'work', 'uses' => 'AppController@showWork'));

// Route::get('work-single',  array('as' => 'work-single', 'uses' => 'AppController@showSingleWork'));

Route::get('work/{id?}', array('as' => 'work', 'uses' => 'AppController@showWork'));
