<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@authenticate');
Route::get('/register','RegistrationController@index');
Route::post('/register',"RegistrationController@create");
Route::get('/confirmation','ConfController@index');

route::get('/','SearchController@index');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);
route::get('email',function(){
	return view('conf.email');
});

//super admin routes
Route::group(['middleware' => 'App\Http\Middleware\RedirectIfNotSuperadmin'], function(){
	route::get('superadmin','SuperAdminController@index');
	route::get('airports','AirportController@index');
	route::get('airports/create','AirportController@create');
	route::post('airports/store','AirportController@store');
	route::get('airports/edit/{id}','AirportController@edit');
    route::post('airports/update/{id}','AirportController@update');
    route::get('airports/delete/{id}','AirportController@delete');
	//route::get('airports/{id}/show','AirportController@show');



	//airports type
	route::get('airportstype','AirportTypeController@index');
	route::get('airportstype/create','AirportTypeController@create');
	route::post('airportstype/store','AirportTypeController@store');
	route::get('airportstype/edit/{id}','AirportTypeController@edit');
	route::post('airportstype/update/{id}','AirportTypeController@update');
	route::get('airportstype/delete/{id}','AirportTypeController@delete');

       //airports fuel
	route::get('fuel','AirportFuelController@index');
	route::get('fuel/create','AirportFuelController@create');
	route::post('fuel/store','AirportFuelController@store');
	route::get('fuel/edit/{id}','AirportFuelController@edit');
	route::post('fuel/update/{id}','AirportFuelController@update');
	route::get('fuel/delete/{id}','AirportFuelController@delete');

      //aeroplanes
  route::get('aeroplanes','AeroplaneController@index');
	route::get('aeroplanes/edit/{id}','AeroplaneController@edit');
	route::get('aeroplanes/show','AeroplaneController@show');
	route::get('aeroplanes/create','AeroplaneController@create');
	route::post('aeroplanes/store','AeroplaneController@store');
	route::get('aeroplanes/update/{id}','AeroplaneController@update');
	route::get('aeroplanes/delete/{id}','AeroplaneController@delete');


});
//admin routes
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{

    Route::get('adminpanel','AdminController@index');
    Route::get('logout','AdminController@logout');
  	Route::get('users',function(){
  		return view('adminpanel.pages.users');
  	});
  	Route::get('companies',function(){
  		return view('adminpanel.pages.companies');
  	});
});
Route::group(['middleware'=> '\App\Http\Middleware\RedirectIfNotCompany'],function(){
	Route::get('logout','CompanyController@logout');
	Route::get('company','CompanyController@index');
	Route::get('profile','CompanyController@edit');
	route::post('profile/update','CompanyController@update');
	//aeroplane
	route::get('company/aeroplanes','companyAirplaneController@index');
	route::get('company/aeroplanes/edit','companyAirplaneController@edit');
	route::get('company/aeroplanes/show','companyAirplaneontroller@show');
	route::get('company/aeroplanes/create','companyAirplaneController@create');
	route::post('company/aeroplanes/store','companyAirplaneController@store');
	route::get('aeroplanes/update/{id}','AeroplaneController@update');
	route::get('aeroplanes/delete/{id}','AeroplaneController@delete');
	//airplane category
	route::get('airplane/category','ArpCategoryController@index');
	route::get('airplane/category/create','ArpCategoryController@create');
	route::post('airplane/category/store','ArpCategoryController@store');
	route::get('category/{id}/edit','ArpCategoryController@edit');
	route::post('category/{id}/update','ArpCategoryController@update');
    route::get('category/{id}/delete','ArpCategoryController@delete');
	//airplane type
	route::get('airplane/type','ArpTypeController@index');
	route::get('airplane/type/create','ArpTypeController@create');
	route::post('airplane/type/create','ArpTypeController@store');
	route::get('airplanetype/edit/{id}','ArpTypeController@edit');
	route::post('airplanetype/update/{id}','ArpTypeController@update');
	route::get('airplanetype/delete/{id}','ArpTypeController@delete');

	//ariplane motor
	route::get('airplane/motor','ArpMotorController@index');
	route::get('airplane/motor/create','ArpMotorController@create');
	route::get('airplane/motor/{id}/edit','ArpMotorController@edit');
	route::post('airplane/motor/{id}/update','ArpMotorController@update');
	route::get('airplane/motor/{id}/delete','ArpMotorController@delete');
	route::post('airplane/motor/store','ArpMotorController@store');
});


// route::get('media','MediaController@index');
// Route::post('upload', 'MediaController@upload');
//
//
// site routes
route::get('search','SearchController@index');
route::post('results','SearchController@result');
route::get('intro',function(){
	return view('site.intro');
});
route::get('contact',function(){
	return view('site.contact');
});
route::get('news',function(){
	return view('site.news');
});
route::get('categories',function(){
	return view('site.categories');
});

route::get('excluded','ExcludedController@create');
route::get('location/store','ExcludedController@store');
