<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excluded;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
class ExcludedController extends Controller
{
	public function create(){
		return view('excludedlocations.create');
	}
	public function store(){
		$excluded = new Excluded;
		$excluded->location = Input::get('location');
		$excluded->save();
		return Redirect::to('excluded')->with('message','Added successfully');
	}    
}
