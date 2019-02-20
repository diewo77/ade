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
Route::resource('resultats', 'ResultatController');

// SubResultats
Route::get('/sub-resultats', 'SubResultatController@index')->name('sub-resultats.index');
Route::post('/sub-resultats/{resultat}', 'SubResultatController@store')->name('sub-resultats.store');
Route::get('/sub-resultats/{resultat}/create', 'SubResultatController@create')->name('sub-resultats.create');
Route::get('/sub-resultats/{subResultat}', 'SubResultatController@show')->name('sub-resultats.show');
Route::patch('/sub-resultats/{subResultat}', 'SubResultatController@update')->name('sub-resultats.update');
Route::delete('/sub-resultats/{subResultat}', 'SubResultatController@destroy')->name('sub-resultats.destroy');
Route::get('/sub-resultats/{subResultat}/edit', 'SubResultatController@edit')->name('sub-resultats.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
