<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Input;
use Redirect;

use App\User;
class CompanyController extends Controller
{
    public function index(){
    	return view('company.home');
    }
    public function logout(){
    	Auth::logout();
    	Session::flush();
    	return Redirect::to('login');
    }
    public function edit(){
        $user = User::find(Auth::user()->id);
        $company = Company::where('id_user','=',Auth::user()->id)->get();   
        return view('company.edit',compact('user','company'));
    }
    public function update(){
        $company = Company::where('id_user','=',Auth::user()->id)->get();
        $company[0]->company_name = Input::get('companyname');
        $company[0]->company_phone = Input::get('companyphone');
        $company[0]->company_zone = Input::get('companyzone');
        $company[0]->company_email = Input::get('companyemail');
        $company[0]->is_supplier = Input::get('supplier');
        $company[0]->is_active = Input::get('is_active');
        $company[0]->save();
           return Redirect::to('profile')->with('message','Profile update successfully.'); 
        
}

}
