<?php

namespace App\Providers;

use App\Department;
use App\Document;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('layouts.right-sidebar', function($view){
                $view->with('archives', Document::archives());
        });
        view()->composer('layouts.left-sidebar', function($view){
                $view->with('dept', Department::class);
        });
    }

    public function register()
    {
        //
    }
}
