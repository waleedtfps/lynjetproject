<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirportFuel;
use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Session;
class AirportFuelController extends Controller
{
    public function index(){
    	$fuel = AirportFuel::all();
    	return view('airports.fuel.index', compact('fuel'));
    }
     public function create(){
    	return view('airports.fuel.create');
    }
     public function store(){
    	$fuel = new AirportFuel;
    	$fuel->name = Input::get('name');
    	$fuel->save();
    	return redirect::to('fuel')->with('message','Successfully Added!');
    }
    public function edit($id){
        $fuel = AirportFuel::findOrFail($id);
        return view('airports.fuel.edit',compact('fuel'));
    }
    public function update($id){
        $fuel = AirportFuel::findOrFail($id);
        $fuel->name = Input::get('name');
        $fuel->update();
        return redirect::to('fuel')->with('message','successfully updated!');
    }
    public function delete($id){
         $fuel = AirportFuel::find($id);
         $fuel->delete();
          return redirect::to('fuel')->with('message','successfully deleted!');
    }
}
