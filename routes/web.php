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



Route::get('/cgv', function () {
    return view('cgv');
});

Route::get('/mentions', function () {
    return view('mentionslegales');
});

Route::get('/ticket', function () {
    return view('ticket');
});
<<<<<<< HEAD

Route::get('/attractions', function () {
    return view('attractions');
});

Route::get('/attraction', function () {
    return view('attraction');
});

Route::get('/log', function () {
    return view('log');
});

Route::get('/reg', function () {
    return view('register');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/compte', function () {
        return view('compte');
    });

>>>>>>> 9bf75b56704981ec772dbddbac0f1d804686fba8
});
