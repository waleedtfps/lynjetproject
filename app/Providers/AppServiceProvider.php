<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.header',function($view){
             $view->with('name',Auth::User()->name);
        });
        view()->composer('layouts.sidebar',function($view){
             $view->with('name',Auth::User()->name);
        });

    // view()->composer('superadmin.layouts.sidebar', function($view)
    //     {
            

    //     $view->with('name',Auth::User()->name);
    //     });
    // view()->composer('superadmin.layouts.header', function($view)
    //     {
            

       
    view()->composer('company.layouts.sidebar', function($view)
        {
            

        $view->with('name',Auth::User()->name);
        });
    view()->composer('company.layouts.header', function($view)
        {
            

        $view->with('name',Auth::User()->name);
        });        
            

    // view()->composer('adminpanel.layouts.sidebar', function($view)
    //     {
            

    //     $view->with('name',Auth::User()->name);
    //     });

    // view()->composer('adminpanel.layouts.header', function($view)
    //     {
            
    //     $view->with('name',Auth::User()->name);
    //     });

   

    

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
