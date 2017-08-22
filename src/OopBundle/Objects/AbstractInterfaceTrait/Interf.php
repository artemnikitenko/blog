<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 22.08.17
 * Time: 22:47
 */

namespace OopBundle\Objects\AbstractInterfaceTrait;


class Interf extends ShopProductWriter implements TestInterf
{
    public function write()
    {
        $str = $this->sayHello().''.TestInterf::Hello;
        return $str;
    }

    public function sayHello()
    {
        return "Say";
    }


}