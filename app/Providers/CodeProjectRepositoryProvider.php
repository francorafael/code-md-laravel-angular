<?php

namespace CodeProject\Providers;

use Illuminate\Support\ServiceProvider;


class CodeProjectRepositoryProvider extends ServiceProvider
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
        // todas vez que eu requisitar o ClientRepository eu vou instar o Client Repository Eloquent
        $this->app->bind(
            \CodeProject\Repositories\ClientRepository::class,
            \CodeProject\Repositories\ClientRepositoryEloquent::class
        );
    }
}
