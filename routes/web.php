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
    return view('index');
})->name('index');

// Centres
Route::get('/centres', 'CentreController@index')->name('centres.index');
Route::post('/centres', 'CentreController@store')->name('centres.store');
Route::get('/centres/create', 'CentreController@create')->name('centres.create');
Route::get('/centres/{centre}', 'CentreController@show')->name('centres.show');
Route::patch('/centres/{centre}', 'CentreController@update')->name('centres.update');
Route::get('/centres/{centre}/edit', 'CentreController@edit')->name('centres.edit');

// Resultats
Route::get('/resultats', 'ResultatController@index')->name('resultats.index');
Route::post('/resultats', 'ResultatController@store')->name('resultats.store');
Route::get('/resultats/create', 'ResultatController@create')->name('resultats.create');
Route::get('/resultats/{resultat}', 'ResultatController@show')->name('resultats.show');
Route::patch('/resultats/{resultat}', 'ResultatController@update')->name('resultats.update');
Route::get('/resultats/{resultat}/edit', 'ResultatController@edit')->name('resultats.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
