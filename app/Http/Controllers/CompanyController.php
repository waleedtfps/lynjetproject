<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Aeroplane;
use App\Http\Requests;
use App\Company;
use App\Airport;
use Auth;
use Redirect;
use App\AirplaneType;
use Storage;
use Illuminate\Support\Facades\DB;
use App\Media;
use Session;
use App\Excluded;
use App\User;
class CompanyController extends Controller
{
    public function index(){
    	$aeroplane = DB::table('airplanetype')
            ->join('airplane', function ($join) {
            $join->on('airplane.id_type', '=', 'airplanetype.id')
                 ->where('id_company','=',Auth::user()->id);
        })->paginate(15);
            
        return view('company.aeroplanes.index',compact('aeroplane'));
    }
    public function logout(){
    	Auth::logout();
    	Session::flush();
    	return Redirect::to('login');
    }
    public function edit(){
        $user = User::find(Auth::user()->id);
        $company = Company::where('id','=',Auth::user()->id)->get();   
        return view('company.edit',compact('user','company'));
    }
    public function update(){
        $company = Company::where('id','=',Auth::user()->id)->get();
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
