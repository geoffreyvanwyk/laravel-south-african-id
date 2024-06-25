<?php

namespace Kokerboom\Laravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kokerboom\Laravel\Commands\LaravelCommand;

class LaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-south-african-id')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-south-african-id_table')
            ->hasCommand(LaravelCommand::class);
    }
}
