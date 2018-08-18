<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\VideoStream;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
=======

>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
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

<<<<<<< HEAD
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

// Route::middleware('auth:api')->get('/player', 'playerController@streamMedia');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('details', 'UserController@details');
});
=======
// Route::middleware('auth:api')->get('/player', 'playerController@streamMedia');
>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
Route::get('/get_media_listing', 'mediaController@getAllMedia');
Route::get('/get_trending', 'mediaController@getTrending');
Route::get('/get_episodes', 'mediaController@getMediaEpisodes');
Route::post('/make_payment', 'paymentController@makePayment');
Route::get('/get_payment', 'paymentController@getPaymentHistory');
Route::get('/get_Media', 'playerController@getStream');
<<<<<<< HEAD
Route::get('/video/{filename}', function ($filename) {
    $videosDir = base_path('resources/assets/videos');
    if (file_exists($filePath = $videosDir."/".$filename.".mp4")) {
        $stream = new VideoStream($filePath);
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }
    return response("File doesn't exists", 404);
});
Route::get('/player', function(){
    $video = "video/ai_tutorial.mp4";
    $mime = "video/mp4";
    $title = "Ai tutorial";

    return compact('video', 'mime', 'title');

});
Route::get('/image/{image_name}', function($image_name){
    $path = public_path().'/images/'.$image_name.'.png';
    return Response::download($path);

});
=======
>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
