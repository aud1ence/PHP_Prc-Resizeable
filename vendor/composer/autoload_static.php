<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb175ac66c539f82a47924394922c70c2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Src\\Circle' => __DIR__ . '/../..' . '/src/Circle.php',
        'Src\\Rectangle' => __DIR__ . '/../..' . '/src/Rectangle.php',
        'Src\\Resizeable' => __DIR__ . '/../..' . '/src/Resizeable.php',
        'Src\\Shape' => __DIR__ . '/../..' . '/src/Shape.php',
        'Src\\Square' => __DIR__ . '/../..' . '/src/Square.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb175ac66c539f82a47924394922c70c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb175ac66c539f82a47924394922c70c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb175ac66c539f82a47924394922c70c2::$classMap;

        }, null, ClassLoader::class);
    }
}
