<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AirportType;
use App\Http\Requests;
use Redirect;
use Illuminate\Support\Facades\Input;
use Session;
class AirportTypeController extends Controller
{
   public function index(){
   	$airporttype = AirportType::all();
   	return view('airports.type.index',compact('airporttype'));
   }
   public function create(){
   	return view('airports.type.create');
   }
   public function store(){
   	$airporttype = new AirportType;
   	$airporttype->type = Input::get('type');
   	$airporttype->save();

   	return redirect::to('airportstype')->with('message','Successfully Added!');
   }
   public function edit($id){
      $airporttype = AirportType::findOrFail($id);
      return view('airports.type.edit', compact('airporttype'));
   }
   public function update($id){
      $airporttype = AirportType::findOrFail($id);
      $airporttype->type = Input::get('type');
      $airporttype->update();
      return redirect::to('airportstype')->with('message','successfully updated!');
   }
   public function delete($id){
      $airporttype = AirportType::find($id);
      $airporttype->delete();
      return redirect::to('airportstype')->with('message','successfully deleted!');
   }
}
