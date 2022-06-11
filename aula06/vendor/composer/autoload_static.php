<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5edf872a31d3d61c5734359eb894feb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5edf872a31d3d61c5734359eb894feb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5edf872a31d3d61c5734359eb894feb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5edf872a31d3d61c5734359eb894feb::$classMap;

        }, null, ClassLoader::class);
    }
}