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
Auth::routes();

Route::middleware('auth')->group(function () {


Route::get('/compte', 'UsersController@index')->name('compte');

});

Route::get('/events','EventController@index')->name('events.index');
Route::post('/events', 'EventController@addEvent')->name('events.add');

Route::get('/calendrier','EventController@index')->name('events.index');
Route::get('contact', 'contactController@create');
Route::post('contact', 'contactController@store');


Route::get('/plan', function () {
    return view('plan');
});


Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cgv', 'CGVController@index')->name('cgv');

Route::get('/mentionslegales', 'MentionslegalesController@index')->name('mentionslegales');

Route::get('/ticket', 'TicketsController@index')->name('ticket');

Route::get('/attractions', 'AttractionsController@index')->name('attractions');

Route::get('/attraction/{id}', 'AttractionsController@show')->name('attraction');

// Route::get('/compte/{id}', 'UsersController@show')->name('compte');

// Route::get('/compte', 'UsersController@update')->name('compte');

// Route::post('/comptedetails', 'UsersController@store')->name('newcompte');

// Route::get('/compte', 'UsersController@update')->name('compte')



// Route::get('/attraction/{id}', 'AttractionsController@show')->name('attraction');


// Route::get('/compte/', 'UsersController@edit')->name('editusers');


// Route::post('/compte/', 'UsersController@update')->name('updateusers');



// Route::get('/comptedetails', function () {
//     return view('comptedetails');
// });
