<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a40c6b8bf83f1f40cf4d39a7881f365
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a40c6b8bf83f1f40cf4d39a7881f365::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a40c6b8bf83f1f40cf4d39a7881f365::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3a40c6b8bf83f1f40cf4d39a7881f365::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
