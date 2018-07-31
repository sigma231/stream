<?php

use App\Http\VideoStream;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/player', function(){
    $video = "video/ai_tutorial.mp4";
    $mime = "video/mp4";
    $title = "Ai tutorial";

    return view('player')->with(compact('video', 'mime', 'title'));

});
Route::get('/video/{filename}', function ($filename) {
    $videosDir = base_path('resources/assets/videos');
    if (file_exists($filePath = $videosDir."/".$filename)) {
        $stream = new VideoStream($filePath);
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }
    return response("File doesn't exists", 404);
});