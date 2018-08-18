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
<<<<<<< HEAD
Route::get('details', 'UserController@details');
=======

>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
Route::get('/player', function(){
    $video = "video/ai_tutorial.mp4";
    $mime = "video/mp4";
    $title = "Ai tutorial";

    return view('player')->with(compact('video', 'mime', 'title'));

});
Route::get('/video/{filename}', function ($filename) {
    $videosDir = base_path('resources/assets/videos');
<<<<<<< HEAD
    if (file_exists($filePath = $videosDir."/".$filename.".mp4")) {
=======
    if (file_exists($filePath = $videosDir."/".$filename)) {
>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
        $stream = new VideoStream($filePath);
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }
    return response("File doesn't exists", 404);
});