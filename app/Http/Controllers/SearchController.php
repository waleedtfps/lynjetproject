<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Http\Requests;
use App\Auth;
use App\Aeroplane;
use App\Excluded;
use DB;
use App\AirplaneType;
use App\AirplaneCategory;
class SearchController extends Controller
{
    public function index(){
         $airplanetypes = DB::table('airplanecategory')
            ->join('airplanetype', 'airplanetype.id_category', '=', 'airplanecategory.id')
            ->select('*')
            ->get();
    	$airports = Airport::all();
        //var_dump($airplanetypes);
    	return view('site.search',compact('airports','airplanetypes'));
    }
    public function result(Request $request){

    	$result = $request->all();
        var_dump($result);
    	$airportsex = DB::table('excluded')->where('location', '=',$result['dpt_city'])->orWhere('location', '=',$result['dst-city'])->get();

        $ids = array();
        $i=0;
    	   foreach($airportsex as $airports){
                
                    $ids[$i] = $airports->id_airplane;
                    $i++;
           }
         $ap=DB::table('airplane')->whereNotIn('id',$ids)->where('id_type','=',$result['arptype'])->get();
        var_dump($ap);    	







//when a user searches for a plane
//he enters departure location
//i will check if the plane is not exlclude for that location
//				first see if the location is present in excluded location or not
//				if it is than which planes are located in that particular location
//if yes then this plane will not be added 
//if no than it will be added 
//and the results will be submitted to the user

    }
}
