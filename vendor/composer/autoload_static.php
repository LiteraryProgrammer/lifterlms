<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit948009ad32ab5f53caef36957b44b289
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit948009ad32ab5f53caef36957b44b289::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit948009ad32ab5f53caef36957b44b289::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
