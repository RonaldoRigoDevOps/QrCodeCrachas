<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c8eb297f012286295dbbe810fea0abb
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'R' => 
        array (
            'RonaldoR\\QrCodeCrachas\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'RonaldoR\\QrCodeCrachas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c8eb297f012286295dbbe810fea0abb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c8eb297f012286295dbbe810fea0abb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c8eb297f012286295dbbe810fea0abb::$classMap;

        }, null, ClassLoader::class);
    }
}