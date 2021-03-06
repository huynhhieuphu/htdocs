<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2198a9d9e587ba7df05dd0ea9c331e7e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2198a9d9e587ba7df05dd0ea9c331e7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2198a9d9e587ba7df05dd0ea9c331e7e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2198a9d9e587ba7df05dd0ea9c331e7e::$classMap;

        }, null, ClassLoader::class);
    }
}
