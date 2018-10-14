<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/posts','HomeController');

Auth::routes();

Route::get('/home',function () {
    return view('home');
} );

//Route::get('auth/facebook', ['as' =>'getLogin', 'uses'=>'Auth\RegisterController@redirectToProvider']);
//Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');