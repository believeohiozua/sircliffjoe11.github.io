<?php

namespace App\Providers;

use App\Contracts\UserContract;
use App\Contracts\AdminContract;
use App\Contracts\CategoryContract;
use App\Repositories\UserRepository;
use App\Contracts\SubscriberContract;
use App\Repositories\AdminRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\SubscriberRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AdminContract::class        =>    AdminRepository::class,
        UserContract::class         =>    UserRepository::class,
        CategoryContract::class         =>    CategoryRepository::class,
        SubscriberContract::class         =>    SubscriberRepository::class,
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
