<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirplaneMotor;
use Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Session;

class ArpMotorController extends Controller
{
    public function index(){
    	$motors = AirplaneMotor::all();
    	return view('aeroplanes.motor.index', compact('motors'));
    }
    public function create(){
    	return view('aeroplanes.motor.create');
    }
    public function store(){
        
    	$motors = new AirplaneMotor;
    	$motors->motor = Input::get('motor');
    	$motors->save();
    	return redirect::to('airplane/motor');
    }
    public function edit($id){
        $motors = AirplaneMotor::findOrFail($id);
        return view('aeroplanes.motor.edit',compact('motors'));
    }
     public function update($id){
        $motors = AirplaneMotor::findOrFail($id);
        $motors->motor = Input::get('motor');
        $motors->update();
        return redirect::to('airplane/motor')->with('message','successfully updated!');
    }
    public function delete($id){
        $motors = AirplaneMotor::find($id);
        $motors->delete();
        return redirect::to('airplane/motor')->with('message','successfully deleted!');
    }
}
