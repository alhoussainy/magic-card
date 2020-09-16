<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5c95851ecf392c1f891cc94781f0d3e
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'projetMagicCard\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'projetMagicCard\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5c95851ecf392c1f891cc94781f0d3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5c95851ecf392c1f891cc94781f0d3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
