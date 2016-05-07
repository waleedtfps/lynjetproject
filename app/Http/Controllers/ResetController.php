<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Hash;
use Validator;
use Illuminate\Support\Facades\Redirect;
class ResetController extends Controller
{		     //user forgets his password
			//clicks on forget password
			//get a form where he has to input his email
			//we will look for that email and send cofirmation code to that email
			//than when he clicks on that link
			//we will show the view to add a new password
    public function getEmail(){
    	return view('user.reset.getemail');
    }
    public function postEmail(){
      $user = User::where('email','=',Input::get('email'))->first();
        if($user){
          $reset_token = str_random(30);
          $user->reset_token = $reset_token;
          $user->save();
            Mail::send('user.reset.reset_mail_view',['reset_token' => $reset_token],function($message){
              $message->from('admin@hotmail.com','laravel');
              $message->to(Input::get('email'))
                      ->subject('reset password');
            });
          return view('user.reset.view_message');
        }
        else{
          return redirect::to('login')->with('message','invalid username or email.');
        }
    }
    public function getPass($reset_token){
      $user = User::where('reset_token','=',$reset_token)->first();
      return view('user.reset.new_password_view',compact('reset_token'));
    }
    public function postPass($reset_token){
      $validator = Validator::make(Input::all(),array(
                  'password' => 'required|min:6|confirmed'
      ));
        if($validator->fails()){
          return redirect::to('/newpassword/'.$reset_token)->withErrors($validator);
        }
        else{
          $user = User::where('reset_token','=',$reset_token)->first();
          $user->password = Hash::make(Input::get('password'));
          $user->reset_token = Null;
          $user->update();
          return redirect::to('/login')->with('message','password reset is succesfull');
        }

    }
    // public function reset(Request $request){
    //
    // 	//$abc = $request->all();
    // 	$users = User::where('email','=',$request->email)->first();
    // 		if($users){
    // 			$confirmation_code = str_random(30);
    // 			$users->reset = $confirmation_code;
    // 			$users->save();
    // 			Mail::send('test',['confirmation_code'=> $confirmation_code,'name'=>Input::get('name')],function($message)
		// 					{
		// 					   $message->from('admin@hotmail.com','Laravel');
    //
		// 					    $message->to(Input::get('email'))
    //             ->subject('Verify your email address');
		// 					});
    //
    //
    //
    // 		}
    // 		else {
    //
    // 		}
    //
    //
    // }
    public function confirm($confirmation_code){
    	 $user = User::where('reset','=',$confirmation_code)->first();
    	 return view('form',compact('user','confirmation_code'));
    }
    public function abc(){
    	$user = User::where('reset','=',Input::get('field_confo'))->first();
    	$user->password = hash::make(Input::get('password'));
    	$user->reset = Null;
    	$user->save();
    	return redirect::to('/login')->with('message','password changed successfully');
    }

}
