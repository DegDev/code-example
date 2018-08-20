<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21f252b5ceb5f561cfead501d32409cf
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Cipher' => __DIR__ . '/../..' . '/core/Cipher.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Message' => __DIR__ . '/../..' . '/core/Message.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Core\\Validator' => __DIR__ . '/../..' . '/core/Validator.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInit21f252b5ceb5f561cfead501d32409cf' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit21f252b5ceb5f561cfead501d32409cf' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21f252b5ceb5f561cfead501d32409cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21f252b5ceb5f561cfead501d32409cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit21f252b5ceb5f561cfead501d32409cf::$classMap;

        }, null, ClassLoader::class);
    }
}