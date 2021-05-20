<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0811ab58e561d9bbd5a747a20dc4f1cb
{
    public static $files = array (
        '69f9071c435bd99c94378e04dea06224' => __DIR__ . '/../..' . '/config.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0811ab58e561d9bbd5a747a20dc4f1cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0811ab58e561d9bbd5a747a20dc4f1cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0811ab58e561d9bbd5a747a20dc4f1cb::$classMap;

        }, null, ClassLoader::class);
    }
}