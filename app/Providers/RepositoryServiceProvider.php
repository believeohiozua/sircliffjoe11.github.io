<?php

namespace App\Providers;

use App\Contracts\UserContract;
use App\Contracts\AdminContract;
use App\Repositories\UserRepository;
use App\Repositories\AdminRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AdminContract::class        =>    AdminRepository::class,
        UserContract::class         =>    UserRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
