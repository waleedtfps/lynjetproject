<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Input;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Session;

class AdminController extends Controller
{
	
    public function index(){
    	
    	
    	return view('adminpanel.home');
    }
    public function logout(){
    	Auth::logout();
    	Session::flush();
    	return Redirect::to('login')->with('message','You are logged out log in to continue');
    }
    
}
