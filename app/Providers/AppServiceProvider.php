<?php

namespace App\Providers;

use App\Document;
//use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        view()->composer('layouts.footer', function ($view) {
            $view->with([
                'years'    => Document::years(),
                'archives' => Document::archives()
            ]);
        });
    }
    
    public function register()
    {
        //
    }
}
