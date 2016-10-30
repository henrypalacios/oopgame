<?php


namespace App;


class Log
{
    protected static $logger;

    public static function setLogger(Logger $logger)
    {
        static::$logger = $logger;
    }

    public static function info($message, $br = false)
    {
        static::$logger->info($message, $br);
    }
}