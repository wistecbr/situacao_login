<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1511d2ba9e5e30c6fe09e19e10bd0404
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

        spl_autoload_register(array('ComposerAutoloaderInit1511d2ba9e5e30c6fe09e19e10bd0404', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1511d2ba9e5e30c6fe09e19e10bd0404', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1511d2ba9e5e30c6fe09e19e10bd0404::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit1511d2ba9e5e30c6fe09e19e10bd0404::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire1511d2ba9e5e30c6fe09e19e10bd0404($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire1511d2ba9e5e30c6fe09e19e10bd0404($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
