<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d16edaea007497fe061b00e4e2dd519
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d16edaea007497fe061b00e4e2dd519::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d16edaea007497fe061b00e4e2dd519::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d16edaea007497fe061b00e4e2dd519::$classMap;

        }, null, ClassLoader::class);
    }
}
