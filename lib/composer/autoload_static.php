<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit380fe40c26a053de65287c0f6afa6a15
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MRK_Scbdemo\\' => 12,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MRK_Scbdemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit380fe40c26a053de65287c0f6afa6a15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit380fe40c26a053de65287c0f6afa6a15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit380fe40c26a053de65287c0f6afa6a15::$classMap;

        }, null, ClassLoader::class);
    }
}