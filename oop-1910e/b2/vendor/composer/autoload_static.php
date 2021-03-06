<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6073c2f2be4291624f9bc484dddc5e12
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6073c2f2be4291624f9bc484dddc5e12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6073c2f2be4291624f9bc484dddc5e12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6073c2f2be4291624f9bc484dddc5e12::$classMap;

        }, null, ClassLoader::class);
    }
}
