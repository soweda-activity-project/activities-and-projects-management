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

Route::post('activity', 'ActivityController@receiveApplication');

Route::get('division/{id}/subdivision', 'ReferenceController@subdivionById');

Route::get('division/{id}/subdivision/{sid}/village', 'ReferenceController@villageById');

Route::get('activity/followup', 'ActivityController@followup');


