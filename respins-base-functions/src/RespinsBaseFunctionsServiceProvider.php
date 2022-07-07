<?php

namespace ase\RespinsBaseFunctions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ase\RespinsBaseFunctions\Commands\RespinsBaseFunctionsCommand;

class RespinsBaseFunctionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('respins-base-functions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_respins-base-functions_table')
            ->hasCommand(RespinsBaseFunctionsCommand::class);
    }
}
