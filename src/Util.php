<?php

namespace Jinas\Moosun;

class Util
{
    public static function load($filepath)
    {
        //Checking if the file exist
        if (file_exists('../config/' . $filepath . '.php')) {
            static::$items = include('../config/' . $filepath . '.php');
        } else {
            static::$items = include(base_path() . '/vendor/jinas/moosun/config/' . $filepath . '.php');
        }
    }
}
