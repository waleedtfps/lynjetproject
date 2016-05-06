<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Http\Requests;
use App\AirplaneCategory;
class ArpCategoryController extends Controller
{
    public function index(){
    	$categories = AirplaneCategory::all();
    	return view('aeroplanes.category.index',compact('categories'));
    }
    public function create(){
    	 return view('aeroplanes.category.create');
    }
   	public function store(){
    	 $category = new AirplaneCategory;
    	 $category->category = Input::get('airplane_category');
    	 $category->min_seats = Input::get('min_seats');
    	 $category->max_seats = Input::get('max_seats');
    	 $category->save();
    	 return redirect::to('airplane/category');
    }
    public function show(){

    }
    public function edit($id){
        $category = AirplaneCategory::findOrFail($id);
        return view('aeroplanes.category.edit',compact('category'));
    }
    public function update($id){
         $category = AirplaneCategory::findOrFail($id);
         $category->category = Input::get('airplane_category');
         $category->min_seats = Input::get('min_seats');
         $category->max_seats = Input::get('max_seats');
         $category->update();
         return Redirect::to('airplane/category')->with('message','successfully update!');
    }
    public function delete($id){
        $category = AirplaneCategory::find($id);
        $category->delete();
         return Redirect::to('airplane/category')->with('message','successfully deleted!');
    }
}
