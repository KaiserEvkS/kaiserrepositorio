<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteacc3e9233d60882862705d7149e0fdb
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteacc3e9233d60882862705d7149e0fdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteacc3e9233d60882862705d7149e0fdb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteacc3e9233d60882862705d7149e0fdb::$classMap;

        }, null, ClassLoader::class);
    }
}