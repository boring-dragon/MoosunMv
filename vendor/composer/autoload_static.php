<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad97a4104440384ba6b1533870e74960
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'moosun\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'moosun\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad97a4104440384ba6b1533870e74960::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad97a4104440384ba6b1533870e74960::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
