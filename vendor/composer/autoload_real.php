<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7d9f23c9ce5d015bc011d7ee3c3de6d4
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

        spl_autoload_register(array('ComposerAutoloaderInit7d9f23c9ce5d015bc011d7ee3c3de6d4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7d9f23c9ce5d015bc011d7ee3c3de6d4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7d9f23c9ce5d015bc011d7ee3c3de6d4::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit7d9f23c9ce5d015bc011d7ee3c3de6d4::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire7d9f23c9ce5d015bc011d7ee3c3de6d4($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire7d9f23c9ce5d015bc011d7ee3c3de6d4($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
