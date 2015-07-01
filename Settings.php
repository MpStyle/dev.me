<?php

require_once __DIR__ . '/vendor/autoload.php';

use MToolkit\Core\MApplication;

class Settings
{
    const MINIFY_HTML=true;
    
    public static function run()
    {
        MApplication::setApplicationDirPath(__DIR__);
        ini_set('display_errors', '1');
        error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE);
    }

}

Settings::run();
