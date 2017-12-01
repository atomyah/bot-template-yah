<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a32ccd9ba974ced33a8ab798f9b9e0f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a32ccd9ba974ced33a8ab798f9b9e0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a32ccd9ba974ced33a8ab798f9b9e0f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
