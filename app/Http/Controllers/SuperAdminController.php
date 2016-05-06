<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests;
use App\User;
use App\Aeroplane;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
    public function index(){
    	return view('superadmin.index');
    }
    


}
