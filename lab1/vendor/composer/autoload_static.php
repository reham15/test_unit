<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63ad7f3abb91875487b7cbca21e5fb1b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'factorial' => __DIR__ . '/../..' . '/Model/factorial.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit63ad7f3abb91875487b7cbca21e5fb1b::$classMap;

        }, null, ClassLoader::class);
    }
}
