<?php


namespace App\Helpers;


class Config
{
    private static $basePath;

    public static function get($key, $default = null)
    {
        self::$basePath = dirname(__FILE__) . '/../../config/';
        $path = explode('.', $key);
        $keys = array_splice($path, -1);
        try {
            $content = include self::$basePath . implode('/', $path) . '.php';
            return isset($content[$keys[0]]) ? $content[$keys[0]] : 'Unable to locate key: '. $keys[0];
        } catch (\Exception $e) {
            die('Not a valid path for config file.');
        }
    }
}