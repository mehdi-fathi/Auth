<?php

namespace App\Providers;

use App\Logic\UserService;
use App\Models\User;
use App\Repositories\User\EloquentUserRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppLayersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->bindInterfaces();

        $this->injectDependencies();

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * @return void
     */
    private function bindInterfaces(): void
    {

        $this->app->bind(
            UserRepository::class,
            EloquentUserRepository::class
        );
    }

    /**
     * @return void
     */
    private function injectDependencies(): void
    {
        $this->app->bind('UserService', function () {
            return new UserService(app('App\Repositories\User\UserRepository'));
        });

    }
}
