<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05dd3b30548695e92476a640bb8a4767
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05dd3b30548695e92476a640bb8a4767::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05dd3b30548695e92476a640bb8a4767::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05dd3b30548695e92476a640bb8a4767::$classMap;

        }, null, ClassLoader::class);
    }
}
