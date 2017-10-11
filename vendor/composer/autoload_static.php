<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit527ac4efeefa30f29b4b2892e81b1998
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/frmaster/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit527ac4efeefa30f29b4b2892e81b1998::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit527ac4efeefa30f29b4b2892e81b1998::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit527ac4efeefa30f29b4b2892e81b1998::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit527ac4efeefa30f29b4b2892e81b1998::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
