<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirportType;
use App\AirportFuel;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Airport;
use Illuminate\Support\Facades\DB;
class AirportController extends Controller
{
    public function index(){
    	$airports = DB::table('airport')->orderBy('id', 'desc')->Paginate(4);
    	return view('airports.index',compact('airports'));
    }
    public function create(){
    	$airporttypes = AirportType::all();
    	$fuel = AirportFuel::all();
    	return view('airports.create', compact('airporttypes','fuel'));
    }
    public function store(){
    $airports = new Airport;
    $airports->icao = Input::get('field_icao');
    $airports->iata = Input::get('field_iata');
    $airports->dataorigin = Input::get('field_dataorigin');
    $airports->name = Input::get('field_name');
    $airports->countryiso2 = Input::get('field_countryiso2');
    $airports->city = Input::get('field_city');
    $airports->idtype= Input::get('type');
		$airports->latitude = Input::get('field_latitude');
		$airports->longitude = Input::get('field_longitude');
		$airports->elevationfeet = Input::get('field_elevationfeet');
		$airports->groundtype = Input::get('field_groundtype');
		$airports->restricted = Input::get('field_restriction');
		$airports->houropen = Input::get('field_houropen');
		$airports->hourclose = Input::get('field_hourclose');
		$airports->houropensat = Input::get('field_houreopensat');
		$airports->hourclosesat = Input::get('field_houreclosesat');
		$airports->houropensunday = Input::get('field_houreopensunday');
		$airports->hourclosesunday = Input::get('field_houreclosesunday');
		$airports->timezone= Input::get('airport_timezone');
		$airports->address_port = Input::get('airport_address');
		$airports->phone_port = Input::get('airport_phone');
		$airports->groundlength = Input::get('field_groundlength');
		$airports->striptype= Input::get('airport_strip');
		$airports->closed = Input::get('airport_closed');
		$airports->extention = Input::get('extention');
		$airports->ext_comment = Input::get('comment_ext');
		$airports->ext_fee = Input::get('field_extention');
		$airports->ondemand = Input::get('demand');
		$airports->open = Input::get('houropen');
		$airports->close = Input::get('hourclose');
		$airports->twentyfourhour = Input::get('twentyfourhour');
		$airports->open_sat = Input::get('satopen');
		$airports->open_sun = Input::get('sundayopen');
		$airports->quality_port = Input::get('quality_port');
		$airports->idfuel = Input::get('id_fuel');
		$airports->save();
		return Redirect::to('airports')->with('message','Successfully Added!');
    }
    public function edit($id) {
        $airporttypes = AirportType::all();
       $airports =Airport::find($id);
       $fuels = AirportFuel::all();

        	return view('airports.edit', compact('airports','fuels','airporttypes'));

    }
    public function update($id) {
      $airports =Airport::find($id);
      $airports->icao = Input::get('field_icao');
      $airports->iata = Input::get('field_iata');
      $airports->dataorigin = Input::get('field_dataorigin');
      $airports->name = Input::get('field_name');
      $airports->countryiso2 = Input::get('field_countryiso2');
      $airports->city = Input::get('field_city');
      $airports->idtype= Input::get('type');
			$airports->latitude = Input::get('field_latitude');
			$airports->longitude = Input::get('field_longitude');
			$airports->elevationfeet = Input::get('field_elevationfeet');
			$airports->groundtype = Input::get('field_groundtype');
			$airports->restricted = Input::get('field_restriction');
			$airports->houropen = Input::get('field_houropen');
			$airports->hourclose = Input::get('field_hourclose');
			$airports->houropensat = Input::get('field_houreopensat');
			$airports->hourclosesat = Input::get('field_houreclosesat');
			$airports->houropensunday = Input::get('field_houreopensunday');
			$airports->hourclosesunday = Input::get('field_houreclosesunday');
			$airports->timezone= Input::get('airport_timezone');
			$airports->address_port = Input::get('airport_address');
			$airports->phone_port = Input::get('airport_phone');
			$airports->groundlength = Input::get('field_groundlength');
			$airports->striptype= Input::get('airport_strip');
			$airports->closed = Input::get('airport_closed');
			$airports->extention = Input::get('extention');
			$airports->ext_comment = Input::get('comment_ext');
			$airports->ext_fee = Input::get('field_extention');
			$airports->ondemand = Input::get('demand');
			$airports->open = Input::get('houropen');
			$airports->close = Input::get('hourclose');
			$airports->twentyfourhour = Input::get('twentyfourhour');
			$airports->open_sat = Input::get('satopen');
			$airports->open_sun = Input::get('sundayopen');
			$airports->quality_port = Input::get('quality_port');
			$airports->idfuel = Input::get('id_fuel');
			$airports->update();
            return Redirect::to('airports')->with('message','successfully updated!');

    }


    public function delete($id)
    {
        $airports =Airport::find($id);
        $airports->delete();
         return Redirect::to('airports')->with('message','Deleted sucessfully!');
    }

}
