<?php
namespace Jinas\Moosun;

class Util
{
    public static function load($filepath)
    {
        static::$items = include('../config/' . $filepath . '.php');
    }
}