<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitThePerfectWillTRegexFallBackApi
{
    public static $files = array (
        '8b3f8a3ae8e6735c5c18ca84e978b632' => __DIR__ . '/..' . '/rawr/t-regx/helper/helper.php',
        '55f583827cf6fd6711007159a002bff6' => __DIR__ . '/..' . '/rawr/t-regx/test/DataProviders.php',
        '43ebb3deeb9afd982e453a85e2049105' => __DIR__ . '/..' . '/rawr/t-regx/test/Warnings.php',
        '80869277fa6780f754a32adfe46dd3e4' => __DIR__ . '/..' . '/rawr/t-regx/test/ClassWithToString.php',
    );

    public static $prefixesPsr0 = array (
        'S' =>
        array (
            'SafeRegex\\Test\\' =>
            array (
                0 => __DIR__ . '/..' . '/rawr/t-regx/test',
            ),
            'SafeRegex\\' =>
            array (
                0 => __DIR__ . '/..' . '/rawr/t-regx/src',
            ),
        ),
        'C' =>
        array (
            'CleanRegex\\Test\\' =>
            array (
                0 => __DIR__ . '/..' . '/rawr/t-regx/test',
            ),
            'CleanRegex\\' =>
            array (
                0 => __DIR__ . '/..' . '/rawr/t-regx/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitThePerfectWillTRegexFallBackApi::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitThePerfectWillTRegexFallBackApi::$classMap;

        }, null, ClassLoader::class);
    }
}