<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64430b9934df8fa232784c2a6edefb8c
{
    public static $files = array (
        '9fef4034ed73e26a337d9856ea126f7f' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit64430b9934df8fa232784c2a6edefb8c::$classMap;

        }, null, ClassLoader::class);
    }
}
