<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04714250b112c2a16fb5e02051f21939
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Godruoyi\\Snowflake\\' => 19,
        ),
        'A' => 
        array (
            'App\\Class\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Godruoyi\\Snowflake\\' => 
        array (
            0 => __DIR__ . '/..' . '/godruoyi/php-snowflake/src',
        ),
        'App\\Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04714250b112c2a16fb5e02051f21939::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04714250b112c2a16fb5e02051f21939::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04714250b112c2a16fb5e02051f21939::$classMap;

        }, null, ClassLoader::class);
    }
}