<?php

namespace Sabinico\BattleNetAPI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sabinico\BattleNetAPI\Commands\BattleNetAPICommand;

class BattleNetAPIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-battlenet-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-battlenet-package_table')
            ->hasCommand(BattleNetAPICommand::class);
    }
}
