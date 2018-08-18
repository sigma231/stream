<?php

namespace App\Http\Controllers;
use App\media_object;
use Illuminate\Http\Request;

class mediaController extends Controller
{
    //
    public function getAllMedia(){
        $media_object = new media_object;
        $media_object_array = $media_object::all();
        
        return $media_object_array;


    }
    public function getTrending(){

    }
    public function getMediaEpisodes(){

    }
}
