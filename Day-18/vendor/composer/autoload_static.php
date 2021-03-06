<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fd922e9d88c952c955b8fa8c2579105
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fd922e9d88c952c955b8fa8c2579105::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fd922e9d88c952c955b8fa8c2579105::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fd922e9d88c952c955b8fa8c2579105::$classMap;

        }, null, ClassLoader::class);
    }
}
