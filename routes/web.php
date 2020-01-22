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

//use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'welcomeController@index'); */
Route::get('/test' , 'testController@index')->name('test');

Route::get('profile/edit', function (){
    return view('profile.edit');
});

Route::get('profile/update', function(){
    return view('profile.update');
});


// profiles

Route::get('profile', 'ProfileController@show')->middleware('auth')->name('profile.show');

Route::post('profile.edit', 'ProfileController@update')->middleware('auth')->name('profile.update');

Route::post('profile.update', 'ProfileController@edit')->middleware('auth')->name('profile.edit');



//recettes

Route::get('recette', function () {
    return view('recettes.show');
});
Route::get('recette/create', function () {
    return view('recettes.create');
});
Route::get('recette/delete', function () {
    return view('recettes.delete');
});
Route::get('recette/edit', function () {
    return view('recettes.edit');
});

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', "AdminController@index")->name('admin.dashboard');
    Route::delete('users/{id}', 'AdminController@adminDeleteUser')->name('deleteUser');
});

