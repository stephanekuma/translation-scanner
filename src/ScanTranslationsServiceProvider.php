<?php

namespace Stekos\ScanTranslations;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Stekos\ScanTranslations\Commands\ScanTranslationsCommand;

class ScanTranslationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('translation-scanner')
            ->hasCommand(ScanTranslationsCommand::class);
    }
}
