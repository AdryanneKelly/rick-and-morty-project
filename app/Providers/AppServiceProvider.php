<?php

namespace App\Providers;

use App\Http\Repositories\RickRepository;
use App\Http\Repositories\RickRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            RickRepositoryInterface::class,
            RickRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
