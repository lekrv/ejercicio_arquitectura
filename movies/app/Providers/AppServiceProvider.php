<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laraveltip\Application\Bus\Contracts\Container;
use Laraveltip\Domain\MovieRepository;
use Laraveltip\Infrastructure\Bus\LaravelContainer;
use Laraveltip\Infrastructure\Eloquent\MovieEloquentRepository;

class AppServiceProvider extends ServiceProvider
{
    private $classes = [
        Container::class => LaravelContainer::class,
        MovieRepository::class => MovieEloquentRepository::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->singleton($interface, $implementation);
        }
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
