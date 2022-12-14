<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ce234afb4a393f4fb928e0a68adf409
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Market\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Market\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ce234afb4a393f4fb928e0a68adf409::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ce234afb4a393f4fb928e0a68adf409::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ce234afb4a393f4fb928e0a68adf409::$classMap;

        }, null, ClassLoader::class);
    }
}
