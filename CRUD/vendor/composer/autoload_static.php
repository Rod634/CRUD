<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87a550e55824811fb8027458a189851e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87a550e55824811fb8027458a189851e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87a550e55824811fb8027458a189851e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}