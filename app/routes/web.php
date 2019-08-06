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
    return view('layouts.main');
});

Route::get('/profile',function(){
	return view('profile');
});

Route::get('/user/{id}/offres',function()
{
	return view('users/offres/index');
});

Route::get('/user/{id}/formations',function(){
	return view('users/formations/index');
});

Route::get('/entreprise/{id}/profile',function(){
	return view('entreprises/profile');
});

Route::get('entreprise/{id}/offres',function()
{
	return view('entreprises/offres/index');
});

Route::get('entreprise/{id}/offres/create',function(){
	return view('entreprises/offres/create');
});

Route::get('entreprises/{id}/formations/create',function()
{
	return view('entreprises/formations/create');
});

Route::get('entreprise/{id}/demandes',function()
{
	return view('entreprises/demandes/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
