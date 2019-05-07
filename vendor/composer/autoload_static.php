<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0bc6c3d8862a5bddf14ee3199c6723d7
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Http\\Log\\Src\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Http\\Log\\Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0bc6c3d8862a5bddf14ee3199c6723d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0bc6c3d8862a5bddf14ee3199c6723d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
