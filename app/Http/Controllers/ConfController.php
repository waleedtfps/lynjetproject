<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class ConfController extends Controller
{
    public function index(){
    	
    	return view('conf.confirmation');
    }
}
