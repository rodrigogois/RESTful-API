<?php

namespace ifestas\Providers;

use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\Types\Array_;

class ifestasRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\ifestas\Repositories\CidadeRepository::class, \ifestas\Repositories\CidadeRepositoryEloquent::class);
        $this->app->bind(\ifestas\Repositories\CategoriaRepository::class, \ifestas\Repositories\CategoriaRepositoryEloquent::class);
    }
}

