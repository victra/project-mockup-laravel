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

Route::group(array('before' => 'auth'), function()
{
Route::get('logout', array('uses' => 'UserAdminController@logout'));
 
// Route yang ingin diproteksi taruh disini
Route::get('home', 'UserAdminController@home');
Route::get('laravel', 'UserAdminController@laravel');
});
 
Route::get('/', array('uses' => 'UserAdminController@login'));
Route::post('/', array('uses' => 'UserAdminController@doLogin'));