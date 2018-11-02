<?php

namespace App\Providers;

use App\Document;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        view()->composer('layouts.sidebar', function ($view) {
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
