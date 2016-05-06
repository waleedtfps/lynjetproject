<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirplaneType;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\AirplaneCategory;
use App\AirplaneMotor;
use DB;
class ArpTypeController extends Controller
{
    public function index(){
    	$airplanetypes =DB::table('airplanemotor')
            ->join('airplanetype', 'airplanemotor.id', '=', 'airplanetype.id_motor')
            ->select('*')
            ->get();
        
    	return view('aeroplanes.type.index',compact('airplanetypes'));
    }
    public function create(){
        $category = AirplaneCategory::All();
        $motor = AirplaneMotor::All();       
    	return view('aeroplanes.type.create',compact('category','motor'));
    }
    public function store(){
    	
    	$airplanetype = new AirplaneType;
    	$airplanetype->type = Input::get('type');
        $airplanetype->speed = Input::get('speed');
    	$airplanetype->alltitude = Input::get('altitude');
    	$airplanetype->cabinheight = Input::get('cabinheight');
    	$airplanetype->cabinwidth = Input::get('cabinwidth');
    	$airplanetype->cabinlength = Input::get('cabinlength');
    	$airplanetype->range = Input::get('range');
    	$airplanetype->id_category = Input::get('id_category');
        $airplanetype->id_motor = Input::get('id_motor');
    	$airplanetype->save();
    	return redirect::to('airplane/type');
    }
    public function edit($id){
        $airplanetype = AirplaneType::findOrFail($id);
        $category = AirplaneCategory::all();
        $motor = AirplaneMotor::All();
        return view('aeroplanes.type.edit',compact('airplanetype','category','motor'));
    }
    public function update($id){
        
        $airplanetype = AirplaneType::findOrFail($id);
        $airplanetype->type = Input::get('type');
        $airplanetype->speed = Input::get('speed');
        $airplanetype->alltitude = Input::get('altitude');
        $airplanetype->cabinheight = Input::get('cabinheight');
        $airplanetype->cabinwidth = Input::get('cabinwidth');
        $airplanetype->cabinlength = Input::get('cabinlength');
        $airplanetype->range = Input::get('range');
        $airplanetype->id_category = Input::get('id_category');
        $airplanetype->id_motor = Input::get('id_motor');
        $airplanetype->save();
        return redirect::to('airplane/type')->with('message','successfully update!');
    }
    public function delete($id){
        $airplanetype = AirplaneType::find($id);
        $airplanetype->delete();
        return redirect::to('airplane/type')->with('message','successfully deleted!');
    }
}
