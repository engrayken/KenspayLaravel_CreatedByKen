<?php

namespace App\Providers;

require_once app_path('Helpers/ApiHelpers.php');
// require_once app_path('Helpers/CustomHelpers.php');

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Auth\IAuthRepository;
use App\Interfaces\Billings\IBillingRepository;
use App\Interfaces\User\IUserRepository;

use App\Repositories\Auth\AuthRepository;
use App\Repositories\Billings\BillingRepository;
use App\Repositories\User\UserRepository;

class CustomProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    $this->app->bind(IAuthRepository::class, AuthRepository::class);
    $this->app->bind(IBillingRepository::class, BillingRepository::class);
    $this->app->bind(IUserRepository::class, UserRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
