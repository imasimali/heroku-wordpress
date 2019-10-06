<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit509bb11fe2ac5e75c122df8f8e7590b6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\Blocks\\' => 30,
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Automattic\\WooCommerce\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit509bb11fe2ac5e75c122df8f8e7590b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit509bb11fe2ac5e75c122df8f8e7590b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
