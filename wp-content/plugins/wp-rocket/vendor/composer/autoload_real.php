<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc3c4dda8dbff4b30b13d66da78bd7257
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc3c4dda8dbff4b30b13d66da78bd7257', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc3c4dda8dbff4b30b13d66da78bd7257', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc3c4dda8dbff4b30b13d66da78bd7257::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}