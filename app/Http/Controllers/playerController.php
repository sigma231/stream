<?php

namespace App\Http\Controllers;
use App\Http\VideoStream;

use Illuminate\Http\Request;

class playerController extends Controller
{
    //
    public function getMediaStream(){
        $videosDir = base_path('resources/assets/videos');
        if (file_exists($filePath = $videosDir."/".$filename)) {
            $stream = new VideoStream($filePath);
        return response()->stream(function() use ($stream) {
            $stream->start();
        });
    }
    return response("File doesn't exists", 404);
    }
    public function saveStreamProgress(){

    }
    public function stopStream(){
        
    }
}
