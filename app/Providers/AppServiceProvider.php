<?php

namespace App\Providers;


use App\Repositories\DocumentRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {
    
    public function boot()
    {
        view()->composer('layouts.footer', function ($view) {
            $repository = new DocumentRepository();
            $view->with([
                            'years'    => $repository->years(),
                            'archives' => $repository->archives(),
                        ]);
        });
    }
    
    public function register()
    {
        $this->app->singleton('DocumentRepository', function () {
            return new DocumentRepository();
        });
    }
}
