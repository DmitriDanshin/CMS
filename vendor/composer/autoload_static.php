<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f899222e462271dac6fe907e84597d9
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cms\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cms\\' => 
        array (
            0 => __DIR__ . '/..' . '/cms/core',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f899222e462271dac6fe907e84597d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f899222e462271dac6fe907e84597d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f899222e462271dac6fe907e84597d9::$classMap;

        }, null, ClassLoader::class);
    }
}
