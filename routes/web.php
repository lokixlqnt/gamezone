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

Route::get('/compte', function () {
    return view('compte');
});

Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/mentions', function () {
    return view('mentionslegales');
});

Route::get('/events','EventController@index')->name('events.index');
Route::post('/events', 'EventController@addEvent')->name('events.add');

Route::get('/calendrier','EventController@index')->name('events.index');
