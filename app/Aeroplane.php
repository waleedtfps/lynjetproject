<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeroplane extends Model
{
    protected $table = 'airplane';
     protected $fillable = [
        'ref','base','_type','yom','yor','seat','is_minimum_2_crews','is_smoking_permitted','is_pet_admitted','is_hot_catering_available_in_cabin',
         'is_owner_approval_needed','is_allowed_to_perform_worldwide','skis_in_luggage_compartment','skis_luggage_number','skis_number',
         'golf_bag_in_luggage_compartment','golf_bag_number','maximum_takeoff_weight','crew_duty_time','included_catering_type','is_flight_attendant_included',
         'is_flight_attendant_included','flight_attendant_number','is_flight_attendant_on_extra','flight_attendant_extra_price','engineer_price','has_bedroom',
         'possible_beds_with_additionnal_mattress','possible_beds_number','has_individual_screen','individual_screen_number','ipad_tablet_number',
         'ipad_tablet_cost_per_item','internet_connection','internet_connection_cost_per_mb','wheelchair_assistance_price','is_africa_permitted',
         'is_waiver_program_member'                  
    ];

    public $timestamps=false;
}
