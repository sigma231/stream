<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. 
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->get('/player', 'playerController@streamMedia');
Route::get('/get_media_listing', 'mediaController@getAllMedia');
Route::get('/get_trending', 'mediaController@getTrending');
Route::get('/get_episodes', 'mediaController@getMediaEpisodes');
Route::post('/make_payment', 'paymentController@makePayment');
Route::get('/get_payment', 'paymentController@getPaymentHistory');
Route::get('/get_Media', 'playerController@getStream');
