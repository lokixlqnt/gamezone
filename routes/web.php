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

    Route::get('/compte', function () {
        return view('compte');
    });

});

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/mentions', function () {
    return view('mentionslegales');
});

Route::get('/ticket', function () {
    return view('ticket');
});

// Route::get('/attractions', function () {
//     return view('attractions');
// });

// Route::get('/attraction', function () {
//     return view('attraction');
// });

Route::get('/attractions/', 'AttractionsController@index')->name('attractions');


Route::get('/attraction/{id}', 'AttractionsController@show')->name('attraction');

// Route::get('/compte/', 'UsersController@edit')->name('editusers');


// Route::post('/compte/', 'UsersController@update')->name('updateusers');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/comptedetails', function () {
    return view('comptedetails');
});

Route::get('/compte/{id}', 'UsersController@show')->name('compte');
Route::get('/compte', 'UsersController@update')->name('compte');
Route::post('/comptedetails', 'UsersController@store')->name('newcompte');





