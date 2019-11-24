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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'welcomeController@index'); */
Route::get('/test' , 'testController@index')->name('test');


// profiles
Route::get('profile', function () {
    return view('profile.show');
});

Route::get('profile/create', function () {
    return view('profile.create');
});

Route::get('profile/edit', function () {
    return view('profile.edit');
});

Route::post('profile/create', ['uses' => 'ProfileController@store', 'as' => 'profile.store']);


//Recipes
