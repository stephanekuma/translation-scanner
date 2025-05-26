<?php

namespace Stekos\ScanTranslations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stekos\ScanTranslations\ScanTranslations
 */
class ScanTranslations extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Stekos\ScanTranslations\ScanTranslations::class;
    }
}
