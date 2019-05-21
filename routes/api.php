<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '1.0'], function() {

    Route::get('attractions', 'AttractionsController@apiIndex');

    Route::get('attraction/{id}', 'AttractionsController@apiShow');

    Route::post('addattraction', 'AttractionsController@apiStore');

    Route::delete('attraction/{id}', 'AttractionsController@apiDestroy');

    Route::post('editattraction/{id]', 'AttractionsController@apiUpdate');

});


