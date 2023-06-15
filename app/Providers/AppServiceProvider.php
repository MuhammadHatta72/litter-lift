<?php

namespace App\Providers;

use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\UserRepository;
use App\Services\Interfaces\UserServiceInterface;
use App\Repository\Interfaces\UserService;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('isUser', function ($user) {
            return $user->role == 'user';
        });

        // Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        // Service
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }
}
