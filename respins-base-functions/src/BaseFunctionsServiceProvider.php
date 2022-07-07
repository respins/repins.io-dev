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
         * configuration of base package
         */
        $package
            ->name('base-functions')
            ->hasConfigFile()
            ->hasViews('respins-base-views')
            ->hasRoutes(['base', 'game'])
            ->hasMigration('create_gamesessions_table')
            ->hasCommand(BaseFunctionsCommand::class);
    }
}