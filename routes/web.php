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
    return view('auth.login');
});



Route::get('auth/social', 'LoginSocialController@show')->name('social.login');
Route::get('oauth/{driver}', 'LoginSocialController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'LoginSocialController@handleProviderCallback')->name('social.callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
