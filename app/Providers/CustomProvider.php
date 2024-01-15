<?php

namespace App\Providers;

require_once app_path('Helpers/ApiHelpers.php');
// require_once app_path('Helpers/CustomHelpers.php');

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Auth\IAuthRepository;

use App\Repositories\Auth\AuthRepository;

class CustomProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    $this->app->bind(IAuthRepository::class, AuthRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
