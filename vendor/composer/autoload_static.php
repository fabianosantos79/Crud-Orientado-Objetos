<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b07481ddd43a9b525d2efa55a759276
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b07481ddd43a9b525d2efa55a759276::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b07481ddd43a9b525d2efa55a759276::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
