<?php

namespace App\Providers;

use App\Http\Interfaces\ProjectRepositoryInterface;
use App\Http\Interfaces\TodoRepositoryInterface;
use App\Http\Repositories\ProjectRepositoryMySql;
use App\Http\Repositories\TodoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
            $this->app->bind(
                ProjectRepositoryInterface::class,
                ProjectRepositoryMySql::class
            );
            $this->app->bind(
                TodoRepositoryInterface::class,
                TodoRepository::class
            );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
