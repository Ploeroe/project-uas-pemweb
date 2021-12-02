<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit459c3db693f549db825bcdf3ffcdf568
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Mews\\Captcha\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Mews\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/mews/captcha/src/Mews/Captcha',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Translation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/translation',
            ),
            'Symfony\\Component\\Security\\Core\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/security-core',
            ),
            'Symfony\\Component\\Routing\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/routing',
            ),
            'Symfony\\Component\\HttpKernel\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-kernel',
            ),
            'Symfony\\Component\\HttpFoundation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-foundation',
            ),
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\Validation' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/validation',
            ),
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Session' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/session',
            ),
            'Illuminate\\Routing' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/routing',
            ),
            'Illuminate\\Http' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/http',
            ),
            'Illuminate\\Hashing' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/hashing',
            ),
            'Illuminate\\Encryption' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/encryption',
            ),
            'Illuminate\\Cookie' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/cookie',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
            'Illuminate\\Cache' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/cache',
            ),
        ),
        'C' => 
        array (
            'Carbon' => 
            array (
                0 => __DIR__ . '/..' . '/nesbot/carbon/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit459c3db693f549db825bcdf3ffcdf568::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit459c3db693f549db825bcdf3ffcdf568::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit459c3db693f549db825bcdf3ffcdf568::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit459c3db693f549db825bcdf3ffcdf568::$classMap;

        }, null, ClassLoader::class);
    }
}
