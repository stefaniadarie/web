<?php

class Config
{
    public static function get($path = null) {
        if ($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);

            foreach($path as $index) {
                if (isset($config[$index])) {
                    $config = $config[$index];
                }
            }

            return $config;
        }
    }
}