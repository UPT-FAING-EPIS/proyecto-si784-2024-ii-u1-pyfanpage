<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5bf407e457da48cbb6dde2d9ee0be9b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Asus\\ProyectoSi7842024IiU1Pyfanpage\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Asus\\ProyectoSi7842024IiU1Pyfanpage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5bf407e457da48cbb6dde2d9ee0be9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5bf407e457da48cbb6dde2d9ee0be9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5bf407e457da48cbb6dde2d9ee0be9b::$classMap;

        }, null, ClassLoader::class);
    }
}
