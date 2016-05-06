<?php

namespace App\Http\Controllers;
use App\Media;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Aeroplane;
use Auth;
use Redirect;
class MediaController extends Controller
{
    public function index(){
        
        //var_dump($image);
        
        $m=Media::find(33);
        $pic=$m->airplaneimg;
        $path = storage_path();
    	return view('media',compact('pic','path'));
    }
    
}
