<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfa6c310fd51e60d8be7b256908d21d58
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

        spl_autoload_register(array('ComposerAutoloaderInitfa6c310fd51e60d8be7b256908d21d58', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfa6c310fd51e60d8be7b256908d21d58', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfa6c310fd51e60d8be7b256908d21d58::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}