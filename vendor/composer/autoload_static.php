<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit096d2a64f25b40d605ddaef89d3a63b7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit096d2a64f25b40d605ddaef89d3a63b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit096d2a64f25b40d605ddaef89d3a63b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit096d2a64f25b40d605ddaef89d3a63b7::$classMap;

        }, null, ClassLoader::class);
    }
}
