<?php

namespace LefrantGuillaume\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    	foreach (glob(app_path().'/Helpers/*.php') as $filename){
    		require_once($filename);
    	}
    }
}
