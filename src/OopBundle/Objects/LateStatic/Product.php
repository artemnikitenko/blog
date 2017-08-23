<?php


namespace OopBundle\Objects\LateStatic;


class Product
{
    public static function create()
    {
        return new static();
    }

}