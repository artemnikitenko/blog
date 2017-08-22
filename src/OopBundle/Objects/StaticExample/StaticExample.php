<?php


namespace OopBundle\Objects\StaticExample;


class StaticExample
{
    public static $aNum = 0;

    public static $x = 'World';

    public static function sayHello()
    {
        return 'Hello'. self::$x;
    }

}