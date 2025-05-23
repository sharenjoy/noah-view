<?php

namespace Sharenjoy\NoahView;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sharenjoy\NoahView\Commands\NoahViewCommand;

class NoahViewServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('noah-view')
            ->hasRoute('web')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommands([
                // NoahViewCommand::class
            ]);
    }
}
