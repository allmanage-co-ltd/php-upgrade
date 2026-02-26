<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        dirname(__DIR__) . '/',
    ])
    ->withSkip([
        dirname(__DIR__) . '/inc/vendor',
        dirname(__DIR__) . '/php-upgrade',
    ])
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withSets([
        SetList::PHP_80,
        SetList::PHP_81,
        SetList::PHP_82,
        SetList::PHP_83,
    ])
    ->withPHPStanConfigs([
        dirname(__DIR__) . '/php-upgrade/phpstan.neon',
    ])
    ->withCache(dirname(__DIR__) . '/php-upgrade/rector/cache')
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);