<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a14112a9c590846facf6d3110f5fb38
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a14112a9c590846facf6d3110f5fb38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a14112a9c590846facf6d3110f5fb38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a14112a9c590846facf6d3110f5fb38::$classMap;

        }, null, ClassLoader::class);
    }
}
