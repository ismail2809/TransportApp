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
Route::get('/1', function () {
    return view('reservation.listes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reservations', 'ReservationController@index')->name('reservations');
Route::get('/reservation/new', 'ReservationController@create');
Route::post('/reservation', 'ReservationController@store')->name('reservation');
Route::get('/reservation/détail/{id}', 'VoyageController@show');
Route::get('/reservation/listes', 'ReservationController@listes'); 
Route::get('/reservation/historiques', 'ReservationController@historiquesReservation'); 
Route::get('/voyages', 'VoyageController@index')->name('voyages');
Route::post('/voyage', 'VoyageController@store')->name('voyage');
Route::get('/voyage/listes', 'VoyageController@listes'); 

//profile
Route::get('/profile', 'ProfileController@index'); 
Route::get('/profile/{id}/edit', 'ProfileController@edit'); 
Route::put('/profile/{id}', 'ProfileController@update'); 

