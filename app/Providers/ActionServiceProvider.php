<?php

namespace App\Providers;

use App\Actions\Orders\CreateNewLink;
use App\Interfaces\Links\CreatesLinks;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CreatesLinks::class, CreateNewLink::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
