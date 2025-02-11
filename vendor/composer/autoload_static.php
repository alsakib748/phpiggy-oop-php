<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite69ffe95caa5f09d19e8c80971064ac1
{
    public static $files = array (
        '2b15e1978ffb25e62a9c81dc2399dac7' => __DIR__ . '/../..' . '/src/App/Config/Routes.php',
        '551d6d13daa82fa97688a95c8e4726bf' => __DIR__ . '/../..' . '/src/App/Config/Middleware.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite69ffe95caa5f09d19e8c80971064ac1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite69ffe95caa5f09d19e8c80971064ac1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite69ffe95caa5f09d19e8c80971064ac1::$classMap;

        }, null, ClassLoader::class);
    }
}
