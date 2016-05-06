<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
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
class AeroplaneController extends Controller
{
    public function index(){

            $aeroplane = DB::table('airplane')
            ->join('airplanetype', 'airplanetype.id', '=', 'airplane.id_type')
            ->select('*')
            ->orderBy('airplane.id', 'DESC')
            ->paginate(15);




    	return view('aeroplanes.index',compact('aeroplane'));
    }
    public function create(){
         $excluded = Excluded::all();
         $airplanetype = AirplaneType::all();
         $companies = Company::all();
         $airports = Airport::all();
    	return view('aeroplanes.create',compact('airplanetype','companies','excluded','airports'));
    }

    public function store(Request $request){
    	$user = User::find(Auth::user()->id);

    	$aeroplane = new Aeroplane;
    	$aeroplane->ref = Input::get('ref');
    	$aeroplane->base = Input::get('base');
    	$aeroplane->id_type = Input::get('id_type');
        $aeroplane->registration = Input::get('reg');
        $aeroplane->id_company = Input::get('id_company');
    	$aeroplane->yom = Input::get('yom');
    	$aeroplane->yor = Input::get('yor');
        $aeroplane->seat = Input::get('seats');
        $aeroplane->rating = Input::get('rating');
        $aeroplane->is_minimum_2_crews = Input::get('2crew');
        $aeroplane->is_smoking_permitted = Input::get('smoke');
        $aeroplane->is_pet_admitted = Input::get('pet');
        $aeroplane->is_hot_catering_available_in_cabin = Input::get('catering');
        $aeroplane->is_owner_approval_needed = Input::get('owner');
        $aeroplane->is_allowed_to_perform_worldwide= Input::get('worldwide');
    	$aeroplane->skis_in_luggage_compartment = Input::get('skis_luggage');
        $aeroplane->skis_luggage_number = Input::get('luggage_no');
        $aeroplane->skis_number = Input::get('skis_no');
        $aeroplane->golf_bag_in_luggage_compartment = Input::get('golfbag');
        $aeroplane->golf_bag_number = Input::get('golfbag_no');
        $aeroplane->maximum_takeoff_weight = Input::get('takeoff_weight');
        $aeroplane->crew_duty_time = Input::get('crew_time');
        $aeroplane->included_catering_type = Input::get('catering_type');
        $aeroplane->is_flight_attendant_included = Input::get('flight_attendent');
        $aeroplane->flight_attendant_number = Input::get('flight_attendent_no');
        $aeroplane->is_flight_attendant_on_extra = Input::get('attendent_extra');
        $aeroplane->flight_attendant_extra_price = Input::get('attendent_extra_charge');
        $aeroplane->engineer_price = Input::get('engineer_cost');
        $aeroplane->has_bedroom = Input::get('bedroom');
        $aeroplane->possible_beds_with_additionnal_mattress = Input::get('additional_matteres');
        $aeroplane->possible_beds_number = Input::get('beds_no');
        $aeroplane->has_individual_screen = Input::get('Individual_screen');
        $aeroplane->individual_screen_number = Input::get('screens_no');
        $aeroplane->ipad_tablet_number = Input::get('tablet_no');
        $aeroplane->ipad_tablet_cost_per_item = Input::get('tablet_cost');
        $aeroplane->internet_connection = Input::get('Internet_connection');
        $aeroplane->internet_connection_cost_per_mb = Input::get('net_mb_extra');
        $aeroplane->wheelchair_assistance_price = Input::get('Wheelchair_assistance_cost');
        $aeroplane->is_africa_permitted = Input::get('africa');
        $aeroplane->is_waiver_program_member = Input::get('Waiver');
        $aeroplane->quality = Input::get('quality');
        $aeroplane->configuration = Input::get('config');
        $aeroplane->comment = Input::get('comment');
        $aeroplane->active = Input::get('active');
        $aeroplane->red_flag = Input::get('redflag-radio');
        $aeroplane->id_excluded = Input::get('location');
    	$aeroplane->save();
        $files = $request->file('file');
                if(Input::hasFile('file')):

            foreach($files as $file):{
                Storage::disk('public')->put($file->getClientOriginalName(), file_get_contents($file));
                $media = new Media;
                $media->airplaneimg = $file->getClientOriginalName();
                $media->id_airplane = $aeroplane->id;
                $media->save();
            }

            endforeach;

        endif;
        $location  =Input::get('location');
        $location=trim($location);
        $location=rtrim($location,',');//
        $abc = explode(",", $location);

        foreach($abc as $a):
                $excluded = new Excluded;
                $excluded->location = $a;
                $excluded->id_airplane = $aeroplane->id;
                $excluded->save();
            endforeach;

        //return \Response::json(array('success' => true));


    	return redirect('aeroplanes')->with('message','Successfully Added!');





    }
    public function edit($id) {

         $aeroplanes =Aeroplane::findOrFail($id);
         $excluded = Excluded::all();
         $airplanetype = AirplaneType::all();
         $companies = Company::all();
         $airports = Airport::all();
         return view('aeroplanes.edit',compact('airplanetype','companies','excluded','airports','aeroplanes'));



    }


    public function update($id)
    {
        $aeroplane =Aeroplane::find($id);
        $aeroplane->ref = Input::get('ref');
    	$aeroplane->base = Input::get('base');
    	$aeroplane->_type = Input::get('type');
    	$aeroplane->yom = Input::get('yom');
    	$aeroplane->yor = Input::get('yor');
        $aeroplane->seat = Input::get('seats');
        $aeroplane->is_minimum_2_crews = Input::get('2crew');
        $aeroplane->is_smoking_permitted = Input::get('smoke');
        $aeroplane->is_pet_admitted = Input::get('pet');
        $aeroplane->is_hot_catering_available_in_cabin = Input::get('catering');
        $aeroplane->is_owner_approval_needed = Input::get('owner');
        $aeroplane->is_allowed_to_perform_worldwide= Input::get('worldwide');
    	$aeroplane->skis_in_luggage_compartment = Input::get('skis_luggage');
        $aeroplane->skis_luggage_number = Input::get('luggage_no');
        $aeroplane->skis_number = Input::get('skis_no');
        $aeroplane->golf_bag_in_luggage_compartment = Input::get('golfbag');
        $aeroplane->golf_bag_number = Input::get('golfbag_no');
        $aeroplane->maximum_takeoff_weight = Input::get('takeoff_weight');
        $aeroplane->crew_duty_time = Input::get('crew_time');
        $aeroplane->included_catering_type = Input::get('catering_type');
        $aeroplane->is_flight_attendant_included = Input::get('flight_attendent');
        $aeroplane->flight_attendant_number = Input::get('flight_attendent_no');
        $aeroplane->is_flight_attendant_on_extra = Input::get('attendent_extra');
        $aeroplane->flight_attendant_extra_price = Input::get('attendent_extra_charge');
        $aeroplane->engineer_price = Input::get('engineer_cost');
        $aeroplane->has_bedroom = Input::get('bedroom');
        $aeroplane->possible_beds_with_additionnal_mattress = Input::get('additional_matteres');
        $aeroplane->possible_beds_number = Input::get('beds_no');
        $aeroplane->has_individual_screen = Input::get('Individual_screen');
        $aeroplane->individual_screen_number = Input::get('screens_no');
        $aeroplane->ipad_tablet_number = Input::get('tablet_no');
        $aeroplane->ipad_tablet_cost_per_item = Input::get('tablet_cost');
        $aeroplane->internet_connection = Input::get('Internet_connection');
        $aeroplane->internet_connection_cost_per_mb = Input::get('net_mb_extra');
        $aeroplane->wheelchair_assistance_price = Input::get('Wheelchair_assistance_cost');
        $aeroplane->is_africa_permitted = Input::get('africa');
        $aeroplane->is_waiver_program_member = Input::get('Waiver');
        return Redirect::to('aeroplanes')->with('message','updated sucessfully!');
    }

}
