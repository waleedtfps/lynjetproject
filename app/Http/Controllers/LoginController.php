<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    public function index(){
    	return view('user.login');
    }
    public function authenticate(){

        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){

            if(Auth::user()->type=='superadmin'){
                return redirect::to('superadmin');
            }
            if(Auth::User()->type=='admin'){

                return Redirect::to('adminpanel');
            }

            if(Auth::User()->confirmation_code== null){

                if(Auth::User()->type=='company'){

                    return Redirect::to('company')->with('message','Welcome');
                }
                return 'please verify your email , first';
            }


            }

        else{
        	return Redirect::back()->withInput(Input::except('password'))->with('message','Email or password is not correct, please try again.');
        }
    }
   
}
