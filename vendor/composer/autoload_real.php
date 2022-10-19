<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit49d578c2b0cc8b01021f17aac40e34ee
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

        spl_autoload_register(array('ComposerAutoloaderInit49d578c2b0cc8b01021f17aac40e34ee', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit49d578c2b0cc8b01021f17aac40e34ee', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit49d578c2b0cc8b01021f17aac40e34ee::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}