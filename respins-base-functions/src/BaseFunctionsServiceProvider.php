<?php

namespace Respins\BaseFunctions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Respins\BaseFunctions\Commands\BaseFunctionsCommand;

class BaseFunctionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('base-functions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_base-functions_table')
            ->hasCommand(BaseFunctionsCommand::class);
    }
}
